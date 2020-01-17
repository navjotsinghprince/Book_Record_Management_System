<?php 
$con =mysqli_connect("localhost","root") or die(mysql_error());
mysqli_select_db($con,"brm");

// ...some PHP code for database "test"...
if(isset($_POST['title']) && isset($_POST['price']) && isset($_POST['author'])){
 $title = $_POST['title'];
  $price = $_POST['price'];
  $author = $_POST['author'];
}
$q = "INSERT INTO book (title,price,author)
VALUES ('$title', '$price','$author')";

if ($con->query($q) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $q . "<br>" . $con->error;
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add More Record</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
   <h4 class="text-dark " >Do Want To Insert More Record <a href="insert.php" title="click" class="btn btn-outline-primary">HERE</a></h4>
	<h4 class="text-gray-dark " >Do Want To Go to HomePage <a href="home.php" title="click" class="btn btn-outline-primary">HERE</a></h4>

</body>
</html>



