<?php
  //require '../aplicacion/reporte.php';
  //$cargar=new Reporte();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Editar Informacion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../../dist/css/skins/skin-red.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FINCA</b>GAN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FINCA</b>GAN</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
  
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> 
      
     
<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
    <li class="dropdown notifications-menu">
        
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-power-off"></i>
              <span class="label label-warning"></span>
            </a> 
            
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

   
  <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>Informacion Personal</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="infopersonal.php">Ver Informacion Personal</a></li>
            <li><a href="editarinfo.php">Editar Informacion</a></li>
          </ul>  
        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Registro Sacrificio</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../nacimientosacrificio/registrosacrificio.php">Registrar Sacrificio</a></li>   
          </ul>
            <a href="#"><i class="fa fa-edit"></i> <span>Produccion</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../produccion/registroproduccion.php">Registrar Produccion de Animal</a></li>  
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informacion 
        <small>Personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Informacion Personal</a></li>
        <li class="active">Editar Informacion</li>
      </ol>
    </section>
<section>
      
      </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese los datos en los campos para editarlos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="../../../controlador/editardatos.php" method="post" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre</label>
                   <input class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                  <label>Cedula</label>
                  <input class="form-control" name="cedula" placeholder="Ingrese su cedula" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telefono</label> 
                  <input class="form-control" name="telefono" placeholder="Ingrese su telefono" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                  <input class="form-control" type="date" name="fechanacimiento" step="1" min="1950-01-01" value="2019-01-01">
                </div>  
                </div>
                <div class="box-footer">
                <button type="submit" name="guardar" onclick="alert('Informacion almacenada correctamente')" class="btn btn-primary">Guardar</button>
                </div>    
            </form>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
      
      
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Proyecto AyD
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="https://ww2.ufps.edu.co">Universidad Francisco de Paula Santander</a>.</strong> Todos los derechos reservados.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>