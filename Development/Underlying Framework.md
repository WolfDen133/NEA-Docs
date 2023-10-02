# Development 

> ### A few notes
> - I am going to be creating my game using the object oriented programming method, this allows me to have many custom classes working together to achieve a human readable and maintainable structure to my programming, while also allowing me to create different elements of the game that all work together with minimal re-writes.
> - I will be using interfaces for any and all input logic, this reduces the number of selection statements and duplicated code.
> - Some options such as resolution and control schemes will be using structs, to reduce the amount of registered classes in the game.

## Underlying framework

Firstly I will be creating an underlying framework for my game to run on. This will consist of an input system for reading user inputs, an update system for executing game logic, and a draw loop to display the computed inputs, game logic, and elements to the screen.
This section will be largely based off of the framework I created in my mini-nea found [here](https://github.com/WolfDen133/MiniNEA).

### Window Manager

Firstly I will create a window manager that will be registered in the main class. This window manager will contain all the logic needed to register a window in the underlying operating system and allow me to start drawing elements.

It is important to note the different elements of this class such as VirtualRatio, screenspace camera, actual camera and source & destination rectangles, using the logic in the Draw subroutine, it will be able to draw things to a virtual canvas, while ignoring the actual resolution of the window.
This easily allows me to implement resolution scaling, so that users can choose between different resolutions in there play session.


Please note that we are using the class Renderer.cs as our render manager, so we can keep track of any and all registered renderers, and there current render state.
```csharp
using System.Numerics;
using Velocity.Window.Render;
using Raylib_cs;

namespace Velocity.Window;

public class WindowManager
{
    public const int Width = 1920;
    public const int Height = 1080;
        
    public Camera2D Camera;
    private Camera2D _screenSpaceCamera;
    public float VirtualRatio;

    private RenderTexture2D _target;
    private Rectangle _sourceRectangle;
    private Rectangle _destRectangle;
    
    public void CreateWindow()
    {
        VirtualRatio = Width / Velocity.Settings.Resolution.X;
        _sourceRectangle = new Rectangle(0, 0, Width, -Height);
        _destRectangle = new Rectangle(-VirtualRatio, -VirtualRatio, Velocity.Settings.Resolution.X + VirtualRatio * 2, Velocity.Settings.Resolution.Y + VirtualRatio * 2);

        Raylib.InitWindow(
            (int)Velocity.Settings.Resolution.X,
            (int)Velocity.Settings.Resolution.Y,
            GameConst.Name
        ); 


        _target = Raylib.LoadRenderTexture(Width, Height);
        
        Raylib.SetExitKey(KeyboardKey.KEY_NULL);

        Raylib.SetTargetFPS(60);
        Renderer = new Renderer();
        Camera = new Camera2D();

        Camera.target = new Vector2(0, 0);
        Camera.offset = new Vector2(0, 0);
        Camera.rotation = 0.0f;
        Camera.zoom = 1.0f;

        _screenSpaceCamera = Camera;
    }

    public void DrawLoop()
    {
        while (!Raylib.WindowShouldClose()) 
        {
            Velocity.ControlManager.Tick();
            Velocity.Game.Tick();

            _screenSpaceCamera.target = Camera.target;

            Camera.target = _screenSpaceCamera.target;
            _screenSpaceCamera.target = Vector2.Subtract(Camera.target, Camera.target);
            _screenSpaceCamera.target.X *= VirtualRatio;
            _screenSpaceCamera.target.Y *= VirtualRatio;

            if (Velocity.Game.Closed) break;

            Raylib.BeginTextureMode(_target);

                Raylib.DrawRectangleGradientV(0, 0, Width, Height, new Color(0, 185, 230, 255), new Color(0, 200, 255, 255));

                Raylib.BeginMode2D(Camera);
                
                    Renderer.DrawGame();
                
                Raylib.EndMode2D();

                Renderer.DrawUi();
            
            Raylib.EndTextureMode();

            Raylib.BeginDrawing();

                Raylib.ClearBackground(Color.BLACK);
                Raylib.BeginMode2D(_screenSpaceCamera);
                
                Raylib.DrawTexturePro(_target.texture, _sourceRectangle, _destRectangle, new Vector2(), 0, Color.WHITE);
                Raylib.EndMode2D(); 
            Raylib.EndDrawing();
        }
        
        Raylib.CloseWindow();
    }
    
    public Renderer Renderer { get; set; }
```

### Renderer and sub-renderers

Next we are going to create a renderer and sub-renderers so that we can assign a renderer to game elements, giving them a customizable renderer for any kind of display that we want.

The `Renderer.cs` file will be considered our master render manager, giving the game to have a way to register, keep track of and display elements of the game.

What's important to note is that there are 3/4 different types of sub-renderers:
- Background renderer: Render any background elements, these do not effect the element renderers and will be drawn first to the canvas
- Element renderer: Render elements in the canvas displayed in the game
- UI Renderer: Render all ui elements to the window (not canvas) so that they have a constant position in the window
- (Conditional renderer: Render elements when and only when the renderer has been called by a parent renderer [these could be considered as a child renderer])

```csharp
using Velocity.Window.Render.Renderers;
using Raylib_cs;

namespace Velocity.Window.Render;

public class Renderer
{
    private Dictionary<string, ElementRenderer?> _elementRenderers = new (); 
    private Dictionary<string, UiRenderer> _uiRenderers = new ();
    private Dictionary<string, BackgroundRenderer> _backgroundRenderers = new();

    // Register an in-game element's renderer
    public void RegisterElementRenderer(ElementRenderer? element)
    {
        _elementRenderers.Add(element.Identifier, element);
    }
    
    // Register a screen-space element's renderer
    public void RegisterUiRenderer(UiRenderer element)
    {
        _uiRenderers.Add(element.Identifier, element);
        Console.WriteLine("Registered ui renderer: " + element.Identifier);
    }

    // Register an background element's renderer
    public void RegisterBackgroundRenderer(BackgroundRenderer renderer)
    {
        _backgroundRenderers.Add(renderer.Identifier, renderer);
    }

    // Unregister a renderer
    public void UnregisterRenderer(string id)
    {
        _elementRenderers.TryGetValue(id, out ElementRenderer? elementRenderer);
        _uiRenderers.TryGetValue(id, out UiRenderer? uiRenderer);

        if (elementRenderer != null)
        {
            _elementRenderers.Remove(id);
            return;
        }

        if (uiRenderer != null)
        {
            _uiRenderers.Remove(id);
            return;
        }
    }

    // Enable a renderer
    public void EnableRenderer(string id)
    {
        _elementRenderers.TryGetValue(id, out ElementRenderer? elementRenderer);

        _uiRenderers.TryGetValue(id, out UiRenderer? uiRenderer);

        elementRenderer?.Enable();
        uiRenderer?.Enable();
    }

    // Disable a renderer
    public void DisableRenderer (string id)
    {
        _elementRenderers.TryGetValue(id, out ElementRenderer? elementRenderer);

        _uiRenderers.TryGetValue(id, out UiRenderer? uiRenderer);

        elementRenderer?.Disable();
        uiRenderer?.Disable();
    }

    // Draw the screen-space elements
    public void DrawUi()
    {
        foreach (KeyValuePair<string, UiRenderer> renderer in _uiRenderers)
        {
            if (renderer.Value.IsEnabled)
            {
                renderer.Value.Draw();
            }
        }
    }

    // Draw the game on the canvas
    public void DrawGame()
    {
        foreach (var renderer in _backgroundRenderers)
        {
            if (renderer.Value.IsEnabled) renderer.Value.Draw();
        }

        foreach (KeyValuePair<string, ElementRenderer?> renderer in _elementRenderers)
        {
            if (renderer.Value.IsEnabled) renderer.Value.Draw();
        }
    }
}
```

The `SimpleRenderer.cs` class will be are base to create our other renderers off of.

```csharp
namespace Velocity.Window.Render.Renderers;

// Parent of all the renderers
public class SimpleRenderer
{
    public bool IsEnabled;
    
    public string Identifier { get; set; }

    public SimpleRenderer(string identifier)
    {
        Identifier = identifier;
    }
    
    public void Enable()
    {
        IsEnabled = true;
    }

    public void Disable()
    {
        IsEnabled = false;
    }
    public virtual void Draw () {}
}
```

And below will be all of our different renderers

```csharp
namespace Velocity.Window.Render.Renderers;

// Main renderer for rendering game elements (elements & player)
public class ElementRenderer : SimpleRenderer
{
    public ElementRenderer(string identifier, bool isEnabled = true) : base(identifier)
    {
        IsEnabled = isEnabled;
    }
}
```

```csharp
namespace Velocity.Window.Render.Renderers;

public class BackgroundRenderer : UiRenderer
{
    public BackgroundRenderer(string id, bool isEnabled = true) : base(id)
    {
    }
}
```

```csharp
namespace Velocity.Window.Render.Renderers;

// Renderer that renders all ui layer elements, (always drawn last)
public class UiRenderer : SimpleRenderer
{
    public UiRenderer(string identifier, bool isEnabled = true) : base(identifier)
    {
        IsEnabled = isEnabled;
    }
}
```

```csharp
namespace Velocity.Window.Render.Renderers;

// Renderer that only draws when the logic calls it
public abstract class ConditionalRenderer : UiRenderer
{
    public ConditionalRenderer(string id) : base(id) {}
    
    public new virtual void Draw()
    { }
}
```