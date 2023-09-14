# Algorithems

Its not just making a game that goes into designing software, its creating the underlying framework that's also important.
Below is a simple diagram of the game and its workings.

![Flow diagram](https://i.imgur.com/kRE7aZK.png)

The process can be seperated into 3 main sections, input, update and draw (or poll, tick, renderer). Layer out like this is the best design for building any application, as all of the inputs are handled first, then any game logic happens, then its drawn to the screen.
This is a process that I will follow when creating future applications. Breaking this down further unto routines:

> ### Poll inputs
> - The game logic class will poll the input manager
> - It recursively goes through all the control interfaces, and checks to see if any of the key binds are pressed or held
> - If any of those key binds are held or down, it will call the subroutine in the interface

> ### Game tick
> - Check to see if a window is currently being displayed DO
> > - Poll menu manager
> > - Get the currently displayed menu
> > - Run logic for that menu
>
> - Check to see if Escape is pressed
> > - Activate pause screen
> 
> - Poll the physics manager
> > - Run through all registered physics objects
> > - Poll physics for object
> 
> - Poll camera controller
> - Update camera position based on player position
> - Times numbers by the previous value times a ratio of camera smoothness

> ### Draw Elements
> - Start 2D mode
> - Tick renderer
> > - Draw background using registered renderers
> > - Draw Elements using registered renderers