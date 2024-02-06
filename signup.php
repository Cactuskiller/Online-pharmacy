<?php 
  session_start();
  if(@$_SESSION['log'] == '1'){
    echo'
      <div class="style11">
        <link rel="stylesheet" href="style2.css">
        <img width="400" src="img/error.gif" alt="error mark">
        <p>you have already signed up!</p>
      </div>
      <meta http-equiv = "refresh" content ="3, url=index.php">
      ';
      exit();
  } 

    require "connect.php";
    global $config;

    @$post01 = $_POST['get01'];
    @$post02 = $_POST['get02'];
    @$post03 = $_POST['get03'];
    @$post04 = $_POST['get04'];
    @$post05 = $_POST['get05'];

    //generating token 
    $Token = date("dmyhis");
    $RandomNumber = rand(100,400);
    $NewToken = $Token.$RandomNumber;

    if (isset($_POST['button01'])) {
      if(empty($post01) OR empty($post02)){
         $Error ="<p class='style13'>please fill in the form below to create an account!</p>";
      }else { //this code does not work
        $query = "SELECT * FROM user WHERE 	user_name ='$post01'";
        $Run = mysqli_query($config,$query);
        $Row = mysqli_num_rows($Run);
        if ($Row > 0) {
          $Error ="<p class='style13'>this name has already been used ,please try something else</p>";
        }else{
          $fill = "INSERT INTO user
          ( user_token,
            user_name,
            user_email,
            user_phone,
            user_pass,
            user_bday

          ) VALUES (
          '$NewToken',
          '$post01',
          '$post02',
          '$post03',
          '$post04',
          '$post05'
          )";
          if (mysqli_query($config, $fill)) {
            //create session
            $_SESSION['Token'] = $NewToken;
            $_SESSION['user'] = $post01;
            $_SESSION['password'] = $post04;
            $_SESSION['log'] ="1";
            echo'
            <div class="style12">
              <link rel="stylesheet" href="style2.css">
              <img src="img/tickk.gif" alt="tick mark">
              <p>your account have been created successfully</p>
            </div>
              <meta http-equiv = "refresh" content ="3, url=index.php">
            ';
            exit();
          }
        }
      }
    }
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sing up </title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">

</head>

<body class="body1">
  <form action="" method="post">
    <div class="back">
      <div class="style08">
        <p class="signup">Sign up</p>
        <?php echo @$Error; ?>
        <br>
        <input required class="box" name="get01" type="text" placeholder="Enter your first name...">
        <input required class="box"name="get02"  type="email" placeholder="Enter your email...">
        <input class="box" name="get03" type="tel" placeholder="Enter your phone number...">
        <input  class="box" name="get04" type="password" placeholder="Enter your password...">
        <input class="box" name="get05" type="date">
        <div class="style09">
          <div class="main">
            <input name="button01" class="substyle01" type="submit" value="signup">
          </div>
        </div>
        <div class="container">
          <p class="style10">already a memeber?</p> <a class="linkdeco2" href="login.php">log in</a>
        </div>
        <div class="container">
          <i class="fa-solid fa-circle-left" style="color: #244f9a;"></i>
          <a href="index.php" class="left-link linkdeco2">
            <p>Back</p>
          </a>
        </div>
      </div>
    </div>
  </form>
</body>

</html>