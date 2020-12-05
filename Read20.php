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
                <img src="./img/dharohar_museum_1.jpg" alt="">
                <div class="card">
                    <h1>Dharohar Museum</h1>
                    <ul>
                        <li><b>Location: </b>Jhansa Road, Thanesar town District: Kurukshetra</li>
                        <li><b>Importance: </b>Museum</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=20">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Dharohar Museum exhibits the rich historical, cultural, archaeological and architectural heritage of the state. It was established 
                    during the Golden Jubilee Year of the Kurukshetra University. The museum has over 23 galleries that display the rich heritage of the 
                    region through paintings, photographs, artefacts and manuscripts. The museum complex also has an open-air amphitheatre where folk 
                    performances are frequently organised.
                    In its golden jubilee year, the Kurukshetra University established within the campus, Dharohar, a museum to showcase the unique 
                    archeological, cultural and architectural heritage of Haryana. It also has an open-air theatre for cultural performances.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>