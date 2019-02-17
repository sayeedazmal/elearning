<!DOCTYPE html>
<html lang="en">
<head>
  <title>add data table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>add student </h2>
  <div class = "row">
      <div class = "col-6">
          <form method = "POST" action="<?php echo base_url(); ?>main/save_student">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" id=" " placeholder="enter name" name="name">
                </div>
                <div class="form-group">
                  <label>address:</label>
                  <input type="text" class="form-control" id=" " placeholder="enter address" name="address">
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="text" class="form-control" id=" " placeholder="enter email" name="email">
                </div>
             
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    
  </div>
 
</div>

</body>
</html>
