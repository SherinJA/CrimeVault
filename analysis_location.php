<?php
 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"user_db");

$test=array();
$count=0;
$res=mysqli_query($link,"SELECT crime_location AS loc, COUNT(crime_id) AS num_crimes FROM crime GROUP BY crime_location;
");
while($row=mysqli_fetch_array($res))
{
    $test[$count]["label"]=$row["loc"];
    $test[$count]["y"]=$row["num_crimes"];
    $count=$count+1;
}
?>
<!DOCTYPE HTML>
<html>
<head>

<style>
    .container .content .btn{

display: inline-block;
padding:10px 30px;
font-size: 20px;
font-family: Helvetica;
background: #333;
color:#fff;
margin:0 5px;
text-transform: capitalize;
}


.container .content .btn:hover{
background: crimson;
}
.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
   font-family: sans-serif;
}
.nav {
  height: 50px;
  width: 100%;
  background-color: #E74C3C;
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



<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Crime History analysis (for location):"
    },
    axisY: {
        title: "Number of crimes"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## crime(s)",
        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
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
<br>
<br>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
<br>
<br>


<div class="container">
    <div class="content">
      <a href="analysis_year.php" class="btn">Prev</a>
    </div>
    <br>
    <div class="content">
      <a href="analysis_type.php" class="btn">Next</a>
    </div>
</div>
</body>
</html>