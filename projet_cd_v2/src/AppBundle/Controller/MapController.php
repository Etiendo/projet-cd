<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MapController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function mapBrowseAction(Request $request)
    {
        $pois = $this->getDoctrine()
        ->getRepository('AppBundle:Pois')
        ->findAll(); // va mettre dans un tableau tous les champs et notamment map_id

        return $this->render('default/index.html.twig', array('pois' => $pois));

        //trouver comment aller chercher l'id de la map lorsque utilisateur connecté
    } 
}
