<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 */
class Fichefrais
{
    /**
     * @var integer
     */
    private $nbjustificatifs;

    /**
     * @var string
     */
    private $montantvalide;

    /**
     * @var \DateTime
     */
    private $datemodif;

    /**
     * @var string
     */
    private $mois;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur
     */
    private $idvisiteur;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Etat
     */
    private $idetat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idfraisforfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfraisforfait = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nbjustificatifs
     *
     * @param integer $nbjustificatifs
     * @return Fichefrais
     */
    public function setNbjustificatifs($nbjustificatifs)
    {
        $this->nbjustificatifs = $nbjustificatifs;
    
        return $this;
    }

    /**
     * Get nbjustificatifs
     *
     * @return integer 
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide
     *
     * @param string $montantvalide
     * @return Fichefrais
     */
    public function setMontantvalide($montantvalide)
    {
        $this->montantvalide = $montantvalide;
    
        return $this;
    }

    /**
     * Get montantvalide
     *
     * @return string 
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Fichefrais
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;
    
        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set mois
     *
     * @param string $mois
     * @return Fichefrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
    
        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set idvisiteur
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur $idvisiteur
     * @return Fichefrais
     */
    public function setIdvisiteur(\GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur $idvisiteur = null)
    {
        $this->idvisiteur = $idvisiteur;
    
        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }

    /**
     * Set idetat
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Etat $idetat
     * @return Fichefrais
     */
    public function setIdetat(\GSB_Frais_MVC\GSBFraisBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;
    
        return $this;
    }

    /**
     * Get idetat
     *
     * @return \GSB_Frais_MVC\GSBFraisBundle\Entity\Etat 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Add idfraisforfait
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Fraisforfait $idfraisforfait
     * @return Fichefrais
     */
    public function addIdfraisforfait(\GSB_Frais_MVC\GSBFraisBundle\Entity\Fraisforfait $idfraisforfait)
    {
        $this->idfraisforfait[] = $idfraisforfait;
    
        return $this;
    }

    /**
     * Remove idfraisforfait
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Fraisforfait $idfraisforfait
     */
    public function removeIdfraisforfait(\GSB_Frais_MVC\GSBFraisBundle\Entity\Fraisforfait $idfraisforfait)
    {
        $this->idfraisforfait->removeElement($idfraisforfait);
    }

    /**
     * Get idfraisforfait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }
}