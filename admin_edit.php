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
    @$post03 = $_POST['get03']; //info
    
    //getting the token of the item
    @$Tgetter = $_GET['T'];
    $Edit = "SELECT * FROM product WHERE product_token ='$Tgetter'";
    $Runedit = mysqli_query($config, $Edit);
    $Rowedit = mysqli_fetch_array($Runedit);


     //uploading image
     $image = @$_FILES['show_img']['name'];
     $image_temp = @$_FILES['show_img']['tmp_name'];
     @$pathimg = "product_img/";
     @$target = $pathimg.basename($_FILES['show_img']['name']);
     $imgtarget2 = strtolower(pathinfo($target,PATHINFO_EXTENSION));
     $chcode = 21;
     @$rename = uniqid('MR-', true).'.'.strtolower(pathinfo($_FILES['show_img']['name'],PATHINFO_EXTENSION));

     if(isset($_POST['button05'])){
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
         @unlink("product_img/".$Rowedit['product_img']."");
      }else{
          $rename = $Rowedit['product_img']; 
      }
      $update = "UPDATE product SET 
         product_name ='$post01',
         product_price ='$post02',
         product_img ='$rename',
         product_info ='$post03'
         WHERE product_token = '$Tgetter'
      ";

      if (mysqli_query($config, $update)) {
        echo'
            <div class="style12">
              <link rel="stylesheet" href="style2.css">
              <img src="img/tickk.gif" alt="tick mark">
              <p>The product has been edited successfully</p>
            </div>
            <meta http-equiv = "refresh" content ="3, url=admin_edit.php?T='.$Tgetter.'">
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
  <title>Admin edit page </title>
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
          <p>Edit item info</p>
        </td>
        <td><a href="n.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="style18">
      <br><br>
      <img width="200" src="product_img/<?php echo $Rowedit['product_img'];?>">
      <?php echo @$Error; ?>
      <input class="box" name="get01" type="text" placeholder="Enter product name..." value="<?php echo $Rowedit['product_name'];?>">
      <input class="box" name="get02" type="text" placeholder="Enter product price..." value="<?php echo $Rowedit['product_price'];?>">
      <input name="show_img" type="file" class="">

      <textarea name="get03" class="style16"><?php echo $Rowedit['product_info'];?></textarea>
        <input name="button05" type="submit" class="style17" value="Edit ">
    </div>
  </form>
</body>
</html>