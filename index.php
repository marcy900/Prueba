<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de A-Frame</title>
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
  
</head>
<body>
<a-scene>
      <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
      <a-sphere position="0 4 -5" radius="1.30" color="#ECECEC"></a-sphere>
      <a-cylinder position="1.5 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
      <a-cylinder position="-1 1 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
      <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#FF0000"></a-plane>
      <a-box position="-1 2 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
      <a-sky color="#ECECEC"></a-sky>
    </a-scene>
    <a-entity position="5 0 0" rotation="0 0 0">   
      <a-animation attribute="rotation" to="0 360 0" dur="10000"   fill="forwards"   repeat="indefinite">
        <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"></a-sphere>
      </a-animation> 
    </a-entity>
    

</body>
</html>