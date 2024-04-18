<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<head>
	<title>
		emp ragister  form
	</title>
</head>	
	<body class="bg-info">
	<center><h1 class="text-danger bg-dark w-30%">emp  form</h1></center>	
 <form action="new.php" method="POST">
	
	<a href="ragister.php"><input type="button" value="add new data" style="margin-left:6px" class="btn btn-success mb-2"></a>
<center>
<table border="2%" cellspacing="2px" cellpadding="2px" width="100%">
	<tr>
		<tH class="w-5">EMP NO 
		<tH class="w-10">EMP NAME
		<th class="w-5">DATE OF BIRTH
		<tH class="w-5">SALLARY
		<tH class="w-10">CITY
		<th class="w-20">ADDRRESS
		<th class="w-10">EMAIL
		<th class="w-5">CONTACTS
		<th>ACTION
			
		</td>
	</tr>
<?php
	$con=mysqli_connect("localhost","root","","bapu");
		$sql="select *  from `user`";
		$res=mysqli_query($con,$sql);
		//$id=$_REQUEST['id'];
		while($row=mysqli_fetch_assoc($res))
		{
			?>
				<tr class="w-100">
					<th class="w-5"><?=$row['emp-no'];?>
					<th class="w-10"><?=$row['emp-name'];?>
					<th class="w-5"><?=$row['dob'];?>
					<th class="w-5"> <?=$row['sallary'];?>
					<th class="w-10"><?=$row['city'];?>
					<th class="w-20"><?=$row['address'];?>
					<th class="w-10"><?=$row['email'];?>	
					<th class="w-5"><?=$row['contacts'];?>
					<td><a href=\"edit.php?id=$res[id]\"><input type="button" value=" edit data" style="margin-left:6px" class="btn btn-success mb-2"></a>
			<a href=\"delete.php?id=$res[id]\" onClick=\"return conform('Are you sure you want to delete?')\"><input type="button" value="delate  data" style="margin-left:6px" class="btn btn-danger mb-2"></a></td>
				<!--	<th><a href="edit.php?id=<?=$id;?>">Update</a>-->
					</tr>
				<?php
		}
	?>	
		
					
					
	

	