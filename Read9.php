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
                <img src="./img/panorama_sci_cen_2.jpg" alt="">
                <div class="card">
                    <h1>Panorama and Science Centre</h1>
                    <ul>
                        <li><b>Location: </b>Pehowa Road, near Theme Park, Dukh Bhanjan Colony, District: Kurukshetra</li>
                        <li><b>Importance: </b>Science Museums</li>
                        <li><b>Timing: </b>Closes at 6pm</li>
                        <li><b>Rating: </b>4 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=9">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Kurukshetra Panorama and Science Centre is a unique Centre that combines science with religion. The main attraction of the 
                    Centre is a life-like panorama of the epic battle of Kurukshetra that showcases Mahabharata war with scientific explanations 
                    justifying every episode in the war. The magnificent two-storied building of the Centre has cylindrical walls. The Centre has 
                    an interesting exhibition called 'India: A Heritage in Science, Technology and Culture', consisting of working and interactive 
                    exhibits on ancient Indian concept of properties of matter, structure of atom, geometry, arithmetical rules, astronomy, medicine 
                    and surgery. The tall and cylindrical building has elegant architecture and ambience. On the centre of the cylindrical hall, 
                    there are paintings 34-feet in height depicting various episodes of Mahabharata from confrontation between the Pandavas and the 
                    Kauravas to the diorama of the battleground that epitomises the carnage realistically. The chanting of Gita and distant war 
                    cries blended with lighting illusions end a perfect ambience.

                    
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>