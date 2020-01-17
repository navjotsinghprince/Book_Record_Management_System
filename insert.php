<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	<h2 class="text-primary text-center text-capitalize"> Insert data into MySql database</h2><hr>
  <div class="container form-group" id="myformbox">
	<form action="insertion.php" method="post" accept-charset="utf-8">
	<label for="title">BOOK TITLE<input type="text" name="title" value="" id="title" required class="form-control"></label><br><br>
    <label for="price">BOOK PRICE<input type="text" name="price" value="" id="price" required class="form-control"></label><br><br>
    <label for="author">BOOK AUTHOR<input type="text" name="author" value="" id="author" required class="form-control"></label><br><br>
    <input type="submit" name="submit" value="INSERT DATA" class="btn btn-success">
</form>
	</div>
<br><br>
<h4 class="text-warning ml-5">Do Want To Go to HomePage <a href="home.php" title="click" class="btn btn-secondary">HERE</a></h4>

</body>
</html>