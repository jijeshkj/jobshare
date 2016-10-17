
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
    <center><div class="panel-body progress-panel" align="center" style="width:1100px;" >
            <h2><strong> List Jobs</strong></h2>

            <table class="table table-hover personal-task">
                <th> Sl No</th>
                <th> Job Title</th>
                <th>company_name</th>
                <th>Job type</th>
                <th>Location</th>
                <th>Category</th>
                <th>qualification</th>
                <th>interview Date</th>
                <th>image</th>

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
                            <?php echo $values->job_title; ?>
                        </td>
                        <td >
                            <?php echo $values->company_name; ?>
                        </td>
                        <td >
                            <?php echo $values->job_type; ?>
                        </td>
                        <td >
                            <?php echo $values->location_name; ?>
                        </td>
                        <td >
                            <?php echo $values->category_name; ?>
                        </td>
                        <td >
                            <?php echo $values->quals_name; ?>
                        </td>
                        <td >
                            <?php echo $values->interview_date; ?>
                        </td>

                        <td >
                            <span class="badge bg-important"><img width="180px" height="120px" src="<?php echo base_url("uploads/" . $values->discription_image); ?>"></span>
                        </td>
                        <td>
                            <a href="#">
                                <span class="glyphicon glyphicon-remove " style="color:red"></span> <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td><td></td>

                    </tr><?php $i++; ?>
                <?php } ?>

            </table>
        </div></center>