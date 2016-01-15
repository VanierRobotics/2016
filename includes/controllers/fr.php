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
        $this->view->title = 'Robotique Vanier 2016';
        $this->view->language = 'fr';
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function k()
    {
        $this->view->render('home/backupAnim');
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

}