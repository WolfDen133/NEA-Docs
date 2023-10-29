# Testing Plan

## Check list

| Action or feature                                                                                                   | Working? |
|---------------------------------------------------------------------------------------------------------------------|----------|
| 1. Main menu with 4 buttons and a title, including game version information and my copywrite                        |          |
| 2. Settings screen with at least 3 sections, that include controls, video settings, audio settings                  |          |
| 3. Working camera system that smoothly follows the player wherever they go on the game canvas                       |          |
| 4. A working physics system that can be applied to any object, with gravity, drag, and collision calculations       |          |
| 5. A working player that can be moved using the control scheme, with velocity and appropriate drag calculations     |          |
| 6. Working texture and audio loading system                                                                         |          |
| 7. Working parallax background renderer that infinitely draws around the camera                                     |          |
| 8. A working object system for adding game objects such as collidable objects and item power-ups                    |          |
| 9. A working level system that can load and save level stats, and load the next level when the player completes one |          |
| 10. A working ai that chases the player                                                                             |          | 

## UI Element Validation

### Buttons

| Input                            | Validation          | Result          |
|----------------------------------|---------------------|-----------------|
| Click anyware outside the button | Should not activate | Doesnt activate |
| Click inside the buttons bounds  | Should activate     | Activates       |

### Sliders

| Input                            | Validation                                                      | Result                              |
|----------------------------------|-----------------------------------------------------------------|-------------------------------------|
| Click anyware outside the slider | Should not activate                                             | Doesnt activate                     |
| Click inside the sliders bounds  | Should activate and slide head should move to the mouse X value | Activates and behaves appropriately |
| If is clicked and mouse is moved | Should move the slider head to the mouse X value                | Moves the slider head               |

### Selector 

| Input                                              | Validation                                    | Result                              |
|----------------------------------------------------|-----------------------------------------------|-------------------------------------|
| Click anyware outside the selector                 | Should not activate                           | Doesnt activate                     |
| Click inside the selectors bounds but no on arrows | Should not activate                           | Doesnt activate                     |
| Click inside the selectors right arrow button      | Should change the value to the next value     | Activates and behaves appropriately |
| Click inside the selectors left arrow button       | Should change the value to the previous value | Activates and behaves appropriately |

### Control field

| Input                                                           | Validation                                                                   | Result                              |
|-----------------------------------------------------------------|------------------------------------------------------------------------------|-------------------------------------|
| Click anyware outside the field                                 | Should not activate                                                          | Doesnt activate                     |
| Click inside the fields bounds                                  | Should activate and allow the user to change the key to the next key pressed | Activates and behaves appropriately |
| If is clicked and key is pressed                                | Should change the key to the next key pressed                                | Changes the key                     |
| Press the backspace button or click outside of the field bounds | Should revert to the old value and stop listening for key presses            | Doesnt change the key and reverts   |