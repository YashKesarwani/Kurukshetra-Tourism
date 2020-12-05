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
                <img src="./img/prachi_shiva_temple_4.jpg" alt="">
                <div class="card">
                    <h1>Prachin Shiva Temple</h1>
                    <ul>
                        <li><b>Location: </b>Southern bank of Sarasvati river in the Pehowa town, District: Kurukshetra</li>
                        <li><b>Importance: </b>Mythological Place</li>
                        <li><b>Managed by: </b>Government of India</li>
                        <li><b>Period: </b>Circa 10th century BC to 1st Century AD</li>
                        <li><b>Rating: </b>3 of 5
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li><a href="track.php?id=12">Track Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="desc">
                <h2 >
                    History and Description
                </h2>
                <p class="info">
                The name of this town is derived from Prithudaka, as king Prithu was the founder of this town. The ancient site of Prachi Shiva 
                temple has yielded a number of the sculptors of Gods and Goddesses of Hindu Pantheon. These discoveries lead to the presumption 
                that it was the site of one of the Vishnu temples, which are referred in the Pehowa inscriptions. Another Vishnu temple site in 
                this town is Vishvamitra ka Tila.
                A few sculptures have been collected by the State Department of Archaeology from this site. But many of them are now fixed in 
                the walls of modern temples at Prachi Tirth. At least, three stone doorframes of ancient temple now stand fixed on the different 
                entrances of newly built Prachi Shiva temple. Two of them are very important, as they depict Navagraha, Saptamatrikas and the 
                figures of Goddesses: Ganga and Yamuna and also a Vishnu image on the Lalatbimba, which signifies the presence of a Vishnu temple 
                here in the past.
                </p>
            </div>

    </section>
<?php
    include "Footer.html";
?>
</body>
</html>