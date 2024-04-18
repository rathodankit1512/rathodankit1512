<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<head>
	<title>
		emp ragister  form
	</title>
</head>	
	<center><h1>emp ragister form</h1></center>	
		<a href="new.php"><input type="button" value="view data" style="margin-left:6px" class="btn btn-success mb-2"></a>
 <form action="ragister.php" method="POST">
<center>
<table border="2px" class="w-100">
	<tr>
		<td>
			<input type="number"name="txtnum" class="form-control mt-2"placeholder="emter emp no" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="text"name="txtfunm" class="form-control mt-2" placeholder="emter emp full name" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="date"name="txtdob" class="form-control mt-2" placeholder="emter emp date of birth" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="number"name="txtsly" class="form-control mt-2" placeholder="emter emp sallary" required>
		</td>
	</tr>
	<tr>
		<td>
				<select name="txtcty"class="form-control mt-2">
				<option value="select">select
				<option value="rajkot">rajkot
				<option value="junagadh">junagadh
		</td>
	</tr>
	<tr>
		<td>
			 <textarea class="form-control mt-2" name="txtadd" placeholder="enter emp address"required></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="email"name="txteml" class="form-control mt-2" placeholder="emter emp email" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="password"name="txtpwd" class="form-control mt-2" placeholder="enter password" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="number"name="txtcnt" class="form-control mt-2" placeholder="emter emp contacts" required>
		</td>
	</tr>
	<tr>
		<td>
		<center>	<input type="submit" name="sbt" class="btn btn-primary w-100">
			<input type="reset" name="reset" class="btn btn-danger w-100">
			
		</td>
	</tr>
</table>
</center>
</form>
<?php
	
	$con=mysqli_connect("localhost","root","","bapu");
	if(isset($_POST['sbt']))
	{
			$num=$_POST['txtnum'];
			$funm=$_POST['txtfunm'];
			$dob=$_POST['txtdob'];
			$sly=$_POST['txtsly'];
			$cty=$_POST['txtcty'];
			$add=$_POST['txtadd'];
			$eml=$_POST['txteml'];
			$cnt=$_POST['txtcnt'];
			$sql="INSERT INTO `user`(`emp-no`, `emp-name`, `dob`, `sallary`, `city`, `address`, `email`, `contacts`) VALUES ('$num','$funm','$dob','$sly','$cty','$add','$eml','$cnt')";
		$res=mysqli_query($con,$sql);
		if($res==1)
		{
				
				header("location:new.php");
				//echo "<script>alert('data instertedd')</script>";
		}
		else
		{
				echo"record not insert";
		}
		
	}
	?>