<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script defer src="{{asset('asset/face-api.min.js')}}"></script>
  <script defer src="{{asset('asset/scr.js')}}"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column
    }

    canvas {
      position: absolute;
      top: 0;
      left: 0;
    }
  </style>
</head>
<body>
  
  <video id="video" width="720" height="560" autoplay muted></video>
</body>
</html>