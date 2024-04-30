<!DOCTYPE html>
<html>
    <head>
        <title>BLACKJACK</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scripts.js?v=<?php echo rand(); ?>"></script>

    </head>

    

    <body>

        <h1  class="texts" >BLACKJACK</h1>

        <g id="buttons" style="visibility: hidden;">
        <button class="texts" onclick="reveal()" >Start round</button>
        <!-- <button class="texts" onclick="hit()">Hit</button>
        <button class="texts" onclick="stand()">Stand</button>
        <button class="texts" onclick="nRound()">nextRound</button> -->
        </g>
        <g id="startT">

        <g id="rButtons" style="visibility: hidden;">
        <button class="texts" onclick="spin()" >spin</button>
        
        </g>
        <g id="startT">
        
        <div>
        <button onclick="startRoulette()"  class="mid">Roulette</button>
        </div>
        <div>
        <button onclick="startPoker()"  class="mid">Poker</button>

        </div>
        </g>
                
        <svg id="playRoulette" width="1300" height="600" style="visibility: hidden;">

            <rect fill="green" x="0" y="0" width="100%" height="100%" />
            <image id ="wheel" width = "500" height = "500" x="200" y="50" href="https://i.pinimg.com/originals/6e/d5/55/6ed5554d17ec79d796555408177b5f10.png" alt="alternatetext"></image>
            <image x="700" y="200" href="https://introductorystats.files.wordpress.com/2010/11/roulette-wheel.jpg" alt="alternatetext"></image>

            <!-- <image x="0" y="0" href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA5L3Jhd3BpeGVsX29mZmljZV8xOV9zY2VuZV9vZl8zZF9yZW5kZXJfc2ltcGxlX2dhbWVpbmdfcm9vbV9uZW9uX18yZmJlMzcwYS0yNDY3LTQxOTAtOWE2Yi0xOTNjY2MxYTQ5MjdfMS5qcGc.jpg" alt="alternatetext"> -->
            <rect fill="white" x="0" y="0" width="175" height="600"/>
            
            <rect id ="red" fill="white" x="900" y="380" width="80" height="30" onClick="redBet()" />
            <rect fill="white" x="0" y="0" width="175" height="600"/>
            <circle fill="white" cx="450" cy="75" r="6" />


            <text  class="texts"  id="bets" x="100" y="185">Bet: </text>
            <text  class="texts"  id="op" x="375" y="185"> </text>
            
            <image id="gameChip1" x="25" y="5" width="4%" class="gc" href="" style="visibility: hidden;"></image>
            <image id="gameChip2" x="75" y="5" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip3" x="125" y="5" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip4" x="25" y="55" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip5" x="75" y="55" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip6" x="125" y="55" width="4%" class="gc"   href="" style="visibility: hidden;"></image>

            <image id="startChip5" x="25" y="480" width="4%" onClick="makeBet(5)"  href="chips/poker-chip-5.svg" ></image>
            <image id="startChip10" x="75" y="480" width="4%" onClick="makeBet(10)"  href="chips/poker-chip-10.svg"></image>
            <image id="startChip15" x="125" y="480" width="4%" onClick="makeBet(15)"  href="chips/poker-chip-15.svg"></image>
            <image id="startChip50" x="25" y="530" width="4%" onClick="makeBet(50)"  href="chips/poker-chip-50.svg"></image> 
            <image id="startChip100" x="75" y="530" width="4%" onClick="makeBet(100)"  href="chips/poker-chip-100.svg"></image> 
            <image id="startChip500" x="125" y="530" width="4%" onClick="makeBet(500)"  href="chips/poker-chip-500.svg"></image>

            
            <rect id ="red" fill="white" x="900" y="380" width="80" height="30" onClick="redBet()" />
            
        </svg>

        <svg id="playPoker" width="1300" height="600" style="visibility: hidden;">

            <rect fill="green" x="0" y="0" width="100%" height="100%" />
            <image x="50" y="0" width="100%" height="100%" href="https://t3.ftcdn.net/jpg/04/99/32/04/360_F_499320451_WhwTDWBhrNpYWru0GHjzFj6JNUes8m15.jpg" alt="alternatetext"></image>
            <rect fill="white" x="0" y="0" width="175" height="600" />
            <text  class="texts"  id="bets" x="100" y="185">Bet: </text>
            <text  class="texts"  id="op" x="375" y="185"> </text>
            <image id="startChip5" x="25" y="480" width="4%" onClick="makeBet(5)"  href="chips/poker-chip-5.svg"></image>
            <image id="startChip10" x="75" y="480" width="4%" onClick="makeBet(10)"  href="chips/poker-chip-10.svg"></image>
            <image id="startChip15" x="125" y="480" width="4%" onClick="makeBet(15)"  href="chips/poker-chip-15.svg"></image>
            <image id="startChip50" x="25" y="530" width="4%" onClick="makeBet(50)"  href="chips/poker-chip-50.svg"></image> 
            <image id="startChip100" x="75" y="530" width="4%" onClick="makeBet(100)"  href="chips/poker-chip-100.svg"></image> 
            <image id="startChip500" x="125" y="530" width="4%" onClick="makeBet(500)"  href="chips/poker-chip-500.svg"></image>
            
            <image id="yCard1" x="655" y="400" width="2%"  href="cards/blue.svg"></image>
            <image id="yCard2" x="680" y="400" width="2%"  href="cards/blue.svg"></image>


            <image id="gameCard1" x="630" y="275" width="2%"  href="cards/blue.svg"></image>
            <image id="gameCard2" x="655" y="275" width="2%"  href="cards/blue.svg"></image>
            <image id="gameCard3" x="680" y="275" width="2%"  href="cards/blue.svg"></image>
            <image id="gameCard4" x="705" y="275" width="2%"  href="cards/blue.svg"></image>
            <image id="gameCard5" x="730" y="275" width="2%"  href="cards/blue.svg"></image>



            <image id="gameChip1" x="25" y="5" width="4%" class="gc" href="" style="visibility: hidden;"></image>
            <image id="gameChip2" x="75" y="5" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip3" x="125" y="5" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip4" x="25" y="55" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip5" x="75" y="55" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip6" x="125" y="55" width="4%" class="gc"   href="" style="visibility: hidden;"></image>
            
        </svg>

        
        
        
        

        

    </body>
</html>