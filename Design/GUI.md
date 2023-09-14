> [ [Docs](https://github.com/WolfDen133/NEA-Docs/) | [Project](https://github.com/WolfDen133/NEA-Game) ]
>
> [ [<- Read me](https://github.com/WolfDen133/NEA-Docs/)  |  [Useability features ->](Usability%20Features.md) ] - (1/9)
 
 # GUI (main)

The main design of my game will be largely based off Extreme Pamplona in the fact that.

> ![](https://i.imgur.com/wrErLGJ.png)
> 
> This will be the design of the main game window. From the image above, the main gameplay window will be a foreground layer with obstacles, a player area layer where the camera follows the player, an area where the npc can enter the screen if it gets too close, a parallax background and a level asset layer where the level assets can be shown. There will also be 3 layers at the top where the the game will display various stats about the player, and a timer.

> #### Player Stat Layers
> - The player stats layer will be an area where the user can clearly see the stats of there player, such as cool-downs and jump stamina.
> - The player player upgrades layer will be where the players current power-ups and power-up cool-downs will be displayed.
> - There will also be a timer in he top center.

> #### Level Arena Layer & Floor Layer
> - This is where the sort of foreground of the background will move from right to left, displaying a levels progress with dynamic scenery.
> - I will either be using free online assets or generating my own.
> - The floor layer will also be moving right to left and will be dynamic to the level progress.

> #### Parallax background Layer
> - This will be where there will be a fake 3d parallax layer, that will trick the user into thinking they are moving across a 3d plane with a fixed camera angle.
> - I will either be creating or generating, or using free online sources for these layers.
> - They will move in the opposite direction with distance multipliers to create the illusion of 3d perspective.

> #### Enemy Layer
> - This will be where the enemy comes on the screen if it gets to close.
> - The enemy will be offscreen left when the player outruns it.

> #### Player Layer
> - This will be where the player will be displayed.
> - Will be able to move back and fourth with the camera following, with the background moving right to left.
> - The assets used for the player will be either made by me, or use free open source content.

# Main menu & Settings

>![](https://i.imgur.com/ooouZw7.png)
>![](https://i.imgur.com/lrLv5wB.png)
>
>These are the designs of the main menu and settings screens I want to implement. I will first mark them out with rectangles in the game engine and then add assets and textures later.

> #### Firstly the main menu screen
> - It will consists of a section for the title card where there will be a banner for the game, including its title. It will be positioned at the top left of the screen
> - Next there is the buttons area. There will be a play button that will take the player to the Level select screen. There will also be a button to take the user to the Player stats screen. Then there will be a button to take the user to the settings menu, and lastly a quit button.
> - The background section is where there will be animated transition images of the game, to keep the player engaged with the game straight from boot.
> - Finally there will be a game version information area that will display the current game build version and engine version etc.

> #### Secondly the settings screen
> - It will consist of a menu with different category selectors to change what category of setting you wish to change
> - In the sub categories there will be a variety of sliders, buttons, input boxes, lists etc. to change settings of the game.
> - There will be an apply, reset and close button at the bottom left.
> - There may also be a area at the bottom of the screen that displays some more information about the game version.

# Misc screens

> #### Stats screen (and maybe a leaderboard)
> - I would like to impliment a stats screen so that the player can see what levels they have completed, there time record, there high score and other various stats.
> - I would like to have them sync up with a online database but may not get round to that.

> #### Pause menu
> - A traditional pause menu that shows: resume, restart, game settings and main menu.
> - It will also show current score, current time and pause the game.

And that's largely it, this is where I will be focusing on these sections of the game, adding features where I see fit.

> [ [<- Read me](https://github.com/WolfDen133/NEA-Docs/)  |  [Main menu & Settings ->](Main%20menu%20&%20Settings.md) ] - (1/9)
