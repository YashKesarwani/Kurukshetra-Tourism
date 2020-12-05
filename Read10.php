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
                <img src="./img/pathar_masjid_5.jpg" alt="">
                <div class="card">
                    <h1>Pathar Masjid</h1>
                    <ul>
                        <li><b>Location: </b>At the back side of Sheikh Chilli's Tomb in Bari Mohalla, District: Kurukshetra</li>
                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b>Circa 17th Century AD</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=10">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    The complex of Sheikh Chilli has a mosque known as Pather Masjid (Stone Mosque). Built using red sandstone, the mosque is located to the 
                    northern side of the Mughal garden in the complex. The pillars adorned with beautiful floral designs stands on the bases with 
                    mouldings depicting the chaitya-window motifs. The ceiling had intricate carvings. 
                    The ceiling of the mosque rests on pillars that are decorated with floral designs carved in low relief. The 'qibla' in the centre of the 
                    western wall is flanked on either side by two arched niches inscribed with verses from the Quran. The masonry terrace forming the front 
                    court was certainly added at a later stage. On the basis of the style of architecture, the Masjid appears to have been built in the 17th 
                    century AD. The structure also has verses from Quran inscribed on walls. The front court was a later addition to the mosque, which is 
                    believed to be built in the seventeenth century.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>