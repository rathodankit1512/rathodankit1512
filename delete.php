<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Bootstrap Demo</title>
	</head>
	<body>
		<div class="container mt-2">
			<form action="Delete.php" method="POST">
				<input type="number" class="form-control mb-1" name="id" placeholder="Enter Id">
        <input type="submit" value="Delete" class="btn btn-danger w-100 mb-1">
			</form>
		</div>
	</body>
</html>
<?php
    $con = mysqli_connect("localhost","root","","dbharry");
    if(isset($_POST['id']))
   {
     $id = $_POST['id'];
   $sql="DELETE  FROM `phptrip` WHERE `id` = '$id' ";
   $result=mysqli_query($con,$sql);
   }
?>
