<?php
include_once 'connection.php';

$name= mysqli_real_escape_string($con , $_POST['name']);
$surname= mysqli_real_escape_string($con , $_POST['surname']);
$DOB= mysqli_real_escape_string($con , $_POST['dateofbirth']);
$Gender= mysqli_real_escape_string($con , $_POST['gender']);
$Id= mysqli_real_escape_string($con , $_POST['id']);
$Nationality= mysqli_real_escape_string($con , $_POST['nationality']);
$Maritals= mysqli_real_escape_string($con , $_POST['status']);
$Religion= mysqli_real_escape_string($con , $_POST['religion']);
$Home_Lang= mysqli_real_escape_string($con , $_POST['home-lang']);
$Other_Lang= mysqli_real_escape_string($con , $_POST['other-lang']);
$Phone_no= mysqli_real_escape_string($con , $_POST['numbers']);
$Email= mysqli_real_escape_string($con , $_POST['email']);
$Institution= mysqli_real_escape_string($con , $_POST['institusion']);
$Highest_G= mysqli_real_escape_string($con , $_POST['highest']);
$Tertiary= mysqli_real_escape_string($con , $_POST['tertiary']);
$Feild_of_Study= mysqli_real_escape_string($con , $_POST['course']);
$Degree= mysqli_real_escape_string($con , $_POST['degree']);
$Job_title= mysqli_real_escape_string($con , $_POST['job']);
$Company_Name= mysqli_real_escape_string($con , $_POST['company']);
$Discription= mysqli_real_escape_string($con , $_POST['descripe']);
$Skill= mysqli_real_escape_string($con , $_POST['skill']);
$Project= mysqli_real_escape_string($con , $_POST['project']);


$sql ="INSERT INTO cvtable (userName , surname , birth_date , Gender , Identity_No, Nationality , Maritals, Religion, Home_Lang, Other_Lang , Phone_numbers , Email, Institution , Higher_G , Tertiary , Feild_of_study , Degree , Job_title, Company_name , Job_description, Skills , Projects)
VALUES ('$name','$surname','$DOB','$Gender','$Id','$Nationality','$Maritals','$Religion','$Home_Lang','$Other_Lang','$Phone_no','$Email', '$Institution','$Highest_G','$Tertiary','$Feild_of_Study','$Degree','$Job_title','$Company_Name','$Discription', '$Skill', '$Project');";

//$sql="INSERT INTO cvtable (userName , surname , birth_date)
//VALUES ('sam','lediga','30 dec');";

mysqli_query($con, $sql);
header("Location:WriteCV.php?input=success");
?>