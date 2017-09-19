<html>
    <head>
        <title>Nano Soft App</title>
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"/></script>
    </head>
	<body>	
  <nav class="navbar navbar-default" style="background:#dddddd;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>"><strong>Nano APP</strong></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>">Home </a></li>
          <li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
          <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
        </ul>
        <?php if($this->session->userdata('logged_in')):?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
          </ul>
      <?php endif;?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
	
		<div class="container">			
      <div class="col-xs-3">
        <?php $this->load->view('users/login_view');?>
      </div>
      <div class="col-xs-9">			
        <?php $this->load->view($main_view);?>			
      </div>		
		</div>
	</body>
</html>

