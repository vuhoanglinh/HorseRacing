<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.png"); ?>">

    <title><?php echo (isset($title) ? $title : ""); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/bootstrap-reset.css"); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css"); ?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style-responsive.css"); ?>" rel="stylesheet" />

    <!-- css js -->
    <?php 
        echo isset($p_custom_css) ? $p_custom_css : "";
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url("assets/js/html5shiv.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/respond.min.js"); ?>"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <?php echo form_open(base_url('admin/dashboard'), array('class' => "form-signin", 'id'	=>	'form')); ?>
        <h2 class="form-signin-heading"><?php echo $this->lang->line(LANG_TITE_SUPER_LOGIN); ?></h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line(LANG_USER); ?>" autofocus>
            <input type="password" class="form-control" placeholder="<?php echo $this->lang->line(LANG_PASS); ?>">
            <button class="btn btn-lg btn-login btn-block" type="submit"><?php echo $this->lang->line(LANG_LOGIN); ?></button>            
            <p>
            	<?php echo $this->lang->line(LANG_CHOOSE_LANG); ?>: <br />
            	<a href="#" class="btn"><?php echo $this->lang->line(LANG_EN); ?></a>
            	<a href="#" class="btn"><?php echo $this->lang->line(LANG_CN); ?></a>
            </p>
        </div>

       <?php echo form_close(); ?>

    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>

    <!-- custom js -->
    <?php 
        echo isset($p_custom_js) ? $p_custom_js : "";
    ?>

  </body>
</html>
