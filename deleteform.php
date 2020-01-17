<?php 
$con =mysqli_connect("localhost","root") or die(mysql_error());
mysqli_select_db($con,"brm");
$q = "SELECT * from book";
$result = mysqli_query($con,$q);  //two dimensional array return
$totalrows= mysqli_num_rows($result);  //get array length rows  for loop k liye

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>delete data from table </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<h2 class="text-primary text-center">Delete Book Records</h2>
	<div class="container table-responsive-lg  table-responsive-md  table-responsive-sm">
	<form action="delete.php" method="post" accept-charset="utf-8">
	<table class="table">
		<caption>BOOK RECORD MANAGEMENT SYSTEM </caption>
		<thead class="table-dark">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TITLE</th>
				<th class="text-center">PRICE</th>
				<th class="text-center">AUTHOR</th>
				<th class="text-center">SELECT TO DELETE</th>
			</tr>
		</thead>

	<?php 
    for ($i=1; $i<=$totalrows; $i++) {
     $arr = mysqli_fetch_array($result);  //single array ayega ek k bad ek like row wise
       ?>
		<tbody>
			<td><?php echo $arr['bookid']; ?></td>
			<td><?php echo $arr['title'];  ?></td>
			<td><?php echo $arr['price'];  ?></td>
			<td><?php echo $arr['author']; ?></td>
			<td style="cursor: pointer;"><input style="cursor: pointer;" type="checkbox" name="checkbox[]" value="<?php echo $arr['bookid'];?>" ></td>
			<td></td>
 		</tbody>
	<?php } 
//mysqli_close($con);
	?>
	<tr>
		<td colspan="5" ><input type="submit" name="submit" value="DELETE" class="btn btn-danger"></td>
	</tr>
	</table>
	</form>
		
	</div>
	<h4 class="text-warning ml-5" >Do Want To Go to HomePage <a href="home.php" title="click" class="btn btn-outline-primary">HERE</a></h4>
</body>
</html>