
/*creation of person table*/
CREATE TABLE `person` (
  `pname` VARCHAR(255) NOT NULL,
  `dob` DATE NOT NULL,
  `gender` ENUM('Male', 'Female', 'Other') NOT NULL,
  `aadhar_id` VARCHAR(12) PRIMARY KEY,
  `phone_no` VARCHAR(255) UNIQUE,
  `location` VARCHAR(255),
  `blood_grp` ENUM('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-') NOT NULL
);

/*Insertion into person table*/

INSERT INTO `person` (`pname`, `dob`, `gender`, `aadhar_id`,`phone_no`, `location`, `blood_grp`) 
VALUES ('Rajesh Sharma', '1985-01-15', 'Male', '123456789012', '9876543210', 'Mumbai', 'B+'),
('Anjali Gupta', '1992-02-24', 'Female', '234567890123', '9988776655', 'Delhi', 'A+'),
('Karthik Nair', '1980-03-10', 'Male', '345678901234', '8888888888', 'Bangalore', 'O+'),
('Deepa Singh', '1995-04-11', 'Female', '456789012345', '7777777777', 'Hyderabad', 'A-'),
('Sanjay Patel', '1988-05-20', 'Male', '567890123456', '9999999997', 'Ahmedabad', 'B-'),
('Preeti Shah', '1990-06-30', 'Female', '678901234567', '6666666666', 'Pune', 'AB+'),
('Rakesh Gupta', '1987-07-27', 'Male', '789012345678', '5555555555', 'Kolkata', 'AB-'),
('Neha Patel', '1991-08-16', 'Female', '890123456789', '4444444444', 'Chennai', 'O-'),
('Amit Verma', '1983-09-04', 'Male', '901234567890', '3333333333', 'Jaipur', 'B+'),
('Sangeeta Kumari', '1993-10-05', 'Female', '012345678901', '2222222222', 'Lucknow', 'A-'),
('Rajesh Kumar', '1992-01-23', 'Male', '123456789123', '8765432103', 'Delhi', 'AB+'),
('Shreya Singh', '1997-02-10', 'Female', '234567890234', '9988776656', 'Mumbai', 'O+'),
('Aakash Patel', '1988-03-20', 'Male', '345678901345', '8888888889', 'Bangalore', 'B+'),
('Sarika Gupta', '1991-04-11', 'Female', '456789012456', '7777777778', 'Hyderabad', 'AB-'),
('Pratik Shah', '1985-05-20', 'Male', '567890123567', '9999999989', 'Ahmedabad', 'O-'),
('Kajal Verma', '1983-06-30', 'Female', '678901234678', '6666666667', 'Pune', 'A+'),
('Ankit Singh', '1995-07-27', 'Male', '789012345789', '5555555556', 'Kolkata', 'B-'),
('Deepika Patel', '1990-08-16', 'Female', '890123456890', '4444444445', 'Chennai', 'A-'),
('Anil Verma', '1987-09-04', 'Male', '901234567901', '3333333334', 'Jaipur', 'AB+'),
('Smita Kumari', '1993-10-05', 'Female', '012345678912', '2222222223', 'Lucknow', 'O+'),
('Arun Kumar', '1992-01-15', 'Male', '123456789234', '8765432104', 'Delhi', 'B+'),
('Ritu Singh', '1998-02-24', 'Female', '234567890345', '9988776657', 'Mumbai', 'A+'),
('Varun Nair', '1981-03-10', 'Male', '345678901456', '8888888890', 'Bangalore', 'O+'),
('Ishaan Gupta', '1996-04-11', 'Male', '456789012567', '7777777779', 'Hyderabad', 'A-'),
('Komal Patel', '1989-05-20', 'Female', '567890123678', '9999999998', 'Ahmedabad', 'B-'),
('Rahul Shah', '1991-06-30', 'Male', '678901234789', '6666666668', 'Pune', 'AB+'),
('Nisha Gupta', '1986-07-27', 'Female', '789012345890', '5555555557', 'Kolkata', 'AB-'),
('Rajat Patel', '1990-08-16', 'Male', '890123456901', '4444444446', 'Chennai', 'O-'),
('Amita Verma', '1982-09-04', 'Female', '901234567012', '3333333335', 'Jaipur', 'B+'),
('Sameer Singh', '1994-10-05', 'Male', '012345678123', '2222222224', 'Lucknow', 'A-'),
('Ravi Gupta', '1995-01-23', 'Male', '123456789345', '8765432105', 'Delhi', 'AB+'),
('Sneha Singh', '1999-02-10', 'Female', '234567890456', '9988776658', 'Mumbai', 'O+'),
('Pranav Patel', '1987-03-20', 'Male', '345678901567', '8888888891', 'Bangalore', 'B+'),
('Megha Gupta', '1993-04-11', 'Female', '456789012678', '7777777780', 'Hyderabad', 'AB-'),
('Siddharth Shah', '1984-05-20', 'Male', '567890123789', '9999999999', 'Ahmedabad', 'O-'),
('Juhi Verma', '1989-06-30', 'Female', '678901234890', '6666666669', 'Pune', 'A+'),
('Vikram Singh', '1996-07-27', 'Male', '789012345901', '5555555558', 'Kolkata', 'B-'),
('Pooja Patel', '1991-08-16', 'Female', '890123456012', '4444444447', 'Chennai', 'A-'),
('Manoj Verma', '1986-09-04', 'Male', '901234567123', '3333333336', 'Jaipur', 'AB+'),
('Rahul Gupta', '1998-11-05', 'Male', '098765432123', '7777777776', 'Delhi', 'O-'),
('Naveen Kumar', '1984-01-15', 'Male', '098765432109', '8765432109', 'Bangalore', 'A+'),
('Shalini Sharma', '1990-02-24', 'Female', '987654321098', '9988776644', 'Delhi', 'O+'),
('Pradeep Nair', '1983-03-10', 'Male', '876543210987', '8888888881', 'Mumbai', 'B+'),
('Riya Patel', '1996-04-11', 'Female', '765432109876', '7777777771', 'Chennai', 'A-'),
('Vinay Singh', '1991-05-20', 'Male', '654321098765', '9999999991', 'Hyderabad', 'B-'),
('Rani Gupta', '1987-06-30', 'Female', '543210987654', '6666666661', 'Jaipur', 'O-'),
('Anish Verma', '1992-07-27', 'Male', '432109876543', '5555555551', 'Pune', 'AB+'),
('Smita Patel', '1994-08-16', 'Female', '321098765432', '4444444441', 'Kolkata', 'AB-'),
('Rahul Nair', '1989-09-04', 'Male', '210987654321', '3333333331', 'Ahmedabad', 'O+'),
('Simran Kumari', '1993-10-05', 'Female', '109876543210', '2222222221', 'Lucknow', 'B-');

/* Creation of penalty table */

CREATE TABLE penalty (
    penalty_id VARCHAR(10) PRIMARY KEY,
    penalty_description TEXT
);

/* Insertion into penalty table */
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P01', '3 years of imprisonment');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P02', '5 years of imprisonment');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P03', '10 years of imprisonment');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P04', '20 years of imprisonment');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P05', 'Life imprisonment');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P06', 'Community service for 100 hours');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P07', 'Fine of $5000');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P08', 'Fine of $10,000');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P09', 'Fine of $50,000');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P10', 'Fine of $100,000');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P11', 'Suspension of driver license for 6 months');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P12', 'Suspension of driver license for 1 year');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P13', 'Revocation of driver license');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P14', 'Confiscation of vehicle');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P15', 'Confiscation of property');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P16', 'Probation for 1 year');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P17', 'Probation for 3 years');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P18', 'Restitution to victim');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P19', 'Counseling for substance abuse');
INSERT INTO penalty (penalty_id, penalty_description) VALUES ('P20', 'Community service for 500 hours');

/*Creation of crime_type table*/
CREATE TABLE `crime_type` (
    `penalty_id` VARCHAR(255),
    `crime_type_id` VARCHAR(255) PRIMARY KEY,
    `crime_type_name` VARCHAR(255),
    `ipc_section` VARCHAR(255),
    CONSTRAINT `fk_penalty_id` FOREIGN KEY (`penalty_id`) REFERENCES `penalty`(`penalty_id`)
);

/*Insertion into crime_type table*/

INSERT INTO `crime_type` (`penalty_id`, `crime_type_id`, `crime_type_name`, `ipc_section`) VALUES 
('P01', 'CT01', 'Murder', 'IPC 302'),
('P02', 'CT02', 'Kidnapping', 'IPC 363'),
('P03', 'CT03', 'Theft', 'IPC 378'),
('P01', 'CT04', 'Attempt to murder', 'IPC 307'),
('P02', 'CT05', 'Robbery', 'IPC 392'),
('P03', 'CT06', 'Forgery', 'IPC 465'),
('P01', 'CT07', 'Rape', 'IPC 376'),
('P02', 'CT08', 'Cheating', 'IPC 417'),
('P03', 'CT09', 'Bribery', 'IPC 171E'),
('P01', 'CT10', 'Assault', 'IPC 323'),
('P02', 'CT11', 'Criminal breach of trust', 'IPC 406'),
('P03', 'CT12', 'Misappropriation of funds', 'IPC 403'),
('P01', 'CT13', 'Dowry death', 'IPC 304B'),
('P02', 'CT14', 'Extortion', 'IPC 384'),
('P03', 'CT15', 'Cybercrime', 'IPC 66D'),
('P01', 'CT16', 'Attempt to rape', 'IPC 376/511'),
('P02', 'CT17', 'Criminal intimidation', 'IPC 506'),
('P03', 'CT18', 'Money laundering', 'IPC 420'),
('P01', 'CT19', 'Stalking', 'IPC 354D'),
('P02', 'CT20', 'Counterfeiting', 'IPC 489');


/*Creation of station table*/
CREATE TABLE `station` (
  `station_id` VARCHAR(255) PRIMARY KEY,
  `station_location` VARCHAR(255),
  `station_name` VARCHAR(255)
);

/*Insertion into station table*/
INSERT INTO station (station_id, station_location, station_name) VALUES
('S01', 'Mumbai', 'Chhatrapati Shivaji Terminus'),
('S02', 'New Delhi', 'New Delhi Police Station'),
('S03', 'Kolkata', 'Howrah Junction Police Station'),
('S04', 'Chennai', 'Chennai Central Police Station'),
('S05', 'Bengaluru', 'Krishnarajapuram Police Station'),
('S06', 'Hyderabad', 'Secunderabad Police Station'),
('S07', 'Jaipur', 'Jaipur Police Station'),
('S08', 'Lucknow', 'Lucknow Police Station'),
('S09', 'Ahmedabad', 'Ahmedabad Police Station'),
('S10', 'Pune', 'Pune Police Station'),
('S11', 'Surat', 'Surat Police Station'),
('S12', 'Kanpur', 'Kanpur Central Police Station'),
('S13', 'Nagpur', 'Nagpur Police Station'),
('S14', 'Visakhapatnam', 'Visakhapatnam Police Station'),
('S15', 'Patna', 'Patna Junction Police Station'),
('S16', 'Thiruvananthapuram', 'Thiruvananthapuram Central Police Station'),
('S17', 'Amritsar', 'Amritsar Junction Police Station'),
('S18', 'Jammu', 'Jammu Tawi Police Station'),
('S19', 'Bhopal', 'Bhopal Junction Police Station'),
('S20', 'Rajkot', 'Rajkot Junction Police Station');

/*Creation of officer table*/
CREATE TABLE  `officer` (
    `officer_id` VARCHAR(255) PRIMARY KEY,
    `station_id` VARCHAR(255) REFERENCES `station`(`station_id`),
    `officer_name` VARCHAR(255) REFERENCES `person`(`pname`),
    `officer_aadhar` VARCHAR(12) REFERENCES `person`(`aadhar_id`)
);

/*Insertion into officer table*/
INSERT INTO `officer` (`officer_id`, `station_id`, `officer_name`, `officer_aadhar`)
VALUES
('O01', 'S01', 'Rajesh Kumar', '123456789123'),
('O02', 'S02', 'Shreya Singh', '234567890234'),
('O03', 'S03', 'Aakash Patel', '345678901345'),
('O04', 'S04', 'Sarika Gupta', '456789012456'),
('O05', 'S05', 'Pratik Shah', '567890123567'),
('O06', 'S06', 'Kajal Verma', '678901234678'),
('O07', 'S07', 'Ankit Singh', '789012345789'),
('O08', 'S08', 'Deepika Patel', '890123456890'),
('O09', 'S09', 'Anil Verma', '901234567901'),
('O10', 'S10', 'Smita Kumari', '012345678912');

/*Creation of crime table*/
CREATE TABLE crime (
  crime_id VARCHAR(255) PRIMARY KEY,
  crime_date DATE,
  victim_id VARCHAR(255),
  crime_type_id VARCHAR(255),
  victim_aadhar VARCHAR(12),
  officer_id VARCHAR(255),
  witness_aadhar VARCHAR(12),
  crime_location VARCHAR (50),
  FOREIGN KEY (crime_type_id) REFERENCES crime_type(crime_type_id),
  FOREIGN KEY (victim_aadhar) REFERENCES person(aadhar_id),
  FOREIGN KEY (officer_id) REFERENCES officer(officer_id),
  FOREIGN KEY (witness_aadhar) REFERENCES person(aadhar_id)
);

/*Insertion into crime table*/
INSERT INTO crime (crime_id, crime_date, victim_id, crime_type_id, victim_aadhar, officer_id, witness_aadhar,crime_location) VALUES
('C01', '2022-01-15', 'V01', 'CT01', '012345678123', 'O01', '123456789234','Mumbai'),
('C02', '2022-02-22', 'V02', 'CT02', '123456789234', 'O02', '234567890345','New Delhi'),
('C03', '2022-03-10', 'V03', 'CT03', '234567890345', 'O03', '345678901456','Kolkata'),
('C04', '2022-04-01', 'V04', 'CT04', '345678901456', 'O04', '456789012567','Chennai'),
('C05', '2022-05-05', 'V05', 'CT05', '456789012567', 'O05', '567890123678','Bengaluru'),
('C06', '2022-06-18', 'V06', 'CT06', '567890123678', 'O06', '789012345890','Hyderabad'),
('C07', '2022-07-22', 'V07', 'CT07', '789012345890', 'O07', '678901234789','Ahmedabad'),
('C08', '2022-08-30', 'V08', 'CT08', '678901234789', 'O08', '890123456901','Visakhapatnam'),
('C09', '2022-09-12', 'V09', 'CT09', '890123456901', 'O09', '901234567012','Bhopal'),
('C10', '2022-10-25', 'V10', 'CT10', '901234567012', 'O10', '012345678123','Kanpur');




/*Creation of criminal table*/
CREATE TABLE `criminal` (
    `cname` VARCHAR(255),
    `criminal_id` VARCHAR(255) PRIMARY KEY,
    `Aadhar_no` VARCHAR(12) REFERENCES `person`(`aadhar_id`),
    `id_mark` VARCHAR(255),
    `crime_id` VARCHAR(255) REFERENCES `crime`(`crime_id`)
);

/*Insertion into criminal table*/
INSERT INTO `criminal` (`cname`, `criminal_id`, `Aadhar_no`, `id_mark`, `crime_id`) 
VALUES 
('Rajesh Sharma', 'CR01', '123456789012', 'tattoo on left arm', 'C01'),
('Anjali Gupta', 'CR02', '234567890123', 'missing left earlobe',  'C02'),
('Karthik Nair', 'CR03', '345678901234', 'tattoo on right arm', 'C03'),
('Deepa Singh', 'CR04', '456789012345','missing front tooth', 'C04'),
('Sanjay Patel', 'CR05', '567890123456',  'scar on left wrist', 'C05'),
('Preeti Shah', 'CR06', '678901234567', 'birthmark on left arm',  'C06'),
('Rakesh Gupta', 'CR07', '789012345678',  'scar on right ear', 'C07'),
('Neha Patel', 'CR08', '890123456789', 'birthmark on left hand', 'C08'),
('Amit Verma', 'CR09', '901234567890', 'scar on left cheek', 'C09'),
('Sangeeta Kumari', 'CR10', '012345678901',  'scar on nose', 'C10');


/*Creation of judgement table*/
CREATE TABLE judgement (
  crime_id VARCHAR(255),
  case_winner VARCHAR(255),
  court_id VARCHAR(255),
  court_location VARCHAR(255),
  judge_aadhar VARCHAR(12),
  victim_lawyer_aadhar VARCHAR(12),
  criminal_lawyer_aadhar VARCHAR(12),
  FOREIGN KEY (crime_id) REFERENCES crime(crime_id),
  FOREIGN KEY (judge_aadhar) REFERENCES person(aadhar_id),
  FOREIGN KEY (victim_lawyer_aadhar) REFERENCES person(aadhar_id),
  FOREIGN KEY (criminal_lawyer_aadhar) REFERENCES person(aadhar_id)
);

/*Insertion into judgement table*/

INSERT INTO judgement (crime_id, case_winner, court_id, court_location, judge_aadhar, victim_lawyer_aadhar, criminal_lawyer_aadhar)
VALUES 
('C01', 'Victim', 'CO01', 'Chennai', '098765432109', '123456789345', '234567890456'),
('C02', 'Criminal', 'CO02', 'Coimbatore', '987654321098', '345678901567', '456789012678'),
('C03', 'Victim', 'CO03', 'Mumbai', '876543210987', '567890123789', '678901234890'),
('C04', 'Criminal', 'CO04', 'Delhi', '765432109876', '789012345901', '890123456012'),
('C05', 'Victim', 'CO05', 'Kolkata', '654321098765', '901234567123', '098765432123'),
('C06', 'Criminal', 'CO01', 'Chennai', '098765432109', '234567890456', '123456789345'),
('C07', 'Victim', 'CO02', 'Coimbatore', '987654321098', '456789012678', '345678901567'),
('C08', 'Criminal', 'CO03', 'Mumbai', '876543210987', '678901234890', '567890123789'),
('C09', 'Victim', 'CO04', 'Delhi', '765432109876', '890123456012', '789012345901'),
('C10', 'Criminal', 'CO05', 'Kolkata', '654321098765', '098765432123', '901234567123');






