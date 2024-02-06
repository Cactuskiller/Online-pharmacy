<?php
  session_start();
  unset($_SESSION['Token']);
  unset($_SESSION['user']);
  unset($_SESSION['log']);
  session_destroy();
   
   echo'
      <div class="style11">
        <link rel="stylesheet" href="style2.css">
        <img width="250" src="img/logout.gif" alt="error mark">
        <p>you have logged out from your account!</p>
      </div>
        <meta http-equiv = "refresh" content ="3, url=index.php">
      ';
?>