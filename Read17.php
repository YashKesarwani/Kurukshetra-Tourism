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
                <img src="./img/shri_krishna_museum_1.jpg" alt="">
                <div class="card">
                    <h1>Shri Krishna Museum</h1>
                    <ul>
                        <li><b>Location: </b>Near Brahma Sarovar, Thanesar, District: Kurukshetra</li>
                        <li><b>Importance: </b>Museums</li>
                        <li><b>Rating: </b>3.5 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=17">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
            <h2>
                History and Description
            </h2>
            <p class="info">
                Founded in 1987, Krishna Museum houses various artifacts of Lord Krishna and Krishna's incarnations from 1st Century AD to 
                11th Century AD. The museum housing six galleries also showcases the statues in the forms as described in the Bhagavata 
                Purana and Mahabharata.
                The exhibits in the galleries consist of exquisite woodcarvings, wooden panels, bronze casting, ivory works, palm- leaf 
                etchings, stone sculptures, archaeological artifacts and miniature paintings. There is also a tableaux made from Papier-mache 
                and clay, based on Bhagavata and Mahabharata.
                The museum has six galleries, three each in two blocks. On display are stone sculptures, bronze castings, leaf etchings, 
                miniature paintings, clay pottery and terracotta artifacts. 
            </p>
        </div>    

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>