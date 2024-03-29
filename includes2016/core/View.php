<?php

/**
 * @property string language
 * @property string title
 * @property string st
 * @property  array texts
 * @property string book
 * @property string mentors
 * @property string learningText
 * @property string challengeText
 * @property string captain
 * @property  array captainBio
 * @property mixed bios
 * @property string team
 * @property string tcText
 * @property  array teamCaptain
 * @property  array qtips
 * @property string funcName
 * @property  array onething
 * @property string transistor
 * @property string imgPath
 * @property string viewportOveride
 */
class View
{
    /**
     * @var array $alerts
     */
    public $alerts;

    public function __construct()
    {
        //echo 'this is a view';
    }

    public function render($name, $noInclude = false)
    {
        if ($noInclude === 'fuckoff') {
            require PATH . 'views/' . $name . '.php';
        } elseif ($noInclude) {
            require PATH . 'views/header.php';
            require PATH . 'views/' . $name . '.php';
        } else {
            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/header.php';
            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/navbar/index.php';

            //Rudementary alerts
            if (isset($this->alerts)) {
                foreach ($this->alerts as $alert) {
                    Controller::anAlert($alert[0], $alert[1]);
                }
            }

            if (isset($this->qtips)) {
                foreach ($this->qtips as $qtip) {
                    Controller::aTooltip($qtip[0]);
                }
            }

            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/' . $name . '.php';
            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/footer.php';
        }
    }

}