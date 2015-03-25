<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity
 */
class Etat
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
