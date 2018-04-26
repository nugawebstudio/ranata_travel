<!DOCTYPE html>
<html>
<?php $this->load->view('templates/includes/head'); ?>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 <?php
  if ($navbar_top) {
      $this->load->view($navbar_top);
  }
  ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
  <?php
  if ($sidebar_menu) {
      $this->load->view($sidebar_menu);
  }
  ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fixed Layout
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol>
    </section>

    <!-- Main content -->
    <?php
    if (isset($content_view) && $content_view != "") {
        $this->load->view($content_view);
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018<a href="#"> &nbsp;PT Ranata Travel</a>.</strong> All rights
    reserved.
  </footer>

  <?php $this->load->view('templates/layouts/rightbar_settings') ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('templates/includes/foot_script'); ?>
</body>
</html>
