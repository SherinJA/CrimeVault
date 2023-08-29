<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $officer_aadhar = mysqli_real_escape_string($conn, $_POST['officer_aadhar']);
   $officer_id = mysqli_real_escape_string($conn, $_POST['officer_id']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $station_id = $_POST['station_id'];

   $select = " SELECT * FROM user_form WHERE officer_id = '$officer_id' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(officer_id, password) VALUES('$officer_id','$pass')";
         mysqli_query($conn, $insert);
         $insert = "INSERT INTO officer(officer_id,station_id,officer_name,officer_aadhar ) VALUES('$officer_id','$station_id','$name','$officer_aadhar')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="text" name="officer_aadhar" required placeholder="enter your aadhar no">
      <input type="text" name="officer_id" required placeholder="enter your officer_id">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="station_id">
         <option value="-1">station id</option>
         <option value="S01">S01</option>
         <option value="S02">S02</option>
         <option value="S03">S03</option>
         <option value="S04">S04</option>
         <option value="S05">S05</option>
         <option value="S06">S06</option>
         <option value="S07">S07</option>
         <option value="S08">S08</option>
         <option value="S09">S09</option>
         <option value="S10">S10</option>
         <option value="S11">S11</option>
         <option value="S12">S12</option>
         <option value="S13">S13</option>
         <option value="S14">S14</option>
         <option value="S15">S15</option>
         <option value="S16">S16</option>
         <option value="S17">S17</option>
         <option value="S18">S18</option>
         <option value="S19">S19</option>
         <option value="S20">S20</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>