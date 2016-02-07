<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 */
class en extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Vanier Robotics 2016';
        $this->view->language = 'en';
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

    public function threejs(){
        $this->view->render('home/threejs');
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function robot(){
        $this->view->book = 'robot';
        $this->view->render('book/index');
    }

    public function competition(){
        $this->view->book = 'game';
        $this->view->render('game/index');
    }

    public function vanier(){
        $this->view->book = 'vanier';
        $this->view->render('book/index');
    }

    public function journalism($subpage = 'index'){
        $this->view->render('journalism/'.$subpage);
    }

    public function team($team = 'index'){
        if ($team == 'index') {
            $this->view->render('team/index');
            return;
        }
        $this->view->team = ucfirst($team);
        /** @var _Bio $bioModel */
        $bioModel = $this->getModel('Bio');
        $this->view->bios = $bioModel->getBios('en', $team);
        $this->view->captainBio = $bioModel->getCaptainBio('en', $team)[0];
        $this->view->captain    = 'Captain';
        $this->view->challengeText = "Biggest challenges you encountered?";
        $this->view->learningText  = "Biggest learning experience?";
        $this->view->render('team/bioBook');
    }

    public function gallery(){
        $this->view->book = 'gallery';
        $this->view->render('book/index');
    }

    public function tutorial(){
        $this->view->render('tutorial/index');
    }

    public function sponsors(){
        $this->view->render('sponsors/index');
    }

}