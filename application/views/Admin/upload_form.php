<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>


<form method="POST", action="<?=site_url("upload/do_upload");?>" enctype="multipart/form-data">
	<input type="file" name="imagname" size="20" />

<br /><br />

<input type="submit"  value="upload" />
</form>



</body>
</html>