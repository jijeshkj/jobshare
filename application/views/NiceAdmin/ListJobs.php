
    <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>To Do Everyday</h1>                                  
                              </div>
                              <div class="col-lg-4">
                                <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Jenifer smith
                                </span>                                
                              </div>
                            </div>
                          </div>
                          <div class="panel-body progress-panel">
 <table class="table table-hover personal-task">

                              <tbody>
                              <tr>
                                  <td>Today</td>
                                  <td>
                                     
                                  </td>
                                  <td>
                                      <span class="badge bg-important"></span>
                                  </td>
                                  <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                  </td>
                              </tr></<table>
                            </div></section>


        <table class="table table-hover personal-task">
            <th> Sl No</th>
            <th> Job Title</th>
            <th>company_name</th>
            <th>qualification</th>
             <th>Location</th>
              <th>Category</th>
              <th>interview Date</th>
               <th>image</th>
                <th>Job type</th>
            <?php
            $i = 1;
            foreach ($data as $key => $values) {
                # code...echo 
               
                ?>
                <tr>
                    <td >
                        <?php echo $i; ?>
                    </td>
                    <td >
                        <span class="badge bg-important"><img src="<?php echo base_url("uploads/".$values->discription_image); ?>"></span>
                    </td>
                    <td>
                        <a href="#">
                            <span class="glyphicon glyphicon-remove " style="color:red"></span> <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td><td></td>

                </tr><?php $i++; ?>
            <?php } ?>
            <tr>
                <td colspan="2">
                    <input type="text" class="form-control" id="qualification"  name="qualification" ></td>
                <td><span></span>
                    <button type="buttton" class="btn-success"  id="addqualification" >Add New</button></td>
            </tr>
        </table>
                              