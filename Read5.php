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
                <img src="./img/mastgarh_pic1.jpg" alt="">
                <div class="card">
                    <h1>Gurudawara Mastgarh</h1>
                    <ul>
                        <li><b>Location: </b>Shahabad Markanda, 20 KMs south of Ambala Cantonment, Sher Shah Suri Marg, District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place</li>
                        <li><b>Rating: </b>3.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=5">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    It is located in Shahabad Markanda, 20, kilometers south of Ambala Cantonment along the Sher Shah Suri Marg. The principal 
                    mosque of the city was said to have been built by the Mughal emperor Shah Jahan in 1630. It was converted into a Gurudwara 
                    by demolishing its minarets, hoisting the Nishan Sahib (Sikh flag) over it and installing Guru Granth Sahib inside it. The 
                    domes and mehrab remained intact. It was given the name Gurdwara Mastgarh. 
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>