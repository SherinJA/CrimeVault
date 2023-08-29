<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $officer_id = mysqli_real_escape_string($conn, $_POST['officer_id']);
    $pass = md5($_POST['password']);
   $select = " SELECT * FROM user_form WHERE officer_id = '$officer_id' && password = '$pass'  "; 
   $result = mysqli_query($conn, $select);

   $select = " SELECT * FROM officer WHERE officer_id = '$officer_id' ";
   $result1 = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['officer_id'] = $row['officer_id'];
      $row1 = mysqli_fetch_array($result1);
      $_SESSION['officer_name'] = $row1['officer_name'];
      header('location:officer_page.php');
    }else{
       $error[] = 'incorrect officer id or password!';
    }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="officer_id" required placeholder="enter your officer_id">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>