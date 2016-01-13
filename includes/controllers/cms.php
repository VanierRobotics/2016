<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-13
 * Time: 11:09 AM
 */

class cms extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
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

}