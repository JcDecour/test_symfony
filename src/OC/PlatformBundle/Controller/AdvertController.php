<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        /* $name = "winzou";
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        $content = $this->render('Advert/index.html.twig');
        return new Response($content); */
        return $this->render('@OCPlatform/Advert/index.html.twig', array('nom'=> 'winzou'));
    }
}