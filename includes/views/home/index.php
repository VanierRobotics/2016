<script>
    //var container;
    var camera, controls, scene, renderer, loader;
    var sky, sunSphere, castle, desk;

    BANA.GFX(5,2000000);
    BANA.GFX.addHelpers(1000);
    initControls();
    initModels();
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
        //TAKE A BLENDER THIGNY AND LOAD IT INTO SCENE
        loader = new THREE.JSONLoader();
        loader.load('<?=URL?>blend_models/test.json',                     function(geometry) {
            castle = new THREE.Mesh(geometry, new THREE.MeshBasicMaterial( {color:0x58c8ed} ));
            scene.add(castle);
        });

        loader = new THREE.JSONLoader();
        loader.load('<?=URL?>blend_models/Desk.json',                     function(geometry) {
            desk = new THREE.Mesh(geometry, new THREE.MeshBasicMaterial( {color:0x58c8ed} ));
            scene.add(desk);
        });

        loader = new THREEx.UniversalLoader();
        loader.load('<?=URL?>blend_models/SchoolGOT.dae',                     function(object3d) {
            scene.add(object3d);
        });
    }

    //Sets up movement and gui variable controls
    function initControls() {
        BANA.GFX.newControls();
        //GUI CONTROLS (dat.gui)
        /*/addControls([array of control names], options array(folder_name, min value, original value, max value))
         BANA.GUI.addControls(['PositionCameraX', 'PositionCameraY', 'PositionCameraZ'] ,
         { folder_name:"Camera Position", min:-50.0, original:30.0, max:50.0 });
         BANA.GUI.addControls(['RotateCameraX', 'RotateCameraY', 'RotateCameraZ'] ,{ folder_name:"Rotate Camera", min:0.0} );
         */
        BANA.GUI.addControls(['PositionCastleX', 'PositionCastleY', 'PositionCastleZ'] ,
            { folder_name:"Castle Position", min:-50.0, max:50.0 });
        BANA.GUI.addControls(['RotateCastleX', 'RotateCastleY', 'RotateCastleZ'] ,{ folder_name:"Rotate Castle" , min:-5, max:5 } );
    }
</script>