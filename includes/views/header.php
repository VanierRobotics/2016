<!DOCTYPE html>
<html>
<head>
    <title><?= (isset($this->title)) ? $this->title : 'NO TITLE'; ?></title>

    <!-- Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css"/>

    <!-- Font awesome-->
    <link rel="stylesheet" href="<?=URL?>css/font-awesome.min.css">

    <!-- THREE.js (aka 3D WebGL things) -->
    <script type="text/javascript" src="<?=URL?>js/dat.gui.min.js"></script>
    <script type="text/javascript" src="<?=URL?>js/stats.min.js"></script>
    <script type="text/javascript" src="<?=URL?>js/three.js"></script>
    <script type="text/javascript" src="<?=URL?>js/tween.js"></script>

    <script type="text/javascript" src="<?=URL?>js/bana.lib.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extra_renderers/Projector.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extra_renderers/canvasrenderer.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extra_shaders/SkyShader.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extra_loaders/colladaloader2.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extra_controls/orbitcontrols.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extras/helpers/gridhelper.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extras/helpers/axishelper.js"></script>
    <script type="text/javascript" src="<?=URL?>js/extras/helpers/camerahelper.js"></script>

    <script type="text/javascript" src="<?=URL?>js/threex.windowresize.js"></script>
    <script type="text/javascript" src="<?=URL?>js/threex.universalloader.js"></script>
    <script type="text/javascript" src="<?=URL?>js/threex.objcoord.js"></script>
    <script type="text/javascript" src="<?=URL?>js/threex.domevents.js"></script>
    <script type="text/javascript" src="<?=URL?>js/threex.linkify.js"></script>

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

