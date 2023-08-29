<?php

@include 'config.php';

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
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
<head>
<body>

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
		// The serial number variable
    
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
                         WHERE c.crime_date = '2022-01-15'; ";
            $result = mysqli_query($conn, $select)  ;
            while($row = mysqli_fetch_array($result)){
                $id = $row['case_id'];
                $status=$row['status'];
            ?>
		  
            <tr>
        
            <td><?php echo $row['crime_id'];?></td> 
            <td><?php echo $row['crime_type_name'];?></td>
            <td><?php echo $row['crime_date']; ?></td> 
            <td><?php echo $row['officer_id']; ?></td> 
            <td><?php echo $row['case_winner']; ?></td>
            
            <td class="empty" width="">
                <a data-placement="left" title="Click to view" id="view<?php echo $id;?>" href="casedetails.php<?php echo '?id='.$id; ?>&status=<?php echo $row['status'] ?>" class="btn btn-success">Details<i class="icon-pencil icon-large"></i></a>
            
            
                
		</td>
		</tr>
	<?php } ?>    
    </tbody>
    </table>
</div>




</body>
</html>