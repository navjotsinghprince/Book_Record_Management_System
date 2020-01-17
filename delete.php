<?php 
if(isset($_POST['submit']) && isset($_POST['checkbox'])){
$cnt =array();
$cnt = count($_POST['checkbox']);
for ($i=0; $i<$cnt; $i++) { 
	$del_id = $_POST['checkbox'][$i];

	$con =mysqli_connect("localhost","root") or die(mysql_error());
     mysqli_select_db($con,"brm");
     $q="delete from book where bookid=".$del_id;
	mysqli_query($con,$q); 
}
	if ($con->query($q) === TRUE) {
  echo $cnt."record deleted successfully";
} else {
  echo "Error: " . $q . "<br>" . $con->error;
}

mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>delete</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
		<h4 class="text-warning ml-4" >Do Want To Go to HomePage <a href="home.php" title="click" class="btn btn-outline-primary">HERE</a></h4>
	
</body>
</html>