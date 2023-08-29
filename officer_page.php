<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>officer page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span><?php echo $_SESSION['officer_id'] ?></span></h3>
      <h1>welcome <span><?php echo $_SESSION['officer_name'] ?></span></h1>
      <a href="add_case.php" class="btn">Add case</a>
      <a href="view_case.php" class="btn">View case</a>
      <a href="profile.php" class="btn">My Profile</a>
      <a href="discover.php" class="btn">Discover</a>
      <a href="analysis_year.php" class="btn">Analysis</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>