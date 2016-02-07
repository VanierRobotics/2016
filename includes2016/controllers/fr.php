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
        $this->lang = 1;
    }

    public function index()
    {
        $this->view->render('home/index');
    }


    public function robot(){
        $this->view->book = 'robot';
        $this->model = $this->getModel('Book');
        $this->view->texts = $this->model-> getBookPage($this->lang, 'GAME');
        $this->view->render('book/index');
    }

    public function jeu(){
        $this->view->book = 'game';
        $this->model = $this->getModel('Book');
        $this->view->texts = $this->model->getBookPage($this->lang, 'GAME');
        $this->view->render('game/index');
    }

    public function vanier(){
        $this->view->book = 'vanier';
        $this->model = $this->getModel('Book');
        $this->view->texts = $this->model-> getTeamPage($this->lang, 'JOURNALISM', 'VIDEO');
        $this->view->render('book/index');
    }


    public function journalisme($subpage = 'index'){
        $this->view->render('journalism/'.$subpage);
    }

    public function equipe($team = 'index')
    {
        /** @var _Bio $bioModel */
        $bioModel = $this->getModel('Bio');
        if ($team == 'index') {
            $this->view->funcName = 'equipe';
            $this->view->render('team/index');
            return;
        }
        if ($team == 'web') {
            $this->view->teamCaptain = $bioModel->getCaptainBio('fr', 'TeamCaptain')[0];
            $this->view->tcText = 'Capitaine d\'équipe';
        }

        $this->view->team = ucfirst($team);
        $this->view->bios = $bioModel->getBios('fr', $team);
        $this->view->captainBio = $bioModel->getCaptainBio('fr', $team)[0];
        $this->view->captain = 'Capitaine';
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