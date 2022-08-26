<?php
if(isset($_POST['submit']))
{

    $con=mysqli_connect("localhost", "root", "","kcmit") or die("connection error");
	
	$name=$_POST['fullname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$aboutus=$_POST['aboutus'];
	$gender=$_POST['gen'];
	$program=$_POST['chk'];
	$filename=$_FILES['fileupload']['name'];
	move_uploaded_file($_FILES['fileupload']['tmp_name'],$filename);

	$insert="insert into feedback values('$name','$address','$email','$phone', 'gender','program','aboutus','filename')" or die("insert error");
	mysqli_query($conn,$insert) or die("insert query error");

	
	

	}

?>