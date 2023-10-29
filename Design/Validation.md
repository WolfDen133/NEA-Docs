# Validation

A good example of input validation would be the ui elements, sadly for the the game engine I am using, the ui elements are not something you can just import, so I had to do a lot of trial and error to get the ui elements to work as expected.

For these I will be creating a base UI element class that contains some basic code to validate user inputs when interacting with the ui elements.

One instance of this is a button, there should be code to check if the mouse is over the button, and if the mouse is clicked, then the button should be clicked.

It may look something like this:

```csharp   
public bool IsClicked()
{
    return IsMouseOver() && InputManager.IsMousePressed(MouseButton.Left);
}

public virtual bool IsMouseOver()
{
    Vector2 mousePos = InputManager.GetMousePosition();
    return mousePos.X > Position.X && 
           mousePos.X < Position.X + Dimensions.X &&
           mousePos.Y > Position.Y &&
           mousePos.Y < Position.Y + Dimensions.Y;
}
```

Something like a slider would be a bit more complicated, as it would need to check if the mouse is over the slider, and if the mouse is pressed, then it should move the slider to the mouse position.
We also need to check weather the slide head is will be beyond the bounds of ui element and stop it if this occors.

It could look something like this:
```csharp
public override bool IsClicked()
{
    if (base.IsClicked() || (_held && Raylib.IsMouseButtonDown(MouseButton.MOUSE_BUTTON_LEFT)))
    {
        _held = true;
        SliderOffset = Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio - Position.GetX();
        
        if (SliderOffset < 0) SliderOffset = 0;
        if (SliderOffset > Dimensions.GetX()) SliderOffset = Dimensions.GetX();
    } else _held = false;
    
    return _held;
}
```
`_held` being our variable to detect if the slider is being held if the user is still clicking the element, but move their mouse beyond the limits of the slider.

As you can tell from the elements above I will have to do a lot of validation for the ui elements, and I will be doing this by running the game and seeing if the elements work as expected.

## Testing methods

After creating ui elements and other features in need to be tested I will have to run the game to make sure that they work as expected.
However just testing these elements on their own may be challenging as they may rely on other elements to work as expected, such as the menu classes to hold the elements.
I have created something similar to these in php using the same game engine, so I will be using that as a reference to see if the elements work as expected.
You can see them in [this directory](../Ref/UiElements/UiElements.md).
I will be using iterative development to complete my game so I will be testing the elements as I go along.
This will be mentioned along side my main development in the [Development](../README.md#development) section.

