<?php

class Club implements Comparable

    {
        private $idclub;
        private $nomclub;
        private $nbpoint;
        private $lesSport = array();

        /**
        * @param $idclub
        * @param $nomclub
        * @param $nbpoint
        * @param array $lessport
        */
        public function __construct(int $idclub,string $nomclub,int $nbpoint)
        {
            $this->idclub = $idclub;
            $this->nomclub = $nomclub;
            $this->nbpoint = $nbpoint;
        }

    /**
     * @return int
     */
    public function getIdclub(): int
    {
        return $this->idclub;
    }

    /**
     * @return string
     */
    public function getNomclub():string
    {
        return $this->nomclub;
    }

    /**
     * @return int
     */
    public function getNbpoint(): int
    {
        return $this->nbpoint;
    }

    /**
     * @return array
     */
    public function getLessport(): array
    {
        return $this->lesSport;
    }
    public function Ajoutersport(Sport $sport)
    {
        $this->lesSport[]=$sport;
    }

    public function compareTo()
    {
        // TODO: Implement compareTo() method.
    }


}