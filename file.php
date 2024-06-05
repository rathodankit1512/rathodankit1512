<?php
	if(isset($_FILES['filetoupload']))
	{
		$filename=basename($_FILES['filetoupload']['name']);
		$temp=explode('.',$filename);
		$ext=end($temp);
		$newname=rand();
		$filename=$newname.".".$ext;
		$target_dir="uploadsl";
		$target_file=$target_dir.$filename;
		
		if($ext=="jpg" or $ext == "JPG")
		{
			move_uploaded_file($_FILES['filetoupload']['tmp-name'],$target_file);
		}
	}
?>
<div class="container mx-auto">
<form action="file.php" method="POST" enctype="multipart/form-data">
<img src="" class="img-fluid">
<input type="file" class="form control" accept="application/img" name="fileupload">
<input type="submit" value="upload" class="btn btn-primary">
</form>
</div>