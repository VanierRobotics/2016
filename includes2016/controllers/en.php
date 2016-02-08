<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 * @property int lang
 */
class en extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Vanier Robotics 2016';
        $this->view->language = 'en';
        $this->lang = 0;
    }

    public function evanshit()
    {
        $this->view->render('home/evanscorner');
    }

    public function threejs()
    {
        $this->view->render('home/threejs');
    }

    public function index()
    {
        $this->view->render('home/index');
    }

    public function robot()
    {
        $this->view->book = 'robot';
        /** @var _Book $book */
        $book = $this->getModel('Book');
        $this->view->texts = $book->getBookPage($this->lang, 'ROBOT');
        $this->view->render('robot/index');
    }

    public function game()
    {
        $this->view->book = 'game';
        /** @var _Book $book */
        $book= $this->getModel('Book');
        $this->view->texts = $book->getBookPage($this->lang, 'GAME');
        $this->view->render('game/index');
    }

    public function vanier()
    {
        $this->view->book = 'vanier';
        /** @var _Book $book */
        $book = $this->getModel('Book');
		$this->view->texts = $book->getBookPage($this->lang, 'VANIER');
        $this->view->render('vanier/index');
    }

    public function journalism($subpage = 'index')
    {

        if($subpage=='index')
         $this->view->render('journalism/'.$subpage);
        else{
            /** @var _Book $book */
            $book = $this->getModel('Book');
            $this->view->texts = $book->getTeamPage($this->lang, 'JOURNALISM', strtoupper($subpage));
            $this->view->team = $subpage;
            $this->view->render('journalism/buildBook');
        }
    }

    public function team($team = 'index')
    {
        /** @var _Bio $bioModel */
        $bioModel = $this->getModel('Bio');
        if ($team == 'index') {
            $this->view->funcName = 'team';
            $this->view->render('team/index');
            return;
        }
        if ($team == 'web') {
            $this->view->teamCaptain = $bioModel->getCaptainBio('en', 'TeamCaptain')[0];
            $this->view->tcText = 'Team Captain';
        }
        $this->view->team = ucfirst($team);
        $this->view->bios = $bioModel->getBios('en', $team);
        $this->view->captainBio = $bioModel->getCaptainBio('en', $team)[0];
        $this->view->captain = 'Captain';
        $this->view->challengeText = "Biggest challenges you encountered?";
        $this->view->learningText = "Biggest learning experience?";

        $mentors = '';
        switch (strtolower($team)) {
            case 'build':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Phoenix Roy <br/><span style="color:gray">(Design)</span></p>
                                <img src="' . URL . 'images/bios/PhoenixRoy.jpg"/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>Mathew de Marchie<br/><span style="color:gray">(Construction)</span></p>
                                <img src="' . URL . 'images/bios/nopic.jpg"/>
                            </div>';
                break;
            case 'kiosk':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Richard Mondoux <br/><span style="color:gray">(Design)</span></p>
                                <img src="' . URL . 'images/bios/RichardMondoux.jpg"/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>John Lynch <br/><span style="color:gray">(Carpentry)</span></p>
                                <img src="' . URL . 'images/bios/nopic.jpg"/>
                            </div>';
                break;
            case 'web':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Haritos Kavallos <br/><span style="color:gray">(PHP + MySQL)</span></p>
                                <img src="' . URL . 'images/bios/HaritosKavallos.jpg"/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>Maksym Gryb <br/><span style="color:gray">(PHP + Backend)</span></p>
                                <img src="' . URL . 'images/bios/MaksymGryb.jpg"/>
                            </div>
                            <div class="polaroid mentor bottomLeft">
                                <p>Thush Sitham <br/><span style="color:gray">(HTML + jQuery)</span></p>
                                <img src="' . URL . 'images/bios/ThushanthSithambararajan.jpg"/>
                            </div>
                            <div class="polaroid mentor bottomRight">
                                <p>Manpreet Singh <br/><span style="color:gray">(HTML + Design)</span></p>
                                <img src="' . URL . 'images/bios/ManpreetSingh.jpg"/>
                            </div>';
                break;
            case 'video':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Marco Purich <br/><span style="color:gray">(Blender)</span></p>
                                <img src="' . URL . 'images/bios/MarcoPurich.jpg"/>
                            </div>';
                break;
            default:
                break;
        }
        $this->view->mentors = $mentors;

        $this->view->render('team/bioBook');
    }

    public function gallery()
    {
        $this->view->book = 'gallery';
        $this->view->render('book/index');
    }

    public function tutorial()
    {
        $this->view->render('tutorial/index');
    }

    public function sponsors()
    {
		$book = $this->getModel('Book');
		$this->view->texts = $book->getBookPage($this->lang,'SPONSORS');
        $this->view->render('sponsors/index');
    }

}