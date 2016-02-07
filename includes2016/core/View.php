<?php

/**
 * @property string language
 * @property string title
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
        if ($noInclude) {
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

            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/' . $name . '.php';
            /** @noinspection PhpIncludeInspection */
            /** @noinspection PhpIncludeInspection */
            require PATH . 'views/footer.php';
        }
    }

}