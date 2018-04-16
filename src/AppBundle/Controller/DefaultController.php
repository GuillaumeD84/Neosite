<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function indexSkills()
    {
        return $this->render('default/skills.html.twig');
    }

    /**
     * @Route("/formation", name="formation")
     */
    public function indexFormation()
    {
        return $this->render('default/formation.html.twig');
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function indexPortfolio()
    {
        return $this->render('default/portfolio.html.twig');
    }

    /**
     * @Route("/aboutme", name="aboutme")
     */
    public function indexAboutme()
    {
        return $this->render('default/aboutme.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function indexContact()
    {
        return $this->render('default/contact.html.twig');
    }
}
