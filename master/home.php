<?php require_once('session.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <a href="home.php" class="logo">
          <span class="logo-mini"><b></b></span>
          <span class="logo-lg"><b></b>LOGO</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>

      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
          <?php include_once('navigation.php'); ?>
          </ul>
        </section>
      </aside>


      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            <small>Welcome Administrator!</small>
          </h1>
        </section>

        <section class="content">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Home</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <button id="newLaun" type="button" class="btn btn-success btn-sm"> 
                New 
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
              </button>

              <button id="claim" type="button" class="btn btn-primary btn-sm">
                Claim
                <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
              </button>
              
              <button id="delLaun" type="button" class="btn btn-danger btn-sm">
                Delete
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button>
              <div id="table-laundry"></div>
            </div>
            <div class="box-footer">
            </div>
          </div>

        </section>
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        
        </div>
        <strong><a href="http://www.google.com">Shop</a>.</strong>
      </footer>

      <div class="control-sidebar-bg"></div>
    </div>

    <?php include_once('modal/change_password.php'); ?>
    <?php include_once('modal/msg.php'); ?>
    <?php include_once('modal/confirm.php'); ?>
    <?php include_once('modal/laundry.php'); ?>
    <?php include_once('script.php'); ?>
  </body>
</html>
