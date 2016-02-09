<body>
<!--bootstrap navbar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <?php if (!property_exists($this, "language")) {
                $this->language = 'en';
            } ?>
            <a class="navbar-brand"
               href="<?= URL . $this->language ?>"><?= ($this->language === 'en') ? 'Vanier Robotics' : 'Robotique Vanier' ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav animsition-overlay"
                data-animsition-in-class="zoom-in-sm"
                data-animsition-out-class="fade-left-lg"
                data-animsition-in-duration="1000"
                data-animsition-out-duration="500">
                <li><a href="<?= URL . $this->language ?>/vanier/">Vanier</a></li>
                <li><a href="<?= URL . $this->language ?>/robot/">Robot</a></li>
                <li>
                    <a href="<?= URL . ($this->language === 'en' ? 'en/game/' : 'fr/jeu/') ?>">
                        <?= ($this->language === 'en') ? 'Game' : 'Jeu' ?>
                    </a>
                </li>
                <li>
                    <a href="<?= URL . ($this->language === 'en' ? 'en/team/' : 'fr/equipe') ?>">
                        <?= ($this->language === 'en') ? 'Team' : 'Équipe' ?>
                    </a>
                </li>
                <li>
                    <a href="<?= URL . ($this->language === 'en' ? 'en/journalism/' : 'fr/journalisme/') ?>">
                        <?= ($this->language === 'en') ? 'Journalism' : 'Journalisme' ?>
                    </a>
                </li>
                <li>
                    <a href="<?= URL . ($this->language === 'en' ? 'en/gallery/' : 'fr/gallerie/') ?>">
                        <?= ($this->language === 'en') ? 'Gallery' : 'Gallerie' ?>
                    </a>
                </li>
                <li>
                    <a href="<?= URL . ($this->language === 'en' ? 'en/tutorial/' : 'fr/tutoriel/') ?>">
                        <?= ($this->language === 'en') ? 'Tutorial' : 'Tutoriel' ?>
                    </a>
                </li>
                <li>
                    <style scoped>
                        #spons:hover {
                            cursor: pointer;
                        }
                    </style>
                    <p id="spons" style="padding-top: 18px;" data-toggle="modal"
                       data-target="#sponsorsModal"><?= ($this->language === 'en') ? 'Sponsors' : 'Commanditaires' ?></p>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                $page = '';
                $params = '';

                $URI = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '/' . $this->language . '/'));
                if (array_key_exists(2, explode('/', $URI)) && explode('/', $URI)[2] != '') {
                    $page = explode('/', $URI)[2];
                    $params = substr($URI, strpos($URI, $page) + strlen($page));
                }
                if ($this->language === 'en') {
                    switch ($page) {
                        case "game":
                            $page = 'jeu';
                            break;
                        case "team":
                            $page = 'equipe';
                            break;
                        case "journalism":
                            $page = 'journalisme';
                            break;
                        case "gallery":
                            $page = 'gallerie';
                            break;
                        case "tutorial":
                            $page = 'tutoriel';
                            break;
                        case "sponsors":
                            $page = 'partenaires';
                            break;
                        default:
                    }
                } else {
                    switch ($page) {
                        case 'jeu':
                            $page = "game";
                            break;
                        case 'equipe':
                            $page = "team";
                            break;
                        case 'journalisme':
                            $page = "journalism";
                            break;
                        case 'gallerie':
                            $page = "gallery";
                            break;
                        case 'tutoriel':
                            $page = "tutorial";
                            break;
                        case 'partenaires':
                            $page = "sponsors";
                            break;
                        default:
                    }
                }

                $langUrl = URL . ($this->language === 'en' ? 'fr/' : 'en/') . $page . $params;

                ?>
                <li>
                    <a href="<?= $langUrl ?>"><?= ($this->language !== 'en') ? 'English' : 'Français' ?>
                        <span
                            class="sr-only">(current)
                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?=URL?>video">
                        <i class="fa fa-lg fa-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/VanierRobotics">
                        <i class="fa fa-lg fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Bootstrap modal component-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <?php
            require_once PATH . 'views/auth/index.php'
            ?>
        </div>
    </div>
</div>

<!-- Content provided by mvc. renders views-->
<div id="content" class="animsition-overlay"
     data-animsition-in-class="fade-in-down-lg"
     data-animsition-in-duration="1000"
     data-animsition-out-class="fade-out-down-lg"
     data-animsition-out-duration="800"
>
