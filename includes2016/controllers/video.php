<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2016-02-08
 * Time: 9:53 PM
 */
class video extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * the one method that every controller should have
     */
    public function index()
    {
        header('location: https://www.youtube.com/watch?v=76Rc7r4-4DA');
    }

    public function official() {
        header('location: https://www.youtube.com/watch?v=cvEZnrLZHzM');
    }

}