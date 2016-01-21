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
        //self::checkMember();
    }

    public function index()
    {
        $this->view->title = 'Edit';
        $this->model = $this->getModel("Book");
        $this->model->DBManip();
        $this->view->st =  $this->model->getAllEntries();
        $this->view->render('edit/index');
    }

    public function item()
    {
        $this->view->title = 'Edit Text';
        $this->model = $this->getModel("Book");
        if(isset($_POST['textID'])) {
            $this->view->onething = $this->model->getByID();
        }
        $this->view->st =  $this->model->getAllEntries();
        $this->view->render('edit/item');
    }

}