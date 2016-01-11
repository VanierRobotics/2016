<?php

class threejs extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'THREE.JS TESTING BLENDER MODEL';
        $this->view->render('threejs/index');
    }
}
