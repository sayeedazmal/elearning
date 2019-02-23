<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<form method="POST", action="<?=site_url("upload/do_upload");?>" enctype="multipart/form-data">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <input type="file" name="imagname" size="20" />
	<br /><br />
    <input type="submit"  value="upload" />
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</body>
</html>