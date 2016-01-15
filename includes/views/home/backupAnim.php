
<script type="text/javascript" src="<?=URL?>js/extra_loaders/collada/Animation.js"></script>
<script type="text/javascript" src="<?=URL?>js/extra_loaders/collada/AnimationHandler.js"></script>
<script type="text/javascript" src="<?=URL?>js/extra_loaders/collada/KeyFrameAnimation.js"></script>

<script>
    var stats;
    var scene;
    var pointLight;
    var camera;
    var renderer;
    var model;
    var animations;
    var kfAnimations = [ ];
    var kfAnimationsLength = 0;
    var loader = new THREE.ColladaLoader();
    var lastTimestamp = 0;
    var progress = 0;

    loader.load( '/blend_models/pump/pump.dae', function ( collada ) {

        model = collada.scene;
        animations = collada.animations;
        kfAnimationsLength = animations.length;
        model.scale.x = model.scale.y = model.scale.z = 0.125; // 1/8 scale, modeled in cm

        init();
        start();
        animate( lastTimestamp );

    } );

    function init() {

        BANA.GFX(0.01,1000);
        BANA.GFX.addHelpers(500);

        camera.position.set( -5.00181875, 3.42631375, 11.3102925 );
        camera.lookAt( new THREE.Vector3( -1.224774125, 2.18410625, 4.57969125 ) );

        // KeyFrame Animations
        for ( var i = 0; i < kfAnimationsLength; ++i ) {

            var animation = animations[ i ];

            var kfAnimation = new THREE.KeyFrameAnimation( animation );
            kfAnimation.timeScale = 1;
            kfAnimations.push( kfAnimation );

        }

        /* Grid
        var material = new THREE.LineBasicMaterial( { color: 0x303030 } );
        var geometry = new THREE.Geometry();
        var floor = -0.04, step = 1, size = 14;

        for ( var i = 0; i <= size / step * 2; i ++ ) {

            geometry.vertices.push( new THREE.Vector3( - size, floor, i * step - size ) );
            geometry.vertices.push( new THREE.Vector3(   size, floor, i * step - size ) );
            geometry.vertices.push( new THREE.Vector3( i * step - size, floor, -size ) );
            geometry.vertices.push( new THREE.Vector3( i * step - size, floor,  size ) );
        }

        var line = new THREE.LineSegments( geometry, material );
        scene.add( line ); */

        // Add the COLLADA

        model.getObjectByName( 'camEye_camera', true ).visible = false;
        model.getObjectByName( 'camTarget_camera', true ).visible = false;

        scene.add( model );

        // Lights

        pointLight = new THREE.PointLight( 0xffffff, 1.75 );
        scene.add( pointLight );


        // Stats

        stats = new Stats();
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.top = '0px';

        //

        window.addEventListener( 'resize', onWindowResize, false );

    }

    function onWindowResize() {

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize( window.innerWidth, window.innerHeight );

    }

    function start() {

        for ( var i = 0; i < kfAnimationsLength; ++i ) {

            var animation = kfAnimations[i];

            for ( var h = 0, hl = animation.hierarchy.length; h < hl; h++ ) {

                var keys = animation.data.hierarchy[ h ].keys;
                var sids = animation.data.hierarchy[ h ].sids;
                var obj = animation.hierarchy[ h ];

                if ( keys.length && sids ) {

                    for ( var s = 0; s < sids.length; s++ ) {

                        var sid = sids[ s ];
                        var next = animation.getNextKeyWith( sid, h, 0 );

                        if ( next ) next.apply( sid );

                    }

                    obj.matrixAutoUpdate = false;
                    animation.data.hierarchy[ h ].node.updateMatrix();
                    obj.matrixWorldNeedsUpdate = true;

                }

            }

            animation.loop = false;
            animation.play();

        }

    }

    function animate( timestamp ) {

        var frameTime = ( timestamp - lastTimestamp ) * 0.001;

        if ( progress >= 0 && progress < 48 ) {

            for ( var i = 0; i < kfAnimationsLength; ++i ) {

                kfAnimations[ i ].update( frameTime );

            }

        } else if ( progress >= 48 ) {

            for ( var i = 0; i < kfAnimationsLength; ++i ) {

                kfAnimations[ i ].stop();

            }

            progress = 0;
            start();

        }

        pointLight.position.copy( camera.position );

        progress += frameTime;
        lastTimestamp = timestamp;
        renderer.render( scene, camera );
        stats.update();
        requestAnimationFrame( animate );

    }

</script>