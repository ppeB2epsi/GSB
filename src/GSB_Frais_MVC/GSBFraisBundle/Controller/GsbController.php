<?php

namespace Gsb\Bundle\GsbFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\Bundle\GsbFraisBundle\Entity\Visiteur;
use Gsb\Bundle\GsbFraisBundle\Entity\Vehicule;
use Symfony\Component\HttpFoundation\Response;

class GsbController extends Controller
{
    public function indexAction()
    {
//
//        $vehicule = new Vehicule();
//        $vehicule->setLibelle('Renault');
//        $vehicule->setPrix(5000);
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($vehicule);
//        $em->flush();
//
//        $visiteur = new Visiteur();
//        $visiteur->setNom('Test');
//        $visiteur->setPrenom('Test');
//        $visiteur->setLogin('Test');
//        $visiteur->setMdp(sha1('test'));
//        $visiteur->setAdresse('rue de test');
//        $visiteur->setCp('69004');
//        $visiteur->setVille('Lyon');
//        $visiteur->setDateembauche(new \DateTime("now"));
//        $visiteur->setIdvehicule($vehicule);
//        var_dump($visiteur);
////
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($visiteur);
//        $em->flush();
//
//        return new Response('Id du visiteur créé : '.$visiteur->getId());
    }

    public function selectAction($id)
    {
        echo $id;
    }
}