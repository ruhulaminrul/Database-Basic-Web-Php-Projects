<?php

include('../includes/db.php');



# Drop if Exists 

$sql=" 
    DROP TABLE students
";


if($db->query($sql) == TRUE)
echo "drop success";
else
echo " drop failed";



echo "<br>";
#  Create table again 

$sql = "CREATE TABLE students(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(55) NOT NULL,
    fathers_name varchar(55) NOT NULL,
    mothers_name varchar(55) NOT NULL,
    present_address varchar(100) NOT NULL,
    phone_number varchar(51) NOT NULL

)";




if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Ruhul Amin','Haidar Ali','Neelufa Akter','Habiganj', +8801234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Shoumik Roy','X','Y','Sylhet', 00000000000001234567891);

";



$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Sita Rani Nath','X','Y','Sylhet', 01234567891);
";


$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Sushmita Sarker','W','X','Sylhet', 01234567891);

";


$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Senjuthi Bhattacharjee','Santosh Bhattacharjee','Kabita Bhattacharjee','Chittagong', 01234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Srishtee Bhattacharjee','Santosh Bhattacharjee','Kabita Bhattacharjee','Chittagong', 01234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Showrav Mitra','x','y','Chittagong', 01234567891);

";





if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>