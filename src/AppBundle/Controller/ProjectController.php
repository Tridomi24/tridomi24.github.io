<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller
{
    /**
     * @Route("/projects")
     */
    public function showAction()
    {
        return $this->render('Projects/projects.html.twig');

    }
}