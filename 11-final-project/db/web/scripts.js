var clubs2 = {value: 2, href: "cards/clubs_2.svg" };
var clubs3 = {value: 3, href: "cards/clubs_3.svg" };
var clubs4 = {value: 4, href: "cards/clubs_4.svg" };
var clubs5 = {value: 5, href: "cards/clubs_5.svg" };
var clubs6 = {value: 6, href: "cards/clubs_6.svg" };
var clubs7 = {value: 7, href: "cards/clubs_7.svg" };
var clubs8 = {value: 8, href: "cards/clubs_8.svg" };
var clubs9 = {value: 9, href: "cards/clubs_9.svg" };
var clubs10 = {value: 10, href: "cards/clubs_10.svg" };
var clubsAce = {value: 11, href: "cards/clubs_ace.svg" };
var clubsJack = {value: 10, href: "cards/clubs_jack.svg" };
var clubsKing = {value: 10, href: "cards/clubs_king.svg" };
var clubsQueen = {value: 10, href: "cards/clubs_queen.svg" };

var diamonds2 = {value: 2, href: "cards/diamonds_2.svg" };
var diamonds3 = {value: 3, href: "cards/diamonds_3.svg" };
var diamonds4 = {value: 4, href: "cards/diamonds_4.svg" };
var diamonds5 = {value: 5, href: "cards/diamonds_5.svg" };
var diamonds6 = {value: 6, href: "cards/diamonds_6.svg" };
var diamonds7 = {value: 7, href: "cards/diamonds_7.svg" };
var diamonds8 = {value: 8, href: "cards/diamonds_8.svg" };
var diamonds9 = {value: 9, href: "cards/diamonds_9.svg" };
var diamonds10 = {value: 10, href: "cards/diamonds_10.svg" };
var diamondsAce = {value: 11, href: "cards/diamonds_ace.svg" };
var diamondsJack = {value: 10, href: "cards/diamonds_jack.svg" };
var diamondsKing = {value: 10, href: "cards/diamonds_king.svg" };
var diamondsQueen = {value: 10, href: "cards/diamonds_queen.svg" };

var hearts2 = {value: 2, href: "cards/hearts_2.svg" };
var hearts3 = {value: 3, href: "cards/hearts_3.svg" };
var hearts4 = {value: 4, href: "cards/hearts_4.svg" };
var hearts5 = {value: 5, href: "cards/hearts_5.svg" };
var hearts6 = {value: 6, href: "cards/hearts_6.svg" };
var hearts7 = {value: 7, href: "cards/hearts_7.svg" };
var hearts8 = {value: 8, href: "cards/hearts_8.svg" };
var hearts9 = {value: 9, href: "cards/hearts_9.svg" };
var hearts10 = {value: 10, href: "cards/hearts_10.svg" };
var heartsAce = {value: 11, href: "cards/hearts_ace.svg" };
var heartsJack = {value: 10, href: "cards/hearts_jack.svg" };
var heartsKing = {value: 10, href: "cards/hearts_king.svg" };
var heartsQueen = {value: 10, href: "cards/hearts_queen.svg" };

var spades2 = {value: 2, href: "cards/spades_2.svg" };
var spades3 = {value: 3, href: "cards/spades_3.svg" };
var spades4 = {value: 4, href: "cards/spades_4.svg" };
var spades5 = {value: 5, href: "cards/spades_5.svg" };
var spades6 = {value: 6, href: "cards/spades_6.svg" };
var spades7 = {value: 7, href: "cards/spades_7.svg" };
var spades8 = {value: 8, href: "cards/spades_8.svg" };
var spades9 = {value: 9, href: "cards/spades_9.svg" };
var spades10 = {value: 10, href: "cards/spades_10.svg" };
var spadesAce = {value: 11, href: "cards/spades_ace.svg" };
var spadesJack = {value: 10, href: "cards/spades_jack.svg" };
var spadesKing = {value: 10, href: "cards/spades_king.svg" };
var spadesQueen = {value: 10, href: "cards/spades_queen.svg" };

var chip5 = {value: 5, href: "chips/poker-chip-5.svg" };
var chip10 = {value: 10, href: "chips/poker-chip-10.svg" };
var chip15 = {value: 15, href: "chips/poker-chip-15.svg" };
var chip50 = {value: 50, href: "chips/poker-chip-50.svg" };
var chip100 = {value: 100, href: "chips/poker-chip-100.svg" };
var chip500 = {value: 500, href: "chips/poker-chip-500.svg" };

var deck = [clubs2,clubs3,clubs4,clubs5,clubs6,clubs7,clubs8,clubs9,clubs10,clubsAce,clubsJack,clubsKing,clubsQueen, diamonds2,
            diamonds3,diamonds4,diamonds5,diamonds6,diamonds7,diamonds8,diamonds9,diamonds10,diamondsAce,diamondsJack,diamondsKing,
            diamondsQueen,hearts2,hearts3,hearts4,hearts5,hearts6,hearts7,hearts8,hearts9,hearts10,heartsAce,heartsJack,heartsKing,
            heartsQueen,spades2,spades3,spades4,spades5,spades6,spades7,spades8,spades9,spades10,spadesAce,spadesJack,spadesKing,
            spadesQueen];

var cardsV = 0;

var points = 0;
var opPoints = 0;
var betNum = 1;
var totBet = 0;
var money = 1000;


function startRoulette(){
    $("#startT").css("visibility", "hidden");
    $("#playRoulette").css("visibility", "visible");
    $("#rButtons").css("visibility", "visible");
}

var degree = 0
var maxSpin = 0
var timerId = 0

function spin(){
    maxSpin =  1000 + Math.random() * 360
    timerId = setInterval(realSpin, 2);
    
}

// var zero = 
// var one = 
// var two =
// var three =
// var four = 
// var five =
// var six =
// var seven = 
// var eight =
// var nine = 
// var ten =
// var eleven =
// var twelve = 
// var thirteen =
// var fourteen =
// var fifteen = 
// var sixteen =
// var seventeen =
// var eighteen =
// var nineteen =
// var twenty =
// var twentyone =
// var twentytwo =
// var twentythree =
// var twentyfour =
// var twentyfive =
// var twentysix =
// var twentyseven =
// var twentyeight =
// var twentynine =
// var thirty =
// var thirtyone = 
// var thirtytwo =

// var twentyFive = 1003
// var two = 1013

var slots = [0, 32, 15, 19, 4, 21, 2, 25, 17, 34, 6, 27, 13, 36, 11, 30, 8, 23, 10, 5, 24, 16, 33, 1, 20, 14, 31,9, 22,18, 29,7,28,12,35,3,26]

function realSpin(){
    degree += 2
    $("#wheel").attr("transform", "rotate("+degree+",450,300)");

    if(degree > maxSpin){
        clearInterval(timerId)

        degree %= 360 // range: 0 - 359
        degree = 36 - Math.floor(degree/ (360/37)) // range: 0 - 36

        console.log("angle: " + degree + " is slot: " + slots[degree]);


    }
}

function redBet(){
    $("#startChip5").css("visibility", "visible")
    $("#startChip10").css("visibility", "visible")
    $("#startChip15").css("visibility", "visible")
    $("#startChip50").css("visibility", "visible")
    $("#startChip100").css("visibility", "visible")
    $("#startChip500").css("visibility", "visible")
}

function startPoker(){
    $("#startT").css("visibility", "hidden");
    $("#playPoker").css("visibility", "visible");
    $("#buttons").css("visibility", "visible");
}

function reveal(){
    var card1 = Math.floor(Math.random() * 52);
    $("#gameCard1").attr("href", deck[card1].href);
    var card2 = Math.floor(Math.random() * 52);
    $("#gameCard2").attr("href", deck[card2].href);
    var card3 = Math.floor(Math.random() * 52);
    $("#gameCard3").attr("href", deck[card3].href);
    var card4 = Math.floor(Math.random() * 52);
    $("#gameCard4").attr("href", deck[card4].href);

    var card5 = Math.floor(Math.random() * 52);
    $("#yCard1").attr("href", deck[card5].href);
    var card6 = Math.floor(Math.random() * 52);
    $("#yCard2").attr("href", deck[card6].href);
    
}

function makeBet(bet){
    if(bet == 5){
        $("#gameChip" + betNum).attr("href", chip5.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }else if(bet == 10){
        $("#gameChip" + betNum).attr("href", chip10.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }else if(bet == 15){
        $("#gameChip" + betNum).attr("href", chip15.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }else if(bet == 50){
        $("#gameChip" + betNum).attr("href", chip50.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }else if(bet == 100){
        $("#gameChip" + betNum).attr("href", chip100.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }else if(bet == 500){
        $("#gameChip" + betNum).attr("href", chip500.href);
        $("#gameChip" + betNum).css("visibility", "visible");
    }
    betNum ++;
    totBet = totBet + bet;
    $("#bets").text("Bet: " + totBet);
}


function deal(){
    var card1 = Math.floor(Math.random() * 52);
    $("#startCard1").attr("href", deck[card1].href);
    
    var card2 = Math.floor(Math.random() * 52);
    $("#startCard2").attr("href", deck[card2].href);

    var opCard1 = Math.floor(Math.random() * 52);
    $("#opCard1").attr("href", deck[opCard1].href);

    points = (deck[card1].value + deck[card2].value);
    $("#message").text("value: " + points);
    opPoints = (deck[opCard1].value);

    $("#pBets").text("");
    $("#startChip5").css("visibility", "hidden");
    $("#startChip10").css("visibility", "hidden");
    $("#startChip15").css("visibility", "hidden");
    $("#startChip50").css("visibility", "hidden");
    $("#startChip100").css("visibility", "hidden");
    $("#startChip500").css("visibility", "hidden");
}



var hitCount = 0;

function hit(){
    hitCount ++;
    var hitNum = Math.floor(Math.random() * 52);
    $("#hit" + hitCount).attr("href", deck[hitNum].href);
    $("#hit" + hitCount).css("visibility", "visible");
    points = (points + deck[hitNum].value);
    $("#message").text("value: " + points);
    if(points > 21){
        $("#message").text("Bust");
        $("#opCard2").attr("href", deck[opCard2].href);
        money -= totBet;
        $("#dollars").text("Money: " + money);
    }
}



function check(point1, point2){
    if(point1 > point2){
        $("#message").text("you win!");
        
        $("#opCard2").attr("href", deck[opCard2].href);
        money += totBet;
        $("#dollars").text("Money: " + money);
    } 
    else if(point1 == point2){
        $("#message").text("Push");
        $("#opCard2").attr("href", deck[opCard2].href);
    }else{
        $("#message").text("you lose!");
        $("#opCard2").attr("href", deck[opCard2].href);
        money -= totBet;
        $("#dollars").text("Money: " + money);
    }
}

var opCard2 = 0;

function stand(){
    opCard2 = Math.floor(Math.random() * 52);
    $("#opCard2").attr("href", deck[opCard2].href);
    opPoints = (opPoints + deck[opCard2].value);
    $("#op").text(opPoints);
    check(points, opPoints);
}

function nRound(){
    hitCount = 0;
    cardsV = 0;
    points = 0;
    opPoints = 0;
    betNum = 1;
    totBet = 0;
    $("#pBets").text("Place bets");
    $("#bets").text("Bet: ");
    $("#op").text("");
    $("#message").text("");
    $("#startCard1").attr("href", "cards/blue.svg");
    $("#startCard2").attr("href", "cards/blue.svg");
    $("#opCard1").attr("href", "cards/blue.svg");
    $("#opCard2").attr("href", "cards/blue.svg");
    $("#hit1").css("visibility", "hidden");
    $("#hit2").css("visibility", "hidden");
    $("#hit3").css("visibility", "hidden");
    $("#gameChip1").css("visibility", "hidden");
    $("#gameChip2").css("visibility", "hidden");
    $("#gameChip3").css("visibility", "hidden");
    $("#gameChip4").css("visibility", "hidden");
    $("#gameChip5").css("visibility", "hidden");
    $("#gameChip6").css("visibility", "hidden");
    $("#startChip5").css("visibility", "visible");
    $("#startChip10").css("visibility", "visible");
    $("#startChip15").css("visibility", "visible");
    $("#startChip50").css("visibility", "visible");
    $("#startChip100").css("visibility", "visible");
    $("#startChip500").css("visibility", "visible");
}