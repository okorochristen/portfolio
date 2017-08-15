<?php



 $connect=mysql_connect('localhost','root','') or die (mysql_error());
 mysql_select_db('form',$connect);

 $firstname=$_POST['firstname'];
$email=$_POST['email'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO user(firstname,email,address,subject,message) VALUES('$firstname','$email','$address','$subject','$message')";
mysql_query($sql,$connect);
echo"it has been sent sucessfully..... ";

mysql_close($connect);
?>