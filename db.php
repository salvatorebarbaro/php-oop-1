<?php
require './models/films.php';
require './models/regista.php';


// Creiamo un nuovo oggetto Director
$Andy = new Director("Andy", "Wachowski", "USA");

$tarantino = new Director("Quentin", "Tarantino", "USA");

$George = new Director("George","Miller","AU");

//primo film
$Matrix= new movie("matrix",136,["Arti Marziali","Fantascienza","Cyberpunk"],1999,$Andy,'https://www.themoviedb.org/t/p/original/sRaupdJawe6UTS0t77vwJoLjd7h.jpg');
//secondo film
$Dune=new movie("Dune",240,["Romantico","Avventura","fantasia"], 2024,$tarantino,'https://www.themoviedb.org/t/p/original/7S56MF6XA1jIzD9I2ejMjd6aNvN.jpg');
//Terzo film
$MadMax = new movie("Mad Max Fury Road",120,["Azione","Fantascienza","Avventura"],2015,$George,'https://th.bing.com/th/id/R.ad928e3c2dc4a7ac8016b167d8d1dbcc?rik=0KD2iyK0YG6ZGw&riu=http%3a%2f%2fstatic.cinepollo.com%2fwp-content%2fuploads%2f2015%2f05%2fmad_max_fury_road-poster-662x1024.jpg&ehk=b0VNLJ438%2bb41%2fQFQ6aAJzW4YZi1Uvgxuuiddf72sjI%3d&risl=&pid=ImgRaw&r=0');



//abbiamop inserito i film in un array
$Films=[$Matrix,$Dune,$MadMax];




?>