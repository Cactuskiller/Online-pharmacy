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

    $select1 = "SELECT * FROM product WHERE product_category ='1'";
    $Runselect1 = mysqli_query($config, $select1);
    
    @$getToken = $_GET['T'];
    if (@$_GET['d']=='d') {
        $delete = "DELETE FROM product WHERE product_token ='$getToken'";
        $Rundelete = mysqli_query($config, $delete);
        echo'
            <div class="style12">
            <link rel="stylesheet" href="style2.css">
            <img src="img/tickk.gif" alt="tick mark">
            <p>product has been deleted successfully</p>
          </div>
            <meta http-equiv = "refresh" content ="3, url=category1.php">
          ';
       exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category 1 page</title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body style="margin:0;padding:0;">
  <div>
    <table class="style27">
      <tr>
        <td>
          <p>Category 1 items</p>
        </td>
        <td><a href="n.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl"
              style="color: #33492f;"></i></a></td>
      </tr>
    </table>
    <script>
      $(document).ready(function() {
         $("#click").on("keyup",function() {
           var value = $(this).val().toLowerCase();
            $("#table #tr").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
         });
      });
    </script>
    <div class="style29">
      <i class="fa-solid fa-magnifying-glass fa-lg"></i>
        <input id="click" class="style30" type="text" placeholder="search for a product...">
    </div>
      <div>
          <table class="style26" id="table">
            <tr>
              <th>index</th>
              <th>product pic</th>
              <th>product name</th>
              <th>product price</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
            <?php 
              $number =1;
              while($rowselect1 = mysqli_fetch_array($Runselect1)){
                echo'
                  <tr id="tr">
                      <td>'.$number++.'</td>
                      <td><img width="200" src="product_img/'.$rowselect1['product_img'].'"</td>
                      <td>'.$rowselect1['product_name'].'</td>
                      <td>'.$rowselect1['product_price'].'</td>
                      <td><a class="style28" href="admin_edit.php?T='.$rowselect1['product_token'].'">Edit</a></td>
                      <td> <a href="category1.php?d=d&T='.$rowselect1['product_token'].'" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
                  </tr>
                ';
            };
        ?>
            
          </table>
    </div>
  </div>
   
  </body>
  </html>