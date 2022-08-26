 <?php

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
if (!empty($name)&&(!empty($address))&& (!empty($email))&&(!empty($phone))&&(!empty($gender))&&(!empty($program))&&(!empty($filename))){
	$insert="insert into feedback values('$name','$address','$email','$phone', '$gender','$program','$aboutus','$filename')" or die("insert error");
	mysqli_query($con,$insert) or die("insert query error");

	echo"THANK YOU ";
	
	echo" Your information is send to database we will inform you in your GMAIL";

}
else
{
	
	echo '<span style="color:red;">WARNING: Please fill form correctly</span>';
}
	

?> 
