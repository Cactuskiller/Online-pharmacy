<?php
session_start();
if (@$_SESSION['log'] != '1') {
  echo '
        <div class="style11">
          <link rel="stylesheet" href="style2.css">
          <img width="400" src="img/error.gif" alt="error mark">
          <p>you need to login</p>
        </div>
        <meta http-equiv = "refresh" content ="3, url=index.php">
        ';
  exit();
}

require "connect.php";
global $config;

$GetUserToken = $_SESSION['Token'];
$kart = "SELECT * FROM shop WHERE shop_tokenUser='$GetUserToken'";
$Runkart = mysqli_query($config, $kart);

if (@$_GET['D'] == 'D') {
  $TokenShop = $_GET['T'];
  $deleteP = "DELETE FROM shop WHERE shop_token='$TokenShop'";
  $RundeleteP = mysqli_query($config, $deleteP);
  echo '<meta http-equiv="refresh" content="0, url=shopping_kart.php"/>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shopping kart </title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">

</head>

<body style="margin:0;padding:0;">
  <div>
    <table class="style58">
      <tr>
        <td>
          <p>shopping kart</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
  <div class="style56">
    <table class="style55">
      <?php
      while ($Rowkart = mysqli_fetch_array($Runkart)) {
        @$TotalPrice = $Rowkart['shop_qty'] * $Rowkart['shop_priceP'];
        echo '
                        <tr>
                        <td rowspan="2"><img class="style52" src="product_img/' . $Rowkart['shop_imgP'] . '" /></td>
                            <td>
                                <div class="style50">
                                    <p class="styleName">' . $Rowkart['shop_nameP'] . '</p>
                                    <p class="stylePrice"> price: ' . $Rowkart['shop_priceP'] . '</p>
                                    <p>amount : ' . $Rowkart['shop_qty'] . '</p>
                                    <p class="stylePrice">total : ' . $TotalPrice . 'IQD</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="button-container">
                                <a class="style53" href="buy.php?T=' . $Rowkart['shop_tokenP'] . '">details</a>
                                <a class="style54" href="shopping_kart.php?D=D&T=' . $Rowkart['shop_tokenP'] . '">delete</a>
                                </div>
                            </td>
                        </tr>
                    ';
        @$AllPrice += $TotalPrice;
      }
      ?>
    </table>
  </div>
  <div>
    <p class="style57">Total: <?php echo @$AllPrice; ?> IQD</p>
  </div>
</body>

</html>