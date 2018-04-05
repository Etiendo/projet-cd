<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Pois;

class MapController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function mapBrowseAction(Request $request)
    {
        // $pois = $this->getDoctrine()
        // ->getRepository('AppBundle:Pois')
        // ->findAll();

        // return $this->render('default/index.html.twig', array('pois' => $pois));
        return $this->render('default/index.html.twig');
    } 

    /**
     * @Route("/map_profile/{id}", name="map_browse")
     */
    public function mapBrowseIdAction($id, Request $request)
    {
        $id = $this->getUser()->getId();
        $pois = $this->getDoctrine()
        ->getRepository('AppBundle:Pois')
        ->findPoisMap($id);

        return $this->render('default/map_browse.html.twig', array('pois'=> $pois));
        // résoudre problème user_id requête http vers controller v1 natif (ne prend en compte que user_id = 0)
    }

    /**
     * @Route("/add_poi", name="add_poi")
     */
    public function addPoiMapAction(Request $request)
    {
        $poi =  new Pois;

        $form = $this->createFormBuilder($poi)
        ->add('name', TextType::class)
        ->add('lat', NumberType::class)
        ->add('lng', NumberType::class)
        ->add('ajouter_poi', SubmitType::class)
        ->getForm();

        $form = handleRequest($request);
        if ($form -> isSubmitted() && $form->isValid()) {

            $name = $form['nom_echoppe']->getData();
            $lat = $form['latitude']->getData();
            $lng = $form['longitude']->getData();

            $poi -> setName($name);
            $poi -> setLat($lat);
            $poi -> setLng($lng);

            $em = $this -> getDoctrine() -> getManager();
            $em -> persit($poi);
            $em -> flush();

            $this -> addFlash('notice', 'Poi ajouté !');

            return $this -> render('default/map_browse.html.twig', array('form' => $form -> createView()));

            // return $this -> redirectToRoute('map_browse');
        }

    }
}
