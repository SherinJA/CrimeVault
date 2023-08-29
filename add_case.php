<?php

@include 'config.php';

if(isset($_POST['insert_submit'])){

   $crime_id = mysqli_real_escape_string($conn, $_POST['crime_id']);
   $crime_date = mysqli_real_escape_string($conn, $_POST['crime_date']);
   $crime_type_id = $_POST['crime_type_id'];
   $victim_id = mysqli_real_escape_string($conn, $_POST['victim_id']);
   $victim_aadhar = mysqli_real_escape_string($conn, $_POST['victim_aadhar']);
   $witness_aadhar = mysqli_real_escape_string($conn, $_POST['witness_aadhar']);
   $crime_location = mysqli_real_escape_string($conn, $_POST['crime_location']);
   $officer_id = mysqli_real_escape_string($conn, $_POST['officer_id']);
   $cname = mysqli_real_escape_string($conn, $_POST['criminal_name']);
   $criminal_id = mysqli_real_escape_string($conn, $_POST['criminal_id']);
	$criminal_aadhar = mysqli_real_escape_string($conn, $_POST['criminal_aadhar']);
	$id_mark = mysqli_real_escape_string($conn, $_POST['identification_mark']);
	$court_id = mysqli_real_escape_string($conn, $_POST['court_id']);
	$court_location = mysqli_real_escape_string($conn, $_POST['Court_Location']);
	$judge_aadhar = mysqli_real_escape_string($conn, $_POST['judge_aadhar']);
	$vlawyer_aadhar = mysqli_real_escape_string($conn, $_POST['victim_lawyer_aadhar']);
	$clawyer_aadhar = mysqli_real_escape_string($conn, $_POST['criminal_lawyer_aadhar']);
	$case_winner = $_POST['case_winner'];


   $select = " SELECT * FROM crime WHERE crime_id = '$crime_id' ";
   $result = mysqli_query($conn, $select);


   if(mysqli_num_rows($result) > 0){

	echo 'crime already exist!';

 }

 else{

		$insert = "INSERT INTO crime(crime_id, crime_date, victim_id, crime_type_id, victim_aadhar, officer_id, witness_aadhar,crime_location,description) VALUES('$crime_id','$crime_date','$victim_id','$crime_type_id','$victim_aadhar','$officer_id','$witness_aadhar','$crime_location','$description')";
		mysqli_query($conn, $insert);

		$insert = "INSERT INTO criminal(cname, criminal_id, Aadhar_no, id_mark,crime_id) VALUES('$cname','$criminal_id','$criminal_aadhar','$id_mark','$crime_id')";

		mysqli_query($conn, $insert);


		$insert = "INSERT INTO judgement (crime_id, case_winner, court_id, court_location, judge_aadhar, victim_lawyer_aadhar, criminal_lawyer_aadhar) VALUES('$crime_id','$case_winner','$court_id','$court_location','$judge_aadhar','$vlawyer_aadhar','$clawyer_aadhar')";

		mysqli_query($conn, $insert);

		header('location:officer_page.php');

 }

 
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
    color: #fff;
    background-color: crimson;
}


	</style>
</head>

<body>
<form action="" method="post">
    <h1>Case history</h1>
    <br>

	<table>
		<tr>
			<th>Crime Details</th>
			<th>Criminal Details</th>
			<th>Judgement Details</th>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>Crime ID</td>
						<td><input type="text" name="crime_id"></td>
					</tr>
					<tr>
						<td>Crime Date</td>
						<td><input type="date" name="crime_date"></td>
					</tr>
					<tr>
						<td>Crime Type ID</td>
						<td>
							<select name="crime_type_id">
								<option value="-1">crime_type_id</option>
								<option value="CT01">CT01 - Murder</option>
								<option value="CT02">CT02 - Kidnapping</option>
								<option value="CT03">CT03 - Theft</option>
								<option value="CT04">CT04 - Attempt to murder</option>
								<option value="CT05">CT05 - Robbery</option>
								<option value="CT06">CT06 - Forgery</option>
								<option value="CT07">CT07 - Rape</option>
								<option value="CT08">CT08 - Cheating</option>
								<option value="CT09">CT09 - Bribery</option>
								<option value="CT10">CT10 - Assault</option>
								<option value="CT11">CT11 - Criminal breach of trust</option>
								<option value="CT12">CT12 - Misappropriation of funds</option>
								<option value="CT13">CT13 - Dowry death</option>
								<option value="CT14">CT14 - Extortion</option>
								<option value="CT15">CT15 - Cybercrime</option>
								<option value="CT16">CT16 - Attempt to rape</option>
								<option value="CT17">CT17 - Criminal intimidation</option>
								<option value="CT18">CT18 - Money laundering</option>
								<option value="CT19">CT19 - Stalking</option>
								<option value="CT20">CT20 - Counterfeiting</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Victim ID</td>
						<td><input type="text" name="victim_id"></td>
					</tr>
					<tr>
						<td>Victim Aadhar</td>
						<td><input type="text" name="victim_aadhar"></td>
					</tr>
					<tr>
						<td>Witness Aadhar</td>
						<td><input type="text" name="witness_aadhar"></td>
					</tr>
					<tr>
						<td>Crime location</td>
						<td><input type="text" name="crime_location"></td>
					</tr>
					<tr>
						<td>Officer id</td>
						<td><input type="text" name="officer_id"></td>
					</tr>
		

				</table>
			</td>
			<td>
				<table>
					<tr>
						<td>Criminal Name</td>
						<td><input type="text" name="criminal_name"></td>
					</tr>
					<tr>
						<td>Criminal ID</td>
						<td><input type="text" name="criminal_id"></td>
					</tr>
					<tr>
						<td>Criminal Aadhar</td>
						<td><input type="text" name="criminal_aadhar"></td>
					</tr>
					<tr>
						<td>Identification Mark</td>
						<td><input type="text" name="identification_mark"></td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td>Court ID</td>
						<td><input type="text" name="court_id"></td>
					</tr>
					<tr>
						<td>Court Location</td>
						<td><input type="text" name="Court_Location"></td>
					</tr>
					<tr>
						<td>Victim Lawyer Aadhar</td>
						<td><input type="text" name="victim_lawyer_aadhar"></td>
					</tr>
					<tr>
						<td>Criminal Lawyer Aadhar</td>
						<td><input type="text" name="criminal_lawyer_aadhar"></td>
					</tr>
					<tr>
						<td>Judge Aadhar</td>
						<td><input type="text" name="judge_aadhar"></td>
					</tr>
					<tr>
						<td>Case Winner</td>
						<td>
							<select name="case_winner">
								<option value="-1">case_winner</option>
								<option value="Victim">Victim</option>
								<option value="Criminal">Criminal</option>
							</select>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<div class="container">
		<div class="content">
			<input type="submit" name="insert_submit" value="INSERT" class="btn">
			<a href="officer_page.php" class="btn">Home</a>
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
			
    </form>
</body>
</html>




