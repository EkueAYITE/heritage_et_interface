<?php

class SportRelais extends Sport
{
    private$distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomsport,int $nbJoueur,int $distance)
    {
        parent::__construct($nomsport,$nbJoueur);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance():int
    {
        return $this->distance;
    }
    public function getDescription(): string
    {
        return 'Description " Nom du sport: '.$this->getNomsport()." Nombre de joueur: ".$this->getNbjoueur().'distance a parcourir'.$this->distance.'"<br>';
    }
}