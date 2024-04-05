<!DOCTYPE html>
<html>
    <head>
        <title>BLACKJACK</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scripts.js?v=<?php echo rand(); ?>"></script>

        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>

    

    <body>

        <h1  class="texts" >BLACKJACK</h1>

        
                
        <svg id="playRoulette" width="1300" height="600" style="visibility: hidden;">

            <rect fill="green" x="0" y="0" width="100%" height="100%" />
            <image x="0" y="0" href="https://i.pinimg.com/originals/6e/d5/55/6ed5554d17ec79d796555408177b5f10.png" alt="alternatetext"></image>
            <image x="500" y="200" href="https://introductorystats.files.wordpress.com/2010/11/roulette-wheel.jpg" alt="alternatetext"></image>

            <!-- <image x="0" y="0" href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA5L3Jhd3BpeGVsX29mZmljZV8xOV9zY2VuZV9vZl8zZF9yZW5kZXJfc2ltcGxlX2dhbWVpbmdfcm9vbV9uZW9uX18yZmJlMzcwYS0yNDY3LTQxOTAtOWE2Yi0xOTNjY2MxYTQ5MjdfMS5qcGc.jpg" alt="alternatetext"> -->
            
        </svg>

        <svg id="playPoker" width="1300" height="600" style="visibility: hidden;">

            <rect fill="green" x="0" y="0" width="100%" height="100%" />
            <image x="0" y="0" href="https://t3.ftcdn.net/jpg/04/99/32/04/360_F_499320451_WhwTDWBhrNpYWru0GHjzFj6JNUes8m15.jpg" alt="alternatetext"></image>
            
            
        </svg>

        <g id="buttons" style="visibility: hidden;">
        <button class="texts" onclick="deal()" >Deal</button>
        <button class="texts" onclick="hit()">Hit</button>
        <button class="texts" onclick="stand()">Stand</button>
        <button class="texts" onclick="nRound()">nextRound</button>
        </g>
        <g id="startT">
        
        <div>
        <button onclick="startRoulette()"  class="mid">Roulette</button>
        </div>
        <div>
        <button onclick="startPoker()"  class="mid">Poker</button>
        </div>
        </g>
        
        
        

        

    </body>
</html>