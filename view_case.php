<?php

@include 'config.php';

if(isset($_POST['view_submit'])){

   $crime_date = mysqli_real_escape_string($conn, $_POST['crime_date']);
   $criminal_aadhar = mysqli_real_escape_string($conn, $_POST['criminal_aadhar']);
   $witness_aadhar = mysqli_real_escape_string($conn, $_POST['witness_aadhar']);
   $victim_aadhar = mysqli_real_escape_string($conn, $_POST['victim_aadhar']);
   $crime_location = mysqli_real_escape_string($conn, $_POST['crime_location']);
   $officer_id = mysqli_real_escape_string($conn, $_POST['officer_id']);
   $station_id = $_POST['station_id'];
   $court_id = $_POST['court_id'];



    
};


?>






<!DOCTYPE html>
<html>
<head>
<title>View case</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

.dropdown select {
  width: 200px;
  margin:0 10px;
  padding: 10px;
  font-size: 16px;
  border: none;
  background-color: #f1f1f1;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  cursor: pointer;
}

.dropdown select:hover {
  background-color: #ddd;
}

.dropdown select option {
  padding: 40px;
  margin:0 10px;
  font-size: 16px;
  border: none;
  background-color: white;
  cursor: pointer;
}

.dropdown select option:hover {
  background-color: #ddd;
}

*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: sans-serif;
    -webkit-font-smoothing: antialiased;
    background: white;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: crimson;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

</style>
</head>
<body class="w3-light-grey">
<form action="" method="post">


<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="officer_page.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-home w3-margin-right"></i>home</a>
  <a href="officer_page.php" class="w3-bar-item w3-button w3-white w3-mobile"><i class="fa fa-plus-square w3-margin-right"></i>insert</a>
  <a href="officer_page.php" class="w3-bar-item w3-button w3-white w3-mobile"><i class="fa fa-search w3-margin-right"></i>discover</a>
  <a href="analysis_year.php" class="w3-bar-item w3-button w3-white w3-mobile"><i class="fa fa-search-plus w3-margin-right"></i>analysis</a>



  <a href="logout.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile"><i class="fa fa-home w3-margin-left"></i> Logout</a>
  <a href="profile.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile"><i class="fa fa-user w3-margin-left"></i> Profile</a>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="w3-display-left w3-padding w3-col 16 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-database w3-margin-right"></i>Crime history</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Crime date</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="crime_date" >
          </div>
          <div class="w3-half">
            <label><i class="fa fa-globe"></i> Location</label>
            <input class="w3-input w3-border" type="text" name="crime_location" >
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-id-card"></i> Criminal aadhar</label>
            <input class="w3-input w3-border" type="text" name="criminal_aadhar" >
          </div>
		  <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-id-card"></i> Witness aadhar</label>
            <input class="w3-input w3-border" type="text" name="witness_aadhar" >
          </div>

		  <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-id-card"></i> Officer id</label>
            <input class="w3-input w3-border" type="text" name="officer_id" >
          </div>
		  <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-id-card"></i> Victim aadhar</label>
            <input class="w3-input w3-border" type="text" name="victim_aadhar" >
          </div>

		  <div class="w3-half w3-margin-bottom">
		  <div class="dropdown">
  			<select name="court_id">
    		<option value="0">Court id</option>
				<option value="CO01">CO01</option>
				<option value="CO02">CO02</option>
				<option value="CO03">CO03</option>
				<option value="CO04">CO04</option>
				<option value="CO05">CO05</option>

  			</select>
		</div>
  </div>
        <div class="dropdown">
  			<select name="station_id">
    		<option value="0">Station id</option>
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
		</div>
  </div>

  
	</div>
		<div class="w3-bar w3-white w3-large">
    <input type="submit" name="view_submit" value="search availability" class="w3-bar-item w3-button w3-red w3-mobile">


	</div>
  </form>
	  
    </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  <h2>Crime Vault</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Crime id</th>
            <th>Case type</th>
            <th>Crime date</th>
            <th>Officer id</th>
            <th>Case winner</th>
            <th>Case File</th>

        </tr>
        </thead>
        <tbody>
    	<?php
  
         
      if (!empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
            $select = " SELECT *,
                        (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                        (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                        (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                        (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                        (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                        (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                         FROM crime c JOIN criminal cr 
                         ON c.crime_id = cr.crime_id 
                         JOIN judgement j 
                         ON c.crime_id = j.crime_id 
                         JOIN officer o 
                         ON c.officer_id = o.officer_id 
                         JOIN station s 
                         on s.station_id = o.station_id
                         JOIN crime_type ct
                         ON ct.crime_type_id = c.crime_type_id
                         JOIN penalty p
                         ON p.penalty_id = ct.penalty_id	
                         WHERE c.crime_date = '$crime_date'; ";
            $result = mysqli_query($conn, $select)  ;
      }elseif (empty($crime_date) && !empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
        $select = " SELECT *,
                    (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                    (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                    (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                    (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                    (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                    (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                     FROM crime c JOIN criminal cr 
                     ON c.crime_id = cr.crime_id 
                     JOIN judgement j 
                     ON c.crime_id = j.crime_id 
                     JOIN officer o 
                     ON c.officer_id = o.officer_id 
                     JOIN station s 
                     on s.station_id = o.station_id
                     JOIN crime_type ct
                     ON ct.crime_type_id = c.crime_type_id
                     JOIN penalty p
                     ON p.penalty_id = ct.penalty_id	
                     WHERE cr.aadhar_no = '$criminal_aadhar'; ";
        $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && !empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.witness_aadhar = '$witness_aadhar'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && !empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.victim_aadhar = '$victim_aadhar'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && !empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.officer_id = '$officer_id'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && !empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.crime_location = '$crime_location'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (!empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && !empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.crime_location = '$crime_location' and c.crime_date = '$crime_date'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (!empty($crime_date) && !empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && empty($court_id) && empty( $crime_location)) {
          $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE c.crime_date = '$crime_date' and cr.aadhar_no = '$criminal_aadhar'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (!empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && !empty($station_id) && empty($court_id) && empty( $crime_location)) {
         $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE o.station_id = '$station_id' and c.crime_date = '$crime_date'; ";
          $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && !empty($station_id) && empty($court_id) && empty( $crime_location)) {
         $select = " SELECT *,
                      (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                      (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                      (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                       FROM crime c JOIN criminal cr 
                       ON c.crime_id = cr.crime_id 
                       JOIN judgement j 
                       ON c.crime_id = j.crime_id 
                       JOIN officer o 
                       ON c.officer_id = o.officer_id 
                       JOIN station s 
                       on s.station_id = o.station_id
                       JOIN crime_type ct
                       ON ct.crime_type_id = c.crime_type_id
                       JOIN penalty p
                       ON p.penalty_id = ct.penalty_id	
                       WHERE o.station_id = '$station_id';";
          $result = mysqli_query($conn, $select)  ;
        }elseif (empty($crime_date) && empty($criminal_aadhar) && empty($witness_aadhar) && empty($victim_aadhar) && empty($officer_id) && empty($station_id) && !empty($court_id) && empty( $crime_location)) {
          $select = " SELECT *,
                       (SELECT pname FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_name,
                       (SELECT pname FROM person WHERE aadhar_id = c.victim_aadhar) as Victim_name,
                       (SELECT pname FROM person WHERE aadhar_id = c.witness_aadhar) as Witness_name,
                       (SELECT pname FROM person WHERE aadhar_id = j.victim_lawyer_aadhar) as Victim_Lawyer_name,
                       (SELECT pname FROM person WHERE aadhar_id = j.criminal_lawyer_aadhar) as Criminal_Lawyer_name,
                       (SELECT pname FROM person WHERE aadhar_id = j.judge_aadhar) as Judge_name
                        FROM crime c JOIN criminal cr 
                        ON c.crime_id = cr.crime_id 
                        JOIN judgement j 
                        ON c.crime_id = j.crime_id 
                        JOIN officer o 
                        ON c.officer_id = o.officer_id 
                        JOIN station s 
                        on s.station_id = o.station_id
                        JOIN crime_type ct
                        ON ct.crime_type_id = c.crime_type_id
                        JOIN penalty p
                        ON p.penalty_id = ct.penalty_id	
                        WHERE j.court_id = '$court_id' ;";
           $result = mysqli_query($conn, $select)  ;
         }
            while($row = mysqli_fetch_array($result)){
              $id = $row['crime_id'];

            ?>
		  
            <tr>
        
            <td><?php echo $row['crime_id'];?></td> 
            <td><?php echo $row['crime_type_name'];?></td>
            <td><?php echo $row['crime_date']; ?></td> 
            <td><?php echo $row['officer_id']; ?></td> 
            <td><?php echo $row['case_winner']; ?></td>
            <td class="empty" width="">
			            <a  id="view<?php echo $id;?>" href="casedetails.php<?php echo '?id='.$id; ?>" class="btn">Details</a>
           	</td> 
		</tr>
	<?php }  ?> 
  
    </tbody>
    </table>
</div>




  
  



</body>
</html>
