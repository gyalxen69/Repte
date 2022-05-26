<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ALL THE STARS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .hey{
      display: flex;
      position: absolute;
      top: 50px;
      left: 100px;
      height: 2px;
      gap: 40vw;
      width: auto;
      justify-content: space-around;
      background-color: black;
    }

    p{
      color: white;
      height: max-content;
      width: min-content;
      font-size: 1.2rem;
      animation: 1.2s all infinite;
    }

    @keyframes all {
      0%, 100%{
        opacity: 0;
      }
      50%{
        opacity: 100%;
      }
    }
  </style>
  <script type="text/javascript">
    user = document.
  </script>
</head>
<body>
  <div class="hey">
    <p>gello</p>
    <p>hi</p>
  </div>
  <?php include("../starfield.php") ?>
</body>
</html>
