<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SkillsController extends Controller
{
    /**
     * @Route("/skills")
     */
    public function showAction()
    {
        return $this->render('Skills/skills.html.twig');

    }
}