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
    }

    public function index()
    {
        $this->view->title = 'Home';
        $this->view->render('home/index');
    }

}