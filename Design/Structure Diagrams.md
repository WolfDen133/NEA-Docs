# Structure diagrams

![Flow diagram](https://i.imgur.com/kRE7aZK.png)

As stated in the algorithm section, it is important to design a framework that you can create your game on top of us, just creating a game using draw instructions and inputs can be a very inefficient and messy. 
Above is the structure diagram for the underlying framework that I have built for my game. As you can see, it's broken into three main parts, poll, update, draw, And this is important to maintain this main flow as any and all updates need to happen before calculations happen and finally it should be drawn to the screen.

Another notable element of my project would be the use of managers and child objects. I use managers everywhere in my project, and the managers are a way to register store update and on register elements when they are needed.
Below is a flow diagram, representing all of the managers in my game.

![](https://i.imgur.com/A3CMzvw.png)
As you can see from the diagram above, it is easy for me at any point to add any kind of elements to my game at any point.

And this is largely it for the flow diagrams of my game. As you can see everything is laid out sensibly, and it is easy to implement new features using my framework.