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
                <img src="./img/sheikh_chilli_tomb_1.jpg" alt="">
                <div class="card">
                    <h1>Sheikh Chilli’s Tomb</h1>
                    <ul>
                        <li><b>Location: </b>Situated in Bari Mohalla, Thanesar, District: Kurukshetra</li>
                        <li><b>Importance: </b>Historical Place</li>
                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b> Circa 17th Century AD</li>
                        <li><b>Rating: </b>3.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=16">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    Sheikh Cheli Mausoleum or Sheikh Chilli's Tomb was built in the memory of the Sufi master of Prince Dara Shikoh. The attraction is a 
                    stunning illustration of Persian architecture with beautiful floral designs. The complex has Sheikh Chilli's and his wife's tomb, a 
                    mosque made of red sandstone, madrasa, beautifully maintained lawns and an Archaeological Museum making it a perfect tourist attraction.
                    This beautiful tomb and the madarasa (school) are associated with the Sufi saint Abdu'r-Rahim alias Aabd-ul-Razak, popularly known as Shaikh 
                    Chehli (also pronounced Chilli) believed to be the spiritual teacher of the Mughal Prince Dara Shikoh, the eldest son of Emperor Shahjahan. 
                    The tomb, overlooking the madarasa and standing on an artificial terrace, is octagonal in shape with the entrance in the south. It is built 
                    of buff sandstone and is crowned with a pear-shaped dome of white marble standing on a high circular drum. The cenotaph of saint occupies the 
                    centre of the chamber, while his grave is located in the lower chamber, which conjoins the madarasa through a narrow gallery.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>