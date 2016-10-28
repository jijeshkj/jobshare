<!DOCTYPE html>

<body>
    <!-- Wrap all page content here -->

    <div id="wrap" >

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" style="background-color: #006699"  >
            <div  >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav" >
                        <li class="active"><a href="#" id="col">FInd Jobs</a></li>
                        <li><a href="#about" id="col">Find  Resumes</a></li>
                        <li><a href="#contact" id="col">Employers/Post Job</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <!-- Begin page content -->
        <div class="container">
            <div class="page-header">
                <h1>Job Share</h1>
            </div>
            <div class="col-lg-4">
                <label class="caption" style="color: #006699">what</label>
                <input type="text" id="tags" class="form-control">  
                job title,category, keywords or company name
            </div>
            <div class="col-lg-4">
                <label class="caption"  style="color: #006699">where</label>
                <input type="text" id ="where" class="form-control">    
            </div>
            <div class="col-lg-2">
                <label class="caption">&nbsp;</label>
                <button type="button" class="form-control btn-primary" onclick="return searchJob()" >Job Search</button>
            </div>

        </div>
    </div>


    <div id="footer">
        <div class="container">
            <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
        </div>
    </div>

    <!-- script references -->

</body>
</html>
<style>
    .ui-autocomplete { height: 200px; overflow-y: scroll; overflow-x: hidden;}
</style>

<script>
    $(function () {
        var data =<?php echo json_encode($value); ?>;
        var len = data.length;
        var catarray = [];
        for (var i = 0; i < len; i++) {
            var cat = data[i]['name'];
            catarray.push(cat);
        }
        var datalolc =<?php echo json_encode($location); ?>;
        var lenloc = datalolc.length;
        var locarray = [];
        for (var i = 0; i < lenloc; i++) {
            var loc = datalolc[i]['name'];
            locarray.push(loc);
        }

        var jobs =<?php echo json_encode($jobs); ?>;
        var jobloc = jobs.length;

        for (var i = 0; i < jobloc; i++) {
            var jobtitle = jobs[i]['title'];
            var company = jobs[i]['company'];
            catarray.push(jobtitle);
            catarray.push(company);
        }

        $("#tags").autocomplete({
            minLength: 0,
            maxLength: 10,
            source: catarray,
            select: function (e, ui) {

              
            },
            change: function (e, ui) {

               
            }
        });
//        $("#tags").focus(function () {
//            $(this).autocomplete("search");
//        });

        $("#where").autocomplete({
            minLength: 0,
            source: locarray,
            select: function (e, ui) {

              
            },
            change: function (e, ui) {

               
            }
        });
        $("#where").focus(function () {
            $(this).autocomplete("search");
        });

        function searchJob(id, name, rowID) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('Controller/searchJob'); ?>',
                data: {'qualification': name, 'id': id},
                'success'
                        : function (data) {
                            window.location.reload();
                        },
                'error': function (data) {
                }
            });

        }





    });
</script>