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
                <img src="./img/jyotisar_3.jpg" alt="">
                <div class="card">
                    <h1>Jyotisar</h1>
                    <ul>
                        <li><b>Location: </b>12 KMs from Kurukshetra on Pehowa Road District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place, Birth place of Bhagwad Gita</li>
                        <li><b>Rating: </b>4 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=6">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Located on the Kurukshetra-Pehowa Road just 12 km away from Kurukshetra town, Jyotisar is one of the sacred sites in 
                    India. The word Jyotisar is derived from Jyoti, which means light, and Sar, which means essence. It is believed to be 
                    the place where the Bhagwad Gita, the most respected scriptures among Hindus, was delivered by Krishna to prepare him 
                    for the great battle and remove all his doubts. By hearing Gita, Arjuna was able to face great warriors like Karna and 
                    Bhishma during the war. It is also the place where the Virat Roop (universal form) of Krishna was revealed to Arjuna.

                    In Jyotisar, there is a banyan tree, which is believed to be a part of the same banyan tree that witnessed the preaching 
                    of Gita. The tree is on a raise platform. People from across the world visit this place to pay their respect to the sacred 
                    Gita. The most important place in Jyotisar is where there is a beautiful statue of Krishna sitting on a chariot made of 
                    marble preaching the celestial Gita to Arjuna.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>