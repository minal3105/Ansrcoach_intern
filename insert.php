<?php
include("connection.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$city=$_POST['city'];
$amt=$_POST['amt'];
$sql="insert into customers values('','$fname','$lname','$email','$phone','$add','$city','$amt')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo'<script>alert("Registeration Successfull .Now proceed For Login")</script>'.include("payment1.php");
}
else {
    echo'<script>alert("Registeration Failed.please fill correctly")</script>';

}

?>