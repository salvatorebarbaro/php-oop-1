<?php

require 'db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class=" text-uppercase fs-1 mb-5 ">Catalogo film</h1>
        <ul class="row flex-column align-items-center  ">
            <?php 
            // iterazione in films per ogni film
            foreach($Films as $Film) {?>
                    
                    <div class="col-6 border border-3 border-black rounded-3 mb-4">
                        <h2 class="fs-1 text-danger text-uppercase "><?php echo $Film->Nome ?></h2>
                        <img class=" img-fluid mb-4 rounded-4 " src="<?php echo $Film->Img ?>" alt="">
                        <!-- usiamo implode per unire i valori dell'array in una stringa  -->
                        <p class="fs-4">Genere: <?php echo implode(",",$Film->Genere)  ?></p>
                        <p class="fs-4">Durata: <?php echo $Film->Durata ?> min </p>
                        <!-- Concatenzaione di elementi in php -->
                        <p class="fs-4">Regista: <?php echo $Film->Director->Nome ." ". $Film->Director->Cognome ." ". $Film->Director->Nazionalità ?></p>
                        <span class="fs-4 mb-5 " >Tipo: <?php echo $Film->StatoFilm ?> </span>
                    </div>
                
            <?php } ?>
        </ul>
        
        
    </div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>