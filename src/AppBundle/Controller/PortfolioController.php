<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/portfolio")
 */
class PortfolioController extends Controller
{
    /**
     * @Route("/project1", name="project1")
     * @Method({"GET"})
     */
    public function project1Action()
    {
        return $this->render('portfolio/project1.html.twig');
    }
}
