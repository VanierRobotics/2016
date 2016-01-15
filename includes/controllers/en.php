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
        $this->view->title = 'Vanier Robotics 2016';
        $this->view->language = 'en';
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function k()
    {
        $this->view->render('home/keyframe');
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

}