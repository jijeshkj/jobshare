   

<div class="form quick-post">
    <!-- Edit profile form (not working)-->
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url('JobController/SaveJob');?>">
        <div class="form-group">
            <label class="control-label col-lg-2" for="title"></label>
            <div class="col-lg-10"> 

            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-lg-2" for="title"></label>
            <div class="col-lg-10"> 

            </div>
        </div> 
        <!-- Title -->
        <div class="alert-success">
        <?php echo $this->session->flashdata('message');?>
        <?php echo "here";?></div>
        <div class="form-group">

            <label class="control-label col-lg-4" for="title">&nbsp</label>
            <h1> Add New Jobs</h1>
            <div class="col-lg-10"> 

            </div>
        </div>   
        <!-- Content -->
        <div class="form-group">
            <label class="control-label col-lg-3" for="content">Job Title</label>
            <div class="col-lg-3"> <label  class="alert-danger" id="err"></label>
                <input type="text" class="form-control" name="jobtitle" id="jobtitle">
            </div>
            <label class="control-label col-lg-2" for="content">Company Name</label>
            <div class="col-lg-3"><label  class="alert-danger" id="errcmp"></label>
                <input type="text" class="form-control" name="companyname" id="companyname">
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-lg-3" for="content">Qualification</label>
            <div class="col-lg-3"><label  class="alert-danger" id="errqual"></label>
                <select class="form-control" id="qualification" name="qualification" >
                    <option value="">- Choose Qualification -</option>
                    <?php
                    foreach ($qualifications as $key => $values) {
                        ?>
                        <option value="<?php echo $values->id; ?>"><?php echo $values->quals_name;
                    ;
                        ?></option>

                    <?php }
                    ?>
                </select>  
            </div>
            <label class="control-label col-lg-2" for="content">Job Location</label>
            <div class="col-lg-3"> <label  class="alert-danger" id="errloc"></label>

                <select class="form-control" id="location"   name="location">
                    <option value="">- Choose location -</option>
                    <?php
                    foreach ($locations as $key => $value) {
                        ?>
                        <option value="<?php echo $value->id; ?>"><?php echo $value->location_name;
                        ;
                        ?></option>

<?php }
?>
                </select>  
            </div>

        </div>  
        <div class="form-group">
            <label class="control-label col-lg-3" for="content">Category</label>
            <div class="col-lg-3" ><label  class="alert-danger" id="errcat"></label>
                <select class="form-control" id="category"   name="category">
                    <option value="">- Choose Cateogry -</option>
                    <?php
                    foreach ($category as $key => $records) {
                        ?>
                        <option value="<?php echo $records->id; ?>"><?php echo $records->category_name;
                        ;
                        ?></option>

<?php }
?>
                </select> 
            </div>
            <label class="control-label col-lg-2" for="content">INterview Date</label>
            <div class="col-lg-3">      <label  class="alert-danger" id="errdate"></label>                         
                <input type="text" class="form-control" name="interviewDate" id="datepicker">
            </div>

        </div>                           
        <!-- Cateogry -->
        <label class="control-label col-lg-3">Discription Image</label>
        <div class="form-group">
            <label  class="alert-danger" id="errdate"></label>      
            <input type="file" name="discriptionImage"   id="discriptionImage">

        </div>              
        <!-- Tags -->
        <div class="form-group">
            <label class="control-label col-lg-3" for="tags">Experience</label>
            <div class="col-lg-1">
                <label class="control-label col-lg-2" for="tags">Year</label>
                <label  class="alert-danger" id="errdate"></label>      
                <input type="text" name="expYear" class="form-control" id="tags">
            </div>
            <div class="col-lg-1">
                <label class="control-label col-lg-2" for="tags">Months</label>
                <label  class="alert-danger" id="errdate"></label>      
                <input type="text" name="expMonth" class="form-control" id="tags">
            </div>


            <label class="control-label col-lg-3" for="tags">Abroad Jobs:</label>

            <div class="col-lg-1">

                <input type="radio" name='jobtype' class="form-control" id="tags">
            </div>
            <label class="control-label col-lg-1" for="tags">Indian Jobs:</label>
            <div class="col-lg-1">

                Government :   <input type="radio" name='jobtype' class="form-control" id="tags">
            </div>
            <div class="col-lg-1">
                Private :  <input type="radio" name='jobtype' class="form-control" id="tags">
            </div>
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <!-- Buttons -->
            <div class="col-lg-offset-4 col-lg-9">
                <input type="submit" onclick="return validate()" class="btn btn-primary" value="publish">

            </div>
        </div>
    </form>
</div>


</div>
<div class="widget-foot">
    <!-- Footer goes here -->
</div>
</div>
</div>

</div>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">       
<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script>
                    $(document).ready(function () {
                        $("#datepicker").datepicker({
                            dateFormat: 'yy-mm-dd',
                            changeMonth: true, //this option for allowing user to select month
                            changeYear: true,
                            minDate: 0,
                        });

                        function validate()
                        {
                            if ($("#jobtitle").val() == '') {
                                $("#jobtitle").focus();
                                $("#jobtitle").focus();

                                return false;
                            }
                        }
                    });

                    function validate() {
                        $(".alert-danger").show();
                        if ($("#jobtitle").val().trim() == "") {
                            $("#jobtitle").focus();
                            $("#err").text("Required").fadeOut(8000);
                            return false;
                        }
                        else if ($("#companyname").val().trim() == "") {
                            $("#companyname").focus();
                            $("#errcmp").text("Required").fadeOut(8000);
                            return false;
                        }
                        else if ($("#qualification").val().trim() == "") {
                            $("#qualification").focus();
                            $("#errqual").text("Required").fadeOut(8000);
                            return false;
                        }
                        else if ($("#location").val().trim() == "") {
                            $("#location").focus();
                            $("#errloc").text("Required").fadeOut(8000);
                            return false;
                        }
                        else if ($("#category").val().trim() == "") {
                            $("#category").focus();
                            $("#errcat").text("Required").fadeOut(8000);
                            return false;
                        }
                    }


</script>