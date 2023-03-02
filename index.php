<?php
 $timezone= date_default_timezone_set('Asia/Kolkata');
    echo date('d l M')."<br>";
    echo date("h:i:sA");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body onload="DefaultScreen()">
    <center>
        <h1 id="Para1">5 Days Weather Forecast</h1>
        <p id="inputContainer">City: <input type="text" id="cityInput"></p>
        <button type="button" onclick="GetInfo()">Click Me</button>
        <br>
        <br>        
        <h2 id="cityName">---Pune---</h2>
         </center>
         <br>
         <br>


<div id = "weatherContainer">
        <div id="iconsContainer">    
            <div class = "icons">
                <p class="weather" id="day1"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img1"></div>
                <p class="minValues" id="day1Min">Loading...</p>
                <p class="maxValues" id="day1Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day2"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img2"></div>
                <p class="minValues" id="day2Min">Loading...</p>
                <p class="maxValues" id="day2Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day3"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img3"></div>
                <p class="minValues" id="day3Min">Loading...</p>
                <p class="maxValues" id="day3Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day4"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img4"></div>
                <p class="minValues" id="day4Min">Loading...</p>
                <p class="maxValues" id="day4Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day5"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img5"></div>
                <p class="minValues" id="day5Min">Loading...</p>
                <p class="maxValues" id="day5Max">Loading...</p>
            </div>
        </div>
    </div>


        <script src="main.js"></script>


</body>
</html>
