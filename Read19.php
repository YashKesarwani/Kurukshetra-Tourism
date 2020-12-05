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
                <img src="./img/vishvamitra_ka_tila_1.jpg" alt="">
                <div class="card">
                    <h1>Vishvamitra Ka Tila</h1>
                    <ul>
                        <li><b>Location: </b>Southern bank of Sarasvati river in the outskirts of Pehowa town, District: Kurukshetra</li>
                        <li><b>Managed by: </b>Haryana Government</li>
                        <li><b>Period: </b>Circa 9th AD</li>
                        <li><b>Importance: </b>Archeological Structure</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=19">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                The name of this town, Pehowa, is derived from its Pauranic name, Prithudaka, and the legend goes that king Prithu was the 
                founder of this town. Two inscriptions of Gurjar-Pratihara period have been found at Pehowa. One inscription from this place 
                records the creation of three Vishnu temples in this town. Another inscription, still in the Garibnath Mutth at Pehowa, of 
                Raja Bhojdeva of 882 AD, records collection of voluntary tax from each trader for the purpose of maintenance of these Vishnu 
                temples existing there and elsewhere. This site of Vishvamitra ka Tila too contained the remains of one of the Vishnu temples
                 at this place.

                This temple site was scientifically cleared under the direction of Shri D.S.Malik of the Department of Archaeology & Museum, 
                Government of Haryana. 
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>