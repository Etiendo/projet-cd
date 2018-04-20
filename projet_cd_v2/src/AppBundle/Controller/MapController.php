<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
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
     * @Route("/map_profile", name="map_browse")
     */
    public function mapBrowseIdAction(Request $request)
    {
        $id = $this->getUser()->getId(); // pois ne se chargent pas avec l'id dans URL
        $pois = $this->getDoctrine()
        ->getRepository('AppBundle:Pois')
        ->findPoisMap($id);

        return $this->render('default/map_browse.html.twig', array('pois'=> $pois));
        // résoudre problème user_id requête http vers controller v1 natif (ne prend en compte que user_id = 0)
    }

    /**
     * @Route("/add_poi_map", name="add_poi")
     */
    public function addPoiMapAction(Request $request)
    {
        // récupère l'id de l'utilisateur connecté
        $user_id = $this->getUser()->getId();

        // récupère la map
        $map = $this->getDoctrine()
        ->getRepository('AppBundle:Maps')->find($user_id);

        $poi =  new Pois;

        $form = $this->createFormBuilder($poi)
        ->add('name', TextType::class)
        ->add('lat', NumberType::class)
        ->add('lng', NumberType::class)
        ->add('ajouter_poi', SubmitType::class)
        ->getForm();

        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid()) {

            $name = $form['name']->getData();
            $lat = $form['lat']->getData();
            $lng = $form['lng']->getData();

            $poi->setName($name);
            $poi->setLat($lat);
            $poi->setLng($lng);
            $poi->setMap($map);

            $em = $this -> getDoctrine()->getManager();
            $em->persist($poi);
            $em->flush();

            $this -> addFlash('notice', 'Poi ajouté !');

            return $this -> redirectToRoute('map_browse');
        }
        return $this -> render('default/add_poi.html.twig', array('form' => $form -> createView()));
    }

    /**
     * @Route("edit_poi_map", name="edit_poi")
     */
    public function editPoiAction()
    {

    }

    /**
     * @Route("delete_poi_map", name="delete_poi")
     */
    public function deletePoiAction()
    {

    }
}
