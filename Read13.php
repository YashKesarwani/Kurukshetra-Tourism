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
                <img src="./img/harsh_ka_tila_1.jpg" alt="">
                <div class="card">
                    <h1>Raja Harsha ka Tila</h1>
                    <ul>
                        <li><b>Location: </b>Adjacent to Sheikh Chilli's Tomb, Thanesar, District: Kurukshetra</li>
                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b>Circa 10th century BC to 1st Century AD</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=13">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Located in Kurukshetra, ‘Harsh Ka Tila’ is about a kilometer long mound. An excavation of the mound has revealed remnants from the 
                    period when the King Harshvardhan was the ruler (7th century). The site is of archaeological importance. The items recovered from 
                    the mound display a specific order of civilizations starting from the Kushana period to Mughal era. The excavation has revealed 
                    that the site has been continuously inhabited from the around the first century. Painted grey ware, red wares and black wares from 
                    the pre-Kushana period have also been found at the site.
                    The archaeological excavations of this site have thrown significant light on successive remains of an ancient city settlement. 
                    The site spread over an area of 1kmx750 m. This site was excavated by Shri B.M.Pandey of Archaeological Survey of India. A few 
                    potsherds of Painted Grey Ware found from the lowest level of the site indicate the existence of a settlement before starting a 
                    continuous habitation at the site since Christian era.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>