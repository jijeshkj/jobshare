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
            <tr>
                <th style="width:100px"> Sl No </th>
                <th style="width:100px"> Qualification </th>

                <th style="width:100px"> Action </th></tr>
            <?php
            $j = 1;
            foreach ($qualifications as $key => $values) {
                # code...echo 
                ?>

                <tr > <td><?php echo $j; ?></td>
                    <td style="width: 150px"><label class='lblrole badge bg-important' id=lblrole<?php echo $j; ?>><?php echo $values->quals_name; ?></label>
                        <input type='text' id='editrole<?php echo $j; ?>' class="hiddenrole form-control" value="<?php echo $values->quals_name; ?>"  >
                        <label class='lbError' id='lblerr<?php echo $j; ?>'></label></td>

                    <td><a href='javascript:void(0)' altCtrlID="<?php echo $values->id; ?>"  altrowID="<?php echo $j; ?>"  class='editrolelink' id="editrolelink<?php echo $j; ?>" >edit<i class='fa fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='javascript:void(0)' altCtrlID="<?php echo $values->id; ?>"   altrowID="<?php echo $j; ?>"  class='deletelink' id="removeId<?php echo $j; ?>">Remove<i class='fa fa-trash'></i></a>
                        <a href='javascript:void(0)'altCtrlID="<?php echo $values->id; ?>"   altrowID="<?php echo $j; ?>"  class='updaterolelink' id="updaterolelink<?php echo $j; ?>" >update</a>&nbsp;&nbsp; 
                        <a href='javascript:void(0)' altCtrlID="<?php echo $values->id; ?>"  altrowID="<?php echo $j; ?>"  class='cancelrolelink' id="cancelroleId<?php echo $j; ?>">cancel</a></td></tr><?php $j++; ?>
            <?php } ?>
            <tr><td colspan="2"><div id="qualmsg" class="alert-success"></div></td></tr>
            <tr>
                <td colspan="2">
                    <input type="text" class="form-control" id="qualification"  name="qualification" ></td>
                <td><span></span>
                    <button type="buttton" class="btn-success"  id="addqualification" >Add New</button></td>
            </tr>
        </table>
    </div><div class="col-lg-1"></div>

    <div class="panel-body progress-panel col-lg-4"><h3>Job Locations Listed </h3>
        <table class="table table-hover personal-task"> <span class="glyphicon glyphicon-remove " style="color:red"></span> 
            <th style="width:100px"> Sl No</th>
            <th style="width:100px"> <strong> Name</strong></th>
            <th style="width:100px">Action</th>
            <tbody>

                <?php
                $i = 1;
                foreach ($locations as $key => $value) {
                    # code...echo 
                    ?>
                    <tr > <td><?php echo $i; ?></td>
                        <td style="width: 150px"><label class='lblloc badge bg-important' id=lblloc<?php echo $i; ?>><?php echo $value->location_name; ?></label>
                            <input type='text' id='editloc<?php echo $i; ?>' class="hiddenloc form-control" value="<?php echo $value->location_name; ?>"  >
                            <label class='lbError' id='lblerrloc<?php echo $i; ?>'></label></td>

                        <td><a href='javascript:void(0)' altCtrlID="<?php echo $value->id; ?>"  altrowID="<?php echo $i; ?>"  class='editloclink' id="editloclink<?php echo $i; ?>" >edit<i class='fa fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='javascript:void(0)' altCtrlID="<?php echo $value->id; ?>"   altrowID="<?php echo $i; ?>"  class='deleteloclink' id="removelocId<?php echo $i; ?>">Remove<i class='fa fa-trash'></i></a>
                            <a href='javascript:void(0)'altCtrlID="<?php echo $value->id; ?>"   altrowID="<?php echo $i; ?>"  class='updateloclink' id="updateloclink<?php echo $i; ?>" >update</a>&nbsp;&nbsp; 
                            <a href='javascript:void(0)' altCtrlID="<?php echo $value->id; ?>"  altrowID="<?php echo $i; ?>"  class='cancelloclink' id="cancellocId<?php echo $i; ?>">cancel</a></td></tr><?php $i++; ?>
                <?php } ?>
                <tr><td colspan="2"><div id="qualmsg" class="alert-success"></div></td></tr>
                <tr>
                    <td colspan="2">
                        <input type="text"  class="form-control" id="location" name="location" ></td>
                    <td><span></span>
                        <button type="buttton" class="btn-success" id="addlocation"  >Add New</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


<script>
    $(".updaterolelink").hide();
    $(".cancelrolelink").hide();
    $(".hiddenrole").hide();
    $(".updateloclink").hide();
    $(".cancelloclink").hide();
    $(".hiddenloc").hide();

    $(".editrolelink").click(function () {
        var rowID = $(this).attr('altrowID');
        $("#lblrole" + rowID).hide();
        $("#editrole" + rowID).show();
        $(".editrolelink").hide();
        $(".updaterolelink").hide();
        $(".cancelrolelink").hide();
        $(".deletelink").hide();
        $("#updaterolelink" + rowID).show();
        $("#cancelroleId" + rowID).show();
    });
    $(".cancelrolelink").click(function () {
        var rowID = $(this).attr('altrowID');
        $("#lblrole" + rowID).show();
        var labelvalue = $("#lblrole" + rowID).text();
        $("#editrole" + rowID).val(labelvalue);
        $("#editrole" + rowID).hide();
        $(".editrolelink").show();
        $(".deletelink").show();
        $(".updaterolelink").hide();
        $(".cancelrolelink").hide();
    });
    $(".updaterolelink").click(function () {
        var id = $(this).attr('altCtrlID');
        var rowID = $(this).attr('altrowID');
        var name = $("#editrole" + rowID).val();
        updateQual(id, name, rowID);
    });

    $(".deletelink").click(function () {
        var id = $(this).attr('altCtrlID');
        var result = confirm("Are you sure to delete?");
        if (result) {
            deleteQuals(id);
        }
    });

    function updateQual(id, name, rowID) {
        if (name != '' && id != '') {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('JobController/updateQuals'); ?>',
                data: {'qualification': name, 'id': id},
                'success'
                        : function (data) {
                            window.location.reload();
                        },
                'error': function (data) {
                }
            });
        } else {
            $('.lbError').text('');
            $('.lbError').show();
            $('#lblerr' + rowID).text('is mandatory').fadeOut(8000);
        }
    }


    function deleteQuals(id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('JobController/deleteQuals'); ?>',
            data: {'id': id},
            'success'
                    : function (data) {
                        window.location.reload();
                    },
            'error': function (data) {
                ;
            }
        });
    }
    
    
    
    
    
        $(".editloclink").click(function () {
        var rowID = $(this).attr('altrowID');
        $("#lblloc" + rowID).hide();
        $("#editloc" + rowID).show();
        $(".editloclink").hide();
        $(".updateloclink").hide();
        $(".cancelloclink").hide();
        $(".deleteloclink").hide();
        $("#updateloclink" + rowID).show();
        $("#cancellocId" + rowID).show();
    });
    $(".cancelloclink").click(function () {
        var rowID = $(this).attr('altrowID');
        $("#lblloc" + rowID).show();
        var labelvalue = $("#lblloc" + rowID).text();
        $("#editloc" + rowID).val(labelvalue);
        $("#editloc" + rowID).hide();
        $(".editloclink").show();
        $(".deleteloclink").show();
        $(".updateloclink").hide();
        $(".cancelloclink").hide();
    });
    $(".updateloclink").click(function () {
        var id = $(this).attr('altCtrlID');
        var rowID = $(this).attr('altrowID');
        var name = $("#editloc" + rowID).val();
        updateQual(id, name, rowID);
    });

    $(".deleteloclink").click(function () {
        var id = $(this).attr('altCtrlID');
        var result = confirm("Are you sure to delete?");
        if (result) {
            deleteQuals(id);
        }
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
                    $("#qualmsg").show();
                    $("#qualmsg").html(data).fadeOut(8000);
                    window.location.reload();
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

