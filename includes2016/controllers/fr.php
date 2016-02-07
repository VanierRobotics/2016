<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 */
class fr extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Robotique Vanier 2016';
        $this->view->language = 'fr';
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function robot()
    {
        $this->view->render('robot/index');
    }

    public function competition()
    {
        $this->view->render('game/index');
    }

    public function vanier()
    {
        $this->view->book = 'vanier';
        $this->view->render('book/index');
    }

    public function journalisme($subpage)
    {
        $this->view->render('journalism/index');
    }

    public function equipe($team = 'index')
    {
        if ($team == 'index') {
            $this->view->render('team/index');
            return;
        }
        $this->view->team = ucfirst($team);
        /** @var _Bio $bioModel */
        $bioModel = $this->getModel('Bio');
        $this->view->bios = $bioModel->getBios('fr', $team);
        $this->view->captainBio = $bioModel->getCaptainBio('fr', $team)[0];
        $this->view->captain = 'Captain';
        $this->view->challengeText = "Quelles sont les plus grands défis que vous avez rencontrés?";
        $this->view->learningText = "Quel était votre expérience d'apprentissage plus grand?";
        $this->view->render('team/bioBook');
    }

    public function gallerie()
    {
        $this->view->render('gallery/index');
    }

    public function tutoriel()
    {
        $this->view->render('tutorial/index');
    }

    public function partenaires()
    {
        $this->view->render('sponsors/index');
    }

}