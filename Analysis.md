> [ [Docs](https://github.com/WolfDen133/NEA-Docs/) | [Project](https://github.com/WolfDen133/NEA-Game) ]

# NEA-Docs
Documentation for my NEA

This is the documentation for my NEA.
In the content below I will be discussing every section of my project, and will be evaluating all.

## Contents
### Analysis
> - [Problem Identification](#problem-identification)
> - [Client Interviews](#interviews)
> - [Research](#research)
> - [Proposal](#proposal)
> - [Requirements](#requirements)
> - [Success Criteria](#success-criteria)

### Design
> - [GUI](#gui)
> - [Usability Features](#usability-features)
> - [Structure Diagrams](#structure-diagrams)
> - [Subroutine Explanation](#subroutine-exp)
> - [Algorithms](#algorithms)
> - [Inputs & Outputs](#inputs--outputs)
> - [Validation](#validation)
> - [Testing Plan](#testing-plan)

### [Development](#development)
> - [Underlying Framework](#section-1-underlying-framework)
> - [Base game, settings and render manager](#section-2-base-game-settings-and-render-manager)
> - [Sounds, assets and menus](#section-3-sounds-assets-and-menus)
> - [Level files, manager, provider and screen](#section-4-level-files-manager-provider-and-screen)
> - [Physics, player and camera controller](#section-5-physics-player-and-camera-controller)
> - [Various renderers](#section-6-various-renderers)
> - [Object manager, game objects and collision](#section-7-object-manager-game-objects-and-collision)
> - [Renderers & player renderer ext](#section-8-various-renderers--player-renderer-ext)
> - [Statistics and menus ext](#section-9-statistics--menus-ext)

> © Reuben Yates 2023, Frome College


# Analysis

## Problem Identification

In the world of gaming, where players seek thrilling adventures and immersive experiences, the creation of a 2D platformer game holds great promise. This genre captivates players with its dynamic gameplay, challenging obstacles, and pursuit mechanics that keep hearts pounding. Leveraging the computational power of modern technology, developers can bring to life a captivating world where players navigate through levels, evading the relentless pursuit of non-player characters. This computational solution allows for the seamless integration of visually stunning graphics, responsive controls, and intelligent artificial intelligence, offering an exhilarating gaming experience. In this article, we will explore the various aspects of developing a 2D platformer game, from understanding the stakeholders and the suitability of a computational solution, to breaking down the challenges, and finally, the abstraction required to create a captivating and well-balanced gaming experience. So, let's embark on this thrilling journey into the world of a 2D platformer game, where danger lurks around every corner and the pursuit never ends.

> ### Stakeholders
> The intended players for this game would be avid gamers who enjoy platformer games and are looking for a challenging and thrilling experience. The game will primarily target individuals who enjoy the excitement of running through levels and being pursued by non-player characters. However, the stakeholders would be the broader gaming community, as there are also players who would be interested in this type of 2D platformer game.
>
>To ensure accessibility, the game should be designed to cater to players of various skill levels and ages. Implementing adjustable difficulty settings would be ideal to accommodate both casual and hardcore gamers. Making the controls intuitive and user-friendly would also enhance the gaming experience for all players, regardless of their level of expertise.

> ### Why is it suited to a computational solution
> A computational solution is well-suited for creating a 2D platformer game because computers offer powerful processing capabilities, allowing for complex and dynamic gameplay mechanics. The ability to manipulate and render graphics in real-time, calculate physics interactions, and handle player input makes computers the ideal platform for developing and running a game of this nature.
>
> Furthermore, a computational solution enables developers to implement sophisticated artificial intelligence algorithms to control the non-player character's behavior, creating a challenging and engaging experience for players. The game can leverage the computational power of modern hardware to deliver smooth animations, realistic physics simulations, and immersive audiovisual effects.

> ### What a computational solution would lend
> > #### Problem recognition:
> > The challenge in creating a 2D platformer game with a pursuit dynamic lies in ensuring the gameplay remains exciting and balanced. This involves designing intricate levels, implementing responsive controls, and fine-tuning the behavior of the non-player character to provide an appropriate level of challenge without becoming frustratingly difficult.
>
> > #### Problem decomposition
> > Breaking down the problem into smaller steps helps address the main challenge:
> >
> > - Designing visually appealing and diverse levels that offer a balance between difficulty and enjoyment.
> > - Implementing smooth and responsive player controls to provide a satisfying platforming experience.
> > - Developing an intelligent and adaptive non-player character with pursuit mechanics that add tension and excitement to the gameplay.
> > - Incorporating checkpoints, power-ups, and collectibles to enhance replayability and strategic decision-making.
> > - By addressing these individual components, the overall challenge of creating an engaging and balanced 2D platformer game can be effectively tackled.

> ### All together now
> While each step presents its own unique challenges, integrating them harmoniously into a cohesive game experience requires careful consideration. Balancing level design, player controls, non-player character behavior, and additional gameplay elements is essential to ensure the game remains enjoyable and immersive.

> ### Abstraction
> In developing the game, focus should be placed on creating a robust underlying framework that allows for seamless gameplay mechanics. This includes handling player input, managing character animations, detecting collisions, and processing enemy behavior.
>
> Efficient data management is crucial for storing level data, player progress, and non-player character attributes. Implementing optimized algorithms and data structures will help deliver smooth performance and minimize processing overhead.
>
> Moreover, the game should be designed with scalability in mind, allowing for the addition of new levels, enemies, and gameplay features as the project evolves. By considering these factors and employing efficient computational techniques, the development of a captivating and challenging 2D platformer game can be realized.


## Interviews

### Interviews and User Data
When creating a 2D side-scroller game where a non-player character (NPC) chases the player through a level, it is important to gather input from potential users. Their feedback and preferences will be valuable in shaping the game's features and overall experience.

> ### Questions
> I will be asking a variety of questions related to the 2D side-scroller game design and gameplay mechanics.
>
> 1. How often do you play video games?
> 2. How often do you play 2D games?
> 3. What gaming devices do you use, and how many?
> 4. Would you enjoy the challenge of being chased by an NPC in a side-scrolling game, and why?
> 5. Would you like to have different levels or environments in the game, and why?
> 6. Would you prefer the NPC to chase you throughout the entire game or only in specific sections?
> 7. Do you want the NPC's behavior to be unbiased and consistent, or do you prefer random variations?
> 8. If there was an option to support the game's development with a small amount of money, would you consider it?
> 9. If you had never heard of a 2D side-scroller game with a chasing NPC, would you find the concept intriguing?

> ### Client 1
> - Subject: Mateusz Burzynski
> - Age: 16
> - Occupation: Unemployed
> - Reasoning: I want to interview Mati because he represents a perspective of having a lot of time to spend on gaming and can provide an unbiased opinion.
> 1. Quite often. I play games daily.
> 2. I enjoy 2D games, probably around 50% of my gaming time.
> 3. PC & Phone
> 4. Yes, it would make the game more thrilling and keep me engaged.
> 5. Definitely! Different levels and environments would add variety and make the game more interesting.
> 6. I think it would be more exciting if the NPC chases me throughout the entire game.
> 7. I prefer the NPC's behavior to be unbiased and consistent. It adds a sense of fairness and allows for strategic planning.
> 8. Absolutely! I would support the game if it offers perks or additional content.
> 9. Yes, it sounds like a unique and exciting concept for a 2D side-scroller game. I would definitely be intrigued by it.

> ### Client 2
> - Subject: Lochan Presley
> - Age: 20
> - Occupation: Part-time bar & shop work
> - Reasoning: I want to interview Lochan to gain insights into how young adults perceive 2D side-scroller games and their preferences in game design.
>
> 1. I play video games regularly, usually a few times a week.
> 2. I enjoy playing 2D games, they make up a significant portion of my gaming library.
> 3. Primarily on my phone.
> 4. Yes, being chased by an NPC adds excitement and adds an additional layer of challenge to the game.
> 5. Definitely! Different levels and environments keep the game fresh and prevent it from becoming repetitive.
> 6. I think it would be interesting if the NPC chases me in specific sections rather than throughout the entire game. It would create dynamic gameplay moments.
> 7. I prefer some random variations in the NPC's behavior. It adds unpredictability and replay value to the game.
> 8. Yes, if the game offers enticing perks or rewards, I would consider supporting its development.
> 9. As a fan of 2D games, the concept of a side-scroller with a chasing NPC sounds intriguing. It would definitely catch my attention.

> ### Client 3
> - Subject: Louis Tayler
> - Age: 16
>
> 1. I play video games whenever I have free time, which is quite often.
> 2. I enjoy playing 2D games, especially on my Xbox.
> 3. I primarily use my Xbox, phone, and iPad for gaming.
> 4. Yes, being chased by an NPC would make the game more thrilling and keep me on my toes.
> 5. Yes, having different levels and environments would add variety and make the game more engaging.
> 6. I prefer the NPC to chase me throughout the entire game. It creates a consistent sense of urgency and challenge.
> 7. I prefer the NPC's behavior to be unbiased and consistent. It allows me to strategize and develop tactics to overcome the challenge.
> 8. No, I wouldn't be interested in supporting the game's development with money. I would rather enjoy it for free.
> 9. While I haven't heard of a 2D side-scroller with a chasing NPC before, the concept does sound intriguing. It would add a unique twist to the gameplay.

> ### Client 4
> - Subject: Amy Barter
> - Age: 18
>
> 1. I play video games every day.
> 2. I enjoy playing 2D games, especially on my phone. They are my go-to for casual gaming.
> 3. I use my laptop, phone, and iPad for gaming.
> 4. Yes, being chased by an NPC would add excitement and a sense of urgency to the game.
> 5. Absolutely! Different levels and environments keep the game interesting and prevent it from getting monotonous.
> 6. I would prefer the NPC to chase me throughout the entire game. It would maintain a consistent challenge and keep me engaged.
> 7. I prefer the NPC's behavior to be unbiased and consistent. It allows for fair gameplay and strategic decision-making.
> 8. Yes, I would consider supporting the game's development if it offers attractive perks or additional content.
> 9. Yes, the concept of a 2D side-scroller with a chasing NPC sounds intriguing. It would add an extra layer of intensity and make the game more exciting.


## Research

### Existing similar solutions

#### [Extreme Pamplona](https://www.crazygames.com/game/extreme-pamplona)
![Extreme Pamplona](https://i.imgur.com/wEtbH3Q.png)

#### Overview
First, let's evaluate Extreme Pamplona, a 2D side scroller game where the player is chased by an NPC. In this game, the player controls a character who must navigate through various obstacles while being pursued by a relentless enemy. The game features fast-paced gameplay, challenging levels, and a thrilling chase experience. The objective is to survive as long as possible without being caught by the NPC.

#### Ideas that I could adopt
- The concept of being chased by an NPC in a 2D side scroller can create an exciting and intense gameplay experience. Implementing a similar chase mechanic in my game can provide players with a thrilling challenge.
- Extreme Pamplona's focus on quick reflexes and precise controls can be a valuable inspiration for my game. Implementing responsive controls and designing challenging levels can enhance the gameplay experience.
- The visual design and art style of Extreme Pamplona can serve as inspiration for creating visually appealing graphics in my game. Captivating visuals can help engage players and immerse them in the game world.

#### [Cuphead](https://en.wikipedia.org/wiki/Cuphead)
![Cuphead](https://i.imgur.com/7nPayu0.png)

#### Overview
Next, let's explore Cuphead, a popular 2D side scroller game known for its unique art style and challenging gameplay. In Cuphead, players control the titular character and embark on a series of boss battles in a hand-drawn, animated world inspired by 1930s cartoons. The game features intricate boss patterns, tight platforming, and a high level of difficulty.

#### Ideas that I could adopt
- Cuphead's hand-drawn art style and animation are exceptional. Incorporating a visually distinct art style in my game can make it stand out and appeal to players.
- The challenging gameplay mechanics in Cuphead, such as precise timing and pattern recognition, can add depth and replayability to my game. Designing challenging levels and boss encounters can provide a satisfying gameplay experience.
- Cuphead's focus on boss battles can be an interesting approach to consider. Incorporating epic boss encounters in my game can create memorable moments and keep players engaged.

## Proposal

### My Initial Proposal Based on the Research:

My application will be a 2D side scroller/platformer game where players are pursued by an NPC throughout the levels. The game will incorporate elements inspired by games like Extreme Pamplona and Cuphead. Players will navigate through challenging levels, avoiding obstacles, and using various mechanics to escape from the relentless NPC chasing them. The game will provide a thrilling and intense gameplay experience.

The game will be developed using the raylib framework in C#. Raylib is a simple and easy-to-use game development library that provides powerful features for creating 2D games. It will allow us to build a visually appealing and interactive game with smooth animations and responsive controls.

For the backend, I will utilize C## to manage the game logic, including the NPC's behavior, level progression, and player interactions. The frontend will consist of the game's graphical user interface (GUI) and will be developed using raylib's rendering capabilities. This will enable us to create visually stunning levels, character animations, and special effects.

To ensure an immersive gaming experience, I will focus on creating dynamic sound effects and background music using raylib's audio capabilities. These audio elements will enhance the gameplay and contribute to the overall atmosphere of the game.

While the initial version of the game will be developed for desktop platforms, such as Windows, Mac, and Linux, we will explore the possibility of porting it to other platforms, including mobile devices, using raylib's multi-platform support.

> #### Limitations
>
> - The game will be limited to platforms supported by raylib and its dependencies.
> - Customizability options may be limited compared to more extensive game development frameworks.
> - Native integration with other services may require additional development efforts.

> #### Further Feedback from Stakeholders
> This is an email I wrote to my clients based on the interviews conducted.
>
> ```text
> Dear Valued Clients,
>
> I wanted to take a moment to express my gratitude for your interest in our upcoming game. Your feedback and support are invaluable to us as we work on developing and improving the platform.
> 
> Our goal is to create an exciting 2D side scroller/platformer game that provides a thrilling gameplay experience, inspired by games like Extreme Pamplona and Cuphead. The game will feature intense levels where players are chased by an NPC, requiring quick reflexes and strategic maneuvers to escape.
> 
> To bring this vision to life, we have chosen to develop the game using the raylib framework in C#. Raylib provides a powerful and user-friendly environment for creating visually appealing and interactive 2D games. With its capabilities, we can deliver smooth animations, responsive controls, and captivating visuals.
>
> The game's backend, written in C#, will handle the game logic, including the behavior of the chasing NPC, level progression, and player interactions. The frontend will utilize raylib's rendering capabilities to create visually stunning levels, character animations, and special effects.
> 
> We understand the importance of audio in creating an immersive gaming experience. Therefore, we will focus on integrating dynamic sound effects and background music using raylib's audio capabilities. These audio elements will enhance the gameplay and contribute to the overall atmosphere of the game.
>
> Initially, the game will be developed for desktop platforms, such as Windows, Mac, and Linux, taking advantage of raylib's multi-platform support. However, we will explore the possibility of expanding to other platforms, including mobile devices, to reach a broader audience.
> 
> Your continued feedback and ideas are highly appreciated as we strive to deliver the best possible gaming experience. We look forward to keeping you updated on our progress and involving you in the development process.
> 
> Thank you once again for your support and interest. We are excited about this project and are committed to providing any firther updates to the project.
> 
> Yours, Reuben Yates.
> ```
> #### Client 1
>
> ```text
> Dear Reuben Yates,
> 
> Thank you for reaching out and expressing your gratitude for our interest in your upcoming game. We are thrilled to hear about your plans and the exciting gameplay experience you aim to deliver. The choice of using the raylib framework in C## for game development, with its visually appealing 2D capabilities and multi-platform support, shows great promise. We look forward to experiencing the smooth animations, responsive controls, and captivating visuals that raylib offers. The integration of dynamic sound effects and background music using raylib's audio capabilities will undoubtedly enhance the immersion and overall atmosphere of the game.
>
> We appreciate your commitment to seeking continued feedback and ideas from stakeholders like us. As avid gamers, we are excited to contribute to the development process and provide our insights to help shape the best possible gaming experience. Thank you for keeping us informed and involved in your project. We eagerly anticipate further updates and are genuinely excited about the progress.
>
> Best regards,
> Mateusz Burznski
> ```


## Requirements

> ### System requirements
>
> #### Hardware requirements
> - A Windows computer capable of running the game smoothly.
>
> #### Software requirements
> - The game will be initially developed for Windows platforms.
> - We will explore the possibility of expanding to other platforms, including mobile devices and Mac, to reach a broader audience.

> ### Stakeholder requirements
>
> #### Design
> | Requirement                                                                      | Explanation                                                                                  |
> |----------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------|
> | A visually appealing and immersive game environment                              | To create an engaging experience as players navigate through the 2D sidescroller/platformer. |
> | Fluid and responsive character controls                                          | Essential for precise movements and evading the chasing NPC effectively.                     |
> | Engaging level design with challenging obstacles and puzzles                     | To provide an exciting and dynamic gameplay experience.                                      |
> | Stunning animations and visual effects                                           | Enhancing the overall aesthetic appeal and immersion in the game.                            |
> | Intuitive user interface for easy navigation and understanding of game mechanics | Ensuring players can easily understand and interact with the game.                           |
>
> #### Functionality
>
> | Requirement                                                                | Explanation                                                                                    |
> |----------------------------------------------------------------------------|------------------------------------------------------------------------------------------------|
> | A challenging NPC AI that dynamically chases the player through the levels | To create tension and excitement as players strive to outmaneuver the pursuing NPC.            |
> | Responsive collision detection and physics simulation                      | Ensuring realistic interactions between the player, NPC, and the game environment.             |
> | Collectibles, power-ups, and rewards throughout the levels                 | Offering incentives for exploration and enhancing the gameplay experience.                     |
> | Level progression and unlockable content                                   | Allowing players to advance through different levels and unlock additional game elements.      |
> | Save and load functionality to track player progress                       | Enabling players to continue their game from where they left off.                              |
> | Sound effects and background music to enhance the immersive experience     | Adding depth and atmosphere to the gameplay and amplifying the overall enjoyment.              |
> | Support for various input methods, including keyboard and gamepad          | Providing flexibility for players to choose their preferred control method.                    |
> | Option to adjust game settings, including audio, graphics, and controls    | Allowing players to customize their gaming experience based on their preferences and hardware. |


## Success criteria

| Criteria                                                          | Evidence                                                                                                          |
|-------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------|
| A main gameplay area                                              | A screenshot of the game showing the player character and the level design                                        |
| A way to easily access player information during gameplay         | A screenshot showing a HUD element displaying player stats and information                                        |
| An easy way to show the players power-ups in the game             | A screenshot of a power-up selection screen where players can choose and activate different abilities             |
| An easy way to navigate through different levels or stages        | A screenshot of a level selection menu where players can choose the desired level or stage to play                |
| A player profile screen displaying game progress and achievements | A screenshot of a player profile screen showing game statistics, unlocked achievements, and progress              |
| An easy way to start a new game or play previous levels           | A screenshot of a game menu with options to start a new game or play previous levels                              |
| An easy way to adjust game settings and controls                  | A screenshot of a settings menu where players can customize game options, including graphics, audio, and controls |
| An easy way to navigate the menus                                 | A screenshot of the main menu screen displaying readable buttons                                                  |


# Design

## Algorithms

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

### Physics

Physics and something for every good side scroller has so I will be implementing it in my game. Physics are important because there needs to be a way for things to move around on the screen and interact with each other. So creating a working physics manager along with physics objects will be something I'm going to do.

> #### Physics manager
>
> Firstly, I need to make physics manager, so I can register physical objects and have a game update of every frame.
> Then I will need physics objects so that the physics manager has something to keep track of.

#### The basic physics methods are as follows

> ##### Velocity base
> We need to create a class that contains a position, dimension and physics properties, such as hasGravity, hasCollision and isEnabled.
> Now we have a base class with properties that we can manipulate so that things can move around the screen.

> ##### Velocity changes
>
> We will define a function so we can change the velocity of a game object. And then will check to see if the added velocity plus the existing velocity of the game object is greater than the max velocity defined the physics constants.
> If the velocity will be greater than max velocity zone, it will find the difference between the added velocity and the max velocity and set that difference as velocity change.
> Otherwise it will add the velocity to the Objects, current velocity and update. The velocity changed very true, so that any changes calculated, when the frame updates will be added.
> This is necessary, so that objects can have and receive new velocity, depending on how to use it interact with the game.

> ##### Global physics
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

> ##### Collision detection
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

## GUI

The main design of my game will be largely based off Extreme Pamplona in the fact that.

> ![](https://i.imgur.com/wrErLGJ.png)
>
> This will be the design of the main game window. From the image above, the main gameplay window will be a foreground layer with obstacles, a player area layer where the camera follows the player, an area where the npc can enter the screen if it gets too close, a parallax background and a level asset layer where the level assets can be shown. There will also be 3 layers at the top where the the game will display various stats about the player, and a timer.

> ### Player Stat Layers
> - The player stats layer will be an area where the user can clearly see the stats of there player, such as cool-downs and jump stamina.
> - The player player upgrades layer will be where the players current power-ups and power-up cool-downs will be displayed.
> - There will also be a timer in he top center.

> ### Level Arena Layer & Floor Layer
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

## Main menu & Settings

>![](https://i.imgur.com/ooouZw7.png)
>![](https://i.imgur.com/lrLv5wB.png)
>
>These are the designs of the main menu and settings screens I want to implement. I will first mark them out with rectangles in the game engine and then add assets and textures later.

> ### Firstly the main menu screen
> - It will consists of a section for the title card where there will be a banner for the game, including its title. It will be positioned at the top left of the screen
> - Next there is the buttons area. There will be a play button that will take the player to the Level select screen. There will also be a button to take the user to the Player stats screen. Then there will be a button to take the user to the settings menu, and lastly a quit button.
> - The background section is where there will be animated transition images of the game, to keep the player engaged with the game straight from boot.
> - Finally there will be a game version information area that will display the current game build version and engine version etc.

> ### Secondly the settings screen
> - It will consist of a menu with different category selectors to change what category of setting you wish to change
> - In the sub categories there will be a variety of sliders, buttons, input boxes, lists etc. to change settings of the game.
> - There will be an apply, reset and close button at the bottom left.
> - There may also be a area at the bottom of the screen that displays some more information about the game version.

## Misc screens

> #### Stats screen (and maybe a leaderboard)
> - I would like to impliment a stats screen so that the player can see what levels they have completed, there time record, there high score and other various stats.
> - I would like to have them sync up with a online database but may not get round to that.

> #### Pause menu
> - A traditional pause menu that shows: resume, restart, game settings and main menu.
> - It will also show current score, current time and pause the game.

And that's largely it, this is where I will be focusing on these sections of the game, adding features where I see fit.

## Inputs & Outputs

| Input                             | Process                                                                                                                                  | Output                                                                                                 |
|-----------------------------------|------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------|
| Control inputs (such as WASD)     | Add to the players velocity to move the player, also checking for collision of any objects or the floor                                  | Move the player to the expected location                                                               |
| Command inputs such as pause/play | Have any and all windows processed for the given action and trigger any handlers                                                         | The menu should appear/disappear depending on the action                                               |
| Read the settings file            | Process and interoperate the input file and read the syntax of the file format                                                           | Have a readable settings class so that the user has a user session with all of there expected settings |
| Player actions such as interact   | If the player is next to or in the given interact radius of an interactable object then process the object applying any modifiers needed | The player will have the modifiers such as a speed boost                                               |
| Clicks to the screen on menu's    | Process where the mouse is and interoperate if the mouse is over any ui elements, if so trigger the ui elements                          | Ui elements will trigger and update there respective setting and or action                             |

## Key Variables

| Variable         | Usage & purpose                                                                    | File location                           |
|------------------|------------------------------------------------------------------------------------|-----------------------------------------|
| IsRunning        | Master control variable to see if the game is running                              | Velocity/Game/Game.cs                   |
| ActiveWindow     | The currently active window to be displayed and updated                            | Velocity/Ui/MenuManager.cs              |
| IsClosed         | Variable to control whether the screen needs to be closed                          | Velocity/Game/Game.cs                   |
| PlayerState      | Variable to control the players current state, e.g. alive/dead                     | Velocity/Player/Player.cs               |
| Player           | The player object                                                                  | Velocity/Game/Game.cs                   |
| Settings         | The settings object                                                                | Velocity/Settings.cs                    |
| Physics          | The physics manager                                                                | Velocity/Game/Physics/PhysicsManager.cs |
| CameraController | The camera controller object responsible for controlling the camera automatically  | Velocity/Game/CameraController.cs       |

## Structure Diagrams

![Flow diagram](https://i.imgur.com/kRE7aZK.png)

As stated in the algorithm section, it is important to design a framework that you can create your game on top of us, just creating a game using draw instructions and inputs can be a very inefficient and messy.
Above is the structure diagram for the underlying framework that I have built for my game. As you can see, it's broken into three main parts, poll, update, draw, And this is important to maintain this main flow as any and all updates need to happen before calculations happen and finally it should be drawn to the screen.

Another notable element of my project would be the use of managers and child objects. I use managers everywhere in my project, and the managers are a way to register store update and on register elements when they are needed.
Below is a flow diagram, representing all of the managers in my game.

![](https://i.imgur.com/A3CMzvw.png)
As you can see from the diagram above, it is easy for me at any point to add any kind of elements to my game at any point.

And this is largely it for the flow diagrams of my game. As you can see everything is laid out sensibly, and it is easy to implement new features using my framework.

## Subroutine Exp

In my game there are a variety of subroutines that are used to make the game work. I will be going over the main ones here.

### Game

The first of which being the main `Game.cs` file. This is the main class that is run when the game is started. It is responsible for creating the window, and running the main game loop.

```cs
    // Tick() function in all files executes the main logic for that frame
    procedure Tick():
    
        if Closed: return // If the window is closed, return
        
        if MenuManager.IsScreenActive(): MenuManager.Tick()
        
        if IsKeyPressed(KEY_ESCAPE): // If escape is pressed, pause the game
            Pause()
            MenuManager.SetActiveWindow(PauseMenuScreen.UiId)
            return
        endif
            
      
        

        if !IsRunning: return // If the game is not running, dont run the game logic
        
        PhysicsManager.Tick()
        CameraController.Tick()
    endprocedure
    
```

This is the main game loop, and it is responsible for running the main logic for the game. It first checks to see if the game is running, and if it is, it will run the physics manager and the camera controller. The physics manager is responsible for running the physics for all of the physics objects, and the camera controller is responsible for moving the camera to follow the player.

The next subroutines are responsible for enabling and disabling the game along with the currently active and inactive renderers.

```cs 
    // Begin function that is called after the level loads
    procedure Run():
    
        LoadLevel()

        Player = new Player(new Vector2(0, FloorHeight - 100)) // Create a new player object
        PhysicsManager.RegisterObject(Player) // Register the player with the physics manager

        RenderElements() // Render all of the game elements
        
        Timer.Start() // Start the game timer
        IsRunning = true // Set the game to running
    endprocedure

    // Stop function that is called when the game is stopped
    procedure Stop():
    
        IsRunning = false // Set the game to not running
        PhysicsManager.Stop() // Stop the physics manager
    
        Unrender() // Unrender all of the game elements
        
        Player = null // Set the player to null
        
        Timer.Reset() // Reset the game timer
    endprocedure

    // Load renderers 
    procedure RenderElements():
    
        RenderManager.RenderPlayer(Player) // Render the player
        RenderManager.RenderGameElement(ObjectRenderer) // Render all the gae objects
        RenderManager.RenderGameElement(new FloorRenderer(this)) // Render the floor
        RenderManager.RenderGameElement(PowerUpRenderer) // Render the powerups
     
        CameraController.Init() // Initialise the camera controller, so that it can follow the player
        BackgroundRenderer.IsEnabled = true // Enable the background renderer
        HudRenderer.IsEnabled = true // Enable the hud renderer
        TimerRenderer.IsEnabled = true // Enable the timer renderer
    endprocedure
    
    // Unload renderers
    procedure Unrender():
    
        RenderManager.UnRenderGameElement(new FloorRenderer(this)) // Unrender the floor
        if Player != null: RenderManager.UnrenderPlayer(Player) // Unrender the player
        RenderManager.UnRenderGameElement(ObjectRenderer) // Unrender all of the game objects
        RenderManager.UnRenderGameElement(PowerUpRenderer) // Unrender the powerups

        BackgroundRenderer.IsEnabled = false // Disable the background renderer
        HudRenderer.IsEnabled = false // Disable the hud renderer
        TextRenderer.IsEnabled = false // Disable the text renderer
        TimerRenderer.IsEnabled = false // Disable the timer renderer
        
    endprocedure

    // Remove all level data and reset the game
    procedure Reset():
    
        Stop()
        LoadLevel()
        Run()
    endprocedure
```

As you can see, the `Run()` function is responsible for loading the level, and then registering the player with the physics manager. It then renders all of the game elements, and starts the game timer.
And the stop function is responsible for stopping the game, and unrendering all of the game elements.

### Menus

The next subroutines are the menu subroutines. These are responsible for loading and unloading the menus, and running the logic for the menus.

```cs
    procedure RegisterMenu(int id, Window menu):
    
        _windows.Add(id, menu) // Add the menu to the windows dictionary
        
        Loader.WindowManager.Renderer.RegisterUiRenderer(menu.Renderer) // Register the menu renderer with the renderer
    endprocedure
    

    procedure SetActiveWindow(int id):
    
        DisableAll() // Disable all of the windows
        CurrentWindow = id // Set the current window to the given id
        window = _windows[CurrentWindow] // Get the current window
        
        if window == null: return
        
        window.OnDisplay() // Run the on display function for the window to initialise the window
        Loader.WindowManager.Renderer.EnableRenderer(window.Renderer.Identifier) // Enable the renderer for the window
    endprocedure
   
        
    procedure Tick():
    
        if !IsScreenActive(): return; // If there is no active screen, return
        window = _windows[CurrentWindow] // Get the current window
        window?.Tick(); // Run the logic for the window
    endprocedure
```

From the code above you can see that the `SetActiveWindow()` function is responsible for setting the active window, and disabling all of the other windows. It then gets the current window, and runs the `OnDisplay()` function for that window. It then enables the renderer for that window.
Tick is responsible for running the logic for the current window.
And RegisterMenu is responsible for registering the menu with the menu manager.
Inside the a window class will be subroutines responsible for registering the buttons and inputs for that window.

```cs
    procedure OnDisplay():
    
        RegisterButtons();
        RegisterInputs();
        
    endprocedure
```

Subroutines responsible for running the logic for the menu.

```cs
    procedure Tick():
    
        for pair in buttons:
        
            Button? clicked = pair.Value
            if clicked == null: continue

            if clicked.IsClicked(): Select(pair.Key)
            
        endfor
    endprocedure     
```

And subroutines responsible for registering the buttons and inputs for that window.

```cs
    procedure RegisterButtons()
    
        Buttons.Add("Play", new Button(new Rectangle(100, 100, 200, 50), "Play", Color.WHITE, Color.BLACK));
        Buttons.Add("Settings", new Button(new Rectangle(100, 200, 200, 50), "Settings", Color.WHITE, Color.BLACK));
        Buttons.Add("Quit", new Button(new Rectangle(100, 300, 200, 50), "Quit", Color.WHITE, Color.BLACK));
    endprocedure
```

### Testing the subroutines

Due to the nature of my programming methodology I will have to test the subroutines as I go along. I will be testing the subroutines by running the game and seeing if the subroutines work as expected. I will also be using the debugger to step through the code and see if the subroutines are working as expected.
As it is hard to test the subroutines without running the game, I will be testing them as I go along.

## Testing plan

### Check list

| Action or feature                                                                                                    | Working? |
|----------------------------------------------------------------------------------------------------------------------|----------|
| 1. A window that can have its preferences changed within a settings menu                                             | ✓        |
| 2. Main menu with 4 buttons and a title, including game version information and my copywrite                         | ✓        |
| 3. Settings screen with at least 3 sections, that include controls, video settings, audio settings                   | ✓        |
| 4. Working camera system that smoothly follows the player wherever they go on the game canvas                        | ✓        |
| 5. A working physics system that can be applied to any object, with gravity, drag, and collision calculations        | ✓        |
| 6. A working player that can be moved using the control scheme, with velocity and appropriate drag calculations      | ✓        |
| 7. Working texture and audio loading system                                                                          | ✓        |
| 8. Working parallax background renderer that infinitely draws around the camera                                      | ✓        |
| 9. A working object system for adding game objects such as collidable objects and item power-ups                     | ✓        |
| 10. A working level system that can load and save level stats, and load the next level when the player completes one | ✓        |
| 11. A working ai that chases the player                                                                              |          | 

### UI Element Validation

#### Buttons

| Input                            | Validation          | Result          |
|----------------------------------|---------------------|-----------------|
| Click anyware outside the button | Should not activate | Doesnt activate |
| Click inside the buttons bounds  | Should activate     | Activates       |

#### Sliders

| Input                            | Validation                                                      | Result                              |
|----------------------------------|-----------------------------------------------------------------|-------------------------------------|
| Click anyware outside the slider | Should not activate                                             | Doesnt activate                     |
| Click inside the sliders bounds  | Should activate and slide head should move to the mouse X value | Activates and behaves appropriately |
| If is clicked and mouse is moved | Should move the slider head to the mouse X value                | Moves the slider head               |

#### Selector

| Input                                              | Validation                                    | Result                              |
|----------------------------------------------------|-----------------------------------------------|-------------------------------------|
| Click anyware outside the selector                 | Should not activate                           | Doesnt activate                     |
| Click inside the selectors bounds but no on arrows | Should not activate                           | Doesnt activate                     |
| Click inside the selectors right arrow button      | Should change the value to the next value     | Activates and behaves appropriately |
| Click inside the selectors left arrow button       | Should change the value to the previous value | Activates and behaves appropriately |

#### Control field

| Input                                                           | Validation                                                                   | Result                              |
|-----------------------------------------------------------------|------------------------------------------------------------------------------|-------------------------------------|
| Click anyware outside the field                                 | Should not activate                                                          | Doesnt activate                     |
| Click inside the fields bounds                                  | Should activate and allow the user to change the key to the next key pressed | Activates and behaves appropriately |
| If is clicked and key is pressed                                | Should change the key to the next key pressed                                | Changes the key                     |
| Press the backspace button or click outside of the field bounds | Should revert to the old value and stop listening for key presses            | Doesnt change the key and reverts   |

## Usability Features

A clear usability feature is that it needs to be playable by any age of user, including interacting with the game, so I feel it is important to add clear user controls where necessary to guide the user in how to play the game.

Any text needs to be readable on the screen at any size so will aim to adapt different screen resolutions, and all game elements should be thoroughly visible at any scale.

![Mockup](https://i.imgur.com/EsG3Ub1.png)

As you can see from this mockup, the text will appear large in the buttons and will span 5 elements in the window height so everything is visible.

Playability is also important down to knowing what controls to use, so the bottom of the screen will show where the player controls will be.

I want to focus on the ability to navigate the levels easily, maybe introducing a level select carousel with screenshots of the levels to display what a level will be, including the level difficulty.

I want to also make it clear if the game is loading or saving to make sure that the user doesnt have to wait for program hangs and so they don't get confused between crashes and intended behaviour.

Having clear explanations for in game features will also be an important factor as some new players, not just to the game, but the gaming industry need to be able to understand game mechanics, controls, scoring schemes etc.

Another usability feature is having an obvious way to exit the game, so I will be adding a quit button to the main menu.

And lastly having a way to display the user what ui elements are interactable, so I will be adding a hover effect to the buttons, sliders and any other ui elements.

## Validation

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

### Testing methods

After creating ui elements and other features in need to be tested I will have to run the game to make sure that they work as expected.
However just testing these elements on their own may be challenging as they may rely on other elements to work as expected, such as the menu classes to hold the elements.
I have created something similar to these in php using the same game engine, so I will be using that as a reference to see if the elements work as expected.
You can see them in [this section](#ui-elements).
I will be using iterative development to complete my game so I will be testing the elements as I go along.
This will be mentioned along side my main development in the [Development](#development) section.


# Development

> #### A few notes
> - I am going to be creating my game using the object oriented programming method, this allows me to have many custom classes working together to achieve a human readable and maintainable structure to my programming, while also allowing me to create different elements of the game that all work together with minimal re-writes.
> - I will be using interfaces for any and all input logic, this reduces the number of selection statements and duplicated code.
> - Some options such as resolution and control schemes will be using structs, to reduce the amount of registered classes in the game.
> - I will be using a game engine called raylib, this is a c# game engine that allows me to create games in c# and have them run on any platform, including windows, mac and linux.
> - Due to time constraints I didn't have time to document all the renderers, so have included a quick description of what each renderer class does.
> - All video and image links will be embedded imgur links as I have had issues with embedding videos in the past.
> - Any assets used were not created by me and were found through google, all open source, all copywrite free.

## Section 1: Underlying Framework

Firstly I will be creating an underlying framework for my game to run on. This will consist of an input system for reading user inputs, an update system for executing game logic, and a draw loop to display the computed inputs, game logic, and elements to the screen.
This section will be largely based off of the framework I created in my mini-nea found [here](https://github.com/WolfDen133/MiniNEA).
This video shows what I already have programmed. 
[Click here for video](https://imgur.com/KVb5bWA)

### Window Manager & Renderer 

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
    
    // This is the procedure of creating a window and registering it in the operating system
    // It also creates a virtual canvas to draw to, so that we can scale the game to any resolution
    // It also creates a camera so that we can move the camera around the game world
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
    
    
    // This is the procedure of applying any settings changes to the window
    // This includes resolution, fullscreen, and any other settings
    public void ApplySettingsChange()
    {
        if (!Raylib.IsWindowFullscreen() && Loader.Settings.FullScreen) Raylib.ToggleFullscreen();
        else if (Raylib.IsWindowFullscreen() && !Loader.Settings.FullScreen) Raylib.ToggleFullscreen();
        
        VirtualRatio = Width / Settings.Resolutions[Loader.Settings.Resolution].X;
        _destRectangle = new Rectangle(-VirtualRatio, -VirtualRatio, Settings.Resolutions[Loader.Settings.Resolution].X + VirtualRatio * 2, Settings.Resolutions[Loader.Settings.Resolution].Y + VirtualRatio * 2);

        Raylib.SetWindowSize((int)Settings.Resolutions[Loader.Settings.Resolution].X, (int)Settings.Resolutions[Loader.Settings.Resolution].Y);
        
        int x = Raylib.GetScreenWidth() >= Raylib.GetMonitorWidth(0) ? 0 : (Raylib.GetMonitorWidth(0) / 2 - Raylib.GetScreenWidth() / 2);
        int y = Raylib.GetScreenHeight() >= Raylib.GetMonitorHeight(0) ? 0 : (Raylib.GetMonitorHeight(0) / 2 - Raylib.GetScreenHeight() / 2);
        Raylib.SetWindowPosition(x, y);
    }

    // This is the main draw loop of the game, it will draw to a virtual canvas, and then draw that canvas to the screen
    // This allows us to scale the game to any resolution
    // It also allows us to use a camera to move around the game world
    public void DrawLoop()
    {
        while (!Raylib.WindowShouldClose()) 
        {
            Velocity.ControlManager.Tick(); // These are not implimented yet but will be used to update the control manager
            Velocity.Game.Tick(); // These are not implimented yet but will be used to update the game logic

            _screenSpaceCamera.target = Camera.target;

            Camera.target = _screenSpaceCamera.target;
            _screenSpaceCamera.target = Vector2.Subtract(Camera.target, Camera.target);
            _screenSpaceCamera.target.X *= VirtualRatio;
            _screenSpaceCamera.target.Y *= VirtualRatio;

            if (Velocity.Game.Closed) break; // To check if the game needs to be closed

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

> One notable error that I encoutered when creating the window manager was that the image that was drawn to the screen was flipped, this was because of the way that raylib draws images to the screen, and the way that we are handleing multiple resolutions. To fix this I had to flip the image on the y axis using a negated Virtual Ratio in the line:
>
> `_destRectangle = new Rectangle(-VirtualRatio, -VirtualRatio, Settings.Resolutions[Loader.Settings.Resolution].X + VirtualRatio * 2, Settings.Resolutions[Loader.Settings.Resolution].Y + VirtualRatio * 2);`
> Using a negated virtual ratio, we can flip the image on the y axis, and draw it to the screen correctly.

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
        IsEnabled = isEnabled;
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

Now there is one more renderer that is spasificlly for UI elements, that is used to render a UI element to the screen, and to draw the hover animation so that the user knows that they can interact with the element.
For this class we need to add one more function that is dedicated for drawing the animation and adjusting the alpha value so that it changes over time.
And another function to actually change the colors for the element.

```csharp

    public UiElement Parent;
    public Color BgColor { get; set; }
    public Color InternalBg;
    public Color BorderColor { get; set; }
    public Color InternalBorder;

    private int _aStep = 0;
    private const int MaxStep = 10;
    private const int GlowRadius = 8;

    protected AnimatableRenderer (UiElement parent, string identifier, Color? bgColor = null, Color? borderColor = null) : base(identifier)
    {
        Parent = parent;
        
        BgColor = bgColor ?? new Color(40, 40, 40, 255);
        BorderColor = borderColor ?? Color.WHITE;
        UpdateColors();
    }

    public void DrawAnimation()
    {
        if (Parent.IsMouseOver() && _aStep < MaxStep) _aStep++;
        else if (!(Parent.IsMouseOver()) && _aStep > 0) _aStep--;

        double a = Convert.ToDouble(_aStep) / MaxStep;
        
        Raylib.DrawRectangleGradientH((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y, 8, (int)Parent.Dimensions.Y, new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientH((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y, 8, (int)Parent.Dimensions.Y, new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0));
        Raylib.DrawRectangleGradientV((int)Parent.Position.X, (int)Parent.Position.Y- GlowRadius, (int)Parent.Dimensions.X, 8, new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientV((int)Parent.Position.X, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, (int)Parent.Dimensions.X, 8, new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y- GlowRadius, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(255, 255, 255, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y- GlowRadius, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0), new Color(255, 255, 255, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(255, 255, 255, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, GlowRadius, GlowRadius), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(255, 255, 255, 0));
        
        UpdateColors(a);
    }

    private void UpdateColors(double multiplier = 0)
    {
        InternalBg = BgColor with { a = Convert.ToByte(200 + 50 * multiplier) };
        InternalBorder = BorderColor with { a = Convert.ToByte(200 + 50 * multiplier) };
    }
```

### Input manager & input elements

Next we are going to create an input manager that will be registered in the main class. This input manager will contain all the logic needed to register an input controller and allow me to start reading inputs.
Then we will make a few input elements that will be used to read inputs from the user.
Using a keybind class created in the same file as control manager will give me read and write access to spasific keys, therefor allowing me to create a control screen where you can reassign key binds for spasific actions.
Finally create a controller class that other classes can extend to create there own input controllers with custom logic for that use case.

```csharp
using Raylib_cs;
using Velocity.Utils;

namespace Velocity.Input;

public class ControlManager
{
    // List of the registered controllers
    private List<IControllable> _controllers = new();

    // Register a controller
    public void RegisterController(IControllable controller)
    {
        _controllers.Add(controller);
    }

    
    // Unregister a controller
    public void UnRegisterController(IControllable controller)
    {
        _controllers.Remove(controller);
    }

    // Tick the controllers
    public void Tick()
    {
        foreach (var controller in _controllers.ToList())
        {
            if (Raylib.IsKeyPressed(Loader.Settings.Keybinds.Interact)) controller.OnInteract();
            if (Raylib.IsKeyDown(Loader.Settings.Keybinds.Left)) controller.OnLeft(); 
            if (Raylib.IsKeyDown(Loader.Settings.Keybinds.Right)) controller.OnRight();
            if (Raylib.IsKeyPressed(Loader.Settings.Keybinds.Jump)) controller.OnJump();
            if (Raylib.IsKeyDown(Loader.Settings.Keybinds.Down)) controller.OnDown();
            if (Raylib.IsKeyDown(Loader.Settings.Keybinds.ZoomIn)) controller.OnZoomIn();
            if (Raylib.IsKeyDown(Loader.Settings.Keybinds.ZoomOut)) controller.OnZoomOut();
        }
    }
}

public class Keybinds : IEquatable<Keybinds>
{
    // Default keybinds
    public KeyboardKey Interact = KeyboardKey.KEY_E;
    public KeyboardKey Left = KeyboardKey.KEY_A;
    public KeyboardKey Right = KeyboardKey.KEY_D;
    public KeyboardKey Jump = KeyboardKey.KEY_SPACE;
    public KeyboardKey Down = KeyboardKey.KEY_S;
    public KeyboardKey ZoomIn = KeyboardKey.KEY_EQUAL;
    public KeyboardKey ZoomOut = KeyboardKey.KEY_MINUS;

    // Convert a keybind to its action id
    public enum ActionId
    {
        Interact = 0,
        Left = 1,
        Right = 2,
        Jump = 3,
        Down = 4,
        ZoomIn = 5,
        ZoomOut = 6
    }

    // Convert an action id to its string value for display
    public static string IdToString(ActionId id)
    {
        switch (id)
        {
            case ActionId.Interact: return ActionNames[0];
            case ActionId.Left: return ActionNames[1];
            case ActionId.Right: return ActionNames[2];
            case ActionId.Jump: return ActionNames[3];
            case ActionId.Down: return ActionNames[4];
            case ActionId.ZoomIn: return ActionNames[5];
            case ActionId.ZoomOut: return ActionNames[6];
            default: return "-";
        }
    }
    
    // Check to see if a key is taken
    public bool IsKeyTaken(KeyboardKey key)
    {
        return Interact == key || Left == key || Right == key || Jump == key || Down == key || ZoomIn == key || ZoomOut == key;
    }

    // Internal list of action names
    private static readonly string[] ActionNames = 
    {
        "Interact",
        "Left",
        "Right",
        "Jump",
        "Down",
        "ZoomIn",
        "ZoomOut"
    };
    
    public bool Equals(Keybinds? other)
    {
        if (ReferenceEquals(null, other)) return false;
        return Interact == other.Interact && Left == other.Left && Right == other.Right && Jump == other.Jump && Down == other.Down && ZoomIn == other.ZoomIn && ZoomOut == other.ZoomOut;
    }

    public override bool Equals(object? obj)
    {
        if (ReferenceEquals(null, obj)) return false;
        // if (ReferenceEquals(this, obj)) return true;
        if (obj.GetType() != this.GetType()) return false;
        return Equals((Keybinds)obj);
    }

    public override int GetHashCode()
    {
        return HashCode.Combine((int)Interact, (int)Left, (int)Right, (int)Jump, (int)Down, (int)ZoomIn, (int)ZoomOut);
    }
}
```
And then we will define our controller interface

```csharp
    namespace Velocity.Input;

public interface IControllable
{
    // Interact with the object
    public void OnInteract()
    {}
    
    // Move left
    public void OnLeft ()
    {}
    
    // Move right
    public void OnRight ()
    {}

    // Jump
    public void OnJump ()
    {}
    
    // Move down: TODO: use this for crouching
    public void OnDown ()
    {}

    // Zoom the camera in
    public void OnZoomIn()
    { }
     
    // Zoom the camera out
    public void OnZoomOut()
    {}
}
```

This allows us to create a controller class that other classes can implement to create there own input controllers with custom logic.

### Main Loader

Lastly I will be creating a main loader class to register all of our managers, so that our program can keep track, and have easy access to all of the required classes.
This file will serve as our entry point in our program, so that any future-defined classes have access to the static properties of this class.
It will also be where we call all of our run functions to initalise and run the logic.
I will also be defining a function that will update the actual window properties and sound levels so we can call a simple function to apply the users selected settings.
Lastly it will contain the necessary logic to close the window, and save all the user data, such as settings, best times etc.

```csharp
using Velocity.Asset;
using Velocity.Game.Statistics;
using Velocity.Sound;
using Velocity.Input;
using Velocity.Ui.Screens;
using Velocity.Window;

namespace Velocity
{
    public class Loader
    {
        // Entry point
        public static void Main(string[] args)
        {
            // Load settings
            Settings = new Settings();
            Settings.Load();
            
            // Initialisation
            
            ControlManager = new ControlManager();
            WindowManager = new WindowManager();
            WindowManager.CreateWindow();
            
            AssetManager = new AssetManager(); // For use later
            AudioManager = new AudioManager(); // For use later
            
            Game = new Game.Game(); // For later use
            Game.MenuManager.RegisterMenus(); // Menus for later use
            Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // Menus for later use
            
            StatisticManager.Load();
            ApplySettings();
            
            // Begin game logic
            WindowManager.DrawLoop();
            
            // After window has closed
            StatisticManager.Save();
            Settings.Save();
        }
        
        // Apply the user selected settings
        private static void ApplySettings()
        {
            WindowManager.ApplySettingsChange();
            
            AudioManager.UpdateVolume();
            
            AudioManager.UpdateGameVolume();
            AudioManager.UpdatePlayerVolume();
            AudioManager.UpdateUiVolume();
        }

        // To stop the game and close the window
        public static void Close()
        {
            Game.Closed = true;
            Settings.Save();
            StatisticManager.Save();
        }
        
        
        public static WindowManager WindowManager
        {
            get;
            set;
        }

        public static Game.Game Game // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
        
        public static Settings Settings // Not implemented yet (Here for later use)
        {
            get;
            set;
        }

        public static ControlManager ControlManager 
        {
            get;
            set;
        }

        public static AssetManager AssetManager // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
        
        public static AudioManager AudioManager // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
    }
}
```

And this defines our underlying framework, with this we can build other classes built from our framework dedicated to, drawing things to the screen, handling player inputs, and handling our game logic.

After these classes have been created, we can perform our first test.
Linking back to our [Testing plan, test 1](#testing-plan), we can use this test to validate weather our system is working.

![](https://i.imgur.com/Op02MOT.png)

And as we can see from the image above, we have a working window, ready for the logic to be added for the next step.

## Section 1 review

### What has been achieved
We now have a working base for our game, that surve as a sort of "back-end" for our game, that will allow inputs to be read, asign keybinds and outputs to be processed and displayed.

### How we have tested
We have tested our base game by running it after each section and seeing if it works as expected, and if it does not, we can go back and fix it. 
Then tested it again to see any iterative or reused elements are impimented correctly.
Using `console.writeline` in various places so we can see wether our systems are working correctly. 

### How it fills our success criteria 
- [x] A working window
- [x] A working input system
- [x] A working renderer

### Meeting the criteria of:
A working framework that allows us to create a game on top of it.

### Quick summery of this section:
In this section we have created a working framework that allows us to create a game on top of it, with a working window, input system and renderer.
We have also created a main loader that will be used to register all of our managers, so that our program can keep track, and have easy access to all of the required classes.
This file will serve as our entry point in our program, so that any future-defined classes have access to the static properties of this class.
It will also be where we call all of our run functions to initalise and run the logic.

## Section 2: Base game, Settings and Render Manager

Now we have our underlying framework we can begin to build the basic structures for our main game logic, the settings and preferences, and menus that will be displayed to the user.
To begin we will be going into these sections and building our classes with our required properties and functions to build a functioning game.

### Render Manager & Base Game

#### RenderManager
Firstly we will be creating a render manager class dedicated as an interface between our game file and our renderer, build as a translater so we can register renderers to the screen, these will contain render and unrender functions for all of the different renderable types.
It will also contain the method for registering any default renderers such as the DebugRenderer which is defined below, which will be added to when we come to creating the player renderer.

```csharp
using Velocity.Ui.Overlay.Render;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game;

public class RenderManager
{
    public RenderManager()
    {
        RegisterDefault();
    }

    /**
     * Register default renderers
     */
    private void RegisterDefault() 
    {
        if (GameConst.Debug) Loader.WindowManager.Renderer.RegisterUiRenderer(new DebugRenderer());
    }
    
    /**
     * Render the player object
     */
    public void RenderPlayer(Player.Player player)
    {
        Loader.WindowManager.Renderer.RegisterElementRenderer(player.Renderer);
    }

    /*
     * Unused: Unrender the player object
     */
    public void UnrenderPlayer(Player.Player player)
    {
        Loader.WindowManager.Renderer.UnregisterRenderer(player.Renderer.Identifier);
    }

    /**
     * Render a static ui element
     */
    public void RenderUiElement(UiRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterUiRenderer(renderer);
    }

    /**
     * Render a game object renderer
     */
    public void RenderGameElement(ElementRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterElementRenderer(renderer);
    }

    /**
     * Render a dynamic background object renderer
     */
    public void RenderBackgroundElement(BackgroundRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterBackgroundRenderer(renderer);
    }

    /**
     * Unrender any of these object's renderers
     */
    public void UnRenderGameElement(ElementRenderer renderer)
    {
        Loader.WindowManager.Renderer.UnregisterRenderer(renderer.Identifier);
    }
}
```

#### Debug renderer:

For later use just to show basic information about the game.

```csharp
using Velocity.Window.Render.Renderers;
using Raylib_cs;

namespace Velocity.Ui.Overlay.Render;

public class DebugRenderer : UiRenderer
{
    public DebugRenderer () : base("Velocity:overlay.debug") {}

    public override void Draw()
    {
        // if (!y.Velocity.IsRunning || Velocity.Player == null) return;

        Raylib.DrawText(
            "Velocity: " + "\n" +
            " FPS: " + Raylib.GetFPS() + "\n" +
            " Delta: " + Raylib.GetFrameTime() + "\n" +
            "\n\n" /*+
            "PLAYER: \n Position: " + Velocity.Player.Position.X + ", " + Velocity.Player.Position.Y + "\n" + 
            " Velocity: " + Velocity.Player.Controller._velocity.X + " " + Velocity.Player.Controller._velocity.Y + "\n" +
            " OnPlatform: " + (Velocity.Player.Controller.OnGround ? "true" : "false") + "\n"
            */, 0, 0, 24, Color.WHITE);
    }
}
```

### Base Game

Now our base game file will be where all our main game will be run from, it will contain functions such as `run()` and `stop()` to begin and end our game, and will contain the main loop run for every frame of the games logic loop.
As this file is one of the most commonly accessed files it contains definitions that we have not looked at yet, but these are the classes referenced later in the development section.
The point of the file being the main game components to control all the game functions.

```csharp 
using System.Diagnostics;
using Velocity.Math;
using Velocity.Level;
using Velocity.Ui;
using Velocity.Ui.Misc;
using Raylib_cs;
using Velocity.Game.Misc;
using Velocity.Game.Object;
using Velocity.Game.Object.FloatingText;
using Velocity.Game.Object.Renderer;
using Velocity.Game.Physics;
using Velocity.Game.Statistics;
using Velocity.Ui.Overlay.Render;
using Velocity.Ui.Screens;

namespace Velocity.Game;

public class Game
{
    // Constants
    public const int FloorHeight = 10000;
    
    // Integer properties
    public int Coins = 0;
    private int _counter = 0;
    
    // Int array properties
    public int[] PowerUps =
    {
        0,
        0,
        0
    };
    
    // Boolean properties
    public bool IsRunning;
    public bool Closed = false;

    // Readonly properties
    public readonly Stopwatch Timer;
    public readonly Player.Player Player;
    private readonly CameraController _cameraController;
    
    public readonly MenuManager MenuManager;
    public readonly ObjectManager ObjectManager;
    public readonly LevelManager LevelManager;
    private readonly RenderManager _renderManager;
    private readonly PhysicsManager _physicsManager;
    private readonly FloatingTextManager _floatingTextManager;
    
    // Object properties
    public Level.Level? Level;
    
    // Render properties
    public readonly TextOverlayRenderer TextRenderer;
    public readonly ParallaxRenderer BackgroundRenderer;
    public readonly ColoredFlashRenderer ColoredFlashRenderer = new ();

    private readonly HudRenderer _hudRenderer;
    private readonly TimerRenderer _timerRenderer;
    private readonly ObjectRenderer _objectRenderer;
    private readonly PowerUpRenderer _powerUpRenderer;
    private readonly DistanceLimitRenderer _distanceLimitRenderer;
    

    /**
     * Constructor to register all the managers and controllers, and to render the static elements of the screen.
     */
    public Game()
    {
        // Register renderer manager and camera controller
        _renderManager = new RenderManager();
        _cameraController = new CameraController(this);
        Loader.ControlManager.RegisterController(_cameraController);

        // Register managers
        LevelManager = new LevelManager();
        MenuManager = new MenuManager();
        ObjectManager = new ObjectManager();
        _physicsManager = new PhysicsManager();
        _floatingTextManager = new FloatingTextManager();

        // Register renderers
        BackgroundRenderer = new ParallaxRenderer();
        TextRenderer = new TextOverlayRenderer();
        _hudRenderer = new HudRenderer(this);
        _timerRenderer = new TimerRenderer();
        _objectRenderer = new ObjectRenderer(this);
        _powerUpRenderer = new PowerUpRenderer(this);
        _distanceLimitRenderer = new DistanceLimitRenderer();
        
        // Register player
        Player = new Player.Player(new Vector2(-200 * (Velocity.Level.Level.LevelWidth / 2 + 1), FloorHeight - 300));

        // Pass renderer of static elements
        _renderManager.RenderUiElement(_hudRenderer);
        _renderManager.RenderUiElement(TextRenderer);
        _renderManager.RenderUiElement(_timerRenderer);
        _renderManager.RenderUiElement(_distanceLimitRenderer);
        _renderManager.RenderUiElement(ColoredFlashRenderer);
        _renderManager.RenderBackgroundElement(BackgroundRenderer);
        _renderManager.RenderPlayer(Player);

        // Register timer
        Timer = new Stopwatch();
    }

    // Begin function that is called after the level loads
    public void Run()
    {
        // Enable the player and pass to the physics manager
        Player.IsEnabled = true;
        _physicsManager.RegisterObject(Player);

        // Register all the floating texts (Last thing thats registered)
        foreach (var floatingTextData in Level.FloatingTexts.ToArray())
        {
            _floatingTextManager.RegisterText(floatingTextData.Position , floatingTextData.Text, Color.WHITE);
        }

        // Render the elements and begin the game.
        RenderElements();
        Resume(true);
    }

    /**
     * Pause the game on pause menu enter
     */
    private void Pause()
    {
        // Disable player logic, begin the game, and activate the hud renderer
        Player.IsEnabled = false;
        IsRunning = false;
        _hudRenderer.IsEnabled = false;
        
        // Stop the timer
        Timer.Stop();
    }
    
    /**
     * Resume the game after pause menu exit
     */
    public void Resume(bool isBegin = false)
    {
        // Enable player logic, begin the game, and activate the hud renderer
        Player.IsEnabled = true;
        IsRunning = true;
        _hudRenderer.IsEnabled = true;
        
        // Enable the timer, unless its the first begin, so it will be triggered by player movement
        if (!isBegin) Timer.Start();
    }

    // Stop function that is called when the game is stopped
    public void Stop()
    {
        // Stop close and clear all managers
        IsRunning = false;
        _physicsManager.Stop();
        ObjectManager.Close();
        _floatingTextManager.Clear();
        
        Unrender(); // Unrender everything
        
        // Reset player stats, coins and power-ups
        Player.Reset();
        Player.IsEnabled = false;
        PowerUps = new int[3] {0, 0, 0};
        Coins = 0;

        // Reset times and statistics
        Timer.Reset();
        StatisticManager.Save();
    }

    // Load renderers 
    private void RenderElements()
    {
        // Render non-static elements
        _renderManager.RenderGameElement(_objectRenderer);
        _renderManager.RenderGameElement(new FloorRenderer(this));
        _renderManager.RenderGameElement(_powerUpRenderer);
        _renderManager.RenderGameElement(_floatingTextManager.Renderer);
    
        // Initialise game components and load textures
        _cameraController.Init();
        Player.Renderer?.LoadTextures();
        BackgroundRenderer.LoadTextures();
        
        // Render static elements
        BackgroundRenderer.IsEnabled = true;
        _hudRenderer.IsEnabled = true;
        _timerRenderer.IsEnabled = true;
        _distanceLimitRenderer.IsEnabled = true;
        if (Player.Renderer != null) Player.Renderer.IsEnabled = true;
    }
    
    // Unload renderers
    private void Unrender()
    {
        // Un-render non-static elements
        _renderManager.UnRenderGameElement(new FloorRenderer(this));
        _renderManager.UnRenderGameElement(_objectRenderer);
        _renderManager.UnRenderGameElement(_powerUpRenderer);
        _renderManager.UnRenderGameElement(_floatingTextManager.Renderer);

        // Un-render static elements
        BackgroundRenderer.IsEnabled = false;
        _hudRenderer.IsEnabled = false;
        TextRenderer.IsEnabled = false;
        _timerRenderer.IsEnabled = false;
        _distanceLimitRenderer.IsEnabled = false;
        if (Player.Renderer != null) Player.Renderer.IsEnabled = false;
    }

    // Remove all level data
    public void Reset()
    {
        // Stop the game, re-register the level, and run the game
        Stop();
        int levelId = Level.Id;
        Level = null;
        LevelManager.SelectLevel(levelId);
        Run();
    }
    
    // Win state
    public void Win()
    {
        Pause();
        if (Timer.Elapsed.TotalSeconds <= StatisticManager.GetLevelBestTime(Level.Id) || StatisticManager.GetLevelBestTime(Level.Id) == 0) // Check to see if best time is greater than current time, if so replace the value
        {
            StatisticManager.SetLevelBestTime(Level.Id, (int)Timer.Elapsed.Ticks);
        }
        
        MenuManager.SetActiveWindow(WinScreen.UiId);
    }

    // Tick() function in all files executes the main logic for that frame
    public void Tick()
    {
        if (Closed) return; // Dont do anything if the game is considered closed.

        if (MenuManager.IsScreenActive()) // Handle menus if one is active
        {
            MenuManager.Tick();
            return;
        }
        
        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) // Pause the game if escape is pressed
        {
            Pause();
            MenuManager.SetActiveWindow(PauseScreen.UiId);
            return;
        }


        if (!IsRunning) return; // Dont run logic if the game is not running.

        _counter++;
        if (_counter == Raylib.GetFPS()) // Decrement all the power-ups every second
        {
            _counter = 0;
            if (PowerUps[0] > 0) PowerUps[0]--;
            if (PowerUps[1] > 0) PowerUps[1]--;
            if (PowerUps[2] > 0) PowerUps[2]--;
        } 
        
        // Tick all the managers for there respective components to work
        _physicsManager.Tick();
        ObjectManager.CoinHandle.Update();
        _cameraController.Tick();
        _floatingTextManager.Tick();
        
        // If the player has moved outside of there starting position: start the timer
        if (!Timer.IsRunning && System.Math.Abs(Player.Position.X - -200 * (Velocity.Level.Level.LevelWidth / 2 + 1)) != 0) Timer.Start();
        
        // If the player is outside of the game area bounds
        if (Double.Abs(Player.Position.X) > (Velocity.Level.Level.LevelWidth / 2 + 8) * 200)
        {
            if (Player.Position.X > 0) Win(); // If there at the far right trigger win
            else // If there at the far left, teleport the player to the start position, and fade from black
            {
                Player.Position.X = -(Velocity.Level.Level.LevelWidth / 2 + 1) * 200;
                ColoredFlashRenderer.Trigger(20, Color.BLACK);
            }
        }
        
        // Move the player continuously once the player has left the game area bounds, so they either win, or get teleported back.
        if (Player.Position.X > (Velocity.Level.Level.LevelWidth / 2 + 1) * 200) Player.Velocity.X = PhysicsConst.MaxAcceleration; 
        if (Player.Position.X < -(Velocity.Level.Level.LevelWidth / 2 + 3) * 200) Player.Velocity.X = -PhysicsConst.MaxAcceleration;

    }
    
}


```

As you can see there are many functions of this class that are responsible for handling all of the main components of the game.

### Settings

Next we will need to create a settings class so that we can have values to set and read from when changing the games in-game preferences, such as camera smoothness or game volume.
Our settings file will contain all our main variables in relation to actual configuration such as resolution, controls etc. It will be defined in our main class, and be accessible to everything inside the program code.
We will do this by defining our settings property as static therefor it can be assessed from the class' static instance.
We will also define our DefaultSettings in a struct so we have an easy way to apply the default settings, and will create a function to do just that.
Lastly we will define our settings file handler, so we can write and read from a file, this enables disk saving so that the chosen preferences will be saved across game restarts.
I will include functions to save and load from this file handler so it operates correctly, and call the load and save of the file, before and after game load and close respectively.
```csharp
using System.Globalization;
using System.Numerics;
using Velocity.Input;
using Velocity.Utils;

namespace Velocity;

struct DefaultSettings
{
    public const int Resolution = 0;
    public const bool FullScreen = false;
    public const double CameraLinearity = 0.95;
    public const double Volume = 1;
    public const double GameVolume = 1;
    public const double UiVolume = 1;
    public const double PlayerVolume = 1;
    public static readonly Keybinds Keybinds = new();
}

public class Settings : IEquatable<Settings>, ICloneable
{
    public static IniFile SettingsFile = new(Utils.Utils.CurrentDirectory + "settings.ini");

    public static readonly Vector2[] Resolutions =
    {
        new(1280, 720),
        new(1920, 1080),
        new(2560, 1440),
        new(3840, 2160)
    };

    public int Resolution;

    public bool FullScreen;

    public double CameraLinearity;

    public double Volume;
    public double GameVolume;
    public double UiVolume;
    public double PlayerVolume;
    
    public Keybinds Keybinds = new();

    public void Load()
    {
        if (!File.Exists(Utils.Utils.CurrentDirectory + "settings.ini"))
        {
            ToDefault();
            Save();
            return;
        }
        
        PopulateSettings();
    }

    private void PopulateSettings()
    {
        Resolution = Convert.ToInt32(SettingsFile.GetSetting("display", "resolution"));
        FullScreen = Convert.ToBoolean(SettingsFile.GetSetting("display", "fullscreen"));
        CameraLinearity = Convert.ToDouble(SettingsFile.GetSetting("display", "camera_linearity"));
        
        Volume = Convert.ToDouble(SettingsFile.GetSetting("sound", "master_volume"));
        GameVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "game_volume"));
        UiVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "ui_volume"));
        PlayerVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "player_volume"));
        
        Keybinds.Interact = KeyParser.ToKey(SettingsFile.GetSetting("controls", "interact"));
        Keybinds.Left = KeyParser.ToKey(SettingsFile.GetSetting("controls", "left"));
        Keybinds.Right = KeyParser.ToKey(SettingsFile.GetSetting("controls", "right"));
        Keybinds.Jump = KeyParser.ToKey(SettingsFile.GetSetting("controls", "jump"));
        Keybinds.Down = KeyParser.ToKey(SettingsFile.GetSetting("controls", "down"));
        Keybinds.ZoomIn = KeyParser.ToKey(SettingsFile.GetSetting("controls", "zoom_in"));
        Keybinds.ZoomOut = KeyParser.ToKey(SettingsFile.GetSetting("controls", "zoom_out"));
    }
    
    public void Save()
    {
        SettingsFile.AddSetting("Display", "resolution", Convert.ToString(Resolution));
        SettingsFile.AddSetting("Display", "full_screen", Convert.ToString(FullScreen));
        SettingsFile.AddSetting("Display", "camera_linearity", Convert.ToString(CameraLinearity, CultureInfo.InvariantCulture));
        
        SettingsFile.AddSetting("sound", "master_volume", Convert.ToString(Volume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "game_volume", Convert.ToString(GameVolume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "ui_volume", Convert.ToString(UiVolume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "player_volume", Convert.ToString(PlayerVolume, CultureInfo.InvariantCulture));

        
        SettingsFile.AddSetting("controls", "interact", Keybinds.Interact.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "left", Keybinds.Left.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "right", Keybinds.Right.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "jump", Keybinds.Jump.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "down", Keybinds.Down.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "zoom_in", Keybinds.ZoomIn.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "zoom_out", Keybinds.ZoomOut.ToString().Replace("KEY_", ""));

        SettingsFile.SaveSettings();
    }

    public void ToDefault()
    {
        Resolution = DefaultSettings.Resolution;
        FullScreen = DefaultSettings.FullScreen;
        CameraLinearity = DefaultSettings.CameraLinearity;
        Volume = DefaultSettings.Volume;
        GameVolume = DefaultSettings.GameVolume;
        UiVolume = DefaultSettings.UiVolume;
        PlayerVolume = DefaultSettings.PlayerVolume;
        Keybinds = new Keybinds();
    }

    public static string?[] GetResolutionsArray()
    {
        string?[] elements = new string?[Resolutions.Length];
        for (int i = 0; i < Resolutions.Length; i++)
        {
            elements[i] = Resolutions[i].X + " x " + Resolutions[i].Y;
        }

        return elements;
    }

    public bool Equals(Settings? other)
    {
        if (ReferenceEquals(null, other)) return false;
        return 
            CameraLinearity.Equals(other.CameraLinearity) && 
            Resolution.Equals(other.Resolution) && 
            FullScreen.Equals(other.FullScreen) &&
            Volume.Equals(other.Volume) &&
            GameVolume.Equals(other.GameVolume) &&
            UiVolume.Equals(other.UiVolume) && 
            PlayerVolume.Equals(other.PlayerVolume) &&
            Keybinds.Equals(other.Keybinds);
    }

    public override bool Equals(object? obj)
    {
        if (ReferenceEquals(null, obj)) return false;
        if (ReferenceEquals(this, obj)) return true;
        if (obj.GetType() != this.GetType()) return false;
        return Equals((Settings)obj);
    }

    public override int GetHashCode()
    {
        return HashCode.Combine(CameraLinearity, Resolution, Keybinds, Volume, GameVolume, UiVolume, PlayerVolume, Keybinds);
    }

    public object Clone()
    {
        return MemberwiseClone();
    }
}
```

As you can see there is also some boilerplate code for the IClonable and IEquatable class declaration, this is so we can later compare and clone this class if we are trying to compare class differences.
This file saves all the settings to three sections, and it outputs and reads to a file called `settings.ini` in the root directory of the program files.
It looks something like this:
```ini
[SOUND]
PLAYER_VOLUME=1
UI_VOLUME=0.81
MASTER_VOLUME=0.89
GAME_VOLUME=1

[DISPLAY]
RESOLUTION=1
FULL_SCREEN=False
CAMERA_LINEARITY=0.95

[ROOT]
VELOCITY SETTINGS=

[CONTROLS]
JUMP=SPACE
INTERACT=S
LEFT=A
DOWN=DOWN
RIGHT=D
ZOOM_OUT=MINUS
ZOOM_IN=EQUAL
```

We now have a working settings class that saves to and reads from a file, we can test this and see it working as it outputs a file with the expected settings and results.

## Section 2 review

### What has been achieved
We now have a base game file, to load run and manage the actual elements of the game. We now also have a provider for settings, so we can save and load settings from a file, and apply them to the game.
We also have a render manager that will be used to interface with the renderer, so that our program can keep track, and have easy access to all of the required element renderers.

### How we have tested
We have tested our base game by running fixing any errors that come up, and tried changing values of propertys to see if they are referenced in all the correct places. 
Then tested it again to see any iterative code works as intended.

### How it fills our success criteria
- [x] A working game file
- [x] A working settings file (with saving and loading)
- [x] A working render manager (renderer interface)

### Meeting the criteria of:
A working base game that allows us to register objects and renderers, and a working program wide settings file.

## Section 3: Sounds, assets and menus
Alright, now we have our settings class, so we can make program wide changes.
We also have a way of rendering things to the screen, so we can begin to create our menus, and the logic to handle them.
We will be creating a menu manager class that will handle all of the menus, and will be responsible for opening and closing them, and keeping track of the currently open menu.
We will also be creating a base menu class that will be extended by all of the menus, and will contain the basic functions for handling the menu, such as opening and closing, and rendering.
We will also be creating a settings menu, which will be the first menu we create, and will be responsible for displaying the settings to the user, and allowing them to change them.
We will also be creating a main menu, which will be the menu that is displayed when the game is first opened, and will contain the buttons to start the game, and open the settings menu.


### Menu Manager
Now that we have a working window opening and a settings menu, it would be good to have something to interact with on the screen so we can change our settings.
We need to do this by introducing a menu system for handling, the registration and handle for a menu class. It should keep track of all the menus and handle there open, currently open and close states accordingly and will close all menus when its close function is called.
We will create a subdirectory called `Ui` in our root folder and create a `MenuManager.cs` file and matching class. We will then define our functions with the procreate code to operate and define the actions mentioned above.
```csharp
using Velocity.Ui.Screens;

namespace Velocity.Ui;

public class MenuManager
{
    // Currently opened window
    private int CurrentWindow { get; set; }

    // Dictionary of all the registered window instances. - _windows[windowId] : Window
    private readonly Dictionary<int, Screens.Window> _windows = new ();

    // Run logic for current frame for currently active window.
    public void Tick()
    {
        if (!IsScreenActive()) return; // Do nothing if no window is active.
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window); // Get the currently active window
        window?.Tick(); // Tick the found window if it exists.
    }

    // Register the default menus
    public void RegisterMenus()
    {
        RegisterMenu(SettingsScreen.UiId, new SettingsScreen());    // Register the pause screen
        RegisterMenu(MainMenuScreen.UiId, new MainMenuScreen());         // Register the main menu
        RegisterMenu(LevelScreen.UiId, new LevelScreen());          // Register the level selection screen
        RegisterMenu(PauseScreen.UiId, new PauseScreen());          // Register the pause screen
        RegisterMenu(WinScreen.UiId, new WinScreen());              // Register the win screen
        RegisterMenu(LoadingScreen.UiId, new LoadingScreen());      // Register the loading screen
    }

    // Register a menu
    private void RegisterMenu(int id, Screens.Window menu)
    {
        _windows.Add(id, menu); // Add the window to the dictionary
        
        Loader.WindowManager.Renderer.RegisterUiRenderer(menu.Renderer); // Register the respective window's renderer with the main renderer
    }
    

    // Set the active window to the argument provided, provide a calling menu for previous window step (e.g. settings > main menu, or settings > pause)
    public void SetActiveWindow(int id, int? previous = null)
    {
        DisableAll(); // Disable all windows
        CurrentWindow = id; // Set the current window id
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window); // Get the newly selected window
        if (window == null) return; // Return if it doesnt exist (prevent type:null error)
        window.OnDisplay(previous); // Call the on-display function so the window knows its being opened
        Loader.WindowManager.Renderer.EnableRenderer(window.Renderer.Identifier); // Enable the respective window's renderer so its visible
    }

    // Disable all windows
    public void DisableAll()
    {
        foreach (var pair in _windows) // Iterative: step through all the registered windows and disable their renderer.
        {
            Loader.WindowManager.Renderer.DisableRenderer(pair.Value.Renderer.Identifier);
        }
        
        CurrentWindow = 0; // Set the current window to 0 (inactive state)
    }

    public bool IsScreenActive() // Checks to see if a screen is active by comparing current window to inactive state.
    {
        return CurrentWindow != 0;
    }
}
```

It is important to mention the declaration of this class in the main `Game` class as it is where this class is declared and utilised.
Calling the `MenuManager.Tick()` method in its tick function, therefor giving the menu a heart beat and enabling it to handle menus when they are needed.

Now as you can see this class references our windows we are going to create. These are referenced further down in this file.

### Asset & Sound Manager

#### Asset Manager

Firstly we will be creating an asset manager class, this will be responsible for loading and unloading all of our assets, such as textures.
We need this class so we can successfully evaluate each texture and load it into memory, and then unload it when it is no longer needed.
We need to be able to access this class from anywhere in the program, so we will be declaring it in our main, which is a static class, and defining our functions as public so they can be accessed from the class instance.
It will be called `AssetManager.cs` and will contain the following code:

```csharp
using Raylib_cs;
using Velocity.Utils;

namespace Velocity.Asset;

public class AssetManager
{
    // List of all assets to load
    public string[] TextureLocations =
    {
        "background\\1\\layer07.png",
        "background\\1\\layer06.png",
        "background\\1\\layer05.png",
        "background\\1\\layer04.png",
        "background\\1\\layer03.png",
        "background\\1\\layer02.png",
        "background\\1\\layer01.png",
        "background\\2\\layer07.png",
        "background\\2\\layer06.png",
        "background\\2\\layer05.png",
        "background\\2\\layer04.png",
        "background\\2\\layer03.png",
        "background\\2\\layer02.png",
        "background\\2\\layer01.png",
        "background\\3\\layer07.png",
        "background\\3\\layer06.png",
        "background\\3\\layer05.png",
        "background\\3\\layer04.png",
        "background\\3\\layer03.png",
        "background\\3\\layer02.png",
        "background\\3\\layer01.png",
        "background\\mainmenu.png",
        "obj\\crate.png",
        "obj\\barrel.png",
        "particle\\particle_map.png",
        "item\\power_ups.png",
        "item\\coin.png",
        "ui\\heart.png",
        "player\\1\\walk.png",
        "player\\1\\run.png",
        "player\\1\\idle.png",
        "player\\1\\jump.png",
        "player\\2\\walk.png",
        "player\\2\\run.png",
        "player\\2\\idle.png",
        "player\\2\\jump.png",
        "player\\3\\walk.png",
        "player\\3\\run.png",
        "player\\3\\idle.png",
        "player\\3\\jump.png"
    };

    public Dictionary<string, Texture2D> Textures = new();
    
    public AssetManager()
    {
        LoadAssets();
    }

    // Load all assets into memory
    private void LoadAssets()
    {
        foreach (var textureLocation in TextureLocations)
        {
            Texture2D tempTexture = Raylib.LoadTexture(Utils.Utils.AssetLocation + textureLocation.Replace("\\", OsVersion.GetDirSeperator()));

            string name = textureLocation.Split(".")[0].Replace("\\", ".");
            
            Textures.Add(name, tempTexture);
        }    
    }

    // Return a loaded texture with anti-aliasing
    public Texture2D GetTexture(string name)
    {
        Textures.TryGetValue(name, out Texture2D texture);
        // Raylib.SetTextureFilter(texture, TextureFilter.TEXTURE_FILTER_ANISOTROPIC_16X);
        return texture;
    }

    public Texture2D GetPlayerTexture(int player, string name)
    {
        return GetTexture("player." + player + "." + name);
    }
    
    public Texture2D GetBackgroundTexture(int background, string name)
    {
        return GetTexture("background." + background + "." + name);
    }
}
```

Up top is a variable containing all the texture locations, this is so we can easily add and remove textures from the game, and have them loaded and unloaded accordingly.
We have a dictionary of textures, this is so we can easily access the textures by name, and have them loaded into memory.
We have a function to load all the textures into memory, and a function to get a texture by name, and return it.
We also have a function to get a player texture, and a background texture, this is so we can easily access the textures by type and pull them in according to which player apperance and backround is currently chosen.
This class will serve as a texture provider and we will now be able to access the texture class from any where within our code.

#### Sound manager

Next we will be creating a sound manager class, this will be responsible for loading and unloading all of our sounds, such as music and sound effects.
We need this class so we can successfully evaluate each sound and load it into memory, and then unload it when it is no longer needed.
We need to be able to access this class from anywhere in the program, so we will be declaring it in our main, which is a static class, and defining our functions as public so they can be accessed from the class instance.
It will be called `SoundManager.cs` and will contain the following code:
```csharp
using System.Runtime.CompilerServices;
using Raylib_cs;

namespace Velocity.Sound;

public class AudioManager
{
    private Dictionary<string, Raylib_cs.Sound?> _gameSounds = new();
    private Dictionary<string, Raylib_cs.Sound?> _uiSounds = new();
    private Dictionary<string, Raylib_cs.Sound?> _playerSounds = new();

    private string[] _audioFiles =
    {
        "game/collect.wav",
        "game/coin.wav",
        "ui/click.wav",
        "ui/interact.wav",
        "player/jump.wav",
        "player/walk.wav"
    };
    
    public AudioManager ()
    {
        Initialise();
    }

    private void Initialise()
    {
        Raylib.InitAudioDevice();
        
        LoadAudioFiles();
    }

    private void LoadAudioFiles()
    {
        foreach (var file in _audioFiles)
        {
            string category = file.Split("/")[0];
            Raylib_cs.Sound sound = Raylib.LoadSound(Utils.Utils.SoundLocation + file);

            string name = Path.GetFileName(Utils.Utils.SoundLocation + file).Split(".")[0];
            
            switch (category)
            {
                case "game":
                    _gameSounds.Add(name, sound);
                    break;
                case "ui":
                    _uiSounds.Add(name, sound);
                    break;
                case "player":
                    _playerSounds.Add(name, sound);
                    break;
            }
        }
    }

    public void UpdateGameVolume()
    {
        foreach (var sound in _gameSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.GameVolume);
        } 
    }
    
    public void UpdateUiVolume()
    {
        foreach (var sound in _uiSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.UiVolume);
        } 
    }
    
    public void UpdatePlayerVolume()
    {
        foreach (var sound in _playerSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.PlayerVolume);
        } 
    }


    public void UpdateVolume()
    {
        Raylib.SetMasterVolume(Convert.ToSingle(Loader.Settings.Volume));
    }

    public void PlaySound(string name)
    {
        string category = name.Split(".")[0];
        string soundName = name.Split(".")[1];
        switch (category)
        {
            case "game":
                _gameSounds.TryGetValue(soundName, out Raylib_cs.Sound? sounda);
                if (sounda != null) Raylib.PlaySound((Raylib_cs.Sound) sounda);
                break;
            case "ui":
                _uiSounds.TryGetValue(soundName, out Raylib_cs.Sound? soundb);
                if (soundb != null) Raylib.PlaySound((Raylib_cs.Sound) soundb);
                break;
            case "player":
                _playerSounds.TryGetValue(soundName, out Raylib_cs.Sound? soundc);
                if (soundc != null) Raylib.PlaySound((Raylib_cs.Sound) soundc);
                break;
        }
    }
}
```

Firstly when the class is loaded it will initialise the audio device, this is so we can play sounds and music.
We have a dictionary of sounds, this is so we can easily access the sounds by name, and have them loaded into memory.
We have a function to load all the sounds into memory, and a function to play a sound by name.
We also have a function to update the volume of all the sounds, this is so we can easily update the volume of all the sounds when the volume is changed.
We also have seperate functions to update the volume of each category of sound, this is so we can easily update the volume in settings of each category of sound when the volume is changed. 
This class will serve as a sound provider and we will now be able to access the sound class from any where within our code.


> #### Errors to overcome
> 
> - The first error we encountered was the fact that the textures were not loading, this was because we were not using the correct directory seperator for the operating system, and therefor the file could not be found. - This was tested on a mac and didnt work, so changed from `/` to `\\` and it worked.
> - The second error we encountered was textures were not being returned correctly in the player and background methods. This was because we were not using the correct name for the texture, and therefor it was not being found. - This was fixed by changing the texture code format so it returns the correct background and player textures.
> - The third error we encountered was the fact that the sound was not playing, this was because we were not initialising the audio device, and therefor the sound could not be played. - This was fixed by initialising the audio device in the constructor of the sound manager.
> - The fourth error was sounds not being found, this came from using the incorrect sound format and name, so it was easily fixed by changing the sound format and name to the correct format.

Linking back to our [Testing Plan](#testing-plan) section, we can now test our sound and asset manager by playing a sound and loading a texture, and we can see that it works as expected.

I will insert lines of code into the draw loop, and post load in the main file, so we can test both.

`AudioManager.PlaySound("ui.click");` post load in the main file, and `Raylib.DrawTexture(AssetManager.GetTexture("ui.heart"), 0, 0, Color.WHITE);` in the draw loop.

[Click here for video](https://imgur.com/vAw06lc)

We can see that the sound plays and the texture is loaded, and therefor our sound and asset manager is working as expected.

And so concludes this section of development, we now have a working sound manager and asset manager so we can play sounds, change sound volume and load, unload and access textures when needed.

### UI Elements

This subsection will be slightly different to the last as these belong in their own section.
The reason for this is because they are reused time and time again across the menus and will need explaining seperately.
Each subsection of this file will explain each ui element and its respective renderer. Starting with the base ui element

> #### `UiElement.cs`
> The base parent class for all the other elements to extend, contains basic code to calculate `IsMouseOver`, `IsClicked`, `GetValue`, `RegisterSubElements`(for labels and values), and `SetRenderer` for setting the renderer for that ui type.
> ```csharp
> using Velocity.Math;
> using Raylib_cs;
> using Velocity.Window;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Misc;
> 
> public abstract class UiElement
> {
>     public Vector2 Position;
>     public Vector2 Dimensions;
>     public bool Active = true;
>     public ValueField? Display;
>     
>     private bool _isClicked;
>     
> 
>     public ConditionalRenderer? Renderer;
> 
>     protected UiElement(Vector2 origin, Vector2 dimensions)
>     {
>         Position = origin;
>         Dimensions = dimensions;
>     }
> 
>     protected void SetRenderer(ConditionalRenderer renderer)
>     {
>         Renderer = renderer;
>     }
> 
>     public virtual bool IsMouseOver()
>     {
>         System.Numerics.Vector2 mousePos = System.Numerics.Vector2.Multiply(Raylib.GetMousePosition(),
>             new System.Numerics.Vector2(Loader.WindowManager.VirtualRatio, Loader.WindowManager.VirtualRatio));
>         return mousePos.X > Position.X && 
>                mousePos.X < Position.X + Dimensions.X &&
>                mousePos.Y > Position.Y &&
>                mousePos.Y < Position.Y + Dimensions.Y;
>     }
> 
>     public virtual bool IsClicked()
>     {
>         if (IsMouseOver() && Raylib.IsMouseButtonPressed(MouseButton.MOUSE_BUTTON_LEFT)) return true;
> 
>         return false;
>     }
> 
>     public virtual void RegisterSubElements(Vector2 position)
>     {
>     }
>     
> 
>     public virtual double GetValue(int args = 0)
>     {
>         return 0.0;
>     }
> }
> ```

> #### `Button.cs`
>- Button class for a clickable on screen button with varable bounds, size, color and text.
>- Returns its clicked button, and calls the sound manager to play the `ui.click` sound.
> ```csharp
> using Velocity.Ui.Render.Element;
> using Raylib_cs;
> using Vector2 = Velocity.Math.Vector2;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Button : UiElement
> {
> public Color BgColor { get; set; }
> public Color BorderColor { get; set; }
> public Text Text { get; set; }
> 
>     public Button(Text text, Vector2 position, Vector2 dimensions) : base(position, dimensions)
>     {
>         Text = text;
>         SetRenderer(new ButtonRenderer(Guid.NewGuid(), this));
>     }
> 
>     public override bool IsClicked()
>     {
>         if (base.IsClicked()) Loader.AudioManager.PlaySound("ui.click");
>         return base.IsClicked();
>     }
> }
> ```
>
> ##### Renderer
>
> - Draw a box, draw a border, draw text, calculate animation step, draw gray if inactive.
> ```csharp
> using System.Numerics;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> using Raylib_cs;
> using Velocity.Ui.Screens;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class ButtonRenderer : ConditionalRenderer
> {
> private readonly Button _parent;
> 
>     public ButtonRenderer(Guid id, Button parent) : base("velocity:menu.button." + id)
>     {
>         _parent = parent;
>     }
> 
>     private int _aStep = 0;
>     private double _smoothedAStep = 0;
>     private double _aStepPrev = 0;
> 
>     public override void Draw()
>     {
>         if (_parent.Active)
>         {
>             if (_parent.IsMouseOver() && _aStep < 100) _aStep += 8;
>             else if (!_parent.IsMouseOver() && _aStep > 0) _aStep -= 8;
>         }
>         else _aStep = 0;
>         
>         _aStep = _aStep > 100 ? 100 : _aStep;
>         _aStep = _aStep < 0 ? 0 : _aStep;
> 
>         _smoothedAStep = (_aStep * 0.2) + (_aStepPrev * 0.8);
>         _aStepPrev = _smoothedAStep;
>         
>         int x = (int)_parent.Position.X;
>         int y = (int)_parent.Position.Y;
>         
>         int dx = (int)_parent.Dimensions.X;
>         int dy = (int)_parent.Dimensions.Y;
>         
>         int aMultiple = Convert.ToInt32(10 * Convert.ToSingle(_smoothedAStep) / 100);
>         int hoverCa = Convert.ToInt32(50 * Convert.ToSingle(_smoothedAStep) / 100);
>         
>         Rectangle bounds = new(x, y, dx, dy);
>         Raylib.DrawRectangleLinesEx(bounds, (Loader.Settings.Resolution + 1) * 2f, _parent.BorderColor);
>         Color bgColor = _parent.BgColor with{r = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.r + hoverCa + 50), g = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.g), b = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.b)};
>         Raylib.DrawRectangle(x, y, dx, dy, bgColor);
>         if (_aStep > 0)
>         {
>             // Raylib.DrawRectangle(x, y, dx, aMultiple, new Color(255, 255, 255, 255));
>             Raylib.DrawRectangle(x, y, aMultiple, dy, _parent.IsClicked() ? new Color(255, 100, 0, 255) : new Color(255, 255, 255, 255));
>             // Raylib.DrawRectangle(x + dx - aMultiple, y, aMultiple, dy, new Color(255, 255, 255, 255));
>             // Raylib.DrawRectangle(x, y + dy - aMultiple, dx, aMultiple, new Color(255, 255, 255, 255));
>         }
> 
>         int textX = (int) _parent.Position.X + (WindowManager.Width / 64) + (aMultiple);
>         int textY = (int) _parent.Position.Y + ((dy / 2) - (_parent.Text.FontSize / 2));
> 
>         Color hoverColor = _parent.Text.Color with
>         {
>             r = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa),
>             g = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa),
>             b = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa)
>         };
>         
>         Raylib.DrawTextEx(FontUtils.ButtonFont, _parent.Text.Data, new Vector2(textX, textY), _parent.Text.FontSize, 3, (_parent.IsMouseOver() ? hoverColor : _parent.Text.Color));
>         
>         if (!_parent.Active) Raylib.DrawRectangle(x, y, dx, dy, new Color(150, 150, 150, 150));
>     }
> }
> ```

> #### `ControlField.cs`
>
>-  For the keybindings menu, displays a value specified by the `SettingsScreen.cs` class file at lines `71`-`77`.
>-  Creates a small field with a variable text, that can be clicked and accept inputs, running checks from `Keybind.cs`, to see if it is taken or invalid.
>-  Returns `Raylib/Input/KeyboardKey` as its return value, and returns the currently selected key.
> ```csharp using Raylib_cs;
> using Velocity.Input;
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using Velocity.Ui.Screens;
> using Velocity.Utils;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Misc;
> public class ControlField : UiElement
> {
> private KeyboardKey _key;
> 
>     public ControlField(KeyboardKey defaultKey) : base(Vector2.Zero(),
>         new Vector2(WindowManager.Width - SettingsScreen.Safezone.X / 2, WindowManager.Height / 32))
>     {
>         _key = defaultKey;
>         
>         SetRenderer(new ControlFieldRenderer(this));
>     }
> 
>     public override void RegisterSubElements(Vector2 position)
>     {
>         Display = new ControlValueField(() => { return _key.ToString().Replace("KEY_", ""); }, _key.ToString().Replace("KEY_", ""),
>             new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
>         {
>             Position = new Vector2(
>                 WindowManager.Width - SettingsScreen.Safezone.X -
>                 Raylib.MeasureTextEx(Raylib.GetFontDefault(), _key.ToString().Replace("KEY_", ""), 48, 5).X,
>                 Position.Y - 25),
>             Dimensions = new Vector2(80, 60)
>         };
>     }
> 
>     public override bool IsClicked()
>     {
>         if (base.IsClicked()) Display.IsClicked();
>         return base.IsClicked();
>     }
> 
>     public KeyboardKey GetKey()
>     {
>         return KeyParser.ToKey(Display.Value) == KeyboardKey.KEY_NULL ? _key : KeyParser.ToKey(Display.Value);
>     }
> }
> ```
>
> ##### Renderer
> - Calls its child display renderer
> ```csharp
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class ControlFieldRenderer : ConditionalRenderer
> {
> private ControlField _parent;
> 
>     public ControlFieldRenderer(ControlField parent) : base("velocity.menu.controls." + Guid.NewGuid())
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         _parent.Display.Renderer.Draw();
>     }
> }
> ```

> #### `ControlValueField.cs`
> - The actual value handle for control field
> - Accepts being clicked to enter the listening state, then listens for keystrokes, until a valid key is found, and is not an already in use key.
> - Display said key, and any invalid message handling
> - Returns a key, or returns to default value if no key is pressed
> ```csharp
>
> using Raylib_cs;
> using Velocity.Math;
> using Velocity.Ui.Screens;
> using Velocity.Utils;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Misc;
> 
> public class ControlValueField : ValueField
> {
> public bool IsListening = false; // Is the control field listening for key presses
> private int _timer = 0; // Text temp display timer
> 
>     private string? _defaultValue; // Original value when canceling
>     public ControlValueField(Func<string?> listener, string? defaultValue, Color bgColor, Color textColor) : base(listener, defaultValue, bgColor, textColor)
>     {
>         _defaultValue = defaultValue;
>     }
> 
>     public override bool IsClicked()
>     {
>         if (base.IsClicked()) // If is clicked
>         {
>             IsListening = true; // Start listening
>             Loader.AudioManager.PlaySound("ui.interact"); // Play the ui sound
>         }
>         return base.IsClicked(); // Return isclicked value
>     }
>     
>     // To listen loop and ui handle
>     public override void Update()
>     {
>         if (IsListening) // If listening
>         {
>             if (_timer > 0) _timer--; // Decrement the timer if it is above 0
>             if (_timer == 0) Value = "Press a key..."; // Display press a key if timer is at 0
>             
>             foreach (KeyboardKey key in Enum.GetValues(typeof(KeyboardKey))) // Iterative: For all of keyboard keys 
>             {
>                 if (Raylib.IsKeyPressed(key)) // If said key is pressed
>                 {
>                     if (key == KeyboardKey.KEY_BACKSPACE ||
>                         (!base.IsMouseOver() && Raylib.IsMouseButtonPressed(MouseButton.MOUSE_BUTTON_LEFT))) // If backspace or left mouse button pressed:
>                     {
>                         IsListening = false; // Stop listening for key
>                         break;
>                     }
>                     
>                     if (Loader.Settings.Keybind.IsKeyTaken(key)) // If the key is taken
>                     {
>                         Value = "Key already taken!"; // Display string as value
>                         _timer = 30; // For 30 frames 
>                         break;
>                     }
>                     
>                     if (KeyParser.ToKey(key.ToString().Replace("KEY_", "")) == KeyboardKey.KEY_NULL) // If it is not deemed valid by KeyParser:
>                     {
>                         Value = "Invalid Key"; // Display string as value
>                         _timer = 30; // For 30 frames
>                         break;
>                     }
> 
>                     // Otherwise
>                     
>                     Value = key.ToString().Replace("KEY_", ""); // Set the value to the key pressed string
>                     _defaultValue = Value; // Change default value
>                     IsListening = false; // Stop listening
>                 }
>             }
>             
>             UpdatePositions(); // Update the positions so it centers correctly
>             return;
>         }
>         
>         // Otherwise
>         
>         Value = _defaultValue; // Set the value back to the default value
>         
>         UpdatePositions(); // Update the positions so it centers correctly
>     }
>     
>     // Function to align element to right
>     private void UpdatePositions ()
>     {
>         Dimensions.X = Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, Value, (float)Dimensions.GetY() - 6, 2f)).X + 8;  // Find the offset of the text width and add 8 pix margin
>         Position.X = WindowManager.Width - SettingsScreen.Safezone.X - Dimensions.X - 20;                                                           // Set the position to the right of the screen, inside the safezone, minus its own width and 20 pix margin
>     }
> }
> 
> ```
>
> Shares a renderer with `ValueField.cs`.

> #### Label
>
> Draw text at a position
> ```csharp
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Label : UiElement
> {
> public readonly Text Text;
> 
>     public Label(Text text, Vector2 position) : base(position, new Vector2())
>     {
>         Text = text;
>         Position = position;
>         SetRenderer(new LabelRenderer(this));
>     }
> }
> ```
>
> ##### Renderer
> Draws text to the window with specified arguments.
> ```csharp
> using System.Numerics;
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class LabelRenderer : ConditionalRenderer
> {
> private Label _parent;
> 
>     public LabelRenderer(Label parent) : base("velocity:label." + Guid.NewGuid())
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         Raylib.DrawTextEx(_parent.Text.Font, _parent.Text.Data, new Vector2(Convert.ToSingle(_parent.Position.X), Convert.ToSingle(_parent.Position.Y)), _parent.Text.FontSize, 4, _parent.Text.Color);
>     }
> }
> ```

> #### Level field
> - To show the title of the level,
> - To show a level preview
> - To show a Best Time value
> - To show a difficulty value
> - Returns null
> - Is able to be changed
> ```csharp
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Misc;
> 
> public class LevelField : UiElement
> {
> public Level.Level? SelectedLevel; // Currently selected level
> 
>     public LevelPreview LevelPreview = new(); // Level preview element
>     
>     public LevelField () : base(new Vector2(800, 140), new Vector2(WindowManager.Width - 830, WindowManager.Height - 170))
>     {
>         SetRenderer(new LevelFieldRenderer(this));
>     }
> 
>     // Select a level to show
>     public void SelectLevel(int id)
>     {
>         SelectedLevel = Loader.Game.LevelManager.GetLevelById(id); // Change the selected level 
>         LevelPreview.RecalculateRectangles(SelectedLevel); // Recalculate the preview
>     }
> } 
> ```
>
> ##### Renderer
> - Create a ui element that takes up the other half of the screen
> - Will have a title larger than other text positioned at the top of the rectangle
> - Then draw the level preview
> - Then draw the difficulty
> - Then draw best time
>
> ```csharp
> using Raylib_cs;
> using Velocity.Game.Statistics;
> using Velocity.Ui.Misc;
> using Velocity.Window;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class LevelFieldRenderer : ConditionalRenderer
> {
> private LevelField _parent;
> 
>     public LevelFieldRenderer (LevelField parent) : base("velocity:menu.levelField")
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         if (_parent.SelectedLevel == null) return;
>         Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y, new Color(30, 30, 30, 240));
>         
>         Raylib.DrawText(_parent.SelectedLevel.Name, (int)_parent.Position.X + 20, (int)_parent.Position.Y + 20, 56, Color.WHITE);
>         
>         _parent.LevelPreview.Renderer.Draw();
>         
>         Raylib.DrawText("Difficulty: " + _parent.SelectedLevel.Difficulty + "\nBest time: " + StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(_parent.SelectedLevel.Id)) , (int)_parent.Position.X + 20, (int)_parent.Position.Y + (WindowManager.Height - 170) / 6 + 166, 32, Color.WHITE);
>     }
> }
> ```

> #### `LevelPreview.cs`
> - To display a 2D block version of the previewed level
> - Recalculate for different levels
> - Display different color for different cell types
>
> ```csharp
> using Raylib_cs;
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using Velocity.Window;
> using Raylib_cs;
> 
> namespace Velocity.Ui.Misc;
> 
> public class LevelPreview : UiElement
> {
> public List<Rectangle> LevelRectangles = new(); // Rectangles to be displayed
> public List<Color> LevelColors = new(); // Colors of the rectangles
> 
>     public LevelPreview() : base(new Vector2(815, (WindowManager.Height - 170) / 8 + 90),
>         new Vector2(WindowManager.Width - 860, (WindowManager.Height - 170) / 8))
>     {
>         SetRenderer(new LevelPreviewRenderer(this));
>     }
> 
>     // Calculate the rectangles to be displayed
>     public void RecalculateRectangles(Level.Level level)
>     {
>         int dx = (int)Dimensions.X / Level.Level.LevelWidth; // Rect width
>         int dy = (int)Dimensions.Y / Level.Level.LevelHeight; // Rect height
> 
>         // Sky rectangles
>         for (int y = 0; y < 4; y++) // For 4 layers
>         {
>             for (int x = 0; x < Level.Level.LevelWidth; x++) // and for 60 rows from Level.cs
>             {
>                 LevelRectangles.Add(new Rectangle((int)Position.X + (x > 0 ? (x + 1) * dx : dx), (int)Position.Y + (y > 0 ? (y + 1) * dy : dy), dx, dy)); // Add a rectangle from position + the current x and y index
>                 LevelColors.Add(level.BackgroundColor); // Add a level background color to the colors
>             }
>         }
>         
>         // Level Rectangles
>         for (int r = 4; r <= Level.Level.LevelHeight + 3; r++) // for level height in cells
>         {
>             string row = level.GetObjectMap()[r - 4]; // Get the row
>             for (int c = 0; c < Level.Level.LevelWidth; c++) // and for level width in cells
>             {
>                 LevelRectangles.Add(new Rectangle((int)Position.X + (c > 0 ? (c + 1) * dx : dx), (int)Position.Y + (r > 0 ? (r + 1) * dy : dy), dx, dy)); // Add a rectangle to the rectangles
>                 LevelColors.Add(row[c] switch // add the color for:
>                 {
>                     '1' => new Color(161, 102, 47, 255), // Wood color for Crate
>                     '2' => new Color(99, 59, 59, 255), // Dark wood color for Barrel
>                     _ => level.BackgroundColor, // Background for nothing
>                 });
>             }
>         }
>     }
> }
> ```
>
> ##### Renderer
> - Draw all rectangles for rows and columns
> ```csharp
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class LevelPreviewRenderer : ConditionalRenderer
> {
> private LevelPreview _parent;
> 
>     public LevelPreviewRenderer (LevelPreview parent) : base("velocity:menu.levelPreview")
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         for (int i = 0; i <= _parent.LevelRectangles.Count - 1; i++)
>         {
>             Raylib.DrawRectangleRec(_parent.LevelRectangles[i], _parent.LevelColors[i]);
>         }
>     }
> } 
> ```

> #### `PlayerPreview.cs`
> - To display a player preview in the main menu
> - So the player knows what player avatar they have selected
> - Returns null
> - Is able to be changed
> - Runs through player sprites and displays them for animation
>
> ```csharp
> 
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Misc;
> 
> public class PlayerPreview : UiElement
> {
> public PlayerPreview() : base(new Vector2(WindowManager.Width / 1.3 - 280, WindowManager.Height / 2 - 410), // Draw at center screen right
> new Vector2(560, 620)) // With the dimensions of 560, 620
> {
> SetRenderer(new PlayerPreviewRenderer(this));
> }
> }
> ```
>
> ##### Renderer
> - Draw the player sprite at the position
> ```csharp
> using System.Numerics;
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class PlayerPreviewRenderer : ConditionalRenderer
> {
> private PlayerPreview _parent;
> private Texture2D _idleAsset;
> private int _apperence;
> private int _currentFrame;
> private int _frameCount;
> private int _frameSpeed = 6;
> private Rectangle _frameRect;
> 
> 
>     private readonly Dictionary<int, int> _tileCount = new()
>     {
>         {1, 8},
>         {2, 6},
>         {3, 6}
>     };
> 
>     public PlayerPreviewRenderer (PlayerPreview parent) : base("velocity:ui.playerPreview")
>     {
>         _parent = parent;
>         LoadTexture();
>     }
> 
>     private void LoadTexture()
>     {
>         _idleAsset = Loader.AssetManager.GetPlayerTexture(Loader.Game.Player.Apperance, "idle");
>     }
> 
>     public override void Draw()
>     {
>         if (Loader.Game.Player.Apperance != _apperence)
>         {
>             _apperence = Loader.Game.Player.Apperance;
>             LoadTexture();
>             return;
>         }
>         
>         _frameCount++;
> 
>         if (_frameCount >= 60 / _frameSpeed)
>         {
>             _frameCount = 0;
>             _currentFrame++;
>             if (_currentFrame >= GetFrameCount()) _currentFrame = 0;
>             
>             _frameRect = new Rectangle(_currentFrame * _idleAsset.width / GetFrameCount(), 0, _idleAsset.width / GetFrameCount(), _idleAsset.height);
>         }
>         
>         Raylib.DrawTexturePro(_idleAsset, _frameRect, new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y), new Vector2(), 0.0f, Color.WHITE);
>     }
>     
>     private int GetFrameCount()
>     {
>         _tileCount.TryGetValue(_apperence, out int count);
> 
>         return count;
>     }
> }
> ```

> #### `Selector.cs`
> - To display an interactable selector for various things such as player appearance, resolution selection, etc.
> - Returns the selected values index
> - Is able to be changed
> - Is able to be clicked
> - Is able to be hovered
>
> ```csharp
> using Raylib_cs;
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using static Velocity.Window.WindowManager;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Selector : UiElement
> {
> public readonly string?[] Options; // Different options for the selector
> public int Index; // Currently selected index
> 
>     public Selector(string?[] options, int index, Vector2 dimensions) : base(Vector2.Zero(), dimensions)
>     {
>         Options = options; // Set the options
>         Index = index; // Set the index
>         
>         SetRenderer(new SelectorRenderer(this));
>     }
> 
>     // Override: Register the display element for the value (from all ui elements)
>     public override void RegisterSubElements(Vector2 position)
>     {
>         Display = new ValueField(() => Options[Index], Options[Index],
>             new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
>         {
>             Position = position,
>             Dimensions = new Vector2(0, Height / 32 + 10)
>         };
>     }
> 
>     // Set the index of the currently selected option
>     public void SetIndex(int index)
>     {
>         Index = index;
>     }
> 
>     // Increment the index by a certain amount
>     private void IncrementIndex(int by = 1)
>     {
>         if (Index + by >= Options.Length || Index + by < 0) return;
> 
>         Index += by;
>     }
> 
>     // Override: If mouse is over the selector, check if the buttons are clicked
>     // If the left is clicked, decrement the index, if the right is clicked, increment the index
>     public override bool IsClicked()
>     {
>         if (!base.IsClicked()) return base.IsClicked();
>         switch (GetButtonClicked())
>         {
>             case 1: IncrementIndex(-1);
>                 break;
>             case 2: IncrementIndex();
>                 break;
>         }
> 
>         return base.IsClicked();
>     }
> 
>     // Get the button that is clicked
>     private int GetButtonClicked()
>     {
>         if (!IsMouseOver()) return 0;
> 
>         if (Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio <= Position.X + Dimensions.X / 6) return 1; // Left button
>         return Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio >=
>                Position.X + Dimensions.X - Dimensions.X / 6 ? 2 : 0; // Right button
>     }
> 
>     // Override: Get the index of the selector
>     public override double GetValue(int args = 0)
>     {
>         return Index;
>     }
> }
> ```
>
> ##### Renderer
> - Draw the selector at the position with the dimensions
> - Draw the left and right buttons
> - Draw the text
> ```csharp
> using System.Numerics;
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class SelectorRenderer : AnimatableRenderer
> {
>     private readonly Selector _parent;
> 
>     public SelectorRenderer(Selector parent) : base(parent, "velocity.selector." + Guid.NewGuid())
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y, InternalBg);
>         Raylib.DrawRectangleLinesEx(new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
>         Raylib.DrawText(_parent.Options[_parent.Index], (int) (_parent.Position.X + (_parent.Dimensions.X / 2 - Raylib.MeasureText(_parent.Options[_parent.Index], Convert.ToInt32(WindowManager.Height / 28)) / 2)), (int) (_parent.Position.Y + (_parent.Dimensions.Y / 2 - Convert.ToInt32(WindowManager.Height / 28) / 2)), Convert.ToInt32(WindowManager.Height / 28), InternalBorder);
>         Raylib.DrawTriangle(new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + _parent.Dimensions.Y / 4)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X / 32), (int)(_parent.Position.Y + _parent.Dimensions.Y / 2)), new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + (_parent.Dimensions.Y / 4) * 3)), _parent.Index == 0 ? Color.DARKGRAY : InternalBorder);
>         Raylib.DrawTriangle(new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - _parent.Dimensions.X / 32), (int)(_parent.Position.Y + _parent.Dimensions.Y / 2)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + _parent.Dimensions.Y / 4)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + (_parent.Dimensions.Y / 4) * 3)), _parent.Index + 1 == _parent.Options.Length ? Color.DARKGRAY : InternalBorder);
>         Raylib.DrawLineEx(new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 6)), (int)_parent.Position.Y), new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 6)), (int)_parent.Position.Y + (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
>         Raylib.DrawLineEx(new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 6)), (int)_parent.Position.Y), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 6)), (int)_parent.Position.Y + (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
>         
>         _parent.Display?.Renderer?.Draw();
>     }
> } 
> ```

> #### `Slider.cs`
> - To display an interactable slider for various things such as volume, camera smoothness, etc.
> - Returns the volume selected
> - Is able to be changed
> - Is able to be clicked
> - Is able to be hovered
> - Is able to be dragged
>
> ```csharp
> using System.Numerics;
> using Raylib_cs;
> using Velocity.Ui.Render.Element;
> using Velocity.Window;
> using Vector2 = Velocity.Math.Vector2;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Slider : UiElement
> {
> private readonly double _min; // The minimum value of the slider
> private readonly double _max; // The maximum value of the slider
> private bool _held; // If the slider is being held
> 
>     public double SliderOffset; // The offset of the slider head
>     
>     private double _previousValue; // The previous value of the slider
>     private int _waitFrames; // The amount of frames to wait before playing the sound again
> 
>     public Slider(double min, double max, Vector2 dimensions, double? d = null) : base(Vector2.Zero(), dimensions)
>     {
>         _min = min; // Set the minimum value
>         _max = max; // Set the maximum value
>         
>         SliderOffset = Dimensions.GetX() * ((d - _min) / (_max - _min)) ?? 0; // Set the slider offset to the default value
> 
>         SetRenderer(new SliderRenderer(this)); // Set the renderer
>     }
> 
>     // Override: Register the display element for the value (from all ui elements)
>     public override void RegisterSubElements(Vector2 position)
>     {
>         Display = new ValueField(() => System.Math.Round(GetValue(2) / _max * 100) + "%", GetValue(2) + "%",
>             new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
>         {
>             Position = position,
>             Dimensions = new Vector2(0, WindowManager.Height / 32 + 10)
>         };
>     }
> 
>     // Override: If mouse is over the slider, check if the slider head is clicked
>     // If the slider head is clicked, set the slider offset to the mouse position
>     // Limit slider offset to the slider bounds
>     public override bool IsClicked()
>     {
>         if (_waitFrames != 0) _waitFrames--; // Decrement the wait frames
>         if (IsMouseInHeadBounds() && Raylib.IsMouseButtonDown(MouseButton.MOUSE_BUTTON_LEFT)) _held = true; // If the mouse is in the slider head bounds and the left mouse button is down, set held to true
>         
>         if (base.IsClicked() || (_held && Raylib.IsMouseButtonDown(MouseButton.MOUSE_BUTTON_LEFT))) // If the slider is clicked or held
>         {
>             _held = true; // Set held to true
>             
>             SliderOffset = Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio - Position.GetX(); // Set the slider offset to the mouse position
>             
>             if (SliderOffset < 0) SliderOffset = 0; // Limit the slider offset to the slider bounds 
>             if (SliderOffset > Dimensions.GetX()) SliderOffset = Dimensions.GetX(); // Limit the slider offset to the slider bounds
> 
>             if (System.Math.Abs(_previousValue - GetValue(2)) == 0) return _held; // If the value hasn't changed return held
>             if (_waitFrames == 0) // If the wait frames is 0
>             {
>                 _waitFrames = (int)(Double.Abs(_previousValue - GetValue(2)) * 100) * 3; // Set the wait frames to the difference between the values * 100 * 3 (To stop more clicks the faster its moved)
>                 Loader.AudioManager.PlaySound("ui.interact"); // Play the sound
>             }
> 
>             _previousValue = GetValue(2); // Set the previous value to the current value
> 
>         } else _held = false; // If the slider isn't clicked, set held to false
> 
>         return _held; // Return held
>     }
> 
>     // If the mouse is over the slider head, change the cursor to a hand
>     private bool IsMouseInHeadBounds ()
>     {
>         var mousePos = System.Numerics.Vector2.Multiply(Raylib.GetMousePosition(),
>             new System.Numerics.Vector2(Loader.WindowManager.VirtualRatio, Loader.WindowManager.VirtualRatio)); // Get the mouse position
> 
>         return
>             mousePos.X >= GetSlideHeadBounds().X && 
>             mousePos.X <= GetSlideHeadBounds().Z &&
>             mousePos.Y >= GetSlideHeadBounds().Y &&
>             mousePos.Y <= GetSlideHeadBounds().W; // Return if the mouse is in the slider head bounds
>     }
>     
>     
>     // Get the slider head bounds
>     private Vector4 GetSlideHeadBounds() 
>     {
>         return new Vector4(Convert.ToSingle(Position.GetX() - 5 + SliderOffset), Convert.ToSingle(Position.GetY() - 5), Convert.ToSingle(Position.GetX() + 5 + SliderOffset), Convert.ToSingle(Position.GetY() + 5 + Dimensions.GetY())); // Return the slider head bounds
>     }
> 
>     // Override: Get the value of the slider
>     public override double GetValue(int precision = 0)
>     {
>         return System.Math.Round(_min + (_max - _min) * (SliderOffset / Dimensions.GetX()), precision); // Return the value of the slider
>     }
> }
> ```
>
> ##### Renderer
> - Draw the slider at the position with the dimensions
> - Draw the slider head
> ```csharp
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class SliderRenderer : AnimatableRenderer
> {
>     private readonly Slider _parent;
> 
>     public SliderRenderer(Slider parent) : base(parent, "velocity:ui.slider." + Guid.NewGuid())
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
> 
>         /*Raylib.DrawRectangleLinesEx(new Rectangle(Convert.ToInt32(_parent.Position.X) - 1, Convert.ToInt32(_parent.Position.Y) - 1,
>             Convert.ToInt32(_parent.Dimensions.X) + 2, Convert.ToInt32(_parent.Dimensions.Y) + 2), (Loader.Settings.Resolution + 1) * 3f,
>             new Color(200 + hoverCa, 200 + hoverCa, 200 + hoverCa, 255));*/
>         
>         Raylib.DrawRectangle(Convert.ToInt32(_parent.Position.X), Convert.ToInt32(_parent.Position.Y),
>             Convert.ToInt32(_parent.Dimensions.X), Convert.ToInt32(_parent.Dimensions.Y),
>             InternalBg);
> 
>         Raylib.DrawRectangle(
>             Convert.ToInt32(_parent.Position.X - 4 + _parent.SliderOffset - (Loader.Settings.Resolution + 1) * 2f),
>             Convert.ToInt32(_parent.Position.GetY() - 4), 8 + (Loader.Settings.Resolution + 1) * 4,
>             Convert.ToInt32(_parent.Dimensions.GetY()) + 8,
>             _parent.IsClicked() ? BgColor with { a = 255 } : BgColor with { a = 200 });
>         Raylib.DrawRectangleLinesEx(new Rectangle(Convert.ToInt32(_parent.Position.X - 5 + _parent.SliderOffset - (Loader.Settings.Resolution + 1) * 2), Convert.ToInt32(_parent.Position.GetY() - 5), 10 + (Loader.Settings.Resolution + 1) * 4, Convert.ToInt32(_parent.Dimensions.GetY()) + 10), (Loader.Settings.Resolution + 1) * 2f, _parent.IsClicked() ? BorderColor with { a = 255 } : BorderColor with { a = 200 });
> 
>         _parent.Display.Renderer.Draw();
>     }
> }
> ```

> #### `Text.cs`
>
> - Text value for a label
> - Contains properties for the text such as font, data, color, etc.
> ```csharp
> using Raylib_cs;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Text
> {
> public Text(string? data = null, int fontSize = 32, Font? font = null, Color? color = null)
> {
> Data = data ?? "";
> FontSize = fontSize;
> Font = font ?? Raylib.GetFontDefault();
> Color = color ?? Color.WHITE;
> }
> public string Data { get; set; } // String data
> public Color Color { get; set; } // Color of the text
> public int FontSize { get; set; } // Font size
> 
>     public Font Font { get; set; } // Font
> 
>     public int GetWidth() // Get the width of the text
>     {
>         return (int)Raylib.MeasureTextEx(Font, Data, FontSize, 4f).X; // Return the width of the text
>     }
> }
> ```
>
> No renderer for this element as it is only used in the `Label.cs` class.

> #### `Toggle.cs`
> - To display an interactable toggle for various things such as fullscreen, vsync, etc.
> - Returns the toggle state
> - Is able to be changed
> - Is able to be clicked
>
> ```csharp
> using Raylib_cs;
> using Velocity.Math;
> using Velocity.Ui.Render.Element;
> using Velocity.Window;
> 
> namespace Velocity.Ui.Misc;
> 
> public class Toggle : UiElement
> {
> private bool _value; // The value of the toggle
> public Toggle(bool d, Vector2 dimensions) : base(Vector2.Zero(), dimensions)
> {
> _value = d; // Set the value to the default value
> 
>         SetRenderer(new ToggleRenderer(this)); // Set the renderer
>     }
> 
>     // Override: Register the display element for the value (from all ui elements)
>     public override bool IsClicked()
>     {
>         if (!base.IsClicked()) return false; // If the toggle isn't clicked, return false
>         _value = !_value; // Set the value to the opposite of the current value
>         Loader.AudioManager.PlaySound("ui.interact");  // Play the ui interact sound
>         return base.IsClicked(); // Return true
>     }
> 
>     // Override: Register the display element for the value (from all ui elements)
>     public override void RegisterSubElements(Vector2 position)
>     {
>         Display = new ValueField(() => _value ? "Enabled" : "Disabled", _value ? "Enabled" : "Disabled",
>             new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
>         {
>             Position = position,
>             Dimensions = new Vector2(0, WindowManager.Height / 32 + 10)
>         };
>     }
> 
>     // Override: Get the value of the toggle
>     public override double GetValue(int args = 0)
>     {
>         return Convert.ToDouble(_value); // Return the value
>     }
> }
> ```
>
> ##### Renderer
> - Draw the toggle frame at the position with the dimensions
> - Draw the toggle if is true
> ```csharp
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class ToggleRenderer : AnimatableRenderer
> {
>     public ToggleRenderer(Toggle parent) : base(parent, "velocity.ui.toggle." + Guid.NewGuid()) { }
> 
>     public override void Draw()
>     {
>         Raylib.DrawRectangle((int)Parent.Position.X, (int)Parent.Position.Y, (int)Parent.Dimensions.X, (int)Parent.Dimensions.X, InternalBg);
>         Raylib.DrawRectangleLinesEx(new Rectangle((int)Parent.Position.X, (int)Parent.Position.Y, (int)Parent.Dimensions.X, (int)Parent.Dimensions.X), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
>         
>         if (Convert.ToBoolean(Parent.GetValue())) Raylib.DrawRectangle((int)Parent.Position.X + 10, (int)Parent.Position.Y + 10, (int)Parent.Dimensions.X - 20, (int)Parent.Dimensions.X - 20, InternalBorder);
>         Parent.Display?.Renderer?.Draw();
>     }
> }
> ```

> #### `ValueField.cs`
> - To display a value for various things such as keybinds, resolution, etc.
> - Doesn't return a value
> - Is able to be changed
>
> ```csharp
> using Raylib_cs;
> using Velocity.Math;
> using Velocity.Ui.Overlay.Render;
> 
> namespace Velocity.Ui.Misc;
> 
> public class ValueField : UiElement
> {
> private readonly Func<string?> _listener; // Listener for the value
> public Color BgColor; // Background color
> public Color TextColor; // Text color
> public string? Value; // Value of the field
> private readonly int? _customX = null; // Custom x value
> 
> 
>     public ValueField(Func<string?> listener, string? defaultValue, Color bgColor, Color textColor) : base(Vector2.Zero(), Vector2.Zero())
>     {
>         _listener = listener; // Set the listener
>         Value = defaultValue;   // Set the value
>         BgColor = bgColor; // Set the background color
>         TextColor = textColor; // Set the text color
> 
>         SetRenderer(new ValueFieldRenderer(this)); // Set the renderer
>     }
>     
>     // Set the custom x value
>     public virtual void Update()
>     {
>         Value = _listener.Invoke(); // Update the value
>         Dimensions.X = _customX ?? Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, Value, (float)Dimensions.GetY() - 6, 2f)).X + 8; // Update the dimensions of the field to fit the text + padding
>     }
> }
> ```
>
> ##### Renderer
> - Draw the value field at the position with the dimensions
> - Draw the text
> ```csharp
> using System.Numerics;
> using Raylib_cs;
> using Velocity.Ui.Misc;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Ui.Render.Element;
> 
> public class ValueFieldRenderer : ConditionalRenderer
> {
>     private readonly ValueField _parent;
>     
>     public ValueFieldRenderer(ValueField parent) : base("velocity.value-field." + Guid.NewGuid())
>     {
>         _parent = parent;
>     }
> 
>     public override void Draw()
>     {
>         Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X + 12, (int)_parent.Dimensions.Y, _parent.BgColor);
>         Raylib.DrawRectangleLinesEx(new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X + 12, (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, _parent.TextColor);
>         var textX = (_parent.Position.X + _parent.Dimensions.X / 2) - Convert.ToSingle(Math.Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, _parent.Value, (float)_parent.Dimensions.GetY() - 8, 4f)).X / 2);
>         var textY = (_parent.Position.Y + _parent.Dimensions.Y / 2) - Convert.ToSingle(Math.Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, _parent.Value, (float)_parent.Dimensions.GetY() - 8, 4f)).Y / 2);
>         Raylib.DrawTextEx(FontUtils.ButtonFont, _parent.Value, new Vector2(Convert.ToSingle(textX) + 6, Convert.ToSingle(textY)), (int)_parent.Dimensions.Y - 8, 4f, _parent.TextColor);
>     }
> }
> ```

### Main & Settings menu
Sweet, now we have a way to take inputs from our user, and display them on the screen, we can start to build our menus.
We also have a way to load textures, and play sounds, so we can start to make our menus look and sound nice.
We will be revisiting windows once our game has its core features implemented, but for now we will be creating the main menu, and the settings menu.

#### Base Window
Now that we have a working menu manager, and some ui elements to build our menus, its time to create some, we will be starting with the base menu class.
The base menu class serves as our framework for implementing menus, it will contain the basic functionality of a menu, such as:
- A ui renderer
- An onDisplay function for when the menu is opened
- A Tick function for when the menu is open

These serve as the back bone for all future menus to be built on top of, so that our game knows which menu is currently open, how to render it, what to do once it has been opened and finally what to do while it is open.

```csharp
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Screens;

public class Window
{
    public static int UiId; // Unique id for this screen (to be overwriten by child classses) 
    public UiRenderer Renderer; // The renderer object for child class

    public virtual void OnDisplay (int? previous) // Called when the window is opened
    { }
    public virtual void Tick() // Called every frame the window is open for
    { }
}
```

#### Main menu
Now we have our base class its time to create our main menu!
For this we will need one element defined in the [UiElements](#ui-elements) subsection. A button, 3 of them to be precise. A play, settings and exit button.
We will also need a label to display the title of the game, and a player preview to show the player avatar. Our main menu will look like this:

```csharp
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Raylib_cs;
using Velocity.Ui.Render.Element;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class MainMenuScreen : Window
{
    public new static readonly int UiId = 2; // Unique id for this screen

    public readonly Dictionary<int, Button?> Buttons = new(); // Buttons on the screen
    
    public readonly PlayerPreview PlayerPreview = new(); // Player preview on the screen
    
    public readonly Selector AppearanceSelector; // Selector for the player appearance

    private bool[] _hasSoundPlayed = new bool[4]; // Whether the sound has played (stop buttons double activating the sound)
    public MainMenuScreen()
    {
        RegisterButtons(); // Register the buttons
        Renderer = new MainMenuScreenRenderer(this); // Set the renderer
        string?[] names = new string?[3] {"Swordsman", "Archer", "Wizard"}; // Names for the player appearance selector
        AppearanceSelector = new Selector(names, Loader.Game.Player.Apperance - 1, new Vector2(400, 80)); // Create the selector
        AppearanceSelector.Position = new Vector2(WindowManager.Width / 1.3 - 200, WindowManager.Height / 2 + 230); // Set the position
    }

    private void RegisterButtons()
    {
        AddButton(0, "Play"); // Add the play button
        // AddButton(-1, "Statistics"); // TODO
        AddButton(1, "Options"); // Add the options button
        AddButton(2, "Exit"); // Add the exit button
    }

    // Called every frame the window is open for
    public override void Tick()
    {
        foreach (var pair in Buttons) // Loop through the buttons
        {
            Button? clicked = pair.Value; // Get the button
            if (clicked == null) continue; // If the button is null, skip it

            if (clicked.IsClicked()) // If the button is clicked
            {
                Select(pair.Key); // Select the button
            }
        }

        if (AppearanceSelector.IsClicked()) // If the appearance selector is clicked
        {
            Loader.Game.Player.Apperance = AppearanceSelector.Index + 1; // Set the player appearance to the selected appearance
        }
    }

    // Called when a button is pressed
    private void Select(int buttonId)
    {
        switch (buttonId)
        {
            case 0: // Play
                Loader.Game.MenuManager.SetActiveWindow(LevelScreen.UiId, UiId); // Set the active window to the level screen
                break;
            case -1: // Statistics
                // TODO OPTIONS
                break;
            case 1: // Options
                Loader.Game.MenuManager.SetActiveWindow(SettingsScreen.UiId, UiId); // Set the active window to the settings screen
                break;
            case 2: // Exit
                Loader.Close(); // Close the game
                break;
        }
    }

    private void AddButton (int id, string text) // Add a button to the screen 
    {
        Text buttonText = new Text();

        buttonText.Color = new Color(200, 200, 200, 255);
        buttonText.FontSize = Convert.ToInt32(WindowManager.Height / 18);
        buttonText.Data = text;
        buttonText.Font = FontUtils.ButtonFont;

        int y = Convert.ToInt32(WindowManager.Height / 2 - (Convert.ToInt32(WindowManager.Height / 5.145) - WindowManager.Height / 16) + (Buttons.Count) * (WindowManager.Height / 8));

        Button? button = new Button(
            buttonText,
            new Vector2(Convert.ToInt32(WindowManager.Width / 18.29), y),
            new Vector2(Convert.ToInt32(WindowManager.Width / 4.65), Convert.ToInt32(WindowManager.Height / 10.29)));
        button.BgColor = new Color(40, 40, 40, 200);
        button.BorderColor = Color.WHITE;
        
        Buttons.Add(id, button);
    }
}
```

Then we will need to define our renderer class so that our game knows how to render the menu.
We will draw a background image, a gradient over the top of that, a title, then the buttons, and finally the player preview and the selector (by calling its own renderer).
It will then draw a bar over the top at the bottom of the screen displaying the game version and 
```csharp
using System.Numerics;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class MainMenuScreenRenderer : UiRenderer
{
    private readonly MainMenuScreen _parent; // The parent screen
    private readonly Texture2D _background; // The background texture

    public MainMenuScreenRenderer(MainMenuScreen parent) : base("velocity:window." + MainMenuScreen.UiId)
    {
        _parent = parent;

        _background = Loader.AssetManager.GetTexture("background.main-menu");
    }

    public override void Draw()
    {
        Raylib.DrawTexturePro(_background, new Rectangle(0, 0, _background.width, _background.height), new Rectangle(0, 0, WindowManager.Width, WindowManager.Height), new Vector2(), 0, Color.WHITE);
        Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, Color.BLACK with {a = 255}, Color.BLACK with {a = 20});
        int x = Convert.ToInt32(WindowManager.Width / 18.29);
        int fontSize = Convert.ToInt32(WindowManager.Height / 10);
        
        Raylib.DrawTextEx(FontUtils.Font, GameConst.Name, new Vector2(x, WindowManager.Height / 6 - (fontSize / 2)), fontSize, 2, Color.WHITE);

        foreach (var pair in _parent.Buttons)
        {
            if (pair.Value?.Renderer == null) throw new VelocityException("Element renderer undefined");
            pair.Value.Renderer.Draw();
        }
        
        Raylib.DrawRectangle((int)_parent.PlayerPreview.Position.X + 20, (int)_parent.PlayerPreview.Position.Y + 170, (int)_parent.PlayerPreview.Dimensions.X - 40, (int)_parent.PlayerPreview.Dimensions.Y - 150 + (int)_parent.AppearanceSelector.Dimensions.Y + 40, new Color(30, 30, 30, 150));
        
        _parent.PlayerPreview.Renderer?.Draw();
        
        if (_parent.AppearanceSelector.Renderer?.GetType().BaseType == typeof(AnimatableRenderer))
        {
            AnimatableRenderer renderer = (AnimatableRenderer) _parent.AppearanceSelector.Renderer;
            renderer.DrawAnimation();
        }
        _parent.AppearanceSelector.Renderer?.Draw();


        Raylib.DrawRectangle(0, WindowManager.Height - 25, WindowManager.Width, 25, Color.BLACK);
        Raylib.DrawText(GameConst.Author + ", 2023", 4, WindowManager.Height - 23, 26, Color.WHITE);
        Raylib.DrawText("v" + GameConst.Version, WindowManager.Width - Raylib.MeasureText("v" + GameConst.Version, 26) - 4, WindowManager.Height - 23, 26, Color.WHITE);
    }
}
```

At this point we can perform our second test, to see if our menu works as expected. We will link back to the [Testing](#testing-plan) section for this.
We will launch the game and see what we have. However, in the design section I decided that I would have 4 buttons, but in the actual game I only implimented 3. This is due to time constraints not being able to add a statistics screen. This is a good example of how a design can change over time, and how you can adapt to it.

![](https://i.imgur.com/bfUlO38.png)

And we can now see that this is working as expected, and we can move onto the next menu.

If we look back to the [Testing](#testing-plan) section, we can see that we have completed the first 2 tests, and we are now ready to move onto the third test.

#### Settings Menu

Now the settings menu is by far the most complex, requiring a lot of elements to be created, and a lot of functionality to be added.
This menu will contain all of the available settings for the game, and will be the main way to change them.
Firstly we need to define our main methods for registering, handling and updating the settings.
Then we will need to create the elements for the settings menu (as seen in [Ui elements](#ui-elements) section), and provide a list for these elements so that the menu can keep track of them.
Finally we need to update the settings when the menu is closed, and save them to the settings file.

```csharp
using Raylib_cs;
using Velocity.Exception;
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class SettingsScreen : Window
{
    public new static int UiId = 1; // Unique id for this screen

    public int Page = 0; // The current page

    public static readonly Vector2 Safezone = new (100, 120); // The safezone for the screen
    
    public Dictionary<int, Dictionary<string, UiElement>> PageElements = new(4); // The elements on the screen
    public readonly Dictionary<int, Button> Buttons = new(); // The buttons on the screen
    public Dictionary<int, List<Label>> PageLabels = new(); // The labels on the screen

    public int Offset = 0; // The offset  for the elements (for scrolling)
    public int PrevOffset = 0; // The previous offset for the elements (for scrolling)
    
    public readonly string[] PageNames = { "Video", "Audio", "Controls" }; // The names of the pages

    private int? _previousWindow; // The previous window to return to on close

    public SettingsScreen() // Constructor
    {
        RegisterButtons(); // Register the buttons
        Renderer = new SettingsScreenRenderer(this); // Set the renderer
    }

    public override void OnDisplay(int? previous) // Called when the window is opened
    {
        PageElements = new Dictionary<int, Dictionary<string, UiElement>>(); // Reset the elements
        PageLabels = new Dictionary<int, List<Label>>(); // Reset the labels
        _previousWindow = previous;  // Set the previous window

        if (previous == MainMenuScreen.UiId) // If the previous window was the main menu
        {
            Loader.Game.BackgroundRenderer.LoadTextures(); // Load the background textures
            Loader.Game.BackgroundRenderer.IsEnabled = true;    // Enable the background renderer
        }
        
        RegisterElements(); // Register the elements
        Page = 0; // Set the page to 0
    } 

    private void RegisterButtons() // Register the buttons
    {
        AddButton(0, "Reset", new Vector2(WindowManager.Width - Convert.ToInt32(WindowManager.Width / 12) - Convert.ToInt32(WindowManager.Height / 15.4) / 2, WindowManager.Height - Safezone.Y / 2 - (WindowManager.Height / 15.4) / 2)); // Add the reset button
        AddButton(1, "Back", new Vector2(Convert.ToInt32(WindowManager.Height / 15.4) / 2, WindowManager.Height - Safezone.Y / 2 - (WindowManager.Height / 15.4) / 2)); // Add the back button
        
        AddButton(2, ">", new Vector2(WindowManager.Width - Safezone.X * 2 - 80, Safezone.Y / 5), 75); // Add the next page button
        AddButton(3, "<", new Vector2(Safezone.X * 2 - 80, Safezone.Y / 5), 75); // Add the previous page button
    }

    private void RegisterElements() // Register the elements
    {
        RegisterElement(0, "camera_smoothness", "Camera Smoothness",  new Slider(0, 0.95, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.CameraLinearity)); // Add the camera smoothness slider
        RegisterElement(0, "resolution", "Resolution", new Selector(Settings.GetResolutionsArray(), Loader.Settings.Resolution, new Vector2(WindowManager.Width / 5, WindowManager.Height / 14))); // Add the resolution selector
        RegisterElement(0, "fullscreen", "Fullscreen", new Toggle(Loader.Settings.FullScreen, new Vector2(50, 50))); // Add the fullscreen toggle
        
        RegisterElement(1, "audio_master", "Master Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.Volume)); // Add the master volume slider
        RegisterElement(1, "audio_game", "Game Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.GameVolume)); // Add the game volume slider
        RegisterElement(1, "audio_ui", "UI Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.UiVolume)); // Add the ui volume slider
        RegisterElement(1, "audio_player", "Player Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.PlayerVolume)); // Add the player volume slider

        RegisterElement(2, "control_interact", "Interact", new ControlField(Loader.Settings.Keybind.Interact)); // Add the interact control field
        RegisterElement(2, "control_left", "Left", new ControlField(Loader.Settings.Keybind.Left)); // Add the left control field
        RegisterElement(2, "control_right", "Right", new ControlField(Loader.Settings.Keybind.Right)); // Add the right control field
        RegisterElement(2, "control_jump", "Jump", new ControlField(Loader.Settings.Keybind.Jump)); // Add the jump control field
        RegisterElement(2, "control_down", "Down", new ControlField(Loader.Settings.Keybind.Down)); // Add the down control field (unused)
        RegisterElement(2, "control_zoomin", "Zoom In", new ControlField(Loader.Settings.Keybind.ZoomIn)); // Add the zoom in control field
        RegisterElement(2, "control_zoomout", "Zoom Out", new ControlField(Loader.Settings.Keybind.ZoomOut)); // Add the zoom out control field
    }

    private void AddButton (int id, string text, Vector2 position, int? xd = null) // Add a button to the screen
    {
        Text buttonText = new Text(); // Create the button text

        buttonText.Color = new Color(200, 200, 200, 255); // Set the button text color
        buttonText.FontSize = Convert.ToInt32(WindowManager.Height / 28); // Set the button text font size
        buttonText.Data = text; // Set the button text data
        buttonText.Font = FontUtils.ButtonFont; // Set the button text font
        
        Button? button = new Button(
            buttonText,
            position,
            new Vector2(xd ?? Convert.ToInt32(WindowManager.Width / 12), Convert.ToInt32(WindowManager.Height / 15.4)))
            {
                BgColor = new Color(0, 0, 0, 200), // Set the button background color
                BorderColor = Color.WHITE // Set the button border color
            }; // Create the button

        Buttons.Add(id, button); // Add the button to the screen
    }
    
    private void RegisterElement(int page, string id, string displayName, UiElement element) // Register an element
    {
        CheckPageNumber(page); // Check if the page exists
        
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) return; // If the elements are null, return

        element.Position = GetNextElementPosition(element, page);   // Set the element position
        element.RegisterSubElements(new Vector2(Safezone.X, element.Position.Y - 3)); // Register the sub elements
        element.Display?.Update(); // Update the element display
        elements.Add(id, element); // Add the element to the page
        
        Text labelText = new Text(); // Create the label text
 
        labelText.Color = new Color(200, 200, 200, 255); // Set the label text color
        labelText.FontSize = Convert.ToInt32(WindowManager.Height / 24);    // Set the label text font size
        labelText.Data = displayName;  // Set the label text data
        labelText.Font = FontUtils.ButtonFont; // Set the label text font

        PageLabels.TryGetValue(page, out List<Label>? pageLabels); // Get the labels on the page
        if (pageLabels == null) return; // If the labels are null, return

        Vector2 position = new Vector2(Safezone.X, element.Position.Y - WindowManager.Height / 24 - 5); // Set the label position
        pageLabels.Add(new Label(labelText, position)); // Add the label to the page
    }

    private Vector2 GetNextElementPosition(UiElement element, int page) // Get the next element position
    {
        int x = WindowManager.Width - (int)Safezone.X - (int)element.Dimensions.X; // Set the x position
        
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) return Safezone; // If the elements are null, return the safezone
        
        int yOffset; // The y offset
        if (elements.Count != 0) // If there are elements on the page
        { 
            UiElement? lastElement = elements.Values.Last(); // Get the last element
            yOffset = (int)(lastElement.Position.Y + lastElement.Dimensions.Y / 2); // Set the y offset
        }
        else yOffset = 70; // If there are no elements, set the y offset to 70
        int y = (int)Safezone.Y + yOffset; // Set the y position

        return new Vector2(x, y); // Return the position
    }

    private void CheckPageNumber(int page) // Check if the page exists
    {
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) 
        {
            PageElements.Add(page, new Dictionary<string, UiElement>()); // If the elements are null, add the page
        }
        
        PageLabels.TryGetValue(page, out List<Label>? labels); // Get the labels on the page
        if (labels == null)
        {
            PageLabels.Add(page, new List<Label>()); // If the labels are null, add the page
        }
    }

    public override void Tick()     // Called every frame the window is open for
    {
        PageElements.TryGetValue(Page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        PageLabels.TryGetValue(Page, out List<Label>? labels); // Get the labels on the page
        if (elements == null && labels == null) throw new VelocityException("No page to apply logic to."); // If the elements and labels are null, throw an exception
        
        int lowestY = 0; // The lowest y position
        int highestY = WindowManager.Height; // The highest y position
        
        foreach (var elementPair in elements) // Loop through the elements
        {
            elementPair.Value.Display.Update(); // Update the element display
            
            if (lowestY < elementPair.Value.Position.Y + elementPair.Value.Dimensions.Y) lowestY = (int) elementPair.Value.Position.Y; // Set the lowest y position
            if (highestY > elementPair.Value.Position.Y) highestY = (int)elementPair.Value.Position.Y - 70; // Set the highest y position

            
            // Stupid nested if statements TODO: change
            if (Page == 2) // If the page is the controls page
            {
                if (elementPair.Value.IsClicked()) // If the element is clicked
                {
                    foreach (var element in elements.Values) // Loop through the elements
                    {
                        if (element is ControlField controlField) // If the element is a control field
                        {
                            if (controlField.Display is ControlValueField controlValueField) // If the element display is a control value field
                            {
                                controlValueField.IsListening = false; // Stop listening for keybinds
                                controlValueField.Value = controlField.GetKey().ToString().Replace("KEY_", ""); // Set the value to the keybind
                            }
                        }
                    }
                     
                    if (elementPair.Value is ControlField selected) // If the element is a control field
                    {
                        if (selected.Display is ControlValueField controlValueField) // If the element display is a control value field
                        {
                            controlValueField.IsListening = true; // Start listening for keybinds
                        }
                    }
                }
            }
            
            switch (elementPair.Key) // Switch the element id
            {
                case "camera_smoothness":  // If the element is the camera smoothness slider
                    if (!elementPair.Value.IsClicked()) continue; // If the element is not clicked, continue
                    Loader.Settings.CameraLinearity = elementPair.Value.GetValue(2); // Set the camera linearity to the slider value
                    continue;
                case "resolution": // .. Etc.
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.Resolution = (int)elementPair.Value.GetValue();
                    Loader.WindowManager.ApplySettingsChange();
                    continue;
                case "fullscreen":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.FullScreen = Convert.ToBoolean(elementPair.Value.GetValue());
                    Loader.WindowManager.ApplySettingsChange();
                    break;
                case "audio_master":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.Volume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateVolume();
                    break;
                case "audio_game":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.GameVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateGameVolume();
                    break;
                case "audio_ui":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.UiVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateUiVolume();
                    break;
                case "audio_player":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.PlayerVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdatePlayerVolume();
                    break;
                case "control_interact":
                    Loader.Settings.Keybind.Interact = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_left":
                    Loader.Settings.Keybind.Left = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_right":
                    Loader.Settings.Keybind.Right = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_jump":
                    Loader.Settings.Keybind.Jump = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_down":
                    Loader.Settings.Keybind.Down = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_zoomin":
                    Loader.Settings.Keybind.ZoomIn = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_zoomout":
                    Loader.Settings.Keybind.ZoomOut = ((ControlField)elementPair.Value).GetKey();
                    break;
            }
        }

        if (Raylib.GetMouseWheelMove() != 0) // If the mouse wheel is moved
        {
            int offset = (int) Raylib.GetMouseWheelMove() * 20; // Set the offset

            if (lowestY + 200 + offset < WindowManager.Height) offset = 0; // If the lowest y position + 200 + the offset is less than the window height, set the offset to 0
            if (highestY + offset > 130) offset = 0; // If the highest y position + the offset is greater than 130, set the offset to 0
            
            foreach (var elementPair in elements) // Loop through the elements
            {
                elementPair.Value.Position.Y += offset; // Add the offset to the element position
                elementPair.Value.Display.Position.Y += offset; // Add the offset to the element display position
            } 

            foreach (var label in labels) label.Position.Y += offset; // Loop through the labels and add the offset to the position
            
        }

        foreach (var button in Buttons) // Loop through the buttons
        {
            if (!button.Value.IsClicked()) continue; // If the button is not clicked, continue

            switch (button.Key) // Switch the button id
            {
                case 0:
                    ToDefaults(); // Reset the settings to default
                    break;
                case 1:
                    Loader.Game.MenuManager.SetActiveWindow(_previousWindow ?? MainMenuScreen.UiId); // Set the active window to the previous window
                    Loader.Settings.Save(); // Save the settings
                    if (_previousWindow != null && _previousWindow != PauseScreen.UiId) Loader.Game.BackgroundRenderer.IsEnabled = false; // If the previous window was not the pause screen, disable the background renderer
                    break;
                case 2:
                    if (Page >= 2) Page = 0; // If the page is greater than or equal to 2, set the page to 0
                    else Page++; // Else, increment the page
                    break;
                case 3:
                    if (Page <= 0) Page = 2; // If the page is less than or equal to 0, set the page to 2
                    else Page--; // Else, decrement the page
                    break;
            }

        }
    }
    
    private void ToDefaults () // Reset the settings to default
    {
        Loader.Settings.ToDefault(); // Reset the settings
        Loader.WindowManager.ApplySettingsChange(); // Apply the settings
        Loader.AudioManager.UpdateVolume(); // Update the volume
        PageElements.Clear(); // Clear the elements
        PageLabels.Clear(); // Clear the labels
        RegisterElements(); // Re-register the elements
    }
}

```

Then we will need to define our renderer class so that our game knows how to render the menu.
We will draw a header and a footer and background rectangle first to display the page name, as a basis for our screen.
Then we will draw the elements on the screen for the given page. Then all of the labels for the given element.
Then we will draw our text for the page name, and finally the buttons.
```csharp
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using System.Numerics;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class SettingsScreenRenderer : UiRenderer
{
    private SettingsScreen _parent;

    public SettingsScreenRenderer(SettingsScreen parent) : base("velocity:window." + SettingsScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        int fontSize = Convert.ToInt32(WindowManager.Height / 22);
        
        Raylib.DrawRectangle(10, 10, WindowManager.Width - 20, WindowManager.Height - 20, new Color(60, 60, 60, 200));
        
        _parent.PageElements.TryGetValue(_parent.Page, out Dictionary<string, UiElement>? elements);
        if (elements == null)
            throw new VelocityException("No elements on page " + _parent.Page + " on window " + SettingsScreen.UiId);
        foreach (var elementPair in elements)
        {
            if (elementPair.Value.Renderer == null) throw new VelocityException("No renderer for element " + elementPair.Key + " on window " +
                SettingsScreen.UiId);

            if (elementPair.Value.Renderer.GetType().BaseType == typeof(AnimatableRenderer))
            {
                AnimatableRenderer renderer = (AnimatableRenderer) elementPair.Value.Renderer;
                renderer.DrawAnimation();
            }

            elementPair.Value.Renderer.Draw();
            
            Raylib.DrawLineEx(new Vector2((int)SettingsScreen.Safezone.X, (int)elementPair.Value.Position.Y + (int)elementPair.Value.Dimensions.Y + 25), new Vector2(WindowManager.Width - (int)SettingsScreen.Safezone.X, (int)elementPair.Value.Position.Y + (int)elementPair.Value.Dimensions.Y + 25), (Loader.Settings.Resolution + 1) * 2f, new Color(100, 100, 100, 255));
        }
        
        _parent.PageLabels.TryGetValue(_parent.Page, out List<Label>? labels);
        if (labels == null)
            throw new VelocityException("No elements on page " + _parent.Page + " on window " + SettingsScreen.UiId);
        
        foreach (var label in labels)
        {
            if (label.Renderer == null) throw new VelocityException("No renderer for label " + label.Text + " on window " +
                SettingsScreen.UiId);
            
            label.Renderer.Draw();
        }

        Raylib.DrawRectangle(0, 0, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        Raylib.DrawRectangle(0, (int)WindowManager.Height - (int)SettingsScreen.Safezone.Y, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        
        Vector2 size0 = Raylib.MeasureTextEx(FontUtils.Font, GetPageName(-1), fontSize, 2);
        Vector2 size1 = Raylib.MeasureTextEx(FontUtils.Font, GetPageName(), fontSize, 2);

        Raylib.DrawTextEx(FontUtils.Font, GetPageName(-1), new Vector2(WindowManager.Width / 2 - size1.X / 2 - size0.X - fontSize, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.GRAY);
        Raylib.DrawTextEx(FontUtils.Font, GetPageName(), new Vector2(WindowManager.Width / 2 - size1.X / 2, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.WHITE);
        Raylib.DrawTextEx(FontUtils.Font, GetPageName(1), new Vector2(WindowManager.Width / 2 + size1.X / 2 + fontSize, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.GRAY);

        foreach (var buttonPair in _parent.Buttons)
        {
            if (buttonPair.Value.Renderer == null)
                throw new VelocityException("No renderer for button " + buttonPair.Key + " on window " +
                                            SettingsScreen.UiId);
            
            buttonPair.Value.Renderer.Draw();
        }
    }
    private string GetPageName(int offset = 0)
    {
        int page = _parent.Page + offset;
        if (_parent.Page + offset + 1 > _parent.PageNames.Length) page = 0;
        if (_parent.Page + offset < 0) page = 2;

        return _parent.PageNames[page] + " Settings";   
    }
}
```

Now that we have our working classes for the settings menu, we can perform our third test, to see if our menu works as expected. We will link back to the [Testing](#testing-plan) section for this.
![](https://i.imgur.com/o491U98.png)
![](https://i.imgur.com/e7ZDUHz.png)
![](https://i.imgur.com/L4x22QF.png)
And as we can see, we have a working settings menu, with all of the functionality we need.
And thus concluding the settings menu, we can now move onto the next section.

> ### Errors to overcome
> Now for this section, while testing the functionality of these menus I came across a few errors that I had to overcome.
> - Various elements not being positioned correctly (fixed by adding a safe-zone)
> - Ui elements not changing settings values (accessing incorrect properties, fixed by changing the settings call) 
> - Ui elements not updating (fixed by calling the update function)
> - Ui elements not scrolling (fixed with various changes to the scroll function)
> - Settings not saving on quit (fixed by calling the save function after the draw loop in `Velocity.cs` our main)
> 
> All of these errors where fairly simple to fix, and where fixed in a timely manner.

If we look back to the [Testing](#testing-plan) section, we can see that we have completed the third test, and we are now ready to move onto the next section.

## Section 3 review

### What has been achieved
We have created a working system to load and play sounds, to load and provide textures from a single class, and created our first menus.

### How have we tested
We have tested our sound manager by playing a sound, and checking if it plays, and if it plays at the correct volume.
We have tested our asset manager by loading a texture, and checking if it loads, and displaying it on the screen.
We have tested our main menu by launching the game, and checking if it displays, and if the buttons work.

### How it fills the success criteria:
- [x] A working sound manager
- [x] A working asset manager
- [x] A working main menu
- [x] A working settings menu
- [x] Working re-useable ui elements

### Meetin the criteria of:
A working menu system, with a main menu, and a settings menu, with re-useable ui elements, with working sound loading playing, and asset loading.

### Quick summary of this section:
In this section we have created a working sound manager to play sounds, to load and provide textures, and created our first menus, along with its required manager, allowing for more menus to be created in future, with the pre-made ui elements.

## Section 4: Level files, manager, provider, and screen
So we have our main menu, and our settings menu, but we don't have a game yet. So we will need to create a level, and a way to load it.
We will start by creating a level file, using json, and then we will move onto the level manager, and then the level class itself, and finally the screen.
I have also included some utility classes that have been used throughout the project, and will be largely used in this section.


### Level files

Now that we have a main menu, and a settings menu, we can move onto the main part of the game, the level.
Now our levels will be read from `.json` files, and will be loaded into the game, and then stored in the level manager, ready to be used.
The currently active level will be stored in the `Game.cs` class, so that it can be accessed from anywhere in the game.
The level manager will be responsible for loading the levels, and storing them in a list, and then providing a way to access them.
The level base will be the base class for all levels, and will contain the basic data of a level, such as:
- Difficulty
- Background data (bg color, and image set)
- The object map (for collidable objects)
- The item map (for interactable items)
- And floating texts (for displaying text on the screen) along with their positions

They will format a little something like this: 

`level1.json`
```json
{
  "flags": {
    "background": 3,
    "backgroundColor": "98e2eb",
    "difficulty": 1
  },
  "objectMap": [
    "000000000000000000000000000000000000000000000000000000000000",
    "000000000000000000000000000000000000010010001002000000000000",
    "000000000000000000000000000000000010000000000001000000000000",
    "000000000000000000000000020000000112000000000001100000000000",
    "000000000000100000000010010000001111010000000001110000100001",
    "000020000200100000200010010000011111010020000021111001100011"
  ],
  "itemMap": [
    "000000000000000000000000000000000000000000000000000000000000",
    "000000000000000000000000000000000000040040004004000000000000",
    "000000000000000000000000000000000040000000000000000000000000",
    "000000000000000000000000040000000400000000000000000000000000",
    "000000000000400000000040000000004000040000000000000000400000",
    "000000000400000000000000000000040000000040004000000004004000",
    "000000000000004440003000000000000000000000044400000000044400"
  ],
  "floatingTexts": [
    {
      "position": [-6200, 400],
      "text": "Welcome to Velocity, \na game about speed and momentum.\nYour controls are at\nthe bottom of the screen."
    },
    {
      "position": [-5700, 400],
      "text": "In this game you will be \nrunning from level to level."
    },
    {
      "position": [-5300, 500],
      "text": "Collecting coins, unlocking upgrades \nand trying to beat the high score."
    },
    {
      "position": [-2200, 400],
      "text": "Some jumps require some help\nfrom upgrades to cross the gap."
    },
    {
      "position": [-1200, 50],
      "text": "If you get stuck in a level,\npress escape to pause and hit restart!"
    }
  ]
}
```

And we want our level schema so we can validate our level data, and it will define the structure of our level data.
It will look a little something like this:

```json
{
  "description": "Level data Schema",
  "type": "object",
  "properties": {
    "objectMap": {
      "type": "array",
      "minItems": 6,
      "maxItems": 6,
      "items": {
        "type": "string"
      }
    },
    "itemsMap": {
      "type": "array",
      "minItems": 6,
      "maxItems": 6,
      "items": {
        "type": "string"
      }
    },
    "flags":
    {
      "type": "object",
      "properties": {
        "background": {
          "type": "integer"
        },
        "backgroundColor": {
          "type": "string"
        },
        "difficulty": {
          "type": "integer"
        }
      }
    },
    "floatingTexts":
    {
      "type": "array",
      "items": {
        "type": "object",
        "properties": {
          "text": {
            "type": "string"
          },
          "position":
          {
            "type": "array",
            "minItems": 2,
            "maxItems": 2,
            "items": {
              "type": "integer"
            }
          }
        }
      }
    }
  }
}
```

Now that we have our data provider for the levels, we can move onto the level manager.

### Level manager

Firstly we will need to define a method for scanning the levels directory for levels, and then loading them into the game.
Then a function to register these levels to be loaded, so the program can keep track of the levels in a dictionary.
Then we will need to define a method for setting the current level, so we can load all the appropreate data into the game.
Then a method to load the next level, so we can go straight from one to another, in order.
Then a method to return all the level instances in the dictionary for our level screen.
And lastly a method to get a level by id so we can load levels from our level screen.
Now we have planned out all the methods, we can start to implement them.

`LevelManager.cs`
```csharp
using Newtonsoft.Json.Linq;
using Newtonsoft.Json.Schema;
using Velocity.Exception;
using Velocity.Utils;

namespace Velocity.Level;

public class LevelManager
{
    private readonly Dictionary<int, Level?> _levels = new(); // List of all levels

    public LevelManager() // Constructor
    {
        LoadLevels(); // Load all levels
    }

    // Read all level data files
    private void LoadLevels()
    {
        string levelDbRaw = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/levels.json".Replace("/", OsVersion.GetDirSeperator())); // Read level database file
        JObject levelDb = JObject.Parse(levelDbRaw); // Parse level database file
        
        // Iterate through every entry in the level database file
        foreach (var i in levelDb) 
        {
            string name = i.Key; // Get level name
            string? file = i.Value?.ToString(); // Get level file name

            if (file == null) continue; // If file is null, skip
            
            RegisterLevel(name, file); // Otherwise register the level
        }
    }

    // Validates and registers to database
    private void RegisterLevel(string name, string file) 
    {
        string rawSchema = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/levelSchema.json".Replace("/", OsVersion.GetDirSeperator())); // Read level schema file
        string levelRaw = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/".Replace("/", OsVersion.GetDirSeperator()) + file); // Read level file
        JSchema schema = JSchema.Parse(rawSchema); // Parse the data to the schema for validation

        JObject levelObj = JObject.Parse(levelRaw); // Parse the level data to a JObject so we can access its properties
 
        if (!levelObj.IsValid(schema)) return; // If the level data is not valid, skip

        _levels.Add(_levels.Values.Count, new Level(_levels.Values.Count, name, levelRaw)); // Otherwise add the level to the database with its name and raw data
    }
    
    public void SelectLevel(int id) // Select a level to load
    {
        _levels.TryGetValue(id, out Level? level); // Get the level from the database

        if (level == null) // If the level is null, throw a warning
        {
            Console.Error.WriteLine("Failed to load level to canvas: " + id);
            return;
        }
        
        level.Load(); // Load the level

        Loader.Game.Level = level; // Set the current level to the loaded level

        Loader.WindowManager.BackgroundColor = level.BackgroundColor; // Set the background color to the level's background color
    }

    public int LoadNextLevel() // Load the next level
    {
        if (Loader.Game.Level == null) return -1;  // If the current level is null, return -1
        int id = Loader.Game.Level.Id + 1; // Get the next level id

        if (LevelExists(id)) // If the next level exists, load it
        {
            SelectLevel(id); // Load the level
            return id + 1; // Return the next level id
        }

        return -1; // Otherwise return -1
    }

    private bool LevelExists (int id) // Check if a level exists
    {
        return _levels.ContainsKey(id); // Return if the level exists
    }

    public Dictionary<int, Level?>.ValueCollection GetLevels() // Get all levels
    {
        return _levels.Values; // Return all levels
    }

    public Level GetLevelById(int id) // Get a level by its id
    {
        _levels.TryGetValue(id, out Level? level); // Get the level from the database

        if (level == null) throw new VelocityException("Failed to get level by id: " + id);     // If the level is null, throw an error

        return level;   // Otherwise return the level
    }
}
```

### Level

Now that we have a level manager we need to define our level file so we can have a data provider for our levels.
It will contain the level width, height, name, id and raw data.
The level will parse the raw data and assign its properties.
Its properties are as follows:
- _levelData (or object map) - The level data for the collidable objects
- _itemMap (or item map) - The level data for the interactable items
- BackgroundColor - The background color of the level
- Background - The background image set of the level (stored as int for our asset manager)
- Difficulty - The difficulty of the level
- FloatingTexts - The floating texts for the level (list)

We will also need to define the class of FloatingTextData, to store all of the data for the floating texts.

Then we will need to define our methods.
Firstly will be the LoadData method for parsing our raw data and decoding it, and finally assigning it to the properties above.
Then we will need to define a method for loading the level, so we can load the level into the game.
Then the sub-methods for loading the objects, and items that can be called for the level.
Now we have planned out our methods we can start to implement them.

`Level.cs`
```csharp
using Newtonsoft.Json;
using Raylib_cs;
using Velocity.Game.Object;
using Velocity.Game.Object.FloatingText;
using Velocity.Math;
using Velocity.Utils;

namespace Velocity.Level;

public class FloatingTextData
{
    public Vector2 Position { get; } // Position of the text
    public string Text { get; } // Text to display
    
    public FloatingTextData(string text, Vector2 position) // Constructor
    {
        Text = text; // Set text
        Position = position; // Set position
    }
}

public class Level // Level class
{
    public const int LevelWidth = 60; // Width of the level
    public const int LevelHeight = 6; // Height of the level
    
    public readonly string Name;    // Name of the level
    public readonly int Id;         // Id of the level
    private readonly string _data;  // Raw level data

    private string[] _levelData = Array.Empty<string>(); // Level data
    private string[] _itemMap = Array.Empty<string>();   // Item map
    public Color BackgroundColor;                        // Background color
    public int Background = 1;                           // Background id
    public int Difficulty;                               // Difficulty of the level
    
    public readonly List<FloatingTextData> FloatingTexts = new (); // List of floating texts

    public Level(int id, string name, string data) // Constructor
    {
        Id = id; // Set id
        Name = name; // Set name
        _data = data; // Set data

        LoadData(); // Load data
    } 
    
    // Load json _data into data structure 
    private void LoadData()
    {
        dynamic ?levelData = JsonConvert.DeserializeObject(_data); // Deserialize json _data

        if (levelData == null) return; // If level data is null, skip

        _levelData = levelData.objectMap.ToObject<string[]>(); // Get object map
        
        _itemMap = levelData.itemMap.ToObject<string[]>(); // Get item map

        Background = levelData.flags.background ?? 1; // Set background id
        BackgroundColor = levelData.flags.backgroundColor != null ? ColorFormatter.from_string((string)levelData.flags.backgroundColor) :  new Color(0, 200, 255, 255); // Set background color (and handle default)
        Difficulty = levelData.flags.difficulty ?? 1; // Set difficulty

        foreach (var data in levelData.floatingTexts) // Iterate through floating texts
        {
            FloatingTextData floatingTextData = new FloatingTextData((string)data.text, new Vector2((double)data.position[0], Game.Game.FloorHeight - (double)data.position[1])); // Create floating text data
            
            FloatingTexts.Add(floatingTextData); // Add floating text data to list
        }
    }

    public void Load() // Load level
    { 
        LoadObjects(); // Load objects
        LoadItems();   // Load items
    }

    public string[] GetObjectMap() // Get object map (for level screen preview)
    {
        return _levelData; // Return object map
    }

    private void LoadObjects() // Load objects
    {
        int y = 200 * LevelHeight; // Set y to the top of the level
        foreach (var row in _levelData) // Iterate through each row in the level
        {
            int x = -200 * (LevelWidth / 2); // Set x to the left of the level
            foreach (var id in row) // Iterate through each colomn in the row
            {
                if (Convert.ToInt32(new string(id, 1)) == ObjectIds.Barrel) Loader.Game.ObjectManager.AddObject(Convert.ToInt32(new string(id,1)), new Vector2(x + 25, y)); // If the id is a barrel, add it with a different offset
                else if (!id.Equals('0')) Loader.Game.ObjectManager.AddObject(Convert.ToInt32(new string(id,1)), new Vector2(x, y)); // Otherwise add it normally
                x += 200; // Increment x
            }
            y -= 200; // Decrement y (load level top to bottom)
        }
    }

    private void LoadItems() // Load items
    {
        int y = (200 * LevelHeight) + 200; // Set y to the top of the level
        foreach (var row in _itemMap) // Iterate through each row in the level
        {
            int x = -200 * (LevelWidth / 2); // Set x to the left of the level
            foreach (var id in row) // Iterate through each colomn in the row
            {
                if (!id.Equals('0')) Loader.Game.ObjectManager.AddItemObject(Convert.ToInt32(new string(id,1)), new Vector2(x + (id.Equals('4') ? 100 : 75), y - (id.Equals('4') ? 100 : 75))); // Add the item (with correct offsets for item type)
                x += 200; // Increment x
            }
            y -= 200; // Decrement y (load level top to bottom)
        }
    }
}

```

Now that we have our level manager, and our level base, we can move onto the level screen.

### Level screen

We will need to define a method to handle what the screen does when the screen is opened.
We will need a `Tick` function to handle whats going on within the menu. 
Various method to register the on-screen elements.
And a method to handle to handle the seletion of the level.

`LevelScreen.cs`
```csharp
using Raylib_cs;
using Velocity.Game.Statistics;
using Velocity.Ui.Misc;
using Velocity.Math;
using Velocity.Ui.Render;
using Velocity.Utils;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class LevelScreen : Window
{
    public new static readonly int UiId = 3; // Unique id for this screen

    public readonly Dictionary<int, Button?> Buttons = new(); // Buttons on the screen

    public Button PlayButton; // Play button on the screen
    
    public readonly LevelField LevelField = new(); // Level field on the screen
    
    public LevelScreen() // Constructor
    {
        Renderer = new LevelScreenRenderer(this); // Set the renderer
        
        RegisterButtons(); // Register the buttons

        RegisterPlayButton(); // Register the play button
    }

    public override void OnDisplay(int? previous) // Called when the window is opened
    {
        base.OnDisplay(previous); // Call the base function
        LevelField.SelectedLevel = null; // Set the selected level to null
        
        if (previous == MainMenuScreen.UiId) // If the previous window was the main menu
        {
            Loader.Game.BackgroundRenderer.LoadTextures(); // Load the background textures
            Loader.Game.BackgroundRenderer.IsEnabled = true; // Enable the background renderer
        } 
    }

    public override void Tick() // Called every frame the window is open for
    {
        int lowestY = 0; // Lowest y value of the buttons
        int highestY = WindowManager.Height; // Highest y value of the buttons
        
        foreach (var pair in Buttons) // Loop through the buttons
        {
            // For scrolling
            if (lowestY < pair.Value.Position.Y + pair.Value.Dimensions.Y) lowestY = (int) pair.Value.Position.Y; // Set the lowest y value
            if (highestY > pair.Value.Position.Y) highestY = (int)pair.Value.Position.Y - 70; // Set the highest y value
            
            Color color = pair.Value.BgColor; // Get the button color
            
            if (pair.Value.IsMouseOver()) // If the mouse is over the button
            {
                color.a = 255; // Set the alpha to 255
                pair.Value.BgColor = color; // Set the button color
            }
            else
            {
                color.a = 100; // Set the alpha to 100
                pair.Value.BgColor = color; // Set the button color
            }

            if (pair.Value.IsClicked()) // If the button is clicked
            {
                Select(pair.Key); // Select the button
            }
        }

        bool result = PlayButton.IsClicked(); // Get the result of the play button click

        if (result && LevelField.SelectedLevel != null) // If the play button is clicked and a level is selected
        {
            Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the active window to the loading screen
            LoadingScreen.Trigger(LevelField.SelectedLevel.Name, 
                "Time to beat: " +
                StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(LevelField.SelectedLevel.Id)),
                () =>
                {
                    Loader.Game.LevelManager.SelectLevel(LevelField.SelectedLevel.Id);
                    Loader.Game.Run();
                    Loader.Game.MenuManager.DisableAll();
                    Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK);
                    return 0;
                }); // Trigger the loading screen with the level name and time to beat, and on completion load the level, run the game, and trigger a fadeout effect
        }
        else if (LevelField.SelectedLevel == null) // If no level is selected
        {
            PlayButton.Active = false; // Disable the play button
        }
        else // If a level is selected
        {
            PlayButton.Active = true; // Enable the play button
        }

        // For scrolling
        if (Raylib.GetMouseWheelMove() != 0)  // If the mouse wheel is moved
        { 
            int offset = (int) Raylib.GetMouseWheelMove() * 20; // Get the offset

            if (lowestY + 170 + offset < WindowManager.Height) offset = 0; // If the lowest y value is less than the window height, set the offset to 0
              
            if (highestY + offset > 70) offset = 0; // If the highest y value is greater than 70, set the offset to 0
            
            foreach (var elementPair in Buttons) // Loop through the buttons
            {
                elementPair.Value.Position.Y += offset; // Add the offset to the button's y value
            }
        }

        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // If escape is pressed, set the active window to the main menu
    }
    
    private void RegisterButtons() // Register the buttons
    {
        foreach (var level in Loader.Game.LevelManager.GetLevels()) // Loop through the levels
        {
            if (level == null) continue; // If the level is null, skip it
             
            string name = level.Name; // Get the level name

            int id = Buttons.Count; // Get the button id
            
            AddButton(id, name); // Add the button
        }
    }

    private void Select(int buttonId)  // Select a level
    {
        LevelField.SelectLevel(buttonId); // Select the level
    }

    private void RegisterPlayButton() // Register the play button
    {
        Text buttonText = new Text 
        {
            Color = Color.WHITE,
            FontSize = 48, 
            Data = "Play",
            Font = FontUtils.ButtonFont
        }; // Create the button text

        PlayButton = new Button(buttonText, new Vector2(WindowManager.Width - 360, WindowManager.Height - 180), new Vector2(300, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button
    }

    private void AddButton (int id, string text) // Add a button to the screen
    {
        Text buttonText = new Text 
        {
            Color = Color.WHITE,
            FontSize = 48,
            Data = text,
            Font = FontUtils.ButtonFont
        }; // Create the button text
        
        int y = (Buttons.Count + 1) * 140 + 20; // Get the y value of the button
        
        Button button = new Button(buttonText, new Vector2(40 + (OsVersion.GetOS() == OsVersion.Os.MacOs ? 20 : 0), y), new Vector2(700, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button
        
        Buttons.Add(id, button); // Add the button to the list
    }
}
```

Now that we have our base class for our level screen, we can move on to the renderer for the level screen.
We will need a black rectangle to draw over the background.
Then we will be using a raylib function called ScissorMode, this essentually allows us to draw within a rectangle, and anything outside of that rectangle will not be drawn.
Inside this rectangle we will draw all the buttons, so they draw inside a rectangle.
Then we will draw the level field (our information and data display about the level).
Then we will draw the play button.
Lastly we will draw a header for the screen, so the player knows what screen they are on.

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class LevelScreenRenderer : UiRenderer
{
    private readonly LevelScreen _parent;
    
    public LevelScreenRenderer(LevelScreen parent) : base("velocity:window." + LevelScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(10, 10, 30, 200));
        
        Raylib.BeginScissorMode(20, 140, 740, WindowManager.Height - 170);
        
        Raylib.DrawRectangle(20, 140, 740, WindowManager.Height - 170, Color.BLACK);
        foreach (var pair in _parent.Buttons)
        {
            pair.Value.Renderer.Draw();
        }
        
        Raylib.EndScissorMode();
        
        _parent.LevelField.Renderer.Draw();
        _parent.PlayButton.Renderer.Draw();
        
        Raylib.DrawRectangle(0,0, WindowManager.Width, 110, new Color(40, 40, 40, 200));
        Raylib.DrawLine(0, 110, WindowManager.Width, 110, Color.DARKGRAY);
        Raylib.DrawTextEx(FontUtils.Font, "Level Select", new Vector2(30, 20), 65, 2, Color.WHITE);
    }
}
```

> ### Errors to overcome
> Now for this section, while testing the functionality of these menus I came across a few errors that I had to overcome.
> - Buttons not being positioned correctly for mac-os (fixed by adding an offset with an os check)
> - Various adjustments to borders and margins 
> - Rectangles not displaying at correct size (fixed by changing the rectangle size to the element size / number of rectangles)
> - Level screen not displaying correctly (fixed by adding a scissor mode)

Now that we have the level system implemented, we can perform our next test. 
Test 10: Test the level system.
We will link back to the [Testing](#testing-plan) section for this.

![](https://i.imgur.com/4xN4ATd.png)
![](https://i.imgur.com/qnnNdil.png)

And we can now see that this is working as expected, and we can now move onto the next section.

### Utility classes

Now that we have our main game structure, we need some various files to help us with the game.
We will need a class to format the color codes specified in the level data, so we can use them in our game.
We will need a class to provide us with a ini file, for settings and other data saving.
We will need a file to parse our keyboard inputs into string values and back again.
We will need a file to check the OsVersion, so we can use the correct directory seperator for our operating system.
We will need a file to provide us with our directories for our assets.

They are all defined below

> `ColorFormatter.cs`
> ```csharp
> using Raylib_cs;
> 
> namespace Velocity.Utils;
> 
> public class ColorFormatter
> {
>     private static int H2d(char c) // Convert hex to decimal
>     {
>         return c switch
>         {
>             >= '0' and <= '9' => c - '0',
>             >= 'A' and <= 'F' => c - 'A' + 10,
>             >= 'a' and <= 'f' => c - 'a' + 10,
>             _ => 0
>         };
>     }
>     
>     public static Color from_string(string s) // Convert hex-code to color instance
>     {
>         var c = new Color((H2d(s[0])<<4)+H2d(s[1]), (H2d(s[2])<<4)+(byte)H2d(s[3]), (H2d(s[4])<<4)+(byte)H2d(s[5]), s.Length == 8 ? (H2d(s[6])<<4)+H2d(s[7]) : 255);
>         return c;
>     }
> }
> ```

> `IniFile.cs`
> ```csharp
> using System.Collections;
> 
> namespace Velocity.Utils;
> 
> /**
> * @ref https://gist.github.com/Sn0wCrack/5891612
>   */
>   public class IniFile
>   {
>   private readonly Hashtable _keyPairs = new Hashtable();
>   private readonly String _iniFilePath;
> 
>   private struct SectionPair
>   {
>   public string? Section;
>   public string? Key;
>   }
> 
>   /// <summary>
>   /// Opens the INI file at the given path and enumerates the values in the IniParser.
>   /// </summary>
>   /// <param name="iniPath">Full path to INI file.</param>
>   public IniFile(String iniPath)
>   {
>   TextReader? iniFile = null;
>   string? currentRoot = null;
> 
>        _iniFilePath = iniPath;
> 
>        if (!File.Exists(iniPath))
>        {
>            TextWriter tw = new StreamWriter(iniPath);
>            tw.Write("Velocity Settings");
>            tw.Close();
>        }
>        
>        try
>        {
>            iniFile = new StreamReader(iniPath);
> 
>            var strLine = iniFile.ReadLine();
> 
>            while (strLine != null)
>            {
>                strLine = strLine.Trim().ToUpper();
> 
>                if (strLine != "")
>                {
>                    if (strLine.StartsWith("[") && strLine.EndsWith("]"))
>                    {
>                        currentRoot = strLine.Substring(1, strLine.Length - 2);
>                    }
>                    else
>                    {
>                        string?[] keyPair = strLine.Split(new[] { '=' }, 2);
> 
>                        SectionPair sectionPair;
>                        string? value = null;
> 
>                        if (currentRoot == null)
>                            currentRoot = "ROOT";
> 
>                        sectionPair.Section = currentRoot;
>                        sectionPair.Key = keyPair[0];
> 
>                        if (keyPair.Length > 1)
>                            value = keyPair[1];
> 
>                        _keyPairs.Add(sectionPair, value);
>                    }
>                }
> 
>                strLine = iniFile.ReadLine();
>            }
> 
>        }
>        catch (System.Exception ex)
>        {
>            throw ex;
>        }
>        finally
>        {
>            iniFile?.Close();
>        }
>   }
> 
>   /// <summary>
>   /// Returns the value for the given section, key pair.
>   /// </summary>
>   /// <param name="sectionName">Section name.</param>
>   /// <param name="settingName">Key name.</param>
>   public string GetSetting(String sectionName, String settingName)
>   {
>   SectionPair sectionPair;
>   sectionPair.Section = sectionName.ToUpper();
>   sectionPair.Key = settingName.ToUpper();
> 
>        return (String)_keyPairs[sectionPair]!;
>   }
> 
>   /// <summary>
>   /// Enumerates all lines for given section.
>   /// </summary>
>   /// <param name="sectionName">Section to enum.</param>
>   public String[] EnumSection(String sectionName)
>   {
>   ArrayList tmpArray = new ArrayList();
> 
>        foreach (SectionPair pair in _keyPairs.Keys)
>        {
>            if (pair.Section == sectionName.ToUpper())
>                tmpArray.Add(pair.Key);
>        }
> 
>        return (String[])tmpArray.ToArray(typeof(String));
>   }
> 
>   /// <summary>
>   /// Adds or replaces a setting to the table to be saved.
>   /// </summary>
>   /// <param name="sectionName">Section to add under.</param>
>   /// <param name="settingName">Key name to add.</param>
>   /// <param name="settingValue">Value of key.</param>
>   public void AddSetting(String sectionName, String settingName, string? settingValue = null)
>   {
>   SectionPair sectionPair;
>   sectionPair.Section = sectionName.ToUpper();
>   sectionPair.Key = settingName.ToUpper();
> 
>        if (_keyPairs.ContainsKey(sectionPair))
>            _keyPairs.Remove(sectionPair);
> 
>        _keyPairs.Add(sectionPair, settingValue);
>   }
> 
>   /// <summary>
>   /// Remove a setting.
>   /// </summary>
>   /// <param name="sectionName">Section to add under.</param>
>   /// <param name="settingName">Key name to add.</param>
>   public void DeleteSetting(String sectionName, String settingName)
>   {
>   SectionPair sectionPair;
>   sectionPair.Section = sectionName.ToUpper();
>   sectionPair.Key = settingName.ToUpper();
> 
>        if (_keyPairs.ContainsKey(sectionPair))
>            _keyPairs.Remove(sectionPair);
>   }
> 
>   /// <summary>
>   /// Save settings to new file.
>   /// </summary>
>   /// <param name="newFilePath">New file path.</param>
>   private void SaveSettings(String newFilePath)
>   {
>   ArrayList sections = new ArrayList();
>   string tmpValue = "";
>   String strToSave = "";
> 
>        foreach (SectionPair sectionPair in _keyPairs.Keys)
>        {
>            if (!sections.Contains(sectionPair.Section))
>                sections.Add(sectionPair.Section);
>        }
> 
>        foreach (String section in sections)
>        {
>            strToSave += ("[" + section + "]\r\n");
> 
>            foreach (SectionPair sectionPair in _keyPairs.Keys)
>            {
>                if (sectionPair.Section == section)
>                {
>                    tmpValue = (String)_keyPairs[sectionPair]!;
> 
>                    tmpValue = "=" + tmpValue;
> 
>                    strToSave += (sectionPair.Key + tmpValue + "\r\n");
>                }
>            }
> 
>            strToSave += "\r\n";
>        }
> 
>        try
>        {
>            TextWriter tw = new StreamWriter(newFilePath);
>            tw.Write(strToSave);
>            tw.Close();
>        }
>        catch (System.Exception ex)
>        {
>            throw ex;
>        }
>   }
> 
>   /// <summary>
>   /// Save settings back to ini file.
>   /// </summary>
>   public void SaveSettings()
>   {
>   SaveSettings(_iniFilePath);
>   }
>   }
> ```
> **CREDIT:** https://gist.github.com/Sn0wCrack/5891612

> `KeyParser.cs`
> ```csharp
> using Raylib_cs;
> 
> namespace Velocity.Utils;
> 
> public class KeyParser
> {
>     public static KeyboardKey ToKey(string? key) // Convert string to KeyboardKey
>     {
>         string find = key.Replace("KEY_", "").ToLower();
>         return find switch
>         {
>             "a" => KeyboardKey.KEY_A,
>             "b" => KeyboardKey.KEY_B,
>             "c" => KeyboardKey.KEY_C,
>             "d" => KeyboardKey.KEY_D,
>             "e" => KeyboardKey.KEY_E,
>             "f" => KeyboardKey.KEY_F,
>             "g" => KeyboardKey.KEY_G,
>             "h" => KeyboardKey.KEY_H,
>             "i" => KeyboardKey.KEY_I,
>             "j" => KeyboardKey.KEY_J,
>             "k" => KeyboardKey.KEY_K,
>             "l" => KeyboardKey.KEY_L,
>             "m" => KeyboardKey.KEY_M,
>             "n" => KeyboardKey.KEY_N,
>             "o" => KeyboardKey.KEY_O,
>             "p" => KeyboardKey.KEY_P,
>             "q" => KeyboardKey.KEY_Q,
>             "r" => KeyboardKey.KEY_R,
>             "s" => KeyboardKey.KEY_S,
>             "t" => KeyboardKey.KEY_T,
>             "u" => KeyboardKey.KEY_U,
>             "v" => KeyboardKey.KEY_V,
>             "w" => KeyboardKey.KEY_W,
>             "x" => KeyboardKey.KEY_X,
>             "y" => KeyboardKey.KEY_Y,
>             "z" => KeyboardKey.KEY_Z,
>             "1" => KeyboardKey.KEY_ONE,
>             "2" => KeyboardKey.KEY_TWO,
>             "3" => KeyboardKey.KEY_THREE,
>             "4" => KeyboardKey.KEY_FOUR,
>             "5" => KeyboardKey.KEY_FIVE,
>             "6" => KeyboardKey.KEY_SIX,
>             "7" => KeyboardKey.KEY_SEVEN,
>             "8" => KeyboardKey.KEY_EIGHT,
>             "9" => KeyboardKey.KEY_NINE,
>             "0" => KeyboardKey.KEY_ZERO,
>             "up" => KeyboardKey.KEY_UP,
>             "down" => KeyboardKey.KEY_DOWN,
>             "left" => KeyboardKey.KEY_LEFT,
>             "right" => KeyboardKey.KEY_RIGHT,
>             "minus" => KeyboardKey.KEY_MINUS,
>             "equal" => KeyboardKey.KEY_EQUAL,
>             "left_shift" => KeyboardKey.KEY_LEFT_SHIFT,
>             "right_shift" => KeyboardKey.KEY_RIGHT_SHIFT,
>             "tab" => KeyboardKey.KEY_TAB,
>             "space" => KeyboardKey.KEY_SPACE,
>             _ => KeyboardKey.KEY_NULL
>         };
>     }
> }
> ```

> `OsVersion.cs`
> ```csharp
> namespace Velocity.Utils;
> 
> public class OsVersion
> {
> public static Os GetOS() // Get the current OS
> {
> switch (Environment.OSVersion.Platform)
> {
> case PlatformID.Win32Windows: return Os.Windows;
> case PlatformID.MacOSX: return Os.MacOs;
> case PlatformID.Unix: return Os.Linux;
> default: return Os.Other;
> }
> }
> 
>     public static string GetDirSeperator () // Get the directory seperator for the current OS
>     {
>         switch (GetOS())
>         {
>             case Os.MacOs:
>             case Os.Linux:
>                 return "/";
>             case Os.Windows: return "\\";
>             default: return "/";
>         }
>     }
> 
>     public enum Os // Enum for the OS
>     {
>         Windows = 0,
>         MacOs = 1,
>         Linux = 2,
>         Other = 3
>     }
> }
> ```

These serve as utility classes for our game, and will be used throughout the classes.

I did not encounter any errors with this section.

## Section 4 review

### What has been achieved
Created a level system, with a level manager, level screen, level file reading.
Allowing for us to make manage and load levels into the game.
Giving us an easy way to access the level data.

### How we have tested
By creating a test level, and loading it into the game.
We can see that the level is loaded correctly, and the level screen is working as expected.

### How it fills our success criteria
- [x] Load levels from a file
- [x] Display levels in a menu
- [x] Select levels from a menu
- [x] Give a provider for an easy way to acess level data

### Meeting the criteria of:
A working level system, that allows us to read from json files, add new levels, load existing ones, access there data easily, and display them in a menu.

## Section 5: Physics, Player, and camera controller
We have a pretty good looking base for our game, but we need to add some physics and a player, with a camera that follows them.
This will be comprised of a few different parts, so we will break it down into sections.

### Base physics

Now that we have our main game structure, we need to implement the base physics for our game.
We will need to define a class for our physics that we can assign to our player, so we can handle the physics of our game.
This will be defined as a base class so we can extend our other classes from it and assign them physics.
In this class we will need:
- Property for the enable state of the physics, so we can turn them off
- Property for the gravity state, so we can turn off gravity
- Property for if the player has collided with the floor, so we know when it happens
- Position, dimensions and velocity properties, so we know where the player is, the bounding box of the player so we can calculate face to face collision and the velocity of the player so we can move the player
- A method to add velocity to the player so our controller can move the player
- An enable disable function so we can turn the physics on and off
- A method to calculate gravity, to calculate floor collision (in this case floor y is at 10000), to then calculate friction resistance from the floor and other objects, to calculate air resistance, to soft-limit the players velicty for terminal velocity, and finally a dead zone for the player so they don't move when they are not being controlled (issues with doubles and floats not returning to 0 when dividing)
- A method to apply these calculations to the player

So our physics loop will be 3 main steps:
- Add velocity
- Calculate velocity difference + physics and collision + gravity
- Apply calculations

And we can interupt these steps if necessary.

Now we have our structure we can define the class

```csharp
using Velocity.Math;

namespace Velocity.Game.Physics;

public abstract class BasePhysics
{
    public bool IsEnabled = true; // If the physics should be applied
    public bool HasGravity = false;  // If the physics should have gravity
    public bool OnFloor; // If the physics object is on the floor
    
    public Vector2 Position; // Position of the physics object
    public readonly Vector2 Dimensions; // Dimensions of the physics object
    public Vector2 Velocity; // Velocity of the physics object

    protected BasePhysics(Vector2 position, Vector2 dimensions) // Constructor
    {
        Position = position; // Set position
        Velocity = new Vector2(); // Set velocity
        Dimensions = dimensions; // Set dimensions
    }

    public void AddVelocity(double x = 0, double y = 0, bool jump = false) // Add velocity to the physics object
    {
        if (System.Math.Abs(Velocity.X) + System.Math.Abs(x) > PhysicsConst.MaxVelocity && !jump && !OnFloor) // If the x velocity is greater than the max velocity and the physics object is not jumping and the physics object is not on the floor
        {
            double difference = Double.Abs(PhysicsConst.MaxVelocity) - Double.Abs(Velocity.X); // Calculate the difference between the max velocity and the current velocity
            x = Velocity.X > 0 ? difference : -difference; // Set x to the difference if the velocity is greater than 0, otherwise set x to the negative difference

        } else if (System.Math.Abs(System.Math.Abs(Velocity.X) - PhysicsConst.MaxVelocity) == 0 && !jump && !OnFloor) x = 0; // If the velocity is equal to the max velocity and the physics object is not jumping and the physics object is not on the floor, set x to 0
        
        if (System.Math.Abs(Velocity.Y) + System.Math.Abs(y) > PhysicsConst.MaxVelocity && !jump && !OnFloor) // If the y velocity is greater than the max velocity and the physics object is not jumping and the physics object is not on the floor
        {
            double difference = Double.Abs(PhysicsConst.MaxVelocity - Velocity.Y); // Calculate the difference between the max velocity and the current velocity
            y = Velocity.Y > 0 ? difference : -difference; // Set y to the difference if the velocity is greater than 0, otherwise set y to the negative difference

        } else if (System.Math.Abs(System.Math.Abs(Double.Round(Velocity.Y)) - PhysicsConst.MaxVelocity) == 0 && !jump && !OnFloor) y = 0; // If the velocity is equal to the max velocity and the physics object is not jumping and the physics object is not on the floor, set y to 0
        
        if (x != 0) Velocity.X += x; // Add x to the velocity if x is not 0
        if (y != 0) Velocity.Y -= y; // Add y to the velocity if y is not 0
    }

    public void SetEnabled(bool value = true) // Set if the physics should be applied
    {
        IsEnabled = value; // Set if the physics should be applied
    }

    // Calculate the base physics
    public virtual void Tick() {
        if (!IsEnabled) return; // If the physics should not be applied, return
         
        if (HasGravity && !OnFloor) Velocity.Y += PhysicsConst.Gravity; // If the physics object has gravity and is not on the floor, add gravity to the y velocity

        double footY = Position.Y + Dimensions.Y / 2; // Calculate the foot y position

        if (footY >= Game.FloorHeight - PhysicsConst.MaxVelocity) // If the foot y position is greater than or equal to the floor height minus the max velocity
        {
            if (Convert.ToInt32(footY) == Game.FloorHeight) // If the foot y position is equal to the floor height
            {
                if (Velocity.Y >= 0) // If the y velocity is greater than or equal to 0
                {
                    Velocity.Y = 0; // Set the y velocity to 0
                }

                OnFloor = true; // Set on floor to true

            }
            else if (footY + Velocity.Y >= Game.FloorHeight && footY <= Game.FloorHeight) // If the foot y position plus the y velocity is greater than or equal to the floor height and the foot y position is less than or equal to the floor height
            {
                Velocity.Y = 0; // Set the y velocity to 0
            }
            else OnFloor = false; // Set on floor to false

            if (Position.Y >= Game.FloorHeight + 200) // If the y position is greater than or equal to the floor height plus 200 (respawn the player if they somehow end up below the floor)
            {
                Position.Y = Game.FloorHeight - 100; // Set the y position to the floor height minus 100
                return; // Return
            }
        }

        if (OnFloor) // If the player is on the floor
        {
            double frictionLossX = (Velocity.X / PhysicsConst.MaxVelocity) * PhysicsConst.Friction; // Calculate the friction loss for the x velocity (friction constant times the players current velocity over max velocity)
            Velocity.X -= frictionLossX; // Subtract the friction loss from the x velocity
        }
        
        double airResistanceLossX = (Velocity.X / PhysicsConst.MaxVelocity) * PhysicsConst.AirResistance; // Calculate the air resistance loss for the x velocity (air resistance constant times the players current velocity over max velocity)
        Velocity.X -= airResistanceLossX; // Subtract the air resistance loss from the x velocity
        
        double airResistanceLossY = (Velocity.Y / PhysicsConst.MaxVelocity) * PhysicsConst.AirResistance; // Calculate the air resistance loss for the y velocity (air resistance constant times the players current velocity over max velocity)
        Velocity.Y -= airResistanceLossY; // Subtract the air resistance loss from the y velocity
        
        
        if (Velocity.X is >= -0.05 and < 0 or <= 0.05 and > 0) Velocity.X = 0.0; // If the x velocity is greater than or equal to -0.05 and less than 0 or less than or equal to 0.05 and greater than 0, set the x velocity to 0 (return to 0 if reaches below 0.05 velocity, loss of accuracy when subtracting numbers from doubles)
        if (Velocity.Y is >= -0.05 and < 0 or <= 0.05 and > 0) Velocity.Y = 0.0; // If the y velocity is greater than or equal to -0.05 and less than 0 or less than or equal to 0.05 and greater than 0, set the y velocity to 0 (return to 0 if reaches below 0.05 velocity, loss of accuracy when subtracting numbers from doubles)

        
        if (System.Math.Abs(Velocity.X) is > 0 and > PhysicsConst.MaxVelocity) // If the absolute value of the x velocity is greater than 0 and greater than the max velocity
            Velocity.X = Velocity.X > 0 ? PhysicsConst.MaxVelocity : -PhysicsConst.MaxVelocity;  // Set the x velocity to the max velocity if the x velocity is greater than 0, otherwise set the x velocity to the negative max velocity (velocity soft-limits)
        
        if (System.Math.Abs(Velocity.Y) is > 0 and > PhysicsConst.MaxVelocity) // If the absolute value of the y velocity is greater than 0 and greater than the max velocity
            Velocity.Y = Velocity.Y > 0 ? -PhysicsConst.MaxVelocity : PhysicsConst.MaxVelocity; // Set the y velocity to the negative max velocity if the y velocity is greater than 0, otherwise set the y velocity to the max velocity (velocity soft-limits)
    }

    protected void UpdatePosition() // Update the position of the physics object
    {
        Position.Change(Double.Round(Velocity.X), Double.Round(Velocity.Y)); // Change the position by the velocity
    }
    
}
```

This file references a constants file, which is defined below.

```csharp
namespace Velocity.Game.Physics;

public abstract class PhysicsConst
{
    public const double Gravity = 1;
    public const int MaxVelocity = 80;
    public const int MaxAcceleration = 14;
    public const int Acceleration = 2;
    public const double Friction = 8;
    public const double AirResistance = 0.5;
    public const int Jump = 26;
}
```

### Physics manager
Now that we have our base physics, we need a way to manage the physics of our game.
We can do this by creating a simple class to register, stop and update the physics of our game.

We will need:
- A list of physics objects to update
- A method to register a physics object
- A method to stop a physics object
- A method to update the physics objects

```csharp
namespace Velocity.Game.Physics;

public class PhysicsManager
{
    private List<BasePhysics> _physicsObjects = new();

    public void RegisterObject (BasePhysics obj) // Register an object to be ticked
    {
        _physicsObjects.Add(obj);
    }

    // TODO: Unregister object (we only really need this for the player, so we dont need this yet)
    
    public void Stop() // Stop the physics manager
    {
        _physicsObjects = new();
    }
    
    public void Tick() // Tick the physics manager
    {
        foreach (var obj in _physicsObjects) obj.Tick(); // Iterate through all physics objects and tick them
    }
}
```

I did not encounter any errors with the physics manager.

### Player

Now that we have our base physics class, we can move onto the player.

For the player we will need:
- A property for the player's health
- A property for the player's renderer
- A property for the player's controller
- A property for the player's state (enum, alive, dead, etc) [unused]
- A property for the player's apperence 
- A method to damage the player (unused)
- A method called by the renderer (TODO: calculate sounds seperately) to calculate the sounds that need to be played
- And a method for resetting the players current state

This will provide us with all of the necisary data to keep track of the player.
As previously mensioned, I will be extending this class from BasePhysics to provide the player with physics.
As you can see from the code below, I have extended it from the Collidable class, this will come later in the section, but for now you need to know that Collidable is a child class of BasePhysics, so will behave the same until we add our object collision.

```csharp
using Velocity.Game.Physics;
using Velocity.Math;


namespace Velocity.Player;

public class Player : Collidable
{
    public readonly PlayerRenderer? Renderer; // Renderer for player

    public int Appearance = 2; // Appearance of player

    public PlayerState State; // State of player (Unused)
 
    public double Health = 3; // Health of player

    private int _soundStep; // Step for sound

    public Player(Vector2 spawn) : base(spawn, new Vector2(70, 175)) // Constructor
    {
        Renderer = new PlayerRenderer(this); // Create renderer
        var controller = new PlayerController(this); // Create controller

        State = PlayerState.Alive; // Set state to alive
        
        Loader.ControlManager.RegisterController(controller); // Register controller
    }

    public void Damage() // Damage player
    {
        Health -= 1; // Decrement health
        if (Health <= 0) State = PlayerState.Dead; // Set state to dead if health is 0
    }

    public void HandleMoveSound() // Handle move sound
    {
        _soundStep++; // Increment sound step
        if (_soundStep >= 18) _soundStep = 0; // Reset sound step if it is greater than 18
        if (_soundStep % 3 == 0 && OnFloor && Velocity.X != 0) Loader.AudioManager.PlaySound("player.walk"); // Play sound if sound step is divisible by 3 and player is on floor and player is moving
    }

    public void Reset() // Reset player
    {
        State = PlayerState.Alive; // Set state to alive
        Health = 3; // Set health to 3 
        Position = new Vector2(-200 * (Level.Level.LevelWidth / 2 + 1), Game.Game.FloorHeight - 300); // Set position to spawn
        Velocity = new Vector2(); // Set velocity to 0
        OnFloor = false; // Set on floor to false
    }
}

public enum PlayerState // Player state
{
    Alive = 1, // Alive = 1
    Dead = 0 // Dead = 0
}
```

Now that we have our player, we can move onto the player renderer.

### Player renderer

For now the player will be represented by a rectangle. So we can test, and we will add the player sprite later.
This is for testing peruses and will be changed later.

We will need to calculate the players position as a sprite, by finding the players position and dimensions, and then calculating the position of the sprite by taking away half the width and height from the x and y respectively.

```csharp
using Velocity.Window.Render.Renderers;
using Raylib_cs;

namespace Velocity.Player;

public class PlayerRenderer : ElementRenderer
{
    public PlayerRenderer(Player parentPlayer) : base("main:player")
    {
        Player = parentPlayer;
    }

    public override void Draw()
    {
        int x = Convert.ToInt32(Player.Position.X) - (Convert.ToInt32(Player.Dimensions.X) / 2);
        int y = Convert.ToInt32(Player.Position.Y) - (Convert.ToInt32(Player.Dimensions.Y) / 2);

        int width = Convert.ToInt32(Player.Dimensions.X);
        int height = Convert.ToInt32(Player.Dimensions.Y);
        
        Raylib.DrawRectangle(x, y, width, height, Color.WHITE);
    }
    
    public Player Player { get; set; }
}
```

Now that we have our player and player renderer, we can move onto the player controller.

### Player controller

For the player controller we will need:
- A property to hold the player instance
- A property (bool) to state if the player can jump (to stop being able to jump in mid air) [links back to the OnFloor var in the physics]
- And our apropreate functions from IControllable so we can control the player

For each of our directions we will calculate the players velocity by checking for any movement powerups and then adding the velocity to the player.
We also need to check for our maximum velocity so the player doesnt over accelerate.

```csharp
using System.Diagnostics.Metrics;
using Velocity.Game.Physics;
using Velocity.Input;
using Velocity.Math;

namespace Velocity.Player;

public class PlayerController : IControllable
{
    private readonly Player _player; // Player
    private bool _canJump = true; // If the player can jump

    public PlayerController(Player parent) // Constructor
    {
        _player = parent; // Set player
    }
    
    public void OnJump() // Jump
    {
        if (!_canJump && _player.OnFloor) _canJump = true; // If the player is on the floor and cannot jump, set can jump to true
        if (!_canJump) return; // If the player cannot jump, return
        
        _player.AddVelocity(0, PhysicsConst.Jump, true); // Add jump velocity to the player
        Loader.AudioManager.PlaySound("player.jump"); // Play jump sound
        _canJump = false; // Set can jump to false
    }

    public void OnLeft() // Left movement
    {
        if (_player.Velocity.X > (-PhysicsConst.MaxAcceleration - (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6.66)) / (_player.OnFloor ? 1 : 1.5)) _player.AddVelocity((-PhysicsConst.Acceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (-PhysicsConst.MaxAcceleration / 6)) / (_player.OnFloor ? 1 : 1.5)); // Add left velocity to the player if the player is on the floor and the player's x velocity is less than the max velocity or the player is not on the floor with multipliers if the player has the speed powerup
    }

    public void OnRight() // Right movement
    {
        if (_player.Velocity.X < (PhysicsConst.MaxAcceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6.66)) / (_player.OnFloor ? 1 : 1.5)) _player.AddVelocity((PhysicsConst.Acceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6))  / (_player.OnFloor ? 1 : 1.5));  // Add right velocity to the player if the player is on the floor and the player's x velocity is less than the max velocity or the player is not on the floor with multipliers if the player has the speed powerup
    }

    public void OnDown() // TODO: Use for crouching
    {
        if (_player is { HasGravity: false, Velocity.Y: > -PhysicsConst.MaxAcceleration }) _player.AddVelocity(0, -PhysicsConst.Acceleration); // Add down velocity to the player if the player has gravity and the player's y velocity is less than the max velocity
    }
}
```

> #### Errors to overcome
> Now for this section, while testing the functionality of these classes I came across a few errors that I had to overcome.
> - Player not moving (fixed by adding a multiplier to the velocity if the player is not on the floor)
> - Player not jumping (fixed by adding a bool to check if the player can jump)
> - Player jumping in mid air (fixed by adding a bool to check if the player can jump)
> - Player phasing through the floor (fixed by calculating the difference between floor and player and setting the player to the floor if the difference is less than 0)
> - Player not moving at the correct speed (fixed by adding a multiplier to the velocity if the player has the speed powerup)
> - Player not stopping (moving slowly back and fourth when not moving) (fixed by adding a dead zone to the physics)


Now we have our 3 dedicated parts for each section of our control loop, listen, update, draw, we can now perform our next test.
Test 6: Test the player physics.
We will link back to the [Testing](#testing-plan) section for this.
> Last thing of note for this section, we will need a debug floor renderer, so we can see where our player lands on the floor.
> This will be defined below
> To be changed in the future
> ```csharp
> using Raylib_cs;
> using Velocity.Window.Render.Renderers;
> 
> namespace Velocity.Game.Misc;
> 
> public class FloorRenderer : ElementRenderer
> {
>     private Game game;
>     
>     public FloorRenderer(Game game) : base("velocity:floor")
>     {
>         this.game = game;
>     }
> 
>     public override void Draw()
>     {
>         for (int i = -50; i < 50; i++) Raylib.DrawRectangle(400 * i, Game.FloorHeight, 400, 200, i % 2 == 0 ? Color.RED : Color.ORANGE);
>     }
> }
> ```

Now we can uncomment our lines for player in the [Debug Renderer](#debug-renderer) and we can see our player in action.

[Click here for video](https://imgur.com/lKZUf9U)

And we can now see that this is working. We can now move onto the next section.

### Camera system
Now when our user is in a menu, there is no camera present, as we are rendering straight to the physical x and y position of the screen.
So we dont need to worry about rendering the menus at the cameras position.

However, when we are in game, we need to render the game at the cameras position.
So we will need to create a camera controller that will handle the camera position.
We will need:
- A property for the camera position (provided by Raylib.Camera2D)
- A property for the smoothed and previous camera position (for smoothing the camera)
- The zoom of the camera
- The zoom offset of the camera (for zooming in and out)
- Again the previous and smoothed zoom (for smoothing the zoom)
- A method to initialise the camera at the players position.
- A method to zoom the camera in and out (provided by IControllable)
- A method to apply the smoothing of the camera
- And finally a method to update the camera position

Our class will look like this: 
```csharp
using Velocity.Math;
using Raylib_cs;
using Velocity.Game.Object;
using Velocity.Input;
using Velocity.Window;

namespace Velocity.Game;

public class CameraController : IControllable
{ 
    private readonly Game _game; // The game instance
     
    private Vector2 _smoothedPosition = Vector2.Zero(); // The smoothed position of the camera
    private Vector2 _prevPosition = Vector2.Zero(); // The previous position of the camera

    private float _zoom = 1.0f; // The zoom of the camera
    private float _zoomOffset = 0.0f; // The zoom offset of the camera
    private float _smoothedZoom = 1.0f; // The smoothed zoom of the camera
    private float _prevZoom = 1.0f; // The previous zoom of the camera


    public CameraController(Game game) // Constructor
    {
        _game = game; // Set game
        Loader.WindowManager.Camera.offset = new System.Numerics.Vector2(WindowManager.Width / 2 - (WindowManager.Width / 8), WindowManager.Height / 2 + WindowManager.Height / 3); // Set camera offset to center of screen
        Loader.WindowManager.Camera.target = new System.Numerics.Vector2(0, Game.FloorHeight); // Set camera target the floor
    }

    public void Init()
    {
        _smoothedPosition.X = _game.Player.Position.X; // Set smoothed position x to player x
        _smoothedPosition.Y = _game.Player.Position.Y; // Set smoothed position y to player y

        Loader.WindowManager.Camera.target = new System.Numerics.Vector2(Convert.ToSingle(_smoothedPosition.X), Convert.ToSingle(_smoothedPosition.Y)); // Set camera target to smoothed position
        Loader.WindowManager.Camera.zoom = _smoothedZoom; // Set camera zoom to smoothed zoom
    }
    
    public void Tick()
    {
        ApplySmoothing(_game.Player.Position); // Apply smoothing to the player position
        
        Loader.WindowManager.Camera.target = new System.Numerics.Vector2( 
            Convert.ToSingle(_smoothedPosition.X), Convert.ToSingle(
                Game.FloorHeight - ((Game.FloorHeight - _game.Player.Position.Y) / 2) * (1 + _zoomOffset) / 2) // Set camera target to smoothed position with zoom offset applied so that the camera zooms out when the player is higher up
            );
        Loader.WindowManager.Camera.zoom = _smoothedZoom; // Set camera zoom to smoothed zoom
    }

    private void ApplySmoothing(Vector2 to) // Apply smoothing to the player position
    { 
        double ratio = 1 - Loader.Settings.CameraLinearity;  // Calculate the smoothing ratio

        float zoomOffset = Convert.ToSingle((_game.Player.Position.Y + _game.Player.Dimensions.Y / 4) /
                                                            (Game.FloorHeight - WindowManager.Height / 2)); // Calculate the zoom offset based on the player position and the floor height
        
        _zoom = zoomOffset < 1 ? float.Pow(zoomOffset, 3.6f * (0.9f + _zoomOffset)) : 1; // Calculate the zoom based on the zoom offset

        _zoom += _zoomOffset; // Add the zoom offset to the zoom
        
        _smoothedPosition.X = Convert.ToInt32(to.X * ratio + _prevPosition.X * Loader.Settings.CameraLinearity); // Calculate the smoothed position x
        _smoothedPosition.Y = Convert.ToInt32(to.Y * ratio + _prevPosition.Y * Loader.Settings.CameraLinearity); // Calculate the smoothed position y
        _prevPosition = _smoothedPosition; // Set the previous position to the smoothed position
        
        _smoothedZoom = _zoom * 0.15f + _prevZoom * 0.85f; // Calculate the smoothed zoom
        _prevZoom = _smoothedZoom; // Set the previous zoom to the smoothed zoom
    }

    public void OnZoomIn() // Zoom in
    {
        if (_zoomOffset < 0.1f) _zoomOffset += 0.01f; // If the zoom offset is less than 0.1, add 0.01 to the zoom offset
    }

    public void OnZoomOut() // Zoom out
    {
        if (_zoomOffset > -0.2f) _zoomOffset -= 0.01f; // If the zoom offset is greater than -0.2, subtract 0.01 from the zoom offset
    }
}
```

> #### Errors to overcome
> - Camera not smoothing (fixed by adding a smoothing ratio)
> - Camera not zooming out the correct amount when the player moves up the screen (fixed by changing the divider of the y position)
> - Camera zooming out too much when the player moves up the screen (fixed by adding a deadzone half way up the screen)
> - Not allowing the more of the play field to be seen (fixed by changing the camera offset)

Now we have added this we can move on to our next test.
Test 4: Test the camera system.
We will link back to the [Testing](#testing-plan) section for this.

[Click here for video](https://imgur.com/Y2auGC4)

Now this is working we can move on to our next section.

## Section 5 review

### What has been achieved
Created a physics system, with a physics manager, base physics class. Created a player class, with a player renderer, and a player controller. Created a camera controller to handle the camera position and zoom.

### How we have tested
By entering the game and moving the player around, we can see that the player is moving and the camera is following the player.
Displaying the player to test the renderer.
Testing the collision of the floor plane and the player.

### How it fills our success criteria
- [x] Create a physics system
- [x] Create a parent physics class for all physics objects
- [x] Create a player class with physics
- [x] Create a controlable player with the keyboard
- [x] Create a camera system

### Meeting the criteria of:
A working physics system, with a parent physics class.
A player class with physics, a controlable player with the keyboard. 
And a camera system.

## Section 6: Various Renderers

The next thing we will look at are the various renderers for our game.
We need these for things like the background, hud, floor, distance limit etc.

### Background Renderer

The first of which is the background renderer.
In the code this is called `ParallaxRenderer.cs` as we are achieveing a sudo-parallax effect.
By this I mean, we will be moving 5-6 background layers at different speeds to give the illusion of depth.
We will need:
- A property (array) for the background layers
- The last position of the camera so it can keep track of changes (so its not performing calculations if the camera has not moved)
- The texture bounds of the background so we can calculate the position of the background
- The cloud offset value (so we can continuously move the clouds)
- A array of offsets for the background layers (so we can align them properly per layer)
- The layer positions so we can keep track of which positions the layers are at
- A method to load the textures and set the background id (for multiple backgrounds) (Refer to [Asset Manager](#asset-manager): `GetBackgroundTexture(int id, string name)`) 
- A method to generate the rectangles
- A method to offset retangles
- A method to calculate the render positions
- A method to check if they need to be offset if they are too far away from the camera
- And the draw method as we are rendering something

Firstly we will be implimenting the first couple of methods, we need to figure out how to infineitely draw the background around camera.
We will be using the `OffsetRectangle` method to offset the rectangles, and we will be using the `GenerateRectangle` method to generate the rectangles.
We will be using the `GetRenderPosition` method to calculate the render positions.
And we will be using the `CheckOffset` method to check if the rectangles need to be offset.
We will then draw 3 squares with these calculated positions to test.

[Click here for video](https://imgur.com/Hv97918)

Now that we have this working we can impliment out texture loading and renderering.
We will be using the `LoadTextures` method to load the textures.
And we will be using the `Draw` method to render the textures.

[Click here for video](https://imgur.com/2Mz0rq0)

Now as you can see we have a minor error as the textures are not flipping at the correct point so we can see them in an un-renderered state of off screen right.
To fix this we need to add an offset to the textures so they are renderered from the center out, rather than top left down.

Now that we have squashed this, we will need to add the cloud layer.
For this we will need 7 layers instead of three, center, left, right, top, top right, top left and center top.

Now that we have added that, this is what our final class looks like:
```csharp

using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Misc;

public class ParallaxRenderer : BackgroundRenderer
{
    private readonly Texture2D[] _parallaxTextures = new Texture2D[5]; // Background textures: 0 = layer02, 1 = layer03, 2 = layer04, 3 = layer05, 4 = layer06

    private Vector2 _lastPosition = Vector2.Zero; // Last camera position
    private Rectangle _textureBounds; // Texture bounds

    private int _cloudOffset; // Cloud offset
    
    private readonly int[] _yOffsets =
    {
        -60,
        0,
        0,
        -40,
        0
    }; // Y offsets for each layer so we can position them per layer

    private readonly Vector2[] _layerPositions = new Vector2[5]; // Positions of each layer
    
    public ParallaxRenderer() : base("velocity:background", false) // Register the renderer
    {
        GenerateNewPositions(); // Generate the positions
    }
    
    public void LoadTextures() // Load the textures
    {
        int bg = Loader.Game.Level == null ? (new Random()).Next(1, 3) : Loader.Game.Level.Background; // Get the background id (random if no level is loaded) 
        _parallaxTextures[0] = Loader.AssetManager.GetBackgroundTexture(bg, "layer02"); // Load the the first layer        (offset of 1 as we are not using the background plane as this renderer will not drawn at the correct stage in the loop)
        _parallaxTextures[1] = Loader.AssetManager.GetBackgroundTexture(bg, "layer03"); // Load the the second layer
        _parallaxTextures[2] = Loader.AssetManager.GetBackgroundTexture(bg, "layer04"); // Load the the third layer
        _parallaxTextures[3] = Loader.AssetManager.GetBackgroundTexture(bg, "layer05"); // Load the the fourth layer
        _parallaxTextures[4] = Loader.AssetManager.GetBackgroundTexture(bg, "layer06"); // Load the the fifth layer
        
        _textureBounds = new Rectangle(0.0f, 0.0f, _parallaxTextures[1].width, _parallaxTextures[1].height); // Set the texture bounds
    }

    public override void Draw()
    {
        if (System.Math.Abs(_lastPosition.X - Loader.WindowManager.Camera.target.X) != 0 ||
            System.Math.Abs(_lastPosition.Y - Loader.WindowManager.Camera.target.Y) != 0) // Check if the camera has moved
        {
            GenerateNewPositions(); // Generate new positions

            _lastPosition = Loader.WindowManager.Camera.target; // Set the last position of the camera to the current position of the camera
        }

        _cloudOffset += 1; // Increment the cloud offset (make them move to the right)
        if (_cloudOffset > WindowManager.Width / 2) _cloudOffset = -(WindowManager.Width / 2); // Reset the cloud offset if it is greater than half the width of the window (loop pefrectly

        // Generate the rectangles for each layer (x, y, width and height) 
        // The cloud layer is offset by the cloud offset
        Rectangle rectangle0 = GenerateRectangle(_layerPositions[0]); 
        Rectangle rectangle1 = GenerateRectangle(_layerPositions[1]); 
        Rectangle rectangle2 = GenerateRectangle(_layerPositions[2]);
        Rectangle rectangle3 = GenerateRectangle(Vector2.Add(_layerPositions[3], new Vector2(_cloudOffset, 0)));
        Rectangle rectangle4 = GenerateRectangle(_layerPositions[4]);

        
        // Will draw the layers in reverse order (so the first layer is drawn last)
        // Draw the first layer (layer02) 3 times (one in the middle and one on each side) with y offsets, with its origin being in the center of the texture
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, 0, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, WindowManager.Width, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, -WindowManager.Width, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        // Do the same for the clouds (7 layers to increase the density) while being symmetrical and loop able
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, 0, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width + WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width - WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        // Do the same for the other layers
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, 0, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, WindowManager.Width, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE); 
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, -WindowManager.Width, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, 0, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, WindowManager.Width, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, -WindowManager.Width, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, 0, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, WindowManager.Width, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, -WindowManager.Width, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
    }

    private void GenerateNewPositions() // Generate new positions for the layers
    {
        // Get the render position for each layer
        _layerPositions[0] = GetRenderPosition(2, 2); // Movement offset multiplier being 2 so its camera position / 2
        _layerPositions[1] = GetRenderPosition(3, 5); // Same again but with 3 and 5
        _layerPositions[2] = GetRenderPosition(4, 6); // Same again but with 4 and 6
        _layerPositions[3] = GetRenderPosition(6, 8); // Same again but with 6 and 8
        _layerPositions[4] = GetRenderPosition(8, 10); // Same again but with 8 and 10
    }
    

    private Rectangle OffsetRectangle(Rectangle subject, int x = 0, int y = 0) // Offset a rectangle by x and y
    {
        subject.x += x; // Offset the x
        subject.y += y; // Offset the y
        return subject; // Return the rectangle
    }

    private Rectangle GenerateRectangle(Vector2 at) // Generate a rectangle at a position
    {
        return new Rectangle(at.X, at.Y, WindowManager.Width, WindowManager.Height); // Generate a rectangle at a position with the width and height of the window
    }
    
    private Vector2 GetRenderPosition(int rx, int ry) // Get the render position of a layer
    {
        int x = Convert.ToInt32(Loader.WindowManager.Camera.target.X - Loader.WindowManager.Camera.offset.X) + WindowManager.Width / 2 - Convert.ToInt32(Loader.WindowManager.Camera.target.X / rx); // Get the x position of the layer (offset by the camera offset) and offset by the camera position / rx (rx being the movement offset multiplier) 
        int y = Convert.ToInt32(Loader.WindowManager.Camera.target.Y - Loader.WindowManager.Camera.offset.Y) + WindowManager.Height / 2 + (Game.FloorHeight - Convert.ToInt32(Loader.WindowManager.Camera.target.Y)) / ry; // Get the y position of the layer (offset by the camera offset) and offset by the camera position / ry (ry being the movement offset multiplier)

        return new Vector2(CheckRenderOffset(rx, x) - WindowManager.Width / 2, y - WindowManager.Height / 2); // Return the render position with render offset if is too far away from camera position (offset by the width and height of the window / 2)
    }

    // Checks to see if the render position is too far away from the camera position
    // If it is then it will offset the render position by the width of the window * the movement offset multiplier
    // This is so the layers loop perfectly
    private int CheckRenderOffset(int rx, int x) 
    {
        var multiplier= Convert.ToInt32(Loader.WindowManager.Camera.target.X) / WindowManager.Width / rx + (Loader.WindowManager.Camera.target.X < 0 ? -1 : 0); // Get the movement offset multiplier (camera position / width of the window / rx + if the camera position is less than 0 then -1 else 0)
        x += WindowManager.Width * multiplier; // Offset the x by the width of the window * the movement offset multiplier
 
        return x; // Return the x
    }
}
```

### Floor Renderer
Next we need to add the floor renderer.
This will take our floor texture and render it to the screen.
We will achieve this by running a for loop and rendering the floor texture at the position of the loop multiplied by the texture width.
We will need to do this a total of 26 times to render out to the end of the screen. Starting with -13 and ending with 13.
We will need to grab our texture from our asset manager and load it into a varable so we can access it.
Then we will draw 3 gradients so that the floor fades out to the end of the screen so we cant see the underside of the texture.
And finally draw to the screen.

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Misc;

public class FloorRenderer : ElementRenderer
{
    private Texture2D _floorTexture; // The floor texture
    
    public FloorRenderer() : base("velocity:floor") // Constructor
    {
        LoadTextures(); // Load textures
    }

    private void LoadTextures()
    {
        if (Loader.Game.Level == null) return; // Return if the level is null
        _floorTexture = Loader.AssetManager.GetBackgroundTexture(Loader.Game.Level.Background, "layer01");  // Get the background texture
    }

    
    public override void Draw()
    {
        for (int i = -13; i < 13; i++) // Draw the floor
        {
            Raylib.DrawTexturePro(_floorTexture, new Rectangle(0, 0, _floorTexture.width, _floorTexture.height), new Rectangle((WindowManager.Width / 3) * i, Game.FloorHeight - WindowManager.Width / 6 + 12, WindowManager.Width / 3, WindowManager.Height / 3), new Vector2(), 0, Color.WHITE); // Draw the floor texture

            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight - 10, (WindowManager.Width / 3), 10, new Color(1, 20, 71, 0), new Color(0, 5, 50, 25)); // Draw the floor gradient
            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight,(WindowManager.Width / 3), 48, new Color(0, 5, 50, 25), new Color(0, 0, 0, 200)); // Draw the floor gradient
            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight + 48, (WindowManager.Width / 3), 5, new Color(0, 0, 0, 200), new Color(0, 0, 0, 255)); // Draw the floor gradient
            Raylib.DrawRectangle((WindowManager.Width / 3) * i, Game.FloorHeight + 52, (WindowManager.Width / 3), WindowManager.Height / 2, new Color(0, 0, 0, 255)); // Draw the footer for the floor
        }
    }
}
```

> #### Errors to overcome
> - Floor drawing over the player (fixed by reducing the draw size of the floor)
> - Floor drawing too high, moved down the texture

All together it now looks like this, from a zoomed out perspective: 
![](https://i.imgur.com/gpkbt2s.png)

### Hud Renderer
Next we need to add the hud renderer.
This will provide a heads up display for the players of the game. It will display stats such as player health, coins collected, current power ups, and the controls for the game.
This will be a 2d ui renderer, so that it draws on the screen directly, rather than drawing to the canvas.
For this we are going to need:
- Properties for all of the textures it needs to display.
- Properties for all of the source rectangles of the textures, so that the game knows what part of the power up texture to draw (there all stored in one texture).
- A method to load the textures.
- A method to change the powerup textures so they activate visually
- A method to draw the hud to the screen.
- And a method to calculate the remaining time on a powerup.

Now that we have our framework we can define our class

```csharp
using System.Globalization;
using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;
using Velocity.Game;
using Velocity.Input;
using Velocity.Ui.Misc;

namespace Velocity.Ui.Overlay.Render;

public class HudRenderer : UiRenderer
{
    private readonly Game.Game _game; // The game instance

    private Texture2D _heartTexture; // The heart texture
    private Texture2D _powerUpTexture; // The power up texture
    private Texture2D _coinTexture; // The coin texture

    private readonly Rectangle _heartSource; // The heart source rectangle
    private readonly Rectangle[] _powerUpSource = new Rectangle[2]; // The power up source rectangle

    public HudRenderer(Game.Game game) : base("velocity.overlay.hud", false)
    {
        _game = game; // Set game

        LoadTextures(); // Load textures
        _heartSource = new Rectangle(0, 0, _heartTexture.width, _heartTexture.height);
        _powerUpSource[0] = new Rectangle(0, _powerUpTexture.height / 4, _powerUpTexture.width / 3, 
            _powerUpTexture.height / 4); // Set power up 1 source rectangle
        _powerUpSource[1] = new Rectangle(_powerUpTexture.width / 3 * 2, _powerUpTexture.height / 4,
            _powerUpTexture.width / 3,
            _powerUpTexture.height / 4); // Set power up 2 source rectangle
    }

    private void LoadTextures() // Load textures
    {
        _heartTexture = Loader.AssetManager.GetTexture("ui.heart"); // Get heart texture
        _powerUpTexture = Loader.AssetManager.GetTexture("item.power_ups"); // Get power up texture
        _coinTexture = Loader.AssetManager.GetTexture("item.coin"); // Get coin texture
    }

    private Rectangle ModifyRectangle(Rectangle rectangle, int powerUpId) // Modify rectangle to active power up visually
    {
        if (_game.PowerUps[powerUpId] > 0) // If the power up is active
        {
            rectangle.y += _powerUpTexture.height / 2; // Set the rectangle y to the second row of the power up texture
        }

        return rectangle; // Return the rectangle
    }

    public override void Draw() // Draw the hud
    {
        Raylib.DrawRectangleGradientV(0, 0, WindowManager.Width, 180, new Color(0, 0, 0, 45), new Color(0, 0, 0, 0)); // Draw the hud gradient background
        for (int i = 0; i <= 2; i++) // Draw the heart backgorund
        {
            int rx = _heartTexture.width / 2 * i; // Calculate the x position of the heart

            Raylib.DrawTexturePro(_heartTexture, _heartSource,
                new Rectangle(rx, -10, _heartTexture.width / 2, _heartTexture.height / 2), new Vector2(), 0,
                new Color(200, 200, 200, 75)); // Draw the heart
        }

        for (int i = 0; i <= _game.Player.Health - 1; i++) // Draw the bonus hearts
        {
            int rx = _heartTexture.width / 2 * i; // Calculate the x position of the heart

            Raylib.DrawTexturePro(_heartTexture, _heartSource,
                new Rectangle(rx, -10, _heartTexture.width / 2, _heartTexture.height / 2), new Vector2(), 0, i <= 2
                    ? new Color(255, 0, 0, 255)
                    : new Color(
                        255, 215, 0, 255)); // Draw the heart with a different color if it is a bonus heart
        }
        
        Raylib.DrawTexturePro(_coinTexture, new Rectangle(0, 0, _coinTexture.width / 5, _coinTexture.height), new Rectangle(10, 90, 70, 70), new Vector2(), 0, Color.WHITE); // Draw the coin texture
        Raylib.DrawRectangleRounded(
            new Rectangle(
                Convert.ToSingle(_coinTexture.width / 5 + 32),
                130,
                Raylib.MeasureText(_game.Coins.ToString(), 28) + 20, 32f), 0.7f, 4,
            new Color(20, 30, 40, 150)); // Draw the coin count background
        Raylib.DrawText(_game.Coins.ToString(),
            _coinTexture.width / 5 + 42,
            134, 28, Color.WHITE); // Draw the coin count text
        
        Raylib.DrawTexturePro(_powerUpTexture, ModifyRectangle(_powerUpSource[0], 0),
            new Rectangle(WindowManager.Width - _powerUpSource[0].width - 10, 10, _powerUpSource[0].width,
                _powerUpSource[0].height), new Vector2(), 0, Color.WHITE); // Draw the power up 1 texture
        Raylib.DrawTexturePro(_powerUpTexture, ModifyRectangle(_powerUpSource[1], 2), 
            new Rectangle(WindowManager.Width - _powerUpSource[1].width * 2 - 10, 10, _powerUpSource[1].width,
                _powerUpSource[1].height), new Vector2(), 0, Color.WHITE); // Draw the power up 2 texture
        
        if (_game.PowerUps[0] > 0) // If the power up 1 is active
        {
            // Calculate the timer text
            TimeSpan ts = new TimeSpan((long)_game.PowerUps[0] + 1);
            string text = $"{ts.Minutes}{ts.Seconds:00}";
            
            Raylib.DrawRectangleRounded(
                new Rectangle(
                    Convert.ToSingle(WindowManager.Width - (_powerUpSource[0].width - _powerUpSource[0].width / 2.4) - Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20),
                    _powerUpSource[0].height / 2 + _powerUpSource[0].width / 3 - 2,
                    Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20, 32f), 0.7f, 4,
                new Color(20, 30, 40, 150)); // Draw the power up 1 timer background
            Raylib.DrawText(GetTimeForPowerUp(0),
                Convert.ToInt32(WindowManager.Width - (_powerUpSource[0].width - _powerUpSource[0].width / 1.8) - Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20),
                Convert.ToInt32(_powerUpSource[0].height / 2 + _powerUpSource[0].width / 3), 28, Color.WHITE); // Draw the power up 1 timer text
        }

        if (_game.PowerUps[2] > 0) // If the power up 2 is active
        {
            Raylib.DrawRectangleRounded(
                new Rectangle(
                    Convert.ToSingle(WindowManager.Width - (_powerUpSource[0].width * 2 - _powerUpSource[0].width / 2.4) - Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20),
                    _powerUpSource[0].height / 2 + _powerUpSource[0].width / 3 - 2,
                    Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20, 32f), 0.7f, 4,
                new Color(20, 30, 40, 150)); // Draw the power up 2 timer background
            
            
            Raylib.DrawText(GetTimeForPowerUp(2),
                Convert.ToInt32(WindowManager.Width - (_powerUpSource[0].width * 2 - _powerUpSource[0].width / 1.8) - Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20),
                Convert.ToInt32(_powerUpSource[0].height / 2 + _powerUpSource[0].width / 3), 28, Color.WHITE); // Draw the power up 2 timer text
        }

        // Create a footer at the bottom of the game displaying the controls for the game 
        
        Raylib.DrawRectangle(0, WindowManager.Height - 60, WindowManager.Width, 60, new Color(40, 40, 40, 150)); // Draw the footer background
        

        DrawFooter(); // Draw the footer
    }

    private void DrawFooter() // Draw the footer
    {
        int wx = 15; // The x position of the footer (safezone of 15 pix)
        
        // Controls
        
        // Register the text for the controls
        // Calculate the border width
        // Draw the control border
        // Give 5 pix margin
        // Draw the control text
        // Add the width of the control text to the x position
        // Draw next control with the same steps
        Text leftText = new Text(Loader.Settings.Keybind.Left.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Left));
        int leftBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Left.ToString().Replace("KEY_", ""), leftText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, leftBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(leftText.Data, wx, WindowManager.Height - 45, leftText.FontSize, leftText.Color);
        wx += Raylib.MeasureText(leftText.Data, 32) + 20;
        
        // Repeat for right, interact and jump
        Text rightText = new Text(Loader.Settings.Keybind.Right.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Right));
        int rightBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Right.ToString().Replace("KEY_", ""), rightText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, rightBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(rightText.Data, wx, WindowManager.Height - 45, rightText.FontSize, rightText.Color);
        wx += Raylib.MeasureText(rightText.Data, 32) + 20;
        
        Text interactText = new Text(Loader.Settings.Keybind.Interact.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Interact));
        int interactBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Interact.ToString().Replace("KEY_", ""), interactText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, interactBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(interactText.Data, wx, WindowManager.Height - 45, interactText.FontSize, interactText.Color);
        wx += Raylib.MeasureText(interactText.Data, 32) + 20;
        
        Text jumpText = new Text(Loader.Settings.Keybind.Jump.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Jump));
        int jumpBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Jump.ToString().Replace("KEY_", ""), jumpText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, jumpBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(jumpText.Data, wx, WindowManager.Height - 45, jumpText.FontSize, jumpText.Color);

        
        // Register text for zoom in and zoom out
        // Calculate the border width
        Text zoominText = new Text(Loader.Settings.Keybind.ZoomIn.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.ZoomIn));
        int zoominBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.ZoomIn.ToString().Replace("KEY_", ""), zoominText.FontSize);
        
        // Set X value to the right side of the screen
        wx = WindowManager.Width - 15;
        
        // Draw the border
        // Give 5 pix margin
        // Draw the text
        // Subtract the width of the text from the x position
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx - zoominText.GetWidth(), WindowManager.Height - 45, zoominBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(zoominText.Data, wx - zoominText.GetWidth(), WindowManager.Height - 45, zoominText.FontSize, zoominText.Color);
        wx -= Raylib.MeasureText(zoominText.Data, 32) + 25;
        
        // Repeat for zoomout
        Text zoomoutText = new Text(Loader.Settings.Keybind.ZoomOut.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.ZoomOut));
        int zoomoutBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.ZoomOut.ToString().Replace("KEY_", ""), zoomoutText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx - zoomoutText.GetWidth(), WindowManager.Height - 45, zoomoutBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(zoomoutText.Data, wx - zoomoutText.GetWidth(), WindowManager.Height - 45, zoomoutText.FontSize, zoomoutText.Color);
    }

    private string GetTimeForPowerUp (int id) // Get the time for a power up
    { 
        int time = Convert.ToInt32(_game.PowerUps[id] + 1); // Get the time
        int minutes = time / 60; // Calculate the minutes
        int seconds = time % 60; // Calculate the seconds 
        
        return minutes + ":" + seconds.ToString("00"); // Return the time formatted
    }
}
```

As you can see we use the same varable for the x position of the control section of the hud, we do this so any changes to the controls will be reflected in the hud, and they will span correctly, rather than overlapping eachother.

> #### Errors to overcome
> - Power up textures not changing when power up is active (fixed by offsetting the source rectangle)
> - Power up timers not displaying correctly (fixed by converting sections to string, using format "00")
> 

### Distance Renderer

Next we need to add the distance renderer.
This is so when the player heads of the left or right of the screen it faids out to black or white depending on the edge they leave from.
We do this to limit the player to the level canvas.
We will need:
- To calculate the distance from the player to the edge of the canvas.
- If the distance is less than 0 then we will need to draw a gradient to the screen.
- The right half of the gradent will be black with an alpha value being the distance over 800.
- And the left half being a distance over 400. So the screen will fade left to right.
- Lastly we will calculate if the player is to the left or right of the screen, we can do this by compairing the players position to 0 as 0 is the center of the map.
- We will draw the gradient white if its the right side, and black if its the left side. Flipping the alpha values in the right case as we want it to fade the oposite way.

Now we have our framework we can define our class
```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class DistanceLimitRenderer : UiRenderer
{
    public DistanceLimitRenderer () : base("velocity.ui.distanceLimit", false)
    {
    }

    public override void Draw()
    {
        int distance = 0; // Distance from the center of the level
        if (Double.Abs(Loader.Game.Player.Position.X) >= (Level.Level.LevelWidth / 2 + 3) * 200) distance = (int) (Double.Abs(Loader.Game.Player.Position.X) - (Level.Level.LevelWidth / 2 + 3) * 200); // Calculate the distance from the edge of the level to the player
        
        int alphaa = 0; // Alpha for the gradient
        if (distance is > 0 and < 400) alphaa = (int)(255 * (distance / 400d)); // Calculate the alpha for the gradient
        else if (distance >= 400) alphaa = 255; // Set the alpha to 255 if the distance is greater than 400
        int alphab = 0; // Alpha for the gradient
        if (distance is > 0 and < 800) alphab = (int)(255 * (distance / 800d)); // Calculate the alpha for the gradient
        else if (distance >= 800) alphab = 255; // Set the alpha to 255 if the distance is greater than 800
        
        // If the player is to the left or right of the level area
        if (Loader.Game.Player.Position.X > 0) Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, new Color(255, 255, 255, alphab), new Color(255, 255, 255, alphaa)); // Draw the white gradient
        else Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, new Color(0, 0, 0, alphaa), new Color(0, 0, 0, alphab)); // Draw the black gradient
    }
}
```

> #### Errors to overcome
> - Distance limit not working (fixed by changing the distance calculation from center of level to use the level width)
> - Not blacking out till you can see the end of the floor asset (fixed by changing distance dividers)
> 

### Timer Renderer
This ones a simple one.
We simply need to display the `Timer` varable in the `Game` class to the screen.
We will need a draw method, that runs every frame to:
- Calculate the time in minutes and seconds.
- Draw it to the screen

Our class will look like this:
```csharp
using System.Diagnostics;
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class TimerRenderer : UiRenderer
{
    public TimerRenderer () : base("game:overlay.timer", false) {}

    public override void Draw()
    {
        if (!Loader.Game.IsRunning) return;

        TimeSpan tspan = Loader.Game.Timer.Elapsed; // Get the elapsed time
        string text = $"{tspan.Minutes:00}:{tspan.Seconds:00}.{tspan.Milliseconds / 10:00}"; // Format the time
        
        Raylib.DrawTextEx(FontUtils.TimerFont, text, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.TimerFont, text, 32 + (8 * (4 - (2 + Loader.Settings.Resolution))),2).X / 2, 10), 32 + 8 * (4 - (2 + Loader.Settings.Resolution)), 2, Color.WHITE); // Draw the timer text with the correct font size and position
    }
}
```

> #### Errors to overcome
> - Not drawing at correct x position (fixed by dividing the window width by 2 and subtracting the width of the text divided by 2)

### Colored flash renderer 
This is the renderer responsible for the colored flash that happens when you enter a level, to fade from black to the game canvas.
It will need to:
- Draw a rectangle to a screen that has its alpha value decriment over time.
- A method to trigger this timed flash.
- To disable itself once the time reaches 0.

Our class will look like this:
```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class ColoredFlashRenderer : UiRenderer
{
    private int _fade = 30; // The amount of frames it takes to fade out
    private int _counter = 0; // The current frame
    private Color _color = Color.WHITE; // The color of the flash

    private int _alpha = 0; // The alpha of the flash
    
    public ColoredFlashRenderer() : base("velocity:game.flash", false)
    {
    }

    public void Trigger(int fadeout, Color color) // Trigger the flash
    {
        _counter = fadeout; // Set the counter to the fadeout amount
        _fade = fadeout; // Set the fade to the fadeout amount
        _alpha = 255; // Set the alpha to 255
        _color = color; // Set the color to the color
        IsEnabled = true; // Enable the renderer
    }


    public override void Draw() // Draw the flash
    {
        if (_counter == 0) // If the counter is 0
        {
            IsEnabled = false; // Disable the renderer
            return; // Return
        }
        
        _alpha = (int)(255d * ((double)_counter / _fade)); // Calculate the alpha
        _counter--; // Decrement the counter
 
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, _color with { a = (byte)_alpha }); // Draw the flash
    }
}
```

I did not encounter any errors developing this renderer.

### TextOverlay Renderer
This renderer is responsible for displaying text to the screen when a power-up is unlocked.
It will display a flashing text to the screen for a set amount of time.
With a purple background, and a border.
It will display the text in white, displaying the type of power-up unlocked.
It will be in the center of the screen in the x axis, and 1/12 of the way down the screen in the y axis.

It will need:
- Property for the text
- Property for the color
- Property for the animation step
- Property for the alpha
- Property for the display seconds
- And a property for the animation stage (flip: weather it is fading in or out)
- A method to trigger the text
- A method to draw the text

Our class will look like this:
```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class TextOverlayRenderer : UiRenderer
{
    private string _text = ""; // The text to display
    private Color _color = Color.BLACK; // The color of the text

    private int _aStep; // The current frame
    private int _alpha; // The alpha of the text
    private int _displaySeconds; // The amount of seconds to display the text for
    private int _flip = 1; // The flip value for the text
    public TextOverlayRenderer() : base("velocity:text.overlay", false)
    { }

    public void TriggerOverlay(string text, Color color, int displaySeconds) // Trigger the overlay
    {
        _aStep = 0; // Reset the frame
        _alpha = 0;  // Reset the alpha
        _text = text; // Set the text
        _color = color; // Set the color
        _displaySeconds = displaySeconds; // Set the display seconds
        IsEnabled = true; // Enable the renderer
    }

    public override void Draw()
    {
        if (_aStep == 60 * _displaySeconds) // If the text has been displayed for the correct amount of time
        {
            IsEnabled = false; // Disable the renderer
            _aStep = 0; // Reset the frame
            return; // Return
        }
        
        _aStep++; // Increment the frame
        
        if (_aStep % 16 == 0) _flip = _flip == 1 ? 0 : 1; // Flip the animation after 16 steps in the animation

        // Fade in and out
        if (_aStep < (_displaySeconds * 60) / 4 && _alpha < 255) _alpha += 5; // If he text has been displayed for 1/4th of the display seconds increment the alpha by 5
        if (_aStep > ((_displaySeconds * 60) / 4) * 3 && _alpha > 0) _alpha -= 5; // If he text has been displayed for 3/4th of the display seconds decrement the alpha by 5
        
        Raylib.DrawRectangleRounded(
            new Rectangle((WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2) - 10,
                WindowManager.Height / 12 - 10, Raylib.MeasureText(_text, 34) + 22, 34 + 18), 0.2f, 4,
            new Color(0, 10, 30, _alpha)); // Draw the background border for the text with a rounded rectangle
        
        Raylib.DrawRectangleRounded(
            new Rectangle((WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2) - 5,
                WindowManager.Height / 12 - 5, Raylib.MeasureText(_text, 34) + 12, 34 + 7), 0.2f, 4,
            new Color(255, 10, 255, _alpha * (_flip))); // Draw the background for the text with a rounded rectangle
        Raylib.DrawText(_text, WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2, WindowManager.Height / 12, 34, new Color(_color.r, _color.g, _color.b, _alpha * (_flip))); // Draw the text with the correct color and alpha
    }
}
```

> #### Errors to overcome
> - Text not displaying (fixed by adding a flip value to the alpha)
> - Text not fading in and out (issue between multiplying doubles with ints, results in int, cast to double and it was fixed)
> - Text not displaying for the correct amount of time (fixed by timesing the display seconds by 60 (current fps))

## Section 6 review

### What has been achieved
Display the various visual elements of the game, like, the background, floor, hud, distance limiter etc.

### How we have tested
After each renderer was created we tested it by adding it to the game and running the game to see if it worked.
After inital testing we go back and make tweaks to the renderers to make them work as intended, if not working correctly.
And perform a final test to make sure it works as a complete unit.

### How it fills our success criteria
- [x] The game has a background
- [x] The game has a foreground
- [x] The game has a hud
- [x] The game has a distance limiter
- [x] The game has a timer
- [x] The game has a colored flash (for fadein and outs)
- [x] The game has a text overlay (for power up unlocks)

### Meeting the criteria of:
Visual elements of the game are displayed to the screen that smooth out the visual aspects of the game.

## Section 7: Object manager, game objects and collision

Now that we have a working player, camera, background and foreground we can start to add some objects to the game.
For now we will be registering the objects in our game class so we can test, but later we will be loading them from the level manager and level classes.

### Objects and object manager
The object manager will be responsible for managing all of the objects in the game.
It needs to be able to register object classes, add them to the game, remove them, and clear out any objects from the level, before loading the next level.
It also needs to be able to handle different types of objects, eg. items, or physics objects.

For this we will need to make our object class before we can make our object manager.
Objects are physical game objects eg. coins, power ups, crates and barrels.
We will be creating a base class with the basic checks and behaviour for all objects, and then we will be creating a class for each type of object, eg. coin, power up, crate, barrel.
Our object class will need:
- A property for its id
- A property for its collidable state (bool: if it has collision)
- A property for its position
- A property for its dimensions
- A method to check its range to the collidable target (used to check if its near enough to be considered for collision)
- A method to check if its in the x bounds, and the same for y bounds (used for collision)

And our class will look like this:
```csharp
using System.Numerics;
using Velocity.Game.Physics;
using Vector2 = Velocity.Math.Vector2;

namespace Velocity.Game.Object;

public abstract class GameObject
{
    public int Id; // Item/object id
    public bool Collidable; // Can the object be collided with?
    public readonly Vector2 Position; // Position of the object
    public readonly Vector2 Dimensions; // Dimensions of the object

    protected GameObject(int id, Vector2 position, Vector2 dimensions, bool isCollidable = true) // Constructor
    {
        Id = id; // Set id
        Position = position; // Set position
        Dimensions = dimensions; // Set dimensions
        Collidable = isCollidable; // Set if the object is collidable
    }

    public bool CheckRange(Collidable target) // Check if the object is in range of the player (collidable)
    {
        return target.Position.X + target.Dimensions.X / 2 >= Position.X - (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.X - target.Dimensions.X / 2 <= Position.X + Dimensions.X + (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.Y - target.Dimensions.Y / 2 <= Position.Y + Dimensions.Y + (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.Y + target.Dimensions.Y / 2 >= Position.Y - (PhysicsConst.MaxVelocity * 1.5);
    }

    public bool InXBounds(Collidable target, int offset = 0) // Check if the object is in the x bounds of the player (collidable)
    {
        return target.Position.X + target.Dimensions.X / 2 >= Position.X - offset && 
               target.Position.X - target.Dimensions.X / 2 <= Position.X + Dimensions.X + offset;
    }

    public bool InYBounds(Collidable target, int offset = 0) // Check if the object is in the y bounds of the player (collidable)
    {
        return target.Position.Y + target.Dimensions.Y / 2 >= Position.Y - offset &&
               target.Position.Y - target.Dimensions.Y / 2 <= Position.Y + Dimensions.Y + offset;
    }
}
```

Now that we have our base class we can start to create our object classes.

The first of which will be the `TexturedObject` class.
This will be our base class for our barrels and crates as we need to give them a texture.
It will need:
- A property for its texture

And the class will look like this:
```csharp
using Raylib_cs;
using Velocity.Math;

namespace Velocity.Game.Object;

public class TexturedObject : GameObject
{
    public Texture2D Texture; // Texture of the object

    protected TexturedObject(int id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(id, position, dimensions)
    {
        Texture = texture;
    }
}
```

Then comes our item object class.

### Item object
This will be the base class for our coins and power ups.
It will extend our `TexturedObject` class and have some behaviour for when the player interacts with it.
It will need:
- A property for its type id (int: used to identify the type of item)
- A property for its range (int: used to check if the player is close enough to interact with it)
- A cooldown constant (int: to give the powerup to the player for a set amount of time)
- A property for its color
- A property for its particle renderer (used to display particles)
- A property for its info card (pop up explaining what the powerup does and the controls for it)
- An enabled or disabled property (bool: used to check if the item is enabled or disabled)
- A method to set the color of the object
- A static method for getting the color instance from the id (so we can give different colors to different upgrades)
- A method to check if the player is in range of the item
- A method to interact with the item (from controllable)
- And finally a method to remove the item once it has been picked up (unregister the controller and remove item from object manager)

And the class will look like this:
```csharp
using Raylib_cs;
using Velocity.Game.Object.Renderer;
using Velocity.Input;
using Velocity.Math;

namespace Velocity.Game.Object;

public class ItemObject : TexturedObject, IControllable
{
    public new readonly byte Id; // Item id
    private int _range = 50; // Range of the item
    private const int Cooldown = 40; // Cooldown of the item

    public Color Color = Color.WHITE; // Color of the item
    public ParticleRenderer ParticleRenderer; // Particle renderer of the item
    public InfoCardRenderer InfoCardRenderer; // Info card renderer of the item

    private bool _enabled = true; // Is the item enabled?
    
    protected ItemObject(byte id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(id, texture, position, dimensions) // Constructor
    {
        Id = id; // Set id
        Collidable = false; // Set collidable
    }

    public void SetInteractRange(int pixels) // Set the interact range
    {
        _range = pixels; // Set the range
    }

    public void SetColor(Color color) // Set the color
    {
        Color = color; // Set the color
        ParticleRenderer =
            new ParticleRenderer(
                new System.Numerics.Vector2(Convert.ToSingle(Position.X + 25), Convert.ToSingle(Position.Y + 25)),
                Color); // Set the particle renderer with the color
        InfoCardRenderer = new InfoCardRenderer(this); // Set the info card renderer (must be registered after color info is set)
    }

    public static Color GetColorFor(int id) // Get the color for the item
    {
        return id switch
        {
            1 => new Color(0, 105, 10, 255),
            2 => new Color(158, 0, 93, 255),
            3 => new Color(167, 196, 0, 255),
            _ => Color.WHITE
        }; // Return the color for the item
    }

    public bool InRange(Vector2 position) // Check if the item is in range of the player
    {
        return
        position.X <= Position.X + Dimensions.X + _range &&
            position.X >= Position.X - _range &&
            position.Y <= Position.Y + Dimensions.Y + _range &&
            position.Y >= Position.Y - _range; // Return if the player is in range of the item by checking if the player is in the x and y bounds of the item with the range
    }

    public void OnInteract() // On interact
    {
        if (!InRange(Loader.Game.Player.Position)) return; // If the player is not in range, return
        if (!_enabled) return; // If the item is not enabled, return
            
        switch (Id)
        {
            case 2: // If the item is a health item
                Loader.Game.Player.Health += 1; // Add 1 to the player's health
                break;
            default: // If the item is not a health item
                Loader.Game.PowerUps[Id - 1] += Cooldown; // Add the cooldown to the power up
                break;
        } 

        _enabled = false;
        Loader.Game.TextRenderer.TriggerOverlay(InfoCardRenderer._text[Id - 1] + " activated", new Color(255, 255, 0, 255), 3);
        Loader.AudioManager.PlaySound("game.collect");
        
        Remove();
    }
    
    private void Remove ()
    {
        Loader.ControlManager.UnRegisterController(this);
        Loader.Game.ObjectManager.RemoveItemObject(this);
    }
}
```

Now we can create our coin class.

### Coins
This will extend our `ItemObject` class and have some behaviour for when the player interacts with it.
It will need to run every frame as we want the player to automaticaly pick up the coin when they are in range.
And we will need to override the `OnInteract` method so that the previously implemented code no longer works.
We will also need to turn off this items collsion.
It will need: 
- A method to check for the pickup (remove it if it needs to be picked up, play the sound, and add 1 to the player's coin count or 2 if the multiplier is active)
- An override for the `OnInteract` method (to stop previous code from running)

And the class will look like this:
```csharp
using Raylib_cs;
using Velocity.Math;

namespace Velocity.Game.Object;

public class Coin : ItemObject
{
    public Coin (int id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(0, Loader.AssetManager.GetTexture("item.coin"), position, new Vector2(50, 50))
    {
        Collidable = false; // Set collidable
    }

    public void CheckForPickup() // Check if the coin is in range of the player
    {
        if (!InRange(Loader.Game.Player.Position)) return; // Check if the player is in range of the coin
        Loader.Game.ObjectManager.RemoveItemObject(this); // Remove the coin from the item object list
        Loader.AudioManager.PlaySound("game.coin"); // Play the coin sound
        Loader.Game.Coins += 1 * (Loader.Game.PowerUps[0] > 0 ? 2 : 1); // Add 1 coin to the player's coin count
    }
    
    public new void OnInteract()
    {
    }
}
```

We will also need to define a class for our coin handle, that will run the check code every frame.
It will also be able to add, remove, and clear all coins, along with updating them as previously mensioned.
It will need:
- A list of all of the coins in the game
- A method to add a coin to the game
- A method to remove a coin from the game
- A method to clear all of the coins from the game
- A method to update all of the coins in the game

And will look like this:
```csharp
namespace Velocity.Game.Object;

public sealed class CoinHandle
{
    private readonly List<Coin> _coins = new();

    public void Add(Coin coin)
    {
        _coins.Add(coin);
    }
    
    public void Remove(Coin coin)
    {
        _coins.Remove(coin);
    }

    public void Close()
    {
        _coins.Clear();
    }

    public void Update()
    {
        foreach (var coin in _coins.ToArray())
        {
            coin.CheckForPickup();
        }
    }
}
```

Then we need to define our crate and barrel classes.
These will extend our `TexturedObject` class and have its collision turned on so that the player collides with them.
They will each define there texture and id, along with there dimensions and position in the constructor.

```csharp
using Velocity.Math;

namespace Velocity.Game.Object;

public class Barrel : TexturedObject
{
    public Barrel(Vector2 position) : base(ObjectIds.Barrel, Loader.AssetManager.GetTexture("obj.barrel"), position, new Vector2(150, 200))
    {
        Collidable = true;
    }
}
```

```csharp
using Velocity.Game.Physics;
using Velocity.Math;

namespace Velocity.Game.Object;

public class Crate : TexturedObject
{
    public Crate(Vector2 position) : base(ObjectIds.Crate, Loader.AssetManager.GetTexture("obj.crate"), position, new Vector2(200, 200))
    {
        Collidable = true;
    }
}
```

We now have all of our objects, now we need a manager to keep track, update and manage them.
This will serve as a way to keep track of all the items in a level and remove them when the level is changed.
It will also be responsible for adding the items to the game when the player enters the level.
Our object manager will need:
- A list of all of the objects in the game (list of game object ids, and there accoseated class)
- A list of all of the items in the game (list of game item ids, and there accoseated class)
- A list of currently added objects
- A list of currently added items
- A property for the coin handle
- A method to register default items and objects
- A method to register an item
- A method to register an object
- A method to add an item to the game
- A method to add an object to the game
- A method to close the object manager (clear all of the objects and items)
- A method to remove an item from the game


And the class will look like this:
```csharp
using System.Reflection;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Game.Object.Renderer;
using Velocity.Math;

namespace Velocity.Game.Object;

public class ObjectManager
{ 
    private readonly Dictionary<int, Type> _registeredItems = new(); // Registered items
    private readonly Dictionary<int, Type> _registeredObjects = new(); // Registered objects
    
    public readonly List<TexturedObject> LoadedTextureObjects = new(); // Loaded objects
    public readonly List<ItemObject?> LoadedItemObjects = new(); // Loaded items
    
    public readonly CoinHandle CoinHandle = new(); // Coin handle

    public ObjectManager() // Register default items and objects
    {
        RegisterDefaultItems(); // Register default items
        RegisterDefaultObjects();  // Register default objects
    }

    private void RegisterDefaultItems() // Register default items
    {
        RegisterItem(ItemIds.Speed, typeof(ItemObject)); // Register speed item
        RegisterItem(ItemIds.Health, typeof(ItemObject)); // Register health item
        RegisterItem(ItemIds.CoinMult, typeof(ItemObject));  // Register coin multiplier item
        RegisterItem(ItemIds.Coin, typeof(Coin)); // Register coin item
    }

    private void RegisterDefaultObjects () // Register default objects
    {
        RegisterObject(ObjectIds.Crate, typeof(Crate)); // Register crate object
        RegisterObject(ObjectIds.Barrel, typeof(Barrel)); // Register barrel object
    }

    private void RegisterItem(int id, Type item) // Register item
    {
        _registeredItems.Add(id, item); // Add item to registered items
    }
    
    private void RegisterObject(int id, Type item) // Register object
    {
        _registeredObjects.Add(id, item); // Add object to registered objects
    }
    
    public void AddItemObject(int id, Vector2 at) // Add item object
    {
        ItemObject? itemObject = Activator.CreateInstance(_registeredItems[id], 
            (byte)id,
            Loader.AssetManager.GetTexture("item.power_ups"),
            new Vector2(at.X, Game.FloorHeight - at.Y),
            new Vector2(50, 50)) as ItemObject; // Create item object with its initial values and set it to the item object variable (activator because we are dealing with types rather than instances)
        
        if (itemObject == null) throw new VelocityException("Cannot add item object that has not been registered."); // Throw exception if item object is null

        itemObject.SetColor(ItemObject.GetColorFor(id)); // Set the color of the item object
        LoadedItemObjects.Add(itemObject); // Add item object to loaded item objects
        Loader.ControlManager.RegisterController(itemObject); // Register item object as a controller

        if (id == 4) CoinHandle.Add((Coin)itemObject); // Add coin to coin handle if the item id is 4
    }

    public void AddObject(int id, Vector2 at) // Add object
    {
        TexturedObject? gameObject = 
            Activator.CreateInstance(_registeredObjects[id], new Vector2(at.X, Game.FloorHeight - at.Y)) as TexturedObject; // Create object with its initial values and set it to the object variable (activator because we are dealing with types rather than instances)
        
        if (gameObject == null) throw new VelocityException("Cannot add item object that has not been registered."); // Throw exception if object is null
        
        LoadedTextureObjects.Add(gameObject); // Add object to loaded objects
    }

    public void Close() // Close
    {
        LoadedItemObjects.Clear(); // Clear loaded item objects
        LoadedTextureObjects.Clear(); // Clear loaded objects
        CoinHandle.Clear(); // Clear coins
    }

    public void RemoveItemObject(ItemObject itemObject) // Remove item object
    {
        LoadedItemObjects.Remove(itemObject); // Remove item object from loaded item objects
        if (itemObject.Id == ItemIds.Coin) CoinHandle.Remove((Coin)itemObject); // Remove coin from coin handle if the item id is 4
    }
}
```

> #### Errors to overcome
> - Items not being removed from the game (fixed by adding a remove method to the object manager)
> - Items not being able to be picked up (errors with the range check, fixed by adding a range rather than compairing player position to item position)
> - Items not being added (fixed by using the activator class)
> - Objects not being added (fixed by using the activator class)

### Collision detection
Now that we have our objects and object manager we can start to implement collision detection.
We will be using comparison of the players position to the objects position to check if the player is in range of the object.
The player will be a collidable instance, and the objects will be checked inside this class, for efficency. (checking every object compared to checking all the objects in one class is more efficent)
It will follow the logic stated [here](#physics).
We will need:
- A property for if the object has collision
- A property for if the object has gravity
- The main tick function for calculating the collision on every frame

It will look like this:
```csharp 
using Velocity.Game.Object;
using Velocity.Math;

namespace Velocity.Game.Physics;

public class Collidable : BasePhysics
{
    public bool HasCollision;

    protected Collidable(Vector2 position, Vector2 dimensions, bool hasCollision = true, bool hasGravity = true) : base(position, dimensions)
    {
        HasCollision = hasCollision;
        HasGravity = hasGravity;
    }

    public override void Tick()
    {
        List<GameObject> nearObjects = new List<GameObject>(); // List of objects near the player

        foreach (var gameObject in Loader.Game.ObjectManager.LoadedTextureObjects) // Loop through all objects
        {
            if (gameObject.CheckRange(this)) // If the object is in range of the player (players position + max velocity * 1.5, will always catch objects, if moving at max velocity sometimes it would miss objects)
            {
                if (gameObject.Collidable) nearObjects.Add(gameObject); // Add the object to the list of objects near the player
            }
        }
        
        // Find the position of the bounds of the player
        double boundDown = Position.Y + Dimensions.Y / 2; // Calculate the bottom bound
        double boundUp = Position.Y - Dimensions.Y / 2; // Calculate the top bound
        double boundLeft = Position.X - Dimensions.X / 2; // Calculate the left bound
        double boundRight = Position.X + Dimensions.X / 2; // Calculate the right bound

        // Held constant for the duration of the loop 
        bool isCollidingX = false; // Is the player colliding on the x axis?
        bool isCollidingY = false; // Is the player colliding on the y axis?

        foreach (var nearObject in nearObjects) // Loop through all objects near the player
        {
            if (((
                     boundDown + Velocity.Y >= nearObject.Position.Y - 1 && boundDown <= nearObject.Position.Y - 1 ||
                     boundUp + Velocity.Y <= nearObject.Position.Y + nearObject.Dimensions.Y + 1 && boundUp >= nearObject.Position.Y + nearObject.Dimensions.Y + 1) && 
                 nearObject.InXBounds(this, (int)Double.Abs(Velocity.X) - 1))) // If player will be inside or colliding with an object on y axis for the current frame
            {
                if (Position.Y < nearObject.Position.Y) Velocity.Y = nearObject.Position.Y - boundDown - 1; // If the player is above the object, set the y velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                else Velocity.Y = nearObject.Position.Y + nearObject.Dimensions.Y - boundUp + 1; // If the player is below the object, set the y velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
            }
            else if (((System.Math.Abs(Convert.ToInt32(boundDown) - nearObject.Position.Y) == 0 ||
                       System.Math.Abs(Convert.ToInt32(boundUp) - (nearObject.Position.Y + nearObject.Dimensions.Y)) == 0)
                      && nearObject.InXBounds(this, -1)) || isCollidingY) // If the player IS colliding with an object for the current frame
            {
                if (Velocity.Y >= 0) // If the y velocity is greater than or equal to 0 (moving down, would prevent jumping if it was just greater than 0)
                {
                    Velocity.Y = 0; // Set the y velocity to 0
                    isCollidingY = true; // Set isCollidingY to true
                } 
                
                if (Position.Y < nearObject.Position.Y) OnFloor = true; // If the player is above the object, set OnFloor to true
            } else OnFloor = false; // If the player is not colliding with an object for the current frame, set OnFloor to false


            if ((
                    boundRight + Velocity.X >= nearObject.Position.X - 1 && boundRight <= nearObject.Position.X - 1 ||
                    boundLeft + Velocity.X <= nearObject.Position.X + nearObject.Dimensions.X - 1 && boundLeft >= nearObject.Position.X + nearObject.Dimensions.X - 1) && 
                nearObject.InYBounds(this, (int)Double.Abs(Velocity.Y))) { // If player will be inside or colliding with an object on x axis for the current frame
                if (Position.X < nearObject.Position.X) Velocity.X = nearObject.Position.X - boundRight; // If the player is to the left of the object, set the x velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                else Velocity.X = nearObject.Position.X + nearObject.Dimensions.X - boundLeft;  // If the player is to the right of the object, set the x velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                isCollidingX = true; // Set isCollidingX to true
            } else if (
                ((System.Math.Abs(Convert.ToInt32(boundRight) - nearObject.Position.X) == 0 || 
                  System.Math.Abs(Convert.ToInt32(boundLeft) - nearObject.Position.X + nearObject.Position.X) == 0) &&
                 nearObject.InYBounds(this)) || isCollidingX) // If the player IS colliding with an object on y axis for the current frame
            {
                if (!(Velocity.X >= 0)) continue; // If the x velocity is less than 0 (moving left), continue (would prevent moving left if it was just less than 0, for some reason, it aint broken dont fix it)
                Velocity.X = 0; // Set the x velocity to 0
                isCollidingX = true; // Set isCollidingX to true
            }
        }

        base.Tick(); // Call the base tick (apply physics, gravity, etc.)
        UpdatePosition(); // Update the position
    }
}
```

> #### Errors to overcome
> SO MANY ERRORS
> - Player sometimes not colliding with object (fixed by adding an offset to the in-range check)
> - Player sometimes can clip into corners of objects (fixed by adding offset to in x or y bounds to the players current velocity)
> - Player can sometimes clip into objects (fixed by adding an offset to the in-range check)
> - Player will get stuck to the left of object (fixed by adding a check in the x axis to see if the player is colliding with an object, and if they are, set the x velocity to 0)
> - Player will phase through objects if colliding with a different object (fixed by adding the isCollidingX and isCollidingY variables)
> - Various refinements to this section throughout development

`Acctually getting frustrated at how long this is taking, props to you miss if you made it this far, :) :clap: :clap: :clap:`
0

## Section 7 review

### What has been achieved
A working object manager, with working objects, that can be processed by the collision detection.
A working item manager, with working items, that can be picked up by the player, helping them for a period of time.
Working auto-collectable coins that add to the player's coin count.
Fully working collision detection that will prevent the player from moving inside objects, and will allow for platforms and obstacles.

### How we have tested
After each section was completed we tested it by adding it to the game and running the game to see if it worked. Coming back and fixing any issues that we found.
We then performed iterative testing until all of the bugs were fixed.
Then performing a final test to validate it is working as a compleate unit.

### How it fills our success criteria
- [x] The game has a working object manager
- [x] The game has working objects
- [x] The game has working items
- [x] The game has working collision detection

### Meeting the criteria of:
Working object manager, with object and item support, coins and collision detection.

## Section 8: Various renderers & Player renderer, ext
Now that we have our objects and collision detection we can start to add some more renderers to the game.
We will be adding a renderer for the objects, and a renderer for the items.
We will also be adding a renderer for particles, coins and the info card.

### Object renderer
This renderer will be responsible for rendering the objects to the screen.
It will need to:
- Loop through all of the objects in the object manager
- Generate the rectangle for the object
- Generate a source rectangle for the texture dimensions
- Draw the object to the screen

Our class will look like this:
```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class ObjectRenderer : ElementRenderer
{
    private readonly Game _game;
    
    public ObjectRenderer(Game game, string renderId = "velocity:game_objects") : base(renderId) 
    {
        _game = game; // Set the game
    }

    public override void Draw() 
    {
        if (_game.ObjectManager.LoadedTextureObjects.Count == 0) return; // Don't draw if there are no objects to draw
        
        foreach (var textureObject in _game.ObjectManager.LoadedTextureObjects) // Draw all objects
        {
            Rectangle source =
                new Rectangle(0, 0, 
                    textureObject.Texture.width,
                    textureObject.Texture.height
                    ); // Source rectangle is the entire texture

            Rectangle rectangle = new Rectangle(
                (int)textureObject.Position.X,
                (int)textureObject.Position.Y,
                (int)textureObject.Dimensions.X,
                (int)textureObject.Dimensions.Y
            ); // Destination rectangle is the object's position and dimensions
            
            Raylib.DrawTexturePro(textureObject.Texture, source, rectangle, new Vector2(0, 0), 0, Color.WHITE); // Draw the object
        }
    }
}
```

> No errors to overcome

### Item renderer
This renderer will be responsible for rendering the items to the screen.
It will need to:
- Loop through all of the items in the object manager 
- Draw the particle renderer for the item
- Generate the rectangle for the item
- Generate a source rectangle for the texture dimensions
- Draw a colored circle around the item
- Draw the item to the screen
- Draw the items info card to the screen
- Render the coins

And it will look like this:
```csharp
using Raylib_cs;
using Vector2 = System.Numerics.Vector2;

namespace Velocity.Game.Object.Renderer;

public class PowerUpRenderer : ObjectRenderer
{
    private readonly Game _game; // Game instance
    private Texture2D _texture;  // Texture of the object

    private readonly Rectangle[] _source = new Rectangle[3]; // Source rectangles for the texture
 
    private readonly CoinRenderer _coinRenderer; // Coin renderer
    public PowerUpRenderer(Game game) : base(game, "velocity:power_ups")  // Constructor
    {
        _game = game; // Set the game
        _coinRenderer = new CoinRenderer(); // Create the coin renderer

        LoadTexture(); // Load the texture
        RegisterSourceRectangles(); // Register the source rectangles
    }
    
    private void LoadTexture() // Load the texture
    {
        _texture = Loader.AssetManager.GetTexture("item.power_ups"); // Get the texture
    }

    private void RegisterSourceRectangles()
    {
        // generate source rectangles
        _source[0] = new Rectangle(0, _texture.height / 4 * 3, _texture.width / 3, _texture.height / 4);  // First power up texture 
        _source[1] = new Rectangle(_texture.width / 3, _texture.height / 4 * 2, _texture.width / 3, _texture.height / 4); // Second power up texture
        _source[2] = new Rectangle(_texture.width / 3 * 2, _texture.height / 4 * 3, _texture.width / 3, _texture.height / 4); // Third power up texture
    }

    public override void Draw() // Draw the object
    {
        foreach (var item in _game.ObjectManager.LoadedItemObjects) // Draw all objects
        {
            if (item == null) continue; // Don't draw if the object is null
            if (item.Id == ItemIds.Coin) continue; // Don't draw if the object is a coin
            item.ParticleRenderer.Draw(); // Draw the particle renderer

            Raylib.DrawCircle(Convert.ToInt32(item.Position.X + item.Dimensions.X / 2),
                Convert.ToInt32(item.Position.Y + item.Dimensions.Y / 2),
                Convert.ToInt32(item.Dimensions.X / 2) + 8, item.Color); // Draw the circle around the object

            Raylib.DrawTexturePro(_texture, _source[item.Id - 1], new Rectangle(
                Convert.ToInt32(item.Position.X - 4),
                Convert.ToInt32(item.Position.Y - 6),
                Convert.ToInt32(item.Dimensions.X) + 8,
                Convert.ToInt32(item.Dimensions.X) + 8), new Vector2(0, 0), 0, new Color(255, 255, 255, 255)); // Draw the object

            item.InfoCardRenderer.Draw(); // Draw the info card renderer
        }
        
        _coinRenderer.Draw(); // Draw the coin renderer
    }
}
```

> No errors to overcome

### Particle renderer
This renderer will be responsible for rendering the particles to the screen. We need these for added pazzaaz for our items.
We will be using a system of swapping, so once a particle has reached its lifespan, it will be re-used as a new particle. 
This is to help increase efficency of the particles, as we are dealing with alot of them at one time.
It will need:
- A property for the position of the particle spawner
- A property for the color of the particle
- A property for the texture of the particle
- A property for the current frame of the particle
- A property for the frame speed of the particle
- A property for the particles
- A struct for the particle
- A method to load the texture
- A method to generate a new source position
- A method to draw and update the particle

The class will look like this: 
```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Game.Physics;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class ParticleRenderer : ConditionalRenderer
{
    private const int MaxParticles = 200; // Max particles to render at one time
    
    private readonly Vector2 _position; // Position of the particle spawner
    private readonly Color _color; // Color of the particle

    private int _currentFrame; // Current frame of the particle
    private readonly int _frameSpeed = 8; // Speed of the particle animation

    private Texture2D _particleMap; // Texture of the particle

    private readonly Particle[] _particles = new Particle[MaxParticles]; // Array of particles

    private struct Particle
    {
        public Rectangle Source;
        public Vector2 Offset;
        public Vector2 OffsetMultiple;
        public float Alpha;
        public float Size;
        public float Rotation;
        public float RotationMultiple;
        public bool Active;
    } // Particle struct

    public ParticleRenderer(Vector2 position, Color color) : base("velocity.particle." + Guid.NewGuid()) // Constructor
    {
        _position = position; // Set the position
        _color = color; // Set the color
        
        LoadTexture(); // Load the texture
        
        for (int i = 0; i < MaxParticles; i++) // Initialize the particles
        {
            Random rnd = new Random(); // Create a random instance

            _particles[i].Source = GenerateNewSourcePosition(); // Generate a new source position
            _particles[i].Offset = new Vector2(0, 1);  // Set the offset
            _particles[i].OffsetMultiple = new Vector2(rnd.Next(0, 7) - 3, -rnd.Next(0, 8) + 4); // Set the offset multiple (for random scattering)
            _particles[i].Alpha = 1.0f; // Set the alpha
            _particles[i].Size = 1.0f; // Set the size
            _particles[i].Rotation = 0.0f; // Set the rotation
            _particles[i].RotationMultiple = rnd.Next(0, 9) - 4; // Set the rotation multiple (for random rotation)
            _particles[i].Active = false; // Set the particle to inactive
        }
    }

    private void LoadTexture() // Load the texture
    {
        _particleMap = Loader.AssetManager.GetTexture("particle.particle_map"); // Get the texture
        
        GenerateNewSourcePosition(); // Generate a new source position
    }

    private Rectangle GenerateNewSourcePosition() // Generate a new source position
    {
        Random rnd = new Random(); // Create a random instance

        return new Rectangle((_particleMap.width / 4) * rnd.Next(0, 4), (_particleMap.height / 4) * rnd.Next(0, 8),
            _particleMap.height / 4, _particleMap.height / 4); // Return the new source position (for random particle asset, stored in a tile grid)
    }

    public override void Draw() // Draw the particle
    {
        _currentFrame++; // Increment the current frame
        if (_currentFrame >= 60 / _frameSpeed) // If the current frame is greater than or equal to the frame speed
        {
            _currentFrame = 0; // Reset the current frame
            for (int i = 0; i < MaxParticles; i++) // Loop through all particles
            {
                if (!_particles[i].Active) // If the particle is not active
                {
                    _particles[i].Offset = Vector2.Zero; // Set the offset to zero
                    _particles[i].Active = true; // Set the particle to active
                    _particles[i].Size = 1.0f; // Set the size to 1
                    _particles[i].Rotation = 0; // Set the rotation to 0

                    i = MaxParticles; // Break the loop
                }
            }
        }
        
        
        for (int i = 0; i < MaxParticles; i++) // Loop through all particles
        {
            if (!_particles[i].Active) continue; // If the particle is not active, continue
            _particles[i].Offset.X += _particles[i].OffsetMultiple.X; // Add the offset multiple to the offset
            _particles[i].Offset.Y += _particles[i].OffsetMultiple.Y; // Add the offset multiple to the offset
            _particles[i].Size -= 0.02f; // Decrease the size by 0.02

            if (_particles[i].Size <= 0.0f) _particles[i].Active = false; // If the size is less than or equal to 0, set the particle to inactive

            _particles[i].Rotation += _particles[i].RotationMultiple; // Add the rotation multiple to the rotation
            
            int width = Convert.ToInt32(40 * _particles[i].Size / 2); // Calculate the width
            int height = Convert.ToInt32(40 * _particles[i].Size / 2); // Calculate the height

            Rectangle dest = new Rectangle((_position.X + _particles[i].Offset.X) - width / 2, 
                _position.Y + _particles[i].Offset.Y - height / 2, width, height); // Calculate the destination rectangle

            Raylib.DrawTexturePro(_particleMap,
                _particles[i].Source,
                dest,
                new Vector2(),
                _particles[i].Rotation,
                new Color(_color.r, _color.g, _color.b, Convert.ToByte(_color.a * _particles[i].Alpha))
            ); // Draw the particle
        }
    }
}
```

> #### Errors to overcome
> - Particles not rendering (fixed by adding a conditional renderer)
> - Particles not being removed (fixed by adding a lifespan to the particles/inactivating particles once they reach 0 size)
> - Particles spawning in the same position (fixed by adding a random offset to the particles)

### Coin renderer
This renderer will be responsible for rendering the coins to the screen.
It will need to loop through all of the coins in the coin handle and draw them to the screen.
It will use a texture sprite sheet to render the coins, so it has an animation by swapping out the section of the texture it is renderering.
The sprite sheet looks like this: 

![](https://i.imgur.com/vzksegP.png) 

As you can see the texture has 5 frames so we will need to loop through them.
We will also need to generate a source rectangle for the texture dimensions.
And load the texture required for the animation.
It will need:
- A property for the current frame of the animation
- A property for the frames passed since the last frame change
- A constant for the frame speed of the animation (how many frames pass before the frame changes)
- A property for the texture of the coin
- A property for the source rectangle of the coin
- A method to load the texture
- And a method to draw the coin

And the class will look like this:
```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class CoinRenderer : ConditionalRenderer
{
    private int _currentFrame; // The current frame of the animation
    private int _frameCount; // The current frame count
    private const int FrameSpeed = 8; // The speed of the animation (every 8 frames)

    private Texture2D _texture; // The texture of the coin
    private Rectangle _sourceRectangle; // The source rectangle of the coin
    
    public CoinRenderer() : base("velocity.item.coin") // Set the render id
    {
        LoadTexture(); // Load the texture
    }

    private void LoadTexture () // Load the texture
    {
        _texture = Loader.AssetManager.GetTexture("item.coin"); // Get the texture from the asset manager
        _sourceRectangle = new Rectangle(0, 0, _texture.width / 5, _texture.height); // Set the source rectangle to the first frame of the animation
    }

    public override void Draw() // Draw the coin
    {
        _frameCount++; // Increment the frame count
        if (_frameCount >= 60 / FrameSpeed) // If the frame count is greater than or equal to 60 / FrameSpeed (60 frames per second / FrameSpeed)
        {
            _frameCount = 0; // Reset the frame count
            _currentFrame++; // Increment the current frame
            if (_currentFrame > 5) _currentFrame = 0; // If the current frame is greater than 5, reset it to 0
            _sourceRectangle = new Rectangle(_currentFrame * (_texture.width / 5), 0, _texture.width / 5, _texture.height); // Set the source rectangle to the current frame
        }
        
        foreach (var item in Loader.Game.ObjectManager.LoadedItemObjects.OfType<ItemObject>().Where(item => item.Id == ItemIds.Coin)) // Loop through all coins
        {
            Raylib.DrawTexturePro(_texture, _sourceRectangle, new Rectangle(
                Convert.ToInt32(item.Position.X - item.Dimensions.X / 2), 
                Convert.ToInt32(item.Position.Y - item.Dimensions.Y / 2),
                Convert.ToInt32(item.Dimensions.X),
                Convert.ToInt32(item.Dimensions.X)), new Vector2(0, 0), 0, new Color(255, 255, 255, 255)); // Draw the coin
        }
    }
}
```

> No errors to overcome in this renderer
> 

### Player Renderer
Now we have our game, its time to make the player look good.
We will be using a sprite sheet for the player, so we can have an animation for the player.
The sprite sheet looks like this:
![](https://i.imgur.com/D68FmHj.png)
![](https://i.imgur.com/Q62sVe6.png)
![](https://i.imgur.com/5jZZ5SJ.png)
![](https://i.imgur.com/h1zSkkL.png)
![](https://i.imgur.com/6naLjao.png)
![](https://i.imgur.com/SfjbUfS.png)
![](https://i.imgur.com/81kOGrq.png)
![](https://i.imgur.com/aLKDu4V.png)
![](https://i.imgur.com/cYMRV4Z.png)

As you can see there are a different number of frames so I will be using a dictionary to store the number of frames for each animation, per apperence.

The player renderer will need to:
- Load the textures
- Draw the player
- Handle the sound (TODO: Move this to a better place)
- Handle the frame speed (frame speed is faster when the player is moving faster)
- Handle the jump animation (jumping is a bit different to walking and running)
- Handle the idle animation (when the player is not moving)
- Handle the walk animation (when the player is moving slowly)
- Handle the run animation (when the player is moving fast)

The class will need:
- A property for the player
- A property for the current frame of the animation
- A property for the frame count
- A property for the frame speed of the animation
- A property for the tile count of each animation
- A property for if the player is jumping
- A property for the walk asset
- A property for the idle asset
- A property for the run asset
- A property for the jump asset
- A property for the frame rectangle
- A method to load the textures
- A method to draw the player
- Two constants for the maximum and minimum speed of the animation

And the class will look like this:
```csharp
using System.Numerics;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Game.Physics;

namespace Velocity.Player;

public class PlayerRenderer : ElementRenderer
{
    private const int MaxSpeed = 12; // The maximum speed of the animation
    private const int MinSpeed = 5; // The minimum speed of the animation

    private int _currentFrame; // The current frame of the animation
    private int _frameCount; // The current frame count
    private int _frameSpeed = 8; // The speed of the animation

    private readonly Dictionary<int, Dictionary<string, int>?> _tileCount = new()
    {
        { 
            1, new Dictionary<string, int> {
                { "idle", 8 },
                { "walk", 8 },
                { "run", 8 },
                { "jump", 8 }
                
            }
        },
        {
            2, new Dictionary<string, int> {
                { "idle", 6 },
                { "walk", 8 },
                { "run", 8 },
                { "jump", 9 }
            }
        },
        {
            3, new Dictionary<string, int> {
                { "idle", 6 },
                { "walk", 7 },
                { "run", 8 },
                { "jump", 11 }
            }
        }
        
    }; // The tile count of each animation

    private bool _jump; // Whether the player is jumping or not
    
    private Texture2D _walkAsset; // The walk asset
    private Texture2D _idleAsset; // The idle asset
    private Texture2D _runAsset; // The run asset
    private Texture2D _jumpAsset; // The jump asset

    private Rectangle _frameRect; // The frame rectangle

    public PlayerRenderer(Player parentPlayer) : base("velocity:player", false) // The constructor
    { 
        Player = parentPlayer; // Set the player
    }

    public void LoadTextures()  // Load the textures
    {
        _idleAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "idle"); // Get the idle asset
        _walkAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "walk"); // Get the walk asset
        _runAsset =  Loader.AssetManager.GetPlayerTexture(Player.Appearance, "run");  // Get the run asset
        _jumpAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "jump"); // Get the jump asset
    }

    public override void Draw() // Draw the player
    {
        Texture2D texture; // The texture to draw

        if (_jump) // If the player is jumping
        {
            texture = _jumpAsset; // Set the texture to the jump asset
            _currentFrame = 4 + Convert.ToInt32(4 * (Player.Velocity.Y / 30)); // Set the current frame, Iterate through the jump animation based on the velocity

            if (Player.OnFloor) _jump = false; // If the player is on the floor, stop jumping
        }
        else // If the player is not jumping
        {
            if (Convert.ToInt32(Player.Velocity.X) == 0) texture = _idleAsset; // If the player is not moving, set the texture to the idle asset
            else if (Convert.ToInt32(Double.Abs(Player.Velocity.X)) <= 10) texture = _walkAsset; // If the player is moving slowly, set the texture to the walk asset
            else texture = _runAsset; // If the player is moving fast, set the texture to the run asset
        }
        
        

        _frameCount++; // Increment the frame count

        if (_frameCount >= 60 / _frameSpeed && Loader.Game.IsRunning) // If the frame count is greater than or equal to the frame speed and the game is running
        {
            _frameCount = 0; // Reset the frame count
            _currentFrame++; // Increment the current frame
            if (_currentFrame >= GetFrameCount(texture)) _currentFrame = 0; // If the current frame is greater than or equal to the frame count, reset the current frame
            
            _frameRect = new Rectangle(_currentFrame * texture.width / GetFrameCount(texture), 0, texture.width / GetFrameCount(texture), texture.height); // Set the frame rectangle to the current frame
            
            Player.HandleMoveSound(); // Handle the move sound TODO: Move this to a better place
        }

        if (!Player.OnFloor) _jump = true; // If the player is not on the floor, set jumping to true
        
        if (!_jump) _frameSpeed = MinSpeed + Convert.ToInt32((MaxSpeed - MinSpeed) * Double.Abs(Player.Velocity.X) / PhysicsConst.MaxAcceleration); // If the player is not jumping, set the frame speed to the minimum speed plus the maximum speed minus the minimum speed multiplied by the absolute value of the player's velocity divided by the maximum acceleration (frame speed is faster when the player is moving faster)
        
        int x = Convert.ToInt32(Player.Position.X) - (Convert.ToInt32(Player.Dimensions.X) / 2); // Get the x position of the player
        int y = Convert.ToInt32(Player.Position.Y) - (Convert.ToInt32(Player.Dimensions.Y) / 2); // Get the y position of the player
        

        Rectangle final = new Rectangle(_frameRect.x, _frameRect.y, Player.Velocity.X < 0 ? -_frameRect.width : _frameRect.width, _frameRect.height); // Set the final rectangle to the frame rectangle

        Raylib.DrawTexturePro(texture, final, new Rectangle(x - 105, y - 135, 280, 310), new Vector2(), 0, Color.WHITE); // Draw the player
    }
    
    private int GetFrameCount(Texture2D forTexture) // Get the frame count of a texture
    {
        string animation = forTexture.Equals(_idleAsset) ? "idle" : forTexture.Equals(_walkAsset) ? "walk" : forTexture.Equals(_runAsset) ? "run" : "jump"; // Get the animation of the texture
        _tileCount.TryGetValue(Player.Appearance, out Dictionary<string, int>? dict); // Get the dictionary value of the player's appearance
        
        if (dict == null) return 0; // If the dictionary is null, return 0
        dict.TryGetValue(animation, out int count); // Get the count of the animation
        
        return count; // Return the count
    }

    private Player Player { get; } // The player
}
```

> #### Errors to overcome
> - Player not rendering (fixed by modifying the final rectangle, was drawing in the wrong orentation, you cant flip the texture, they just go transparent)
> - Player not animating (fixed by adding a frame count and frame speed, rather than a simple animation counter)
> - Player asset jumping around and not framing correctly (fixed by adding a frame count dictionary, and getting the frame count from that)
> - Wrong frame speed (to quick of slow, fixed by tweaking the frame speed calculation)

## Section 8 review

### What has been achieved
More renderers, for the objects, items, particles, coins and the player.
A working player renderer, with working animations, and working sound effects.
Working sprite animations and working particle animations.

### How we have tested
After implimenting each renderer we added it to the main game file to be enabled and disabled when needed. Fixing any bugs as we find them.
We then performed iterative testing until all of the bugs were fixed.
Then performing a final test to validate it is working as a compleate unit.

### How it fills our success criteria
- [x] The game has a working object renderer
- [x] The game has a working item renderer
- [x] The game has a working particle renderer
- [x] The game has a working coin renderer
- [x] The game has working coin animations
- [x] The game has working particle animations
- [x] The game has working player animations
- [x] The game has working player sound effects

### Meeting the criteria of:
Visually displaying, game objects, the player and giving them animations.

## Section 9: Statistics & Menus ext
Now that we have our game, its time to add some statistics and some more menus to the game.
We will be adding a loading screen, a pause menu, a death menu and a win menu.

### Loading screen
This menu will be responsible for (sudo)loading the game.
Of course all the data that the game needs are loaded on boot, so we dont need these, but the aim to to make the game look and feel more professional.
It will fade in, hang for a certain amount of time, and then fade out, triggering the callback, for what the behaviour should be for once it has compleated.
It will need:
- A property for the alpha of the loading screen
- A property for the text of the loading screen
- A property for the subtext of the loading screen
- A property for the callback of the loading screen
- A property for the countdown of the loading screen
- A property for the hang time of the loading screen
- A property for the counter of the loading screen
- A property for the step of the loading screen
- A constant for the fade time of the loading screen
- A method to trigger the loading screen
- A method to tick the loading screen

And it will look like this:
```csharp
using Velocity.Ui.Render;

namespace Velocity.Ui.Screens;

public class LoadingScreen : Window
{
    public new static readonly int UiId = 6; // The ui id

    private const int Fade = 30; // The fade time
    private static int _hang = 200; // The hang time (how long the screen stays on, frames)

    private int _counter; // The counter for the fade and hang
    private int _step; // The step of the loading screen (fading in out, hanging, etc)

    public int Alpha; // The alpha of the loading screen

    private static bool _countDown; // Whether to count down or not
    public static string Text = ""; // The text of the loading screen
    public static string Subtext = ""; // The subtext of the loading screen

    private static Func<ValueType>? _onFinish; // The callback when the loading screen is finished

    public LoadingScreen() // The constructor
    {
        Renderer = new LoadingScreenRenderer(this); // Set the renderer
    }

    public override void OnDisplay(int? previous) // When the screen is displayed
    {
        _step = 0;      // Reset the step
        _counter = 0;   // Reset the counter
        Alpha = 0;      // Reset the alpha
    }

    public static void Trigger(string text, string subtext, Func<ValueType>? callback = null, bool countDown = true, int hang = 200) // Trigger the loading screen
    {
        Text = text;            // Set the text
        Subtext = subtext;      // Set the subtext
        _onFinish = callback;   // Set the callback
        _countDown = countDown; // Set the countdown
        _hang = hang;           // Set the hang time
    }

    public override void Tick() // Tick the loading screen
    {
        switch (_step) // Switch the step
        {
            case 0: // Fade in
                if (_counter >= Fade) // If the counter is greater than the fade time
                {
                    _step++; // Increment the step
                    break; // Break
                }

                Alpha = (int)(255d * ((double)_counter / Fade)); // Set the alpha to the counter divided by the fade time multiplied by 255 
                _counter++; // Increment the counter  
                break;
            case 1: // Hang
                if (_counter >= Fade + _hang) // If the counter is greater than the fade time plus the hang time
                {
                    _step++; // Increment the step
                    break; // Break
                }

                Alpha = 255; // Set the alpha to 255

                _counter++; // Increment the counter
                break;
            case 2: // Fade out
                if (_counter >= Fade * 2 + _hang) // If the counter is greater than the fade time multiplied by 2 plus the hang time
                {
                    _step++; // Increment the step
                    break; // Break
                }
                
                Alpha = (int)(255d * (1 - ((double)_counter - Fade - _hang) / Fade)); // Set the alpha to 255 minus the counter minus the fade time minus the hang time divided by the fade time multiplied by 255

                _counter++; // Increment the counter
                break;
            case 3: // Finish
                _onFinish?.Invoke(); // Invoke the callback
                Alpha = 0; // Set the alpha to 0
                break; // Break
        }

        if (!_countDown) return; // If not counting down, return
        if (_counter >= Fade * 2 + _hang - 180) Text = "3"; // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 180, set the text to 3
        if (_counter >= Fade * 2 + _hang - 120) Text = "2"; // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 120, set the text to 2
        if (_counter >= Fade * 2 + _hang - 60) Text = "1";  // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 60, set the text to 1
    }
}
```

Then comes the renderer to actually display this to the screen.
It meeds to display a black rectangle over the whole screen with the alpha of the loading screen.
Then display the text and sub-text in the center of the screen.
It will look like this:
```csharp
using Raylib_cs;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class LoadingScreenRenderer : UiRenderer
{
    private readonly LoadingScreen _parent;
    
    public LoadingScreenRenderer (LoadingScreen parent) : base("velocity:screens.loading")
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, Color.BLACK);
        
        Raylib.DrawText(LoadingScreen.Text, (int)(WindowManager.Width / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 64, 2).X / 2), (int)(WindowManager.Height / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 64, 2).Y / 2), 64, Color.WHITE with { a = (byte)_parent.Alpha});
        Raylib.DrawText(LoadingScreen.Subtext, (int)(WindowManager.Width / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Subtext, 34, 2).X / 2), (int)(WindowManager.Height / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Subtext, 34, 2).Y / 2 + Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 34, 2).Y + 20), 34, Color.WHITE with { a = (byte)_parent.Alpha});
    }
}
```

> #### Errors to overcome
> - Staying in hang state (fixed by adding a step counter, rather than just a counter, with offsets)
> - Not fading in or out (again fixed by adding a step counter, rather than just a counter, with offsets)
> - Not triggering the right screen after finish (fixed by adding a callback)

### Pause menu
This menu will be responsible handling the users input when the game is paused.
It will have a resume, restart, settings and quit button.
It will also display the players current time and coins collected.
It will need:
- A property for the buttons
- A method to register the buttons
- A method to select a button
- A method to add a button
- A method to tick the pause menu

The class will look like this:
```csharp
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Raylib_cs;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class PauseScreen : Window
{
    public new static readonly int UiId = 5; // The ui id

    public readonly Dictionary<int, Button?> Buttons = new();  // The buttons
    
    public PauseScreen() // The constructor
    {
        RegisterButtons(); // Register the buttons
        Renderer = new PauseScreenRenderer(this); // Set the renderer
    }

    private void RegisterButtons() // Register the buttons
    {
        AddButton(0, "Resume");     // Add the resume button
        AddButton(1, "Restart");    // Add the restart button
        AddButton(2, "Options");    // Add the options button
        AddButton(3, "Main Menu");  // Add the main menu button
    }

    public override void Tick() // Tick the pause screen
    {
        foreach (var pair in Buttons) // For each button
        {
            Button? clicked = pair.Value; // Get the button
            if (clicked == null) continue; // If the button is null, continue
 
            if (clicked.IsClicked()) Select(pair.Key); // If the button is clicked, select it
        }
    }

    private void Select(int buttonId) // Select a button
    {
        switch (buttonId) // Switch the button id
        {
            case 0: // Resume
                Loader.Game.Resume(); // Resume the game
                Loader.Game.MenuManager.DisableAll(); // Disable all menus
                break;
            case 1: // Restart
                Loader.Game.Reset(); // Reset the game
                Loader.Game.MenuManager.DisableAll(); // Disable all menus
                Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK); // Trigger a black flash
                break;
            case 2: // Options
                Loader.Game.MenuManager.SetActiveWindow(SettingsScreen.UiId, UiId); // Set the settings screen as the active window
                break; 
            case 3: // Main Menu
                Loader.Game.Stop(); // Stop the game 
                Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window
                LoadingScreen.Trigger("Returning to Main Menu",  
                    "Please wait...",
                    () =>
                    {
                        Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
                        return 0;
                    }, false, 140); // Trigger the loading screen with a callback to set the main menu as the active window 
                break;
        }
    }

    private void AddButton (int id, string text) // Add a button
    {
        Text buttonText = new Text(); // The button text

        buttonText.Color = new Color(200, 200, 200, 255); // Set the color
        buttonText.FontSize = Convert.ToInt32(WindowManager.Height / 18); // Set the font size
        buttonText.Data = text; // Set the data
        buttonText.Font = FontUtils.ButtonFont; // Set the font

        int y = Convert.ToInt32(WindowManager.Height / 2 - (Convert.ToInt32(WindowManager.Height / 5.145) - WindowManager.Height / 16) + (Buttons.Count) * (WindowManager.Height / 8)); // Calculate the y position of the button based on the number of buttons

        Button? button = new Button(
            buttonText,
            new Vector2(Convert.ToInt32(WindowManager.Width / 18.29), y),
            new Vector2(Convert.ToInt32(WindowManager.Width / 4.65), Convert.ToInt32(WindowManager.Height / 10.29))); // Create the button with the text, position, and size
        button.BgColor = new Color(40, 40, 40, 200); // Set the background color
        button.BorderColor = Color.WHITE; // Set the border color
        
        Buttons.Add(id, button); // Add the button
    }
}
```

Now we need a renderer for this menu, so the user can see what is happining in this menu.
It will need to draw a header and footer like the [Settings Menu](#settings-menu), and draw the buttons.
It will look like this:
```csharp
using System.Numerics;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class PauseScreenRenderer : UiRenderer
{
    private readonly PauseScreen _parent;

    public PauseScreenRenderer(PauseScreen parent) : base("velocity:window." + PauseScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(10, 10, WindowManager.Width - 20, WindowManager.Height - 20, new Color(60, 60, 60, 200));
        Raylib.DrawRectangle(0, 0, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        Raylib.DrawTextEx(FontUtils.Font, "Paused", new Vector2(10, 10), (int)SettingsScreen.Safezone.Y - 20, 2, Color.WHITE);

        foreach (var pair in _parent.Buttons)
        {
            if (pair.Value?.Renderer == null) throw new VelocityException("Element renderer undefined ");
            pair.Value.Renderer.Draw();
        }
    }
}
```

> I did not encounter any errors in this section as its merging elements from previous menus, all was previously working.

### Win screen & end screen
Next will be the win screen, this will be responsible for displaying the the players score, coins, and giving them the option to progress, exit, or restart the current level.
It will need:

The code will look like this (for both the win screen and the end screen):
```csharp

using Raylib_cs;
using Velocity.Game.Statistics;
using Velocity.Ui.Misc;
using Velocity.Math;
using Velocity.Ui.Render;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class WinScreen : Window
{
    public new static readonly int UiId = 4; // The ui id 

    public readonly Dictionary<int, Button?> Buttons = new(); // The buttons

    private readonly WinScreenRenderer _renderer; // The renderer

    public WinScreen() // The constructor
    {
        _renderer = new WinScreenRenderer(this); // Set the renderer
        Renderer = _renderer; // Set the renderer
        
        RegisterButtons(); // Register the buttons
    }

    public override void OnDisplay(int? previous)
    {
        _renderer.Count = 0; // Reset the count
        _renderer.Step = 0; // Reset the step

        if (Loader.Game.Level == null || Loader.Game.LevelManager.GetLevels().Count != Loader.Game.Level.Id - 1) return; // If the level is null or the level id is not the last level, return
        Loader.Game.MenuManager.SetActiveWindow(EndScreen.UiId);  // Set the end screen as the active window
    }

    public override void Tick() // Tick the win screen
    { 
        foreach (var pair in Buttons.Where(pair => pair.Value == null || pair.Value.IsClicked())) // For each button and if the button is clicked 
        {
            switch (pair.Key) // Switch the button id
            {
                case 0: // Restart
                    Loader.Game.Reset(); // Reset the game
                    Loader.Game.MenuManager.DisableAll(); // Disable all menus
                    Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK); // Trigger a black flash
                    break;
                case 1: // Main Menu
                    Loader.Game.Stop(); // Stop the game
                    Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window
                    LoadingScreen.Trigger("Returning to Main Menu", 
                        "Please wait...",
                        () =>
                        {
                            Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
                            return 0;
                        }, false, 140); // Trigger the loading screen with the text "Returning to Main Menu" and the subtext "Please wait..." and the callback to set the main menu as the active window
                    
                    break;
                /* Win screen only */
                case 2: // Next Level
                    Loader.Game.Stop(); // Stop the game
                    Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window

                    if (Loader.Game.Level != null) // If the level is not null
                    {
                        Level.Level next = Loader.Game.LevelManager.GetLevelById(Loader.Game.Level.Id + 1); // Get the next level
                    
                        LoadingScreen.Trigger(next.Name,
                            "Time to beat: " + StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(next.Id)),
                            () =>
                            {
                                Loader.Game.LevelManager.LoadNextLevel();
                                Loader.Game.Run();
                                Loader.Game.MenuManager.DisableAll();
                                Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK);
                                return 0;
                            }); // Trigger the loading screen with the text of the next level and the subtext of the time to beat
                    }

                    break;
                /* End win screen only */
            }
        }

        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // If the escape key is pressed, set the main menu as the active window
    }
    
    private void RegisterButtons()
    {
        AddButton(0, "Restart"); // Add the restart button
        AddButton(1, "Main Menu"); // Add the main menu button
        AddButton(2, "Next Level"); // Add the next level button (win screen only)
    }


    private void AddButton (int id, string text) // Add a button
    {
        Text buttonText = new Text
        {
            Color = Color.WHITE,
            FontSize = 48,
            Data = text,
            Font = FontUtils.ButtonFont
        }; // The button text
        
        int x = WindowManager.Width / 2 - 675 + (id * (450 + 20)); // The x position of the button (win screen)
        int x = WindowManager.Width / 2 - 275 + (id * (450 + 20)); // The x position of the button (end screen)
        
        Button button = new Button(buttonText, new Vector2(x, WindowManager.Height - 230), new Vector2(400, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button with the text, position, and size
        
        Buttons.Add(id, button); // Add the button
    }
}
```

And the renderer which will be responsible for rendering the buttons and the text for this menu:
It will render the buttons at the bottom of the screen and the text at the center of the screen.
```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class WinScreenRenderer : UiRenderer
{
    private readonly WinScreen _parent;
    public int Count;
    public int Step;
    private int _stay = 20;

    public WinScreenRenderer(WinScreen parent) : base("velocity:window." + WinScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        switch (Step)
        {
            case 0:
                if (Count < 100) Count += 5;
                if (Count == 100) Step = 1;
                break;
            case 1:
                _stay--;
                if (_stay == 0)
                {
                    _stay = 20;
                    Step = 2;
                }
                break;
            case 2:
                if (Count > 0) Count -= 5;
                if (Count == 0) Step = 3;
                break;
        }
        

        if (Step is 2 or 3)
        {
            Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(10, 10, 30, 200));

            foreach(Button? button in _parent.Buttons.Values)
            {
                button?.Renderer?.Draw();
            }
        
            Raylib.DrawTextEx(FontUtils.Font, "Level Completed!", new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Level Completed!", 65, 2).X / 2, 300), 65, 2, Color.WHITE); // (Win screen)
            Raylib.DrawTextEx(FontUtils.Font, "Thank you for playing!\nMade by Reuben Yates", new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Thank you for playing!\nMade by Reuben Yates", 65, 2).X / 2, 300), 65, 2, Color.WHITE); // (End screen)

            TimeSpan tspan = Loader.Game.Timer.Elapsed;
            string text = $"{tspan.Minutes:00}:{tspan.Seconds:00}.{tspan.Milliseconds / 10:00}";
            Raylib.DrawTextEx(FontUtils.Font, "Time: " + text, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Time: " + text, 55, 2).X / 2, 410), 55, 2, Color.WHITE);
            Raylib.DrawTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, 55, 2).X / 2, 460), 55, 2, Color.WHITE);
        } 

        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(0, 0, 0, (int)(255d * (Count / 100d))));
    }
}
```

Thus concluding the menus.

## Section 9 review

### What has been achieved
A way to save and compair times for levels so you can compeate and get better times.
A loading screen, that fades in, hangs, and fades out, with a callback to trigger the next screen.
A working pause menu, that you can resume, restart or quit from. Along with accessing the settings in-game.
A working win/end screen, that displays your time and coins collected, and gives you the option to progress, restart or quit.

### How we have tested
After implimenting each menu we registered it to the menu manager and then called the open function. Fixing any bugs as we find them.
Then adding/removing or moving elements as we see fit.
Then performing iterative testing until all of the bugs were fixed.
Then performing a final test to validate it is working as a compleate unit.

### Design changes
Changed the apply revert and close buttons, to just close and reset the settings, as the user can just close the menu to revert the changes, no need for applying.

### How it fills our success criteria
- [x] The game has a working loading screen to increase smoothness and professionalism
- [x] The game has a working pause menu to allow the user to pause the game
- [x] The game has a working win screen to allow the user to progress to the next level
- [x] The game has a working end screen to allow the user to restart or quit the game

### Meeting the criteria of:
A loading screen, pause menu, win screen and end screen.

## Section 10: project review & final testing

First thing we need to do is check all usability features are working as intended. Therefor buttons are nice and big, fonts are bold and clear, and the user can navigate the menus with ease.
This was the perpouse of the borders around the control values, so you can easily tell that they are keys you have to press.

![](https://i.imgur.com/WOk31KT.png)
![](https://i.imgur.com/7KSKvAa.png)

Then I tested all the buttons and removed ones I didnt have time to impliment (e.g. the statistics screen button wasnt needed in the end)

Any final and outlying bugs that I found were fixed and pushed to github so its working on all platforms.
Had a weird bug with mac in windowed mode in the level menu, where the buttons were offset, so implimented a platform check and an offset value.

Then there is the input validation of the control fields. They needed to be validated. So they display the correct text when a key is invalid or taken.

![](https://i.imgur.com/fFZ3hen.png)
![](https://i.imgur.com/h3ZFyaA.png)

Once this had been done we checked all the inputs of the ui elements, and noticed that they wouldnt move if you clicked but moved the mouse off them. So implimented a `_held` var, so we can keep track of if the mouse is still down, and it was activated.

Then we finally moved on to testing the game as a compleate game, and found one or two erros that needed fixing. Once those were gone, we got a finished and working game!

`WOOHOO FINALY DONE W THIS WELL DONE`

# Evaluation

## Success criteria
| Criteria                                                                                                             | Met? |
|----------------------------------------------------------------------------------------------------------------------|------|
| 1. A window that can have its preferences changed within a settings menu                                             | ✓    |
| 2. Main menu with 4 buttons and a title, including game version information and my copywrite                         | ✓    |
| 3. Settings screen with at least 3 sections, that include controls, video settings, audio settings                   | ✓    |
| 4. Working camera system that smoothly follows the player wherever they go on the game canvas                        | ✓    |
| 5. A working physics system that can be applied to any object, with gravity, drag, and collision calculations        | ✓    |
| 6. A working player that can be moved using the control scheme, with velocity and appropriate drag calculations      | ✓    |
| 7. Working texture and audio loading system                                                                          | ✓    |
| 8. Working parallax background renderer that infinitely draws around the camera                                      | ✓    |
| 9. A working object system for adding game objects such as collidable objects and item power-ups                     | ✓    |
| 10. A working level system that can load and save level stats, and load the next level when the player completes one | ✓    |
| 11. A working ai that chases the player                                                                              |      | 


## Evidence

### 1. A window that can have its preferences changed within a settings menu
![](https://i.imgur.com/EUAUjHG.png)
Here we can clearly see a window, created by my code, that is created in the operating system, and displayed to the user

![](https://i.imgur.com/2zFCXs4.png)
And here we can see a settings menu, dedicated to changing the display settings, resolution, fullscreen, etc.

### 2. Main menu with 4 buttons and a title, including game version information and my copywrite
- Got rid of one of the buttons for statistics as didnt have time to implement
- Added a character apperance selector
![](https://i.imgur.com/RFjnJLd.png)a

### 3. Settings screen with at least 3 sections, that include controls, video settings, audio settings
![](https://i.imgur.com/2zFCXs4.png)
![](https://i.imgur.com/BdoKtOJ.png)
![](https://i.imgur.com/LK1INwn.png)
Here we can see the three menus I implimented.
One for changing the display settings of the game, so the user can customise the visual experience.
One for changing the different audio settings, so the user can customise the audio experience.
And one for changing the controls, so the user can customise the control scheme.

### 4. Working camera system that smoothly follows the player wherever they go on the game canvas
![](https://imgur.com/TdhZi9c.gif)
We can see that we have a working camera system that follows the player wherever they go in the game.
We also added a zoom feature, so the user can zoom in and out of the game. 
And we added a camera smoothness slider to settings so we can change how smooth the camera is.

### 5. A working physics system that can be applied to any object, with gravity, drag, and collision calculations
![](https://imgur.com/lW6o0mQ.gif)
Here we can see a working physics, making use of velocity, air and ground resistance, and gravity.
We can also see working collision detection up against the obsicals and the floor.
We further inforce that we need to use our velocity and momentum to our advantage, not being able to make certain jumps with low velocity.
This wouldn't be possible without the physics system I implemented.

### 6. A working player that can be moved using the control scheme, with velocity and appropriate drag calculations
![](https://imgur.com/P7knN8Y.gif)
Here I have added these lines of code to the debug renderer so we can visually see the keyboard inputs.
```csharp
        List<string> keys = new ();
        foreach (KeyboardKey key in Enum.GetValues(typeof(KeyboardKey)))
        {
            if (!Raylib.IsKeyDown(key))
            {
                continue;
            }
            
            if (KeyParser.ToKey(key.ToString().Replace("KEY_", "")) == KeyboardKey.KEY_NULL) // If it is not deemed valid by KeyParser:
            {
                continue;
            }
            
            keys.Add(key.ToString());
            
            Raylib.DrawText(key.ToString(), WindowManager.Width / 2 - 100, 120 + (keys.Count * 35), 32, Color.WHITE);
        }
```
And we can clearly see that the player is moving when we press the assigned keys, and the velocity and drag are working as intended.
![](https://imgur.com/Ak72U5M.gif)
And here we can see the menu were we can re-assign those controls.
Adding input validation and a key parser gave us the abillity to only use character keys, shift and space.
It also provides us a way to tell our user that these keys are invalid or taken already, so the user doesnt get confused.
These are both working smoothly and as intended.

### 7. Working texture and audio loading system
[Click here for video of audio](https://imgur.com/zTPL4zP)

We can clearly see that the texture system is loaded, as the game is displaying the barrel, crate, player, item and background textures.
We can also see that the audio system is working, as we can hear the sound effects and ui sounds.
These have all the intended functionality, loading and setting volumes of different types of sounds, and loading the correct background and player textures for said level and appearance.

### 8. Working parallax background renderer that infinitely draws around the camera
![](https://imgur.com/caJIVKz.gif)
By removing the limits to the zoom we can zoom out and see the parallax layers in action.
We can see that all the layers move at the correct speed in reference to the camera. And the clouds infinitely scroll.
We can also see that the layers get possitioned correctly when the camera moves, so they are always drawn inside the cameras view plane.

# Code


## AssetManager.cs
**Location:** `Velocity-NEA\Velocity\Asset\AssetManager.cs`

```csharp
using Raylib_cs;
using Velocity.Utils;

namespace Velocity.Asset;

public class AssetManager
{
    // List of all assets to load
    public string[] TextureLocations =
    {
        "background\\1\\layer07.png",
        "background\\1\\layer06.png",
        "background\\1\\layer05.png",
        "background\\1\\layer04.png",
        "background\\1\\layer03.png",
        "background\\1\\layer02.png",
        "background\\1\\layer01.png",
        "background\\2\\layer07.png",
        "background\\2\\layer06.png",
        "background\\2\\layer05.png",
        "background\\2\\layer04.png",
        "background\\2\\layer03.png",
        "background\\2\\layer02.png",
        "background\\2\\layer01.png",
        "background\\3\\layer07.png",
        "background\\3\\layer06.png",
        "background\\3\\layer05.png",
        "background\\3\\layer04.png",
        "background\\3\\layer03.png",
        "background\\3\\layer02.png",
        "background\\3\\layer01.png",
        "background\\mainmenu.png",
        "obj\\crate.png",
        "obj\\barrel.png",
        "particle\\particle_map.png",
        "item\\power_ups.png",
        "item\\coin.png",
        "ui\\heart.png",
        "player\\1\\walk.png",
        "player\\1\\run.png",
        "player\\1\\idle.png",
        "player\\1\\jump.png",
        "player\\2\\walk.png",
        "player\\2\\run.png",
        "player\\2\\idle.png",
        "player\\2\\jump.png",
        "player\\3\\walk.png",
        "player\\3\\run.png",
        "player\\3\\idle.png",
        "player\\3\\jump.png"
    };

    public Dictionary<string, Texture2D> Textures = new();
    
    public AssetManager()
    {
        LoadAssets();
    }

    // Load all assets into memory
    private void LoadAssets()
    {
        foreach (var textureLocation in TextureLocations)
        {
            Texture2D tempTexture = Raylib.LoadTexture(Utils.Path.AssetLocation + textureLocation.Replace("\\", OsVersion.GetDirSeperator()));

            string name = textureLocation.Split(".")[0].Replace("\\", ".");
            
            Textures.Add(name, tempTexture);
        }    
    }

    // Return a loaded texture with anti-aliasing
    public Texture2D GetTexture(string name)
    {
        Textures.TryGetValue(name, out Texture2D texture);
        // Raylib.SetTextureFilter(texture, TextureFilter.TEXTURE_FILTER_ANISOTROPIC_16X);
        return texture;
    }

    public Texture2D GetPlayerTexture(int player, string name)
    {
        return GetTexture("player." + player + "." + name);
    }
    
    public Texture2D GetBackgroundTexture(int background, string name)
    {
        return GetTexture("background." + background + "." + name);
    }
}
```

## VelocityException.cs
**Location:** `Velocity-NEA\Velocity\Exception\VelocityException.cs`

```csharp
namespace Velocity.Exception;

public class VelocityException : System.Exception
{
    public VelocityException(string message) : base(message)
    {}
}
```

## CameraController.cs
**Location:** `Velocity-NEA\Velocity\Game\CameraController.cs`

```csharp
using Velocity.Math;
using Raylib_cs;
using Velocity.Game.Object;
using Velocity.Input;
using Velocity.Window;

namespace Velocity.Game;

public class CameraController : IControllable
{ 
    private readonly Game _game; // The game instance
     
    private Vector2 _smoothedPosition = Vector2.Zero(); // The smoothed position of the camera
    private Vector2 _prevPosition = Vector2.Zero(); // The previous position of the camera

    private float _zoom = 1.0f; // The zoom of the camera
    private float _zoomOffset = 0.0f; // The zoom offset of the camera
    private float _smoothedZoom = 1.0f; // The smoothed zoom of the camera
    private float _prevZoom = 1.0f; // The previous zoom of the camera


    public CameraController(Game game) // Constructor
    {
        _game = game; // Set game
        Loader.WindowManager.Camera.offset = new System.Numerics.Vector2(WindowManager.Width / 2 - (WindowManager.Width / 8), WindowManager.Height / 2 + WindowManager.Height / 3); // Set camera offset to center of screen
        Loader.WindowManager.Camera.target = new System.Numerics.Vector2(0, Game.FloorHeight); // Set camera target the floor
    }

    public void Init()
    {
        _smoothedPosition.X = _game.Player.Position.X; // Set smoothed position x to player x
        _smoothedPosition.Y = _game.Player.Position.Y; // Set smoothed position y to player y

        Loader.WindowManager.Camera.target = new System.Numerics.Vector2(Convert.ToSingle(_smoothedPosition.X), Convert.ToSingle(_smoothedPosition.Y)); // Set camera target to smoothed position
        Loader.WindowManager.Camera.zoom = _smoothedZoom; // Set camera zoom to smoothed zoom
    }
    
    public void Tick()
    {
        ApplySmoothing(_game.Player.Position); // Apply smoothing to the player position
        
        Loader.WindowManager.Camera.target = new System.Numerics.Vector2( 
            Convert.ToSingle(_smoothedPosition.X), Convert.ToSingle(
                Game.FloorHeight - ((Game.FloorHeight - _game.Player.Position.Y) / 2) * (1 + _zoomOffset) / 2) // Set camera target to smoothed position with zoom offset applied so that the camera zooms out when the player is higher up
            );
        Loader.WindowManager.Camera.zoom = _smoothedZoom; // Set camera zoom to smoothed zoom
    }

    private void ApplySmoothing(Vector2 to) // Apply smoothing to the player position
    { 
        double ratio = 1 - Loader.Settings.CameraLinearity;  // Calculate the smoothing ratio

        float zoomOffset = Convert.ToSingle((_game.Player.Position.Y + _game.Player.Dimensions.Y / 4) /
                                                            (Game.FloorHeight - WindowManager.Height / 2)); // Calculate the zoom offset based on the player position and the floor height
        
        _zoom = zoomOffset < 1 ? float.Pow(zoomOffset, 3.6f * (0.9f + _zoomOffset)) : 1; // Calculate the zoom based on the zoom offset

        _zoom += _zoomOffset; // Add the zoom offset to the zoom
        
        _smoothedPosition.X = Convert.ToInt32(to.X * ratio + _prevPosition.X * Loader.Settings.CameraLinearity); // Calculate the smoothed position x
        _smoothedPosition.Y = Convert.ToInt32(to.Y * ratio + _prevPosition.Y * Loader.Settings.CameraLinearity); // Calculate the smoothed position y
        _prevPosition = _smoothedPosition; // Set the previous position to the smoothed position
        
        _smoothedZoom = _zoom * 0.15f + _prevZoom * 0.85f; // Calculate the smoothed zoom
        _prevZoom = _smoothedZoom; // Set the previous zoom to the smoothed zoom
    }

    public void OnZoomIn() // Zoom in
    {
        if (_zoomOffset < 0.1f) _zoomOffset += 0.01f; // If the zoom offset is less than 0.1, add 0.01 to the zoom offset
    }

    public void OnZoomOut() // Zoom out
    {
        if (_zoomOffset > -0.2f) _zoomOffset -= 0.01f; // If the zoom offset is greater than -0.2, subtract 0.01 from the zoom offset
    }
}
```

## Game.cs
**Location:** `Velocity-NEA\Velocity\Game\Game.cs`

```csharp
using System.Diagnostics;
using Velocity.Math;
using Velocity.Level;
using Velocity.Ui;
using Raylib_cs;
using Velocity.Game.Misc;
using Velocity.Game.Object;
using Velocity.Game.Object.FloatingText;
using Velocity.Game.Object.Renderer;
using Velocity.Game.Physics;
using Velocity.Game.Statistics;
using Velocity.Ui.Overlay.Render;
using Velocity.Ui.Screens;
using Velocity.Window.Render;

namespace Velocity.Game;

public class Game
{
    // Constants
    public const int FloorHeight = 10000;
    
    // Integer properties
    public int Coins;
    private int _counter;
    
    // Int array properties
    public int[] PowerUps =
    {
        0,
        0,
        0
    };
    
    // Boolean properties
    public bool IsRunning;
    public bool Closed = false;

    // Readonly properties
    public readonly Stopwatch Timer;
    public readonly Player.Player Player;
    private readonly CameraController _cameraController;
    
    public readonly MenuManager MenuManager;
    public readonly ObjectManager ObjectManager;
    public readonly LevelManager LevelManager;
    private readonly RenderManager _renderManager;
    private readonly PhysicsManager _physicsManager;
    private readonly FloatingTextManager _floatingTextManager;
    
    // Object properties
    public Level.Level? Level;
    
    // Render properties
    public readonly TextOverlayRenderer TextRenderer;
    public readonly ParallaxRenderer BackgroundRenderer;
    public readonly ColoredFlashRenderer ColoredFlashRenderer = new ();

    private readonly HudRenderer _hudRenderer;
    private readonly TimerRenderer _timerRenderer;
    private readonly ObjectRenderer _objectRenderer;
    private readonly PowerUpRenderer _powerUpRenderer;
    private readonly DistanceLimitRenderer _distanceLimitRenderer;
    

    /**
     * Constructor to register all the managers and controllers, and to render the static elements of the screen.
     */
    public Game()
    {
        // Register renderer manager and camera controller
        _renderManager = new RenderManager();
        _cameraController = new CameraController(this);
        Loader.ControlManager.RegisterController(_cameraController);

        // Register managers
        LevelManager = new LevelManager();
        MenuManager = new MenuManager();
        ObjectManager = new ObjectManager();
        _physicsManager = new PhysicsManager();
        _floatingTextManager = new FloatingTextManager();

        // Register renderers
        BackgroundRenderer = new ParallaxRenderer();
        TextRenderer = new TextOverlayRenderer();
        _hudRenderer = new HudRenderer(this);
        _timerRenderer = new TimerRenderer();
        _objectRenderer = new ObjectRenderer(this);
        _powerUpRenderer = new PowerUpRenderer(this);
        _distanceLimitRenderer = new DistanceLimitRenderer();
        
        // Register player
        Player = new Player.Player(new Vector2(-200 * (Velocity.Level.Level.LevelWidth / 2 + 1), FloorHeight - 300));

        // Pass renderer of static elements
        _renderManager.RenderUiElement(_hudRenderer);
        _renderManager.RenderUiElement(TextRenderer);
        _renderManager.RenderUiElement(_timerRenderer);
        _renderManager.RenderUiElement(_distanceLimitRenderer);
        _renderManager.RenderUiElement(ColoredFlashRenderer);
        _renderManager.RenderBackgroundElement(BackgroundRenderer);
        _renderManager.RenderPlayer(Player);

        // Register timer
        Timer = new Stopwatch();
    }

    // Begin function that is called after the level loads
    public void Run()
    {
        // Enable the player and pass to the physics manager
        Player.IsEnabled = true;
        _physicsManager.RegisterObject(Player);

        // Register all the floating texts (Last thing thats registered)
        foreach (var floatingTextData in Level?.FloatingTexts.ToArray()!)
        {
            _floatingTextManager.RegisterText(floatingTextData.Position , floatingTextData.Text, Color.WHITE);
        }

        // Render the elements and begin the game.
        RenderElements();
        Resume(true);

        Loader.WindowManager.Renderer.Dump();
    }

    /**
     * Pause the game on pause menu enter
     */
    private void Pause()
    {
        // Disable player logic, begin the game, and activate the hud renderer
        Player.IsEnabled = false;
        IsRunning = false;
        _hudRenderer.IsEnabled = false;
        
        // Stop the timer
        Timer.Stop();
    }
    
    /**
     * Resume the game after pause menu exit
     */
    public void Resume(bool isBegin = false)
    {
        // Enable player logic, begin the game, and activate the hud renderer
        Player.IsEnabled = true;
        IsRunning = true;
        _hudRenderer.IsEnabled = true;
        
        // Enable the timer, unless its the first begin, so it will be triggered by player movement
        if (!isBegin) Timer.Start();
    }

    // Stop function that is called when the game is stopped
    public void Stop()
    {
        // Stop close and clear all managers
        IsRunning = false;
        _physicsManager.Stop();
        ObjectManager.Close();
        _floatingTextManager.Clear();
        
        Unrender(); // Unrender everything
        
        // Reset player stats, coins and power-ups
        Player.Reset();
        Player.IsEnabled = false;
        PowerUps = new int[3] {0, 0, 0};
        Coins = 0;

        // Reset times and statistics
        Timer.Reset();
        StatisticManager.Save();
    }

    // Load renderers 
    private void RenderElements()
    {
        // Render non-static elements
        _renderManager.RenderGameElement(_objectRenderer);
        _renderManager.RenderGameElement(new FloorRenderer());
        _renderManager.RenderGameElement(_powerUpRenderer);
        _renderManager.RenderGameElement(_floatingTextManager.Renderer);
    
        // Initialise game components and load textures
        _cameraController.Init();
        Player.Renderer?.LoadTextures();
        BackgroundRenderer.LoadTextures();
        
        // Render static elements
        BackgroundRenderer.IsEnabled = true;
        _hudRenderer.IsEnabled = true;
        _timerRenderer.IsEnabled = true;
        _distanceLimitRenderer.IsEnabled = true;
        if (Player.Renderer != null) Player.Renderer.IsEnabled = true;
    }
    
    // Unload renderers
    private void Unrender()
    {
        // Un-render non-static elements
        _renderManager.UnRenderGameElement(new FloorRenderer());
        _renderManager.UnRenderGameElement(_objectRenderer);
        _renderManager.UnRenderGameElement(_powerUpRenderer);
        _renderManager.UnRenderGameElement(_floatingTextManager.Renderer);

        // Un-render static elements
        BackgroundRenderer.IsEnabled = false;
        _hudRenderer.IsEnabled = false;
        TextRenderer.IsEnabled = false;
        _timerRenderer.IsEnabled = false;
        _distanceLimitRenderer.IsEnabled = false;
        if (Player.Renderer != null) Player.Renderer.IsEnabled = false;
    }

    // Remove all level data
    public void Reset()
    {
        // Stop the game, re-register the level, and run the game
        Stop();
        int levelId = Level.Id;
        Level = null;
        LevelManager.SelectLevel(levelId);
        Run();
    }
    
    // Win state
    public void Win()
    {
        Pause();
        if (Timer.Elapsed.TotalSeconds <= StatisticManager.GetLevelBestTime(Level.Id) || StatisticManager.GetLevelBestTime(Level.Id) == 0) // Check to see if best time is greater than current time, if so replace the value
        {
            StatisticManager.SetLevelBestTime(Level.Id, (int)Timer.Elapsed.Ticks);
        }
        
        MenuManager.SetActiveWindow(WinScreen.UiId);
    }

    // Tick() function in all files executes the main logic for that frame
    public void Tick()
    {
        if (Closed) return; // Dont do anything if the game is considered closed.

        if (MenuManager.IsScreenActive()) // Handle menus if one is active
        {
            MenuManager.Tick();
            return;
        }
        
        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) // Pause the game if escape is pressed
        {
            Pause();
            MenuManager.SetActiveWindow(PauseScreen.UiId);
            return;
        }


        if (!IsRunning) return; // Dont run logic if the game is not running.

        _counter++;
        if (_counter == Raylib.GetFPS()) // Decrement all the power-ups every second
        {
            _counter = 0;
            if (PowerUps[0] > 0) PowerUps[0]--;
            if (PowerUps[1] > 0) PowerUps[1]--;
            if (PowerUps[2] > 0) PowerUps[2]--;
        } 
        
        // Tick all the managers for there respective components to work
        _physicsManager.Tick();
        ObjectManager.CoinHandle.Update();
        _cameraController.Tick();
        _floatingTextManager.Tick();
        
        // If the player has moved outside of there starting position: start the timer
        if (!Timer.IsRunning && System.Math.Abs(Player.Position.X - -200 * (Velocity.Level.Level.LevelWidth / 2 + 1)) != 0) Timer.Start();
        
        // If the player is outside of the game area bounds
        if (Double.Abs(Player.Position.X) > (Velocity.Level.Level.LevelWidth / 2 + 8) * 200)
        {
            if (Player.Position.X > 0) Win(); // If there at the far right trigger win
            else // If there at the far left, teleport the player to the start position, and fade from black
            {
                Player.Position.X = -(Velocity.Level.Level.LevelWidth / 2 + 1) * 200;
                ColoredFlashRenderer.Trigger(20, Color.BLACK);
            }
        }
        
        // Move the player continuously once the player has left the game area bounds, so they either win, or get teleported back.
        if (Player.Position.X > (Velocity.Level.Level.LevelWidth / 2 + 1) * 200) Player.Velocity.X = PhysicsConst.MaxAcceleration; 
        if (Player.Position.X < -(Velocity.Level.Level.LevelWidth / 2 + 3) * 200) Player.Velocity.X = -PhysicsConst.MaxAcceleration;

    }
    
}


```

## FloorRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Misc\FloorRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Misc;

public class FloorRenderer : ElementRenderer
{
    private Texture2D _floorTexture; // The floor texture
    
    public FloorRenderer() : base("velocity:floor") // Constructor
    {
        LoadTextures(); // Load textures
    }

    private void LoadTextures()
    {
        if (Loader.Game.Level == null) return; // Return if the level is null
        _floorTexture = Loader.AssetManager.GetBackgroundTexture(Loader.Game.Level.Background, "layer01");  // Get the background texture
    }

    
    public override void Draw()
    {
        for (int i = -13; i < 13; i++) // Draw the floor
        {
            Raylib.DrawTexturePro(_floorTexture, new Rectangle(0, 0, _floorTexture.width, _floorTexture.height), new Rectangle((WindowManager.Width / 3) * i, Game.FloorHeight - WindowManager.Width / 6 + 12, WindowManager.Width / 3, WindowManager.Height / 3), new Vector2(), 0, Color.WHITE); // Draw the floor texture

            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight - 10, (WindowManager.Width / 3), 10, new Color(1, 20, 71, 0), new Color(0, 5, 50, 25)); // Draw the floor gradient
            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight,(WindowManager.Width / 3), 48, new Color(0, 5, 50, 25), new Color(0, 0, 0, 200)); // Draw the floor gradient
            Raylib.DrawRectangleGradientV((WindowManager.Width / 3) * i, Game.FloorHeight + 48, (WindowManager.Width / 3), 5, new Color(0, 0, 0, 200), new Color(0, 0, 0, 255)); // Draw the floor gradient
            Raylib.DrawRectangle((WindowManager.Width / 3) * i, Game.FloorHeight + 52, (WindowManager.Width / 3), WindowManager.Height / 2, new Color(0, 0, 0, 255)); // Draw the footer for the floor
        }
    }
}
```

## ParallaxRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Misc\ParallaxRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Misc;

public class ParallaxRenderer : BackgroundRenderer
{
    private readonly Texture2D[] _parallaxTextures = new Texture2D[5]; // Background textures: 0 = layer02, 1 = layer03, 2 = layer04, 3 = layer05, 4 = layer06

    private Vector2 _lastPosition = Vector2.Zero; // Last camera position
    private Rectangle _textureBounds; // Texture bounds

    private int _cloudOffset; // Cloud offset
    
    private readonly int[] _yOffsets =
    {
        -60,
        0,
        0,
        -40,
        0
    }; // Y offsets for each layer so we can position them per layer

    private readonly Vector2[] _layerPositions = new Vector2[5]; // Positions of each layer
    
    public ParallaxRenderer() : base("velocity:background", false) // Register the renderer
    {
        GenerateNewPositions(); // Generate the positions
    }
    
    public void LoadTextures() // Load the textures
    {
        int bg = Loader.Game.Level == null ? (new Random()).Next(1, 3) : Loader.Game.Level.Background; // Get the background id (random if no level is loaded) 
        _parallaxTextures[0] = Loader.AssetManager.GetBackgroundTexture(bg, "layer02"); // Load the the first layer        (offset of 1 as we are not using the background plane as this renderer will not drawn at the correct stage in the loop)
        _parallaxTextures[1] = Loader.AssetManager.GetBackgroundTexture(bg, "layer03"); // Load the the second layer
        _parallaxTextures[2] = Loader.AssetManager.GetBackgroundTexture(bg, "layer04"); // Load the the third layer
        _parallaxTextures[3] = Loader.AssetManager.GetBackgroundTexture(bg, "layer05"); // Load the the fourth layer
        _parallaxTextures[4] = Loader.AssetManager.GetBackgroundTexture(bg, "layer06"); // Load the the fifth layer
        
        _textureBounds = new Rectangle(0.0f, 0.0f, _parallaxTextures[1].width, _parallaxTextures[1].height); // Set the texture bounds
    }

    public override void Draw()
    {
        if (System.Math.Abs(_lastPosition.X - Loader.WindowManager.Camera.target.X) != 0 ||
            System.Math.Abs(_lastPosition.Y - Loader.WindowManager.Camera.target.Y) != 0) // Check if the camera has moved
        {
            GenerateNewPositions(); // Generate new positions

            _lastPosition = Loader.WindowManager.Camera.target; // Set the last position of the camera to the current position of the camera
        }

        _cloudOffset += 1; // Increment the cloud offset (make them move to the right)
        if (_cloudOffset > WindowManager.Width / 2) _cloudOffset = -(WindowManager.Width / 2); // Reset the cloud offset if it is greater than half the width of the window (loop pefrectly

        // Generate the rectangles for each layer (x, y, width and height) 
        // The cloud layer is offset by the cloud offset
        Rectangle rectangle0 = GenerateRectangle(_layerPositions[0]); 
        Rectangle rectangle1 = GenerateRectangle(_layerPositions[1]); 
        Rectangle rectangle2 = GenerateRectangle(_layerPositions[2]);
        Rectangle rectangle3 = GenerateRectangle(Vector2.Add(_layerPositions[3], new Vector2(_cloudOffset, 0)));
        Rectangle rectangle4 = GenerateRectangle(_layerPositions[4]);

        
        // Will draw the layers in reverse order (so the first layer is drawn last)
        // Draw the first layer (layer02) 3 times (one in the middle and one on each side) with y offsets, with its origin being in the center of the texture
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, 0, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, WindowManager.Width, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[4], _textureBounds, OffsetRectangle(rectangle4, -WindowManager.Width, _yOffsets[4]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        // Do the same for the clouds (7 layers to increase the density) while being symmetrical and loop able
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, 0, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width, _yOffsets[3]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, WindowManager.Width + WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[3], _textureBounds, OffsetRectangle(rectangle3, -WindowManager.Width - WindowManager.Width / 2, _yOffsets[3] - WindowManager.Height / 4), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        // Do the same for the other layers
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, 0, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, WindowManager.Width, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE); 
        Raylib.DrawTexturePro(_parallaxTextures[2], _textureBounds, OffsetRectangle(rectangle2, -WindowManager.Width, _yOffsets[2]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, 0, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, WindowManager.Width, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[1], _textureBounds, OffsetRectangle(rectangle1, -WindowManager.Width, _yOffsets[1]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, 0, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, WindowManager.Width, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
        Raylib.DrawTexturePro(_parallaxTextures[0], _textureBounds, OffsetRectangle(rectangle0, -WindowManager.Width, _yOffsets[0]), new Vector2(-_parallaxTextures[2].width / 2, 0), 0, Color.WHITE);
    }

    private void GenerateNewPositions() // Generate new positions for the layers
    {
        // Get the render position for each layer
        _layerPositions[0] = GetRenderPosition(2, 2); // Movement offset multiplier being 2 so its camera position / 2
        _layerPositions[1] = GetRenderPosition(3, 5); // Same again but with 3 and 5
        _layerPositions[2] = GetRenderPosition(4, 6); // Same again but with 4 and 6
        _layerPositions[3] = GetRenderPosition(6, 8); // Same again but with 6 and 8
        _layerPositions[4] = GetRenderPosition(8, 10); // Same again but with 8 and 10
    }
    

    private Rectangle OffsetRectangle(Rectangle subject, int x = 0, int y = 0) // Offset a rectangle by x and y
    {
        subject.x += x; // Offset the x
        subject.y += y; // Offset the y
        return subject; // Return the rectangle
    }

    private Rectangle GenerateRectangle(Vector2 at) // Generate a rectangle at a position
    {
        return new Rectangle(at.X, at.Y, WindowManager.Width, WindowManager.Height); // Generate a rectangle at a position with the width and height of the window
    }
    
    private Vector2 GetRenderPosition(int rx, int ry) // Get the render position of a layer
    {
        int x = Convert.ToInt32(Loader.WindowManager.Camera.target.X - Loader.WindowManager.Camera.offset.X) + WindowManager.Width / 2 - Convert.ToInt32(Loader.WindowManager.Camera.target.X / rx); // Get the x position of the layer (offset by the camera offset) and offset by the camera position / rx (rx being the movement offset multiplier) 
        int y = Convert.ToInt32(Loader.WindowManager.Camera.target.Y - Loader.WindowManager.Camera.offset.Y) + WindowManager.Height / 2 + (Game.FloorHeight - Convert.ToInt32(Loader.WindowManager.Camera.target.Y)) / ry; // Get the y position of the layer (offset by the camera offset) and offset by the camera position / ry (ry being the movement offset multiplier)

        return new Vector2(CheckRenderOffset(rx, x) - WindowManager.Width / 2, y - WindowManager.Height / 2); // Return the render position with render offset if is too far away from camera position (offset by the width and height of the window / 2)
    }

    // Checks to see if the render position is too far away from the camera position
    // If it is then it will offset the render position by the width of the window * the movement offset multiplier
    // This is so the layers loop perfectly
    private int CheckRenderOffset(int rx, int x) 
    {
        var multiplier= Convert.ToInt32(Loader.WindowManager.Camera.target.X) / WindowManager.Width / rx + (Loader.WindowManager.Camera.target.X < 0 ? -1 : 0); // Get the movement offset multiplier (camera position / width of the window / rx + if the camera position is less than 0 then -1 else 0)
        x += WindowManager.Width * multiplier; // Offset the x by the width of the window * the movement offset multiplier
 
        return x; // Return the x
    }
}
```

## Barrel.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Barrel.cs`

```csharp
using Velocity.Math;

namespace Velocity.Game.Object;

public class Barrel : TexturedObject
{
    public Barrel(Vector2 position) : base(ObjectIds.Barrel, Loader.AssetManager.GetTexture("obj.barrel"), position, new Vector2(150, 200))
    {
        Collidable = true;
    }
}
```

## Coin.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Coin.cs`

```csharp
using Raylib_cs;
using Velocity.Math;

namespace Velocity.Game.Object;

public class Coin : ItemObject
{
    public Coin (int id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(0, Loader.AssetManager.GetTexture("item.coin"), position, new Vector2(50, 50))
    {
        Id = (byte)id; // Set the id
        Collidable = false; // Set collidable
    }

    public void CheckForPickup() // Check if the coin is in range of the player
    {
        if (!InRange(Loader.Game.Player.Position)) return; // Check if the player is in range of the coin
        Loader.Game.ObjectManager.RemoveItemObject(this); // Remove the coin from the item object list
        Loader.AudioManager.PlaySound("game.coin"); // Play the coin sound
        Loader.Game.Coins += 1 * (Loader.Game.PowerUps[0] > 0 ? 2 : 1); // Add 1 coin to the player's coin count
    }
    
    public new void OnInteract()
    {
    }
}
```

## CoinHandle.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\CoinHandle.cs`

```csharp
namespace Velocity.Game.Object;

public sealed class CoinHandle
{
    private readonly List<Coin> _coins = new();

    public void Add(Coin coin)
    {
        _coins.Add(coin);
    }
    
    public void Remove(Coin coin)
    {
        _coins.Remove(coin);
    }

    public void Clear()
    {
        _coins.Clear();
    }

    public void Update()
    {
        foreach (var coin in _coins.ToArray())
        {
            coin.CheckForPickup();
        }
    }
}
```

## Crate.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Crate.cs`

```csharp
using Velocity.Game.Physics;
using Velocity.Math;

namespace Velocity.Game.Object;

public class Crate : TexturedObject
{
    public Crate(Vector2 position) : base(ObjectIds.Crate, Loader.AssetManager.GetTexture("obj.crate"), position, new Vector2(200, 200))
    {
        Collidable = true;
    }
}
```

## FloatingText.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\FloatingText\FloatingText.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Object.FloatingText.Renderer;
using Velocity.Math;

namespace Velocity.Game.Object.FloatingText;

public class FloatingText
{
    public Vector2 Position { get; set; }
    public string Text { get; set; }
    public Color TextColor { get; set; }
    public Color BackgroundColor { get; set; }
    public Color BorderColor { get; set; }

    public bool IsInRange = false;

    public TextRenderer Renderer;
    
    public FloatingText(Vector2 position, string text, Color textColor, Color? backgroundColor = null, Color? borderColor = null)
    {
        Position = position;
        Text = text;
        TextColor = textColor;
        BackgroundColor = backgroundColor ?? new Color(60, 60, 60, 200);
        BorderColor = borderColor ?? textColor;

        Renderer = new TextRenderer(this);
    }

    public void Tick()
    {
        IsInRange = CheckInRange(Loader.Game.Player.Position, 500);
    }

    private bool CheckInRange(Vector2 position, int range)
    {
        return position.X >= Position.X - range &&
                position.X <= Position.X + range &&
                position.Y >= Position.Y - range &&
                position.Y <= Position.Y + range;
    }
}
```

## FloatingTextManager.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\FloatingText\FloatingTextManager.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Object.Renderer;
using Velocity.Math;

namespace Velocity.Game.Object.FloatingText;

public class FloatingTextManager
{
    public readonly List<FloatingText> FloatingTexts = new();
    public readonly FloatingTextRenderer Renderer;

    public FloatingTextManager()
    {
        Renderer = new(this);
    }
    
    public void RegisterText(Vector2 position, string text, Color textColor, Color? backgroundColor = null, Color? borderColor = null)
    {
        FloatingTexts.Add(new FloatingText(position, text, textColor, backgroundColor, borderColor));
    }

    public void Clear()
    {
        FloatingTexts.Clear();
    }

    public void Tick()
    {
        foreach (FloatingText floatingText in FloatingTexts.ToArray())
        {
            floatingText.Tick();   
        }
    }
}
```

## TextRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\FloatingText\Renderer\TextRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.FloatingText.Renderer;

public class TextRenderer : ConditionalRenderer
{
    private readonly FloatingText _parent;
    private int _alpha;
    
    public TextRenderer (FloatingText parent) : base("velocity:game.object.floating-text." + Guid.NewGuid())
    {
        _parent = parent;
    }
    
    public override void Draw()
    {
        if (_parent.IsInRange && _alpha < 255) _alpha += 5;
        else if (_alpha > 0) _alpha -= 5;
        else return;
        int x = (int) (_parent.Position.X - Raylib.MeasureTextEx(Raylib.GetFontDefault(), _parent.Text, 28, 2).X / 2);
        int y = (int) (_parent.Position.Y - Raylib.MeasureTextEx(Raylib.GetFontDefault(), _parent.Text, 28, 2).Y / 2);

        Raylib.DrawRectangle(x - 10, y - 10, (int)Raylib.MeasureTextEx(Raylib.GetFontDefault(), _parent.Text, 28, 2).X + 20, (int)Raylib.MeasureTextEx(Raylib.GetFontDefault(), _parent.Text, 28, 2).Y + 20, _parent.BackgroundColor with { a = (byte)(200d * _alpha / 255d) });
        Raylib.DrawText(_parent.Text, x, y, 28, _parent.TextColor with { a = Convert.ToByte(_alpha) });
    }
}
```

## GameObject.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\GameObject.cs`

```csharp
using System.Numerics;
using Velocity.Game.Physics;
using Vector2 = Velocity.Math.Vector2;

namespace Velocity.Game.Object;

public abstract class GameObject
{
    public int Id; // Item/object id
    public bool Collidable; // Can the object be collided with?
    public readonly Vector2 Position; // Position of the object
    public readonly Vector2 Dimensions; // Dimensions of the object

    protected GameObject(int id, Vector2 position, Vector2 dimensions, bool isCollidable = true) // Constructor
    {
        Id = id; // Set id
        Position = position; // Set position
        Dimensions = dimensions; // Set dimensions
        Collidable = isCollidable; // Set if the object is collidable
    }

    public bool CheckRange(Collidable target) // Check if the object is in range of the player (collidable)
    {
        return target.Position.X + target.Dimensions.X / 2 >= Position.X - (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.X - target.Dimensions.X / 2 <= Position.X + Dimensions.X + (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.Y - target.Dimensions.Y / 2 <= Position.Y + Dimensions.Y + (PhysicsConst.MaxVelocity * 1.5) &&
               target.Position.Y + target.Dimensions.Y / 2 >= Position.Y - (PhysicsConst.MaxVelocity * 1.5);
    }

    public bool InXBounds(Collidable target, int offset = 0) // Check if the object is in the x bounds of the player (collidable)
    {
        return target.Position.X + target.Dimensions.X / 2 >= Position.X - offset && 
               target.Position.X - target.Dimensions.X / 2 <= Position.X + Dimensions.X + offset;
    }

    public bool InYBounds(Collidable target, int offset = 0) // Check if the object is in the y bounds of the player (collidable)
    {
        return target.Position.Y + target.Dimensions.Y / 2 >= Position.Y - offset &&
               target.Position.Y - target.Dimensions.Y / 2 <= Position.Y + Dimensions.Y + offset;
    }
}
```

## ItemIds.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\ItemIds.cs`

```csharp
namespace Velocity.Game.Object;

public class ItemIds
{
    public const int Coin = 4;
    public const int Speed = 3;
    public const int Health = 2;
    public const int CoinMult = 1;
}
```

## ItemObject.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\ItemObject.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Object.Renderer;
using Velocity.Input;
using Velocity.Math;

namespace Velocity.Game.Object;

public class ItemObject : TexturedObject, IControllable
{
    public byte Id; // Item id
    private int _range = 50; // Range of the item
    private const int Cooldown = 40; // Cooldown of the item

    public Color Color = Color.WHITE; // Color of the item
    public ParticleRenderer ParticleRenderer; // Particle renderer of the item
    public InfoCardRenderer InfoCardRenderer; // Info card renderer of the item

    private bool _enabled = true; // Is the item enabled?
    
    public ItemObject(byte id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(id, texture, position, dimensions) // Constructor
    {
        Id = id; // Set id
        Collidable = false; // Set collidable
    }

    public void SetInteractRange(int pixels) // Set the interact range
    {
        _range = pixels; // Set the range
    }

    public void SetColor(Color color) // Set the color
    {
        Color = color; // Set the color
        ParticleRenderer =
            new ParticleRenderer(
                new System.Numerics.Vector2(Convert.ToSingle(Position.X + 25), Convert.ToSingle(Position.Y + 25)),
                Color); // Set the particle renderer with the color
        InfoCardRenderer = new InfoCardRenderer(this); // Set the info card renderer (must be registered after color info is set)
    }

    public static Color GetColorFor(int id) // Get the color for the item
    {
        return id switch
        {
            1 => new Color(0, 105, 10, 255),
            2 => new Color(158, 0, 93, 255),
            3 => new Color(167, 196, 0, 255),
            _ => Color.WHITE
        }; // Return the color for the item
    }

    public bool InRange(Vector2 position) // Check if the item is in range of the player
    {
        return
        position.X <= Position.X + Dimensions.X + _range &&
            position.X >= Position.X - _range &&
            position.Y <= Position.Y + Dimensions.Y + _range &&
            position.Y >= Position.Y - _range; // Return if the player is in range of the item by checking if the player is in the x and y bounds of the item with the range
    }

    public void OnInteract() // On interact
    {
        if (!InRange(Loader.Game.Player.Position)) return; // If the player is not in range, return
        if (!_enabled) return; // If the item is not enabled, return
            
        switch (Id)
        {
            case 2: // If the item is a health item
                Loader.Game.Player.Health += 1; // Add 1 to the player's health
                break;
            default: // If the item is not a health item
                Loader.Game.PowerUps[Id - 1] += Cooldown; // Add the cooldown to the power up
                break;
        } 

        _enabled = false;
        Loader.Game.TextRenderer.TriggerOverlay(InfoCardRenderer._text[Id - 1] + " activated", new Color(255, 255, 0, 255), 3);
        Loader.AudioManager.PlaySound("game.collect");
        
        Remove();
    }
    
    private void Remove ()
    {
        Loader.ControlManager.UnRegisterController(this);
        Loader.Game.ObjectManager.RemoveItemObject(this);
    }
}
```

## ObjectIds.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\ObjectIds.cs`

```csharp
namespace Velocity.Game.Object;

public class ObjectIds
{
    public static int Crate = 1;
    public static int Barrel = 2;
}
```

## ObjectManager.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\ObjectManager.cs`

```csharp
using System.Reflection;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Game.Object.Renderer;
using Velocity.Math;

namespace Velocity.Game.Object;

public class ObjectManager
{ 
    private readonly Dictionary<int, Type> _registeredItems = new(); // Registered items
    private readonly Dictionary<int, Type> _registeredObjects = new(); // Registered objects
    
    public readonly List<TexturedObject> LoadedTextureObjects = new(); // Loaded objects
    public readonly List<ItemObject?> LoadedItemObjects = new(); // Loaded items
    
    public readonly CoinHandle CoinHandle = new(); // Coin handle

    public ObjectManager() // Register default items and objects
    {
        RegisterDefaultItems(); // Register default items
        RegisterDefaultObjects();  // Register default objects
    }

    private void RegisterDefaultItems() // Register default items
    {
        RegisterItem(ItemIds.Speed, typeof(ItemObject)); // Register speed item
        RegisterItem(ItemIds.Health, typeof(ItemObject)); // Register health item
        RegisterItem(ItemIds.CoinMult, typeof(ItemObject));  // Register coin multiplier item
        RegisterItem(ItemIds.Coin, typeof(Coin)); // Register coin item
    }

    private void RegisterDefaultObjects () // Register default objects
    {
        RegisterObject(ObjectIds.Crate, typeof(Crate)); // Register crate object
        RegisterObject(ObjectIds.Barrel, typeof(Barrel)); // Register barrel object
    }

    private void RegisterItem(int id, Type item) // Register item
    {
        _registeredItems.Add(id, item); // Add item to registered items
    }
    
    private void RegisterObject(int id, Type item) // Register object
    {
        _registeredObjects.Add(id, item); // Add object to registered objects
    }
    
    public void AddItemObject(int id, Vector2 at) // Add item object
    {
        if (id == 0) return;
        ItemObject? itemObject = Activator.CreateInstance(_registeredItems[id], 
            (byte)id,
            Loader.AssetManager.GetTexture("item.power_ups"),
            new Vector2(at.X, Game.FloorHeight - at.Y),
            new Vector2(50, 50)) as ItemObject; // Create item object with its initial values and set it to the item object variable (activator because we are dealing with types rather than instances)
        
        if (itemObject == null) throw new VelocityException("Cannot add item object that has not been registered."); // Throw exception if item object is null

        itemObject.SetColor(ItemObject.GetColorFor(id)); // Set the color of the item object
        LoadedItemObjects.Add(itemObject); // Add item object to loaded item objects
        Loader.ControlManager.RegisterController(itemObject); // Register item object as a controller

        if (id == 4) CoinHandle.Add((Coin)itemObject); // Add coin to coin handle if the item id is 4
    }

    public void AddObject(int id, Vector2 at) // Add object
    {
        TexturedObject? gameObject = 
            Activator.CreateInstance(_registeredObjects[id], new Vector2(at.X, Game.FloorHeight - at.Y)) as TexturedObject; // Create object with its initial values and set it to the object variable (activator because we are dealing with types rather than instances)
        
        if (gameObject == null) throw new VelocityException("Cannot add item object that has not been registered."); // Throw exception if object is null
        
        LoadedTextureObjects.Add(gameObject); // Add object to loaded objects
    }

    public void Close() // Close
    {
        LoadedItemObjects.Clear(); // Clear loaded item objects
        LoadedTextureObjects.Clear(); // Clear loaded objects
        CoinHandle.Clear(); // Clear coins
    }

    public void RemoveItemObject(ItemObject itemObject) // Remove item object
    {
        LoadedItemObjects.Remove(itemObject); // Remove item object from loaded item objects
        if (itemObject.Id == ItemIds.Coin) CoinHandle.Remove((Coin)itemObject); // Remove coin from coin handle if the item id is 4
    }
}
```

## CoinRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\CoinRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class CoinRenderer : ConditionalRenderer
{
    private int _currentFrame; // The current frame of the animation
    private int _frameCount; // The current frame count
    private const int FrameSpeed = 8; // The speed of the animation (every 8 frames)

    private Texture2D _texture; // The texture of the coin
    private Rectangle _sourceRectangle; // The source rectangle of the coin
    
    public CoinRenderer() : base("velocity.item.coin") // Set the render id
    {
        LoadTexture(); // Load the texture
    }

    private void LoadTexture () // Load the texture
    {
        _texture = Loader.AssetManager.GetTexture("item.coin"); // Get the texture from the asset manager
        _sourceRectangle = new Rectangle(0, 0, _texture.width / 5, _texture.height); // Set the source rectangle to the first frame of the animation
    }

    public override void Draw() // Draw the coin
    {
        _frameCount++; // Increment the frame count
        if (_frameCount >= 60 / FrameSpeed) // If the frame count is greater than or equal to 60 / FrameSpeed (60 frames per second / FrameSpeed)
        {
            _frameCount = 0; // Reset the frame count
            _currentFrame++; // Increment the current frame
            if (_currentFrame > 5) _currentFrame = 0; // If the current frame is greater than 5, reset it to 0
            _sourceRectangle = new Rectangle(_currentFrame * (_texture.width / 5), 0, _texture.width / 5, _texture.height); // Set the source rectangle to the current frame
        }
        
        foreach (var item in Loader.Game.ObjectManager.LoadedItemObjects.OfType<ItemObject>().Where(item => item.Id == ItemIds.Coin)) // Loop through all coins
        {
            Raylib.DrawTexturePro(_texture, _sourceRectangle, new Rectangle(
                Convert.ToInt32(item.Position.X - item.Dimensions.X / 2), 
                Convert.ToInt32(item.Position.Y - item.Dimensions.Y / 2),
                Convert.ToInt32(item.Dimensions.X),
                Convert.ToInt32(item.Dimensions.X)), new Vector2(0, 0), 0, new Color(255, 255, 255, 255)); // Draw the coin
        }
    }
}
```

## FloatingTextRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\FloatingTextRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Object.FloatingText;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class FloatingTextRenderer : ElementRenderer
{
    private readonly FloatingTextManager _manager;
    public FloatingTextRenderer(FloatingTextManager manager) : base("velocity:game.object.floatingtext")
    {
        _manager = manager;
    }

    public override void Draw()
    {
        foreach (var floatingText in _manager.FloatingTexts)
        {
            floatingText.Renderer.Draw();
        }
    }
}
```

## InfoCardRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\InfoCardRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class InfoCardRenderer : ConditionalRenderer
{
    private ItemObject _item;
    
    private int _lastAMultiplier = 0;

    public int Alpha = 0;
    public int TextAlpha = 0;

    public string[] _text =
    {
        "+1 Coin Multiplier",
        "+1 Health",
        "+15% Speed"
    };
    
    public InfoCardRenderer(ItemObject item) : base("velocity.item.infocard." + item.Position.X + "." + item.Position.Y)
    {
        _item = item;
    }

    public override void Draw()
    {
        if (_item.InRange(Loader.Game.Player.Position))
        {
            if (Alpha < 100) Alpha += 5;
        }
        else
        {
            if (Alpha > 0) Alpha -= 5;
        }

        if (Alpha == 100)
        {
            if (TextAlpha < 100) TextAlpha += 20;
            if (TextAlpha >= 100) TextAlpha = 100;
        }
        else
        {
            if (TextAlpha > 0) TextAlpha -= 25;
            if (TextAlpha <= 0) TextAlpha = 0;
        }
        
        
        if (Alpha <= 0) return;
        
        double aMultiplier = Convert.ToDouble(Alpha) / 100d;
        double textAMultiplier = Convert.ToDouble(TextAlpha) / 100d;
        
        Raylib.DrawRectangleRounded(new Rectangle(Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 107), Convert.ToInt32(_item.Position.Y - 30) - Convert.ToInt32(100d * aMultiplier), 215, Convert.ToInt32(100d * aMultiplier)), 0.3f, 4, new Color(0, 20, 40, Convert.ToInt32(150 * aMultiplier)));
        Raylib.DrawRectangleRoundedLines(new Rectangle(Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 107), Convert.ToInt32(_item.Position.Y - 30) - Convert.ToInt32(100d * aMultiplier), 215, Convert.ToInt32(100d * aMultiplier)), 0.3f, 4, 3f, _item.Color with{ a = Convert.ToByte(255 * aMultiplier) });
        Raylib.DrawRectangleRoundedLines(new Rectangle(Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 97), Convert.ToInt32(_item.Position.Y - 130 + 10), 35, 36), 0.3f, 4, 2f, new Color(255, 255, 255, Convert.ToInt32(255 * textAMultiplier)));
        Raylib.DrawText(Loader.Settings.Keybind.Interact.ToString().Replace("KEY_", ""), Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 89), Convert.ToInt32(_item.Position.Y - 130 + 14), 32, Color.WHITE with {a = Convert.ToByte(255 * textAMultiplier)});
        Raylib.DrawText("to Interact", Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 50), Convert.ToInt32(_item.Position.Y - 112), 24, Color.WHITE with {a = Convert.ToByte(255 * textAMultiplier)});
        Raylib.DrawText(_text[_item.Id - 1], Convert.ToInt32(_item.Position.X + _item.Dimensions.X / 2 - 98), Convert.ToInt32(_item.Position.Y - 65), 24, Color.WHITE with {a = Convert.ToByte(255 * textAMultiplier)});
    }
}
```

## ObjectRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\ObjectRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class ObjectRenderer : ElementRenderer
{
    private readonly Game _game;
    
    public ObjectRenderer(Game game, string renderId = "velocity:game_objects") : base(renderId) 
    {
        _game = game; // Set the game
    }

    public override void Draw() 
    {
        if (_game.ObjectManager.LoadedTextureObjects.Count == 0) return; // Don't draw if there are no objects to draw
        
        foreach (var textureObject in _game.ObjectManager.LoadedTextureObjects) // Draw all objects
        {
            Rectangle source =
                new Rectangle(0, 0, 
                    textureObject.Texture.width,
                    textureObject.Texture.height
                    ); // Source rectangle is the entire texture

            Rectangle rectangle = new Rectangle(
                (int)textureObject.Position.X,
                (int)textureObject.Position.Y,
                (int)textureObject.Dimensions.X,
                (int)textureObject.Dimensions.Y
            ); // Destination rectangle is the object's position and dimensions
            
            Raylib.DrawTexturePro(textureObject.Texture, source, rectangle, new Vector2(0, 0), 0, Color.WHITE); // Draw the object
        }
    }
}
```

## ParticleRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\ParticleRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Game.Physics;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game.Object.Renderer;

public class ParticleRenderer : ConditionalRenderer
{
    private const int MaxParticles = 200; // Max particles to render at one time
    
    private readonly Vector2 _position; // Position of the particle spawner
    private readonly Color _color; // Color of the particle

    private int _currentFrame; // Current frame of the particle
    private readonly int _frameSpeed = 8; // Speed of the particle animation

    private Texture2D _particleMap; // Texture of the particle

    private readonly Particle[] _particles = new Particle[MaxParticles]; // Array of particles

    private struct Particle
    {
        public Rectangle Source;
        public Vector2 Offset;
        public Vector2 OffsetMultiple;
        public float Alpha;
        public float Size;
        public float Rotation;
        public float RotationMultiple;
        public bool Active;
    } // Particle struct

    public ParticleRenderer(Vector2 position, Color color) : base("velocity.particle." + Guid.NewGuid()) // Constructor
    {
        _position = position; // Set the position
        _color = color; // Set the color
        
        LoadTexture(); // Load the texture
        
        for (int i = 0; i < MaxParticles; i++) // Initialize the particles
        {
            Random rnd = new Random(); // Create a random instance

            _particles[i].Source = GenerateNewSourcePosition(); // Generate a new source position
            _particles[i].Offset = new Vector2(0, 1);  // Set the offset
            _particles[i].OffsetMultiple = new Vector2(rnd.Next(0, 7) - 3, -rnd.Next(0, 8) + 4); // Set the offset multiple (for random scattering)
            _particles[i].Alpha = 1.0f; // Set the alpha
            _particles[i].Size = 1.0f; // Set the size
            _particles[i].Rotation = 0.0f; // Set the rotation
            _particles[i].RotationMultiple = rnd.Next(0, 9) - 4; // Set the rotation multiple (for random rotation)
            _particles[i].Active = false; // Set the particle to inactive
        }
    }

    private void LoadTexture() // Load the texture
    {
        _particleMap = Loader.AssetManager.GetTexture("particle.particle_map"); // Get the texture
        
        GenerateNewSourcePosition(); // Generate a new source position
    }

    private Rectangle GenerateNewSourcePosition() // Generate a new source position
    {
        Random rnd = new Random(); // Create a random instance

        return new Rectangle((_particleMap.width / 4) * rnd.Next(0, 4), (_particleMap.height / 4) * rnd.Next(0, 8),
            _particleMap.height / 4, _particleMap.height / 4); // Return the new source position (for random particle asset, stored in a tile grid)
    }

    public override void Draw() // Draw the particle
    {
        _currentFrame++; // Increment the current frame
        if (_currentFrame >= 60 / _frameSpeed) // If the current frame is greater than or equal to the frame speed
        {
            _currentFrame = 0; // Reset the current frame
            for (int i = 0; i < MaxParticles; i++) // Loop through all particles
            {
                if (!_particles[i].Active) // If the particle is not active
                {
                    _particles[i].Offset = Vector2.Zero; // Set the offset to zero
                    _particles[i].Active = true; // Set the particle to active
                    _particles[i].Size = 1.0f; // Set the size to 1
                    _particles[i].Rotation = 0; // Set the rotation to 0

                    i = MaxParticles; // Break the loop
                }
            }
        }
        
        
        for (int i = 0; i < MaxParticles; i++) // Loop through all particles
        {
            if (!_particles[i].Active) continue; // If the particle is not active, continue
            _particles[i].Offset.X += _particles[i].OffsetMultiple.X; // Add the offset multiple to the offset
            _particles[i].Offset.Y += _particles[i].OffsetMultiple.Y; // Add the offset multiple to the offset
            _particles[i].Size -= 0.02f; // Decrease the size by 0.02

            if (_particles[i].Size <= 0.0f) _particles[i].Active = false; // If the size is less than or equal to 0, set the particle to inactive

            _particles[i].Rotation += _particles[i].RotationMultiple; // Add the rotation multiple to the rotation
            
            int width = Convert.ToInt32(40 * _particles[i].Size / 2); // Calculate the width
            int height = Convert.ToInt32(40 * _particles[i].Size / 2); // Calculate the height

            Rectangle dest = new Rectangle((_position.X + _particles[i].Offset.X) - width / 2, 
                _position.Y + _particles[i].Offset.Y - height / 2, width, height); // Calculate the destination rectangle

            Raylib.DrawTexturePro(_particleMap,
                _particles[i].Source,
                dest,
                new Vector2(),
                _particles[i].Rotation,
                new Color(_color.r, _color.g, _color.b, Convert.ToByte(_color.a * _particles[i].Alpha))
            ); // Draw the particle
        }
    }
}
```

## PowerUpRenderer.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\Renderer\PowerUpRenderer.cs`

```csharp
using Raylib_cs;
using Vector2 = System.Numerics.Vector2;

namespace Velocity.Game.Object.Renderer;

public class PowerUpRenderer : ObjectRenderer
{
    private readonly Game _game; // Game instance
    private Texture2D _texture;  // Texture of the object

    private readonly Rectangle[] _source = new Rectangle[3]; // Source rectangles for the texture
 
    private readonly CoinRenderer _coinRenderer; // Coin renderer
    public PowerUpRenderer(Game game) : base(game, "velocity:power_ups")  // Constructor
    {
        _game = game; // Set the game
        _coinRenderer = new CoinRenderer(); // Create the coin renderer

        LoadTexture(); // Load the texture
        RegisterSourceRectangles(); // Register the source rectangles
    }
    
    private void LoadTexture() // Load the texture
    {
        _texture = Loader.AssetManager.GetTexture("item.power_ups"); // Get the texture
    }

    private void RegisterSourceRectangles()
    {
        // generate source rectangles
        _source[0] = new Rectangle(0, _texture.height / 4 * 3, _texture.width / 3, _texture.height / 4);  // First power up texture 
        _source[1] = new Rectangle(_texture.width / 3, _texture.height / 4 * 2, _texture.width / 3, _texture.height / 4); // Second power up texture
        _source[2] = new Rectangle(_texture.width / 3 * 2, _texture.height / 4 * 3, _texture.width / 3, _texture.height / 4); // Third power up texture
    }

    public override void Draw() // Draw the object
    {
        foreach (var item in _game.ObjectManager.LoadedItemObjects) // Draw all objects
        {
            if (item == null) continue; // Don't draw if the object is null
            if (item.Id == ItemIds.Coin) continue; // Don't draw if the object is a coin
            item.ParticleRenderer.Draw(); // Draw the particle renderer

            Raylib.DrawCircle(Convert.ToInt32(item.Position.X + item.Dimensions.X / 2),
                Convert.ToInt32(item.Position.Y + item.Dimensions.Y / 2),
                Convert.ToInt32(item.Dimensions.X / 2) + 8, item.Color); // Draw the circle around the object

            Raylib.DrawTexturePro(_texture, _source[item.Id - 1], new Rectangle(
                Convert.ToInt32(item.Position.X - 4),
                Convert.ToInt32(item.Position.Y - 6),
                Convert.ToInt32(item.Dimensions.X) + 8,
                Convert.ToInt32(item.Dimensions.X) + 8), new Vector2(0, 0), 0, new Color(255, 255, 255, 255)); // Draw the object

            item.InfoCardRenderer.Draw(); // Draw the info card renderer
        }
        
        _coinRenderer.Draw(); // Draw the coin renderer
    }
}
```

## TexturedObject.cs
**Location:** `Velocity-NEA\Velocity\Game\Object\TexturedObject.cs`

```csharp
using Raylib_cs;
using Velocity.Math;

namespace Velocity.Game.Object;

public class TexturedObject : GameObject
{
    public Texture2D Texture; // Texture of the object

    protected TexturedObject(int id, Texture2D texture, Vector2 position, Vector2 dimensions) : base(id, position, dimensions)
    {
        Texture = texture;
    }
}
```

## BasePhysics.cs
**Location:** `Velocity-NEA\Velocity\Game\Physics\BasePhysics.cs`

```csharp
using Velocity.Math;

namespace Velocity.Game.Physics;

public abstract class BasePhysics
{
    public bool IsEnabled = true; // If the physics should be applied
    public bool HasGravity = false;  // If the physics should have gravity
    public bool OnFloor; // If the physics object is on the floor
    
    public Vector2 Position; // Position of the physics object
    public readonly Vector2 Dimensions; // Dimensions of the physics object
    public Vector2 Velocity; // Velocity of the physics object

    protected BasePhysics(Vector2 position, Vector2 dimensions) // Constructor
    {
        Position = position; // Set position
        Velocity = new Vector2(); // Set velocity
        Dimensions = dimensions; // Set dimensions
    }

    public void AddVelocity(double x = 0, double y = 0, bool jump = false) // Add velocity to the physics object
    {
        if (System.Math.Abs(Velocity.X) + System.Math.Abs(x) > PhysicsConst.MaxVelocity && !jump && !OnFloor) // If the x velocity is greater than the max velocity and the physics object is not jumping and the physics object is not on the floor
        {
            double difference = Double.Abs(PhysicsConst.MaxVelocity) - Double.Abs(Velocity.X); // Calculate the difference between the max velocity and the current velocity
            x = Velocity.X > 0 ? difference : -difference; // Set x to the difference if the velocity is greater than 0, otherwise set x to the negative difference

        } else if (System.Math.Abs(System.Math.Abs(Velocity.X) - PhysicsConst.MaxVelocity) == 0 && !jump && !OnFloor) x = 0; // If the velocity is equal to the max velocity and the physics object is not jumping and the physics object is not on the floor, set x to 0
        
        if (System.Math.Abs(Velocity.Y) + System.Math.Abs(y) > PhysicsConst.MaxVelocity && !jump && !OnFloor) // If the y velocity is greater than the max velocity and the physics object is not jumping and the physics object is not on the floor
        {
            double difference = Double.Abs(PhysicsConst.MaxVelocity - Velocity.Y); // Calculate the difference between the max velocity and the current velocity
            y = Velocity.Y > 0 ? difference : -difference; // Set y to the difference if the velocity is greater than 0, otherwise set y to the negative difference

        } else if (System.Math.Abs(System.Math.Abs(Double.Round(Velocity.Y)) - PhysicsConst.MaxVelocity) == 0 && !jump && !OnFloor) y = 0; // If the velocity is equal to the max velocity and the physics object is not jumping and the physics object is not on the floor, set y to 0
        
        if (x != 0) Velocity.X += x; // Add x to the velocity if x is not 0
        if (y != 0) Velocity.Y -= y; // Add y to the velocity if y is not 0
    }

    public void SetEnabled(bool value = true) // Set if the physics should be applied
    {
        IsEnabled = value; // Set if the physics should be applied
    }

    // Calculate the base physics
    public virtual void Tick() {
        if (!IsEnabled) return; // If the physics should not be applied, return
         
        if (HasGravity && !OnFloor) Velocity.Y += PhysicsConst.Gravity; // If the physics object has gravity and is not on the floor, add gravity to the y velocity

        double footY = Position.Y + Dimensions.Y / 2; // Calculate the foot y position

        if (footY >= Game.FloorHeight - PhysicsConst.MaxVelocity) // If the foot y position is greater than or equal to the floor height minus the max velocity
        {
            if (Convert.ToInt32(footY) == Game.FloorHeight) // If the foot y position is equal to the floor height
            {
                if (Velocity.Y >= 0) // If the y velocity is greater than or equal to 0
                {
                    Velocity.Y = 0; // Set the y velocity to 0
                }

                OnFloor = true; // Set on floor to true

            }
            else if (footY + Velocity.Y >= Game.FloorHeight && footY <= Game.FloorHeight) // If the foot y position plus the y velocity is greater than or equal to the floor height and the foot y position is less than or equal to the floor height
            {
                Velocity.Y = 0; // Set the y velocity to 0
            }
            else OnFloor = false; // Set on floor to false

            if (Position.Y >= Game.FloorHeight + 200) // If the y position is greater than or equal to the floor height plus 200 (respawn the player if they somehow end up below the floor)
            {
                Position.Y = Game.FloorHeight - 100; // Set the y position to the floor height minus 100
                return; // Return
            }
        }

        if (OnFloor) // If the player is on the floor
        {
            double frictionLossX = (Velocity.X / PhysicsConst.MaxVelocity) * PhysicsConst.Friction; // Calculate the friction loss for the x velocity (friction constant times the players current velocity over max velocity)
            Velocity.X -= frictionLossX; // Subtract the friction loss from the x velocity
        }
        
        double airResistanceLossX = (Velocity.X / PhysicsConst.MaxVelocity) * PhysicsConst.AirResistance; // Calculate the air resistance loss for the x velocity (air resistance constant times the players current velocity over max velocity)
        Velocity.X -= airResistanceLossX; // Subtract the air resistance loss from the x velocity
        
        double airResistanceLossY = (Velocity.Y / PhysicsConst.MaxVelocity) * PhysicsConst.AirResistance; // Calculate the air resistance loss for the y velocity (air resistance constant times the players current velocity over max velocity)
        Velocity.Y -= airResistanceLossY; // Subtract the air resistance loss from the y velocity
        
        
        if (Velocity.X is >= -0.05 and < 0 or <= 0.05 and > 0) Velocity.X = 0.0; // If the x velocity is greater than or equal to -0.05 and less than 0 or less than or equal to 0.05 and greater than 0, set the x velocity to 0 (return to 0 if reaches below 0.05 velocity, loss of accuracy when subtracting numbers from doubles)
        if (Velocity.Y is >= -0.05 and < 0 or <= 0.05 and > 0) Velocity.Y = 0.0; // If the y velocity is greater than or equal to -0.05 and less than 0 or less than or equal to 0.05 and greater than 0, set the y velocity to 0 (return to 0 if reaches below 0.05 velocity, loss of accuracy when subtracting numbers from doubles)

        
        if (System.Math.Abs(Velocity.X) is > 0 and > PhysicsConst.MaxVelocity) // If the absolute value of the x velocity is greater than 0 and greater than the max velocity
            Velocity.X = Velocity.X > 0 ? PhysicsConst.MaxVelocity : -PhysicsConst.MaxVelocity;  // Set the x velocity to the max velocity if the x velocity is greater than 0, otherwise set the x velocity to the negative max velocity (velocity soft-limits)
        
        if (System.Math.Abs(Velocity.Y) is > 0 and > PhysicsConst.MaxVelocity) // If the absolute value of the y velocity is greater than 0 and greater than the max velocity
            Velocity.Y = Velocity.Y > 0 ? -PhysicsConst.MaxVelocity : PhysicsConst.MaxVelocity; // Set the y velocity to the negative max velocity if the y velocity is greater than 0, otherwise set the y velocity to the max velocity (velocity soft-limits)
    }

    protected void UpdatePosition() // Update the position of the physics object
    {
        Position.Change(Double.Round(Velocity.X), Double.Round(Velocity.Y)); // Change the position by the velocity
    }
}
```

## Collidable.cs
**Location:** `Velocity-NEA\Velocity\Game\Physics\Collidable.cs`

```csharp
using Velocity.Game.Object;
using Velocity.Math;

namespace Velocity.Game.Physics;

public class Collidable : BasePhysics
{
    public bool HasCollision;

    protected Collidable(Vector2 position, Vector2 dimensions, bool hasCollision = true, bool hasGravity = true) : base(position, dimensions)
    {
        HasCollision = hasCollision;
        HasGravity = hasGravity;
    }

    public override void Tick()
    {
        List<GameObject> nearObjects = new List<GameObject>(); // List of objects near the player

        foreach (var gameObject in Loader.Game.ObjectManager.LoadedTextureObjects) // Loop through all objects
        {
            if (gameObject.CheckRange(this)) // If the object is in range of the player (players position + max velocity * 1.5, will always catch objects, if moving at max velocity sometimes it would miss objects)
            {
                if (gameObject.Collidable) nearObjects.Add(gameObject); // Add the object to the list of objects near the player
            }
        }
        
        // Find the position of the bounds of the player
        double boundDown = Position.Y + Dimensions.Y / 2; // Calculate the bottom bound
        double boundUp = Position.Y - Dimensions.Y / 2; // Calculate the top bound
        double boundLeft = Position.X - Dimensions.X / 2; // Calculate the left bound
        double boundRight = Position.X + Dimensions.X / 2; // Calculate the right bound

        // Held constant for the duration of the loop 
        bool isCollidingX = false; // Is the player colliding on the x axis?
        bool isCollidingY = false; // Is the player colliding on the y axis?

        foreach (var nearObject in nearObjects) // Loop through all objects near the player
        {
            if (((
                     boundDown + Velocity.Y >= nearObject.Position.Y - 1 && boundDown <= nearObject.Position.Y - 1 ||
                     boundUp + Velocity.Y <= nearObject.Position.Y + nearObject.Dimensions.Y + 1 && boundUp >= nearObject.Position.Y + nearObject.Dimensions.Y + 1) && 
                 nearObject.InXBounds(this, (int)Double.Abs(Velocity.X) - 1))) // If player will be inside or colliding with an object on y axis for the current frame
            {
                if (Position.Y < nearObject.Position.Y) Velocity.Y = nearObject.Position.Y - boundDown - 1; // If the player is above the object, set the y velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                else Velocity.Y = nearObject.Position.Y + nearObject.Dimensions.Y - boundUp + 1; // If the player is below the object, set the y velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
            }
            else if (((System.Math.Abs(Convert.ToInt32(boundDown) - nearObject.Position.Y) == 0 ||
                       System.Math.Abs(Convert.ToInt32(boundUp) - (nearObject.Position.Y + nearObject.Dimensions.Y)) == 0)
                      && nearObject.InXBounds(this, -1)) || isCollidingY) // If the player IS colliding with an object for the current frame
            {
                if (Velocity.Y >= 0) // If the y velocity is greater than or equal to 0 (moving down, would prevent jumping if it was just greater than 0)
                {
                    Velocity.Y = 0; // Set the y velocity to 0
                    isCollidingY = true; // Set isCollidingY to true
                } 
                
                if (Position.Y < nearObject.Position.Y) OnFloor = true; // If the player is above the object, set OnFloor to true
            } else OnFloor = false; // If the player is not colliding with an object for the current frame, set OnFloor to false


            if ((
                    boundRight + Velocity.X >= nearObject.Position.X - 1 && boundRight <= nearObject.Position.X - 1 ||
                    boundLeft + Velocity.X <= nearObject.Position.X + nearObject.Dimensions.X - 1 && boundLeft >= nearObject.Position.X + nearObject.Dimensions.X - 1) && 
                nearObject.InYBounds(this, (int)Double.Abs(Velocity.Y))) { // If player will be inside or colliding with an object on x axis for the current frame
                if (Position.X < nearObject.Position.X) Velocity.X = nearObject.Position.X - boundRight; // If the player is to the left of the object, set the x velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                else Velocity.X = nearObject.Position.X + nearObject.Dimensions.X - boundLeft;  // If the player is to the right of the object, set the x velocity to the distance between the player and the object so they will move that amount for the current frame (prevent overshooting)
                isCollidingX = true; // Set isCollidingX to true
            } else if (
                ((System.Math.Abs(Convert.ToInt32(boundRight) - nearObject.Position.X) == 0 || 
                  System.Math.Abs(Convert.ToInt32(boundLeft) - nearObject.Position.X + nearObject.Position.X) == 0) &&
                 nearObject.InYBounds(this)) || isCollidingX) // If the player IS colliding with an object on y axis for the current frame
            {
                if (!(Velocity.X >= 0)) continue; // If the x velocity is less than 0 (moving left), continue (would prevent moving left if it was just less than 0, for some reason, it aint broken dont fix it)
                Velocity.X = 0; // Set the x velocity to 0
                isCollidingX = true; // Set isCollidingX to true
            }
        }

        base.Tick(); // Call the base tick (apply physics, gravity, etc.)
        UpdatePosition(); // Update the position
    }
}
```

## PhysicsConst.cs
**Location:** `Velocity-NEA\Velocity\Game\Physics\PhysicsConst.cs`

```csharp
namespace Velocity.Game.Physics;

public abstract class PhysicsConst
{
    public const double Gravity = 1;
    public const int MaxVelocity = 80;
    public const int MaxAcceleration = 14;
    public const int Acceleration = 2;
    public const double Friction = 8;
    public const double AirResistance = 0.5;
    public const int Jump = 26;
}
```

## PhysicsManager.cs
**Location:** `Velocity-NEA\Velocity\Game\Physics\PhysicsManager.cs`

```csharp
namespace Velocity.Game.Physics;

public class PhysicsManager
{
    private List<BasePhysics> _physicsObjects = new();

    public void RegisterObject (BasePhysics obj) // Register an object to be ticked
    {
        _physicsObjects.Add(obj);
    }

    // TODO: Unregister object (we only really need this for the player, so we dont need this yet)
    
    public void Stop() // Stop the physics manager
    {
        _physicsObjects = new();
    }
    
    public void Tick() // Tick the physics manager
    {
        foreach (var obj in _physicsObjects) obj.Tick(); // Iterate through all physics objects and tick them
    }
}
```

## RenderManager.cs
**Location:** `Velocity-NEA\Velocity\Game\RenderManager.cs`

```csharp
using Velocity.Ui.Overlay.Render;
using Velocity.Window.Render.Renderers;

namespace Velocity.Game;

public class RenderManager
{
    public RenderManager()
    {
        RegisterDefault();
    }

    /**
     * Register default renderers
     */
    private void RegisterDefault() 
    {
        if (GameConst.Debug) Loader.WindowManager.Renderer.RegisterUiRenderer(new DebugRenderer());
    }
    
    /**
     * Render the player object
     */
    public void RenderPlayer(Player.Player player)
    {
        Loader.WindowManager.Renderer.RegisterElementRenderer(player.Renderer);
    }

    /*
     * Unused: Unrender the player object
     */
    public void UnrenderPlayer(Player.Player player)
    {
        Loader.WindowManager.Renderer.UnregisterRenderer(player.Renderer.Identifier);
    }

    /**
     * Render a static ui element
     */
    public void RenderUiElement(UiRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterUiRenderer(renderer);
    }

    /**
     * Render a game object renderer
     */
    public void RenderGameElement(ElementRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterElementRenderer(renderer);
    }

    /**
     * Render a dynamic background object renderer
     */
    public void RenderBackgroundElement(BackgroundRenderer renderer)
    {
        Loader.WindowManager.Renderer.RegisterBackgroundRenderer(renderer);
    }

    /**
     * Unrender any of these object's renderers
     */
    public void UnRenderGameElement(ElementRenderer renderer)
    {
        Loader.WindowManager.Renderer.UnregisterRenderer(renderer.Identifier);
    }
}


```

## StatisticManager.cs
**Location:** `Velocity-NEA\Velocity\Game\Statistics\StatisticManager.cs`

```csharp
using Velocity.Utils;

namespace Velocity.Game.Statistics;

public class StatisticManager
{
    public static Dictionary<int, int> LevelBestTimes = new();
    public static readonly IniFile TimesFile = new(Directory.GetCurrentDirectory() + "/level/times.ini");

    public static void Load()
    {
        foreach (var level
                 in
                 Loader.Game.LevelManager.GetLevels())
        {
            int time = Convert.ToInt32(TimesFile.GetSetting("times", level.Id.ToString()));
            LevelBestTimes.Add(level.Id, time);
        }
    }

    public static void Save()
    {
        foreach (var level in Loader.Game.LevelManager.GetLevels())
        {
            TimesFile.AddSetting("times", level.Id.ToString(), LevelBestTimes[level.Id].ToString());
        }
        
        TimesFile.SaveSettings();
    }

    public static  int GetLevelBestTime(int levelId)
    {
        LevelBestTimes.TryGetValue(levelId, out int time);
        
        return time;
    }

    public static void SetLevelBestTime(int levelId, int time)
    {
        LevelBestTimes[levelId] = time;
    }

    public static string SteraliseTime(int time)
    {
        TimeSpan ts = new TimeSpan(time);
        if (time == 0) return "-";
        return $"{ts.Minutes:00}:{ts.Seconds:00}.{ts.Milliseconds / 10:00}";
    }
}
```

## GameConst.cs
**Location:** `Velocity-NEA\Velocity\GameConst.cs`

```csharp
namespace Velocity;

public abstract class GameConst
{
    public const string Name = "Velocity";
    public const string Version = "1.0.0";
    public const string Author = "Reuben Yates";
    public const bool Debug = true;
}
```

## ControlManager.cs
**Location:** `Velocity-NEA\Velocity\Input\ControlManager.cs`

```csharp
using Raylib_cs;
using Velocity.Utils;

namespace Velocity.Input;

public class ControlManager
{
    // List of the registered controllers
    private List<IControllable> _controllers = new();

    // Register a controller
    public void RegisterController(IControllable controller)
    {
        _controllers.Add(controller);
    }

    
    // Unregister a controller
    public void UnRegisterController(IControllable controller)
    {
        _controllers.Remove(controller);
    }

    // Tick the controllers
    public void Tick()
    {
        foreach (var controller in _controllers.ToList())
        {
            if (Raylib.IsKeyPressed(Loader.Settings.Keybind.Interact)) controller.OnInteract();
            if (Raylib.IsKeyDown(Loader.Settings.Keybind.Left)) controller.OnLeft(); 
            if (Raylib.IsKeyDown(Loader.Settings.Keybind.Right)) controller.OnRight();
            if (Raylib.IsKeyPressed(Loader.Settings.Keybind.Jump)) controller.OnJump();
            if (Raylib.IsKeyDown(Loader.Settings.Keybind.Down)) controller.OnDown();
            if (Raylib.IsKeyDown(Loader.Settings.Keybind.ZoomIn)) controller.OnZoomIn();
            if (Raylib.IsKeyDown(Loader.Settings.Keybind.ZoomOut)) controller.OnZoomOut();
        }
    }
}


```

## Controlable.cs
**Location:** `Velocity-NEA\Velocity\Input\Controlable.cs`

```csharp
namespace Velocity.Input;

public interface IControllable
{
    // Interact with the object
    public void OnInteract()
    {}
    
    // Move left
    public void OnLeft ()
    {}
    
    // Move right
    public void OnRight ()
    {}

    // Jump
    public void OnJump ()
    {}
    
    // Move down: TODO: use this for crouching
    public void OnDown ()
    {}

    // Zoom the camera in
    public void OnZoomIn()
    { }
     
    // Zoom the camera out
    public void OnZoomOut()
    {}
    
}
```

## Keybind.cs
**Location:** `Velocity-NEA\Velocity\Input\Keybind.cs`

```csharp
using Raylib_cs;

namespace Velocity.Input;

public class Keybind : IEquatable<Keybind>
{
    // Default keybindings
    public KeyboardKey Interact = KeyboardKey.KEY_E;
    public KeyboardKey Left = KeyboardKey.KEY_A;
    public KeyboardKey Right = KeyboardKey.KEY_D;
    public KeyboardKey Jump = KeyboardKey.KEY_SPACE;
    public KeyboardKey Down = KeyboardKey.KEY_S;
    public KeyboardKey ZoomIn = KeyboardKey.KEY_EQUAL;
    public KeyboardKey ZoomOut = KeyboardKey.KEY_MINUS;

    // Convert a keybind to its action id
    public enum ActionId
    {
        Interact = 0,
        Left = 1,
        Right = 2,
        Jump = 3,
        Down = 4,
        ZoomIn = 5,
        ZoomOut = 6
    }

    // Convert an action id to its string value for display
    public static string IdToString(ActionId id)
    {
        return id switch
        {
            ActionId.Interact => ActionNames[0],
            ActionId.Left => ActionNames[1],
            ActionId.Right => ActionNames[2],
            ActionId.Jump => ActionNames[3],
            ActionId.Down => ActionNames[4],
            ActionId.ZoomIn => ActionNames[5],
            ActionId.ZoomOut => ActionNames[6],
            _ => "-"
        };
    }
    
    // Check to see if a key is taken
    public bool IsKeyTaken(KeyboardKey key)
    {
        return Interact == key || Left == key || Right == key || Jump == key || Down == key || ZoomIn == key || ZoomOut == key;
    }

    // Internal list of action names
    private static readonly string[] ActionNames = 
    {
        "Interact",
        "Left",
        "Right",
        "Jump",
        "Down",
        "ZoomIn",
        "ZoomOut"
    };
    
    public bool Equals(Keybind? other)
    {
        if (ReferenceEquals(null, other)) return false;
        return Interact == other.Interact && Left == other.Left && Right == other.Right && Jump == other.Jump && Down == other.Down && ZoomIn == other.ZoomIn && ZoomOut == other.ZoomOut;
    }

    public override bool Equals(object? obj)
    {
        if (ReferenceEquals(null, obj)) return false;
        // if (ReferenceEquals(this, obj)) return true;
        if (obj.GetType() != this.GetType()) return false;
        return Equals((Keybind)obj);
    }

    public override int GetHashCode()
    {
        return HashCode.Combine((int)Interact, (int)Left, (int)Right, (int)Jump, (int)Down, (int)ZoomIn, (int)ZoomOut);
    }
}
```

## Level.cs
**Location:** `Velocity-NEA\Velocity\Level\Level.cs`

```csharp
using Newtonsoft.Json;
using Raylib_cs;
using Velocity.Game.Object;
using Velocity.Game.Object.FloatingText;
using Velocity.Math;
using Velocity.Utils;

namespace Velocity.Level;

public class FloatingTextData
{
    public Vector2 Position { get; } // Position of the text
    public string Text { get; } // Text to display
    
    public FloatingTextData(string text, Vector2 position) // Constructor
    {
        Text = text; // Set text
        Position = position; // Set position
    }
}

public class Level // Level class
{
    public const int LevelWidth = 60; // Width of the level
    public const int LevelHeight = 6; // Height of the level
    
    public readonly string Name;    // Name of the level
    public readonly int Id;         // Id of the level
    private readonly string _data;  // Raw level data

    private string[] _levelData = Array.Empty<string>(); // Level data
    private string[] _itemMap = Array.Empty<string>();   // Item map
    public Color BackgroundColor;                        // Background color
    public int Background = 1;                           // Background id
    public int Difficulty;                               // Difficulty of the level
    
    public readonly List<FloatingTextData> FloatingTexts = new (); // List of floating texts

    public Level(int id, string name, string data) // Constructor
    {
        Id = id; // Set id
        Name = name; // Set name
        _data = data; // Set data

        LoadData(); // Load data
    } 
    
    // Load json _data into data structure 
    private void LoadData()
    {
        dynamic ?levelData = JsonConvert.DeserializeObject(_data); // Deserialize json _data

        if (levelData == null) return; // If level data is null, skip

        _levelData = levelData.objectMap.ToObject<string[]>(); // Get object map
        
        _itemMap = levelData.itemMap.ToObject<string[]>(); // Get item map

        Background = levelData.flags.background ?? 1; // Set background id
        BackgroundColor = levelData.flags.backgroundColor != null ? ColorFormatter.from_string((string)levelData.flags.backgroundColor) :  new Color(0, 200, 255, 255); // Set background color (and handle default)
        Difficulty = levelData.flags.difficulty ?? 1; // Set difficulty

        foreach (var data in levelData.floatingTexts) // Iterate through floating texts
        {
            FloatingTextData floatingTextData = new FloatingTextData((string)data.text, new Vector2((double)data.position[0], Game.Game.FloorHeight - (double)data.position[1])); // Create floating text data
            
            FloatingTexts.Add(floatingTextData); // Add floating text data to list
        }
    }

    public void Load() // Load level
    { 
        LoadObjects(); // Load objects
        LoadItems();   // Load items
    }

    public string[] GetObjectMap() // Get object map (for level screen preview)
    {
        return _levelData; // Return object map
    }

    private void LoadObjects() // Load objects
    {
        int y = 200 * LevelHeight; // Set y to the top of the level
        foreach (var row in _levelData) // Iterate through each row in the level
        {
            int x = -200 * (LevelWidth / 2); // Set x to the left of the level
            foreach (var id in row) // Iterate through each colomn in the row
            {
                if (Convert.ToInt32(new string(id, 1)) == ObjectIds.Barrel) Loader.Game.ObjectManager.AddObject(Convert.ToInt32(new string(id,1)), new Vector2(x + 25, y)); // If the id is a barrel, add it with a different offset
                else if (!id.Equals('0')) Loader.Game.ObjectManager.AddObject(Convert.ToInt32(new string(id,1)), new Vector2(x, y)); // Otherwise add it normally
                x += 200; // Increment x
            }
            y -= 200; // Decrement y (load level top to bottom)
        }
    }

    private void LoadItems() // Load items
    {
        int y = (200 * LevelHeight) + 200; // Set y to the top of the level
        foreach (var row in _itemMap) // Iterate through each row in the level
        {
            int x = -200 * (LevelWidth / 2); // Set x to the left of the level
            foreach (var id in row) // Iterate through each colomn in the row
            {
                if (!id.Equals('0')) Loader.Game.ObjectManager.AddItemObject(Convert.ToInt32(new string(id,1)), new Vector2(x + (id.Equals('4') ? 100 : 75), y - (id.Equals('4') ? 100 : 75))); // Add the item (with correct offsets for item type)
                x += 200; // Increment x
            }
            y -= 200; // Decrement y (load level top to bottom)
        }
    }
}

```

## LevelManager.cs
**Location:** `Velocity-NEA\Velocity\Level\LevelManager.cs`

```csharp
using Newtonsoft.Json.Linq;
using Newtonsoft.Json.Schema;
using Velocity.Exception;
using Velocity.Utils;

namespace Velocity.Level;

public class LevelManager
{
    private readonly Dictionary<int, Level?> _levels = new(); // List of all levels

    public LevelManager() // Constructor
    {
        LoadLevels(); // Load all levels
    }

    // Read all level data files
    private void LoadLevels()
    {
        string levelDbRaw = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/levels.json".Replace("/", OsVersion.GetDirSeperator())); // Read level database file
        JObject levelDb = JObject.Parse(levelDbRaw); // Parse level database file
        
        // Iterate through every entry in the level database file
        foreach (var i in levelDb) 
        {
            string name = i.Key; // Get level name
            string? file = i.Value?.ToString(); // Get level file name

            if (file == null) continue; // If file is null, skip
            
            RegisterLevel(name, file); // Otherwise register the level
        }
    }

    // Validates and registers to database
    private void RegisterLevel(string name, string file) 
    {
        string rawSchema = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/levelSchema.json".Replace("/", OsVersion.GetDirSeperator())); // Read level schema file
        string levelRaw = File.ReadAllText(Directory.GetCurrentDirectory() + "/level/".Replace("/", OsVersion.GetDirSeperator()) + file); // Read level file
        JSchema schema = JSchema.Parse(rawSchema); // Parse the data to the schema for validation

        JObject levelObj = JObject.Parse(levelRaw); // Parse the level data to a JObject so we can access its properties
 
        if (!levelObj.IsValid(schema)) return; // If the level data is not valid, skip

        _levels.Add(_levels.Values.Count, new Level(_levels.Values.Count, name, levelRaw)); // Otherwise add the level to the database
    }
    
    public void SelectLevel(int id) // Select a level to load
    {
        _levels.TryGetValue(id, out Level? level); // Get the level from the database

        if (level == null) // If the level is null, throw a warning
        {
            Console.Error.WriteLine("Failed to load level to canvas: " + id);
            return;
        }
        
        level.Load(); // Load the level

        Loader.Game.Level = level; // Set the current level to the loaded level

        Loader.WindowManager.BackgroundColor = level.BackgroundColor; // Set the background color to the level's background color
    }

    public int LoadNextLevel() // Load the next level
    {
        if (Loader.Game.Level == null) return -1;  // If the current level is null, return -1
        int id = Loader.Game.Level.Id + 1; // Get the next level id

        if (LevelExists(id)) // If the next level exists, load it
        {
            SelectLevel(id); // Load the level
            return id + 1; // Return the next level id
        }

        return -1; // Otherwise return -1
    }

    private bool LevelExists (int id) // Check if a level exists
    {
        return _levels.ContainsKey(id); // Return if the level exists
    }

    public Dictionary<int, Level?>.ValueCollection GetLevels() // Get all levels
    {
        return _levels.Values; // Return all levels
    }

    public Level GetLevelById(int id) // Get a level by its id
    {
        _levels.TryGetValue(id, out Level? level); // Get the level from the database

        if (level == null) throw new VelocityException("Failed to get level by id: " + id);     // If the level is null, throw an error

        return level;   // Otherwise return the level
    }
}
```

## Loader.cs
**Location:** `Velocity-NEA\Velocity\Loader.cs`

```csharp
using Velocity.Asset;
using Velocity.Game.Statistics;
using Velocity.Sound;
using Velocity.Input;
using Velocity.Ui.Screens;
using Velocity.Window;

namespace Velocity
{
    public class Loader
    {
        // Entry point
        public static void Main(string[] args)
        {
            // Load settings
            Settings = new Settings();
            Settings.Load();
            
            // Initialisation
            
            ControlManager = new ControlManager();
            WindowManager = new WindowManager();
            WindowManager.CreateWindow();
            
            AssetManager = new AssetManager(); // For use later
            AudioManager = new AudioManager(); // For use later
            
            Game = new Game.Game(); // For later use
            Game.MenuManager.RegisterMenus(); // Menus for later use
            Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // Menus for later use
            
            StatisticManager.Load();
            ApplySettings();
            
            // Begin game logic
            WindowManager.DrawLoop();
            
            // After window has closed
            StatisticManager.Save();
            Settings.Save();
        }
        
        // Apply the user selected settings
        private static void ApplySettings()
        {
            WindowManager.ApplySettingsChange();
            
            AudioManager.UpdateVolume();
            
            AudioManager.UpdateGameVolume();
            AudioManager.UpdatePlayerVolume();
            AudioManager.UpdateUiVolume();
        }

        // To stop the game and close the window
        public static void Close()
        {
            Game.Closed = true;
            Settings.Save();
            StatisticManager.Save();
        }
        
        
        public static WindowManager WindowManager
        {
            get;
            set;
        }

        public static Game.Game Game // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
        
        public static Settings Settings // Not implemented yet (Here for later use)
        {
            get;
            set;
        }

        public static ControlManager ControlManager 
        {
            get;
            set;
        }

        public static AssetManager AssetManager // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
        
        public static AudioManager AudioManager // Not implemented yet (Here for later use)
        {
            get;
            set;
        }
    }
}
```

## Vector2.cs
**Location:** `Velocity-NEA\Velocity\Math\Vector2.cs`

```csharp
namespace Velocity.Math;

public class Vector2
{
    public double X;
    public double Y;

    public Vector2(double x = 0, double y = 0)
    {
        X = x;
        Y = y;
    }

    public static Vector2 Zero()
    {
        return new Vector2();
    }

    public double GetX()
    {
        return X;
    }

    public double GetY()
    {
        return Y;
    }

    public Vector2 Add(int x, int y)
    {
        return new Vector2(X + x, Y + y);
    }

    public Vector2 Subtract(int x, int y)
    {
        return new Vector2(X - x, Y - x);
    }

    public void Change(double x, double y)
    {
        X += x;
        Y += y;
    }

    public System.Numerics.Vector2 ToInternal()
    {
        return new System.Numerics.Vector2((float)X, (float)Y);
    }

    public static Vector2 ToCustom(System.Numerics.Vector2 internalVector)
    {
        return new Vector2(internalVector.X, internalVector.Y);
    }
}
```

## Player.cs
**Location:** `Velocity-NEA\Velocity\Player\Player.cs`

```csharp
using Velocity.Game.Physics;
using Velocity.Math;


namespace Velocity.Player;

public class Player : Collidable
{
    public readonly PlayerRenderer? Renderer; // Renderer for player

    public int Appearance = 2; // Appearance of player

    public PlayerState State; // State of player (Unused)
 
    public double Health = 3; // Health of player

    private int _soundStep; // Step for sound

    public Player(Vector2 spawn) : base(spawn, new Vector2(70, 175)) // Constructor
    {
        Renderer = new PlayerRenderer(this); // Create renderer
        var controller = new PlayerController(this); // Create controller

        State = PlayerState.Alive; // Set state to alive
        
        Loader.ControlManager.RegisterController(controller); // Register controller
    }

    public void Damage() // Damage player
    {
        Health -= 1; // Decrement health
        if (Health <= 0) State = PlayerState.Dead; // Set state to dead if health is 0
    }

    public void HandleMoveSound() // Handle move sound
    {
        _soundStep++; // Increment sound step
        if (_soundStep >= 18) _soundStep = 0; // Reset sound step if it is greater than 18
        if (_soundStep % 3 == 0 && OnFloor && Velocity.X != 0) Loader.AudioManager.PlaySound("player.walk"); // Play sound if sound step is divisible by 3 and player is on floor and player is moving
    }

    public void Reset() // Reset player
    {
        State = PlayerState.Alive; // Set state to alive
        Health = 3; // Set health to 3 
        Position = new Vector2(-200 * (Level.Level.LevelWidth / 2 + 1), Game.Game.FloorHeight - 300); // Set position to spawn
        Velocity = new Vector2(); // Set velocity to 0
        OnFloor = false; // Set on floor to false
    }
}

public enum PlayerState // Player state
{
    Alive = 1, // Alive = 1
    Dead = 0 // Dead = 0
}
```

## PlayerController.cs
**Location:** `Velocity-NEA\Velocity\Player\PlayerController.cs`

```csharp
using System.Diagnostics.Metrics;
using Velocity.Game.Physics;
using Velocity.Input;
using Velocity.Math;

namespace Velocity.Player;

public class PlayerController : IControllable
{
    private readonly Player _player; // Player
    private bool _canJump = true; // If the player can jump

    public PlayerController(Player parent) // Constructor
    {
        _player = parent; // Set player
    }
    
    public void OnJump() // Jump
    {
        if (!_canJump && _player.OnFloor) _canJump = true; // If the player is on the floor and cannot jump, set can jump to true
        if (!_canJump) return; // If the player cannot jump, return
        
        _player.AddVelocity(0, PhysicsConst.Jump, true); // Add jump velocity to the player
        Loader.AudioManager.PlaySound("player.jump"); // Play jump sound
        _canJump = false; // Set can jump to false
    }

    public void OnLeft() // Left mvoement
    {
        if (_player.Velocity.X > (-PhysicsConst.MaxAcceleration - (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6.66)) / (_player.OnFloor ? 1 : 1.5)) _player.AddVelocity((-PhysicsConst.Acceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (-PhysicsConst.MaxAcceleration / 6)) / (_player.OnFloor ? 1 : 1.5)); // Add left velocity to the player if the player is on the floor and the player's x velocity is less than the max velocity or the player is not on the floor with multipliers if the player has the speed powerup
    }

    public void OnRight() // Right movement
    {
        if (_player.Velocity.X < (PhysicsConst.MaxAcceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6.66)) / (_player.OnFloor ? 1 : 1.5)) _player.AddVelocity((PhysicsConst.Acceleration + (Loader.Game.PowerUps[2] > 0 ? 1 : 0) * (PhysicsConst.MaxAcceleration / 6))  / (_player.OnFloor ? 1 : 1.5));  // Add right velocity to the player if the player is on the floor and the player's x velocity is less than the max velocity or the player is not on the floor with multipliers if the player has the speed powerup
    }

    public void OnDown() // TODO: Use for crouching
    {
        if (_player is { HasGravity: false, Velocity.Y: > -PhysicsConst.MaxAcceleration }) _player.AddVelocity(0, -PhysicsConst.Acceleration); // Add down velocity to the player if the player has gravity and the player's y velocity is less than the max velocity
    }
}
```

## PlayerRenderer.cs
**Location:** `Velocity-NEA\Velocity\Player\PlayerRenderer.cs`

```csharp
using System.Numerics;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Game.Physics;

namespace Velocity.Player;

public class PlayerRenderer : ElementRenderer
{
    private const int MaxSpeed = 12; // The maximum speed of the animation
    private const int MinSpeed = 5; // The minimum speed of the animation

    private int _currentFrame; // The current frame of the animation
    private int _frameCount; // The current frame count
    private int _frameSpeed = 8; // The speed of the animation

    private readonly Dictionary<int, Dictionary<string, int>?> _tileCount = new()
    {
        { 
            1, new Dictionary<string, int> {
                { "idle", 8 },
                { "walk", 8 },
                { "run", 8 },
                { "jump", 8 }
                
            }
        },
        {
            2, new Dictionary<string, int> {
                { "idle", 6 },
                { "walk", 8 },
                { "run", 8 },
                { "jump", 9 }
            }
        },
        {
            3, new Dictionary<string, int> {
                { "idle", 6 },
                { "walk", 7 },
                { "run", 8 },
                { "jump", 11 }
            }
        }
        
    }; // The tile count of each animation

    private bool _jump; // Whether the player is jumping or not
    
    private Texture2D _walkAsset; // The walk asset
    private Texture2D _idleAsset; // The idle asset
    private Texture2D _runAsset; // The run asset
    private Texture2D _jumpAsset; // The jump asset

    private Rectangle _frameRect; // The frame rectangle

    public PlayerRenderer(Player parentPlayer) : base("velocity:player", false) // The constructor
    { 
        Player = parentPlayer; // Set the player
    }

    public void LoadTextures()  // Load the textures
    {
        _idleAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "idle"); // Get the idle asset
        _walkAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "walk"); // Get the walk asset
        _runAsset =  Loader.AssetManager.GetPlayerTexture(Player.Appearance, "run");  // Get the run asset
        _jumpAsset = Loader.AssetManager.GetPlayerTexture(Player.Appearance, "jump"); // Get the jump asset
    }

    public override void Draw() // Draw the player
    {
        Texture2D texture; // The texture to draw

        if (_jump) // If the player is jumping
        {
            texture = _jumpAsset; // Set the texture to the jump asset
            _currentFrame = 4 + Convert.ToInt32(4 * (Player.Velocity.Y / 30)); // Set the current frame, Iterate through the jump animation based on the velocity

            if (Player.OnFloor) _jump = false; // If the player is on the floor, stop jumping
        }
        else // If the player is not jumping
        {
            if (Convert.ToInt32(Player.Velocity.X) == 0) texture = _idleAsset; // If the player is not moving, set the texture to the idle asset
            else if (Convert.ToInt32(Double.Abs(Player.Velocity.X)) <= 10) texture = _walkAsset; // If the player is moving slowly, set the texture to the walk asset
            else texture = _runAsset; // If the player is moving fast, set the texture to the run asset
        }
        
        

        _frameCount++; // Increment the frame count

        if (_frameCount >= 60 / _frameSpeed && Loader.Game.IsRunning) // If the frame count is greater than or equal to the frame speed and the game is running
        {
            _frameCount = 0; // Reset the frame count
            _currentFrame++; // Increment the current frame
            if (_currentFrame >= GetFrameCount(texture)) _currentFrame = 0; // If the current frame is greater than or equal to the frame count, reset the current frame
            
            _frameRect = new Rectangle(_currentFrame * texture.width / GetFrameCount(texture), 0, texture.width / GetFrameCount(texture), texture.height); // Set the frame rectangle to the current frame
            
            Player.HandleMoveSound(); // Handle the move sound TODO: Move this to a better place
        }

        if (!Player.OnFloor) _jump = true; // If the player is not on the floor, set jumping to true
        
        if (!_jump) _frameSpeed = MinSpeed + Convert.ToInt32((MaxSpeed - MinSpeed) * Double.Abs(Player.Velocity.X) / PhysicsConst.MaxAcceleration); // If the player is not jumping, set the frame speed to the minimum speed plus the maximum speed minus the minimum speed multiplied by the absolute value of the player's velocity divided by the maximum acceleration (frame speed is faster when the player is moving faster)
        
        int x = Convert.ToInt32(Player.Position.X) - (Convert.ToInt32(Player.Dimensions.X) / 2); // Get the x position of the player
        int y = Convert.ToInt32(Player.Position.Y) - (Convert.ToInt32(Player.Dimensions.Y) / 2); // Get the y position of the player
        

        Rectangle final = new Rectangle(_frameRect.x, _frameRect.y, Player.Velocity.X < 0 ? -_frameRect.width : _frameRect.width, _frameRect.height); // Set the final rectangle to the frame rectangle

        Raylib.DrawTexturePro(texture, final, new Rectangle(x - 105, y - 135, 280, 310), new Vector2(), 0, Color.WHITE); // Draw the player
    }
    
    private int GetFrameCount(Texture2D forTexture) // Get the frame count of a texture
    {
        string animation = forTexture.Equals(_idleAsset) ? "idle" : forTexture.Equals(_walkAsset) ? "walk" : forTexture.Equals(_runAsset) ? "run" : "jump"; // Get the animation of the texture
        _tileCount.TryGetValue(Player.Appearance, out Dictionary<string, int>? dict); // Get the dictionary value of the player's appearance
        
        if (dict == null) return 0; // If the dictionary is null, return 0
        dict.TryGetValue(animation, out int count); // Get the count of the animation
        
        return count; // Return the count
    }

    private Player Player { get; } // The player
}
```

## Settings.cs
**Location:** `Velocity-NEA\Velocity\Settings.cs`

```csharp
using System.Globalization;
using System.Numerics;
using Velocity.Input;
using Velocity.Utils;

namespace Velocity;

struct DefaultSettings
{
    public const int Resolution = 0;
    public const bool FullScreen = false;
    public const double CameraLinearity = 0.95;
    public const double Volume = 1;
    public const double GameVolume = 1;
    public const double UiVolume = 1;
    public const double PlayerVolume = 1;
    public static readonly Keybind Keybind = new();
}

public class Settings : IEquatable<Settings>, ICloneable
{
    public static IniFile SettingsFile = new(Utils.Path.CurrentDirectory + "settings.ini");

    public static readonly Vector2[] Resolutions =
    {
        new(1280, 720),
        new(1920, 1080),
        new(2560, 1440),
        new(3840, 2160)
    };

    public int Resolution;

    public bool FullScreen;

    public double CameraLinearity;

    public double Volume;
    public double GameVolume;
    public double UiVolume;
    public double PlayerVolume;
    
    public Keybind Keybind = new();

    public void Load()
    {
        if (!File.Exists(Utils.Path.CurrentDirectory + "settings.ini"))
        {
            ToDefault();
            Save();
            return;
        }
        
        PopulateSettings();
    }

    private void PopulateSettings()
    {
        Resolution = Convert.ToInt32(SettingsFile.GetSetting("display", "resolution"));
        FullScreen = Convert.ToBoolean(SettingsFile.GetSetting("display", "fullscreen"));
        CameraLinearity = Convert.ToDouble(SettingsFile.GetSetting("display", "camera_linearity"));
        
        Volume = Convert.ToDouble(SettingsFile.GetSetting("sound", "master_volume"));
        GameVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "game_volume"));
        UiVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "ui_volume"));
        PlayerVolume = Convert.ToDouble(SettingsFile.GetSetting("sound", "player_volume"));
        
        Keybind.Interact = KeyParser.ToKey(SettingsFile.GetSetting("controls", "interact"));
        Keybind.Left = KeyParser.ToKey(SettingsFile.GetSetting("controls", "left"));
        Keybind.Right = KeyParser.ToKey(SettingsFile.GetSetting("controls", "right"));
        Keybind.Jump = KeyParser.ToKey(SettingsFile.GetSetting("controls", "jump"));
        Keybind.Down = KeyParser.ToKey(SettingsFile.GetSetting("controls", "down"));
        Keybind.ZoomIn = KeyParser.ToKey(SettingsFile.GetSetting("controls", "zoom_in"));
        Keybind.ZoomOut = KeyParser.ToKey(SettingsFile.GetSetting("controls", "zoom_out"));
    }
    
    public void Save()
    {
        SettingsFile.AddSetting("Display", "resolution", Convert.ToString(Resolution));
        SettingsFile.AddSetting("Display", "full_screen", Convert.ToString(FullScreen));
        SettingsFile.AddSetting("Display", "camera_linearity", Convert.ToString(CameraLinearity, CultureInfo.InvariantCulture));
        
        SettingsFile.AddSetting("sound", "master_volume", Convert.ToString(Volume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "game_volume", Convert.ToString(GameVolume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "ui_volume", Convert.ToString(UiVolume, CultureInfo.InvariantCulture));
        SettingsFile.AddSetting("sound", "player_volume", Convert.ToString(PlayerVolume, CultureInfo.InvariantCulture));

        
        SettingsFile.AddSetting("controls", "interact", Keybind.Interact.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "left", Keybind.Left.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "right", Keybind.Right.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "jump", Keybind.Jump.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "down", Keybind.Down.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "zoom_in", Keybind.ZoomIn.ToString().Replace("KEY_", ""));
        SettingsFile.AddSetting("controls", "zoom_out", Keybind.ZoomOut.ToString().Replace("KEY_", ""));

        SettingsFile.SaveSettings();
    }

    public void ToDefault()
    {
        Resolution = DefaultSettings.Resolution;
        FullScreen = DefaultSettings.FullScreen;
        CameraLinearity = DefaultSettings.CameraLinearity;
        Volume = DefaultSettings.Volume;
        GameVolume = DefaultSettings.GameVolume;
        UiVolume = DefaultSettings.UiVolume;
        PlayerVolume = DefaultSettings.PlayerVolume;
        Keybind = new Keybind();
    }

    public static string?[] GetResolutionsArray()
    {
        string?[] elements = new string?[Resolutions.Length];
        for (int i = 0; i < Resolutions.Length; i++)
        {
            elements[i] = Resolutions[i].X + " x " + Resolutions[i].Y;
        }

        return elements;
    }

    public bool Equals(Settings? other)
    {
        if (ReferenceEquals(null, other)) return false;
        return 
            CameraLinearity.Equals(other.CameraLinearity) && 
            Resolution.Equals(other.Resolution) && 
            FullScreen.Equals(other.FullScreen) &&
            Volume.Equals(other.Volume) &&
            GameVolume.Equals(other.GameVolume) &&
            UiVolume.Equals(other.UiVolume) &&
            PlayerVolume.Equals(other.PlayerVolume) &&
            Keybind.Equals(other.Keybind);
    }

    public override bool Equals(object? obj)
    {
        if (ReferenceEquals(null, obj)) return false;
        if (ReferenceEquals(this, obj)) return true;
        if (obj.GetType() != this.GetType()) return false;
        return Equals((Settings)obj);
    }

    public override int GetHashCode()
    {
        return HashCode.Combine(CameraLinearity, Resolution, Keybind, Volume, GameVolume, UiVolume, PlayerVolume, Keybind);
    }

    public object Clone()
    {
        return MemberwiseClone();
    }
}
```

## AudioManager.cs
**Location:** `Velocity-NEA\Velocity\Sound\AudioManager.cs`

```csharp
using System.Runtime.CompilerServices;
using Raylib_cs;

namespace Velocity.Sound;

public class AudioManager
{
    private Dictionary<string, Raylib_cs.Sound?> _gameSounds = new();
    private Dictionary<string, Raylib_cs.Sound?> _uiSounds = new();
    private Dictionary<string, Raylib_cs.Sound?> _playerSounds = new();

    private string[] _audioFiles =
    {
        "game/collect.wav",
        "game/coin.wav",
        "ui/click.wav",
        "ui/interact.wav",
        "player/jump.wav",
        "player/walk.wav"
    };
    
    public AudioManager ()
    {
        Initialise();
    }

    private void Initialise()
    {
        Raylib.InitAudioDevice();
        
        LoadAudioFiles();
    }

    private void LoadAudioFiles()
    {
        foreach (var file in _audioFiles)
        {
            string category = file.Split("/")[0];
            Raylib_cs.Sound sound = Raylib.LoadSound(Utils.Path.SoundLocation + file);

            string name = Path.GetFileName(Utils.Path.SoundLocation + file).Split(".")[0];
            
            switch (category)
            {
                case "game":
                    _gameSounds.Add(name, sound);
                    break;
                case "ui":
                    _uiSounds.Add(name, sound);
                    break;
                case "player":
                    _playerSounds.Add(name, sound);
                    break;
            }
        }
    }

    public void UpdateGameVolume()
    {
        foreach (var sound in _gameSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.GameVolume);
        } 
    }
    
    public void UpdateUiVolume()
    {
        foreach (var sound in _uiSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.UiVolume);
        } 
    }
    
    public void UpdatePlayerVolume()
    {
        foreach (var sound in _playerSounds)
        {
            if (sound.Value == null) continue;
            
            Raylib.SetSoundVolume((Raylib_cs.Sound)sound.Value, (float)Loader.Settings.PlayerVolume);
        } 
    }


    public void UpdateVolume()
    {
        Raylib.SetMasterVolume(Convert.ToSingle(Loader.Settings.Volume));
    }

    public void PlaySound(string name)
    {
        string category = name.Split(".")[0];
        string soundName = name.Split(".")[1];
        switch (category)
        {
            case "game":
                _gameSounds.TryGetValue(soundName, out Raylib_cs.Sound? sounda);
                if (sounda != null) Raylib.PlaySound((Raylib_cs.Sound) sounda);
                break;
            case "ui":
                _uiSounds.TryGetValue(soundName, out Raylib_cs.Sound? soundb);
                if (soundb != null) Raylib.PlaySound((Raylib_cs.Sound) soundb);
                break;
            case "player":
                _playerSounds.TryGetValue(soundName, out Raylib_cs.Sound? soundc);
                if (soundc != null) Raylib.PlaySound((Raylib_cs.Sound) soundc);
                break;
        }
    }
}
```

## MenuManager.cs
**Location:** `Velocity-NEA\Velocity\Ui\MenuManager.cs`

```csharp
using Velocity.Ui.Screens;

namespace Velocity.Ui;

public class MenuManager
{
    // Currently opened window
    private int CurrentWindow { get; set; }

    // Dictionary of all the registered window instances. - _windows[windowId] : Window
    private readonly Dictionary<int, Screens.Window> _windows = new ();

    // Run logic for current frame for currently active window.
    public void Tick()
    {
        if (!IsScreenActive()) return; // Do nothing if no window is active.
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window); // Get the currently active window
        window?.Tick(); // Tick the found window if it exists.
    }

    // Register the default menus
    public void RegisterMenus()
    {
        RegisterMenu(SettingsScreen.UiId, new SettingsScreen());    // Register the pause screen
        RegisterMenu(MainMenuScreen.UiId, new MainMenuScreen());         // Register the main menu
        RegisterMenu(LevelScreen.UiId, new LevelScreen());          // Register the level selection screen
        RegisterMenu(PauseScreen.UiId, new PauseScreen());          // Register the pause screen
        RegisterMenu(WinScreen.UiId, new WinScreen());              // Register the win screen
        RegisterMenu(LoadingScreen.UiId, new LoadingScreen());      // Register the loading screen
    }

    // Register a menu
    private void RegisterMenu(int id, Screens.Window menu)
    {
        _windows.Add(id, menu); // Add the window to the dictionary
        
        Loader.WindowManager.Renderer.RegisterUiRenderer(menu.Renderer); // Register the respective window's renderer with the main renderer
    }
    

    // Set the active window to the argument provided, provide a calling menu for previous window step (e.g. settings > main menu, or settings > pause)
    public void SetActiveWindow(int id, int? previous = null)
    {
        DisableAll(); // Disable all windows
        CurrentWindow = id; // Set the current window id
        _windows.TryGetValue(CurrentWindow, out Screens.Window? window); // Get the newly selected window
        if (window == null) return; // Return if it doesnt exist (prevent type:null error)
        window.OnDisplay(previous); // Call the on-display function so the window knows its being opened
        Loader.WindowManager.Renderer.EnableRenderer(window.Renderer.Identifier); // Enable the respective window's renderer so its visible
    }

    // Disable all windows
    public void DisableAll()
    {
        foreach (var pair in _windows) // Iterative: step through all the registered windows and disable their renderer.
        {
            Loader.WindowManager.Renderer.DisableRenderer(pair.Value.Renderer.Identifier);
        }
        
        CurrentWindow = 0; // Set the current window to 0 (inactive state)
    }

    public bool IsScreenActive() // Checks to see if a screen is active by comparing current window to inactive state.
    {
        return CurrentWindow != 0;
    }
}
```

## Button.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Button.cs`

```csharp
using Velocity.Ui.Render.Element;
using Raylib_cs;
using Vector2 = Velocity.Math.Vector2;

namespace Velocity.Ui.Misc;

public class Button : UiElement
{
    public Color BgColor { get; set; }
    public Color BorderColor { get; set; }
    public Text Text { get; set; }

    public Button(Text text, Vector2 position, Vector2 dimensions) : base(position, dimensions)
    {
        Text = text;
        SetRenderer(new ButtonRenderer(Guid.NewGuid(), this));
    }

    public override bool IsClicked()
    {
        if (base.IsClicked()) Loader.AudioManager.PlaySound("ui.click");
        return base.IsClicked();
    }
}
```

## ControlField.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\ControlField.cs`

```csharp
using Raylib_cs;
using Velocity.Input;
using Velocity.Math;
using Velocity.Ui.Render.Element;
using Velocity.Ui.Screens;
using Velocity.Utils;
using Velocity.Window;

namespace Velocity.Ui.Misc;
public class ControlField : UiElement
{
    private KeyboardKey _key;

    public ControlField(KeyboardKey defaultKey) : base(Vector2.Zero(),
        new Vector2(WindowManager.Width - SettingsScreen.Safezone.X / 2, WindowManager.Height / 32))
    {
        _key = defaultKey;
        
        SetRenderer(new ControlFieldRenderer(this));
    }

    public override void RegisterSubElements(Vector2 position)
    {
        Display = new ControlValueField(() => { return _key.ToString().Replace("KEY_", ""); }, _key.ToString().Replace("KEY_", ""),
            new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
        {
            Position = new Vector2(
                WindowManager.Width - SettingsScreen.Safezone.X -
                Raylib.MeasureTextEx(Raylib.GetFontDefault(), _key.ToString().Replace("KEY_", ""), 48, 5).X,
                Position.Y - 25),
            Dimensions = new Vector2(80, 60)
        };
    }

    public override bool IsClicked()
    {
        if (base.IsClicked()) Display.IsClicked();
        return base.IsClicked();
    }

    public KeyboardKey GetKey()
    {
        return KeyParser.ToKey(Display.Value) == KeyboardKey.KEY_NULL ? _key : KeyParser.ToKey(Display.Value);
    }
}
```

## ControlValueField.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\ControlValueField.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Screens;
using Velocity.Utils;
using Velocity.Window;

namespace Velocity.Ui.Misc;

public class ControlValueField : ValueField
{
    public bool IsListening = false; // Is the control field listening for key presses
    private int _timer = 0; // Text temp display timer

    private string? _defaultValue; // Original value when canceling
    public ControlValueField(Func<string?> listener, string? defaultValue, Color bgColor, Color textColor) : base(listener, defaultValue, bgColor, textColor)
    {
        _defaultValue = defaultValue;
    }

    public override bool IsClicked()
    {
        if (base.IsClicked()) // If is clicked
        {
            IsListening = true; // Start listening
            Loader.AudioManager.PlaySound("ui.interact"); // Play the ui sound
        }
        return base.IsClicked(); // Return isclicked value
    }
    
    // To listen loop and ui handle
    public override void Update()
    {
        if (IsListening) // If listening
        {
            if (_timer > 0) _timer--; // Decrement the timer if it is above 0
            if (_timer == 0) Value = "Press a key..."; // Display press a key if timer is at 0
            
            foreach (KeyboardKey key in Enum.GetValues(typeof(KeyboardKey))) // Iterative: For all of keyboard keys 
            {
                if (Raylib.IsKeyPressed(key)) // If said key is pressed
                {
                    if (key == KeyboardKey.KEY_BACKSPACE ||
                        (!base.IsMouseOver() && Raylib.IsMouseButtonPressed(MouseButton.MOUSE_BUTTON_LEFT))) // If backspace or left mouse button pressed:
                    {
                        IsListening = false; // Stop listening for key
                        break;
                    }
                    
                    if (Loader.Settings.Keybind.IsKeyTaken(key)) // If the key is taken
                    {
                        Value = "Key already taken!"; // Display string as value
                        _timer = 30; // For 30 frames 
                        break;
                    }
                    
                    if (KeyParser.ToKey(key.ToString().Replace("KEY_", "")) == KeyboardKey.KEY_NULL) // If it is not deemed valid by KeyParser:
                    {
                        Value = "Invalid Key"; // Display string as value
                        _timer = 30; // For 30 frames
                        break;
                    }

                    // Otherwise
                    
                    Value = key.ToString().Replace("KEY_", ""); // Set the value to the key pressed string
                    _defaultValue = Value; // Change default value
                    IsListening = false; // Stop listening
                }
            }
            
            UpdatePositions(); // Update the positions so it centers correctly
            return;
        }
        
        // Otherwise
        
        Value = _defaultValue; // Set the value back to the default value
        
        UpdatePositions(); // Update the positions so it centers correctly
    }
    
    // Function to align element to right
    private void UpdatePositions ()
    {
        Dimensions.X = Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, Value, (float)Dimensions.GetY() - 6, 2f)).X + 8;  // Find the offset of the text width and add 8 pix margin
        Position.X = WindowManager.Width - SettingsScreen.Safezone.X - Dimensions.X - 20;                                                           // Set the position to the right of the screen, inside the safezone, minus its own width and 20 pix margin
    }
}
```

## FontUtils.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\FontUtils.cs`

```csharp
using Raylib_cs;

namespace Velocity.Ui.Misc;

public class FontUtils
{
    public static Font Font = Raylib.LoadFontEx(Directory.GetCurrentDirectory() + "/assets/font/main.otf", 256, null, 250);
    public static Font ButtonFont = Raylib.LoadFontEx(Directory.GetCurrentDirectory() + "/assets/font/button.otf", 256, null, 250);
    public static Font TimerFont = Raylib.LoadFontEx(Directory.GetCurrentDirectory() + "/assets/font/timer.otf", 256, null, 250);
}
```

## Label.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Label.cs`

```csharp
using Velocity.Math;
using Velocity.Ui.Render.Element;

namespace Velocity.Ui.Misc;

public class Label : UiElement
{
    public readonly Text Text;
    
    public Label(Text text, Vector2 position) : base(position, new Vector2())
    {
        Text = text;
        Position = position;
        SetRenderer(new LabelRenderer(this));
    }
}
```

## LevelField.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\LevelField.cs`

```csharp
using Velocity.Math;
using Velocity.Ui.Render.Element;
using Velocity.Window;

namespace Velocity.Ui.Misc;

public class LevelField : UiElement
{
    public Level.Level? SelectedLevel; // Currently selected level
    
    public LevelPreview LevelPreview = new(); // Level preview element
    
    public LevelField () : base(new Vector2(800, 140), new Vector2(WindowManager.Width - 830, WindowManager.Height - 170))
    {
        SetRenderer(new LevelFieldRenderer(this));
    }

    // Select a level to show
    public void SelectLevel(int id)
    {
        SelectedLevel = Loader.Game.LevelManager.GetLevelById(id); // Change the selected level 
        LevelPreview.RecalculateRectangles(SelectedLevel); // Recalculate the preview
    }
}
```

## LevelPreview.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\LevelPreview.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Render.Element;
using Velocity.Window;
using Raylib_cs;

namespace Velocity.Ui.Misc;

public class LevelPreview : UiElement
{
    public List<Rectangle> LevelRectangles = new(); // Rectangles to be displayed
    public List<Color> LevelColors = new(); // Colors of the rectangles
    
    public LevelPreview() : base(new Vector2(815, (WindowManager.Height - 170) / 8 + 90),
        new Vector2(WindowManager.Width - 860, (WindowManager.Height - 170) / 8))
    {
        SetRenderer(new LevelPreviewRenderer(this));
    }

    // Calculate the rectangles to be displayed
    public void RecalculateRectangles(Level.Level level)
    {
        int dx = (int)Dimensions.X / Level.Level.LevelWidth; // Rect width
        int dy = (int)Dimensions.Y / Level.Level.LevelHeight; // Rect height

        // Sky rectangles
        for (int y = 0; y < 4; y++) // For 4 layers
        {
            for (int x = 0; x < Level.Level.LevelWidth; x++) // and for 60 rows from Level.cs
            {
                LevelRectangles.Add(new Rectangle((int)Position.X + (x > 0 ? (x + 1) * dx : dx), (int)Position.Y + (y > 0 ? (y + 1) * dy : dy), dx, dy)); // Add a rectangle from position + the current x and y index
                LevelColors.Add(level.BackgroundColor); // Add a level background color to the colors
            }
        }
        
        // Level Rectangles
        for (int r = 4; r <= Level.Level.LevelHeight + 3; r++) // for level height in cells
        {
            string row = level.GetObjectMap()[r - 4]; // Get the row
            for (int c = 0; c < Level.Level.LevelWidth; c++) // and for level width in cells
            {
                LevelRectangles.Add(new Rectangle((int)Position.X + (c > 0 ? (c + 1) * dx : dx), (int)Position.Y + (r > 0 ? (r + 1) * dy : dy), dx, dy)); // Add a rectangle to the rectangles
                LevelColors.Add(row[c] switch // add the color for:
                {
                    '1' => new Color(161, 102, 47, 255), // Wood color for Crate
                    '2' => new Color(99, 59, 59, 255), // Dark wood color for Barrel
                    _ => level.BackgroundColor, // Background for nothing
                });
            }
        }
    }
}
```

## PlayerPreview.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\PlayerPreview.cs`

```csharp
using Velocity.Math;
using Velocity.Ui.Render.Element;
using Velocity.Window;

namespace Velocity.Ui.Misc;

public class PlayerPreview : UiElement
{
    public PlayerPreview() : base(new Vector2(WindowManager.Width / 1.3 - 280, WindowManager.Height / 2 - 410), // Draw at center screen right
        new Vector2(560, 620)) // With the dimensions of 560, 620
    {
        SetRenderer(new PlayerPreviewRenderer(this));
    }
}
```

## Selector.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Selector.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Render.Element;
using static Velocity.Window.WindowManager;

namespace Velocity.Ui.Misc;

public class Selector : UiElement
{
    public readonly string?[] Options; // Different options for the selector
    public int Index; // Currently selected index

    public Selector(string?[] options, int index, Vector2 dimensions) : base(Vector2.Zero(), dimensions)
    {
        Options = options; // Set the options
        Index = index; // Set the index
        
        SetRenderer(new SelectorRenderer(this));
    }

    // Override: Register the display element for the value (from all ui elements)
    public override void RegisterSubElements(Vector2 position)
    {
        Display = new ValueField(() => Options[Index], Options[Index],
            new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
        {
            Position = position,
            Dimensions = new Vector2(0, Height / 32 + 10)
        };
    }

    // Set the index of the currently selected option
    public void SetIndex(int index)
    {
        Index = index;
    }

    // Increment the index by a certain amount
    private void IncrementIndex(int by = 1)
    {
        if (Index + by >= Options.Length || Index + by < 0) return;

        Index += by;
    }

    // Override: If mouse is over the selector, check if the buttons are clicked
    // If the left is clicked, decrement the index, if the right is clicked, increment the index
    public override bool IsClicked()
    {
        if (!base.IsClicked()) return base.IsClicked();
        switch (GetButtonClicked())
        {
            case 1: IncrementIndex(-1);
                break;
            case 2: IncrementIndex();
                break;
        }

        return base.IsClicked();
    }

    // Get the button that is clicked
    private int GetButtonClicked()
    {
        if (!IsMouseOver()) return 0;

        if (Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio <= Position.X + Dimensions.X / 6) return 1; // Left button
        return Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio >=
               Position.X + Dimensions.X - Dimensions.X / 6 ? 2 : 0; // Right button
    }

    // Override: Get the index of the selector
    public override double GetValue(int args = 0)
    {
        return Index;
    }
}
```

## Slider.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Slider.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Render.Element;
using Velocity.Window;
using Vector2 = Velocity.Math.Vector2;

namespace Velocity.Ui.Misc;

public class Slider : UiElement
{
    private readonly double _min; // The minimum value of the slider
    private readonly double _max; // The maximum value of the slider
    private bool _held; // If the slider is being held

    public double SliderOffset; // The offset of the slider head
    
    private double _previousValue; // The previous value of the slider
    private int _waitFrames; // The amount of frames to wait before playing the sound again

    public Slider(double min, double max, Vector2 dimensions, double? d = null) : base(Vector2.Zero(), dimensions)
    {
        _min = min; // Set the minimum value
        _max = max; // Set the maximum value
        
        SliderOffset = Dimensions.GetX() * ((d - _min) / (_max - _min)) ?? 0; // Set the slider offset to the default value

        SetRenderer(new SliderRenderer(this)); // Set the renderer
    }

    // Override: Register the display element for the value (from all ui elements)
    public override void RegisterSubElements(Vector2 position)
    {
        Display = new ValueField(() => System.Math.Round(GetValue(2) / _max * 100) + "%", GetValue(2) + "%",
            new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
        {
            Position = position,
            Dimensions = new Vector2(0, WindowManager.Height / 32 + 10)
        };
    }

    // Override: If mouse is over the slider, check if the slider head is clicked
    // If the slider head is clicked, set the slider offset to the mouse position
    // Limit slider offset to the slider bounds
    public override bool IsClicked()
    {
        if (_waitFrames != 0) _waitFrames--; // Decrement the wait frames
        if (IsMouseInHeadBounds() && Raylib.IsMouseButtonDown(MouseButton.MOUSE_BUTTON_LEFT)) _held = true; // If the mouse is in the slider head bounds and the left mouse button is down, set held to true
        
        if (base.IsClicked() || (_held && Raylib.IsMouseButtonDown(MouseButton.MOUSE_BUTTON_LEFT))) // If the slider is clicked or held
        {
            _held = true; // Set held to true
            
            SliderOffset = Raylib.GetMouseX() * Loader.WindowManager.VirtualRatio - Position.GetX(); // Set the slider offset to the mouse position
            
            if (SliderOffset < 0) SliderOffset = 0; // Limit the slider offset to the slider bounds 
            if (SliderOffset > Dimensions.GetX()) SliderOffset = Dimensions.GetX(); // Limit the slider offset to the slider bounds

            if (System.Math.Abs(_previousValue - GetValue(2)) == 0) return _held; // If the value hasn't changed return held
            if (_waitFrames == 0) // If the wait frames is 0
            {
                _waitFrames = (int)(Double.Abs(_previousValue - GetValue(2)) * 100) * 3; // Set the wait frames to the difference between the values * 100 * 3 (To stop more clicks the faster its moved)
                Loader.AudioManager.PlaySound("ui.interact"); // Play the sound
            }

            _previousValue = GetValue(2); // Set the previous value to the current value

        } else _held = false; // If the slider isn't clicked, set held to false

        return _held; // Return held
    }

    // If the mouse is over the slider head, change the cursor to a hand
    private bool IsMouseInHeadBounds ()
    {
        var mousePos = System.Numerics.Vector2.Multiply(Raylib.GetMousePosition(),
            new System.Numerics.Vector2(Loader.WindowManager.VirtualRatio, Loader.WindowManager.VirtualRatio)); // Get the mouse position

        return
            mousePos.X >= GetSlideHeadBounds().X && 
            mousePos.X <= GetSlideHeadBounds().Z &&
            mousePos.Y >= GetSlideHeadBounds().Y &&
            mousePos.Y <= GetSlideHeadBounds().W; // Return if the mouse is in the slider head bounds
    }
    
    
    // Get the slider head bounds
    private Vector4 GetSlideHeadBounds() 
    {
        return new Vector4(Convert.ToSingle(Position.GetX() - 5 + SliderOffset), Convert.ToSingle(Position.GetY() - 5), Convert.ToSingle(Position.GetX() + 5 + SliderOffset), Convert.ToSingle(Position.GetY() + 5 + Dimensions.GetY())); // Return the slider head bounds
    }

    // Override: Get the value of the slider
    public override double GetValue(int precision = 0)
    {
        return System.Math.Round(_min + (_max - _min) * (SliderOffset / Dimensions.GetX()), precision); // Return the value of the slider
    }
}
```

## Text.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Text.cs`

```csharp
using Raylib_cs;

namespace Velocity.Ui.Misc;

public class Text
{
    public Text(string? data = null, int fontSize = 32, Font? font = null, Color? color = null)
    {
        Data = data ?? "";
        FontSize = fontSize;
        Font = font ?? Raylib.GetFontDefault();
        Color = color ?? Color.WHITE;
    }
    public string Data { get; set; } // String data
    public Color Color { get; set; } // Color of the text
    public int FontSize { get; set; } // Font size

    public Font Font { get; set; } // Font

    public int GetWidth() // Get the width of the text
    {
        return (int)Raylib.MeasureTextEx(Font, Data, FontSize, 4f).X; // Return the width of the text
    }
}
```

## Toggle.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\Toggle.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Render.Element;
using Velocity.Window;

namespace Velocity.Ui.Misc;

public class Toggle : UiElement
{
    private bool _value; // The value of the toggle
    public Toggle(bool d, Vector2 dimensions) : base(Vector2.Zero(), dimensions)
    {
        _value = d; // Set the value to the default value
        
        SetRenderer(new ToggleRenderer(this)); // Set the renderer
    }

    // Override: Register the display element for the value (from all ui elements)
    public override bool IsClicked()
    {
        if (!base.IsClicked()) return false; // If the toggle isn't clicked, return false
        _value = !_value; // Set the value to the opposite of the current value
        Loader.AudioManager.PlaySound("ui.interact");  // Play the ui interact sound
        return base.IsClicked(); // Return true
    }

    // Override: Register the display element for the value (from all ui elements)
    public override void RegisterSubElements(Vector2 position)
    {
        Display = new ValueField(() => _value ? "Enabled" : "Disabled", _value ? "Enabled" : "Disabled",
            new Color(10, 10, 10, 255), new Color(200, 200, 200, 255))
        {
            Position = position,
            Dimensions = new Vector2(0, WindowManager.Height / 32 + 10)
        };
    }

    // Override: Get the value of the toggle
    public override double GetValue(int args = 0)
    {
        return Convert.ToDouble(_value); // Return the value
    }
}
```

## UIElement.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\UIElement.cs`

```csharp
using Velocity.Math;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Misc;

public abstract class UiElement
{
    public Vector2 Position;
    public Vector2 Dimensions;
    public bool Active = true;
    public ValueField? Display;
    
    private bool _isClicked;
    

    public ConditionalRenderer? Renderer;

    protected UiElement(Vector2 origin, Vector2 dimensions)
    {
        Position = origin;
        Dimensions = dimensions;
    }

    protected void SetRenderer(ConditionalRenderer renderer)
    {
        Renderer = renderer;
    }

    public virtual bool IsMouseOver()
    {
        System.Numerics.Vector2 mousePos = System.Numerics.Vector2.Multiply(Raylib.GetMousePosition(),
            new System.Numerics.Vector2(Loader.WindowManager.VirtualRatio, Loader.WindowManager.VirtualRatio));
        return mousePos.X > Position.X && 
               mousePos.X < Position.X + Dimensions.X &&
               mousePos.Y > Position.Y &&
               mousePos.Y < Position.Y + Dimensions.Y;
    }

    public virtual bool IsClicked()
    {
        if (IsMouseOver() && Raylib.IsMouseButtonPressed(MouseButton.MOUSE_BUTTON_LEFT)) return true;

        return false;
    }

    public virtual void RegisterSubElements(Vector2 position)
    {
    }
    

    public virtual double GetValue(int args = 0)
    {
        return 0.0;
    }
}
```

## ValueField.cs
**Location:** `Velocity-NEA\Velocity\Ui\Misc\ValueField.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Overlay.Render;
using Velocity.Ui.Render.Element;

namespace Velocity.Ui.Misc;

public class ValueField : UiElement
{
    private readonly Func<string?> _listener; // Listener for the value
    public Color BgColor; // Background color
    public Color TextColor; // Text color
    public string? Value; // Value of the field
    private readonly int? _customX = null; // Custom x value
    
    
    public ValueField(Func<string?> listener, string? defaultValue, Color bgColor, Color textColor) : base(Vector2.Zero(), Vector2.Zero())
    {
        _listener = listener; // Set the listener
        Value = defaultValue;   // Set the value
        BgColor = bgColor; // Set the background color
        TextColor = textColor; // Set the text color

        SetRenderer(new ValueFieldRenderer(this)); // Set the renderer
    }
    
    // Set the custom x value
    public virtual void Update()
    {
        Value = _listener.Invoke(); // Update the value
        Dimensions.X = _customX ?? Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, Value, (float)Dimensions.GetY() - 6, 2f)).X + 8; // Update the dimensions of the field to fit the text + padding
    }
}
```

## ColoredFlashRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\ColoredFlashRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class ColoredFlashRenderer : UiRenderer
{
    private int _fade = 30; // The amount of frames it takes to fade out
    private int _counter = 0; // The current frame
    private Color _color = Color.WHITE; // The color of the flash

    private int _alpha = 0; // The alpha of the flash
    
    public ColoredFlashRenderer() : base("velocity:game.flash", false)
    {
    }

    public void Trigger(int fadeout, Color color) // Trigger the flash
    {
        _counter = fadeout; // Set the counter to the fadeout amount
        _fade = fadeout; // Set the fade to the fadeout amount
        _alpha = 255; // Set the alpha to 255
        _color = color; // Set the color to the color
        IsEnabled = true; // Enable the renderer
    }


    public override void Draw() // Draw the flash
    {
        if (_counter == 0) // If the counter is 0
        {
            IsEnabled = false; // Disable the renderer
            return; // Return
        }
        
        _alpha = (int)(255d * ((double)_counter / _fade)); // Calculate the alpha
        _counter--; // Decrement the counter
 
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, _color with { a = (byte)_alpha }); // Draw the flash
    }
}
```

## DebugRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\DebugRenderer.cs`

```csharp
using Velocity.Window.Render.Renderers;
using Raylib_cs;

namespace Velocity.Ui.Overlay.Render;

public class DebugRenderer : UiRenderer
{
    public DebugRenderer () : base("velocity:overlay.debug") {}

    public override void Draw()
    {
        if (!Loader.Game.IsRunning || Loader.Game.Player == null) return;
        
        Raylib.DrawText(
            "Velocity: " + "\n" +
            " FPS: " + Raylib.GetFPS() + "\n" +
            " Delta: " + Raylib.GetFrameTime() + "\n" +
            "\n\n" +
            "PLAYER: \n Position: " + Loader.Game.Player.Position.X + ", " + Loader.Game.Player.Position.Y + "\n" + 
            " Velocity: " + (int)Loader.Game.Player.Velocity.X + " " + (int)Loader.Game.Player.Velocity.Y + "\n"
            , 0, 0, 24, Color.WHITE);
    }
}
```

## DistanceLimitRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\DistanceLimitRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class DistanceLimitRenderer : UiRenderer
{
    public DistanceLimitRenderer () : base("velocity.ui.distanceLimit", false)
    {
    }

    public override void Draw()
    {
        int distance = 0; // Distance from the center of the level
        if (Double.Abs(Loader.Game.Player.Position.X) >= (Level.Level.LevelWidth / 2 + 3) * 200) distance = (int) (Double.Abs(Loader.Game.Player.Position.X) - (Level.Level.LevelWidth / 2 + 3) * 200); // Calculate the distance from the edge of the level to the player
        
        int alphaa = 0; // Alpha for the gradient
        if (distance is > 0 and < 400) alphaa = (int)(255 * (distance / 400d)); // Calculate the alpha for the gradient
        else if (distance >= 400) alphaa = 255; // Set the alpha to 255 if the distance is greater than 400
        int alphab = 0; // Alpha for the gradient
        if (distance is > 0 and < 800) alphab = (int)(255 * (distance / 800d)); // Calculate the alpha for the gradient
        else if (distance >= 800) alphab = 255; // Set the alpha to 255 if the distance is greater than 800
        
        // If the player is to the left or right of the level area
        if (Loader.Game.Player.Position.X > 0) Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, new Color(255, 255, 255, alphab), new Color(255, 255, 255, alphaa)); // Draw the white gradient
        else Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, new Color(0, 0, 0, alphaa), new Color(0, 0, 0, alphab)); // Draw the black gradient
    }
}
```

## HudRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\HudRenderer.cs`

```csharp
using System.Globalization;
using System.Numerics;
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;
using Velocity.Game;
using Velocity.Input;
using Velocity.Ui.Misc;

namespace Velocity.Ui.Overlay.Render;

public class HudRenderer : UiRenderer
{
    private readonly Game.Game _game; // The game instance

    private Texture2D _heartTexture; // The heart texture
    private Texture2D _powerUpTexture; // The power up texture
    private Texture2D _coinTexture; // The coin texture

    private readonly Rectangle _heartSource; // The heart source rectangle
    private readonly Rectangle[] _powerUpSource = new Rectangle[2]; // The power up source rectangle

    public HudRenderer(Game.Game game) : base("velocity.overlay.hud", false)
    {
        _game = game; // Set game

        LoadTextures(); // Load textures
        _heartSource = new Rectangle(0, 0, _heartTexture.width, _heartTexture.height);
        _powerUpSource[0] = new Rectangle(0, _powerUpTexture.height / 4, _powerUpTexture.width / 3, 
            _powerUpTexture.height / 4); // Set power up 1 source rectangle
        _powerUpSource[1] = new Rectangle(_powerUpTexture.width / 3 * 2, _powerUpTexture.height / 4,
            _powerUpTexture.width / 3,
            _powerUpTexture.height / 4); // Set power up 2 source rectangle
    }

    private void LoadTextures() // Load textures
    {
        _heartTexture = Loader.AssetManager.GetTexture("ui.heart"); // Get heart texture
        _powerUpTexture = Loader.AssetManager.GetTexture("item.power_ups"); // Get power up texture
        _coinTexture = Loader.AssetManager.GetTexture("item.coin"); // Get coin texture
    }

    private Rectangle ModifyRectangle(Rectangle rectangle, int powerUpId) // Modify rectangle to active power up visually
    {
        if (_game.PowerUps[powerUpId] > 0) // If the power up is active
        {
            rectangle.y += _powerUpTexture.height / 2; // Set the rectangle y to the second row of the power up texture
        }

        return rectangle; // Return the rectangle
    }

    public override void Draw() // Draw the hud
    {
        Raylib.DrawRectangleGradientV(0, 0, WindowManager.Width, 180, new Color(0, 0, 0, 45), new Color(0, 0, 0, 0)); // Draw the hud gradient background
        for (int i = 0; i <= 2; i++) // Draw the heart backgorund
        {
            int rx = _heartTexture.width / 2 * i; // Calculate the x position of the heart

            Raylib.DrawTexturePro(_heartTexture, _heartSource,
                new Rectangle(rx, -10, _heartTexture.width / 2, _heartTexture.height / 2), new Vector2(), 0,
                new Color(200, 200, 200, 75)); // Draw the heart
        }

        for (int i = 0; i <= _game.Player.Health - 1; i++) // Draw the bonus hearts
        {
            int rx = _heartTexture.width / 2 * i; // Calculate the x position of the heart

            Raylib.DrawTexturePro(_heartTexture, _heartSource,
                new Rectangle(rx, -10, _heartTexture.width / 2, _heartTexture.height / 2), new Vector2(), 0, i <= 2
                    ? new Color(255, 0, 0, 255)
                    : new Color(
                        255, 215, 0, 255)); // Draw the heart with a different color if it is a bonus heart
        }
        
        Raylib.DrawTexturePro(_coinTexture, new Rectangle(0, 0, _coinTexture.width / 5, _coinTexture.height), new Rectangle(10, 90, 70, 70), new Vector2(), 0, Color.WHITE); // Draw the coin texture
        Raylib.DrawRectangleRounded(
            new Rectangle(
                Convert.ToSingle(_coinTexture.width / 5 + 32),
                130,
                Raylib.MeasureText(_game.Coins.ToString(), 28) + 20, 32f), 0.7f, 4,
            new Color(20, 30, 40, 150)); // Draw the coin count background
        Raylib.DrawText(_game.Coins.ToString(),
            _coinTexture.width / 5 + 42,
            134, 28, Color.WHITE); // Draw the coin count text
        
        Raylib.DrawTexturePro(_powerUpTexture, ModifyRectangle(_powerUpSource[0], 0),
            new Rectangle(WindowManager.Width - _powerUpSource[0].width - 10, 10, _powerUpSource[0].width,
                _powerUpSource[0].height), new Vector2(), 0, Color.WHITE); // Draw the power up 1 texture
        Raylib.DrawTexturePro(_powerUpTexture, ModifyRectangle(_powerUpSource[1], 2), 
            new Rectangle(WindowManager.Width - _powerUpSource[1].width * 2 - 10, 10, _powerUpSource[1].width,
                _powerUpSource[1].height), new Vector2(), 0, Color.WHITE); // Draw the power up 2 texture
        
        if (_game.PowerUps[0] > 0) // If the power up 1 is active
        {
            // Calculate the timer text
            TimeSpan ts = new TimeSpan((long)_game.PowerUps[0] + 1);
            string text = $"{ts.Minutes}{ts.Seconds:00}";
            
            Raylib.DrawRectangleRounded(
                new Rectangle(
                    Convert.ToSingle(WindowManager.Width - (_powerUpSource[0].width - _powerUpSource[0].width / 2.4) - Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20),
                    _powerUpSource[0].height / 2 + _powerUpSource[0].width / 3 - 2,
                    Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20, 32f), 0.7f, 4,
                new Color(20, 30, 40, 150)); // Draw the power up 1 timer background
            Raylib.DrawText(GetTimeForPowerUp(0),
                Convert.ToInt32(WindowManager.Width - (_powerUpSource[0].width - _powerUpSource[0].width / 1.8) - Raylib.MeasureText(GetTimeForPowerUp(0), 28) + 20),
                Convert.ToInt32(_powerUpSource[0].height / 2 + _powerUpSource[0].width / 3), 28, Color.WHITE); // Draw the power up 1 timer text
        }

        if (_game.PowerUps[2] > 0) // If the power up 2 is active
        {
            Raylib.DrawRectangleRounded(
                new Rectangle(
                    Convert.ToSingle(WindowManager.Width - (_powerUpSource[0].width * 2 - _powerUpSource[0].width / 2.4) - Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20),
                    _powerUpSource[0].height / 2 + _powerUpSource[0].width / 3 - 2,
                    Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20, 32f), 0.7f, 4,
                new Color(20, 30, 40, 150)); // Draw the power up 2 timer background
            
            
            Raylib.DrawText(GetTimeForPowerUp(2),
                Convert.ToInt32(WindowManager.Width - (_powerUpSource[0].width * 2 - _powerUpSource[0].width / 1.8) - Raylib.MeasureText(GetTimeForPowerUp(2), 28) + 20),
                Convert.ToInt32(_powerUpSource[0].height / 2 + _powerUpSource[0].width / 3), 28, Color.WHITE); // Draw the power up 2 timer text
        }

        // Create a footer at the bottom of the game displaying the controls for the game 
        
        Raylib.DrawRectangle(0, WindowManager.Height - 60, WindowManager.Width, 60, new Color(40, 40, 40, 150)); // Draw the footer background
        

        DrawFooter(); // Draw the footer
    }

    private void DrawFooter() // Draw the footer
    {
        int wx = 15; // The x position of the footer (safezone of 15 pix)
        
        // Controls
        
        // Register the text for the controls
        // Calculate the border width
        // Draw the control border
        // Give 5 pix margin
        // Draw the control text
        // Add the width of the control text to the x position
        // Draw next control with the same steps
        Text leftText = new Text(Loader.Settings.Keybind.Left.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Left));
        int leftBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Left.ToString().Replace("KEY_", ""), leftText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, leftBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(leftText.Data, wx, WindowManager.Height - 45, leftText.FontSize, leftText.Color);
        wx += Raylib.MeasureText(leftText.Data, 32) + 20;
        
        // Repeat for right, interact and jump
        Text rightText = new Text(Loader.Settings.Keybind.Right.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Right));
        int rightBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Right.ToString().Replace("KEY_", ""), rightText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, rightBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(rightText.Data, wx, WindowManager.Height - 45, rightText.FontSize, rightText.Color);
        wx += Raylib.MeasureText(rightText.Data, 32) + 20;
        
        Text interactText = new Text(Loader.Settings.Keybind.Interact.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Interact));
        int interactBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Interact.ToString().Replace("KEY_", ""), interactText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, interactBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(interactText.Data, wx, WindowManager.Height - 45, interactText.FontSize, interactText.Color);
        wx += Raylib.MeasureText(interactText.Data, 32) + 20;
        
        Text jumpText = new Text(Loader.Settings.Keybind.Jump.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.Jump));
        int jumpBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.Jump.ToString().Replace("KEY_", ""), jumpText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx, WindowManager.Height - 45, jumpBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(jumpText.Data, wx, WindowManager.Height - 45, jumpText.FontSize, jumpText.Color);

        
        // Register text for zoom in and zoom out
        // Calculate the border width
        Text zoominText = new Text(Loader.Settings.Keybind.ZoomIn.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.ZoomIn));
        int zoominBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.ZoomIn.ToString().Replace("KEY_", ""), zoominText.FontSize);
        
        // Set X value to the right side of the screen
        wx = WindowManager.Width - 15;
        
        // Draw the border
        // Give 5 pix margin
        // Draw the text
        // Subtract the width of the text from the x position
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx - zoominText.GetWidth(), WindowManager.Height - 45, zoominBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(zoominText.Data, wx - zoominText.GetWidth(), WindowManager.Height - 45, zoominText.FontSize, zoominText.Color);
        wx -= Raylib.MeasureText(zoominText.Data, 32) + 25;
        
        // Repeat for zoomout
        Text zoomoutText = new Text(Loader.Settings.Keybind.ZoomOut.ToString().Replace("KEY_", "") + " " + Keybind.IdToString(Keybind.ActionId.ZoomOut));
        int zoomoutBorderWidth = Raylib.MeasureText(Loader.Settings.Keybind.ZoomOut.ToString().Replace("KEY_", ""), zoomoutText.FontSize);
        Raylib.DrawRectangleRoundedLines(new Rectangle(wx - zoomoutText.GetWidth(), WindowManager.Height - 45, zoomoutBorderWidth + 10, 30), 0.3f, 4, 2f, new Color(255, 255, 255, 255));
        wx += 5;
        Raylib.DrawText(zoomoutText.Data, wx - zoomoutText.GetWidth(), WindowManager.Height - 45, zoomoutText.FontSize, zoomoutText.Color);
    }

    private string GetTimeForPowerUp (int id) // Get the time for a power up
    { 
        int time = Convert.ToInt32(_game.PowerUps[id] + 1); // Get the time
        int minutes = time / 60; // Calculate the minutes
        int seconds = time % 60; // Calculate the seconds 
        
        return minutes + ":" + seconds.ToString("00"); // Return the time formatted
    }
}
```

## TextOverlayRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\TextOverlayRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class TextOverlayRenderer : UiRenderer
{
    private string _text = ""; // The text to display
    private Color _color = Color.BLACK; // The color of the text

    private int _aStep; // The current frame
    private int _alpha; // The alpha of the text
    private int _displaySeconds; // The amount of seconds to display the text for
    private int _flip = 1; // The flip value for the 
    
    public TextOverlayRenderer() : base("velocity:text.overlay", false)
    { }

    public void TriggerOverlay(string text, Color color, int displaySeconds) // Trigger the overlay
    {
        _aStep = 0; // Reset the frame
        _alpha = 0;  // Reset the alpha
        _text = text; // Set the text
        _color = color; // Set the color
        _displaySeconds = displaySeconds; // Set the display seconds
        IsEnabled = true; // Enable the renderer
    }

    public override void Draw()
    {
        if (_aStep == 60 * _displaySeconds) // If the text has been displayed for the correct amount of time
        {
            IsEnabled = false; // Disable the renderer
            _aStep = 0; // Reset the frame
            return; // Return
        }
        
        _aStep++; // Increment the frame
        
        if (_aStep % 16 == 0) _flip = _flip == 1 ? 0 : 1; // Flip the animation after 16 steps in the animation

        // Fade in and out
        if (_aStep < (_displaySeconds * 60) / 4 && _alpha < 255) _alpha += 5; // If he text has been displayed for 1/4th of the display seconds increment the alpha by 5
        if (_aStep > ((_displaySeconds * 60) / 4) * 3 && _alpha > 0) _alpha -= 5; // If he text has been displayed for 3/4th of the display seconds decrement the alpha by 5
        
        Raylib.DrawRectangleRounded(
            new Rectangle((WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2) - 10,
                WindowManager.Height / 12 - 10, Raylib.MeasureText(_text, 34) + 22, 34 + 18), 0.2f, 4,
            new Color(0, 10, 30, _alpha)); // Draw the background border for the text with a rounded rectangle
        
        Raylib.DrawRectangleRounded(
            new Rectangle((WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2) - 5,
                WindowManager.Height / 12 - 5, Raylib.MeasureText(_text, 34) + 12, 34 + 7), 0.2f, 4,
            new Color(255, 10, 255, _alpha * (_flip))); // Draw the background for the text with a rounded rectangle
        Raylib.DrawText(_text, WindowManager.Width / 2 - Raylib.MeasureText(_text, 34) / 2, WindowManager.Height / 12, 34, new Color(_color.r, _color.g, _color.b, _alpha * (_flip))); // Draw the text with the correct color and alpha
    }
}
```

## TimerRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Overlay\Render\TimerRenderer.cs`

```csharp
using System.Diagnostics;
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Overlay.Render;

public class TimerRenderer : UiRenderer
{
    public TimerRenderer () : base("game:overlay.timer", false) {}

    public override void Draw()
    {
        if (!Loader.Game.IsRunning) return;

        TimeSpan tspan = Loader.Game.Timer.Elapsed; // Get the elapsed time
        string text = $"{tspan.Minutes:00}:{tspan.Seconds:00}.{tspan.Milliseconds / 10:00}"; // Format the time
        
        Raylib.DrawTextEx(FontUtils.TimerFont, text, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.TimerFont, text, 32 + (8 * (4 - (2 + Loader.Settings.Resolution))),2).X / 2, 10), 32 + 8 * (4 - (2 + Loader.Settings.Resolution)), 2, Color.WHITE); // Draw the timer text with the correct font size and position
    }
}
```

## ButtonRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\ButtonRenderer.cs`

```csharp
using System.Numerics;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Ui.Screens;
using Velocity.Window;

namespace Velocity.Ui.Render.Element;

public class ButtonRenderer : ConditionalRenderer
{
    private readonly Button _parent;

    public ButtonRenderer(Guid id, Button parent) : base("velocity:menu.button." + id)
    {
        _parent = parent;
    }

    private int _aStep = 0;
    private double _smoothedAStep = 0;
    private double _aStepPrev = 0;

    public override void Draw()
    {
        if (_parent.Active)
        {
            if (_parent.IsMouseOver() && _aStep < 100) _aStep += 8;
            else if (!_parent.IsMouseOver() && _aStep > 0) _aStep -= 8;
        }
        else _aStep = 0;
        
        _aStep = _aStep > 100 ? 100 : _aStep;
        _aStep = _aStep < 0 ? 0 : _aStep;

        _smoothedAStep = (_aStep * 0.2) + (_aStepPrev * 0.8);
        _aStepPrev = _smoothedAStep;
        
        int x = (int)_parent.Position.X;
        int y = (int)_parent.Position.Y;
        
        int dx = (int)_parent.Dimensions.X;
        int dy = (int)_parent.Dimensions.Y;
        
        int aMultiple = Convert.ToInt32(10 * Convert.ToSingle(_smoothedAStep) / 100);
        int hoverCa = Convert.ToInt32(50 * Convert.ToSingle(_smoothedAStep) / 100);
        
        Rectangle bounds = new(x, y, dx, dy);
        Raylib.DrawRectangleLinesEx(bounds, (Loader.Settings.Resolution + 1) * 2f, _parent.BorderColor);
        Color bgColor = _parent.BgColor with{r = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.r + hoverCa + 50), g = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.g), b = Convert.ToByte(_parent.IsClicked() ? 200 : _parent.BgColor.b)};
        Raylib.DrawRectangle(x, y, dx, dy, bgColor);
        if (_aStep > 0)
        {
            // Raylib.DrawRectangle(x, y, dx, aMultiple, new Color(255, 255, 255, 255));
            Raylib.DrawRectangle(x, y, aMultiple, dy, _parent.IsClicked() ? new Color(255, 100, 0, 255) : new Color(255, 255, 255, 255));
            // Raylib.DrawRectangle(x + dx - aMultiple, y, aMultiple, dy, new Color(255, 255, 255, 255));
            // Raylib.DrawRectangle(x, y + dy - aMultiple, dx, aMultiple, new Color(255, 255, 255, 255));
        }

        int textX = (int) _parent.Position.X + (WindowManager.Width / 64) + (aMultiple);
        int textY = (int) _parent.Position.Y + ((dy / 2) - (_parent.Text.FontSize / 2));

        Color hoverColor = _parent.Text.Color with
        {
            r = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa),
            g = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa),
            b = _parent.IsClicked() ? Convert.ToByte(10) : Convert.ToByte(200 + hoverCa)
        };
        
        Raylib.DrawTextEx(FontUtils.ButtonFont, _parent.Text.Data, new Vector2(textX, textY), _parent.Text.FontSize, 3, (_parent.IsMouseOver() ? hoverColor : _parent.Text.Color));
        
        if (!_parent.Active) Raylib.DrawRectangle(x, y, dx, dy, new Color(150, 150, 150, 150));
    }
}
```

## ControlFieldRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\ControlFieldRenderer.cs`

```csharp
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class ControlFieldRenderer : ConditionalRenderer
{
    private ControlField _parent;
    
    public ControlFieldRenderer(ControlField parent) : base("velocity.menu.controls." + Guid.NewGuid())
    {
        _parent = parent;
    }

    public override void Draw()
    {
        _parent.Display.Renderer.Draw();
    }
}
```

## LabelRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\LabelRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class LabelRenderer : ConditionalRenderer
{
    private Label _parent;
    
    public LabelRenderer(Label parent) : base("velocity:label." + Guid.NewGuid())
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawTextEx(_parent.Text.Font, _parent.Text.Data, new Vector2(Convert.ToSingle(_parent.Position.X), Convert.ToSingle(_parent.Position.Y)), _parent.Text.FontSize, 4, _parent.Text.Color);
    }
}
```

## LevelFieldRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\LevelFieldRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Statistics;
using Velocity.Ui.Misc;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class LevelFieldRenderer : ConditionalRenderer
{
    private LevelField _parent;
    
    public LevelFieldRenderer (LevelField parent) : base("velocity:menu.levelField")
    {
        _parent = parent;
    }

    public override void Draw()
    {
        if (_parent.SelectedLevel == null) return;
        Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y, new Color(30, 30, 30, 240));
        
        Raylib.DrawText(_parent.SelectedLevel.Name, (int)_parent.Position.X + 20, (int)_parent.Position.Y + 20, 56, Color.WHITE);
        
        _parent.LevelPreview.Renderer.Draw();
        
        Raylib.DrawText("Difficulty: " + _parent.SelectedLevel.Difficulty + "\nBest time: " + StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(_parent.SelectedLevel.Id)) , (int)_parent.Position.X + 20, (int)_parent.Position.Y + (WindowManager.Height - 170) / 6 + 166, 32, Color.WHITE);
    }
}
```

## LevelPreviewRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\LevelPreviewRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class LevelPreviewRenderer : ConditionalRenderer
{
    private LevelPreview _parent;
    
    public LevelPreviewRenderer (LevelPreview parent) : base("velocity:menu.levelPreview")
    {
        _parent = parent;
    }

    public override void Draw()
    {
        for (int i = 0; i <= _parent.LevelRectangles.Count - 1; i++)
        {
            Raylib.DrawRectangleRec(_parent.LevelRectangles[i], _parent.LevelColors[i]);
        }
    }
}
```

## PlayerPreviewRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\PlayerPreviewRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class PlayerPreviewRenderer : ConditionalRenderer
{
    private PlayerPreview _parent;
    private Texture2D _idleAsset;
    private int _apperence;
    private int _currentFrame;
    private int _frameCount;
    private int _frameSpeed = 6;
    private Rectangle _frameRect;
    
    
    private readonly Dictionary<int, int> _tileCount = new()
    {
        {1, 8},
        {2, 6},
        {3, 6}
    };

    public PlayerPreviewRenderer (PlayerPreview parent) : base("velocity:ui.playerPreview")
    {
        _parent = parent;
        LoadTexture();
    }

    private void LoadTexture()
    {
        _idleAsset = Loader.AssetManager.GetPlayerTexture(Loader.Game.Player.Appearance, "idle");
    }

    public override void Draw()
    {
        if (Loader.Game.Player.Appearance != _apperence)
        {
            _apperence = Loader.Game.Player.Appearance;
            LoadTexture();
            return;
        }
        
        _frameCount++;

        if (_frameCount >= 60 / _frameSpeed)
        {
            _frameCount = 0;
            _currentFrame++;
            if (_currentFrame >= GetFrameCount()) _currentFrame = 0;
            
            _frameRect = new Rectangle(_currentFrame * _idleAsset.width / GetFrameCount(), 0, _idleAsset.width / GetFrameCount(), _idleAsset.height);
        }
        
        Raylib.DrawTexturePro(_idleAsset, _frameRect, new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y), new Vector2(), 0.0f, Color.WHITE);
    }
    
    private int GetFrameCount()
    {
        _tileCount.TryGetValue(_apperence, out int count);

        return count;
    }
}
```

## SelectorRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\SelectorRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class SelectorRenderer : AnimatableRenderer
{
    private readonly Selector _parent;

    public SelectorRenderer(Selector parent) : base(parent, "velocity.selector." + Guid.NewGuid())
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y, InternalBg);
        Raylib.DrawRectangleLinesEx(new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X, (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
        Raylib.DrawText(_parent.Options[_parent.Index], (int) (_parent.Position.X + (_parent.Dimensions.X / 2 - Raylib.MeasureText(_parent.Options[_parent.Index], Convert.ToInt32(WindowManager.Height / 28)) / 2)), (int) (_parent.Position.Y + (_parent.Dimensions.Y / 2 - Convert.ToInt32(WindowManager.Height / 28) / 2)), Convert.ToInt32(WindowManager.Height / 28), InternalBorder);
        Raylib.DrawTriangle(new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + _parent.Dimensions.Y / 4)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X / 32), (int)(_parent.Position.Y + _parent.Dimensions.Y / 2)), new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + (_parent.Dimensions.Y / 4) * 3)), _parent.Index == 0 ? Color.DARKGRAY : InternalBorder);
        Raylib.DrawTriangle(new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - _parent.Dimensions.X / 32), (int)(_parent.Position.Y + _parent.Dimensions.Y / 2)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + _parent.Dimensions.Y / 4)), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 16) * 2), (int)(_parent.Position.Y + (_parent.Dimensions.Y / 4) * 3)), _parent.Index + 1 == _parent.Options.Length ? Color.DARKGRAY : InternalBorder);
        Raylib.DrawLineEx(new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 6)), (int)_parent.Position.Y), new Vector2((int)(_parent.Position.X + (_parent.Dimensions.X / 6)), (int)_parent.Position.Y + (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
        Raylib.DrawLineEx(new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 6)), (int)_parent.Position.Y), new Vector2((int)(_parent.Position.X + _parent.Dimensions.X - (_parent.Dimensions.X / 6)), (int)_parent.Position.Y + (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
        
        _parent.Display?.Renderer?.Draw();
    }
} 
```

## SliderRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\SliderRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class SliderRenderer : AnimatableRenderer
{
    private readonly Slider _parent;

    public SliderRenderer(Slider parent) : base(parent, "velocity:ui.slider." + Guid.NewGuid())
    {
        _parent = parent;
    }

    public override void Draw()
    {

        /*Raylib.DrawRectangleLinesEx(new Rectangle(Convert.ToInt32(_parent.Position.X) - 1, Convert.ToInt32(_parent.Position.Y) - 1,
            Convert.ToInt32(_parent.Dimensions.X) + 2, Convert.ToInt32(_parent.Dimensions.Y) + 2), (Loader.Settings.Resolution + 1) * 3f,
            new Color(200 + hoverCa, 200 + hoverCa, 200 + hoverCa, 255));*/
        
        Raylib.DrawRectangle(Convert.ToInt32(_parent.Position.X), Convert.ToInt32(_parent.Position.Y),
            Convert.ToInt32(_parent.Dimensions.X), Convert.ToInt32(_parent.Dimensions.Y),
            InternalBg);

        Raylib.DrawRectangle(
            Convert.ToInt32(_parent.Position.X - 4 + _parent.SliderOffset - (Loader.Settings.Resolution + 1) * 2f),
            Convert.ToInt32(_parent.Position.GetY() - 4), 8 + (Loader.Settings.Resolution + 1) * 4,
            Convert.ToInt32(_parent.Dimensions.GetY()) + 8,
            _parent.IsClicked() ? BgColor with { a = 255 } : BgColor with { a = 200 });
        Raylib.DrawRectangleLinesEx(new Rectangle(Convert.ToInt32(_parent.Position.X - 5 + _parent.SliderOffset - (Loader.Settings.Resolution + 1) * 2), Convert.ToInt32(_parent.Position.GetY() - 5), 10 + (Loader.Settings.Resolution + 1) * 4, Convert.ToInt32(_parent.Dimensions.GetY()) + 10), (Loader.Settings.Resolution + 1) * 2f, _parent.IsClicked() ? BorderColor with { a = 255 } : BorderColor with { a = 200 });

        _parent.Display.Renderer.Draw();
    }
}
```

## ToggleRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\ToggleRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class ToggleRenderer : AnimatableRenderer
{
    public ToggleRenderer(Toggle parent) : base(parent, "velocity.ui.toggle." + Guid.NewGuid()) { }

    public override void Draw()
    {
        Raylib.DrawRectangle((int)Parent.Position.X, (int)Parent.Position.Y, (int)Parent.Dimensions.X, (int)Parent.Dimensions.X, InternalBg);
        Raylib.DrawRectangleLinesEx(new Rectangle((int)Parent.Position.X, (int)Parent.Position.Y, (int)Parent.Dimensions.X, (int)Parent.Dimensions.X), (Loader.Settings.Resolution + 1) * 2f, InternalBorder);
        
        if (Convert.ToBoolean(Parent.GetValue())) Raylib.DrawRectangle((int)Parent.Position.X + 10, (int)Parent.Position.Y + 10, (int)Parent.Dimensions.X - 20, (int)Parent.Dimensions.X - 20, InternalBorder);
        Parent.Display?.Renderer?.Draw();
    }
}
```

## ValueFieldRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\Element\ValueFieldRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render.Element;

public class ValueFieldRenderer : ConditionalRenderer
{
    private readonly ValueField _parent;
    
    public ValueFieldRenderer(ValueField parent) : base("velocity.value-field." + Guid.NewGuid())
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X + 12, (int)_parent.Dimensions.Y, _parent.BgColor);
        Raylib.DrawRectangleLinesEx(new Rectangle((int)_parent.Position.X, (int)_parent.Position.Y, (int)_parent.Dimensions.X + 12, (int)_parent.Dimensions.Y), (Loader.Settings.Resolution + 1) * 2f, _parent.TextColor);
        var textX = (_parent.Position.X + _parent.Dimensions.X / 2) - Convert.ToSingle(Math.Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, _parent.Value, (float)_parent.Dimensions.GetY() - 8, 4f)).X / 2);
        var textY = (_parent.Position.Y + _parent.Dimensions.Y / 2) - Convert.ToSingle(Math.Vector2.ToCustom(Raylib.MeasureTextEx(FontUtils.ButtonFont, _parent.Value, (float)_parent.Dimensions.GetY() - 8, 4f)).Y / 2);
        Raylib.DrawTextEx(FontUtils.ButtonFont, _parent.Value, new Vector2(Convert.ToSingle(textX) + 6, Convert.ToSingle(textY)), (int)_parent.Dimensions.Y - 8, 4f, _parent.TextColor);
    }
}
```

## EndScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\EndScreenRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class EndScreenRenderer : UiRenderer
{
    private readonly EndScreen _parent;
    public int Count = 0;
    public int Step = 0;
    private int _stay = 20;

    public EndScreenRenderer(EndScreen parent) : base("velocity:window." + EndScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        switch (Step)
        {
            case 0:
                if (Count < 100) Count += 5;
                if (Count == 100) Step = 1;
                break;
            case 1:
                _stay--;
                if (_stay == 0)
                {
                    _stay = 20;
                    Step = 2;
                }
                break;
            case 2:
                if (Count > 0) Count -= 5;
                if (Count == 0) Step = 3;
                break;
        }
        

        if (Step == 2 || Step == 3)
        {
            Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(10, 10, 30, 200));

            foreach(Button? button in _parent.Buttons.Values)
            {
                button?.Renderer?.Draw();
            }
        
            Raylib.DrawTextEx(FontUtils.Font, "Thank you for playing!\nMade by Reuben Yates", new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Thank you for playing!\nMade by Reuben Yates", 65, 2).X / 2, 300), 65, 2, Color.WHITE);
            TimeSpan tspan = Loader.Game.Timer.Elapsed;
            string text = $"{tspan.Minutes:00}:{tspan.Seconds:00}.{tspan.Milliseconds / 10:00}";
            Raylib.DrawTextEx(FontUtils.Font, "Time: " + text, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Time: " + text, 55, 2).X / 2, 410), 55, 2, Color.WHITE);
            Raylib.DrawTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, 55, 2).X / 2, 460), 55, 2, Color.WHITE);
        } 

        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(0, 0, 0, (int)(255d * (Count / 100d))));
    }
}
```

## LevelScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\LevelScreenRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class LevelScreenRenderer : UiRenderer
{
    private readonly LevelScreen _parent;
    
    public LevelScreenRenderer(LevelScreen parent) : base("velocity:window." + LevelScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(10, 10, 30, 200));
        
        Raylib.BeginScissorMode(20, 140, 740, WindowManager.Height - 170);
        
        Raylib.DrawRectangle(20, 140, 740, WindowManager.Height - 170, Color.BLACK);
        foreach (var pair in _parent.Buttons)
        {
            pair.Value.Renderer.Draw();
        }
        
        Raylib.EndScissorMode();
        
        _parent.LevelField.Renderer.Draw();
        _parent.PlayButton.Renderer.Draw();
        
        Raylib.DrawRectangle(0,0, WindowManager.Width, 110, new Color(40, 40, 40, 200));
        Raylib.DrawLine(0, 110, WindowManager.Width, 110, Color.DARKGRAY);
        Raylib.DrawTextEx(FontUtils.Font, "Level Select", new Vector2(30, 20), 65, 2, Color.WHITE);
    }
}
```

## LoadingScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\LoadingScreenRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class LoadingScreenRenderer : UiRenderer
{
    private readonly LoadingScreen _parent;
    
    public LoadingScreenRenderer (LoadingScreen parent) : base("velocity:screens.loading")
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, Color.BLACK);
        
        Raylib.DrawText(LoadingScreen.Text, (int)(WindowManager.Width / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 64, 2).X / 2), (int)(WindowManager.Height / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 64, 2).Y / 2), 64, Color.WHITE with { a = (byte)_parent.Alpha});
        Raylib.DrawText(LoadingScreen.Subtext, (int)(WindowManager.Width / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Subtext, 34, 2).X / 2), (int)(WindowManager.Height / 2 - Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Subtext, 34, 2).Y / 2 + Raylib.MeasureTextEx(Raylib.GetFontDefault(), LoadingScreen.Text, 34, 2).Y + 20), 34, Color.WHITE with { a = (byte)_parent.Alpha});
    }
}
```

## MainMenuScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\MainMenuScreenRenderer.cs`

```csharp
using System.Numerics;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class MainMenuScreenRenderer : UiRenderer
{
    private readonly MainMenuScreen _parent; // The parent screen
    private readonly Texture2D _background; // The background texture

    public MainMenuScreenRenderer(MainMenuScreen parent) : base("velocity:window." + MainMenuScreen.UiId)
    {
        _parent = parent;

        _background = Loader.AssetManager.GetTexture("background.mainmenu");
    }

    public override void Draw()
    {
        Raylib.DrawTexturePro(_background, new Rectangle(0, 0, _background.width, _background.height), new Rectangle(0, 0, WindowManager.Width, WindowManager.Height), new Vector2(), 0, Color.WHITE);
        Raylib.DrawRectangleGradientH(0, 0, WindowManager.Width, WindowManager.Height, Color.BLACK with {a = 255}, Color.BLACK with {a = 20});
        int x = Convert.ToInt32(WindowManager.Width / 18.29);
        int fontSize = Convert.ToInt32(WindowManager.Height / 10);
        
        Raylib.DrawTextEx(FontUtils.Font, GameConst.Name, new Vector2(x, WindowManager.Height / 6 - (fontSize / 2)), fontSize, 2, Color.WHITE);

        foreach (var pair in _parent.Buttons)
        {
            if (pair.Value?.Renderer == null) throw new VelocityException("Element renderer undefined");
            pair.Value.Renderer.Draw();
        }
        
        Raylib.DrawRectangle((int)_parent.PlayerPreview.Position.X + 20, (int)_parent.PlayerPreview.Position.Y + 170, (int)_parent.PlayerPreview.Dimensions.X - 40, (int)_parent.PlayerPreview.Dimensions.Y - 150 + (int)_parent.AppearanceSelector.Dimensions.Y + 40, new Color(30, 30, 30, 150));
        
        _parent.PlayerPreview.Renderer?.Draw();
        
        if (_parent.AppearanceSelector.Renderer?.GetType().BaseType == typeof(AnimatableRenderer))
        {
            AnimatableRenderer renderer = (AnimatableRenderer) _parent.AppearanceSelector.Renderer;
            renderer.DrawAnimation();
        }
        _parent.AppearanceSelector.Renderer?.Draw();


        Raylib.DrawRectangle(0, WindowManager.Height - 25, WindowManager.Width, 25, Color.BLACK);
        Raylib.DrawText(GameConst.Author + ", 2023", 4, WindowManager.Height - 23, 26, Color.WHITE);
        Raylib.DrawText("v" + GameConst.Version, WindowManager.Width - Raylib.MeasureText("v" + GameConst.Version, 26) - 4, WindowManager.Height - 23, 26, Color.WHITE);
    }
}
```

## PauseScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\PauseScreenRenderer.cs`

```csharp
using System.Numerics;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using Raylib_cs;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class PauseScreenRenderer : UiRenderer
{
    private readonly PauseScreen _parent;

    public PauseScreenRenderer(PauseScreen parent) : base("velocity:window." + PauseScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        Raylib.DrawRectangle(10, 10, WindowManager.Width - 20, WindowManager.Height - 20, new Color(60, 60, 60, 200));
        Raylib.DrawRectangle(0, 0, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        Raylib.DrawTextEx(FontUtils.Font, "Paused", new Vector2(10, 10), (int)SettingsScreen.Safezone.Y - 20, 2, Color.WHITE);

        foreach (var pair in _parent.Buttons)
        {
            if (pair.Value?.Renderer == null) throw new VelocityException("Element renderer undefined ");
            pair.Value.Renderer.Draw();
        }
    }
}
```

## SettingsScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\SettingsScreenRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window.Render.Renderers;
using System.Numerics;
using Velocity.Exception;
using Velocity.Window;

namespace Velocity.Ui.Render;

public class SettingsScreenRenderer : UiRenderer
{
    private SettingsScreen _parent;

    public SettingsScreenRenderer(SettingsScreen parent) : base("velocity:window." + SettingsScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        int fontSize = Convert.ToInt32(WindowManager.Height / 22);
        
        Raylib.DrawRectangle(10, 10, WindowManager.Width - 20, WindowManager.Height - 20, new Color(60, 60, 60, 200));
        
        _parent.PageElements.TryGetValue(_parent.Page, out Dictionary<string, UiElement>? elements);
        if (elements == null)
            throw new VelocityException("No elements on page " + _parent.Page + " on window " + SettingsScreen.UiId);
        foreach (var elementPair in elements)
        {
            if (elementPair.Value.Renderer == null) throw new VelocityException("No renderer for element " + elementPair.Key + " on window " +
                SettingsScreen.UiId);

            if (elementPair.Value.Renderer.GetType().BaseType == typeof(AnimatableRenderer))
            {
                AnimatableRenderer renderer = (AnimatableRenderer) elementPair.Value.Renderer;
                renderer.DrawAnimation();
            }

            elementPair.Value.Renderer.Draw();
            
            Raylib.DrawLineEx(new Vector2((int)SettingsScreen.Safezone.X, (int)elementPair.Value.Position.Y + (int)elementPair.Value.Dimensions.Y + 25), new Vector2(WindowManager.Width - (int)SettingsScreen.Safezone.X, (int)elementPair.Value.Position.Y + (int)elementPair.Value.Dimensions.Y + 25), (Loader.Settings.Resolution + 1) * 2f, new Color(100, 100, 100, 255));
        }
        
        _parent.PageLabels.TryGetValue(_parent.Page, out List<Label>? labels);
        if (labels == null)
            throw new VelocityException("No elements on page " + _parent.Page + " on window " + SettingsScreen.UiId);
        
        foreach (var label in labels)
        {
            if (label.Renderer == null) throw new VelocityException("No renderer for label " + label.Text + " on window " +
                SettingsScreen.UiId);
            
            label.Renderer.Draw();
        }

        Raylib.DrawRectangle(0, 0, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        Raylib.DrawRectangle(0, (int)WindowManager.Height - (int)SettingsScreen.Safezone.Y, WindowManager.Width, (int)SettingsScreen.Safezone.Y, new Color(30, 30, 30, 255));
        
        Vector2 size0 = Raylib.MeasureTextEx(FontUtils.Font, GetPageName(-1), fontSize, 2);
        Vector2 size1 = Raylib.MeasureTextEx(FontUtils.Font, GetPageName(), fontSize, 2);

        Raylib.DrawTextEx(FontUtils.Font, GetPageName(-1), new Vector2(WindowManager.Width / 2 - size1.X / 2 - size0.X - fontSize, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.GRAY);
        Raylib.DrawTextEx(FontUtils.Font, GetPageName(), new Vector2(WindowManager.Width / 2 - size1.X / 2, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.WHITE);
        Raylib.DrawTextEx(FontUtils.Font, GetPageName(1), new Vector2(WindowManager.Width / 2 + size1.X / 2 + fontSize, WindowManager.Height / 20 - (fontSize / 2)), fontSize, 2, Color.GRAY);

        foreach (var buttonPair in _parent.Buttons)
        {
            if (buttonPair.Value.Renderer == null)
                throw new VelocityException("No renderer for button " + buttonPair.Key + " on window " +
                                            SettingsScreen.UiId);
            
            buttonPair.Value.Renderer.Draw();
        }
    }
    private string GetPageName(int offset = 0)
    {
        int page = _parent.Page + offset;
        if (_parent.Page + offset + 1 > _parent.PageNames.Length) page = 0;
        if (_parent.Page + offset < 0) page = 2;

        return _parent.PageNames[page] + " Settings";   
    }
}
```

## WinScreenRenderer.cs
**Location:** `Velocity-NEA\Velocity\Ui\Render\WinScreenRenderer.cs`

```csharp
using System.Numerics;
using Raylib_cs;
using Velocity.Ui.Misc;
using Velocity.Ui.Screens;
using Velocity.Window;
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Render;

public class WinScreenRenderer : UiRenderer
{
    private readonly WinScreen _parent;
    public int Count;
    public int Step;
    private int _stay = 20;

    public WinScreenRenderer(WinScreen parent) : base("velocity:window." + WinScreen.UiId)
    {
        _parent = parent;
    }

    public override void Draw()
    {
        switch (Step)
        {
            case 0:
                if (Count < 100) Count += 5;
                if (Count == 100) Step = 1;
                break;
            case 1:
                _stay--;
                if (_stay == 0)
                {
                    _stay = 20;
                    Step = 2;
                }
                break;
            case 2:
                if (Count > 0) Count -= 5;
                if (Count == 0) Step = 3;
                break;
        }
        

        if (Step is 2 or 3)
        {
            Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(10, 10, 30, 200));

            foreach(Button? button in _parent.Buttons.Values)
            {
                button?.Renderer?.Draw();
            }
        
            Raylib.DrawTextEx(FontUtils.Font, "Level Completed!", new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Level Completed!", 65, 2).X / 2, 300), 65, 2, Color.WHITE);
            TimeSpan tspan = Loader.Game.Timer.Elapsed;
            string text = $"{tspan.Minutes:00}:{tspan.Seconds:00}.{tspan.Milliseconds / 10:00}";
            Raylib.DrawTextEx(FontUtils.Font, "Time: " + text, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Time: " + text, 55, 2).X / 2, 410), 55, 2, Color.WHITE);
            Raylib.DrawTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, new Vector2(WindowManager.Width / 2 - Raylib.MeasureTextEx(FontUtils.Font, "Coins: " + Loader.Game.Coins, 55, 2).X / 2, 460), 55, 2, Color.WHITE);
        } 

        Raylib.DrawRectangle(0, 0, WindowManager.Width, WindowManager.Height, new Color(0, 0, 0, (int)(255d * (Count / 100d))));
    }
}
```

## EndScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\EndScreen.cs`

```csharp
using Raylib_cs;
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public abstract class EndScreen : Window
{
    public new static readonly int UiId = 4; // The ui id

    public readonly Dictionary<int, Button?> Buttons = new(); // The buttons

    private readonly EndScreenRenderer _renderer; // The renderer


    protected EndScreen()
    {
        _renderer = new EndScreenRenderer(this);
        base.Renderer = _renderer;
        
        RegisterButtons();
    }

    public override void OnDisplay(int? previous)
    {
        _renderer.Count = 0;
        _renderer.Step = 0;
    }

    public override void Tick()
    {
        foreach (var pair in Buttons.Where(pair => pair.Value == null || pair.Value.IsClicked()))
        {
            switch (pair.Key)
            {
                case 0:
                    Loader.Game.Reset();
                    Loader.Game.MenuManager.DisableAll();
                    Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK);
                    break;
                case 1:
                    Loader.Game.Stop();
                    Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId);
                    LoadingScreen.Trigger("Returning to Main Menu", 
                        "Please wait...",
                        () =>
                        {
                            Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
                            return 0;
                        }, false, 140);
                    
                    break;
            }
        }

        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
    }
    
    private void RegisterButtons()
    {
        AddButton(0, "Restart");
        AddButton(1, "Main Menu");
    }


    private void AddButton (int id, string text)
    {
        Text buttonText = new Text
        {
            Color = Color.WHITE,
            FontSize = 48,
            Data = text,
            Font = FontUtils.ButtonFont
        };
        
        int x = WindowManager.Width / 2 - 275 + (id * (450 + 20));
        
        Button button = new Button(buttonText, new Vector2(x, WindowManager.Height - 230), new Vector2(400, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        };
        
        Buttons.Add(id, button);
    }
}
```

## LevelScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\LevelScreen.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Statistics;
using Velocity.Ui.Misc;
using Velocity.Math;
using Velocity.Ui.Render;
using Velocity.Utils;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class LevelScreen : Window
{
    public new static readonly int UiId = 3; // Unique id for this screen

    public readonly Dictionary<int, Button?> Buttons = new(); // Buttons on the screen

    public Button PlayButton; // Play button on the screen
    
    public readonly LevelField LevelField = new(); // Level field on the screen
    
    public LevelScreen() // Constructor
    {
        Renderer = new LevelScreenRenderer(this); // Set the renderer
        
        RegisterButtons(); // Register the buttons

        RegisterPlayButton(); // Register the play button
    }

    public override void OnDisplay(int? previous) // Called when the window is opened
    {
        base.OnDisplay(previous); // Call the base function
        LevelField.SelectedLevel = null; // Set the selected level to null
        
        if (previous == MainMenuScreen.UiId) // If the previous window was the main menu
        {
            Loader.Game.BackgroundRenderer.LoadTextures(); // Load the background textures
            Loader.Game.BackgroundRenderer.IsEnabled = true; // Enable the background renderer
        } 
    }

    public override void Tick() // Called every frame the window is open for
    {
        int lowestY = 0; // Lowest y value of the buttons
        int highestY = WindowManager.Height; // Highest y value of the buttons
        
        foreach (var pair in Buttons) // Loop through the buttons
        {
            // For scrolling
            if (lowestY < pair.Value.Position.Y + pair.Value.Dimensions.Y) lowestY = (int) pair.Value.Position.Y; // Set the lowest y value
            if (highestY > pair.Value.Position.Y) highestY = (int)pair.Value.Position.Y - 70; // Set the highest y value
            
            Color color = pair.Value.BgColor; // Get the button color
            
            if (pair.Value.IsMouseOver()) // If the mouse is over the button
            {
                color.a = 255; // Set the alpha to 255
                pair.Value.BgColor = color; // Set the button color
            }
            else
            {
                color.a = 100; // Set the alpha to 100
                pair.Value.BgColor = color; // Set the button color
            }

            if (pair.Value.IsClicked()) // If the button is clicked
            {
                Select(pair.Key); // Select the button
            }
        }

        bool result = PlayButton.IsClicked(); // Get the result of the play button click

        if (result && LevelField.SelectedLevel != null) // If the play button is clicked and a level is selected
        {
            Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the active window to the loading screen
            LoadingScreen.Trigger(LevelField.SelectedLevel.Name, 
                "Time to beat: " +
                StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(LevelField.SelectedLevel.Id)),
                () =>
                {
                    Loader.Game.LevelManager.SelectLevel(LevelField.SelectedLevel.Id);
                    Loader.Game.Run();
                    Loader.Game.MenuManager.DisableAll();
                    Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK);
                    return 0;
                }); // Trigger the loading screen with the level name and time to beat, and on completion load the level, run the game, and trigger a fadeout effect
        }
        else if (LevelField.SelectedLevel == null) // If no level is selected
        {
            PlayButton.Active = false; // Disable the play button
        }
        else // If a level is selected
        {
            PlayButton.Active = true; // Enable the play button
        }

        // For scrolling
        if (Raylib.GetMouseWheelMove() != 0)  // If the mouse wheel is moved
        { 
            int offset = (int) Raylib.GetMouseWheelMove() * 20; // Get the offset

            if (lowestY + 170 + offset < WindowManager.Height) offset = 0; // If the lowest y value is less than the window height, set the offset to 0
              
            if (highestY + offset > 70) offset = 0; // If the highest y value is greater than 70, set the offset to 0
            
            foreach (var elementPair in Buttons) // Loop through the buttons
            {
                elementPair.Value.Position.Y += offset; // Add the offset to the button's y value
            }
        }

        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // If escape is pressed, set the active window to the main menu
    }
    
    private void RegisterButtons() // Register the buttons
    {
        foreach (var level in Loader.Game.LevelManager.GetLevels()) // Loop through the levels
        {
            if (level == null) continue; // If the level is null, skip it
             
            string name = level.Name; // Get the level name

            int id = Buttons.Count; // Get the button id
            
            AddButton(id, name); // Add the button
        }
    }

    private void Select(int buttonId)  // Select a level
    {
        LevelField.SelectLevel(buttonId); // Select the level
    }

    private void RegisterPlayButton() // Register the play button
    {
        Text buttonText = new Text 
        {
            Color = Color.WHITE,
            FontSize = 48, 
            Data = "Play",
            Font = FontUtils.ButtonFont
        }; // Create the button text

        PlayButton = new Button(buttonText, new Vector2(WindowManager.Width - 360, WindowManager.Height - 180), new Vector2(300, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button
    }

    private void AddButton (int id, string text) // Add a button to the screen
    {
        Text buttonText = new Text 
        {
            Color = Color.WHITE,
            FontSize = 48,
            Data = text,
            Font = FontUtils.ButtonFont
        }; // Create the button text
        
        int y = (Buttons.Count + 1) * 140 + 20; // Get the y value of the button
        
        Button button = new Button(buttonText, new Vector2(40 + (OsVersion.GetOS() == OsVersion.Os.MacOs ? 20 : 0), y), new Vector2(700, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button
        
        Buttons.Add(id, button); // Add the button to the list
    }
}

```

## LoadingScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\LoadingScreen.cs`

```csharp
using Velocity.Ui.Render;

namespace Velocity.Ui.Screens;

public class LoadingScreen : Window
{
    public new static readonly int UiId = 6; // The ui id

    private const int Fade = 30; // The fade time
    private static int _hang = 200; // The hang time (how long the screen stays on, frames)

    private int _counter; // The counter for the fade and hang
    private int _step; // The step of the loading screen (fading in out, hanging, etc)

    public int Alpha; // The alpha of the loading screen

    private static bool _countDown; // Whether to count down or not
    public static string Text = ""; // The text of the loading screen
    public static string Subtext = ""; // The subtext of the loading screen

    private static Func<ValueType>? _onFinish; // The callback when the loading screen is finished

    public LoadingScreen() // The constructor
    {
        Renderer = new LoadingScreenRenderer(this); // Set the renderer
    }

    public override void OnDisplay(int? previous) // When the screen is displayed
    {
        _step = 0;      // Reset the step
        _counter = 0;   // Reset the counter
        Alpha = 0;      // Reset the alpha
    }

    public static void Trigger(string text, string subtext, Func<ValueType>? callback = null, bool countDown = true, int hang = 200) // Trigger the loading screen
    {
        Text = text;            // Set the text
        Subtext = subtext;      // Set the subtext
        _onFinish = callback;   // Set the callback
        _countDown = countDown; // Set the countdown
        _hang = hang;           // Set the hang time
    }

    public override void Tick() // Tick the loading screen
    {
        switch (_step) // Switch the step
        {
            case 0: // Fade in
                if (_counter >= Fade) // If the counter is greater than the fade time
                {
                    _step++; // Increment the step
                    break; // Break
                }

                Alpha = (int)(255d * ((double)_counter / Fade)); // Set the alpha to the counter divided by the fade time multiplied by 255 
                _counter++; // Increment the counter  
                break;
            case 1: // Hang
                if (_counter >= Fade + _hang) // If the counter is greater than the fade time plus the hang time
                {
                    _step++; // Increment the step
                    break; // Break
                }

                Alpha = 255; // Set the alpha to 255

                _counter++; // Increment the counter
                break;
            case 2: // Fade out
                if (_counter >= Fade * 2 + _hang) // If the counter is greater than the fade time multiplied by 2 plus the hang time
                {
                    _step++; // Increment the step
                    break; // Break
                }
                
                Alpha = (int)(255d * (1 - ((double)_counter - Fade - _hang) / Fade)); // Set the alpha to 255 minus the counter minus the fade time minus the hang time divided by the fade time multiplied by 255

                _counter++; // Increment the counter
                break;
            case 3: // Finish
                _onFinish?.Invoke(); // Invoke the callback
                Alpha = 0; // Set the alpha to 0
                break; // Break
        }

        if (!_countDown) return; // If not counting down, return
        if (_counter >= Fade * 2 + _hang - 180) Text = "3"; // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 180, set the text to 3
        if (_counter >= Fade * 2 + _hang - 120) Text = "2"; // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 120, set the text to 2
        if (_counter >= Fade * 2 + _hang - 60) Text = "1";  // If the counter is greater than the fade time multiplied by 2 plus the hang time minus 60, set the text to 1
    }
}
```

## MainMenuScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\MainMenuScreen.cs`

```csharp
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Raylib_cs;
using Velocity.Ui.Render.Element;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class MainMenuScreen : Window
{
    public new static readonly int UiId = 2; // Unique id for this screen

    public readonly Dictionary<int, Button?> Buttons = new(); // Buttons on the screen
    
    public readonly PlayerPreview PlayerPreview = new(); // Player preview on the screen
    
    public readonly Selector AppearanceSelector; // Selector for the player appearance

    private bool[] _hasSoundPlayed = new bool[4]; // Whether the sound has played (stop buttons double activating the sound)
    public MainMenuScreen()
    {
        RegisterButtons(); // Register the buttons
        Renderer = new MainMenuScreenRenderer(this); // Set the renderer
        string?[] names = new string?[3] {"Swordsman", "Archer", "Wizard"}; // Names for the player appearance selector
        AppearanceSelector = new Selector(names, Loader.Game.Player.Appearance - 1, new Vector2(400, 80)); // Create the selector
        AppearanceSelector.Position = new Vector2(WindowManager.Width / 1.3 - 200, WindowManager.Height / 2 + 230); // Set the position
    }

    private void RegisterButtons()
    {
        AddButton(0, "Play"); // Add the play button
        // AddButton(1, "Statistics"); // TODO
        AddButton(1, "Options"); // Add the options button
        AddButton(2, "Exit"); // Add the exit button
    }

    // Called every frame the window is open for
    public override void Tick()
    {
        foreach (var pair in Buttons) // Loop through the buttons
        {
            Button? clicked = pair.Value; // Get the button
            if (clicked == null) continue; // If the button is null, skip it

            if (clicked.IsClicked()) // If the button is clicked
            {
                Select(pair.Key); // Select the button
            }
        }

        if (AppearanceSelector.IsClicked()) // If the appearance selector is clicked
        {
            Loader.Game.Player.Appearance = AppearanceSelector.Index + 1; // Set the player appearance to the selected appearance
        }
    }

    // Called when a button is pressed
    private void Select(int buttonId)
    {
        switch (buttonId)
        {
            case 0: // Play
                Loader.Game.MenuManager.SetActiveWindow(LevelScreen.UiId, UiId); // Set the active window to the level screen
                break;
            case -1: // Statistics
                // TODO OPTIONS
                break;
            case 1: // Options
                Loader.Game.MenuManager.SetActiveWindow(SettingsScreen.UiId, UiId); // Set the active window to the settings screen
                break;
            case 2: // Exit
                Loader.Close(); // Close the game
                break;
        }
    }

    private void AddButton (int id, string text) // Add a button to the screen 
    {
        Text buttonText = new Text();

        buttonText.Color = new Color(200, 200, 200, 255);
        buttonText.FontSize = Convert.ToInt32(WindowManager.Height / 18);
        buttonText.Data = text;
        buttonText.Font = FontUtils.ButtonFont;

        int y = Convert.ToInt32(WindowManager.Height / 2 - (Convert.ToInt32(WindowManager.Height / 5.145) - WindowManager.Height / 16) + (Buttons.Count) * (WindowManager.Height / 8));

        Button? button = new Button(
            buttonText,
            new Vector2(Convert.ToInt32(WindowManager.Width / 18.29), y),
            new Vector2(Convert.ToInt32(WindowManager.Width / 4.65), Convert.ToInt32(WindowManager.Height / 10.29)));
        button.BgColor = new Color(40, 40, 40, 200);
        button.BorderColor = Color.WHITE;
        
        Buttons.Add(id, button);
    }
}
```

## PauseScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\PauseScreen.cs`

```csharp
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Raylib_cs;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class PauseScreen : Window
{
    public new static readonly int UiId = 5; // The ui id

    public readonly Dictionary<int, Button?> Buttons = new();  // The buttons
    
    public PauseScreen() // The constructor
    {
        RegisterButtons(); // Register the buttons
        Renderer = new PauseScreenRenderer(this); // Set the renderer
    }

    private void RegisterButtons() // Register the buttons
    {
        AddButton(0, "Resume");     // Add the resume button
        AddButton(1, "Restart");    // Add the restart button
        AddButton(2, "Options");    // Add the options button
        AddButton(3, "Main Menu");  // Add the main menu button
    }

    public override void Tick() // Tick the pause screen
    {
        foreach (var pair in Buttons) // For each button
        {
            Button? clicked = pair.Value; // Get the button
            if (clicked == null) continue; // If the button is null, continue
 
            if (clicked.IsClicked()) Select(pair.Key); // If the button is clicked, select it
        }
    }

    private void Select(int buttonId) // Select a button
    {
        switch (buttonId) // Switch the button id
        {
            case 0: // Resume
                Loader.Game.Resume(); // Resume the game
                Loader.Game.MenuManager.DisableAll(); // Disable all menus
                break;
            case 1: // Restart
                Loader.Game.Reset(); // Reset the game
                Loader.Game.MenuManager.DisableAll(); // Disable all menus
                Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK); // Trigger a black flash
                break;
            case 2: // Options
                Loader.Game.MenuManager.SetActiveWindow(SettingsScreen.UiId, UiId); // Set the settings screen as the active window
                break; 
            case 3: // Main Menu
                Loader.Game.Stop(); // Stop the game 
                Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window
                LoadingScreen.Trigger("Returning to Main Menu",  
                    "Please wait...",
                    () =>
                    {
                        Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
                        return 0;
                    }, false, 140); // Trigger the loading screen with a callback to set the main menu as the active window 
                break;
        }
    }

    private void AddButton (int id, string text) // Add a button
    {
        Text buttonText = new Text
        {
            Color = new Color(200, 200, 200, 255), // Set the color
            FontSize = Convert.ToInt32(WindowManager.Height / 18), // Set the font size
            Data = text, // Set the data
            Font = FontUtils.ButtonFont // Set the font
        }; // The button text

        int y = Convert.ToInt32(WindowManager.Height / 2 - (Convert.ToInt32(WindowManager.Height / 5.145) - WindowManager.Height / 16) + (Buttons.Count) * (WindowManager.Height / 8)); // Calculate the y position of the button based on the number of buttons

        Button button = new Button(
            buttonText,
            new Vector2(Convert.ToInt32(WindowManager.Width / 18.29), y),
            new Vector2(Convert.ToInt32(WindowManager.Width / 4.65), Convert.ToInt32(WindowManager.Height / 10.29)))
            {
                BgColor = new Color(40, 40, 40, 200), // Set the background color
                BorderColor = Color.WHITE // Set the border color
            }; // Create the button with the text, position, and size

        Buttons.Add(id, button); // Add the button
    }
}
```

## SettingsScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\SettingsScreen.cs`

```csharp
using Raylib_cs;
using Velocity.Exception;
using Velocity.Math;
using Velocity.Ui.Misc;
using Velocity.Ui.Render;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class SettingsScreen : Window
{
    public new static int UiId = 1; // Unique id for this screen

    public int Page = 0; // The current page

    public static readonly Vector2 Safezone = new (100, 120); // The safezone for the screen
    
    public Dictionary<int, Dictionary<string, UiElement>> PageElements = new(4); // The elements on the screen
    public readonly Dictionary<int, Button> Buttons = new(); // The buttons on the screen
    public Dictionary<int, List<Label>> PageLabels = new(); // The labels on the screen

    public int Offset = 0; // The offset  for the elements (for scrolling)
    public int PrevOffset = 0; // The previous offset for the elements (for scrolling)
    
    public readonly string[] PageNames = { "Video", "Audio", "Controls" }; // The names of the pages

    private int? _previousWindow; // The previous window to return to on close

    public SettingsScreen() // Constructor
    {
        RegisterButtons(); // Register the buttons
        Renderer = new SettingsScreenRenderer(this); // Set the renderer
    }

    public override void OnDisplay(int? previous) // Called when the window is opened
    {
        PageElements = new Dictionary<int, Dictionary<string, UiElement>>(); // Reset the elements
        PageLabels = new Dictionary<int, List<Label>>(); // Reset the labels
        _previousWindow = previous;  // Set the previous window

        if (previous == MainMenuScreen.UiId) // If the previous window was the main menu
        {
            Loader.Game.BackgroundRenderer.LoadTextures(); // Load the background textures
            Loader.Game.BackgroundRenderer.IsEnabled = true;    // Enable the background renderer
        }
        
        RegisterElements(); // Register the elements
        Page = 0; // Set the page to 0
    } 

    private void RegisterButtons() // Register the buttons
    {
        AddButton(0, "Reset", new Vector2(WindowManager.Width - Convert.ToInt32(WindowManager.Width / 12) - Convert.ToInt32(WindowManager.Height / 15.4) / 2, WindowManager.Height - Safezone.Y / 2 - (WindowManager.Height / 15.4) / 2)); // Add the reset button
        AddButton(1, "Back", new Vector2(Convert.ToInt32(WindowManager.Height / 15.4) / 2, WindowManager.Height - Safezone.Y / 2 - (WindowManager.Height / 15.4) / 2)); // Add the back button
        
        AddButton(2, ">", new Vector2(WindowManager.Width - Safezone.X * 2 - 80, Safezone.Y / 5), 75); // Add the next page button
        AddButton(3, "<", new Vector2(Safezone.X * 2 - 80, Safezone.Y / 5), 75); // Add the previous page button
    }

    private void RegisterElements() // Register the elements
    {
        RegisterElement(0, "camera_smoothness", "Camera Smoothness",  new Slider(0, 0.95, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.CameraLinearity)); // Add the camera smoothness slider
        RegisterElement(0, "resolution", "Resolution", new Selector(Settings.GetResolutionsArray(), Loader.Settings.Resolution, new Vector2(WindowManager.Width / 5, WindowManager.Height / 14))); // Add the resolution selector
        RegisterElement(0, "fullscreen", "Fullscreen", new Toggle(Loader.Settings.FullScreen, new Vector2(50, 50))); // Add the fullscreen toggle
        
        RegisterElement(1, "audio_master", "Master Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.Volume)); // Add the master volume slider
        RegisterElement(1, "audio_game", "Game Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.GameVolume)); // Add the game volume slider
        RegisterElement(1, "audio_ui", "UI Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.UiVolume)); // Add the ui volume slider
        RegisterElement(1, "audio_player", "Player Volume",  new Slider(0, 1, new Vector2(WindowManager.Width - (WindowManager.Width / 3 + 40) - Safezone.X, WindowManager.Height / 32), Loader.Settings.PlayerVolume)); // Add the player volume slider

        RegisterElement(2, "control_interact", "Interact", new ControlField(Loader.Settings.Keybind.Interact)); // Add the interact control field
        RegisterElement(2, "control_left", "Left", new ControlField(Loader.Settings.Keybind.Left)); // Add the left control field
        RegisterElement(2, "control_right", "Right", new ControlField(Loader.Settings.Keybind.Right)); // Add the right control field
        RegisterElement(2, "control_jump", "Jump", new ControlField(Loader.Settings.Keybind.Jump)); // Add the jump control field
        RegisterElement(2, "control_down", "Down", new ControlField(Loader.Settings.Keybind.Down)); // Add the down control field (unused)
        RegisterElement(2, "control_zoomin", "Zoom In", new ControlField(Loader.Settings.Keybind.ZoomIn)); // Add the zoom in control field
        RegisterElement(2, "control_zoomout", "Zoom Out", new ControlField(Loader.Settings.Keybind.ZoomOut)); // Add the zoom out control field
    }

    private void AddButton (int id, string text, Vector2 position, int? xd = null) // Add a button to the screen
    {
        Text buttonText = new Text(); // Create the button text

        buttonText.Color = new Color(200, 200, 200, 255); // Set the button text color
        buttonText.FontSize = Convert.ToInt32(WindowManager.Height / 28); // Set the button text font size
        buttonText.Data = text; // Set the button text data
        buttonText.Font = FontUtils.ButtonFont; // Set the button text font
        
        Button? button = new Button(
            buttonText,
            position,
            new Vector2(xd ?? Convert.ToInt32(WindowManager.Width / 12), Convert.ToInt32(WindowManager.Height / 15.4)))
            {
                BgColor = new Color(0, 0, 0, 200), // Set the button background color
                BorderColor = Color.WHITE // Set the button border color
            }; // Create the button

        Buttons.Add(id, button); // Add the button to the screen
    }
    
    private void RegisterElement(int page, string id, string displayName, UiElement element) // Register an element
    {
        CheckPageNumber(page); // Check if the page exists
        
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) return; // If the elements are null, return

        element.Position = GetNextElementPosition(element, page);   // Set the element position
        element.RegisterSubElements(new Vector2(Safezone.X, element.Position.Y - 3)); // Register the sub elements
        element.Display?.Update(); // Update the element display
        elements.Add(id, element); // Add the element to the page
        
        Text labelText = new Text(); // Create the label text
 
        labelText.Color = new Color(200, 200, 200, 255); // Set the label text color
        labelText.FontSize = Convert.ToInt32(WindowManager.Height / 24);    // Set the label text font size
        labelText.Data = displayName;  // Set the label text data
        labelText.Font = FontUtils.ButtonFont; // Set the label text font

        PageLabels.TryGetValue(page, out List<Label>? pageLabels); // Get the labels on the page
        if (pageLabels == null) return; // If the labels are null, return

        Vector2 position = new Vector2(Safezone.X, element.Position.Y - WindowManager.Height / 24 - 5); // Set the label position
        pageLabels.Add(new Label(labelText, position)); // Add the label to the page
    }

    private Vector2 GetNextElementPosition(UiElement element, int page) // Get the next element position
    {
        int x = WindowManager.Width - (int)Safezone.X - (int)element.Dimensions.X; // Set the x position
        
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) return Safezone; // If the elements are null, return the safezone
        
        int yOffset; // The y offset
        if (elements.Count != 0) // If there are elements on the page
        { 
            UiElement? lastElement = elements.Values.Last(); // Get the last element
            yOffset = (int)(lastElement.Position.Y + lastElement.Dimensions.Y / 2); // Set the y offset
        }
        else yOffset = 70; // If there are no elements, set the y offset to 70
        int y = (int)Safezone.Y + yOffset; // Set the y position

        return new Vector2(x, y); // Return the position
    }

    private void CheckPageNumber(int page) // Check if the page exists
    {
        PageElements.TryGetValue(page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        if (elements == null) 
        {
            PageElements.Add(page, new Dictionary<string, UiElement>()); // If the elements are null, add the page
        }
        
        PageLabels.TryGetValue(page, out List<Label>? labels); // Get the labels on the page
        if (labels == null)
        {
            PageLabels.Add(page, new List<Label>()); // If the labels are null, add the page
        }
    }

    public override void Tick()     // Called every frame the window is open for
    {
        PageElements.TryGetValue(Page, out Dictionary<string, UiElement>? elements); // Get the elements on the page
        PageLabels.TryGetValue(Page, out List<Label>? labels); // Get the labels on the page
        if (elements == null && labels == null) throw new VelocityException("No page to apply logic to."); // If the elements and labels are null, throw an exception
        
        int lowestY = 0; // The lowest y position
        int highestY = WindowManager.Height; // The highest y position
        
        foreach (var elementPair in elements) // Loop through the elements
        {
            elementPair.Value.Display.Update(); // Update the element display
            
            if (lowestY < elementPair.Value.Position.Y + elementPair.Value.Dimensions.Y) lowestY = (int) elementPair.Value.Position.Y; // Set the lowest y position
            if (highestY > elementPair.Value.Position.Y) highestY = (int)elementPair.Value.Position.Y - 70; // Set the highest y position

            
            // Stupid nested if statements TODO: change
            if (Page == 2) // If the page is the controls page
            {
                if (elementPair.Value.IsClicked()) // If the element is clicked
                {
                    foreach (var element in elements.Values) // Loop through the elements
                    {
                        if (element is ControlField controlField) // If the element is a control field
                        {
                            if (controlField.Display is ControlValueField controlValueField) // If the element display is a control value field
                            {
                                controlValueField.IsListening = false; // Stop listening for keybinds
                                controlValueField.Value = controlField.GetKey().ToString().Replace("KEY_", ""); // Set the value to the keybind
                            }
                        }
                    }
                     
                    if (elementPair.Value is ControlField selected) // If the element is a control field
                    {
                        if (selected.Display is ControlValueField controlValueField) // If the element display is a control value field
                        {
                            controlValueField.IsListening = true; // Start listening for keybinds
                        }
                    }
                }
            }
            
            switch (elementPair.Key) // Switch the element id
            {
                case "camera_smoothness":  // If the element is the camera smoothness slider
                    if (!elementPair.Value.IsClicked()) continue; // If the element is not clicked, continue
                    Loader.Settings.CameraLinearity = elementPair.Value.GetValue(2); // Set the camera linearity to the slider value
                    continue;
                case "resolution": // .. Etc.
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.Resolution = (int)elementPair.Value.GetValue();
                    Loader.WindowManager.ApplySettingsChange();
                    continue;
                case "fullscreen":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.FullScreen = Convert.ToBoolean(elementPair.Value.GetValue());
                    Loader.WindowManager.ApplySettingsChange();
                    break;
                case "audio_master":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.Volume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateVolume();
                    break;
                case "audio_game":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.GameVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateGameVolume();
                    break;
                case "audio_ui":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.UiVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdateUiVolume();
                    break;
                case "audio_player":
                    if (!elementPair.Value.IsClicked()) continue;
                    Loader.Settings.PlayerVolume = elementPair.Value.GetValue(2);
                    Loader.AudioManager.UpdatePlayerVolume();
                    break;
                case "control_interact":
                    Loader.Settings.Keybind.Interact = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_left":
                    Loader.Settings.Keybind.Left = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_right":
                    Loader.Settings.Keybind.Right = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_jump":
                    Loader.Settings.Keybind.Jump = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_down":
                    Loader.Settings.Keybind.Down = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_zoomin":
                    Loader.Settings.Keybind.ZoomIn = ((ControlField)elementPair.Value).GetKey();
                    break;
                case "control_zoomout":
                    Loader.Settings.Keybind.ZoomOut = ((ControlField)elementPair.Value).GetKey();
                    break;
            }
        }

        if (Raylib.GetMouseWheelMove() != 0) // If the mouse wheel is moved
        {
            int offset = (int) Raylib.GetMouseWheelMove() * 20; // Set the offset

            if (lowestY + 200 + offset < WindowManager.Height) offset = 0; // If the lowest y position + 200 + the offset is less than the window height, set the offset to 0
            if (highestY + offset > 130) offset = 0; // If the highest y position + the offset is greater than 130, set the offset to 0
            
            foreach (var elementPair in elements) // Loop through the elements
            {
                elementPair.Value.Position.Y += offset; // Add the offset to the element position
                elementPair.Value.Display.Position.Y += offset; // Add the offset to the element display position
            } 

            foreach (var label in labels) label.Position.Y += offset; // Loop through the labels and add the offset to the position
            
        }

        foreach (var button in Buttons) // Loop through the buttons
        {
            if (!button.Value.IsClicked()) continue; // If the button is not clicked, continue

            switch (button.Key) // Switch the button id
            {
                case 0:
                    ToDefaults(); // Reset the settings to default
                    break;
                case 1:
                    Loader.Game.MenuManager.SetActiveWindow(_previousWindow ?? MainMenuScreen.UiId); // Set the active window to the previous window
                    Loader.Settings.Save(); // Save the settings
                    if (_previousWindow != null && _previousWindow != PauseScreen.UiId) Loader.Game.BackgroundRenderer.IsEnabled = false; // If the previous window was not the pause screen, disable the background renderer
                    break;
                case 2:
                    if (Page >= 2) Page = 0; // If the page is greater than or equal to 2, set the page to 0
                    else Page++; // Else, increment the page
                    break;
                case 3:
                    if (Page <= 0) Page = 2; // If the page is less than or equal to 0, set the page to 2
                    else Page--; // Else, decrement the page
                    break;
            }

        }
    }
    
    private void ToDefaults () // Reset the settings to default
    {
        Loader.Settings.ToDefault(); // Reset the settings
        Loader.WindowManager.ApplySettingsChange(); // Apply the settings
        Loader.AudioManager.UpdateVolume(); // Update the volume
        PageElements.Clear(); // Clear the elements
        PageLabels.Clear(); // Clear the labels
        RegisterElements(); // Re-register the elements
    }
}

```

## WinScreen.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\WinScreen.cs`

```csharp
using Raylib_cs;
using Velocity.Game.Statistics;
using Velocity.Ui.Misc;
using Velocity.Math;
using Velocity.Ui.Render;
using Velocity.Window;

namespace Velocity.Ui.Screens;

public class WinScreen : Window
{
    public new static readonly int UiId = 4; // The ui id 

    public readonly Dictionary<int, Button?> Buttons = new(); // The buttons

    private readonly WinScreenRenderer _renderer; // The renderer

    public WinScreen() // The constructor
    {
        _renderer = new WinScreenRenderer(this); // Set the renderer
        Renderer = _renderer; // Set the renderer
        
        RegisterButtons(); // Register the buttons
    }

    public override void OnDisplay(int? previous)
    {
        _renderer.Count = 0; // Reset the count
        _renderer.Step = 0; // Reset the step

        if (Loader.Game.Level == null || Loader.Game.LevelManager.GetLevels().Count != Loader.Game.Level.Id - 1) return; // If the level is null or the level id is not the last level, return
        Loader.Game.MenuManager.SetActiveWindow(EndScreen.UiId);  // Set the end screen as the active window
    }

    public override void Tick() // Tick the win screen
    { 
        foreach (var pair in Buttons.Where(pair => pair.Value == null || pair.Value.IsClicked())) // For each button and if the button is clicked 
        {
            switch (pair.Key) // Switch the button id
            {
                case 0: // Restart
                    Loader.Game.Reset(); // Reset the game
                    Loader.Game.MenuManager.DisableAll(); // Disable all menus
                    Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK); // Trigger a black flash
                    break;
                case 1: // Main Menu
                    Loader.Game.Stop(); // Stop the game
                    Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window
                    LoadingScreen.Trigger("Returning to Main Menu", 
                        "Please wait...",
                        () =>
                        {
                            Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId);
                            return 0;
                        }, false, 140); // Trigger the loading screen with the text "Returning to Main Menu" and the subtext "Please wait..." and the callback to set the main menu as the active window
                    
                    break;
                case 2: // Next Level
                    Loader.Game.Stop(); // Stop the game
                    Loader.Game.MenuManager.SetActiveWindow(LoadingScreen.UiId, UiId); // Set the loading screen as the active window

                    if (Loader.Game.Level != null) // If the level is not null
                    {
                        Level.Level next = Loader.Game.LevelManager.GetLevelById(Loader.Game.Level.Id + 1); // Get the next level
                    
                        LoadingScreen.Trigger(next.Name,
                            "Time to beat: " + StatisticManager.SteraliseTime(StatisticManager.GetLevelBestTime(next.Id)),
                            () =>
                            {
                                Loader.Game.LevelManager.LoadNextLevel();
                                Loader.Game.Run();
                                Loader.Game.MenuManager.DisableAll();
                                Loader.Game.ColoredFlashRenderer.Trigger(20, Color.BLACK);
                                return 0;
                            }); // Trigger the loading screen with the text of the next level and the subtext of the time to beat
                    }

                    break;
            }
        }

        if (Raylib.IsKeyPressed(KeyboardKey.KEY_ESCAPE)) Loader.Game.MenuManager.SetActiveWindow(MainMenuScreen.UiId); // If the escape key is pressed, set the main menu as the active window
    }
    
    private void RegisterButtons()
    {
        AddButton(0, "Restart"); // Add the restart button
        AddButton(1, "Main Menu"); // Add the main menu button
        AddButton(2, "Next Level"); // Add the next level button
    }


    private void AddButton (int id, string text) // Add a button
    {
        Text buttonText = new Text
        {
            Color = Color.WHITE,
            FontSize = 48,
            Data = text,
            Font = FontUtils.ButtonFont
        }; // The button text
        
        int x = WindowManager.Width / 2 - 675 + (id * (450 + 20)); // The x position of the button
        
        Button button = new Button(buttonText, new Vector2(x, WindowManager.Height - 230), new Vector2(400, 120))
        {
            BgColor = new Color(40, 40, 40, 200),
            BorderColor = Color.WHITE
        }; // Create the button with the text, position, and size
        
        Buttons.Add(id, button); // Add the button
    }
}

```

## Window.cs
**Location:** `Velocity-NEA\Velocity\Ui\Screens\Window.cs`

```csharp
using Velocity.Window.Render.Renderers;

namespace Velocity.Ui.Screens;

public class Window
{
    public static int UiId; // Unique id for this screen (to be overwriten by child classses) 
    public UiRenderer Renderer; // The renderer object for child class

    public virtual void OnDisplay (int? previous) // Called when the window is opened
    { }
    public virtual void Tick() // Called every frame the window is open for
    { }
}
```

## ColorFormatter.cs
**Location:** `Velocity-NEA\Velocity\Utils\ColorFormatter.cs`

```csharp
using Raylib_cs;

namespace Velocity.Utils;

public class ColorFormatter
{
    private static int H2d(char c) // Convert hex to decimal
    {
        return c switch
        {
            >= '0' and <= '9' => c - '0',
            >= 'A' and <= 'F' => c - 'A' + 10,
            >= 'a' and <= 'f' => c - 'a' + 10,
            _ => 0
        };
    }
    
    public static Color from_string(string s) // Convert hex-code to color instance
    {
        var c = new Color((H2d(s[0])<<4)+H2d(s[1]), (H2d(s[2])<<4)+(byte)H2d(s[3]), (H2d(s[4])<<4)+(byte)H2d(s[5]), s.Length == 8 ? (H2d(s[6])<<4)+H2d(s[7]) : 255);
        return c;
    }
}
```

## IniFile.cs
**Location:** `Velocity-NEA\Velocity\Utils\IniFile.cs`

```csharp
using System.Collections;

namespace Velocity.Utils;

/**
 * @ref https://gist.github.com/Sn0wCrack/5891612
 */
public class IniFile 
{
    private readonly Hashtable _keyPairs = new Hashtable();
    private readonly String _iniFilePath;
 
    private struct SectionPair
    {
        public string? Section;
        public string? Key;
    }
 
    /// <summary>
    /// Opens the INI file at the given path and enumerates the values in the IniParser.
    /// </summary>
    /// <param name="iniPath">Full path to INI file.</param>
    public IniFile(String iniPath)
    {
        TextReader? iniFile = null;
        string? currentRoot = null;

        _iniFilePath = iniPath;

        if (!File.Exists(iniPath))
        {
            TextWriter tw = new StreamWriter(iniPath);
            tw.Write("Velocity Settings");
            tw.Close();
        }
        
        try
        {
            iniFile = new StreamReader(iniPath);

            var strLine = iniFile.ReadLine();

            while (strLine != null)
            {
                strLine = strLine.Trim().ToUpper();

                if (strLine != "")
                {
                    if (strLine.StartsWith("[") && strLine.EndsWith("]"))
                    {
                        currentRoot = strLine.Substring(1, strLine.Length - 2);
                    }
                    else
                    {
                        string?[] keyPair = strLine.Split(new[] { '=' }, 2);

                        SectionPair sectionPair;
                        string? value = null;

                        if (currentRoot == null)
                            currentRoot = "ROOT";

                        sectionPair.Section = currentRoot;
                        sectionPair.Key = keyPair[0];

                        if (keyPair.Length > 1)
                            value = keyPair[1];

                        _keyPairs.Add(sectionPair, value);
                    }
                }

                strLine = iniFile.ReadLine();
            }

        }
        catch (System.Exception ex)
        {
            throw ex;
        }
        finally
        {
            iniFile?.Close();
        }
    }
 
    /// <summary>
    /// Returns the value for the given section, key pair.
    /// </summary>
    /// <param name="sectionName">Section name.</param>
    /// <param name="settingName">Key name.</param>
    public string GetSetting(String sectionName, String settingName)
    {
        SectionPair sectionPair;
        sectionPair.Section = sectionName.ToUpper();
        sectionPair.Key = settingName.ToUpper();
 
        return (String)_keyPairs[sectionPair]!;
    }
 
    /// <summary>
    /// Enumerates all lines for given section.
    /// </summary>
    /// <param name="sectionName">Section to enum.</param>
    public String[] EnumSection(String sectionName)
    {
        ArrayList tmpArray = new ArrayList();
 
        foreach (SectionPair pair in _keyPairs.Keys)
        {
            if (pair.Section == sectionName.ToUpper())
                tmpArray.Add(pair.Key);
        }
 
        return (String[])tmpArray.ToArray(typeof(String));
    }
 
    /// <summary>
    /// Adds or replaces a setting to the table to be saved.
    /// </summary>
    /// <param name="sectionName">Section to add under.</param>
    /// <param name="settingName">Key name to add.</param>
    /// <param name="settingValue">Value of key.</param>
    public void AddSetting(String sectionName, String settingName, string? settingValue = null)
    {
        SectionPair sectionPair;
        sectionPair.Section = sectionName.ToUpper();
        sectionPair.Key = settingName.ToUpper();
 
        if (_keyPairs.ContainsKey(sectionPair))
            _keyPairs.Remove(sectionPair);
 
        _keyPairs.Add(sectionPair, settingValue);
    }

    /// <summary>
    /// Remove a setting.
    /// </summary>
    /// <param name="sectionName">Section to add under.</param>
    /// <param name="settingName">Key name to add.</param>
    public void DeleteSetting(String sectionName, String settingName)
    {
        SectionPair sectionPair;
        sectionPair.Section = sectionName.ToUpper();
        sectionPair.Key = settingName.ToUpper();
 
        if (_keyPairs.ContainsKey(sectionPair))
            _keyPairs.Remove(sectionPair);
    }
 
    /// <summary>
    /// Save settings to new file.
    /// </summary>
    /// <param name="newFilePath">New file path.</param>
    private void SaveSettings(String newFilePath)
    {
        ArrayList sections = new ArrayList();
        string tmpValue = "";
        String strToSave = "";
 
        foreach (SectionPair sectionPair in _keyPairs.Keys)
        {
            if (!sections.Contains(sectionPair.Section))
                sections.Add(sectionPair.Section);
        }
 
        foreach (String section in sections)
        {
            strToSave += ("[" + section + "]\r\n");
 
            foreach (SectionPair sectionPair in _keyPairs.Keys)
            {
                if (sectionPair.Section == section)
                {
                    tmpValue = (String)_keyPairs[sectionPair]!;
 
                    tmpValue = "=" + tmpValue;
 
                    strToSave += (sectionPair.Key + tmpValue + "\r\n");
                }
            }
 
            strToSave += "\r\n";
        }
 
        try
        {
            TextWriter tw = new StreamWriter(newFilePath);
            tw.Write(strToSave);
            tw.Close();
        }
        catch (System.Exception ex)
        {
            throw ex;
        }
    }
 
    /// <summary>
    /// Save settings back to ini file.
    /// </summary>
    public void SaveSettings()
    {
        SaveSettings(_iniFilePath);
    }
}

```

## KeyParser.cs
**Location:** `Velocity-NEA\Velocity\Utils\KeyParser.cs`

```csharp
using Raylib_cs;

namespace Velocity.Utils;

public class KeyParser
{
    public static KeyboardKey ToKey(string? key) // Convert string to KeyboardKey
    {
        string find = key.Replace("KEY_", "").ToLower();
        return find switch
        {
            "a" => KeyboardKey.KEY_A,
            "b" => KeyboardKey.KEY_B,
            "c" => KeyboardKey.KEY_C,
            "d" => KeyboardKey.KEY_D,
            "e" => KeyboardKey.KEY_E,
            "f" => KeyboardKey.KEY_F,
            "g" => KeyboardKey.KEY_G,
            "h" => KeyboardKey.KEY_H,
            "i" => KeyboardKey.KEY_I,
            "j" => KeyboardKey.KEY_J,
            "k" => KeyboardKey.KEY_K,
            "l" => KeyboardKey.KEY_L,
            "m" => KeyboardKey.KEY_M,
            "n" => KeyboardKey.KEY_N,
            "o" => KeyboardKey.KEY_O,
            "p" => KeyboardKey.KEY_P,
            "q" => KeyboardKey.KEY_Q,
            "r" => KeyboardKey.KEY_R,
            "s" => KeyboardKey.KEY_S,
            "t" => KeyboardKey.KEY_T,
            "u" => KeyboardKey.KEY_U,
            "v" => KeyboardKey.KEY_V,
            "w" => KeyboardKey.KEY_W,
            "x" => KeyboardKey.KEY_X,
            "y" => KeyboardKey.KEY_Y,
            "z" => KeyboardKey.KEY_Z,
            "1" => KeyboardKey.KEY_ONE,
            "2" => KeyboardKey.KEY_TWO,
            "3" => KeyboardKey.KEY_THREE,
            "4" => KeyboardKey.KEY_FOUR,
            "5" => KeyboardKey.KEY_FIVE,
            "6" => KeyboardKey.KEY_SIX,
            "7" => KeyboardKey.KEY_SEVEN,
            "8" => KeyboardKey.KEY_EIGHT,
            "9" => KeyboardKey.KEY_NINE,
            "0" => KeyboardKey.KEY_ZERO,
            "up" => KeyboardKey.KEY_UP,
            "down" => KeyboardKey.KEY_DOWN,
            "left" => KeyboardKey.KEY_LEFT,
            "right" => KeyboardKey.KEY_RIGHT,
            "minus" => KeyboardKey.KEY_MINUS,
            "equal" => KeyboardKey.KEY_EQUAL,
            "left_shift" => KeyboardKey.KEY_LEFT_SHIFT,
            "right_shift" => KeyboardKey.KEY_RIGHT_SHIFT,
            "tab" => KeyboardKey.KEY_TAB,
            "space" => KeyboardKey.KEY_SPACE,
            _ => KeyboardKey.KEY_NULL
        };
    }
}
```

## OsVersion.cs
**Location:** `Velocity-NEA\Velocity\Utils\OsVersion.cs`

```csharp
namespace Velocity.Utils;

public class OsVersion
{
    public static Os GetOS() // Get the current OS
    {
        switch (Environment.OSVersion.Platform)
        {
            case PlatformID.Win32Windows: return Os.Windows;
            case PlatformID.MacOSX: return Os.MacOs;
            case PlatformID.Unix: return Os.Linux;
            default: return Os.Other;
        }
    }
    
    public static string GetDirSeperator () // Get the directory seperator for the current OS
    {
        switch (GetOS())
        {
            case Os.MacOs:
            case Os.Linux:
                return "/";
            case Os.Windows: return "\\";
            default: return "/";
        }
    }

    public enum Os // Enum for the OS
    {
        Windows = 0,
        MacOs = 1,
        Linux = 2,
        Other = 3
    }
}
```

## Path.cs
**Location:** `Velocity-NEA\Velocity\Utils\Path.cs`

```csharp
namespace Velocity.Utils;

public abstract class Path
{
    public static string CurrentDirectory = Directory.GetCurrentDirectory() + OsVersion.GetDirSeperator();
    public static string AssetLocation = CurrentDirectory + "assets" + OsVersion.GetDirSeperator();
    public static string SoundLocation = AssetLocation + "sounds" + OsVersion.GetDirSeperator();
}
```

## Renderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderer.cs`

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

    public void Dump()
    {
        foreach (var renderer in _elementRenderers.Values) Console.WriteLine(renderer?.Identifier);
        foreach (var renderer in _backgroundRenderers.Values) Console.WriteLine(renderer?.Identifier);
        foreach (var renderer in _uiRenderers.Values) Console.WriteLine(renderer?.Identifier);
    }
}
```

## AnimatableRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\AnimatableRenderer.cs`

```csharp
using Raylib_cs;
using Velocity.Ui.Misc;

namespace Velocity.Window.Render.Renderers;

public class AnimatableRenderer : ConditionalRenderer
{
    public UiElement Parent;
    public Color BgColor { get; set; }
    public Color InternalBg;
    public Color BorderColor { get; set; }
    public Color InternalBorder;

    private int _aStep = 0;
    private const int MaxStep = 10;
    private const int GlowRadius = 8;

    protected AnimatableRenderer (UiElement parent, string identifier, Color? bgColor = null, Color? borderColor = null) : base(identifier)
    {
        Parent = parent;
        
        BgColor = bgColor ?? new Color(40, 40, 40, 255);
        BorderColor = borderColor ?? Color.WHITE;
        UpdateColors();
    }

    // Function responsible for drawing the animation
    public void DrawAnimation()
    {
        if (Parent.IsMouseOver() && _aStep < MaxStep) _aStep++;
        else if (!(Parent.IsMouseOver()) && _aStep > 0) _aStep--;

        double a = Convert.ToDouble(_aStep) / MaxStep;
        
        Raylib.DrawRectangleGradientH((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y, 8, (int)Parent.Dimensions.Y, new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientH((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y, 8, (int)Parent.Dimensions.Y, new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0));
        Raylib.DrawRectangleGradientV((int)Parent.Position.X, (int)Parent.Position.Y- GlowRadius, (int)Parent.Dimensions.X, 8, new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientV((int)Parent.Position.X, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, (int)Parent.Dimensions.X, 8, new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y- GlowRadius, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(255, 255, 255, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y- GlowRadius, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0), new Color(255, 255, 255, 0));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X- GlowRadius, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, GlowRadius, GlowRadius), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(255, 255, 255, Convert.ToInt16(255 * a)));
        Raylib.DrawRectangleGradientEx(new Rectangle((int)Parent.Position.X + (int)Parent.Dimensions.X, (int)Parent.Position.Y + (int)Parent.Dimensions.Y, GlowRadius, GlowRadius), new Color(200, 200, 200, Convert.ToInt16(255 * a)), new Color(200, 200, 200, 0), new Color(200, 200, 200, 0), new Color(255, 255, 255, 0));
        
        UpdateColors(a);
    }

    // Function responsible for updating the colors of the element
    private void UpdateColors(double multiplier = 0)
    {
        InternalBg = BgColor with { a = Convert.ToByte(200 + 50 * multiplier) };
        InternalBorder = BorderColor with { a = Convert.ToByte(200 + 50 * multiplier) };
    }
}
```

## BackgroundRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\BackgroundRenderer.cs`

```csharp
namespace Velocity.Window.Render.Renderers;

public class BackgroundRenderer : UiRenderer
{
    public BackgroundRenderer(string id, bool isEnabled = true) : base(id)
    {
        IsEnabled = isEnabled;
    }
}
```

## ConditionalRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\ConditionalRenderer.cs`

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

## ElementRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\ElementRenderer.cs`

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

## SimpleRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\SimpleRenderer.cs`

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

## UiRenderer.cs
**Location:** `Velocity-NEA\Velocity\Window\Render\Renderers\UiRenderer.cs`

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

## WindowManager.cs
**Location:** `Velocity-NEA\Velocity\Window\WindowManager.cs`

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
    
    public Color BackgroundColor = Color.SKYBLUE;

    private RenderTexture2D _target;
    private Rectangle _sourceRectangle;
    private Rectangle _destRectangle;

    // This is the procedure of creating a window and registering it in the operating system
    // It also creates a virtual canvas to draw to, so that we can scale the game to any resolution
    // It also creates a camera so that we can move the camera around the game world
    public void CreateWindow()
    {
        VirtualRatio = Width / Settings.Resolutions[Loader.Settings.Resolution].X;
        _sourceRectangle = new Rectangle(0, 0, Width, -Height);
        _destRectangle = new Rectangle(-VirtualRatio, -VirtualRatio, Settings.Resolutions[Loader.Settings.Resolution].X + VirtualRatio * 2, Settings.Resolutions[Loader.Settings.Resolution].Y + VirtualRatio * 2);
 
        Raylib.InitWindow(
            (int)Settings.Resolutions[Loader.Settings.Resolution].X,
            (int)Settings.Resolutions[Loader.Settings.Resolution].Y,
            GameConst.Name
        ); 


        _target = Raylib.LoadRenderTexture(Width, Height);
        Raylib.SetTargetFPS(60);
        Raylib.SetExitKey(KeyboardKey.KEY_NULL);
        if (!Raylib.IsWindowFullscreen() && Loader.Settings.FullScreen) Raylib.ToggleFullscreen();
        Renderer = new Renderer();
        Camera = new Camera2D
        {
            target = new Vector2(0, 0),
            offset = new Vector2(0, 0),
            rotation = 0.0f,
            zoom = 1.0f
        };

        _screenSpaceCamera = Camera;
    }

    // This is the procedure of applying any settings changes to the window
    // This includes resolution, fullscreen, and any other settings
    public void ApplySettingsChange()
    {
        if (!Raylib.IsWindowFullscreen() && Loader.Settings.FullScreen) Raylib.ToggleFullscreen();
        else if (Raylib.IsWindowFullscreen() && !Loader.Settings.FullScreen) Raylib.ToggleFullscreen();
        
        VirtualRatio = Width / Settings.Resolutions[Loader.Settings.Resolution].X;
        _destRectangle = new Rectangle(-VirtualRatio, -VirtualRatio, Settings.Resolutions[Loader.Settings.Resolution].X + VirtualRatio * 2, Settings.Resolutions[Loader.Settings.Resolution].Y + VirtualRatio * 2);

        Raylib.SetWindowSize((int)Settings.Resolutions[Loader.Settings.Resolution].X, (int)Settings.Resolutions[Loader.Settings.Resolution].Y);
        
        int x = Raylib.GetScreenWidth() >= Raylib.GetMonitorWidth(0) ? 0 : (Raylib.GetMonitorWidth(0) / 2 - Raylib.GetScreenWidth() / 2);
        int y = Raylib.GetScreenHeight() >= Raylib.GetMonitorHeight(0) ? 0 : (Raylib.GetMonitorHeight(0) / 2 - Raylib.GetScreenHeight() / 2);
        Raylib.SetWindowPosition(x, y);
    }

    
    public void DrawLoop()
    {
        while (!Raylib.WindowShouldClose())
        {
            Loader.ControlManager.Tick();
            Loader.Game.Tick();
            
            _screenSpaceCamera.target = Camera.target;

            Camera.target = _screenSpaceCamera.target;
            _screenSpaceCamera.target = Vector2.Subtract(Camera.target, Camera.target);
            _screenSpaceCamera.target.X *= VirtualRatio;
            _screenSpaceCamera.target.Y *= VirtualRatio;
            if (Loader.Game.Closed) break;

            Raylib.BeginTextureMode(_target);

            Raylib.DrawRectangle(0, 0, Width, Height, BackgroundColor);

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
}
```
