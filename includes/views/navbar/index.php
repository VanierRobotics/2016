<!-- partial view navbar-->
<!-- Bootstrap component-->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display TODO: REDO NAVBAR @Evan take Mass's nav -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL; ?>home">Vanier Robotics</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?=URL?>langselect?l=en">English/French <span
                            class="sr-only">(current)</span></a></li>
            </ul>
            <?php if (!Session::get('my_user')) { ?>
            <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?= URL ?>vanier/">Vanier</a></li>
                    <li><a href="<?= URL ?>robot/">Robot</a></li>
                    <li><a href="<?= URL ?>game/">Game</a></li>
                    <li><a href="<?= URL ?>team/">Team</a></li>
                    <li><a href="<?= URL ?>journalism/">Journalism</a></li>
                    <li><a href="<?= URL ?>gallery/">Gallery</a></li>
                    <li><a href="<?= URL ?>tutorial/">Tutorial</a></li>
                    <li><a href="<?= URL ?>sponsors/">Sponsors</a></li>
            </ul>
            <?php } ?>
            <ul class="nav navbar-nav navbar-right">
                <!-- Change corner link to either logout or login depending on session-->
                <?php if (Session::get('my_user')) { ?>
                    <li><a href="<?= URL ?>edit/">View Content</a></li>
                    <li><a href="<?= URL ?>edit/item">Add new text</a></li>
                    <li><a href="<?= URL ?>auth/doLogout">Logout</a></li>
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
