CREATE TABLE admin(
id INT PRIMARY KEY,
username VARCHAR(45) NOT NULL,
password VARCHAR(45) NOT NULL
);
INSERT INTO admin VALUES (100, 'Arjun', 'abc123');
CREATE TABLE department(
Depart_id INT PRIMARY KEY,
Depart_name VARCHAR(45) UNIQUE
);
INSERT INTO department VALUES ('101', 'IT');
INSERT INTO department VALUES ('102', 'Electronics');
INSERT INTO department VALUES ('103', 'Customer Care');
INSERT INTO department VALUES ('104', 'Marketing');
INSERT INTO department VALUES ('105', 'Development');
INSERT INTO department VALUES ('106', 'Finance');
SELECT * FROM department;
CREATE TABLE `job`(
Job_Title varchar(20),
basic_salary int(10),
PRIMARY KEY (`Job_Title`) );
INSERT INTO `job`(`Job_Title`,`basic_salary`) VALUES ('manager',40000);
INSERT INTO `job`(`Job_Title`,`basic_salary`) VALUES ('executive',45000);
INSERT INTO `job`(`Job_Title`,`basic_salary`) VALUES ('director',50000);
INSERT INTO `job`(`Job_Title`,`basic_salary`) VALUES ('chief',60000);
INSERT INTO `job`(`Job_Title`,`basic_salary`) VALUES ('accountant',35000);
CREATE TABLE `employee` (
`Employee_id` INT NOT NULL,
`Name` varchar(200) NOT NULL,
`Address` varchar(200) NOT NULL,
`Phone_no` varchar(15) UNIQUE,
`Email` varchar(50) UNIQUE,
`Start_date` date NOT NULL,
`dob` date NOT NULL,
`gender` varchar(15) NOT NULL,
`loan` INT NOT NULL,
`p_fund` INT NOT NULL,
`jobtitle` varchar(50) NOT NULL,
`Depart_id` INT NOT NULL,
`managesDepart_id` INT ,
`bank_accno` INT UNIQUE,
PRIMARY KEY (`Employee_id`),
CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Depart_id`) REFERENCES `department`(`Depart_id`),
CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`managesDepart_id`) REFERENCES `department`(`Depart_id`),
CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`jobtitle`) REFERENCES `job`(`Job_Title`));
INSERT INTO `employee` (`Employee_id`, `Name`, `Address`, `Phone_no`, `Email`, `Start_date`, `dob`, `gender`, `loan`, `p_fund`, `jobtitle`, `Depart_id`, `managesDepart_id`, `bank_accno`) VALUES
(1604023, 'Arun', 'Hyderabad', '9988776655', 'arun@gmail.com', '2018-10-10', '1996-02-29', 'male', 0, 2000, 'manager', 106, 106, 236954128),
(1604025, 'Bhuvan', 'Chennai', '9977661230', 'bhuvan@gmail.com', '2018-12-18', '2000-01-01', 'male', 3610, 1500, 'executive', 104, null, 123654784),
(1604026, 'Charan', 'Mumbai', '8809765432', 'charan026@gmail.com', '2018-08-14', '1996-07-11', 'male', 0, 1250, 'manager', 102, 102, 365488911),
(1604027, 'David', 'Delhi', '6303453211', 'david4@gmail.com', '2018-11-01', '1998-09-11', 'male',4000, 750, 'executive', 103, null, 313515669),
(1604045, 'Sohail', 'Rajasthan', '7654321231', 'sohail@gmail.com', '2019-01-18', '1997-10-25', 'male', 4512.5, 750, 'executive', 101, null, 125432874),
(1604060, 'Prakhar', 'Pune', '8193264912', 'prakhar16@gmail.com', '2019-01-03', '1997-06-04', 'male', 0, 1250, 'manager', 101, 101, 154297830),
(1604073, 'Naveen', 'Vellore', '9869803351', 'naveen007@gmail.com', '2018-09-11', '1997-01-25', 'male', 0, 1500, 'accountant', 105, null, 147483647),
(1604078, 'Vinay', 'Madhya Pradesh', '9152140632', 'viany877@gmail.com', '2019-01-18', '1998-03-02', 'male', 0, 1750, 'chief', 101, null, 247483647),
(1604083, 'Bishal', 'Delhi', '7474244680', 'bishal@gmail.com', '2014-06-02', '1997-11-14', 'male', 0, 750, 'executive', 105, null, 321569874),
(1604110, 'Riya', 'Delhi', '7637100931', 'riya143@gmail.com', '2018-10-22', '1999-08-28', 'female', 0, 1250, 'director', 104, null, 497483647);
CREATE TABLE `payment` (
`pay_no` int(11) unique,
`emp_id` INT NOT NULL,
`year` int(11) NOT NULL,
`month` varchar(50) NOT NULL,
`absence` int(11) NOT NULL,
`loan_cut` float NOT NULL,
`pfund_cut` float NOT NULL,
`overtime` float NOT NULL,
`season_bonus` float NOT NULL,
`other_bonus` float NOT NULL,
`medi_allow` float NOT NULL,
`house_allow` float NOT NULL,
`total_pay` float NOT NULL,
PRIMARY KEY(`emp_id`,`year`,`month`),
CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee`(`Employee_id`));
INSERT INTO payment VALUES(1234,1604023,2018,'december',2,0,1000,6,2000,0,1200,3200,45800);
INSERT INTO payment VALUES(1235,1604026,2018,'november',2,0,1000,6,2000,0,1200,3200,45800);
INSERT INTO payment VALUES(1238,1604027,2018,'october',1,200,1125,3,2000,0,1350,3600,51325);
INSERT INTO payment VALUES(1239,1604073,2018,'november',3,0,1500,5,2000,0,1800,4800,68000);
INSERT INTO payment VALUES(1240,1604110,2018,'december',5,0,1250,4,2000,0,1500,4000,56450);
