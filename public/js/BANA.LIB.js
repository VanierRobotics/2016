// A little JS library with things that would otherwise be redundant.

/** @namespace */
var BANA		= BANA		|| {};

//////////////////////////////////////////////////////////////
//       Methods related to construction of 3D Scenes       //
//////////////////////////////////////////////////////////////

//Verify WebGL Environment availability
BANA.checkForWebGL = function(){
    try {
        var canvas = document.createElement( 'canvas' );
        return !!( window.WebGLRenderingContext && (
        canvas.getContext( 'webgl' ) ||
        canvas.getContext('experimental-webgl')) );
    } catch ( e ) { return false; }
};
//Creates the basic 3D environments
BANA.GFX = function(near, far){
    //Renderer Setup
    var canvas = document.createElement( 'canvas' );
    if ( BANA.checkForWebGL() )
        renderer = new THREE.WebGLRenderer({antialias:true});
    else
        renderer = new THREE.CanvasRenderer();
    renderer.setPixelRatio( window.devicePixelRatio );
    renderer.setSize( window.innerWidth, window.innerHeight-150 );
    renderer.setClearColor(new THREE.Color(0xd3d3d3));//BACKGROUND
    //SHADOW
    //renderer.shadowMap.enabled = true;
    //renderer.shadowMapSoft = true;

    document.body.appendChild( renderer.domElement );
    //CAMERA Setup
    camera = new THREE.PerspectiveCamera( 60, window.innerWidth / window.innerHeight, near, far );
    camera.position.set( 0, 100, 2000 );
    //camera.setLens(20);
    THREEx.WindowResize(renderer, camera); //Small plugin for automatic resize

    //SCENE SETUP
    scene = new THREE.Scene();
};

BANA.GFX.newSky =  function() {
    // Add Sky Mesh
    sky = new THREE.Sky();
    scene.add( sky.mesh );

    // Add Sun Helper
    sunSphere = new THREE.Mesh(
        new THREE.SphereBufferGeometry( 20000, 16, 8 ),
        new THREE.MeshBasicMaterial( { color: 0xffffff } )
    );
    sunSphere.position.y = - 700000;
    sunSphere.visible = false;
    scene.add( sunSphere );

    sky.uniforms.turbidity.value = 1;
    sky.uniforms.reileigh.value = 0.05;
    sky.uniforms.mieCoefficient.value = 0.0100;
    sky.uniforms.mieDirectionalG.value = 0.9;
    sky.uniforms.luminance.value = 1.1;

    var distance = 400000;
    var inclination = 0.36;
    var azimuth = 0.25;
    var theta = Math.PI * ( inclination - 0.5 );
    var phi = 2 * Math.PI * ( azimuth - 0.5 );

    sunSphere.position.x = distance * Math.cos( phi );
    sunSphere.position.y = distance * Math.sin( phi ) * Math.sin( theta );
    sunSphere.position.z = distance * Math.sin( phi ) * Math.cos( theta );
    sky.uniforms.sunPosition.value.copy( sunSphere.position );
    //sunSphere.visible = true;
};

//Initializes Orbit Controls
BANA.GFX.newControls = function() {
    //Movement controls for when creating scenes.
    controls = new THREE.OrbitControls( camera, renderer.domElement );
    //controls.addEventListener( 'change', render ); // add this only if there is no animation loop (requestAnimationFrame)
    controls.enableDamping = true;
    controls.dampingFactor = 0.25;
    controls.enableZoom = true;
};

//Initializes useful helpers for easier development
BANA.GFX.addHelpers = function(unit) {
    var axis = new THREE.AxisHelper(unit);
    //var camhelp = new THREE.CameraHelper(cam2);
    var grid = new THREE.GridHelper( 5000, unit );
    grid.setColors(new THREE.Color("rgb(255,0,0)"), 0xffffff);
    scene.add(grid);
    scene.add(axis);
};

//Recursive rendering because.
BANA.GFX.render =    function() {
    requestAnimationFrame( BANA.GFX.render );
    try{
        onTick();
        TWEEN.update();
    } catch (Exception) {
        console.log('Something doesn\'t exist yet. Don\'t worry, should be fine now...');
    }
    BANA.GUI.stats.update();
    renderer.render(scene, camera);
};

//////////////////////////////////////////////////////////////
//     Magical dynamic js variable control with dat.gui     //
//////////////////////////////////////////////////////////////
//Initialize dat.gui and statistics widget
BANA.GUI	= function()
{
    BANA.GUI._gui = new dat.GUI();
    addStats();
};

//Array of dat.gui folders
BANA.GUI._Folders = [];

//Keeps all the configurable items for dat.gui
BANA.GUI._Controls = [];

//DEBUG PERFORMANCE STATISTICS
function addStats()
{
    BANA.GUI.stats = new Stats();
    BANA.GUI.stats.setMode( 0 ); // 0: fps, 1: ms, 2: mb
    BANA.GUI.stats.domElement.style.position = 'absolute';
    BANA.GUI.stats.domElement.style.left = '0px';
    BANA.GUI.stats.domElement.style.top = '90px';
    document.body.appendChild( BANA.GUI.stats.domElement );
};

//Adds a folder to organize dat.gui ....
function addFolder(text) {
    try {
        var folder = BANA.GUI._gui.addFolder(text);
        BANA.GUI._Folders.push(folder);
        folder.open();
    } catch (Exception) {
        var folder = BANA.GUI._gui;
    }
    return folder;
}

//Method to add a variable amount of controls
BANA.GUI.addControls = function(controls,options) {
    if (BANA.GUI._gui === undefined)
        BANA.GUI();

    //Check for folder info
    var folder_name = ! options[ 'folder_name' ] ? false : options[ 'folder_name' ];
    if (folder_name)
        var folder = addFolder(folder_name);

    //Check for numeric options
    var min = ! options[ 'min' ] ? -1 : options[ 'min' ];
    var original = ! options[ 'original' ] ? 0.0 : options[ 'original' ];
    var max = ! options[ 'max' ] ? 1 : options[ 'max' ];

    //loop to add all provided controls
    for (x in controls) {
        BANA.GUI._Controls[controls[x]] = original;
        if (folder_name === false)
            BANA.GUI._gui.add(BANA.GUI._Controls, controls[x], min, max);//.onChange( guiUpdate );
        else
            folder.add(BANA.GUI._Controls, controls[x], min, max);//.onChange( guiUpdate );
    }
};