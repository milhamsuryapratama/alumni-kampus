<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?=base_url()?>assets/foto/logo/5cc25ceca1902.128px.ico" type="image/gif"> 
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>administrator/"><b>Admin Login Panel</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php if ($this->session->flashdata('resetPwdAdminSukses')) { ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        <?php echo $this->session->flashdata('resetPwdAdminSukses'); ?>
      </div>
    <?php } elseif ($this->session->flashdata('loginError')) { ?>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
        <?=$this->session->flashdata('loginError')?>
      </div>
    <?php } ?>
    <form action="<?=base_url()?>auth/adminLogin" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="has-feedback">
            <div class="form-group">
              <select class="form-control" name="lembaga">    
                <option value="admin">Admin</option>        
                <?php 
                foreach ($lembaga as $l) { ?>
                  <option value="<?=$l['id_lembaga_alumni']?>"><?=$l['nama_lembaga']?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login_button" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<script src="https://use.fontawesome.com/581d5d54d2.js"></script>
</body>
</html>
