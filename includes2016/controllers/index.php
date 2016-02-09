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
        //self::checkMember();
        $this->view->title = 'Vanier Robotics 2016';
    }

    public function index()
    {
        $this->view->viewportOveride = '<meta name="viewport" content="width=device-width, initial-scale=0.3"/>';
        $this->view->render('language/index',true);
    }

}