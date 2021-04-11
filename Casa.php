  <?php
   session_start();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estiloscanvas.css">

    <title>Hello There</title>
</head>
<body>
    <?php
    $varsesion=$_SESSION['usuario'];
    $rol=$_SESSION['rol_id'];
    if ($varsesion==null || $varsesion="")
    {
      echo "<div></div>";
      echo "<a href='Registro.php'>Registrate";
      echo "<div></div>";
      echo "<a href='Login.php'>Iniciar Sesion";
      echo "<div></div>";
    }
    if ($varsesion=true && $rol==0)
    {
      echo "<div></div>";
      echo "<a href='micuenta.php'>Mi cuenta";
      echo "<div></div>";
    }
    if ($varsesion=true && $rol==1)
    {
      echo "<div></div>";
      echo "<a href='admin.php'>Mi cuenta admin";
      echo "<div></div>";
    }
    ?>
    <script type="module" >

        var scene, camera, renderer, controls, hemiLight, spotLight;
        import * as THREE from './js/three.module.js';
        import {OrbitControls} from './js/OrbitControls.js';
        import {GLTFLoader} from 'https://threejsfundamentals.org/threejs/resources/threejs/r125/examples/jsm/loaders/GLTFLoader.js';




        let mixer = null;
        let siinter = null;




            scene = new THREE.Scene();
            scene.background =new THREE.Color (0xBBBBBB);
            camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,0.1,1000);
            camera.position.set(80,40,80);


            renderer =new THREE.WebGLRenderer({antialias:true});
            renderer.toneMapping=THREE.ReinhardToneMapping;
            renderer.toneMappingExposure=2.3;
            renderer.shadowMapEnabled=true;
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);





            const tableta = new THREE.Mesh(new THREE.SphereBufferGeometry(3,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            tableta.position.x=-13;
            tableta.position.y=11;
            tableta.position.z=-15;
            const monitor = new THREE.Mesh(new THREE.SphereBufferGeometry(3,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            monitor.position.x=-14;
            monitor.position.y=13;
            monitor.position.z=-8.5;
            const mesadibujo = new THREE.Mesh(new THREE.SphereBufferGeometry(7,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            mesadibujo.position.x=-10;
            mesadibujo.position.y=5;
            mesadibujo.position.z=19;
            scene.add(tableta,monitor,mesadibujo);


            const loader4= new GLTFLoader();
                        loader4.load('./Assests/Modelos/todo3.gltf', function(gltf)
                         {

                             mixer = new THREE.AnimationMixer(gltf.scene);

                             const action = mixer.clipAction(gltf.animations[0]).play();
                             const action2 = mixer.clipAction(gltf.animations[1]).play();
                             const action3 = mixer.clipAction(gltf.animations[2]).play();

                             scene.add(gltf.scene);

                         });


            //Raycaster
            const raycaster = new THREE.Raycaster();



            //Mouse
            const mouse = new THREE.Vector2()
            window.addEventListener('mousemove',(event) =>
            {
                mouse.x = event.clientX / window.innerWidth * 2 - 1;
                mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
            })

            window.addEventListener('click',()=>
            {
                if(siinter){

                    if(siinter.object === tableta){
                        console.log('tableta');
                    }
                    else if(siinter.object === monitor){
                        console.log('monitor');
                    }
                    else if(siinter.object === mesadibujo){
                        console.log('mesadibujo');
                    }
                }
            })

            //LUCES

            //AMBIENTAL
            const ambientlight = new THREE.AmbientLight(0xffffff,1);
            scene.add(ambientlight);

            //DIRECCIONALES
            //const direccional1 = new THREE.DirectionalLight(0x00fffc,0.8);
            //scene.add(direccional1);

            //punto de luz
            //const punto1=new THREE.PointLight(0xFFEFD9,2);
            //punto1.position.set(1,25,1);
            //scene.add(punto1);
            //const punto2=new THREE.PointLight(0xFFEFD9,0.5,20);
            //punto2.position.set(-2,21,-20);
            //scene.add(punto2);

            //const planoluz=new THREE.RectAreaLight(0xFFEFD9,30,3,3);
            //planoluz.position.set(-2,20,-12);
            //planoluz.lookAt(new THREE.Vector3(-2,0,-20));
            //scene.add(planoluz);


            const spot1=new THREE.SpotLight(0xFFEFD9,4,60,Math.PI*0.2,0.25,1);
            spot1.position.set(-2,23,-19);
            spot1.target.position.x=-2;
            spot1.target.position.y=0;
            spot1.target.position.z=-20;

            scene.add(spot1.target);
            scene.add(spot1);



            //AJUSTE PANTALLA
            window.addEventListener('resize', redimensionar);
            function redimensionar()
            {
                camera.aspect = window.innerWidth/window.innerHeight;
                camera.updateProjectionMatrix()
                renderer.setSize(window.innerWidth,window.innerHeight);
                renderer.render(scene, camera);
            }


            //CONTROLS
            controls = new OrbitControls(camera, renderer.domElement);
                controls.maxPolarAngle = Math.PI * 0.5;
                controls.minPolarAngle = Math.PI * 0.2;
                controls.minDistance = 50;
                controls.maxDistance = 135;



                controls.update();




        const clock = new THREE.Clock();
        let prevtime=0;

        function animate()
        {
            const curtime = clock.getElapsedTime();
            const deltatime=curtime-prevtime;
            prevtime=curtime;

            controls.update(curtime);
            if (mixer !== null){
                mixer.update(deltatime);
            }

            raycaster.setFromCamera(mouse,camera);
            const objetosdesplegables = [tableta,monitor,mesadibujo];
            const intersecta =raycaster.intersectObjects(objetosdesplegables);

            for(const ob of objetosdesplegables){


            }
            if(intersecta.length){
                siinter = intersecta[0];

            }else {
                siinter = null;
            }
            renderer.render(scene,camera);
            window.requestAnimationFrame(animate);
        }
        animate();

   </script>

</body>
</html>
