<?php

$fn=$_POST['First_Name'];
$ln=$_POST['Last_Name'];
$g=$_POST['Gender'];
$dob=$_POST['start-trip'];
$pn=$_POST['Mobile'];
$AaN=$_POST['Aadhar.No'];
$em=$_POST['Email'];
$Add=$_POST['Address'];
$C=$_POST['city'];
$pin=$_POST['pincode'];
$pw=$_POST['Password'];
$cpw=$_POST['confirmPassword'];
$con=mysqli_connect("localhost","root","","form-validation");
$sql="INSERT INTO form-data (First Name,Last Name, Gender, Mobile No, Aadhar No,  Email, Address,  City, 
Pincode,Password, Confirm Password) 
values('$fn', '$ln','$g', '$dob','$pn', '$AaN', '$em', '$Add', '$C', '$pin', '$pw', '$cpw')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"USER DETAILS ADDED SUCCESSFULLY";
}
else
{
    echo"USER DETAILS NOT ADDED";
}
?>
