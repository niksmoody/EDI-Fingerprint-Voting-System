<!doctype html >
<html>
    <head>
        <title>
            CHIMNI 
        </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style>
            * {
    margin: 0;
    padding: 0;
}

:root {
    --body: #ff533e;
    --mouth: #000000;
    --feather: #939393;
    --beak-top: #e9581a;
    --beak-down: #aa4c21;
    --leg: #080808;
    --body-color: #e3edf7;
}

body {
    background: var(--body-color);
    font-family: sans-serif;
    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    width: 400px;
    height: 400px;
    position: relative;
}

 .body,  .mouth,  .feather,  .tail, .beak, .mouth::before, .mouth::after, .leg, .leg::after, .leg::before {
    position: absolute;
}
 .body,  .mouth, .feather, .beak, .mouth::before, .mouth::after  {
    border-radius: 50%;
}

.body {
    top: 26px;
    left: 50px;
    height: 180px;
    width: 200px;
    transform: rotate(-17deg);
    background: linear-gradient(to bottom, transparent 0%, transparent 20%, var(--body) 20%);
    z-index: 2;
}

.mouth {    
    background:  var(--mouth);
    top: 20px;
    left: -175px;
    width: 100px;
    height: 100px;
    transform: rotate(-17deg);
    z-index: 5;
    animation: animate-mouth 1.5s forwards;
    animation-delay: 2s;
}

@keyframes animate-mouth {
    100% {
        left: 175px;
    }
}
.mouth::before {
    content: "";
    width: 30px;
    height: 30px;
    background: white;
    position: absolute;
    top: 20px;
    left: 40px;
}
.mouth::after {
    content: "";
    width: 10px;
    height: 10px;
    background: black;
    position: absolute;
    top: 30px;
    left: 55px;
    animation: animate-eye 1s infinite;
    animation-delay: 4s;
}

@keyframes animate-eye {
    50% {
        height: 5px;
    }
}


.feather {
    z-index: 4;
    left: 44px;
    top: -206px;
    width: 150px;
    height: 150px;
    background: linear-gradient(to bottom, transparent 0%, transparent 50%, var(--feather) 50%);
    transform: rotate(-17deg);
    animation: animate-feather 1.5s forwards;
    animation-delay: 2s;
}

@keyframes animate-feather {
    100% {
        top: -6px;
    }
}

.tail {
    width: 150px;
    height: 60px;
    background-color: var(--mouth);
    clip-path: polygon(0% 0%, 100% 0%, 100% 100%);
    top: 92px;
    left: 324px;
    transform: rotate(-17deg);
    z-index: 3;
    animation: animate-tail 1.5s forwards;
    animation-delay: 2s;
}
@keyframes animate-tail {
    100% {
        left: -24px;
    }
}
.beak {
    height: 100px;
    width: 100px;
    background: linear-gradient(to bottom, var(--beak-top) 0%, var(--beak-top) 15%, transparent 15% );
    left: 224px;
    top: 240px;
    z-index: -1;
    transform: rotate(-17deg);
    animation: animate-beak 1.5s forwards;
    animation-delay: 2s;
}
@keyframes animate-beak {
    100% {
        top: 40px;
    }
}
.leg {
    background: var(--leg);
    height: 50px;
    width: 10px;
    border-radius: 10px;
    top: 515px;
    left: 125px;
    transform: rotate(-15deg);
    z-index: 1;
    animation: animate-leg 1.5s forwards;
    animation-delay: 2s;
}
@keyframes animate-leg {
    100% {
        top: 215px;
    }
}
.leg::before {
    bottom: -8px;
    content: "";
    width: 40px;
    height: 9px;
    background: var(--leg);
    border-radius: 10px;
    transform: rotate(15deg);
    z-index: -1;
}
.leg::after {
    top: -8px;
    content: "";
    width: 30px;
    height: 9px;
    background: var(--leg);
    border-radius: 10px;
    transform: rotate(-15deg);
    z-index: -1;
}

h1 {text-align: center ;}
.feedback {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: 100px;
  right: 700px;
}
#mybutton1 {
  position: fixed;
  bottom: 100px;
  right: 600px;;
}
        </style>
    </head>
    <body style="background-color:powderblue;">

        <div class="container">
            <div class="body"></div>
           <div class="mouth"></div>
            <div class="beak"></div>
            <div class="feather"></div>
           <div class="tail"></div>
              <div class="leg"></div>
        </div>
        <h1 style="font-size:50px;">FINGERPRINT VOTING SYSTEM</h1>
        <div id="mybutton">
            <a href='login.php'>
            <button class="feedback">VOTER</button>
            </a>
            </div>
            <div id="mybutton1">
                <a href='login2.php'>
                <button class="feedback">ADMIN</button>
                </a>
                </div>
    </body>
</html>
