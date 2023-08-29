<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $aadhar_no = mysqli_real_escape_string($conn, $_POST['aadhar_no']);

    $select = " SELECT * , (YEAR(CURDATE()) - YEAR(dob)) as age FROM person WHERE aadhar_id = '$aadhar_no' ; ";
    $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

    }

};
?>

<!DOCTYPE html>
<html lang="">
<head>
    <style>
        * {
	margin: 0 ;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background: light grey;
	color: #FFF;
	font-size: 62.5%;
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
}

.nav {
  height: 50px;
  width: 100%;
  background-color: crimson;
  position: relative;
}
.nav > .nav-header {
  display: inline;
     
}
.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}
.nav > .nav-header > .nav-title > .nav-links{
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}
.nav > .nav-btn {
  display: none;
}
.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}
.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}
.nav > #nav-check {
  display: none;
}

ul {
	list-style-type: none;
}

a {
	color: #e95846;
	text-decoration: none;
}

.pricing-table-title {
	text-transform: uppercase;
	font-weight: 700;
	font-size: 2.6em;
	color: black;
	margin-top: 15px;
	text-align: left;
	margin-bottom: 25px;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table-title a {
	font-size: 0.6em;
}

.clearfix:after {
	content: '';
	display: block;
	height: 0;
	width: 0;
	clear: both;
}
.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:30px;
   padding-bottom: 20px;
}
.container .content{
   text-align: center;
}
.form-container form p a{
   color:crimson;
}

.form-container form{
   padding:40px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}
.form-container form h3{
   font-size: 40px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:crimson;
}
.form-container form input{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   text-transform: capitalize;
   font-size: 20px;
   width: 20px
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: crimson;
   color:#fff;
}




.pricing-wrapper {
	width: 960px;
	margin: 40px 300px;
}

.pricing-table {
	margin: 0 10px;
	text-align: center;
	width: 300px;
	float: left;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
	box-shadow: 0 0 15px rgba(0,0,0,0.4);
	-webkit-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
	transition: all 0.25s ease;
}

.pricing-table:hover {
	-webkit-transform: scale(1.06);
	-ms-transform: scale(1.06);
	-o-transform: scale(1.06);
	transform: scale(1.06);
}

.pricing-title {
	color: #FFF;
	background: crimson;
	padding: 20px 0;
	font-size: 2em;
	text-transform: uppercase;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table.recommended .pricing-title {
	background: crimson;
}

.pricing-table.recommended .pricing-action {
	background: #2db3cb;
}

.pricing-table .price {
	background: #403e3d;
	font-size: 3.4em;
	font-weight: 700;
	padding: 20px 0;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table .price sup {
	font-size: 0.4em;
	position: relative;
	left: 5px;
}

.table-list {
	background: #FFF;
	color: #403d3a;
    
}

.table-list li {
	font-size: 1.4em;
	font-weight: 700;
	padding: 12px 8px;
    position: relative;
}

.table-list li:before {
	content: "\f00c";
	font-family: 'FontAwesome';
	color: #3fab91;
	display: inline-block;
	position: relative;
	right: 5px;
	font-size: 16px;
} 

.table-list li span {
	font-weight: 400;
}

.table-list li span.unlimited {
	color: #FFF;
	background: #e95846;
	font-size: 0.9em;
	padding: 5px 7px;
	display: inline-block;
	-webkit-border-radius: 38px;
	-moz-border-radius: 38px;
	border-radius: 38px;
}


.table-list li:nth-child(2n) {
	background: #F0F0F0;
}

.table-buy {
	background: #FFF;
	padding: 15px;
	text-align: left;
	overflow: hidden;
}

.table-buy p {
	float: left;
	color: #37353a;
	font-weight: 700;
	font-size: 2.4em;
}

.table-buy p sup {
	font-size: 0.5em;
	position: relative;
	left: 5px;
}

.table-buy .pricing-action {
	float: right;
	color: #FFF;
	background: #e95846;
	padding: 10px 16px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	font-weight: 700;
	font-size: 1.4em;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
	-webkit-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
	transition: all 0.25s ease;
}

.table-buy .pricing-action:hover {
	background: #cf4f3e;
}

.recommended .table-buy .pricing-action:hover {
	background: #228799;	
}

 @media only screen and (min-width: 768px) and (max-width: 959px) {
 	.pricing-wrapper {
 		width: 768px;
 	}

 	.pricing-table {
 		width: 236px;
 	}
	
	.table-list li {
		font-size: 1.3em;
	}

 }

 @media only screen and (max-width: 767px) {
 	.pricing-wrapper {
 		width: 420px;
 	}

 	.pricing-table {
 		display: block;
 		float: none;
 		margin: 0 0 20px 0;
 		width: 100%;
 	}
 }

@media only screen and (max-width: 479px) {
	.pricing-wrapper {
		width: 300px;
	}
} 


@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>
</head>


<body>


<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
   
   </div>
  <div class="nav-btn">
    <label for="nav-check">
     
    </label>
  </div>
 
  <div class="nav-links">
    <a href="officer_page.php"><<</a>
    <a href="officer_page.php">Home</a>

    <a href="view_case.php">View</a>
    <a href="add_case.php">Add</a>
    <a href="analysis_year.php">Analysis</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
   
  </div>
</div>
<div class="form-container">
    <form action="" method="post">
        <h1 class="pricing-table-title">   DISCOVER </h1>
        <input type="text" name="aadhar_no" required placeholder="enter aadhar no">
        <input type="submit" name="submit" value="Search" class="form-btn">
    </form>
</div>
<div class="pricing-wrapper clearfix">
    <div class="price">$100<sup>/ mes</sup></div>
		<div class="pricing-table">
			<h3 class="pricing-title">Field</h3>
			<ul class="table-list">
				<li>NAME </li>
				<li>AADHAR_NO</li>
				<li>DATE OF BIRTH</li>
				<li>AGE</li>
				<li>GENDER</li>
				<li>PHONE NUMBER</li>
                <li>LOCATION</li>
                <li>BLOOD GROUP</li>
                <li>STATUS</li>


			</ul>
		</div>
		
        <?php
            $status = 'Common man';
            $flag=0;
            $select = " SELECT officer_id FROM officer WHERE officer_aadhar = '$aadhar_no' ; ";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0){
                $status = 'Officer ';
                $flag=1;
            }
            $select = " SELECT criminal_id FROM criminal WHERE aadhar_no = '$aadhar_no' ; ";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0){
                $status = 'Criminal ';
                $flag=1;
            }
            $select = " SELECT * FROM judgement WHERE judge_aadhar = '$aadhar_no' ; ";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0){
                $status = 'Judge';
                $flag=1;
            }
            $select = " SELECT * FROM judgement WHERE victim_lawyer_aadhar = '$aadhar_no' or criminal_lawyer_aadhar = '$aadhar_no'; ";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0){
                $status = 'Lawyer';
                $flag=1;
            }
            if($flag == 1){
		?>

		<div class="pricing-table recommended">
			<h3 class="pricing-title">Details</h3>
			<ul class="table-list">
				<li><?php echo $row['pname'];?></li>
				<li><?php echo $row['aadhar_id'];?></li>
				<li><?php echo $row['dob'];?></li>
				<li><?php echo $row['age'];?></li>
				<li><?php echo $row['gender'];?></li>
				<li><?php echo $row['phone_no'];?></li>
                <li><?php echo $row['location'];?></li>
                <li><?php echo $row['blood_grp'];?></li>
				<li><?php echo $status;?></li>

			</ul>
		</div>
        <?php }else{ ?>
            <div class="pricing-table recommended">
			<h3 class="pricing-title">Details</h3>
			<ul class="table-list">
				<li>Content</li>
				<li>Content</li>
				<li>Content</li>
				<li>Content</li>
				<li>Content</li>
				<li>Content</li>
                <li>Content</li>
                <li>Content</li>
				<li>Content</li>

			</ul>
		</div>
        <?php } ?>
		
			

</body>
</html>