  <?php  
  session_start();
  if(@$_SESSION['log'] == '1'){
    echo'
      <div class="style11">
        <link rel="stylesheet" href="style2.css">
        <img width="400" src="img/error.gif" alt="error mark">
        <p>you have already logged in!</p>
      </div>
        <meta http-equiv = "refresh" content ="3, url=index.php">
      ';
      exit();
  }
  //creantly facing an issue with the login form it said user is not found although that is already registered
    require "connect.php";
    global $config;

    @$post01 = $_POST['get01'];
    @$post04 = $_POST['get04'];

    if (isset($_POST['button02'])) {
      if(empty($post01) OR empty($post04)){
         $Error ="<p class='style13'>please fill in the form below to log in!</p>";
      } else {
        $checker =" SELECT * FROM user WHERE user_name ='$post01'";
        $Runchecker = mysqli_query($config, $checker);
       if (mysqli_num_rows($Runchecker) > 0) {
          $Rowchecker = mysqli_fetch_array($Runchecker);
          $NameUser = $Rowchecker['user_name'];
          $PassUser = $Rowchecker['user_pass'];
          $TokenUser =$Rowchecker['user_token'];
          if ($PassUser != $post04) {
            $Error ="<p class='style13'>worng password!</p>";
          } else {
            $_SESSION['Token'] = $TokenUser;
            $_SESSION['user'] = $NameUser;
            $_SESSION['password'] = $PassUser;
            $_SESSION['log'] ="1";
            echo'
                <div class="style12">
                <link rel="stylesheet" href="style2.css">
                <img src="img/tickk.gif" alt="tick mark">
                <p>you have been logged in successfully</p>
              </div>
                <meta http-equiv = "refresh" content ="3, url=index.php">
              ';
            exit();
        }
      } else {
        $Error ="<p class='style13'>user is not found!</p>";
      }
     }
    }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>log in </title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
</head>

<body class="body1">
  <form action="" method="post">
    <div class="back">
      <div class="style08">
        <img width="95" src="img/user2.png" alt="user">
        <p class="login">Member Login</p>
        <?php echo @$Error;?>
        <p class="style10">Username*</p>
        <input name="get01" class="box" type="text" placeholder="Enter your first name...">
        <p class="style10">Password*</p>
        <input name="get04" class="box" type="password" placeholder="Enter your password...">
        <div class="style09">
          <div class="main"> <input name="button02" type="submit" class="substyle04" value="Login"> </div>
        </div>
        <div class="container">
          <p class="style10">Don't have an account?</p> <a class="linkdeco2" href="signup.php">signup</a>
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