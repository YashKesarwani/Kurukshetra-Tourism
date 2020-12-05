<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="./styles/styles.css">
    <style>        .checked{ color:orange; }    </style>
</head>
<body>
<?php
    include "Header.html";
?>
    <section class="main">
        <div class="showcase">
            <div class="cards">
                <img src="./img/kartikeya_temple_1.jpg" alt="">
                <div class="card">
                    <h1>Kartikeya Temple</h1>
                    <ul>
                        <li><b>Location: Pehowa </b> District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place</li>
                        <li><b>Rating: </b>3=2.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=8">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
            <h2>
                History and Description
            </h2>
            <p class="info">
            Located at Pehowa, 27 kms.towards west of Kurukshetra, there are many tirthas, ghats and temples in and 
            around Pehowa. Lord Kartikeya temple is built at this site. According to legend, Lord Krishna made 
            Yudhishthira light two lamps for the 18 lakh warriors who died in the battle of Mahabharata. These lamps 
            flank the temple and it is believed that they have been continuously lit since then.
            </p>
        </div>    

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>