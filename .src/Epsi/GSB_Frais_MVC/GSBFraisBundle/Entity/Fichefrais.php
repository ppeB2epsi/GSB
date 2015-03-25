<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="fichefrais")
 * @ORM\Entity
 */
class Fichefrais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="decimal", nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur
     *
     * @ORM\OneToOne(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="id", unique=true)
     * })
     */
    private $idvisiteur;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Etat
     *
     * @ORM\ManyToOne(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="id")
     * })
     */
    private $idetat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Fraisforfait", mappedBy="idvisiteur")
     */
    private $idfraisforfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfraisforfait = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
