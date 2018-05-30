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
     * @Route("/responsive", name="portfolio_responsive")
     * @Method({"GET"})
     */
    public function responsiveAction()
    {
        return $this->render('portfolio/responsive.html.twig');
    }

    /**
     * @Route("/rich-snippet", name="portfolio_rich_snippets")
     * @Method({"GET"})
     */
    public function richSnippetAction()
    {
        return $this->render('portfolio/rich_snippet.html.twig');
    }

    /**
     * @Route("/memory", name="portfolio_memory")
     * @Method({"GET"})
     */
    public function memoryAction()
    {
        return $this->render('portfolio/memory.html.twig');
    }

    /**
    * @Route("/todolist", name="portfolio_todolist")
    * @Method({"GET"})
    */
    public function todolistAction()
    {
        return $this->render('portfolio/todolist.html.twig');
    }

    /**
     * @Route("/faqoclock", name="portfolio_faqoclock")
     * @Method({"GET"})
     */
    public function faqoclockAction()
    {
        return $this->render('portfolio/faqoclock.html.twig');
    }

    /**
     * @Route("/projetz", name="portfolio_projetz")
     * @Method({"GET"})
     */
    public function projetzAction()
    {
        return $this->render('portfolio/projetz.html.twig');
    }
}
