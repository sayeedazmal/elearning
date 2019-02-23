   

    <div class="row">                  
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lesson Name</th>
                        <th>Lesson Title</th>
                        <th >Description</th>
                        <th >Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                                  if($lessons_data->num_rows() > 0){
                                      foreach ($lessons_data -> result() as $row) {
                                        ?>
                                          <tr>
                                              <td><?php echo $row->lessonid ?></td>
                                              <td><?php echo $row->lessonname ?></td>
                                              <td><?php echo $row->lessontitle ?></td>
                                              <td><?php echo $row->link ?></td>
                                              <td><?php echo $row->description ?></td>
                                              <td>

                                                <img src="<?php echo base_url("".$row->courseimg)?>" style="width: 100px; height: 100px">
                                              </td>
                                            
                                               
                                                <td>
                                                 <a href="<?=site_url("course/edit/").$row->lessonid ?>">
                                                   <button type="button" class="btn btn-primary" >
                                                      <i class="fas fa-edit"></i>
                                                    </button>
                                                 </a> 
                                                 <a href="<?=site_url('admin/course_delete/').$row->course_id; ?>">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                 </a>

                                              </td>
                                              
                                          </tr>
                                        <?php
                                      }

                                  }
                                ?>
                            
                </tbody>
            </table>
            </div>
        </div>
    </div>
                           
                           
                        