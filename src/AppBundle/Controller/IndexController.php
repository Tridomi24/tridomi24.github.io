<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/home/{pageName}")
     */
    public function showAction($pageName)
    {
		return $this->render('Index/show.html.twig' , [
			'name' => $pageName
		]);
		
        return new Response($html);
    }
}
