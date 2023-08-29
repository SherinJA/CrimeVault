<?php 
 
 @include 'config.php';

 session_start();
 
 $get_id = $_GET['id']; 
 $select = " SELECT *,
                      (SELECT location FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_location,
                      (SELECT (YEAR(CURDATE()) - YEAR(dob)) FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_age,
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
                       WHERE c.crime_id = '$get_id' ";
          $result = mysqli_query($conn, $select)  ;
          $row = mysqli_fetch_array($result);
?>

<?php

if(isset($_POST['submit'])){

    $crime_id = mysqli_real_escape_string($conn, $_POST['crime_id']);
    $crime_date = mysqli_real_escape_string($conn, $_POST['crime_date']);
    $crime_type_name = mysqli_real_escape_string($conn,$_POST['crime_type_name']);
    $victim_id = mysqli_real_escape_string($conn, $_POST['victim_id']);
    $victim_aadhar = mysqli_real_escape_string($conn, $_POST['victim_aadhar']);
    $Victim_name = mysqli_real_escape_string($conn, $_POST['Victim_name']);
    $Witness_name = mysqli_real_escape_string($conn, $_POST['Witness_name']);
    $crime_location = mysqli_real_escape_string($conn, $_POST['crime_location']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $criminal_id = mysqli_real_escape_string($conn, $_POST['criminal_id']);
	$criminal_aadhar = mysqli_real_escape_string($conn, $_POST['Aadhar_no']);
    $Criminal_location = mysqli_real_escape_string($conn, $_POST['Criminal_location']);
    $Criminal_age = mysqli_real_escape_string($conn, $_POST['Criminal_age']);
	$id_mark = mysqli_real_escape_string($conn, $_POST['id_mark']);
    $officer_id = mysqli_real_escape_string($conn, $_POST['officer_id']);
    $officer_name = mysqli_real_escape_string($conn, $_POST['officer_name']);
    $officer_aadhar = mysqli_real_escape_string($conn, $_POST['officer_aadhar']);
    $station_id = mysqli_real_escape_string($conn, $_POST['station_id']);
    $station_name = mysqli_real_escape_string($conn, $_POST['station_name']);
    $station_location = mysqli_real_escape_string($conn, $_POST['station_location']);
	$court_id = mysqli_real_escape_string($conn, $_POST['court_id']);
	$court_location = mysqli_real_escape_string($conn, $_POST['court_location']);
	$Judge_name = mysqli_real_escape_string($conn, $_POST['Judge_name']);
	$vlawyer_name = mysqli_real_escape_string($conn, $_POST['Victim_Lawyer_name']);
	$clawyer_name = mysqli_real_escape_string($conn, $_POST['Criminal_Lawyer_name']);
	$case_winner = mysqli_real_escape_string($conn,$_POST['case_winner']);

    $update = " UPDATE crime SET 
                        crime_date = '$crime_date',
                        victim_id = '$victim_id',
                        victim_aadhar = '$victim_aadhar',
                        officer_id = '$officer_id',
                        crime_location = '$crime_location',
                        crime_type_id = (SELECT crime_type_id FROM crime_type WHERE crime_type_name ='$crime_type_name'),
                        witness_aadhar = (SELECT aadhar_id FROM person WHERE pname = '$Witness_name')
                        WHERE crime_id = '$crime_id'; ";
    mysqli_query($conn, $update);
    $update = " UPDATE criminal SET 
                        cname = '$cname',
                        criminal_id = '$criminal_id',
                        Aadhar_no = '$criminal_aadhar',
                        id_mark = '$id_mark'
                        WHERE crime_id = '$crime_id'; ";
    mysqli_query($conn, $update);
    $update = " UPDATE judgement SET 
                        case_winner = '$case_winner',
                        court_id = '$court_id',
                        court_location = '$court_location',
                        judge_aadhar = (SELECT aadhar_id FROM person WHERE pname = '$Judge_name'),
                        victim_lawyer_aadhar = (SELECT aadhar_id FROM person WHERE pname = '$vlawyer_name'),
                        criminal_lawyer_aadhar = (SELECT aadhar_id FROM person WHERE pname = '$clawyer_name')
                        WHERE crime_id = '$crime_id'; ";
    mysqli_query($conn, $update);
    $update = " UPDATE person SET 
                        location = '$Criminal_location'
                        WHERE aadhar_id = $criminal_aadhar";
    mysqli_query($conn, $update);
    $update = " UPDATE officer SET 
                        officer_id = '$officer_id',
                        station_id = '$station_id',
                        officer_name = '$officer_name',
                        officer_aadhar = '$officer_aadhar'
                        WHERE officer_id = '$officer_id'; ";
    mysqli_query($conn, $update);

    $select = " SELECT *,
                      (SELECT location FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_location,
                      (SELECT (YEAR(CURDATE()) - YEAR(dob)) FROM person WHERE aadhar_id = cr.aadhar_no) as Criminal_age,
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
                       WHERE c.crime_id = '$get_id' ";
          $result = mysqli_query($conn, $select);
          $row = mysqli_fetch_array($result);
};
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Details</title>
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #C70039;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}
.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

select {
    
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color: #fff;
    background-color: crimson ;
}

input[type=text], input[type=date] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color: white;
    background-color: crimson;
}


.boxed {
  border: 1px solid green ;
  background: crimson;
  width:150px;
  height:35px;
  color: white;
  font-family: sans-serif;
  text-align:relative;
  padding: 5px;
  font-size:14px;
}

textarea {
  border: 1px solid green ;
  background: crimson;
  width:150px;
  height:35px;
  color: white;
  font-family: sans-serif;
  text-align:relative;
  padding: 5px;
  font-size:14px;
}

    </style>
</head>

<body>
<form action="" method="post">


    <table>
        <tr>
            <th>Crime Details</th>
            <th>Criminal Details</th>
            <th>Officer Details</th>
            <th>Judgement Details</th>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>Crime ID</td>
                        <td><textarea class="edit_box" name="crime_id" ><?php echo $row['crime_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Crime Date</td>
                        <td><textarea class="edit_box" name="crime_date" ><?php echo $row['crime_date'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Crime Type name</td>
                        <td><textarea class="edit_box" name="crime_type_name" ><?php echo $row['crime_type_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Victim ID</td>
                        <td><textarea class="edit_box" name="victim_id" ><?php echo $row['victim_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Victim Aadhar</td>
                        <td><textarea class="edit_box" name="victim_aadhar" ><?php echo $row['victim_aadhar'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Victim_name</td>
                        <td><textarea class="edit_box" name="Victim_name" ><?php echo $row['Victim_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Witness name</td>
                        <td><textarea class="edit_box" name="Witness_name" ><?php echo $row['Witness_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Crime location</td>
                        <td><textarea class="edit_box" name="crime_location" ><?php echo $row['crime_location'] ; ?></textarea></td>
                    </tr>
        

                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Criminal Name</td>
                        <td><textarea class="edit_box" name="cname" ><?php echo $row['cname'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Criminal ID</td>
                        <td><textarea class="edit_box" name="criminal_id" ><?php echo $row['criminal_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Criminal Aadhar</td>
                        <td><textarea class="edit_box" name="Aadhar_no" ><?php echo $row['Aadhar_no'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Criminal Location</td>
                        <td><textarea class="edit_box" name="Criminal_location" ><?php echo $row['Criminal_location'] ; ?></textarea></td>
                   </tr>
                    <tr>
                        <td>Criminal Age</td>
                        <td><textarea class="edit_box" name="Criminal_age" ><?php echo $row['Criminal_age'] ; ?></textarea></td>
                     </tr>
                    <tr>
                        <td>Identification Mark</td>
                        <td><textarea class="edit_box" name="id_mark" ><?php echo $row['id_mark'] ; ?></textarea></td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Officer id</td>
                        <td><textarea class="edit_box" name="officer_id" ><?php echo $row['officer_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Officer name</td>
                        <td><textarea class="edit_box" name="officer_name" ><?php echo $row['officer_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Officer Aadhar</td>
                        <td><textarea class="edit_box" name="officer_aadhar" ><?php echo $row['officer_aadhar'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Station id</td>
                        <td><textarea class="edit_box" name="station_id" ><?php echo $row['station_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Station name</td>
                        <td><textarea class="edit_box" name="station_name" ><?php echo $row['station_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Station location</td>
                        <td><textarea class="edit_box" name="station_location" ><?php echo $row['station_location'] ; ?></textarea></td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Court id</td>
                        <td><textarea class="edit_box" name="court_id" ><?php echo $row['court_id'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Court Location</td>
                        <td><textarea class="edit_box" name="court_location" ><?php echo $row['court_location'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Judge Name</td>
                        <td><textarea class="edit_box" name="Judge_name" ><?php echo $row['Judge_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Victim Lawyer Name</td>
                        <td><textarea class="edit_box" name="Victim_Lawyer_name" ><?php echo $row['Victim_Lawyer_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Criminal Lawyer Name</td>
                        <td><textarea class="edit_box" name="Criminal_Lawyer_name" ><?php echo $row['Criminal_Lawyer_name'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Penalty</td>
                        <td><textarea class="edit_box" name="penalty_description" ><?php echo $row['penalty_description'] ; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Case winner</td>
                        <td><textarea class="edit_box" name="case_winner" ><?php echo $row['case_winner'] ; ?></textarea></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
    <div class="container">
		<div class="content">
			<a href="officer_page.php" class="btn">Home</a>
            <input type="submit" name="submit" value="Submit" class="btn">
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
		</div>
	</div>
<form>
</body>
</html>