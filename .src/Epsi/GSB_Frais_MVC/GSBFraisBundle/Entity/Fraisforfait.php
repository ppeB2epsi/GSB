<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraisforfait
 *
 * @ORM\Table(name="fraisforfait")
 * @ORM\Entity
 */
class Fraisforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais", mappedBy="idfraisforfait")
     */
    private $idvisiteur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idvisiteur = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
