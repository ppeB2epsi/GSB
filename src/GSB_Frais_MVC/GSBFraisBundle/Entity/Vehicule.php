<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 */
class Vehicule
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Vehicule
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Vehicule
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}