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
                <img src="./img/jyotisar_3.jpg" alt="">
                <div class="card">
                    <h1>Pashupatinatha Temple</h1>
                    <ul>
                        <li><b>Location: </b>Pehowa Road District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological Place</li>
                        <li><b>Period: </b>Circa 16-17th Century AD</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=11">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    One of the oldest among the existing temples is Pashupatinath Temple. This temple is built around 16-17th Century. Infact the temple 
                    complex has as many as a five temples which may not be contemporary to one another. However, the temple which is called Pashupatinath 
                    temple is oldest among these temples. Architecturally, the temple resembles that of the Lakshmi Narayana temple on the bank of Sannehit. 
                    This temple is dedicated to Pashupatinath who is the 24th incarnation of Shiva. A chaturmukha linga of touchstone, (similar to the one 
                    at Pashupatinatha temple, Kathmandu, Nepal), is enshrined in its sanctorum. Built on a raised platform, the domed mandapa in front 
                    of the temple has exquisite murals on its ceiling. Pehowa is the Thanesar region had a very strong tradition 
                    of Savisim; spectrally known for its Pashupata cult. However, no image of Pashupatinath is worshipped here.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>