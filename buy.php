<?php
 session_start();

 require "connect.php";
 global $config;


  @$TokenProject = $_GET['T'];
  $buy ="SELECT * FROM product WHERE product_token='$TokenProject'";
  $Runbuy = mysqli_query($config, $buy);
  $Rowbuy = mysqli_fetch_array($Runbuy);

  @$nameP = $Rowbuy['product_name'];
  @$imgP = $Rowbuy['product_img'];
  @$priceP = $Rowbuy['product_price'];

  $Token = date("dmyhis");
  $RandomNumber = rand(100,400);
  $NewToken = $Token.$RandomNumber;

  $TokenUser = $_SESSION['Token'];

  if(isset($_POST['buy'])){
    $buysel = "SELECT * FROM shop WHERE shop_tokenUser='$TokenUser' AND shop_tokenP='$TokenProject'";
    $Runbuysel = mysqli_query($config, $buysel);
    $Rowbuysel = mysqli_fetch_array($Runbuysel);

    if(@$Rowbuysel['shop_qty'] > 0){
      $totalqty = $Rowbuysel['shop_qty']+1;
      $quant = "UPDATE shop SET shop_qty='$totalqty' WHERE shop_tokenUser='$TokenUser' AND shop_tokenP='$TokenProject'";
      if(mysqli_query($config,$quant)){
          echo'
              <div class="style12">
                <link rel="stylesheet" href="style2.css">
                <img src="img/tickk.gif" alt="tick mark">
                <p>item added to the shopping kart successfully</p>
              </div>
                <meta http-equiv = "refresh" content ="3, url=shopping_kart.php">
              ';
              exit();
        }
    }else{
      $inShop = "INSERT INTO shop 
      (
          shop_token,
          shop_nameP,
          shop_priceP,
          shop_imgP,
          shop_qty,
          shop_tokenUser,
          shop_tokenP
      ) VALUES (
          '$NewToken',
          '$nameP',
          '$priceP',
          '$imgP',
          '1',
          '$TokenUser',
          '$TokenProject'
      )";
      if(mysqli_query($config,$inShop)){
        echo'
            <div class="style12">
              <link rel="stylesheet" href="style2.css">
              <img src="img/tickk.gif" alt="tick mark">
              <p>you bought this item successfully</p>
            </div>
              <meta http-equiv = "refresh" content ="3, url=shopping_kart.php">
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
  <title>buy item </title>
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
          <p>Buy Now</p>
        </td>
        <td><a href="shop.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
  <div class="style45">
  <form action="" method="post" enctype="multipart/form-data">
  <img class="imagedev" width="200" src="product_img/<?php echo  $Rowbuy['product_img'] ?>">
        <p class="style46"><?php echo  $Rowbuy['product_name'] ?><p>
        <p class="style47"><?php echo  $Rowbuy['product_price'] ?><p>
        <textarea disabled class="style48"><?php echo  $Rowbuy['product_info'] ?></textarea>
        <?php
          if(@$_SESSION['log'] != '1'){
            echo'<a class="substyle06" href="login.php">login</a>';
          } else {
            echo'<input class="substyle06" name="buy"  type="submit" value="Buy" />';
          }
        ?>
        </form>
   </div> 
</body>
</html>