<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-07
 * Time: 12:46 PM
 */

class edit extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'Edit';
        $this->model = $this->getModel("Text");
        $this->model->doThings();
        $this->view->st =  $this->model->getSomething();
        $this->view->render('edit/index');
    }

    public function item()
    {
        $this->view->title = 'Edit Text';
        $this->model = $this->getModel("Text");
        if(isset($_POST['textID'])) {
            $this->view->onething = $this->model->getThing();
        }
        $this->view->st =  $this->model->getSomething();
        $this->view->render('edit/item');
    }

}