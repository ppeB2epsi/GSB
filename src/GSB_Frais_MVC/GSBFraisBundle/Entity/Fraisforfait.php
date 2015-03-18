<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraisforfait
 */
class Fraisforfait
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $montant;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idvisiteur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idvisiteur = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Fraisforfait
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
     * Set montant
     *
     * @param string $montant
     * @return Fraisforfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add idvisiteur
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur
     * @return Fraisforfait
     */
    public function addIdvisiteur(\GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur)
    {
        $this->idvisiteur[] = $idvisiteur;
    
        return $this;
    }

    /**
     * Remove idvisiteur
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur
     */
    public function removeIdvisiteur(\GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur)
    {
        $this->idvisiteur->removeElement($idvisiteur);
    }

    /**
     * Get idvisiteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
}