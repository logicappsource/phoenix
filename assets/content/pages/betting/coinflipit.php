<script>

 function PlaySoundFlip() {
            var snd = new Audio("https://www.partnersinrhyme.com/files/sounds1/WAV/office/coinflip.wav"); // buffers automatically when created
            snd.play();
        }



    jQuery(document).ready(function($){

    var spinArray = ['animation900','animation1080','animation1260','animation1440','animation1620','animation1800','animation1980','animation2160'];

    function getSpin() {
    var spin = spinArray[Math.floor(Math.random()*spinArray.length)];
    PlaySoundFlip();

/*

    if(spin == animation900  || spin == animation1080 || spin == animation1260 ) {
        console.log("tail");
    } */

        return spin;
    }

    $('#coin').on('click', function(){

    $('#coin').removeClass();

    setTimeout(function(){
    $('#coin').addClass(getSpin());
    }, 100);

    });
 });

</script>


<div id="coin-flip-cont">
<div id="coin">
<div class="front"></div>
<div class="back"></div>
</div>
</div>

<style>

#coin .front {
    transform: translateZ(1px);
    border-radius: 50%;
    background-image: url('http://g02.a.alicdn.com/kf/HTB1b9nuNVXXXXciXFXXq6xXFXXXY/Stylish-POT-Committed-Metal-Poker-Chip-Casino-Challenge-Gold-Coin-Lucky-Souvenir-Personalized-Coin-Gift-For.jpg_640x640.jpg');
    background-size: cover;
    display: block;
}

    #coin .back {
    transform: translateZ(-1px) rotateY(180deg);
    border-radius: 50%;
    background-image: url('http://www.challengecoinmanufacturer.com/images/120305/o-the3b.jpg');
     background-size: cover;
     display: block;
}



html, body {
margin: 0;
width: 100%;
height: 100%;
background-color: #333;
}

#coin-flip-cont {
width: 200px;
height: 200px;
position: absolute;
top: calc(50% - 100px);
left: calc(50% - 100px);
}

#coin {
position: relative;
width: 200px;
transform-style: preserve-3d;
}

#coin .front, #coin .back {
position: absolute;
width: 235px;
height: 235px;
}

#coin .front {
transform: translateZ(1px);
border-radius: 50%;
background-color: #3498db;
}

#coin .back {
transform: translateZ(-1px) rotateY(180deg);
border-radius: 50%;
background-color: #2ecc71;
}

#coin.animation900 {
-webkit-animation: rotate900 3s linear forwards; 
animation: rotate900 3s linear forwards;
}

#coin.animation1080 {
-webkit-animation: rotate1080 3s linear forwards; 
animation: rotate1080 3s linear forwards;
}

#coin.animation1260 {
-webkit-animation: rotate1260 3s linear forwards; 
animation: rotate1260 3s linear forwards;
}

#coin.animation1440 {
-webkit-animation: rotate1440 3s linear forwards; 
animation: rotate1440 3s linear forwards;
}

#coin.animation1620 {
-webkit-animation: rotate1620 3s linear forwards; 
animation: rotate1620 3s linear forwards;
}

#coin.animation1800 {
-webkit-animation: rotate1800 3s linear forwards; 
animation: rotate1800 3s linear forwards;
}

#coin.animation1980 {
-webkit-animation: rotate1980 3s linear forwards; 
animation: rotate1980 3s linear forwards;
}

#coin.animation2160 {
-webkit-animation: rotate2160 3s linear forwards; 
animation: rotate2160 3s linear forwards;
}

@-webkit-keyframes rotate900 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(900deg); -moz-transform: rotateY(900deg); transform: rotateY(900deg); }
}

@keyframes rotate900 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(900deg); -moz-transform: rotateY(900deg); transform: rotateY(900deg); }
}

@-webkit-keyframes rotate1080 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1080deg); -moz-transform: rotateY(1080deg); transform: rotateY(1080deg); }
}

@keyframes rotate1080 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1080deg); -moz-transform: rotateY(1080deg); transform: rotateY(1080deg); }
}

@-webkit-keyframes rotate1260 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1260deg); -moz-transform: rotateY(1260deg); transform: rotateY(1260deg); }
}

@keyframes rotate1260 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1260deg); -moz-transform: rotateY(1260deg); transform: rotateY(1260deg); }
}

@-webkit-keyframes rotate1440 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1440deg); -moz-transform: rotateY(1440deg); transform: rotateY(1440deg); }
}

@keyframes rotate1440 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1440deg); -moz-transform: rotateY(1440deg); transform: rotateY(1440deg); }
}

@-webkit-keyframes rotate1620 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1620deg); -moz-transform: rotateY(1620deg); transform: rotateY(1620deg); }
}

@keyframes rotate1620 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1620deg); -moz-transform: rotateY(1620deg); transform: rotateY(1620deg); }
}

@-webkit-keyframes rotate1800 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1800deg); -moz-transform: rotateY(1800deg); transform: rotateY(1800deg); }
}

@keyframes rotate1800 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1800deg); -moz-transform: rotateY(1800deg); transform: rotateY(1800deg); }
}

@-webkit-keyframes rotate1980 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1980deg); -moz-transform: rotateY(1980deg); transform: rotateY(1980deg); }
}

@keyframes rotate1980 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(1980deg); -moz-transform: rotateY(1980deg); transform: rotateY(1980deg); }
}

@-webkit-keyframes rotate2160 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(2160deg); -moz-transform: rotateY(2160deg); transform: rotateY(2160deg); }
}

@keyframes rotate2160 {
from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
to { -webkit-transform: rotateY(2160deg); -moz-transform: rotateY(2160deg); transform: rotateY(2160deg); }
}
</style> 