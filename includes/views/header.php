<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title><?= (isset($this->title)) ? $this->title : 'NO TITLE'; ?></title>

    <!-- Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=URL?>js/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!--script type="text/javascript" src="<?=URL?>js/jquery-ui-1.8.20.custom.min.js"></script-->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css"/>
    <script>
        UPLOADCARE_PUBLIC_KEY = 'BECAUSE_PUBLIC_KEYS';
    </script>

    <!-- Turn.js (aka HTML5 book thingny)-->
    <!--script type="text/javascript" src="<?=URL?>js/jquery.mousewheel.min.js"></script-->
    <script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>

    <!-- Font awesome-->
    <link rel="stylesheet" href="<?=URL?>css/font-awesome.min.css">

    <!-- Bootstrap Original-->
    <!--link rel="stylesheet" href="<-?=URL?>/css/bootstrap.min.css" /-->
    <!--link rel="stylesheet" href="<-?=URL?>/css/bootstrap-theme.min.css" /-->

    <!-- Bootstrap Theme @http://bootswatch>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css" rel="stylesheet"-->
    <link href="<?=URL?>/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?=URL?>js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?=URL?>css/default.css"/>
    <!-- Custom CSS (READ THIS PLEASE, TNX : http://verekia.com/less-css/dont-read-less-css-tutorial-highly-addictive)-->
    <?php //Autoloads views javascript files specified by
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . '../include/views/' . $js . '"></script>';
        }
    } ?>
</head>

