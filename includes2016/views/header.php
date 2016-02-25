<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html lang="en" class="ie6">
<![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if !IE]>
<html lang="en">
<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
    if (isset($this->viewportOveride)) {
        echo $this->viewportOveride;
    } else {
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=no"/>
        <?php
    }
    ?>

    <!-- START OpenGraph Meta Tags -->
    <meta property="og:title" content="<?= (isset($this->title)) ? $this->title : 'Vanier Robotics'; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Vanier Robotics's entry for the CRC's Pythagorium 2016 Web Design and Journalism competition.">
    <meta property="og:url" content="<?= URL ?>"/>
    <meta property="og:image" content="<?= URL ?>images/fblogo.png"/>
    <meta property="og:site_name" content="Vanier Robotics 2016"/>
    <!-- END OpenGraph Meta Tags -->

    <!-- START Stylesheets and fonts -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Arvo" type="text/css"/>
    <link rel="stylesheet" href="<?= URL ?>css/animsition.min.css"/>
    <link rel="stylesheet" href="<?= URL ?>css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?= URL ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= URL ?>css/default.css"/>
    <!-- END Stylesheets and fonts -->

    <!-- START JavaScripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= URL ?>js/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= URL ?>js/animsition.js"></script>
    <script type="text/javascript" src="<?= URL ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        UPLOADCARE_PUBLIC_KEY = 'BECAUSE_PUBLIC_KEYS';
    </script>
    <?php //Autoloads views javascript files specified by
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . '../includes/views/' . $js . '"></script>';
        }
    } ?>
    <!-- END JavaScripts -->

    <title>
        <?= (isset($this->title)) ? $this->title : 'Vanier Robotics'; ?>
    </title>
</head>


