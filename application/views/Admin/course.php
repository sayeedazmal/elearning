                <div class="row">
                         <div class="col-lg-2">
                           <a href="add_course"> <button id="payment-button"  type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Add Course</span>
                                
                            </button></a>
                           </div>
                       </div>
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Course Name</th>
                                                <th>Course No</th>
                                                <th >Course Title</th>
                                                <th >img</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            <?php
                                  if($course_data->num_rows() > 0){
                                      foreach ($course_data -> result() as $row) {
                                        ?>
                                          <tr>
                                              <td><?php echo $row->course_id ?></td>
                                              <td><?php echo $row->coursename ?></td>
                                              <td><?php echo $row->courseno ?></td>
                                              <td><?php echo $row->coursetitle ?></td>
                                              <td>

                                                <img src="<?php echo base_url("".$row->courseimg)?>" style="width: 100px; height: 100px">
                                              </td>
                                            
                                               
                                                <td>
                                                 <a href="<?php echo base_url("admin/add_lesson/").$row->course_id; ?>">
                                                   <button type="button" class="btn btn-primary" >Add Lesson</button>
                                                 </a> 

                                                 <a href="<?=site_url("course/edit/").$row->course_id ?>">
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