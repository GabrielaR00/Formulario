  <?php
   session_start();
   error_reporting(0);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa</title>

    <link rel="stylesheet" type="text/css" href="estiloscasa1.css">
    <title>Invasión Multimedia</title>
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
    var t=0;
    var u=255;
    var RESOURCES_LOADED = false;
    var loadingManager = null;
    var loadingScreen={
    scene: new THREE.Scene(),
    camara: new THREE.PerspectiveCamera(90,1280/720,0.1,100),
    box: new THREE.Mesh(
      new THREE.BoxGeometry(0.5,0.5,0.5),
      new THREE.MeshBasicMaterial({color:0x4442ff})
    )
    };


    var scene, camera, renderer, controls, hemiLight, spotLight;
    var eleccion="";
    import * as THREE from './js/three.module.js';
    import {OrbitControls} from './js/OrbitControls.js';
    import {GLTFLoader} from 'https://threejsfundamentals.org/threejs/resources/threejs/r125/examples/jsm/loaders/GLTFLoader.js';

    
    loadingScreen.box.position.set(0,0,5);
    loadingScreen.camara.lookAt(loadingScreen.box.position);
    loadingScreen.scene.add(loadingScreen.box);
    
    loadingManager = new THREE.LoadingManager();

    loadingManager.onProgress = function(item,loaded,total){
      console.log(item,loaded,total);
    }
    loadingManager.onLoad = function(){
      console.log("Loaded all objects");
      RESOURCES_LOADED = true;
    }



        let mixer = null;
        let siinter = null;
        const size = {
                ancho: window.innerWidth,
                alto: window.innerHeight
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
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            const muneco = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            muneco.position.x=-24;
            muneco.position.y=27;
            muneco.position.z=-17;
            const tableta = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            tableta.position.x=-20;
            tableta.position.y=19;
            tableta.position.z=0;
            const mesadibujo = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            mesadibujo.position.x=22;
            mesadibujo.position.y=17;
            mesadibujo.position.z=-19;
            const monitorani = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            monitorani.position.x=-24;
            monitorani.position.y=24;
            monitorani.position.z=15;


            const gafas = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            gafas.position.x=-77;
            gafas.position.y=58;
            gafas.position.z=22;
            const monitorpro = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            monitorpro.position.x=-83;
            monitorpro.position.y=67;
            monitorpro.position.z=-5;
            const pacman = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            pacman.position.x=-42;
            pacman.position.y=68;
            pacman.position.z=-15;
            const ps5 = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            ps5.position.x=-58;
            ps5.position.y=61;
            ps5.position.z=-21;
            const torre = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            torre.position.x=-82;
            torre.position.y=69;
            torre.position.z=-24.5;


            const claqueta = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            claqueta.position.x=-11;
            claqueta.position.y=56;
            claqueta.position.z=-53;
            const dron = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            dron.position.x=23;
            dron.position.y=54;
            dron.position.z=-51;
            const monitorvide = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            monitorvide.position.x=-10;
            monitorvide.position.y=67.5;
            monitorvide.position.z=-82;
            const parlantes = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            parlantes.position.x=17.2;
            parlantes.position.y=63.7;
            parlantes.position.z=-82;
            const libros = new THREE.Mesh(new THREE.SphereBufferGeometry(1.5,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000}));
            libros.position.x=24;
            libros.position.y=75;
            libros.position.z=-83;


            const multimedia = new THREE.Mesh(new THREE.SphereBufferGeometry(9,16,16), new THREE.MeshLambertMaterial( {color: 0xff0000,transparent: true, opacity: 0}));
            multimedia.position.x=-22;
            multimedia.position.y=47.3;
            multimedia.position.z=-23;
            



            scene.add(tableta,muneco,mesadibujo,gafas,monitorpro,pacman,claqueta,dron,monitorvide,multimedia,monitorani,ps5,torre,libros,parlantes);

            const loader4= new GLTFLoader(loadingManager);
                        loader4.load('./Assests/Modelos/final1.gltf', function(gltf)
                         {
                             mixer = new THREE.AnimationMixer(gltf.scene);
                             const action = mixer.clipAction(gltf.animations[0]).play();
                             const action2 = mixer.clipAction(gltf.animations[1]).play();
                             const action3 = mixer.clipAction(gltf.animations[2]).play();
                             const action4 = mixer.clipAction(gltf.animations[3]).play();
                             const action5 = mixer.clipAction(gltf.animations[4]).play();
                             const action6 = mixer.clipAction(gltf.animations[5]).play();
                             const action7 = mixer.clipAction(gltf.animations[6]).play();
                             const action8 = mixer.clipAction(gltf.animations[7]).play();
                             const action9 = mixer.clipAction(gltf.animations[8]).play();
                             const action10 = mixer.clipAction(gltf.animations[9]).play();
                             const action11 = mixer.clipAction(gltf.animations[10]).play();
                             const action12 = mixer.clipAction(gltf.animations[11]).play();
                             const action13 = mixer.clipAction(gltf.animations[12]).play();
                             const action14 = mixer.clipAction(gltf.animations[13]).play();
                             const action15 = mixer.clipAction(gltf.animations[14]).play();
                             scene.add(gltf.scene);
                         });


            //Raycaster
            const raycaster = new THREE.Raycaster();



            //Mouse
            const mouse = new THREE.Vector2()
            window.addEventListener('mousemove',(event) =>
            {
                mouse.x = (event.clientX / size.ancho * 2 - 1);
                mouse.y = (-((event.clientY) / size.alto) * 2 + 1);
            })

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

                    //habitacion1 

                    if(siinter.object === tableta){
                        console.log('tableta');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Integración multimedia';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === muneco){
                        console.log('muneco');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Dibujo';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === mesadibujo){
                        console.log('mesadibujo');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Animación 2D';
                        <?php $var=false; ?>
                        getvar();   

                    }                   
                    else if(siinter.object === monitorani){
                        console.log('monitorani');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Animación 3D';
                        <?php $var=false; ?>
                        getvar(); 

                    }

                    //habitacion2
                     else if(siinter.object === torre){
                        console.log('torre');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Ingeniera de Software';
                        <?php $var=false; ?>
                        getvar(); 

                    }
                    else if(siinter.object === gafas){
                        console.log('gafas');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Inteligencia artificial';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === monitorpro){
                        console.log('monitorpro');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Tecnologias de la internet';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === pacman){
                        console.log('pacman');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Computación gráfica';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === ps5){
                        console.log('ps5');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Simulación';
                        <?php $var=false; ?>
                        getvar();

                    }

                    //habitacion3
                    else if(siinter.object === claqueta){
                        console.log('claqueta');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Audio y video';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === dron){
                        console.log('dron');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Movimiento e interacción';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === monitorvide){
                        console.log('monitorvide');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Motion Graphics';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === libros){
                        console.log('libros');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Introducción a la ingeniería';
                        <?php $var=false; ?>
                        getvar();

                    }
                    else if(siinter.object === parlantes){
                        console.log('parlantes');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Procesamiento de señales';
                        <?php $var=false; ?>
                        getvar();

                    }                
                  
                    else if(siinter.object === multimedia){
                        console.log('multimedia');
                        const doc = document.querySelector('.contenedorinfo')
                        eleccion='Informacion Carrera';
                        <?php $var=false; ?>
                        getvar();

                    }
                }
            })

            //LUCES

            //AMBIENTAL
            const ambientlight = new THREE.AmbientLight(0xffffff,0.8);
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


            //const spot1=new THREE.SpotLight(0xFFEFD9,4,60,Math.PI*0.2,0.25,1);
            //spot1.position.set(-2,23,-19);
            //spot1.target.position.x=-2;
            //spot1.target.position.y=0;
            //spot1.target.position.z=-20;

            //scene.add(spot1.target);
            //scene.add(spot1);



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
                controls.maxDistance = 400;
                controls.rotateSpeed = 0.2;
                controls.zoomSpeed=0.2;
                controls.panSpeed=0.2;
                controls.minAzimuthAngle = Math.PI * 0;
                controls.maxAzimuthAngle = Math.PI * 0.5;
                controls.update();




        const clock = new THREE.Clock();
        let prevtime=0;

        function animate()
        {
          
          
          if(RESOURCES_LOADED == false){
            window.requestAnimationFrame(animate);
            loadingScreen.box.position.x -= 0.05;
            if(loadingScreen.box.position.x < -10) loadingScreen.box.position.x = 10;
            loadingScreen.box.position.y=Math.sin(loadingScreen.box.position.x);

            
            
            renderer.render(loadingScreen.scene, loadingScreen.camara);
            return;
          }

            const curtime = clock.getElapsedTime();
            const deltatime=curtime-prevtime;
            prevtime=curtime;

            controls.update(curtime);
            if (mixer !== null){
                mixer.update(deltatime);
            }

            raycaster.setFromCamera(mouse,camera);
            const objetosdesplegables = [tableta,muneco,mesadibujo,gafas,monitorpro,pacman,claqueta,dron,monitorvide,multimedia,monitorani,ps5,torre,libros,parlantes];
            const intersecta =raycaster.intersectObjects(objetosdesplegables);

            for(const ob of objetosdesplegables){

              tableta.material.color.set(0xff0000);
              muneco.material.color.set(0xff0000);
              mesadibujo.material.color.set(0xff0000);
              gafas.material.color.set(0xff0000);
              monitorpro.material.color.set(0xff0000);
              pacman.material.color.set(0xff0000);
              claqueta.material.color.set(0xff0000);
              dron.material.color.set(0xff0000);
              monitorvide.material.color.set(0xff0000);
              ps5.material.color.set(0xff0000);
              torre.material.color.set(0xff0000);
              parlantes.material.color.set(0xff0000);
              libros.material.color.set(0xff0000);
              monitorani.material.color.set(0xff0000);


            }
            for(const og of intersecta){
              if(t<255){og.object.material.color.set('rgb(' + 255 + ',' + 0 + ',' + parseFloat(t) + ')');}
              if(t>=255){og.object.material.color.set('rgb(' + parseFloat(u+255) + ',' + 0 + ',' + 255 + ')');}
              if(t>=510){og.object.material.color.set('rgb(' + 0 + ',' + parseFloat(t-510) + ',' + 255 + ')');}
              if(t>=765){og.object.material.color.set('rgb(' + 0 + ',' + 255 + ',' + parseFloat(u+765) + ')');}
              if(t>=1020){og.object.material.color.set('rgb(' + parseFloat(t-1020) + ',' + 255 + ',' + 0 + ')');}
              if(t>=1275){og.object.material.color.set('rgb(' + 255 + ',' + parseFloat(u+1275) + ',' + 0 + ')');}
              if(t>=1530){t=0;u=255;}
              t=t+10;
              u=u-10;
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
<canvas class="webgl width-100 height-100" ></canvas>

<div class="controles"><img src="controles.png" alt="" class="imgcon"> </div>

<div class="contenedorinfo" id="contenedorinfo">

     <?php
     require_once "consultamaterias.php";
     ?>
</div>


</div>

</body>
</html>