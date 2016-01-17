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

    public function k()
    {
        $this->view->render('home/keyframe');
    }

    public function evanshit(){
        $this->view->render('home/evanscorner');
    }

    public function cms(){
        $this->model = $this->getModel('Book');
        if(isset($_GET['total'])) {
            echo $this->model->getTotalPages('en','VANIER');
        } elseif(isset($_GET['book'])) {
            $this->model->getBook('en','VANIER');
            foreach($st as $row) {
                printf($row[text]);
            }
        }

    }

}