<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraishorsforfait
 */
class Lignefraishorsforfait
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $montant;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais
     */
    private $idvisiteur;


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Lignefraishorsforfait
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
     * Set date
     *
     * @param \DateTime $date
     * @return Lignefraishorsforfait
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Lignefraishorsforfait
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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idvisiteur
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur
     * @return Lignefraishorsforfait
     */
    public function setIdvisiteur(\GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais $idvisiteur = null)
    {
        $this->idvisiteur = $idvisiteur;
    
        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
}