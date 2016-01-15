<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 */
class index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->title = 'Vanier Robotics 2016';
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function map()
    {
        $this->view->render('home/index');
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

}