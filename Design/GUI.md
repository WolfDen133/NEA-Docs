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

> ### Parallax background Layer
> - This will be where there will be a fake 3d parallax layer, that will trick the user into thinking they are moving across a 3d plane with a fixed camera angle.
> - I will either be creating or generating, or using free online sources for these layers.
> - They will move in the opposite direction with distance multipliers to create the illusion of 3d perspective.

> ### Enemy Layer
> - This will be where the enemy comes on the screen if it gets to close.
> - The enemy will be offscreen left when the player outruns it.

> ### Player Layer
> - This will be where the player will be displayed.
> - Will be able to move back and fourth with the camera following, with the background moving right to left.
> - The assets used for the player will be either made by me, or use free open source content.