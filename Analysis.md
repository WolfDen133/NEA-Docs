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
> - [Underlying Framework](#underlying-framework)
> - [Base game, settings and menu manager](#base-game-settings-and-menus)
> - [UiElements](#ui-elements)
> - [Windows](#physics)

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
> ```
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
> ```
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
| 1. A open blank window ready for us to implement our features                                                        |          |
| 2. Main menu with 4 buttons and a title, including game version information and my copywrite                         |          |
| 3. Settings screen with at least 3 sections, that include controls, video settings, audio settings                   |          |
| 4. Working camera system that smoothly follows the player wherever they go on the game canvas                        |          |
| 5. A working physics system that can be applied to any object, with gravity, drag, and collision calculations        |          |
| 6. A working player that can be moved using the control scheme, with velocity and appropriate drag calculations      |          |
| 7. Working texture and audio loading system                                                                          |          |
| 8. Working parallax background renderer that infinitely draws around the camera                                      |          |
| 9. A working object system for adding game objects such as collidable objects and item power-ups                     |          |
| 10. A working level system that can load and save level stats, and load the next level when the player completes one |          |
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

## Underlying Framework

> #### A few notes
> - I am going to be creating my game using the object oriented programming method, this allows me to have many custom classes working together to achieve a human readable and maintainable structure to my programming, while also allowing me to create different elements of the game that all work together with minimal re-writes.
> - I will be using interfaces for any and all input logic, this reduces the number of selection statements and duplicated code.
> - Some options such as resolution and control schemes will be using structs, to reduce the amount of registered classes in the game.
> - I will be using a game engine called raylib, this is a c# game engine that allows me to create games in c# and have them run on any platform, including windows, mac and linux.
> - Due to time constraints I didn't have time to document the renderers, so have included a quick description of what each renderer class does.

### Underlying framework

Firstly I will be creating an underlying framework for my game to run on. This will consist of an input system for reading user inputs, an update system for executing game logic, and a draw loop to display the computed inputs, game logic, and elements to the screen.
This section will be largely based off of the framework I created in my mini-nea found [here](https://github.com/WolfDen133/MiniNEA).

#### Window Manager & Renderer

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

#### Renderer and sub-renderers

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

#### Input manager & input elements

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

## Base game, Settings and Menus

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

### Menus

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

## UI Elements

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

## Windows

#### Main menu
Now that we have a working menu manager, and some ui elements to build our menus, its time to create some, we will be starting with the main menu.
For this we will need one element defined in the [UiElements](#ui-elements) subsection. A button, 3 of them to be precise. A play, settings and exit button.




