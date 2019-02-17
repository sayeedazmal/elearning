

<!DOCTYPE html>
<html lang="en">
<head>
  <title>data table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Get data Table</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Student_id</th>
        <th>name</th>
        <th>address</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <?php
    if($fetch_data->num_rows() > 0){
        foreach ($fetch_data->result() as $row) {
          ?>
            <tr>
                <td><?php echo $row->st_id ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->address ?> </td>
                <td><?php echo $row->email ?> </td>

            </tr>
          <?php
        }

    }else{
      ?>
        <tr>
        <td scope="col">no data found</td>
       </tr>
      <?php  

    }
  ?>
</table>
</div>

</body>
</html>
