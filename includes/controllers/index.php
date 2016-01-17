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
        if(isset($_GET['lang'],$_GET['book'])) {
            if(isset($_GET['page'])) {
                $st = $this->model->getBookPage($_GET['lang'],$_GET['book'],$_GET['page']);
                if(isset($st[0]))
                    echo json_encode($st[0]['content']);
            } else {
                echo $this->model->getTotalPages($_GET['lang'],$_GET['book']);
            }
        }
    }

}