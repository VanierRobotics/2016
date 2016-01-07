<?php

class details extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(isset($_GET['id'])) {
            $st = getThing();
            if(count($st) > 0) {
                $this->view->title = $st[0]['name'] . ' Details';
                $this->view->st = $st[0];
                $this->view->render('details/index');
            }
        } else {
            echo '<h4 style="color: red;">no id.....</h4>';
            header('Location: '.URL);
        }
    }

    public function update()
    {
        if(isset($_POST['name'],$_POST['desc'],$_POST['quan'])){
            $db = Database::noParam();
            //$this->view->st = $db->select('SELECT * FROM products',[]);

            $db->update('products',[
                'name' => $_POST['name'],
                'description' => $_POST['desc'],
                'quantity' => $_POST['quan']
            ],'id = '.$_POST['id']);
            header('Location: '.URL.'/inventory');
        }
    }

}