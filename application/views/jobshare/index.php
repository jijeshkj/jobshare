<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>JobShare</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>/assets/css1/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>/assets/css1/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Wrap all page content here -->
<style>
    #col{
        color: white;
    }
</style>
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
        <input type="text" class="form-control">    
      </div>
       <div class="col-lg-4">
             <label class="caption"  style="color: #006699">where</label>
        <input type="text" class="form-control">    
      </div>
      <div class="col-lg-2">
          <label class="caption">&nbsp;</label>
          <button type="button" class="form-control btn-primary" >Job Search</button>
      </div>
  
  </div>
</div>

<div id="footer">
  <div class="container">
    <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
  </div>
</div>

	<!-- script references -->
		 <script src="<?php echo base_url('assets/js/jquery-ui-1.10.4.min.js'); ?>"></script>
		<script src="<?php echo base_url(); ?>/assets/js1/bootstrap.min.js"></script>
	</body>
</html>