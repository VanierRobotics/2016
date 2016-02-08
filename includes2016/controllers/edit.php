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
        self::checkMember();
    }

    public function index()
    {
        $this->view->title = 'Edit';
        /** @var _Book $book */
        $book = $this->getModel("Book");
        $book->DBManip();
        $this->view->st =  $book->getAllEntries();
        $this->view->render('edit/index');
    }

    public function item()
    {
        $this->view->title = 'Edit Text';
        /** @var _Book $book */
        $book = $this->getModel("Book");
        if(isset($_POST['textID'])) {
            $this->view->onething = $book->getByID();
        }
        $this->view->st =  $book->getAllEntries();
        $this->view->render('edit/item');
    }

}