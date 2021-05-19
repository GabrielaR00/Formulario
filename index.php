 <?php
   session_start();
   error_reporting(0);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estiloscasa1.css">
    <title>Invasión Multimedia</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>
<body>
    <div class="header">
    <?php
    $varsesion=$_SESSION['usuario'];

    $rol=$_SESSION['rol_id'];

    if ($varsesion==null )
    {
      include 'navnosesion.html';
    }
    if ($varsesion==true && $rol==1)
    {

      include 'navsesion.html';

    }
    if ($varsesion==true && $rol==2)
    {
      include 'navsesionadmin.html';
    }

    ?>
    </div>


    <script type="module" >
        var scene, camera, renderer, controls, hemiLight, spotLight;
        var eleccion="";

        import * as THREE from './js/three.module.js';
        import {OrbitControls} from './js/OrbitControls.js';
        import {GLTFLoader} from 'https://threejsfundamentals.org/threejs/resources/threejs/r125/examples/jsm/loaders/GLTFLoader.js';
        let mixer = null;
        let siinter = null;
        const size = {
                ancho: window.innerWidth*0.89,
                alto: window.innerHeight*0.90
            }
            scene = new THREE.Scene();
            scene.background =new THREE.Color (0xBBBBBB);
            camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,0.1,1000);
            camera.position.set(80,40,80);
            const can = document.querySelector('.webgl')
            renderer =new THREE.WebGLRenderer({canvas: can});
            renderer.toneMapping=THREE.ReinhardToneMapping;
            renderer.toneMappingExposure=2.3;
            renderer.shadowMapEnabled=true;
            renderer.setSize(window.innerWidth*0.89, window.innerHeight*0.90);
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
                mouse.x = (event.clientX / size.ancho * 2 - 1);
                mouse.y = (-((event.clientY-106) / size.alto) * 2 + 1);
            });

            function getvar()
            {
                $(document).ready(function()
                {
                     var igual= eleccion;

                     $("#contenedorinfo").load("consultamaterias.php",{eleccion:igual});

                });


            }



            window.addEventListener('click',()=>
            {
                if(siinter){



                    if(siinter.object == tableta){
                        console.log('tableta');
                        const doc = document.querySelector('.contenedorinfo');
                        doc.style.backgroundColor = '#FF9400';
                        eleccion='Animación 2D';

                        getvar();

                    }
                    else if(siinter.object == monitor){
                        console.log('monitor');
                        const doc = document.querySelector('.contenedorinfo');
                        doc.style.backgroundColor = '#42FF00';
                         eleccion='Animación 3D y dinámicas';
                         getvar();

                    }
                    else if(siinter.object === mesadibujo){
                        console.log('mesadibujo');
                        const doc = document.querySelector('.contenedorinfo');
                        doc.style.backgroundColor = '#000FFF';
                         eleccion='Dibujo';
                         getvar();
                    }


                }


            });





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
                renderer.setSize(window.innerWidth*0.89,window.innerHeight*0.90);
                renderer.render(scene, camera);
            }


            //CONTROLS
            controls = new OrbitControls(camera, renderer.domElement);
                controls.maxPolarAngle = Math.PI * 0.5;
                controls.minPolarAngle = Math.PI * 0.2;
                controls.minDistance = 50;
                controls.maxDistance = 400;



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

            const size = {
                ancho: window.innerWidth*0.89,
                alto: window.innerHeight*0.90
            }
            //console.log(size)
        }
        animate();
   </script>

<div class="contenedorbody">
<canvas class="webgl" ></canvas>

<div class="controles"><img src="controles.png" alt="" class="imgcon"> </div>

<div class="contenedorinfo" id="contenedorinfo">

     <?php

     require_once "consultamaterias.php";
     ?>
</div>


</div>

</body>
</html>
