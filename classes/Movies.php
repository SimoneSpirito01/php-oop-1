<?php

class Movies {
    public $titolo;
    public $genere;
    public $regista;
    public $anno;
    public $paese;
    public $durata;

    function __construct($_titolo, $_genere, $_regista, $_anno, $_paese, $_durata)
    {
        $this->titolo = $this->getTitle($_titolo);
        $this->genere = $_genere;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->paese = $_paese;
        $this->durata = $_durata;
    }

    public function getTitle($title) {
        if(strlen($title) > 2) {
            return $title;
        } else {
            return 'undefined';
        }
    }
}