<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/developer.css">
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
        <div class="row">
            <div class="col-lg-8 task-progress pull-left">

            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 task-progress pull-left">

        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="col-lg-2"></div>
    <div class="panel-body progress-panel col-lg-4"><h3>Job Qualifications Listed </h3>
        <table class="table table-hover personal-task">
            <th> Sl No</<th><th> <strong> Name</strong></<th><th>Action</th>
            <?php
            $j = 1;
            foreach ($qualifications as $key => $values) {
                # code...echo 
                ?>
                <tr>
                    <td >
                        <?php echo $j; ?>
                    </td>
                    <td >
                        <span class="badge bg-important"><?php echo $values->quals_name; ?></span>
                        <input type="text" name="qualificationname" class="hiddenqualification" value="<?php echo $values->quals_name; ?>" id="hiddenqualification<?php echo $j; ?>">
                    </td>
                    <td>
                        <a href="javascript:void();"  alt="<?php echo $j; ?>" class="editqual" id="editqual<?php echo $j; ?>">
                            <span class="glyphicon glyphicon-edit">edit</span>

                        </a>
                        <a href="" class="updatelink">update</a>
                        <a href="" class="cancellink">cancel</a>
                    </td><td></td>

                </tr><?php $j++; ?>
            <?php } ?>
                <tr><td colspan="2"><div id="qualmsg" class="alert-success"></div></td></tr>
            <tr>
                <td colspan="2">
                    <input type="text" class="form-control" id="qualification"  name="qualification" ></td>
                <td><span></span>
                    <button type="buttton" class="btn-success"  id="addqualification" >Add New</button></td>
            </tr>
        </table>
    </div><div class="col-lg-1"></div></section>
    <div class="panel-body progress-panel col-lg-4"><h3>Job Locations Listed </h3>
        <table class="table table-hover personal-task"> <span class="glyphicon glyphicon-remove " style="color:red"></span> 
            <th> Sl No</<th><th> <strong> Name</strong></<th><th>Action</th>
            <tbody>

                <?php
                $i = 1;
                foreach ($locations as $key => $value) {
                    # code...echo 
                    ?>
                    <tr>

                        <td >
                            <?php echo $i; ?>
                        </td>
                        <td >
                            <span class="badge bg-important"><?php echo $value->location_name; ?></span>
                            <input type="text" name="locationname" class="hiddenlocation" value="<?php echo $value->location_name; ?>" id="hiddenlocation<?php echo $i; ?>">
                        </td>
                        <td>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td><td></td>

                    </tr><?php $i++; ?>
                <?php } ?>
                <tr>
                    <td colspan="2">
                        <input type="text"  class="form-control" id="location" name="location" ></td>
                    <td><span></span>
                        <button type="buttton" class="btn-success" id="addlocation"  >Add New</button></td>
                </tr>

            </<table>
                </div>

                <script>
                    $(".updatelink").hide();
                    $(".cancellink").hide();
                    $(".hiddenlocation").hide();
                    $(".hiddenqualification").hide();

                    $(".editqual").click(function () {


                    });



                    $("#addqualification").click(function () {
                        if ($("#qualification").val() != '') {
                            $.ajax({
                                type: "POST",
                                url: '<?php echo base_url('JobController/saveQuals'); ?>',
                                data: {'qualification': $("#qualification").val()},
                                async: false,
                                dataType: 'json',
                                success: function (data) {
                                    alert(data);
                                    $("#qualmsg").show();
                                    $("#qualmsg").text(data).fadeOut('8000');
                                    // window.location.reload();
                                    // $("#qualification").val('');

                                }
                            });
                        }
                    });


                    $("#addlocation").click(function () {

                        if ($("#location").val() != '') {

                            $.ajax({
                                type: "POST",
                                url: '<?php echo base_url('JobController/saveLocation'); ?>',
                                data: {'location': $("#location").val()},
                                success: function (data) {

                                    window.location.reload();
                                    $("#location").val('');

                                }
                            });
                        }
                    });


                </script>

