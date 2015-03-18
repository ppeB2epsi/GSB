<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 */
class Visiteur
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $mdp;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $cp;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var \DateTime
     */
    private $dateembauche;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule
     */
    private $idvehicule;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Visiteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Visiteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Visiteur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Visiteur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Visiteur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Visiteur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Visiteur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set dateembauche
     *
     * @param \DateTime $dateembauche
     * @return Visiteur
     */
    public function setDateembauche($dateembauche)
    {
        $this->dateembauche = $dateembauche;
    
        return $this;
    }

    /**
     * Get dateembauche
     *
     * @return \DateTime 
     */
    public function getDateembauche()
    {
        return $this->dateembauche;
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
     * Set idvehicule
     *
     * @param \GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule $idvehicule
     * @return Visiteur
     */
    public function setIdvehicule(\GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule $idvehicule = null)
    {
        $this->idvehicule = $idvehicule;
    
        return $this;
    }

    /**
     * Get idvehicule
     *
     * @return \GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule 
     */
    public function getIdvehicule()
    {
        return $this->idvehicule;
    }
}