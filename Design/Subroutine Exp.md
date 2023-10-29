# Subroutine Exp

In my game there are a variety of subroutines that are used to make the game work. I will be going over the main ones here.

## Game

The first of which being the main `Game.cs` file. This is the main class that is run when the game is started. It is responsible for creating the window, and running the main game loop.

```cs
    // Tick() function in all files executes the main logic for that frame
    public void Tick()
    {
        if (Closed) return;
        
        if (MenuManager.IsScreenActive()) MenuManager.Tick();
        
        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE))
        {
            Stop();
            MenuManager.SetActiveWindow(MainMenuScreen.UiId);
            return;
        }

        if (!IsRunning) return;
        
        PhysicsManager.Tick();
        CameraController.Tick();
    }
```
 
This is the main game loop, and it is responsible for running the main logic for the game. It first checks to see if the game is running, and if it is, it will run the physics manager and the camera controller. The physics manager is responsible for running the physics for all of the physics objects, and the camera controller is responsible for moving the camera to follow the player.

The next subroutines are responsible for enabling and disabling the game along with the currently active and inactive renderers.

```cs 
    // Begin function that is called after the level loads
    public void Run()
    {
        LoadLevel();

        Player = new Player.Player(new Vector2(0, FloorHeight - 100));
        PhysicsManager.RegisterObject(Player);

        RenderElements();
        
        Timer.Start();
        Loader.Game.IsRunning = true;
    }

    // Stop function that is called when the game is stopped
    public void Stop()
    {
        IsRunning = false;
        PhysicsManager.Stop();
    
        Unrender();
        
        Player = null;
        
        Timer.Reset();
    }

    // Load renderers 
    private void RenderElements()
    {
        RenderManager.RenderPlayer(Player);
        RenderManager.RenderGameElement(ObjectRenderer);
        RenderManager.RenderGameElement(new FloorRenderer(this));
        RenderManager.RenderGameElement(PowerUpRenderer);
        
        CameraController.Init();
        BackgroundRenderer.IsEnabled = true;
        HudRenderer.IsEnabled = true;
        TimerRenderer.IsEnabled = true;
    }
    
    // Unload renderers
    private void Unrender()
    {
        RenderManager.UnRenderGameElement(new FloorRenderer(this));
        if (Player != null) RenderManager.UnrenderPlayer(Player);
        RenderManager.UnRenderGameElement(ObjectRenderer);
        RenderManager.UnRenderGameElement(PowerUpRenderer);

        BackgroundRenderer.IsEnabled = false;
        HudRenderer.IsEnabled = false;
        TextRenderer.IsEnabled = false;
        TimerRenderer.IsEnabled = false;
        
    }

    // Remove all level data
    private void Reset()
    {
        Stop();
        LoadLevel();
        Run();
    }
```

As you can see, the `Run()` function is responsible for loading the level, and then registering the player with the physics manager. It then renders all of the game elements, and starts the game timer.
And the stop function is responsible for stopping the game, and unrendering all of the game elements.

## Menus

The next subroutines are the menu subroutines. These are responsible for loading and unloading the menus, and running the logic for the menus.

```cs
    private void RegisterMenu(int id, Screens.Window menu)
    {
        _windows.Add(id, menu);
        
        Loader.WindowManager.Renderer.RegisterUiRenderer(menu.Renderer);
    }
    

    public void SetActiveWindow(int id)
    {
        DisableAll();
        CurrentWindow = id;
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window);
        if (window == null) return;
        window.OnDisplay();
        Loader.WindowManager.Renderer.EnableRenderer(window.Renderer.Identifier);
    }
        
    public void Tick()
    {
        if (!IsScreenActive()) return;
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window);
        window?.Tick();
    }
```

From the code above you can see that the `SetActiveWindow()` function is responsible for setting the active window, and disabling all of the other windows. It then gets the current window, and runs the `OnDisplay()` function for that window. It then enables the renderer for that window.
Tick is responsible for running the logic for the current window.
And RegisterMenu is responsible for registering the menu with the menu manager.
Inside the a window class will be subroutines responsible for registering the buttons and inputs for that window.

```cs
    public override void OnDisplay()
    {
        RegisterButtons();
        RegisterInputs();
    }
```

Subroutines responsible for running the logic for the menu.

```cs
    public override void Tick()
    {
        foreach (var pair in Buttons)
        {
            Button? clicked = pair.Value;
            if (clicked == null) continue;

            if (clicked.IsClicked())
            {
                Select(pair.Key);
            }
        }
    }
```

And subroutines responsible for registering the buttons and inputs for that window.

```cs
    private void RegisterButtons()
    {
        Buttons.Add("Play", new Button(new Rectangle(100, 100, 200, 50), "Play", Color.WHITE, Color.BLACK));
        Buttons.Add("Settings", new Button(new Rectangle(100, 200, 200, 50), "Settings", Color.WHITE, Color.BLACK));
        Buttons.Add("Quit", new Button(new Rectangle(100, 300, 200, 50), "Quit", Color.WHITE, Color.BLACK));
    }
```

### Testing the subroutines

Due to the nature of my programming methodology I will have to test the subroutines as I go along. I will be testing the subroutines by running the game and seeing if the subroutines work as expected. I will also be using the debugger to step through the code and see if the subroutines are working as expected.
As it is hard to test the subroutines without running the game, I will be testing them as I go along.