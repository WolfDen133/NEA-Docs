# Algorithems

Its not just making a game that goes into designing software, its creating the underlying framework that's also important.
Below is a simple diagram of the game and its workings.

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

# Physics

Physics and something for every good side scroller has so I will be implementing it in my game. Physics are important because there needs to be a way for things to move around on the screen and interact with each other. So creating a working physics manager along with physics objects will be something I'm going to do.

> ### Physics manager
>
> Firstly, I need to make physics manager, so I can register physical objects and have a game update of every frame.
> Then I will need physics objects so that the physics manager has something to keep track of.

### The basic physics methods are as follows

> #### Velocity base
> We need to create a class that contains a position, dimension and physics properties, such as hasGravity, hasCollision and isEnabled.
> Now we have a base class with properties that we can manipulate so that things can move around the screen.

> #### Velocity changes
> 
> We will define a function so we can change the velocity of a game object. And then will check to see if the added velocity plus the existing velocity of the game object is greater than the max velocity defined the physics constants. 
> If the velocity will be greater than max velocity zone, it will find the difference between the added velocity and the max velocity and set that difference as velocity change.
> Otherwise it will add the velocity to the Objects, current velocity and update. The velocity changed very true, so that any changes calculated, when the frame updates will be added.
> This is necessary, so that objects can have and receive new velocity, depending on how to use it interact with the game.

> #### Global physics
>
> Firstly, we need to check to see if the object has gravity. If the object does have gravity and isn't on the ground, then we will add the gravity velocity to the object, moving it down.
> Secondly, we need to check if the player's foot Y value is equal to the game floor height. If so, cancel the object, Y velocity. 
> If the first case isn't true, then we need to check for a second case. This check will be, checking to see if players foot Y position plus the velocity for the current frame will be greater than or equal to the floor height. If so, set the players y velocity to 0.
> If none of these cases are true, we can set the on-floor variable to false, as the player will not be on the floor.
> Please note that there should be a check implemented to see if the player goes out of bounds on the Y axis, if so, reset the players position, so that they never end up below the floor and fall infinitely.
> Next, we need to check if the player is on the floor, if so, then we need to calculate the X axis friction loss so that the player slows down when in contact with the floor. We will find this out with the following equation `if (!velocityChanged) frictionLossX = (velocity.x / MaxAccelerationSpeed) * Friction;`
> Using the same calculation, we then calculate the air resistance loss and subtract that from the players velocity for both axis.
> Lastly, we want to implement some soft limits to the players velocity so that they don't infinitely increase.
> And since the physics system will be using floats. We will implement a soft minimum value so that when the players velocity reaches less than or equal to 0.05 it will just equal zero.

> #### Collision detection
> Firstly, we will implement an algorithm to check to see if the players position is in the range of a game object. This range will be 1+ the maximum velocity so that the player cannot clip inside of the object if the velocity is greater than a given range.
> Once we have this algorithm, we can perform and check on the objects in the level, to see which ones are closest to the player.
> Once we've acquired this list of objects, we can then perform collision calculations to see whether the player will collide with said object.
> 
> Firstly, we get the players bounds by adding or subtracting the players dimensions divided by two from the players position to find the bounding box of the player.
> For the actual collision detection, it will be largely similar to checking if the player is on the floor, we will check to see if the players x bounds plus the velocity for the given frame equal the collidable objects x bounds. If so, set the players X velocity to 0 to stop the player from moving further inside the object.
> If that case isn't true, then we need to check if the players X velocity plus the players expound lands inside a game object, if so, find the difference between the x bound and the colldable object. Then set the X velocity to that value.
> Then we repeat the same process for the white axis on any new game objects to calculate the Y collision.
> Lastly, we want to check if the player is fully inside a game object if so, move the player outside of the game object to stop any players from slipping inside the object.

Once all of this has been completed, we have finished of velocity detection for the current frame and can then display the result.
And that will largely be it for the algorithms in my project as the majority of the code runs for every frame and doesn't much to any calculation.