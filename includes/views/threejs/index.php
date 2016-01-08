<script>
	var scene = new THREE.Scene();
	var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
	var move = true;
	var renderer = new THREE.WebGLRenderer();
	renderer.setSize( window.innerWidth, window.innerHeight );
	document.body.appendChild( renderer.domElement );

	var geometry = new THREE.BoxGeometry( 1, 1, 1 );
	var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
	var cube = new THREE.Mesh( geometry, material );
	//scene.add( cube );

	camera.position.z = 10;

	var mesh = null;
	var loader = new THREE.JSONLoader();
	loader.load('<?=URL?>json/test.json',                     function(geometry) {
		mesh = new THREE.Mesh(geometry);
		scene.add(mesh);
	  });

	var render = function () {
		requestAnimationFrame( render );

		cube.rotation.x += 0.005;
		cube.rotation.y += 0.005;

		//mesh.rotation.x += 0.005;
		mesh.rotation.z += 0.005;
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
		renderer.render(scene, camera);
	};

	render();
</script>