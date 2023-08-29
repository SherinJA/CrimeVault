<?php 
 
 @include 'config.php';

 session_start();
 
 $id = $_GET['id']; 
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
                       WHERE c.crime_id = '$id' ";
          $result = mysqli_query($conn, $select)  ;
          $row = mysqli_fetch_array($result);

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


    </style>
</head>

<body>

 


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
                        <td><div class="boxed">
                        <?php echo $row['crime_id'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Crime Date</td>
                        <td><div class="boxed">
                        <?php echo $row['crime_date']; ?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Crime Type name</td>
                        <td>
                        <div class="boxed">
                        <?php echo $row['crime_type_name'];?>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Victim ID</td>
                        <td><div class="boxed">
                        <?php echo $row['victim_id'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Victim Aadhar</td>
                        <td><div class="boxed">
                        <?php echo $row['victim_aadhar'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Victim_name</td>
                        <td><div class="boxed">
                        <?php echo $row['Victim_name'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Witness name</td>
                        <td><div class="boxed">
                        <?php echo $row['Witness_name'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Crime location</td>
                        <td><div class="boxed">
                        <?php echo $row['crime_location'];?>
                        </div></td>
                    </tr>
        

                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Criminal Name</td>
                        <td><td><div class="boxed">
                        <?php echo $row['cname'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Criminal ID</td>
                        <td><td><div class="boxed">
                        <?php echo $row['criminal_id'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Criminal Aadhar</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Aadhar_no'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Criminal Location</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Criminal_location'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Criminal Age</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Criminal_age'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Identification Mark</td>
                        <td><td><div class="boxed">
                        <?php echo $row['id_mark'];?>
                        </div></td></td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Officer id</td>
                        <td><div class="boxed">
                        <?php echo $row['officer_id'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Officer name</td>
                        <td><div class="boxed">
                        <?php echo $row['officer_name'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Officer Aadhar</td>
                        <td><div class="boxed">
                        <?php echo $row['officer_aadhar'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Station id</td>
                        <td><div class="boxed">
                        <?php echo $row['station_id'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Station name</td>
                        <td><div class="boxed">
                        <?php echo $row['station_name'];?>
                        </div></td>
                    </tr>
                    <tr>
                        <td>Station location</td>
                        <td><div class="boxed">
                        <?php echo $row['station_location'];?>
                        </div></td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Court id</td>
                        <td><td><div class="boxed">
                        <?php echo $row['court_id'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Court Location</td>
                        <td><td><div class="boxed">
                        <?php echo $row['court_location'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Judge Name</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Judge_name'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Victim Lawyer Name</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Victim_Lawyer_name'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Criminal Lawyer Name</td>
                        <td><td><div class="boxed">
                        <?php echo $row['Criminal_Lawyer_name'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Penalty</td>
                        <td><td><div class="boxed">
                        <?php echo $row['penalty_description'];?>
                        </div></td></td>
                    </tr>
                    <tr>
                        <td>Case winner</td>
                        <td><td><div class="boxed">
                        <?php echo $row['case_winner'];?>
                        </div></td></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
    <div class="container">
		<div class="content">
			<a href="officer_page.php" class="btn">Home</a>
            <a  id="view<?php echo $id;?>" href="caseupdate.php<?php echo '?id='.$id; ?>" class="btn">UPDATE</a>
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

</body>
</html>