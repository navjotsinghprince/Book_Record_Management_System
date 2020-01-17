<?php 
$size = sizeof($_POST);
$records = $size/4;

for ($i=1; $i<=$records; $i++) { 
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];

	$index2="title".$i;
	$title[$i]=$_POST[$index2];

	$index3="price".$i;
	$price[$i]=$_POST[$index3];

	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}
     $con =mysqli_connect("localhost","root") or die(mysql_error());
     mysqli_select_db($con,"brm");

	for ($i=1; $i<=$records; $i++) { 
		$q ="UPDATE book set title='$title[$i]',price=$price[$i],author='$author[$i]' WHERE bookid=$bookid[$i]";
		mysqli_query($con,$q); 
	}

	if ($con->query($q) === TRUE) {
  echo $size."record updated successfully";
} else {
  echo "Error: " . $q . "<br>" . $con->error;
}

mysqli_close($con);

//you can use redirection page or ajax method as well :)
header("Location: http://localhost/Book_Record_Management_System/updateform.php");

?>