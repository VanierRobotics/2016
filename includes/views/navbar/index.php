<!-- partial view navbar-->
<!-- Bootstrap component-->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display TODO: Recolor and change font -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>  <?php if (!property_exists($this,"language")) {$this->language = 'en';} ?>
            <a class="navbar-brand" href="<?=URL//.$this->language?>"><?=($this->language === 'en') ? 'Vanier Robotics' : 'Robotique Vanier'?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav animsition-overlay" data-animsition-overlay="true">
                <?php if (Session::get('my_user')) { ?>
                <li><a href="<?=URL.$this->language?>/vanier/">Vanier</a></li>
                <li><a href="<?=URL.$this->language?>/robot/">Robot</a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/game/' : 'fr/jeu/')?>"><?=($this->language === 'en') ? 'Game' : 'Jeu'?></a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/team/' : 'fr/equipe')?>"><?=($this->language === 'en') ? 'Team' : 'Équipe'?></a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/journalism/' : 'fr/journalisme/')?>"><?=($this->language === 'en') ? 'Journalism' : 'Journalisme'?></a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/gallery/' : 'fr/gallerie/')?>"><?=($this->language === 'en') ? 'Gallery' : 'Gallerie'?></a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/tutorial/' : 'fr/tutoriel/')?>"><?=($this->language === 'en') ? 'Tutorial' : 'Tutoriel'?></a></li>
                <li><a href="<?=URL.($this->language === 'en' ? 'en/sponsors/' : 'fr/partenaires/')?>"><?=($this->language === 'en') ? 'Sponsors' : 'Partenaires'?></a></li>
                <?php } ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=URL.($this->language !== 'en' ? 'en/' : 'fr/')?>index"><?=($this->language !== 'en') ? 'English' : 'Français'?> <span
                            class="sr-only">(current)</span></a></li>
                <!-- Change corner link to either logout or login depending on session-->
                <?php if (Session::get('my_user')) { ?>
                    <li><a href="<?=URL?>edit/">View Content</a></li>
                    <li><a href="<?=URL?>edit/item">Add new text</a></li>
                    <li><a href="<?=URL?>auth/doLogout">Logout</a></li>
                <?php } else { ?>
                    <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Bootstrap modal component-->
<!-- calls login/index.php for fancy login thing -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <?php
            require_once PATH . 'views/auth/index.php'
            ?>
        </div>
    </div>
</div>

<body>
    <div id="content">
