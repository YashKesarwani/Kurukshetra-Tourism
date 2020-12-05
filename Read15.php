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
                <img src="./img/sannihit_sarovar_3.jpg" alt="">
                <div class="card">
                    <h1>Sannihit Sarovar</h1>
                    <ul>
                        <li><b>Location: </b>3 KMs from Kurukshetra on Pehowa Road, District: Kurukshetra</li>
                        <li><b>Importance: </b>Sacred & Religious Sites</li>
                        <li><b>Rating: </b>4 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=15">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Measuring up to 550 ft in width and 1500 ft in height, Sannihit Sarovar is believed to be the meeting point of seven 
                    tributaries of Saraswati River and the home of Lord Vishnu.

                    It is believed that bathing on the day of Amavasya or on the day of an eclipse would fetch the fortune of an aswamedha 
                    yajna. Sarovar premises also houses shrines of Dhruv Narayan, Sri Hanuman, Lord Vishnu, Dhruv Bhagat, Laxmi Narayan and 
                    Goddess Durga.  It is supposed that entire range of Tirthas assembles here on the day of Amavasya and as per the legends, 
                    if a man performs Shradhs at the time of solar eclipse and takes bath in this tank, he acquires the fruit of 1000 Ashwamedh 
                    crifices. At the time of solar eclipse, pilgrims gather at this holy spot. Interestingly visitors to this place can know 
                    about their ancestors from the Purohits or locally known as Pandas, who for ages have been the record keepers of the 
                    pilgrims coming from various parts of the country.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>