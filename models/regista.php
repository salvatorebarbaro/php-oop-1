<?php
class Director{
    public $Nome;
    public $Cognome;
    public $Nazionalità;

    function __construct($_Nome,$_Cognome,$_Nazionalità)
    {
        $this->Nome = $_Nome;

        $this->Cognome = $_Cognome;

        $this->Nazionalità = $_Nazionalità;
    }
}
?>