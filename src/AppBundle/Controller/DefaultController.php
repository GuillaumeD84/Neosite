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
        return $this->render('default/portfolio.html.twig', [
            'projects' => [
                'projectBootstrap' => [
                    'name' => 'Un site responsive',
                    'cat' => ['html', 'css', 'rwd', 'bootstrap'],
                    'img' => 'bootstrap.jpg',
                    'desc' => 'Les supports de consultation étant de plus en plus variés (ordinateurs de bureau, tablettes, smartphone, télévision…), il est important d\'offrir aux utilisateurs une interface adéquate peu importe ce dernier. C\'est un exercice visant à adapter l\'affichage des articles d\'un blog via le framework CSS : Bootstrap.',
                ],
                'projectSeo' => [
                    'name' => 'Les rich snippets',
                    'cat' => ['html', 'css', 'seo'],
                    'img' => 'seo.jpg',
                    'desc' => 'Utilisation des métadonnées avec les microdatas pour obtenir sur Google un produit "Rich snippet" pour améliorer son référencement dans les moteurs de recherche.',
                ],
                'projectJs' => [
                    'name' => 'Le Memory en JS',
                    'cat' => ['html', 'css', 'js', 'jquery'],
                    'img' => 'memory.jpg',
                    'desc' => 'Le célèbre jeu Memory de Ravensburger écrit en JS avec les librairies jQuery et jQuery UI.',
                ],
                'projectPhp' => [
                    'name' => 'Une todo list',
                    'cat' => ['html', 'css', 'php'],
                    'img' => 'todolist.jpg',
                    'desc' => 'Cette todo list écrite en PHP exploite les superglobales $_GET et $_POST et l\'utilisation des sessions pour gérer et stocker les tâches.',
                ],
                'projectSymfo' => [
                    'name' => 'Un site de questions/réponses avec Symfony',
                    'cat' => ['symfony'],
                    'img' => 'faqoclock.jpg',
                    'desc' => 'Réalisation d\'un site basé sur le modèle de Quora/StackOverflow avec Symfony.',
                ],
                'projectZ' => [
                    'name' => 'Un site de questions/réponses avec Symfony',
                    'cat' => ['symfony', 'nodejs', 'socketio', 'redis', 'phaser'],
                    'img' => 'projetz.jpg',
                    'desc' => 'Mon plus gros projet réalisé avec une équipe. L\'objectif fut de créer un site web grâce au framework Symfony, qui permettrait aux utilisateurs d\'accéder à un jeu vidéo multijoueur développé à l\'aide du framework HTML5 : Phaser, le tout en les connectants entre eux via les technologies Node.js et Socket.IO.',
                ],
            ]
        ]);
    }

    /**
     * A very short description of me
     *
     * @Route("/aboutme", name="aboutme")
     * @Method({"GET"})
     */
    public function aboutmeAction()
    {
        return $this->render('default/aboutme.html.twig');
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
     * @Route("/curriculum", name="curriculum")
     * @Method({"GET"})
     */
    public function curriculumAction()
    {
      $pdfPath = 'downloads/sample.pdf';

      return $this->file($pdfPath, 'guillaume_durand_cv.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
