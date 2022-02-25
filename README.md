# Mille-Bornes
Reproduction of a French board game in pure Javascript

**Context:**

This was made as part of my web and mobile designer and developer training while we were learning how to program in Javascript.
We were paired with another student and the aim was to give one another a project (website or game) that had to be done in Javascript.

The project I was assigned was to make the classic Mille Bornes board game. It started around October 2020 and was completed around January 2021.
It is a turn-based board games in which the players (2-4) have to make their car drive 1000 kms ("bornes") with the help of cards they will be drawing each turn.
Players can draw "bornes" cards which will make them advance on the board, they can also have bonuses or they can hinder each other's progression.

The first one reaching 1000 wins.


**Developing:**

I used an HTML table to make the board.
As said earlier, the game is made with Javascript, and just a little bit of jQuery here and there.
To reproduce the turn-based gameplay style, the users must each turn confirm their action before the next player is allowed to play.
To interact with the cards, I used a drag'n'drop system.
When the game starts, a function will create a card pile from which to draw. Each player gets 6 random cards.

The code is messy it is obvious it was made by a beginner, but the game mostly works apart from a few bugs, that come from my bad usage of the drag and drop mechanic.
Overall I'm still quite proud I was able to achieve this :)
