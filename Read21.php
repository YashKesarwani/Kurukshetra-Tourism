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
                <img src="./img/op_jindal_1.jpg" alt="">
                <div class="card">
                    <h1>OP Jindal Park & Musical Fountain</h1>
                    <ul>
                        <li><b>Location: </b>Thanesar town District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological Place</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=21">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    OP Jindal Park & Musical Fountain was built in the memory of the Power Minister of the state, O P Jindal. The attraction is an 
                    expansive park covering about 14 acres of land that has lush green lawns with fountains, a jogging park, fully functioning 
                    children's play area, a quiet meditation centre and a fragrant rose garden.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>