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
                <img src="./img/karna_ka_qila_3.jpg" alt="">
                <div class="card">
                    <h1>Raja Karna ka Qila</h1>
                    <ul>
                        <li><b>Location: </b> About 3 kms. south-west of Thanesar. Adjacent to the Kurukshetra University Campus, District: Kurukshetra</li>
                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b>Circa 400 BC to 300 AD & Medieval Culture</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=14">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Raja Karna Ka Qila is a site belonging to three cultural periods in the region ranging from 4th Century BC to 3rd Century AD. It was 
                    first surveyed and excavated in 1921 by Archaeological Survey of India. The artefacts recovered include terracotta seals, fabrics, 
                    terracotta beads, stamped pottery, bricks, clay artefacts & seals. One can also see fortification of small houses preserved quite 
                    well over the years.
                    The mound, first surveyed by Alexander Cunningham, was excavated by D.B. Spooner of Archeological Survey of India in 1921-23. Later, 
                    the archeological excavations by Prof U.V.Singh of Department of Ancient Indian History, Culture and Archaeology, Kurukshetra University, 
                    Kurukshetra have yielded the remains of three cultural periods ranging from Circa 4th century BC to 3rd century AD.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>