<!DOCTYPE html>
<html>
    <head>
        <title>Roulette</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scripts.js?v=<?php echo rand(); ?>"></script>
        <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo rand(); ?>" />

    </head>

    

    <body>

        <h1  class="texts" >ROULETTE</h1>
        <h2  class="texts" >Get ready to win BIG!</h2>

        <g id="buttons" style="visibility: hidden;">
        <button class="texts" onclick="reveal()" >Start round</button>
        <!-- <button class="texts" onclick="hit()">Hit</button>
        <button class="texts" onclick="stand()">Stand</button>
        <button class="texts" onclick="nRound()">nextRound</button> -->
        </g>
        <g id="startT">

        
        <g id="startT">
        
        <div>
        <button onclick="startRoulette()"  class="mid">Start Game</button>
        </div>
        <!-- <div>
        <button onclick="startPoker()"  class="mid">Poker</button>

        </div> -->
        </g>
                
        <svg id="playRoulette" width="1300" height="600" style="visibility: hidden;">

            <rect fill="green" x="0" y="0" width="100%" height="100%" />
            <image id ="wheel" width = "500" height = "500" x="200" y="50" href="https://i.pinimg.com/originals/6e/d5/55/6ed5554d17ec79d796555408177b5f10.png" alt="alternatetext"></image>
            <image x="700" y="200" href="https://introductorystats.files.wordpress.com/2010/11/roulette-wheel.jpg" alt="alternatetext"></image>

            <!-- <image x="0" y="0" href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA5L3Jhd3BpeGVsX29mZmljZV8xOV9zY2VuZV9vZl8zZF9yZW5kZXJfc2ltcGxlX2dhbWVpbmdfcm9vbV9uZW9uX18yZmJlMzcwYS0yNDY3LTQxOTAtOWE2Yi0xOTNjY2MxYTQ5MjdfMS5qcGc.jpg" alt="alternatetext"> -->
            <rect fill="white" x="0" y="0"  width="175" height="600"/>
            
            
            <rect fill="white" x="0" y="0" width="175" height="600"/>
            <circle fill="white" cx="450" cy="75" r="6" />
            <circle fill="transparent" onclick="spin()" cx="450" cy="300" r="230" />
            <rect fill="transparent"  onclick="redBet()" x="902" y="380" width="78" height="30"/>
            <rect fill="transparent"  onclick="blackBet()" x="980" y="380" width="78" height="30"/>
            <rect id="next" class ="rectangle" fill="white" x="315" y="535" width="260" height="60" style="visibility: hidden;" />
            <text id="nextText" class="messageTwo"  id="newBets" x="320" y="575" style="visibility: hidden;">Place new Bets</text>
            <rect fill="transparent" onclick="reset()" x="315" y="535" width="260" height="60"/>




            <text  class="texts"  id="bets" x="50" y="185">Bet: </text>
            <text  class="texts"  id="money" x="50" y="200">Total money: </text>
            <text  class="message"  id="winLose" x="800" y="100"></text>
            <text  class="messageTwo"  id="spintxt" x="830" y="170"></text>
            
            <image id="gameChip1" x="700" y="440" width="2%" class="gc" href="" style="visibility: hidden;"></image>
            <image id="gameChip2" x="755" y="440" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip3" x="810" y="440" width="4%" class="gc"  href="" style="visibility: hidden;"></image>
            <image id="gameChip4" x="865" y="440" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip5" x="920" y="440" width="4%" class="gc"  href="" style="visibility: hidden;"></image> 
            <image id="gameChip6" x="975" y="440" width="4%" class="gc"   href="" style="visibility: hidden;"></image>

            <image id="startChip5" x="25" y="480" width="4%" onClick="makeBet(5)"  href="chips/poker-chip-5.svg" style="visibility: hidden;"></image>
            <image id="startChip10" x="75" y="480" width="4%" onClick="makeBet(10)"  href="chips/poker-chip-10.svg" style="visibility: hidden;"></image>
            <image id="startChip15" x="125" y="480" width="4%" onClick="makeBet(15)"  href="chips/poker-chip-15.svg" style="visibility: hidden;"></image>
            <image id="startChip50" x="25" y="530" width="4%" onClick="makeBet(50)"  href="chips/poker-chip-50.svg" style="visibility: hidden;"></image> 
            <image id="startChip100" x="75" y="530" width="4%" onClick="makeBet(100)"  href="chips/poker-chip-100.svg" style="visibility: hidden;"></image> 
            <image id="startChip500" x="125" y="530" width="4%" onClick="makeBet(500)"  href="chips/poker-chip-500.svg" style="visibility: hidden;"></image>
            
            
            
            
        </svg>

        <button id="spin" class="texts" onclick="spin()" style="visibility: hidden;">spin</button>
        <button id="scores" class="texts" onclick="document.location='score-detail.php?score=' + money" style="visibility: hidden;">End Game</button>
        
        <button id="blackButton" class="texts" onclick="blackBet()" style="visibility: hidden;">Bet on Black</button>
        <button id="greenButton" class="texts" onclick="greenBet()" style="visibility: hidden;">Bet on Green</button>
        <button id="newBet" class="texts" onclick="reset()" style="visibility: hidden;">Place new bets</button>

        
        


        
        
        
        
        

        

    </body>
</html>