<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

    echo "<div><p class='mycss'>You have cleaned session</p></div>";
   header('Refresh: 3; URL = testing/login.php');
?>

      <style>
      @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Oswald:wght@300&family=Roboto+Serif:opsz,wght@8..144,100&family=Shizuru&display=swap');

      div{
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
      }

      .mycss{
        color: white;
        align-items: center;
        font-size: 2.5rem;
        font-family: 'Oswald';
        border: 5px solid #5F9EA0;
        border-radius: 35px;
        padding: 30px;
        background-color: #5F9EA0;
      }
      </style>
