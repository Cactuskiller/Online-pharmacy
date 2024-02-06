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

 $TokenUser = $_SESSION['Token'];
 $Tsel = "SELECT * FROM user WHERE 	user_token='$TokenUser'";
 $RunTsel = mysqli_query($config,$Tsel);
 $RowTsel = mysqli_fetch_array($RunTsel);

  @$post01 = $_POST['get01']; //name
  @$post02 = $_POST['get02']; //email
  @$post03 = $_POST['get03']; //number
  @$post04 = $_POST['get04']; //password
  @$post05 = $_POST['get05']; //date


  $image = @$_FILES['show_img']['name'];
  $image_temp = @$_FILES['show_img']['tmp_name'];
  @$pathimg = "user_img/";
  @$target = $pathimg.basename($_FILES['show_img']['name']);
  $imgtarget2 = strtolower(pathinfo($target,PATHINFO_EXTENSION));
  $chcode = 21;
  @$rename = uniqid('MR-', true).'.'.strtolower(pathinfo($_FILES['show_img']['name'],PATHINFO_EXTENSION));

  if(isset($_POST['button06'])){
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
      move_uploaded_file($image_temp,"user_img/$rename");
      @unlink("user_img/".$RowTsel['user_img']."");
   }else{
       $rename = $RowTsel['product_img']; 
   }
    $upUser = "UPDATE user SET 
        user_name = '$post01',
        user_email = '$post02',
        user_phone = '$post03',
        user_pass = '$post04',
        user_bday = '$post05',
        user_img = '$rename'

        WHERE user_token = '$TokenUser'
    ";

      if (mysqli_query($config, $upUser)) {
        echo'
            <div class="style12">
              <link rel="stylesheet" href="style2.css">
              <img src="img/tickk.gif" alt="tick mark">
              <p>info has been editted successfully</p>
            </div>
            <meta http-equiv = "refresh" content ="3, url=profile.php?T='.$TokenUser.'">
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
  <title>profile page </title>
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
          <p>my profile</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="style18">
    <img width="200" src="user_img/<?php echo $RowTsel['user_img'];?>"> <br>
    <?php echo @$Error; ?>
    <input required value="<?php echo $RowTsel['user_name'];?>" class="box" name="get01" type="text" placeholder="Enter your first name...">
    <input required value="<?php echo $RowTsel['user_email'];?>" class="box"name="get02"  type="email" placeholder="Enter your email...">
    <input class="box" value="<?php echo $RowTsel['user_phone'];?>" name="get03" type="tel" placeholder="Enter your phone number...">
    <input  class="box" value="<?php echo $RowTsel['user_pass'];?>" name="get04" type="password" placeholder="Enter your password...">
    <input class="box" value="<?php echo $RowTsel['user_bday'];?>" name="get05" type="date">
    <input name="show_img" type="file" class="style15">
        <div class="style09">
          <div class="main">
            <input name="button06" class="substyle01" type="submit" value="Edit info">
          </div>
        </div>
    </div>
  </form>
  </body>
</html>