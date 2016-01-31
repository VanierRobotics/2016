<!-- THIS IS THE LANGUAGE SELECT PAGE... INSERT ICE WALL WEBGL THING HERE -->

<!-- THREE.js (aka 3D WebGL things) -->
<script type="text/javascript" src="<?=URL?>js/3d/dat.gui.min.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/stats.min.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/three.js"></script>
<script type="text/javascript" src="<?=URL?>js/tween.js"></script>

<script type="text/javascript" src="<?=URL?>js/3d/bana.lib.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/extra_renderers/Projector.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/extra_renderers/canvasrenderer.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/extra_shaders/SkyShader.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/extra_loaders/colladaloader2.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/extra_controls/orbitcontrols.js"></script>

<script type="text/javascript" src="<?=URL?>js/3d/threex.windowresize.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/threex.universalloader.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/threex.objcoord.js"></script>
<script type="text/javascript" src="<?=URL?>js/3d/threex.domevents.js"></script>
<!--script type="text/javascript" src="<?=URL?>js/3d/threex.linkify.js"></script-->
<script type="text/javascript">
    //var container;
    var camera, controls, scene, renderer, loader, domEvents;
    var sky, sunSphere, castle, desk, anim;

    BANA.GFX(100,2000000);
    //scene.fog = new THREE.FogExp2( 0x8fbad6, 0.00055);
    BANA.GFX.addHelpers(1000);
    initControls();
    initModels();

    //initAnimations();
    BANA.GFX.newSky();
    BANA.GFX.render();

    //This runs every frame
    function onTick() {
        //PLAY WITH OBJECTS HERE
        //BANA.GUI.stats.start();
        /*
         camera.position.x = BANA.GUI._Controls.PositionCameraX;
         camera.position.y = BANA.GUI._Controls.PositionCameraY;
         camera.position.z = BANA.GUI._Controls.PositionCameraZ;
         camera.rotateX = BANA.GUI._Controls.RotateCameraX * (Math.PI/180);;
         camera.rotateY = BANA.GUI._Controls.RotateCameraY * (Math.PI/180);;
         camera.rotateZ = BANA.GUI._Controls.RotateCameraZ * (Math.PI/180);;

         castle.position.x = BANA.GUI._Controls.PositionCastleX;
         castle.position.y = BANA.GUI._Controls.PositionCastleY;
         castle.position.z = BANA.GUI._Controls.PositionCastleZ;

         castle.rotation.x += BANA.GUI._Controls.RotateCastleX * (Math.PI/180);;
         castle.rotation.y += BANA.GUI._Controls.RotateCastleY * (Math.PI/180);;
         castle.rotation.z += BANA.GUI._Controls.RotateCastleZ * (Math.PI/180);;

         /*RENDERS AN HTML ELEMENT ON TOP OF A SPECIFIC OBJECT
         var position        = BANA.ObjCoord.cssPosition(cube, camera,renderer);
         element.style.left  = (position.x-element.offsetWidth /2)+'px';
         element.style.top   = (position.y-element.offsetHeight/2)+'px';
         */
        //BANA.GUI.stats.end();
    }

    //Imports and sets up the models required for this page
    function initModels() {
        var plane = new THREE.Mesh(new THREE.PlaneGeometry(10000,10000,10000),new THREE.MeshLambertMaterial({color:0xffffff}));
        //plane.receiveShadow = true;
        plane.rotation.x = -.5*Math.PI;
        scene.add(plane);

        //TAKE A BLENDER THIGNY AND LOAD IT INTO SCENE
        loader = new THREE.JSONLoader();
        loader.load('<?=URL?>blend_models/SchoolGOT.json',                     function(geometry,materials) {
         castle = new THREE.Mesh(geometry, new THREE.MeshBasicMaterial( {color:0x58c8ed} ));
         scene.add(castle);
         castle.scale.set(25,25,25);
         castle.translateZ(-1100);
         castle.translateX(300);
         });
        /*
        loader = new THREEx.UniversalLoader();
        loader.load('<?=URL?>blend_models/SchoolGOT.dae',                     function(object3d) {
            scene.add(object3d);
            model.traverse( function( child ) {
                if ( child instanceof THREE.Mesh )
                    child.geometry.computeVertexNormals();
            });
            //object3d.castShadow = true;
            object3d.recieveShadow = true;
            object3d.scale.set(5,5,5);
            domEvents.addEventListener(object3d, 'click', function(event){
                initAnimations();
            }, false);
        });*/
    }

    function initAnimations() {
        anim  = new TWEEN.Tween({x: camera.position.x, y: camera.position.y, z: camera.position.z})
            .to({ x: -4, y: 100, z: 2800 } ,1000)
            .easing(TWEEN.Easing.Linear.None)
            .onUpdate( function(){
                camera.position.x = this.x;
                camera.position.y = this.y;
                camera.position.z = this.z;
                camera.lookAt(new THREE.Vector3(0,0,0));
                // camera.rotation.z = this.rotation * (Math.PI/180);
            }).start();

        var anim2  = new TWEEN.Tween({x: -4, y: 100, z: 2800})
            .to({ x: -4, y: 4000, z:  2800} ,2000)
            .easing(TWEEN.Easing.Linear.None)
            .onUpdate( function(){
                camera.position.x = this.x;
                camera.position.y = this.y;
                camera.position.z = this.z;
                camera.lookAt(new THREE.Vector3(0,0,2000));
                // camera.rotation.z = this.rotation * (Math.PI/180);

            });
        anim.onComplete(function() {anim2.start();});

        anim2.onComplete(function() {window.open('/en/', '_self');});
        /* camera.position.x = -4;
         camera.position.y = 80;
         camera.position.z = 2550;
         camera.lookAt(new THREE.Vector3(0,0,0));*/
    }

    //Sets up movement and gui variable controls
    function initControls() {
        BANA.GFX.newControls();
        //GUI CONTROLS (dat.gui)
        /*/addControls([array of control names], options array(folder_name, min value, original value, max value))
         BANA.GUI.addControls(['PositionCameraX', 'PositionCameraY', 'PositionCameraZ'] ,
         { folder_name:"Camera Position", min:-50.0, original:30.0, max:50.0 });
         BANA.GUI.addControls(['RotateCameraX', 'RotateCameraY', 'RotateCameraZ'] ,{ folder_name:"Rotate Camera", min:0.0} );
         *
         BANA.GUI.addControls(['PositionCastleX', 'PositionCastleY', 'PositionCastleZ'] ,
         { folder_name:"Castle Position", min:-50.0, max:50.0 });
         BANA.GUI.addControls(['RotateCastleX', 'RotateCastleY', 'RotateCastleZ'] ,{ folder_name:"Rotate Castle" , min:-5, max:5 } );*/
    }
</script>