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
                <img src="./img/bhadrakali_temple_2.jpg" alt="">
                <div class="card">
                    <h1>Bhadrakali Temple</h1>
                    <ul>
                        <li><b>Location: </b>Jhansa Road, Kuber colony District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=2">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                    The Bhadrakali Temple is situated on the Jhansa Road in the town of Thanesar in the district of Kurukshetra. 
                    Bhadrakali is a form of Shakti. This is considered to be one of the 51 Shakti 'pithas' of India. It is believed that an 
                    anklet of Sati fell in the well. The mythical incident of Sati is being recalled here with a marble ankle.

                    It is also believed that Pandavas along with Lord Krishna worshipped Ma Durga and after the victory in Mahabharata battle, 
                    they came here again to worship Mother Goddesses. They also offered their horses in her service. Since that day, the 
                    devotees offer terracotta and metal horses to the deity after their wishes are fulfilled. It is also believed that 
                    'mundan' (hair removing) ceremony of Sri Krishna and Balram was performed in this temple.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>