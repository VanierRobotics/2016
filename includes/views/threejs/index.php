        <script>

        //INIT THINGS
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
        var move = true;
        var renderer = null;

        //FALLBACK TO HTML5 CANVAS (CssRenderer available in public/js/threejs/renderers)
        if ( webglAvailable() )
            renderer = new THREE.WebGLRenderer();
        else
            renderer = new THREE.CanvasRenderer();

        //USE WHILE MAKING 3D STURF
        var axis = new THREE.AxisHelper(20);
        var grid = new THREE.GridHelper(100, 5);
        grid.setColors(new THREE.Color("rgb(255,0,0)"), 0xffffff);
        scene.add(grid);
        scene.add(axis);

        //SCENE SETUP
        var canvas = document.createElement( 'canvas' );
        renderer.setSize( window.innerWidth, window.innerHeight-150 );
        document.body.appendChild( renderer.domElement );
        THREEx.WindowResize(renderer, camera);
        //camera.position.x = 30;
        //camera.position.y = 30;
        //camera.position.z = 30;


        //TAKE A BLENDER THIGNY AND LOAD IT INTO SCENE
        var castle = null;
        var loader = new THREE.JSONLoader();
        loader.load('<?=URL?>json/test.json',                     function(geometry) {
            castle = new THREE.Mesh(geometry, new THREE.MeshBasicMaterial( {color:0x58c8ed} ));
            scene.add(castle);
          });

        //addControls([array of control names], options array(folder_name, min value, original value, max value))
        THREEx.GUI.addControls(['PositionCameraX', 'PositionCameraY', 'PositionCameraZ'] ,
                               { folder_name:"Camera Position", min:-50, original:30, max:50 });
        THREEx.GUI.addControls(['RotateCameraX', 'RotateCameraY', 'RotateCameraZ'] ,{ folder_name:"Rotate Camera" } );

        THREEx.GUI.addControls(['PositionCastleX', 'PositionCastleY', 'PositionCastleZ'] ,
            { folder_name:"Castle Position", min:-50, max:50 });
        THREEx.GUI.addControls(['RotateCastleX', 'RotateCastleY', 'RotateCastleZ'] ,{ folder_name:"Rotate Castle" } );


        var element = document.createElement('div');
        document.body.appendChild(element);
        element.innerHTML   = 'threex';
        element.style.position  = 'absolute';


        //RENDERS AND UPDATES SCENE basically a tick function if you ever did game engine things
        var render = function () {
            requestAnimationFrame( render );
            THREEx.GUI.stats.begin();

            //PLAY WITH OBJECTS HERE

            camera.position.x = THREEx.GUI._Controls.PositionCameraX;
            camera.position.y = THREEx.GUI._Controls.PositionCameraY;
            camera.position.z = THREEx.GUI._Controls.PositionCameraZ;
            camera.rotateX = THREEx.GUI._Controls.RotateCameraX;
            camera.rotateY = THREEx.GUI._Controls.RotateCameraY;
            camera.rotateZ = THREEx.GUI._Controls.RotateCameraZ;

            castle.position.x = THREEx.GUI._Controls.PositionCastleX;
            castle.position.y = THREEx.GUI._Controls.PositionCastleY;
            castle.position.z = THREEx.GUI._Controls.PositionCastleZ;

            castle.rotation.x += THREEx.GUI._Controls.RotateCastleX;
            castle.rotation.y += THREEx.GUI._Controls.RotateCastleY;
            castle.rotation.z += THREEx.GUI._Controls.RotateCastleZ;

            if(camera.position.z > 50){
                move = false;
            }
            else if(camera.position.z < 5){
                move = true;
            }

            if(move){
                camera.position.z += .1;
            }
            else
                camera.position.z -= .1;

            /*RENDERS AN HTML ELEMENT ON TOP OF A SPECIFIC OBJECT
            var position        = THREEx.ObjCoord.cssPosition(cube, camera,renderer);
            element.style.left  = (position.x-element.offsetWidth /2)+'px';
            element.style.top   = (position.y-element.offsetHeight/2)+'px';
            */
            renderer.render(scene, camera);
            THREEx.GUI.stats.end();
        };
        render();

        </script>