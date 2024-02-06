<?php

  require "connect.php";
  global $config;
  
  $users = "SELECT * FROM user";
  $RunUsers = mysqli_query($config, $users);

  @$getUserToken = $_GET['T'];
  if (@$_GET['d']=='d') {
      $deleteUser = "DELETE FROM user WHERE user_token ='$getUserToken'";
      $RundeleteUser = mysqli_query($config, $deleteUser);
      echo'
          <div class="style12">
          <link rel="stylesheet" href="style2.css">
          <img src="img/tickk.gif" alt="tick mark">
          <p>this user was deleted successfully</p>
        </div>
          <meta http-equiv = "refresh" content ="3, url=users.php">
        ';
     exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users page</title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body style="margin:0;padding:0;">
<div>
    <table class="style14">
      <tr>
        <td>
          <p>Users</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl"
              style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
    <div class="center">
       <a href="text.php"><button class="button10">About the project</button></a>
    </div>
  <div>
      <table class="style32">
        <tr>
          <th>index</th>
          <th>User Name</th>
          <th>phone Number</th>
          <th>User Email</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
        <?php 
          $number =1;
          while($rowselectUser = mysqli_fetch_array($RunUsers)){
            echo'
              <tr>
                  <td>'.$number++.'</td>
                  <td>'.$rowselectUser['user_name'].'</td>
                  <td>'.$rowselectUser['user_phone'].'</td>
                  <td>'.$rowselectUser['user_email'].'</td>
                  <td><a class="style28">Edit</a></td>
                  <td> <a href="users.php?d=d&T='.$rowselectUser['user_token'].'" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
              </tr>
            ';
        };
    ?>
        
      </table>
</div>
</body>
</html>