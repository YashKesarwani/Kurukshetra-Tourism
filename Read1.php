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
    <style>
        .checked{
            color:orange;
        }
    </style>
</head>
<body>
<?php
    include "Header.html";
?>
    <section class="main">
        <div class="showcase">
            <div class="cards">
                <img src="./img/amin_pic1.jpg" alt="">
                <div class="card">
                    <h1>Ancient Mound Amin</h1>
                    <ul>
                        <li><b>Location: </b>Village Amin, Located on Kurukshetra Badthal road, about 8 km from Kurukshetra, District: Kurukshetra</li>

                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b>Circa 10th century BC to 1st Century AD</li>
                        <li><b>Rating: </b>3.4 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=1">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    The name of the village, Amin, is derived from Abhimanyu, the son of Arjun, the hero of Mahabharata. The ancient site at this 
                    village is popularly known as 'Abhimanyukhera'. It is believed that this is the site of famous Chakravyuha, arranged by the 
                    Kauravas to fight with Pandavas. Abhimanyu, the son of Arjun had been trapped in this Chakravyuha and killed during Mahabharata 
                    war. The ancient site, in the shape of a mound, occupies an area of 650x250 m. with maximum height of 10 m. Two inscribed red 
                    sandstone pillars adorn with reliefs of Yaksha and other decorative motifs of Circa 2nd century BC were found here and at 
                    present are displayed in the Sculpture Gallery at National Museum, New Delhi.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>