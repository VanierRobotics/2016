        <script>

        //INIT THINGS
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
        //var cam2 = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
        var renderer = null, controls = null;

        //FALLBACK TO HTML5 CANVAS (CssRenderer available in public/js/threejs/renderers)
        if ( webglAvailable() )
           renderer = new THREE.WebGLRenderer();
        else
            renderer = new THREE.CanvasRenderer();

        //USE WHILE MAKING 3D STURF
        var axis = new THREE.AxisHelper(20);
        //var camhelp = new THREE.CameraHelper(cam2);
        var grid = new THREE.GridHelper(100, 5);
        grid.setColors(new THREE.Color("rgb(255,0,0)"), 0xffffff);
        scene.add(grid);
        scene.add(axis);

        //SCENE SETUP
        var canvas = document.createElement( 'canvas' );
        renderer.setSize( window.innerWidth, window.innerHeight-150 );
        document.body.appendChild( renderer.domElement );
        THREEx.WindowResize(renderer, camera);
        camera.position.x = 30;
        camera.position.y = 30;
        camera.position.z = 30;


        //TAKE A BLENDER THIGNY AND LOAD IT INTO SCENE
        var castle = null;
        var loader = new THREE.JSONLoader();
        loader.load('<?=URL?>json/test.json',                     function(geometry) {
            castle = new THREE.Mesh(geometry, new THREE.MeshBasicMaterial( {color:0x58c8ed} ));
            scene.add(castle);
          });

        //Movement controls for when creating scenes.
        controls = new THREE.OrbitControls( camera, renderer.domElement );
        //controls.addEventListener( 'change', render ); // add this only if there is no animation loop (requestAnimationFrame)
        controls.enableDamping = true;
        controls.dampingFactor = 0.25;
        controls.enableZoom = true;

        //GUI CONTROLS (dat.gui)
        /*/addControls([array of control names], options array(folder_name, min value, original value, max value))
        THREEx.GUI.addControls(['PositionCameraX', 'PositionCameraY', 'PositionCameraZ'] ,
                               { folder_name:"Camera Position", min:-50.0, original:30.0, max:50.0 });
        THREEx.GUI.addControls(['RotateCameraX', 'RotateCameraY', 'RotateCameraZ'] ,{ folder_name:"Rotate Camera", min:0.0} );
*/
        THREEx.GUI.addControls(['PositionCastleX', 'PositionCastleY', 'PositionCastleZ'] ,
            { folder_name:"Castle Position", min:-50.0, max:50.0 });
        THREEx.GUI.addControls(['RotateCastleX', 'RotateCastleY', 'RotateCastleZ'] ,{ folder_name:"Rotate Castle" , min:-5, max:5 } );

        //RENDERS AND UPDATES SCENE
        var render = function () {
            THREEx.GUI.stats.begin();

            //PLAY WITH OBJECTS HERE
/*
            camera.position.x = THREEx.GUI._Controls.PositionCameraX;
            camera.position.y = THREEx.GUI._Controls.PositionCameraY;
            camera.position.z = THREEx.GUI._Controls.PositionCameraZ;
            camera.rotateX = THREEx.GUI._Controls.RotateCameraX * (Math.PI/180);;
            camera.rotateY = THREEx.GUI._Controls.RotateCameraY * (Math.PI/180);;
            camera.rotateZ = THREEx.GUI._Controls.RotateCameraZ * (Math.PI/180);;
*/
            castle.position.x = THREEx.GUI._Controls.PositionCastleX;
            castle.position.y = THREEx.GUI._Controls.PositionCastleY;
            castle.position.z = THREEx.GUI._Controls.PositionCastleZ;

            castle.rotation.x += THREEx.GUI._Controls.RotateCastleX * (Math.PI/180);;
            castle.rotation.y += THREEx.GUI._Controls.RotateCastleY * (Math.PI/180);;
            castle.rotation.z += THREEx.GUI._Controls.RotateCastleZ * (Math.PI/180);;

            /*RENDERS AN HTML ELEMENT ON TOP OF A SPECIFIC OBJECT
            var position        = THREEx.ObjCoord.cssPosition(cube, camera,renderer);
            element.style.left  = (position.x-element.offsetWidth /2)+'px';
            element.style.top   = (position.y-element.offsetHeight/2)+'px';
            */
            THREEx.GUI.stats.end();
        };

        //RENDERS AN HTML ELEMENT ON TOP OF A SPECIFIC OBJECT
        var element = document.createElement('div');
        document.body.appendChild(element);
        element.innerHTML   = 'threex';
        element.style.position  = 'absolute';

        // basically a tick function if you ever did game engine things
        function animate() {
            requestAnimationFrame( animate );
            try{
                render();
            } catch (Exception) {
                console.log('Something doesn\'t exist yet. Don\'t worry, should be fine now...');
            }
            //THREEx.GUI.stats.update();
            renderer.render(scene, camera);
        }
        animate();
        console.log(scene);
        </script>