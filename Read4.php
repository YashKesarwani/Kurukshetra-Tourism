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
                <img src="./img/brahm_sarovar_1.jpg" alt="">
                <div class="card">
                    <h1>Brahma Sarovar</h1>
                    <ul>
                        <li><b>Location: </b>Brahma Sarovar Area, Thanesar, District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place, Sacred, historic Hindu water pool</li>
                        <li><b>Timings: </b>All time open</li>
                        <li><b>Rating: </b>4.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </li>
                        <li><a href="track.php?id=4">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                Brahma Sarovar, as its name suggests, is a water tank in Thanesar in Haryana. It is considered sacred by Hindus and is 
                incredibly beautiful. It is said that the water inside the tank can help those taking a dip in it to attain salvation. 
                It has been currently renovated and is equipped with modern state-of-the-art facilities. Brahma Sarovar is the most 
                exquisite and breathtaking site in Kurukshetra. Tourists can spend hours here watching the sunset with its reddish and 
                golden reflection in the water. This place is colourful and remains lively throughout which attracts visitors and make 
                them visit multiple times. There are handicraft shops and a variety of cuisines from different states to feed on making 
                it a must-visit place.

                A beautiful temple is situated inside the water which can be reached via a concrete bridge. The religious aartis conducted 
                here during sunrise and sunset offer an infinite sense of calm. The Bramha Sarovar also has a shrine dedicated to Lord Shiva 
                in the middle which can be accessed via a small bridge. Pilgrims and tourists visit the Brahma Sarovar in huge numbers during 
                the Solar Eclipse.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>