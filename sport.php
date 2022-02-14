<?php

class Sport implements ISport
{
    private $nomsport;
    private $nbjoueur;

    /**
     * @param $nomsport
     * @param $nbjoueur
     */
    public function __construct(string $nomsport,int $nbjoueur)
    {
        $this->nomsport = $nomsport;
        $this->nbjoueur = $nbjoueur;
    }

    /**
     * @return string
     */
    public function getNomsport(): string
    {
        return $this->nomsport;
    }

    /**
     * @return int
     */
    public function getNbjoueur(): int
    {
        return $this->nbjoueur;
    }

    public function getDescription(): string
    {
        return 'Description " Nom du sport: '.$this->nomsport." Nombre de joueur: ".$this->nbjoueur.'"<br>';
    }
}