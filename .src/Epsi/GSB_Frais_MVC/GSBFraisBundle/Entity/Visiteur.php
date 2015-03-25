<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity
 */
class Visiteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=200, nullable=true)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=true)
     */
    private $ville;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbauche", type="date", nullable=true)
     */
    private $dateembauche;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule
     *
     * @ORM\ManyToOne(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVehicule", referencedColumnName="id")
     * })
     */
    private $idvehicule;


}
