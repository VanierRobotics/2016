<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-07
 * Time: 3:21 PM
 */
class item extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'Edit Text';
        $this->model = $this->getModel("Text");
        $this->model->getThing();
        $this->view->st =  $this->model->getSomething();
        $this->view->render('edit/item');
    }

}