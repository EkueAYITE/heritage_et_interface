<?php

class Sportballon extends Sport
{
    private  $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomSport, int $nbjoueur,int $largeur,int $longueur)
    {
        parent::__construct($nomSport, $nbjoueur);
        $this->largeur = $largeur;
        $this->longuer = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    public function getDescription(): string
    {
        return 'Description  Nom du sport: '.$this->getNomsport().' Nombre de joueur: ' .$this->getNbjoueur().' largeur a parcourir ' .$this->largeur.' longueur du terrain ' .$this->longueur. ' <br>';
    }
}