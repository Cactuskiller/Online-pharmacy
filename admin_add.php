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
     
    @$post01 = $_POST['get01']; //name
    @$post02 = $_POST['get02']; //price
    @$post03 = $_POST['get03']; //category
    @$post04 = $_POST['get04']; //info

    $Token = date("dmyhis");
    $RandomNumber = rand(100,400);
    $NewToken = $Token.$RandomNumber;

    //uploading image
    $image = @$_FILES['show_img']['name'];
    $image_temp = @$_FILES['show_img']['tmp_name'];
    @$pathimg = "product_img/";
    @$target = $pathimg.basename($_FILES['show_img']['name']);
    $imgtarget2 = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    $chcode = 21;
    @$rename = uniqid('MR-', true).'.'.strtolower(pathinfo($_FILES['show_img']['name'],PATHINFO_EXTENSION));

    if(isset($_POST['button04'])){
      if(empty($post01) OR empty($post02)){
        $Error ="<p class='style13'>you need to write a name and a price for the product!</p>";
      }else{
        if($imgtarget2 !='' && $imgtarget2 !='jpg' && $imgtarget2 != 'png' && $imgtarget2 != 'gif' && $imgtarget2 != 'jpeg' && $imgtarget2 != 'webp'){
          $chcode = 0;
        }
        if($chcode == 0){
          echo'
          <div class="style11">
            <link rel="stylesheet" href="style2.css">
            <img width="400" src="img/error.gif" alt="error mark">
            <p>this type of image extentions is not allowed!</p>
          </div>
          <meta http-equiv = "refresh" content ="3, url=admin_add.php">
          ';
          exit();
      }
      if($image !=''){
         move_uploaded_file($image_temp,"product_img/$rename");
      }else{
          $rename = ''; 
      }
      $ProductIn = "INSERT INTO product 
      (
          product_token,
          product_name,
          product_price,
          product_img,
          product_category,
          product_info
      ) VALUES (
          '$NewToken',
          '$post01',
          '$post02',
          '$rename',
          '$post03',
          '$post04'
      )";
         if (mysqli_query($config,$ProductIn)) {
          echo'
              <div class="style12">
                <link rel="stylesheet" href="style2.css">
                <img src="img/tickk.gif" alt="tick mark">
                <p>The product has been added successfully</p>
              </div>
              <meta http-equiv = "refresh" content ="3, url=admin_add.php">
              ';
          exit();
        }
     }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin add page </title>
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
          <p>Add a new item</p>
        </td>
        <td><a href="n.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
   
  <form action="" method="post" enctype="multipart/form-data">
  <div class="style18">
     <?php echo @$Error; ?>
      <input required class="box" name="get01" type="text" placeholder="Enter product name...">
      <input required class="box" name="get02" type="text" placeholder="Enter product price...">
      <input class="box" name="get03" type="text" placeholder="Enter the product category...">
      <input name="show_img" type="file" class="style15">
      <textarea name="get04" class="style16"></textarea>
        <input name="button04" type="submit" class="style17" value="Add">
    </div>
    </form>
</body>

</html>