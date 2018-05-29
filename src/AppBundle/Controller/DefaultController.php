<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    /**
     * Home page
     *
     * @Route("/", name="homepage")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * A list of my skills in web dev
     *
     * @Route("/skills", name="skills")
     * @Method({"GET"})
     */
    public function skillsAction()
    {
        return $this->render('default/skills.html.twig');
    }

    /**
     * My formations relating to web dev
     *
     * @Route("/formation", name="formation")
     * @Method({"GET"})
     */
    public function formationAction()
    {
        return $this->render('default/formation.html.twig');
    }

    /**
     * A small list of various web projects
     *
     * @Route("/portfolio", name="portfolio")
     * @Method({"GET"})
     */
    public function portfolioAction()
    {
        return $this->render('default/portfolio.html.twig');
    }

    /**
     * Contact links
     *
     * @Route("/contact", name="contact")
     * @Method({"GET"})
     */
    public function contactAction()
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * Display my CV
     *
     * @Route("/cv", name="cv")
     * @Method({"GET"})
     */
    public function cvAction()
    {
      $pdfPath = 'downloads/sample.pdf';

      return $this->file($pdfPath, 'guillaume_durand_cv.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
