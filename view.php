<?php 
$con =mysqli_connect("localhost","root") or die(mysql_error());
mysqli_select_db($con,"brm");

// Retrive data from mysql SQLdatabase
//print_r($result); testing purposes
//array ke index tables ke column name hain

$q = "SELECT * from book";
$result = mysqli_query($con,$q);  //two dimensional array return
$totalrows= mysqli_num_rows($result);  //get array length rows  for loop k liye
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>fetch data into table</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body><br>
	<div class="container table-responsive-lg  table-responsive-md  table-responsive-sm" style="border:1px solid black;" >
	<h2 class="text-uppercase text-capitalize text-center text-primary">BOOK RECORD INFORMATION</h2>
	<table class="table">
		<caption>By Navjot Singh Prince</caption>
		<thead class="table-dark">
			<tr>
				<th  class="text-center">ID</th>
				<th class="text-center">TITLE</th>
				<th class="text-center">PRICE</th>
				<th class="text-center">AUTHOR</th>
			</tr>
		</thead>

	<?php 
    for ($i=1; $i<=$totalrows; $i++) {
     $arr = mysqli_fetch_array($result);  //single array ayega ek k bad ek like row wise
       ?>
		<tbody>
			<td class="font-weight-bold"><?php echo $arr['bookid']; ?></td>
			<td><?php echo $arr['title']; ?></td>
			<td><?php echo $arr['price']; ?></td>
			<td><?php echo $arr['author']; ?></td>
		</tbody>
		
	<?php } ?>
	</table>
</div>
<h4 class="text-warning m-lg-4 mt-3">Do Want To Go to HomePage <a href="home.php" title="click" class="btn btn-secondary">HERE</a></h4>

</body>
</html>