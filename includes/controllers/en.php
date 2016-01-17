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
        $this->view->book = 'vanier';
    }

    public function k()
    {
        $this->view->render('home/keyframe');
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

    public function listtext()
    {
        $this->view->title = 'List of Texts';
        $this->model = $this->getModel("Cms");
        //Get values from url and set them here...I don't remember how
        //Hardcoded for now
        $language = 'EN';
        $Page = 'ROBOT';
        $textsArray =  $this->model->getTexts($language,$Page);
        $sending = '';
        foreach ( $textsArray as $array ) {
            $sending = $sending.'<h1>'.$array['class'].'</h1></br>';
            $sending = $sending.'<p> '.$array['text' ].'</p> </br>';
        }
        if( strcmp($sending,'') !== 0)
            $this->view->texts = $sending;
        else
            $this->view->texts = '<h2>Sorry. There is nothing like that in the database</h2>';

        $this->view->render('edit/texts');
    }


    public function index()
    {
        $this->view->render('home/index');
    }

    public function robot(){
        $this->view->render('robot/index');
    }

    public function game(){
        $this->view->render('game/index');
    }

    public function vanier(){
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