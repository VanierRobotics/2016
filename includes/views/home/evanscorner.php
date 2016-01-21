<?php
/**
 * Created by PhpStorm.
 * User: Web Captain
 * Date: 2016-01-14
 * Time: 12:37 PM
 */

?>



<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 5%;
        width: 100%;
        height: 85%;
        z-index: 9999;
        background: url('<?= URL ?>images/transitions/<?=$this->transistor?>') 50% 50% rgb(249,249,249);
    }
</style>


<script>
    $(function()
    {

        $(window).load(function() {
            $(".loader").fadeOut("slow");
        })
        $("#content") .click(function() {
            $("#content").fadeOut(10000, function() {
                window.location.href = "number2.html";
            });
        });
    });

</script>

<div class="loader"></div>
<h1 style="margin: 0px">THINGS</h1>






<!--
<style>

    body { margin: 0; }
    canvas { width: 100%; height: 100% }

</style>

<script> /*
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
    var move = true;
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    var geometry = new THREE.BoxGeometry( 1000, 100, 500 );
    var material = new THREE.MeshBasicMaterial( { color: 0x3399ff} );
    var cube = new THREE.Mesh( geometry, material );
    scene.add( cube );

    camera.position.z = 2;
    camera.position.y = -800;
    camera.position.x = 0;


    var mesh = null;
    var loader = new THREE.JSONLoader();
    loader.load('<?=URL?>/blend_models/test.json',  function(geometry) {
        mesh = new THREE.Mesh(geometry);
        scene.add(mesh);
    });

    var render = function () {
        requestAnimationFrame( render );
        renderer.render(scene, camera);
    };


   render();

*/
</script>
<!--
<div id="target" style="position:absolute; width: 200px; height: 200px; background: #e90519; ">
    evan is a boss ass bitch </br>
    extra line for cool reasons.
</div>

<script>
/*
    init();
    animate();

    function init(){
        var target = document.getElementById("target");

        var tween = new TWEEN.Tween({x: 0, y: 0, rotation: 0})
                .to({ x: 900, y: 1000, rotation: 0}, 2000)
                     .easing(TWEEN.Easing.Circular.InOut)
                         .onUpdate( function(){
                                        target.style.left = this.x + 'px';
                                        target.style.top = this.y+'px';

                                        target.style.MozTransform = 'rotate('+Math.floor(this.rotation) + 'deg)';
                                        target.style.webkitTransform = 'rotate(' + Math.floor(this.rotation)+'deg)';
        }).start();x: 0, y: -800, z: 2

        var tween2 = new TWEEN.Tween({x: 0, y: -800, z: 2 ,rotation:0})
            .to({ x: 0, y: 0, z: 1250, rotation:-90 } ,1500)
            .easing(TWEEN.Easing.Linear.None)
            .onUpdate( function(){
                camera.position.x = this.x;
                camera.position.y = this.y;
                camera.position.z = this.z;
                camera.lookAt(new THREE.Vector3(0,0,0));
                camera.rotation.z = this.rotation * (Math.PI/180);

            }).start();

        tween2.onComplete(function() {
            tween3.start();
        });

        var tween3 = new TWEEN.Tween({x: 0, y: 0, z: 1250, rotation:-90})
            .to({x: 0, y: 800, z: 2, rotation:-180} ,1500)
            .easing(TWEEN.Easing.Linear.None)
            .onUpdate( function(){
                camera.position.x = this.x;
                camera.position.y = this.y;
                camera.position.z = this.z;
                camera.lookAt(new THREE.Vector3(0,0,0));
                camera.rotation.z = this.rotation * (Math.PI/180);

            });

    }


    function animate(){
        requestAnimationFrame(animate);
        TWEEN.update();

    }
*/
</script>
-->

