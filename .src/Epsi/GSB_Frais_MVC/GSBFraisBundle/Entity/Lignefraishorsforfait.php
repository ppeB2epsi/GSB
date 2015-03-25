<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraishorsforfait
 *
 * @ORM\Table(name="lignefraishorsforfait")
 * @ORM\Entity
 */
class Lignefraishorsforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="GSB_Frais_MVC\GSBFraisBundle\Entity\Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="idVisiteur"),
     *   @ORM\JoinColumn(name="mois", referencedColumnName="mois")
     * })
     */
    private $idvisiteur;


}
