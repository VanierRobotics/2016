<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 * @property int lang
 * @property string tooltip
 */
class fr extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Robotique Vanier 2016';
        $this->view->language = 'fr';
        $this->view->imgPath = URL . 'images/journalism';
        $this->lang = 1;
        $this->tooltip = "Swipe, click or use arrow keys to flip pages. Click on images to zoom in. tabarnak";
    }

    public function index()
    {
        $this->view->render('home/index');
    }


    public function robot(){
        $this->view->book = 'robot';
        /** @var _Book $book */
        $book = $this->getModel('Book');
        $this->view->imgPath = URL . 'images/journalism';
        $this->view->texts = $book->getBookPage($this->lang, 'ROBOT');
        $this->view->qtips[] = [$this->tooltip];
        $this->view->render('robot/index');
    }

    public function jeu($content = 'index')
    {
        if($content !== 'index') {
            $this->view->book = 'game';
            /** @var _Book $book */
            $book= $this->getModel('Book');
            $this->view->texts = $book->getBookPage($this->lang, 'GAME');
            $this->view->qtips[] = [$this->tooltip];
            $this->view->render('game/modle');
        } else {
            $this->view->render('game/index');
        }
    }

    public function vanier(){
        $this->view->book = 'vanier';
        /** @var _Book $book */
        $book = $this->getModel('Book');
        $this->view->imgPath = URL . 'images/journalism/';
        $this->view->texts = $book->getBookPage($this->lang, 'VANIER');
        $this->view->qtips[] = [$this->tooltip];
        $this->view->render('Vanier/index');
    }

    public function journalisme($subpage = 'index')
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

    public function equipe($team = 'index')
    {
        /** @var _Bio $bioModel */
        $bioModel = $this->getModel('Bio');
        if ($team == 'index') {
            $this->view->funcName = 'equipe';
            $this->view->render('team/index');
            return;
        }
        if ($team == 'web') {
            $this->view->teamCaptain = $bioModel->getCaptainBio('fr', 'TeamCaptain')[0];
            $this->view->tcText = 'Capitaine d\'équipe';
        }

        $this->view->team = ucfirst($team);
        $this->view->bios = $bioModel->getBios('fr', $team);
        $this->view->captainBio = $bioModel->getCaptainBio('fr', $team)[0];
        $this->view->captain = 'Capitaine';
        $this->view->challengeText = "Quelles sont les plus grands défis que vous avez rencontrés?";
        $this->view->learningText = "Quel était votre expérience d'apprentissage plus grand?";

        $mentors = '';
        switch (strtolower($team)) {
            case 'build':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Phoenix Roy <br/><span style="color:gray">(Conception)</span></p>
                                <img src="' . URL . 'images/bios/PhoenixRoy.jpg"/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p style="font-size: 17px;">Mathew de Marchie<br/><span style="color:gray">(Construction)</span></p>
                                <img src="' . URL . 'images/bios/nopic.jpg"/>
                            </div>';
                break;
            case 'kiosk':
                $mentors = '<div class="polaroid mentor topLeft">
                                <p>Richard Mondoux <br/><span style="color:gray">(Conception)</span></p>
                                <img src="' . URL . 'images/bios/RichardMondoux.jpg"/>
                            </div>
                            <div class="polaroid mentor topRight">
                                <p>John Lynch <br/><span style="color:gray">(Charpenterie)</span></p>
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
                                <p>Manpreet Singh <br/><span style="color:gray">(HTML + Conception)</span></p>
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
        $this->view->qtips[] = [$this->tooltip];
        $this->view->render('team/bioBook');
    }

    public function gallerie()
    {
        $this->view->render('gallery/index');
    }

    public function tutoriel()
    {
        $this->view->render('tutorial/index');
    }
}