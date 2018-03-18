<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('@OCPlatform/Advert/index.html.twig', array('nom'=> 'winzou'));
    }

    public function byebyeAction()
    {
        return $this->render('@OCPlatform/Advert/byebye.html.twig');
    }

    public function viewAction($id)
    {
        return new Response("affichange de l'annonce d'id : ".$id);
    }

    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au slug '".$slug."', crée en ".$year." et au format ".$_format."."
        );
    }
}