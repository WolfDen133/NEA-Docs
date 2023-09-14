# Structure diagrams

![Flow diagram](https://i.imgur.com/kRE7aZK.png)

As stated in the algorithm section, it is important to design a framework that you can create your game on top of us, just creating a game using draw, instructions and inputs can be a very inefficient and messy. 
Above is the structure diagram for the underlying framework that I have built for my game. As you can see, it's broken into three main parts, poll, update, draw, And this is important to maintain this main flow as any and all updates need to happen before calculations happen and finally it should be drawn to the screen.

