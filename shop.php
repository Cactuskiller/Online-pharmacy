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

 $tokenPsel = "SELECT * FROM product";
 $RunP = mysqli_query($config, $tokenPsel);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
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
          <p>Shop</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl"
              style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
  <br><br>
   <p class="hstyle">Category #1:Gastrointestinal disorders</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
          <img width="150" src="shop_img/m1.jpg" alt="">
          <p>Dexilant 60g</p>
          <p>30000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
          
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop">
          <img width="150" src="shop_img/m2.jpg" alt="">
          <p>Ranitidine 300mg tab</p>
          <p>25000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m3.jpg" alt="">
          <p>Omeprazole 20mg</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
           <img width="150" src="shop_img/m4.jpg" alt="">
          <p>Nexium 40mg</p>
          <p>30000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m5.jpg" alt=""> 
          <p>Rennie chewable tab</p>
          <p>20000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
  <p class="hstyle">Category #2:Antibiotics</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
         <img width="150" src="shop_img/m6.jpg" alt="">
          <p>Augmentin 625mg tab</p>
          <p>23000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop">
         <img width="100" src="shop_img/m7.jpg" alt="">
          <p>Suprax 200mg tab</p>
          <p>40000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m8.jpg" alt="">
          <p>Ciprofloxacin 500mg tab</p>
          <p>30000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m9.jpg" alt="">
          <p>Azithromycin 500mg tab</p>
          <p>20000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m10.jpg" alt="">
          <p>Uvamin retard capsule</p>
          <p>13000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
  <p class="hstyle">Category #3:Heart conditions</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
          <img width="150" src="shop_img/m11.jpg" alt="">
          <p>Diovan tab</p>
          <p>14000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m12.jpg" alt="">
          <p>Norvasc 5mg tab</p>
          <p>32000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m13.jpg" alt="">
          <p>Propranolol 10mg</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="100" src="shop_img/m14.jpg" alt="">
          <p>Betaloc zok 50mg</p>
          <p>24000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
      <img width="150" src="shop_img/m15.jpg" alt="">
          <p>Lisinopril 20mg tab</p>
          <p>34000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
  <p class="hstyle">Category #4:Cold and cough remedies</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
          <img width="150" src="shop_img/m16.jpg" alt="">
          <p>Panadol cold and flu tab</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m18.jpg" alt="">
          <p>Rheumix sachet</p>
          <p>32000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="150" src="shop_img/m19.jpg" alt="">
          <p>Asist sachet</p>
          <p>21000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="100" src="shop_img/m20.jpg" alt="">
          <p>Ribosan cough syrup</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
          <img width="150" src="shop_img/m21.jpg" alt="">
          <p>Prospan syrup</p>
          <p>23000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
  <p class="hstyle">Category #5:Antidiabetic medications</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
         <img width="150" src="shop_img/m22.jpg" alt="">
          <p>Amaryl 4mg tab</p>
          <p>30000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="150" src="shop_img/m23.jpg" alt="">
          <p>Glucophage tab</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="150" src="shop_img/m24.jpg" alt="">
          <p>Diamicron MR 30mg</p>
          <p>15000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
        <img width="150" src="shop_img/m25.jpg" alt="">
          <p>Januvia 100mg tab</p>
          <p>24000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="150" src="shop_img/m26.jpg" alt="">
          <p>Forxiga 10mg tab</p>
          <p>20000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
  <p class="hstyle">Category #6:Eye conditions medication</p>
  <div class="con2">
  <div class="style itemShop">
      <div class="templateOfshop">
         <img width="150" src="shop_img/m27.jpg" alt="">
          <p>Tobradex eye drop</p>
          <p>23000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="150" src="shop_img/m28.jpg" alt="">
          <p>Terramycin ophthalmic ointment</p>
          <p>40000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="100" src="shop_img/m29.jpg" alt="">
          <p>Phenicol eye drops</p>
          <p>23000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
        <img width="150" src="shop_img/m30.jpg" alt="">
          <p>Hyfresh eye drop</p>
          <p>12000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
    <div class="style itemShop">
      <div class="templateOfshop2">
         <img width="100" src="shop_img/m31.jpg" alt="">
          <p>Tears naturale eye drop</p>
          <p>15000</p>
          <?php
           if($rowP = mysqli_fetch_array($RunP)) {
             echo'
             <button class="stylebut"><a class="linkP" href="buy.php?T='.$rowP['product_token'].'">view product</a></button>
             ';
          }
          ?>
      </div>
    </div>
  </div>
</body>
</html>