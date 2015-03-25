<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/03/15
 * Time: 10:57
 */

namespace GSB_Frais_MVC\GSBFraisBundle\Controller;

use GSB_Frais_MVC\GSBFraisBundle\Entity\BDD;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class VisiteurController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('GSBFraisBundle:Default:index.html.twig', array('name' => $name));
    }

    public function PrintFicheFraisAction()
    {
        $bdd = new BDD();
        return $this->render('GSBFraisBundle:Visiteur:fichefrais.html.twig',array('bdd' => $bdd));
    }

}