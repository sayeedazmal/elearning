			
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container">
	<div class="row" style="margin: 100px">
		<div class="input-group mb-3">
      <form method="POST"  action="<?=site_url('admin/savevideo')?>" enctype="multipart/form-data" >

        <div class="form-group">
          <input type="videotitle" name="videotitle" class="form-control" id="videotitle" aria-describedby="videotitle" placeholder="video name">
        </div>

        
        <div class="form-group">
          <input type="file" class="form-control-file border" name="video" id="video">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

			 
			</div>
	</div>
</div>


<div class="container">
  <div class="row" style="margin: 100px">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">video_id</th>
		      <th scope="col">Video Title</th>
		      <th scope="col">URL</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      
                                                <td>
                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >Download</button>
                                                 </a> 

                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >
                                                      Edit
                                                    </button>
                                                 </a> 
                                                 <a href="">
                                                    <button type="button" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                 </a>

                                              </td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      
                                                 <td>
                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >Download</button>
                                                 </a> 

                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >
                                                      Edit
                                                    </button>
                                                 </a> 
                                                 <a href="">
                                                    <button type="button" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                 </a>

                                              </td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      
                                                <td>
                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >Download</button>
                                                 </a> 

                                                 <a href="">
                                                   <button type="button" class="btn btn-primary" >
                                                      Edit
                                                    </button>
                                                 </a> 
                                                 <a href="">
                                                    <button type="button" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                 </a>

                                              </td>
		    </tr>
		  </tbody>
		</table>
  </div>
</div>




			

