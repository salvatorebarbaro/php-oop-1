<?php



/**
 * DESCRIZIONE VARIABILI DI ISTANZA PER I FILM
 */
class movie{    
           
    /**
     * Nome del film 
     *
     * @var string
     */
    public $Nome;    
    /**
     * Durata del film
     *
     * @var int
     */
    public $Durata;    
    /**
     * Genere
     *
     * @var array
     */
    public $Genere = [];    
    /**
     * AnnoDiProduzione
     *
     * @var int
     */
    public $AnnoDiProduzione;    
    /**
     * Regista
     *
     * @var string
     */
    public $Regista;    
    /**
     * StatoFilm
     *
     * @var string
     */
    public $StatoFilm;

    // valori che io voglio che vengano inseriti per forza e viene neseguito ogni volta che creo un oggetto
    function __construct($_Nome,$_Durata,$_Genere,$_AnnoDiProduzione)
    {
        $this->Nome = $_Nome;
        // dichiarazione di un costruttore
        $this->Durata = $_Durata;

        $this->Genere = $_Genere;

        $this->AnnoDiProduzione = $_AnnoDiProduzione;

        $this->CalcEtaFilm($_AnnoDiProduzione);
        
    }

    public function CalcEtaFilm($AnnoDiProduzione){
        if((date("Y")-$AnnoDiProduzione)>2){
            $this->StatoFilm="vecchio";
        }
        else{
            $this->StatoFilm="Nuovo";
        }

    }
}

//primo film
$Matrix= new movie("matrix",120,["azione","fantastico","splatter"],1999);
$Dune=new movie("Dune",240,"fantasia", 2024);

// echo $Matrix->$StatoFilm;

$Films=[$Matrix,$Dune];

var_dump($Matrix->Genere)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>