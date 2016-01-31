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
        $this->view->render('vanier/index');
    }

    public function game(){
        $this->view->render('game/index');
    }

    public function vanier(){
        $this->view->book = 'vanier';
        $this->view->render('vanier/index');
    }

    public function journalism($subpage){
        $this->view->render('journalism/index');
    }

    public function team(){
        $this->view->render('team/index');
    }

    public function gallery(){
        $this->view->render('gallery/index');
    }

    public function tutorial(){
        $this->view->render('tutorial/index');
    }

    public function sponsors(){
        $this->view->render('sponsors/index');
    }

}