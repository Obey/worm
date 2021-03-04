<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Babylon.js - Multi views demo</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<script type="text/javascript" src="js/mdb.min.js"></script>-->
     <link rel="stylesheet" href="css/mdb.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


     <link rel="stylesheet" href="css/w3.css">



     <link rel="stylesheet" href="https://shop.zabor-ss.ru/new/depend/jquery-ui-1.12.1.custom/jquery-ui.min.css">
     <script src="https://shop.zabor-ss.ru/new/depend/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
     <script src="https://shop.zabor-ss.ru/new/depend/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/jquery-3.5.1.min.js"></script>

  <link rel="stylesheet" href="https://shop.zabor-ss.ru/OWL/dist/assets/owl.carousel.css">
  <script src="https://shop.zabor-ss.ru/OWL/dist/owl.carousel.min.js"></script>

  <script src="https://shop.zabor-ss.ru/bootstrap/5.0.0b/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://shop.zabor-ss.ru/bootstrap/5.0.0b/css/bootstrap.min.css">

  <!-- Babylon.js -->
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/ammo.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/cannon.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/Oimo.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/libktx.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/earcut.min.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/babylon.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/inspector/babylon.inspector.bundle.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/materialsLibrary/babylonjs.materials.min.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/postProcessesLibrary/babylonjs.postProcess.min.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/loaders/babylonjs.loaders.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/loaders/babylon.objFileLoader.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/serializers/babylonjs.serializers.min.js"></script>
  <script src="https://shop.zabor-ss.ru/3d_obj/babylonjs_full/gui/babylon.gui.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/jquery-3.5.1.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-1.8.2/angular.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-1.8.2/angular-animate.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-1.8.2/angular-route.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-1.8.2/angular-aria.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-1.8.2/angular-messages.min.js"></script>
  <script src="https://shop.zabor-ss.ru/new/depend/angular-filter.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            overflow: hidden;
            font-family: 'Open Sans';
            color: white;
            background: #ccc; /**/
        }

        a {
            color: white;
        }

        canvas {
            width: 100%;
            height: 100%;
            align-self: center;
            justify-self: center;
        }



        #title {
            grid-row: 1;
            grid-column: 1;
            margin: 20px;
            align-self: center;
            justify-self: center;
        }

        #description {
            grid-row: 2;
            grid-column: 1;
            margin: 20px;
            align-self: center;
            justify-self: center;
        }

        .container {
            grid-row: 3;
            grid-column: 1;
            width: 100%;
            height: 100%;
            padding: 0px;
            margin: 0;
            display: grid;
            grid-template-columns: 45% 10% 45%;
            grid-template-rows: 45% 10% 45%;
        }




       </style>

    <style>
        html, body {
            overflow: hidden;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #renderCanvas {
            width: 100%;
            height: 100%;
            touch-action: none;
        }
        #upr {
            position: fixed;
            top: 0px;

            z-index: 4000;

        }

    .hidden {display: none;}
    </style>
  </head>

    <body ng-app="myApp" ng-controller="myCtrl">
    <canvas id="renderCanvas"></canvas>


<div  id="upr" class="hidden">

 <input ng-change="" type="number" step ="1" ng-model="kgk">
<input ng-change=" Wire();" type="number" step ="1" ng-model="wire">
<div ng-show="sceneColor != '#FFFFFFFF'" ng-click="sceneColor = '#FFFFFFFF'" class="btn btn-xs btn-default">{{sceneColor}}</div>
<div ng-show="sceneColor != '#000000FF'" ng-click="sceneColor = '#000000FF'" class="btn btn-xs btn-default">{{sceneColor}}</div>
<div ng-show="matColor != '#000000FF'"  ng-click="matColor = '#000000FF'" class="btn btn-xs btn-default">matColor = '#000000FF'</div>
<div ng-show="matColor != '#FFFFFFFF'"  ng-click="matColor = '#FFFFFFFF'" class="btn btn-xs btn-default">matColor = '#000000FF'</div>



<div ng-click="Metalframe = !Metalframe" class="btn btn-xs btn-default">{{Metalframe}}</div>
<div ng-click="meshmat = Metal_material" class="btn btn-xs btn-default">meshmat = Metal_material</div>
<div ng-click="meshmat = BetonTexture" class="btn btn-xs btn-default">meshmat = BetonTexture</div>
<div ng-click="texturl = '/images/sandtexture2.jpg'" class="btn btn-xs btn-default">sandtexture2</div>
<input type="text"  ng-model="texturl">

<input type="number" step ="0.1" ng-model="wwww">
<input type="number" step ="0.1" ng-model="www">
<input type="number" step ="0.01" ng-model="ww">
<input type="number" step ="0.001" ng-model="kplus">
<input  ng-change=" Wire();" type="number" step ="1" ng-model="length">
<input type="number" step ="0.1" ng-model="radius">
<input type="number" min="0" max="1" step ="0.05" ng-model="Metal_material.roughness">
<input type="number" step ="0.1" ng-model="meshmat.diffuseTexture.uScale">
<input type="number" step ="0.1" ng-model="meshmat.diffuseTexture.vScale">
</div>

    <script >
    var app = angular.module('myApp', []);

    app.controller('myCtrl', function($scope) {
    $scope.Metalframe = true;
    $scope.texturl = "/images/sandtexture.jpg";
      var canvas = document.getElementById("renderCanvas");

      var engine = null;
     $scope.scene = null;
      var sceneToRender = null;
      var createDefaultEngine = function() { return new BABYLON.Engine(canvas, true, { preserveDrawingBuffer: true, stencil: true }); };
      var createScene = function() {
 $scope.scene = new BABYLON.Scene(engine);


  $scope.sceneColor = '#000000FF';
  $scope.scene.clearColor = new BABYLON.Color4.FromHexString($scope.sceneColor);
  var camera = new BABYLON.ArcRotateCamera("camera1",  0, 0, 0, new BABYLON.Vector3(0, 0, -0), $scope.scene);
  camera.setPosition(new BABYLON.Vector3(0, 0, -60));
  // camera.attachControl(canvas, true);
  var light = new BABYLON.HemisphericLight("light1", new BABYLON.Vector3(1, 0.5, 0), $scope.scene);
  light.intensity = 1;
  var pl = new BABYLON.PointLight("pl", new BABYLON.Vector3(0, 0, 0), $scope.scene);
  pl.diffuse = new BABYLON.Color3(1, 1, 1);
  pl.specular = new BABYLON.Color3(0.05, 0.91, 0.65);
  pl.intensity = 1.15;

  var mat = new BABYLON.StandardMaterial("mat1", $scope.scene);
  mat.alpha = 1;

  var EnvironmentTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("/textures/environment.dds", $scope.scene);
  // Металл
    $scope.Metal_material = new BABYLON.PBRMetallicRoughnessMaterial("pbr", $scope.scene);
    $scope.Metal_material.metallic = 1;
    $scope.Metal_material.roughness = .1;
    $scope.Metal_material.environmentTexture = EnvironmentTexture;
    $scope.Metal_material.baseColor = new BABYLON.Color4.FromHexString('#FFFFFFFF');
    $scope.Metal_material.backFaceCulling = true;
    $scope.Metal_material.wireframe = $scope.Metalframe;

  // Металл КОНЕЦ
  $scope.BetonTexture = new BABYLON.Texture("/images/betontexture2.jpg", $scope.scene);
  $scope.Beton = new BABYLON.StandardMaterial('Beton', $scope.scene);
  $scope.Beton.diffuseColor = new BABYLON.Color4.FromHexString('#DCDCDCFF');
  $scope.Beton.diffuseTexture = $scope.BetonTexture;
  $scope.Beton.bumpTexture = $scope.BetonTexture;
  //$scope.Beton.bumpTexture.opacity = 0.1;
  $scope.Beton.bumpTexture.level = 1;
  $scope.Beton.bumpTexture.uScale = $scope.Beton.diffuseTexture.uScale = 12;
  $scope.Beton.bumpTexture.vScale = $scope.Beton.diffuseTexture.vScale = 13;
   $scope.Beton.backFaceCulling = true;
    $scope.Beton.wireframe = $scope.Metalframe;

  $scope.matColor = '#FFFFFFFF';
  mat.diffuseColor = new BABYLON.Color4.FromHexString($scope.matColor);
  mat.backFaceCulling = false;
  mat.wireframe = $scope.Metalframe;


$scope.Length = function() {
  // tube creation
  $scope.sideOrientation = BABYLON.Mesh.FRONTSIDE;

  $scope.radius = 9;
  $scope.length = 38;
  $scope.coefx = 1.1;


  }

  $scope.Length();


  $scope.wire = 7;   $scope.ww = 1; $scope.www = 4; $scope.wwww = 4;

  $scope.Wire = function() {
    if ($scope.windowHeight > $scope.windowWidth) {
        $scope.length = 21;
    }
    $scope.path = [];
      for(var i = -1*$scope.length; i < $scope.length; i++) {
        var x = i * $scope.coefx;
        var y = 0;
        var z = 0;
        $scope.path.push(new BABYLON.Vector3(x, y, z));
      }
  if ($scope.mesh) {$scope.mesh.dispose();}



  $scope.mesh = BABYLON.Mesh.CreateTube("tube", $scope.path, 1, $scope.wire, null, 0, $scope.scene, true, $scope.sideOrientation);
  if ($scope.windowHeight > $scope.windowWidth) {

    $scope.mesh.rotation.z = Math.PI / 2;

  }

  }
  $scope.Wire();
  $scope.meshmat = $scope.Metal_material;



  $scope.updatePath = function(path = $scope.path, k) {


    for (var i = 0; i < path.length; i++) {
      var x = path[i].x;
      var y = $scope.ww * Math.cos(i / $scope.www + k * $scope.wwww);
      var z  = path[i].z*2;
      path[i].x = x;
      path[i].y = y;
      path[i].z = z;


    }
  };

  var updateFixedRadius = function(radius=$scope.radius, k) {
    return (radius + 2 * Math.sin(k)*1);
  };


  // morphing

  $scope.windowWidth = $( window ).width();
  $scope.windowHeight = $( window ).height();


  var k = 0;
  $scope.kk = 0;
  $scope.kplus = .009;
  $scope.scene.registerBeforeRender(function() {

    $scope.kk += 0.0021;
    $scope.ksk = Math.sin($scope.kk)*4;
    $scope.coefx =   $scope.ksk/11+0.6;

    if ($scope.ksk > 0) {
    $scope.kplus += .00001;

    $scope.Wire();
    $scope.wire = Math.sin($scope.kk)*Math.sin($scope.kk)*6+3;
    $scope.radius = $scope.ksk/2+4;}
    else if ($scope.ksk < 0) {
  $scope.kplus -= .00001;
    camera.alpha -= $scope.kplus/7;
    $scope.wire = -0.1* Math.sin($scope.kk)*8+4;
    $scope.radius = 4-0.25*$scope.ksk; }
	//radiusFunction
    var radiusFunction = function(i, distance) {
      return radius + 1.2 * Math.sin(i / 2 + k);
    };
    $scope.scene.clearColor = new BABYLON.Color4.FromHexString($scope.sceneColor);
    $scope.updatePath(path = $scope.path, k);
    var rad = updateFixedRadius(radius = $scope.radius, k);
    $scope.mesh = BABYLON.Mesh.CreateTube(null, $scope.path, rad, $scope.wire, radiusFunction, null, null, null, null, $scope.mesh);
    k += $scope.kplus;



    $scope.meshmat.baseColor = new BABYLON.Color4.FromHexString($scope.matColor);
    $scope.meshmat.diffuseColor = new BABYLON.Color4.FromHexString($scope.matColor);
    $scope.meshmat.diffuseTexture = new BABYLON.Texture($scope.texturl, $scope.scene);
    $scope.meshmat.bumpTexture = new BABYLON.Texture($scope.texturl, $scope.scene);
    $scope.mesh.material = $scope.meshmat;
    $scope.mesh.actionManager = new BABYLON.ActionManager($scope.scene);

    $scope.mesh.actionManager.registerAction(
         new BABYLON.ExecuteCodeAction(
             BABYLON.ActionManager.OnPickTrigger,
             function () {doDownload('scene', $scope.scene);}
         )
    );


    $scope.meshmat.bumpTexture.uScale = $scope.meshmat.diffuseTexture.uScale = 12;
    $scope.meshmat.bumpTexture.vScale = $scope.meshmat.diffuseTexture.vScale = 13;

    $scope.meshmat.wireframe = $scope.Metalframe;




    pl.position = camera.position;
  });



/*
  if (BABYLON.VideoRecorder.IsSupported(engine)) {
      var recorder = new BABYLON.VideoRecorder(engine);
      recorder.startRecording("test.webm", 60);
  }
*/


  return $scope.scene;
};


engine = createDefaultEngine();
if (!engine) throw 'engine should not be null.';
scene = createScene();
sceneToRender = $scope.scene;

engine.runRenderLoop(function () {
    if (sceneToRender) {
        sceneToRender.render();
    }
});


var objectUrl;
function doDownload(filename, scene) {
    if(objectUrl) {
        window.URL.revokeObjectURL(objectUrl);
    }

    var serializedScene = BABYLON.SceneSerializer.Serialize($scope.scene);

    var strMesh = JSON.stringify(serializedScene);

    if (filename.toLowerCase().lastIndexOf(".babylon") !== filename.length - 8 || filename.length < 9){
        filename += ".babylon";
    }

  var blob = new Blob ( [ strMesh ], { type : "octet/stream" } );

    // turn blob into an object URL; saved as a member, so can be cleaned out later
    objectUrl = (window.webkitURL || window.URL).createObjectURL(blob);

    var link = window.document.createElement('a');
    link.href = objectUrl;
    link.download = filename;
    var click = document.createEvent("MouseEvents");
    click.initEvent("click", true, false);
    link.dispatchEvent(click);
}


// Resize
window.addEventListener("resize", function () {
    engine.resize();
});







    });

    </script>
</body>
</html>
