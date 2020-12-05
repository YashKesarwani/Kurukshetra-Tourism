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
                <img src="./img/bhishma_kund_3.jpg" alt="">
                <div class="card">
                    <h1>Bhishma Kund, Narkatari</h1>
                    <ul>
                        <li><b>Location: </b>Narakatari Village, District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological place</li>
                        <li><b>Rating: </b>4 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=3">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
            <h2>
                History and Description
            </h2>
            <p class="info">
                Another place that bears a connection with the great epic Mahabharata, this is the place where it is believed that Pitamaha
                Bhishma lay watching the famous battle after Arjun, created a bed of arrows for him. The place now has a temple next to a 
                water tank called the Banganga or the Bhishma Kund.

                There is a legend attached to this water tank. It says that, when Bhishma lay on his bed of arrows, he felt thirsty and 
                asked for water. To fulfil his desire, Arjuna immediately shot an arrow into the ground and let loose a stream of gushing 
                water. This is how the Bhishma Kund is believed to come into existence.
            </p>
        </div>    

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>