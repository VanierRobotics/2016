<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 * @property int lang
 * @property string tooltip
 */
class en extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Vanier Robotics 2016';
        $this->view->language = 'en';
        $this->view->imgPath = URL . 'images/journalism';
        $this->lang = 0;
        //$this->tooltip = "Swipe, click or use arrow keys to flip pages. Click on images to zoom in.";
    }

    public function threejs()
    {
        $this->view->render('home/threejs');
    }

    public function got2048()
    {
        $this->view->render('game/2048',true);
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
        $this->view->qtips[] = [$this->tooltip];
        $this->view->render('robot/index');
    }

    public function game($content = 'index')
    {
        if($content !== 'index') {
            /** @var _Book $book */
            $book= $this->getModel('Book');
            $this->view->texts = $book->getBookPage($this->lang, 'GAME');
            $this->view->qtips[] = [$this->tooltip];
            $this->view->render('game/modle');
        } else {
            $this->view->qtips[] = ['Click the scroll.'];
            $this->view->render('game/index');
        }
    }

    public function vanier()
    {
        $this->view->book = 'vanier';
        /** @var _Book $book */
        $book = $this->getModel('Book');
        $this->view->imgPath = URL . 'images/journalism/';
		$this->view->texts = $book->getBookPage($this->lang, 'VANIER');
        $this->view->qtips[] = [$this->tooltip];
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
            $this->view->qtips[] = [$this->tooltip];
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
                                <img src="' . URL . 'images/bios/PhoenixRoy.jpg" alt=""/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p style="font-size: 17px;">Mathew de Marchie<br/><span style="color:gray">(Construction)</span></p>
                                <img src="' . URL . 'images/bios/nopic.jpg" alt=""/>
                            </div>';
                break;
            case 'kiosk':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Richard Mondoux <br/><span style="color:gray">(Design)</span></p>
                                <img src="' . URL . 'images/bios/RichardMondoux.jpg" alt=""/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>John Lynch <br/><span style="color:gray">(Carpentry)</span></p>
                                <img src="' . URL . 'images/bios/nopic.jpg" alt=""/>
                            </div>';
                break;
            case 'web':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Haritos Kavallos <br/><span style="color:gray">(PHP + MySQL)</span></p>
                                <img src="' . URL . 'images/bios/HaritosKavallos.jpg" alt=""/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>Maksym Gryb <br/><span style="color:gray">(PHP + Backend)</span></p>
                                <img src="' . URL . 'images/bios/MaksymGryb.jpg" alt=""/>
                            </div>
                            <div class="polaroid mentor bottomLeft">
                                <p>Thush Sitham <br/><span style="color:gray">(HTML + jQuery)</span></p>
                                <img src="' . URL . 'images/bios/ThushanthSithambararajan.jpg" alt=""/>
                            </div>
                            <div class="polaroid mentor bottomRight">
                                <p>Manpreet Singh <br/><span style="color:gray">(HTML + Design)</span></p>
                                <img src="' . URL . 'images/bios/ManpreetSingh.jpg" alt=""/>
                            </div>';
                break;
            case 'video':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Marco Purich <br/><span style="color:gray">(Blender)</span></p>
                                <img src="' . URL . 'images/bios/MarcoPurich.jpg" alt=""/>
                            </div>';
                break;
            default:
                break;
        }
        $this->view->mentors = $mentors;
        $this->view->qtips[] = [$this->tooltip];
        $this->view->render('team/bioBook');
    }

    public function gallery()
    {
        $this->view->render('gallery/index');
    }

    public function tutorial($subpage = 'intro')
    {
        $this->view->render('tutorial/'.$subpage);
    }

}