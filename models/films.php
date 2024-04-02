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
     * @var object
     */
    public $Director;    
    /**
     * StatoFilm
     *
     * @var string
     */
    public $StatoFilm;

    public $Img;

    // valori che io voglio che vengano inseriti per forza e viene neseguito ogni volta che creo un oggetto
    function __construct($_Nome,$_Durata,$_Genere,$_AnnoDiProduzione,$_Director,$_Img)
    {
        $this->Nome = $_Nome;
        // dichiarazione di un costruttore
        $this->Durata = $_Durata;

        $this->Genere = $_Genere;

        $this->AnnoDiProduzione = $_AnnoDiProduzione;

        $this->CalcEtaFilm($_AnnoDiProduzione);

        $this->Director = $_Director;

        $this->Img = $_Img;
        
    }

    public function CalcEtaFilm($AnnoDiProduzione){
        if((date("Y")-$AnnoDiProduzione)>2){
            $this->StatoFilm="vecchia scuola";
        }
        else{
            $this->StatoFilm="Nuovo";
        }

    }
}

?>