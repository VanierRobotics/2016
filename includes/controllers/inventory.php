<?php

class inventory extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $db = Database::noParam();
        $this->view->st = $db->select('SELECT * FROM products',[]);

        $this->view->title = 'My Inventory';
        $this->view->render('inventory/index');

    }

    public function entry()
    {
        if(isset($_POST['name'],$_POST['desc'],$_POST['quan'])){
            $db = Database::noParam();
            //$this->view->st = $db->select('SELECT * FROM products',[]);

            $db->insert('products',[
                'name' => $_POST['name'],
                'description' => $_POST['desc'],
                'quantity' => $_POST['quan']
            ]);
           header('Location: '.URL.'/inventory');
        }
    }

}