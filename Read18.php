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
                <img src="./img/sthaneshwara_mahadev_1.jpg" alt="">
                <div class="card">
                    <h1>Sthaneshwara Mahadev Temple</h1>
                    <ul>
                        <li><b>Location: </b>8 KMs from city center, Thanesar, District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological Place</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=18">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
            <h2>
                History and Description
            </h2>
            <p class="info">
                Sthaneshwar Mahadev Temple is dedicated to Lord Shiva and has an ancient Shivalinga. It is where, devotees believe, that Lord Krishna 
                and Pandavas prayed to seek blessings from Lord Shiva before the legendary battle of Mahabharata. The temple has a sacred water tank 
                and the water obtained from it is believed to cure any disease.
                Sthaneshwara Mahadev Temple is situated at Thanesar. There lies a story behind this temple that Pandavas prayed to Lord Shiva to 
                receive his blessings for the victory in the battle of Mahabharata. So, the water of the tank adjoining the temple is believed to be 
                holy. It is believed that Kurukshetra pilgrimage visit is incomplete without visiting this temple. The temple of Sthaneshwara was an 
                important part of the kingdom of King Harsh Vardhana of Pushyabhuti dynasty.
            </p>
        </div>    

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>