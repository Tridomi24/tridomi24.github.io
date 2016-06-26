<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CV_Controller extends Controller
{
    /**
     * @Route("/cv")
     */
    public function showAction()
    {
        return $this->render('CV/cv.html.twig');

    }
}