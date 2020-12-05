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
                <img src="./img/kalpana_chawla_1.jpg" alt="">
                <div class="card">
                    <h1>Kalpana Chawla Memorial Planetarium</h1>
                    <ul>
                        <li><b>Location: </b>6 KM from city center, Pehowa Road, District: Kurukshetra</li>
                        <li><b>Importance: </b>Observatories & Planetariums</li>
                        <li><b>Rating: </b>3.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=7">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    The Kalpana Chawla Memorial Planetarium is named after the brave daughter of Haryana Dr. Kalpana Chawla. It is located near 
                    Jyotisar on Pehowa Road.It is based on astronomy and its 
                    study in the Indian civilization since pre-historic times. The planetarium has interesting exhibits and short films 
                    that help visitors gain knowledge and inculcate more interest about the subject in the student's minds. The planetarium was 
                    established on 24th July 2007 by Haryana State Council for Science and Technology. The planetarium has exhibits placed both 
                    inside and outside of the building. The place is developed and arranged in such a way that it helps curious people and 
                    particularly students learn amazing aspects of science and satisfy their minds with a vivid range of information about 
                    the universe.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>