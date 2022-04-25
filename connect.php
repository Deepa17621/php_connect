<?php

$fn=$_POST['First_Name'];
$ln=$_POST['Last_Name'];
$g=$_Post['Gender'];
$dob=$_POST['start-trip'];
$pn=$_Post['Mobile'];
$AaN=$_Post['Aadhar.No'];
$em=$_Post['Email'];
$Add=$_Post['Address'];
$C=$_Post['city'];
$pin=$_Post['pincode'];
$pw=$_Post['Password'];
$cpw=$_Post['confirmPassword'];
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
