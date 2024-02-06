<?php
   session_start();
   if(@$_SESSION['log'] != '1'){
     echo'
       <div class="style11">
         <link rel="stylesheet" href="style2.css">
         <img width="400" src="img/error.gif" alt="error mark">
         <p>you need to login!</p>
       </div>
         <meta http-equiv = "refresh" content ="3, url=login.php">
       ';
       exit();
   }

   require "connect.php";
   global $config;
   //getting the total number of items in the product database
   $getter1 = "SELECT *FROM product WHERE product_category ='1'";
   $Rungetter1 = mysqli_query($config, $getter1);
   $Numgetter1 = mysqli_num_rows($Rungetter1);

   $getter2 = "SELECT *FROM product WHERE product_category ='2'";
   $Rungetter2 = mysqli_query($config, $getter2);
   $Numgetter2 = mysqli_num_rows($Rungetter2);

   $getter3 = "SELECT *FROM product WHERE product_category ='3'";
   $Rungetter3 = mysqli_query($config, $getter3);
   $Numgetter3 = mysqli_num_rows($Rungetter3);

   $getter4 = "SELECT *FROM product WHERE product_category ='4'";
   $Rungetter4 = mysqli_query($config, $getter4);
   $Numgetter4 = mysqli_num_rows($Rungetter4);

   $getter5 = "SELECT *FROM product WHERE product_category ='5'";
   $Rungetter5 = mysqli_query($config, $getter5);
   $Numgetter5 = mysqli_num_rows($Rungetter5);

   $getter6 = "SELECT *FROM product WHERE product_category ='6'";
   $Rungetter6 = mysqli_query($config, $getter6);
   $Numgetter6 = mysqli_num_rows($Rungetter6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page </title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">

</head>

<body style="margin:0;padding:0;">
  <div>
    <table class="style14">
      <tr>
        <td>
          <p>Admin page</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl"
              style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
  <div class="container2">

    <div class="style19 item">
      <div class="template1">
        <a class="style20" href="category1.php">
          <p class="style22"><?php echo $Numgetter1; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #1</p>
    </div>

    <div class="style19 item">
    <div class="template2">
        <a class="style20" href="category2.php">
          <p class="style22"><?php echo $Numgetter2; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #2</p>
    </div>

    <div class="style19 item">
    <div class="template3">
        <a class="style20" href="category3.php">
          <p class="style22"><?php echo $Numgetter3; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #3</p>
    </div>

    <div class="style19 item">
    <div class="template4">
        <a class="style20" href="category4.php">
          <p class="style22"><?php echo $Numgetter4; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #4</p>
    </div>

    <div class="style19 item">
    <div class="template5">
        <a class="style20" href="category5.php">
          <p class="style22"><?php echo $Numgetter5; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #5</p>
    </div>

    <div class="style19 item">
    <div class="template6">
        <a class="style20" href="category6.php">
          <p class="style22"><?php echo $Numgetter6; ?></p>
          <p>Total items</p>
        </a>
      </div>
      <br>
      <p class="category">Category #6</p>
    </div>
  </div>
    <div class="style25">
    <a class="style23" href="admin_add.php">Add an item</a>
    </div>
</body>

</html>