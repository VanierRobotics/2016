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

    public function robot(){
        $this->view->render('robot/index');
    }

    public function competition(){
        $this->view->render('game/index');
    }

    public function vanier(){
        $this->view->book = 'vanier';
        $this->view->render('book/index');
    }

    public function journalisme($subpage){
        $this->view->render('journalism/index');
    }

    public function equipe(){
        $this->view->render('team/index');
    }

    public function gallerie(){
        $this->view->render('gallery/index');
    }

    public function tutoriel(){
        $this->view->render('tutorial/index');
    }

    public function partenaires(){
        $this->view->render('sponsors/index');
    }

}