/**
 * Actually made this one
 */

/** @namespace */
var THREEx		= THREEx		|| {};

//Initialize
THREEx.GUI	= function()
{
    THREEx.GUI._gui = new dat.GUI();
    addStats();
};

//Array of dat.gui folders
THREEx.GUI._Folders = [];

//Keeps all the configurable items for dat.gui
THREEx.GUI._Controls = [];

//DEBUG PERFORMANCE STATISTICS
function addStats()
{
    THREEx.GUI.stats = new Stats();
    THREEx.GUI.stats.setMode( 0 ); // 0: fps, 1: ms, 2: mb
    THREEx.GUI.stats.domElement.style.position = 'absolute';
    THREEx.GUI.stats.domElement.style.left = '0px';
    THREEx.GUI.stats.domElement.style.top = '90px';
    document.body.appendChild( THREEx.GUI.stats.domElement );
};

//Adds a folder to organize dat.gui ....
function addFolder(text) {
    try {
        var folder = THREEx.GUI._gui.addFolder(text);
        THREEx.GUI._Folders.push(folder);
        folder.open();
    } catch (Exception) {
        var folder = THREEx.GUI._gui;
    }
    return folder;
}

//Method to add a variable amount of controls
THREEx.GUI.addControls = function(controls,options) {
    if (THREEx.GUI._gui === undefined)
        THREEx.GUI();

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
        THREEx.GUI._Controls[controls[x]] = original;
        if (folder_name === false)
            THREEx.GUI._gui.add(THREEx.GUI._Controls, controls[x], min, max);
        else
            folder.add(THREEx.GUI._Controls, controls[x], min, max);
    }
};