<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Mapas | Francisco Rivera</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="./index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b>de Mapas</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="./dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Francisco Rivera</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Francisco Rivera - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Francisco Rivera</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVEGACION PRINCIPAL</li>
         
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Administracion de Tablas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema de Mapas
        <small>Administracion de Tablas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
 <?php 
  ini_set('display_errors', 1);
  $mysqli = new mysqli('127.0.0.1','webaccess','webAxs20_','SistemaDeMapas');
  mysqli_set_charset($mysqli, 'utf8');
  
      
  
 

  ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- PAISES START-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Paises</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_paises" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>IDPais</th>
                  <th>NombrePais </th>
                  <th>Ubicacion</th>
                  <th>ExtensionTerritorial</th>
                </tr>
                </thead>
                <tbody>
                <?php $result = $mysqli->query("select * from Pais");
                    $data = array();
                    while($row = $result->fetch_assoc()){?>
                <tr>
                  <td><?echo $row['IDPais'] ?> </td>
                  <td><?echo $row['NombrePais'] ?> </td>
                  <td><?echo $row['Ubicacion'] ?> </td>
                  <td><?echo $row['ExtensionTerritorial'] ?> </td>
                </tr>
                  <?php }?>
                </tbody>
                <tfoot>
                <tr>
                   <th>IDPais</th>
                  <th>NombrePais </th>
                  <th>Ubicacion</th>
                  <th>ExtensionTerritorial</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- PAISES END-->
 

          <!-- ESTADO START-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Estados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_estados" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>IDEstado</th>
                  <th>IDPais</th>
                  <th>NombreEstado</th>
                  <th>Ubicacion</th>
                  <th>ExtensionTerritorial</th>

                </tr>
                </thead>
                <tbody>
                <?php $result = $mysqli->query("select * from Estado");
                    $data = array();
                    while($row = $result->fetch_assoc()){?>
                <tr>
                  <td><?echo $row['IDEstado'] ?> </td>
                  <td><?echo $row['IDPais'] ?> </td>
                  <td><?echo $row['NombreEstado'] ?> </td>
                  <td><?echo $row['Ubicacion'] ?> </td>
                  <td><?echo $row['ExtensionTerritorial'] ?> </td>
                                    
                </tr>
                  <?php }?>
                </tbody>
                <tfoot>
                <tr>

                  <th>IDEstado</th>
                  <th>IDPais</th>
                  <th>NombreEstado</th>
                  <th>Ubicacion</th>
                  <th>ExtensionTerritorial</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- ESTADO END-->


          <!-- AUTORES START-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Autores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_autores" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>IDAutor</th>
                  <th>Nombre</th>
                  <th>FechaNacimiento</th>
                  <th>Telefono</th>
                  <th>Direccion</th>

                </tr>
                </thead>
                <tbody>
                <?php $result = $mysqli->query("select * from Autores");
                    $data = array();
                    while($row = $result->fetch_assoc()){?>
                <tr>
                  <td><?echo $row['IDAutor'] ?> </td>
                  <td><?echo $row['Nombre'] ?> </td>
                  <td><?echo $row['FechaNacimiento'] ?> </td>
                  <td><?echo $row['Telefono'] ?> </td>
                  <td><?echo $row['Direccion'] ?> </td>
                                    
                </tr>
                  <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>IDAutor</th>
                  <th>Nombre</th>
                  <th>FechaNacimiento</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- AUTORES END-->


          <!-- CLIMAS START-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Climas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_climas" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>IDEstado </th>
                  <th>Tipo De Clima </th>
                  <th>Promedio Primavera </th>
                  <th>Promedio Verano </th>
                  <th>Promedio Otono </th>
                  <th>Promedio Invierno </th>
                  <th>Temperatura Alta Record </th>
                  <th>Fecha Temperatura Alta Record </th>
                  <th>Temperatura Baja Record </th>
                  <th>Fecha Temperatura Baja Record</th>
                </tr>
                </thead>
                <tbody>
                <?php $result = $mysqli->query("select * from Climas");
                    $data = array();
                    while($row = $result->fetch_assoc()){?>
                <tr>
                  <td><?echo $row['IDEstado'] ?> </td>
                  <td><?echo $row['TipoDeClima'] ?> </td>
                  <td><?echo $row['PromedioClimaPrimavera'] ?> </td>
                  <td><?echo $row['PromedioClimaVerano'] ?> </td>
                  <td><?echo $row['PromedioClimaOtono'] ?> </td>
                  <td><?echo $row['PromedioClimaInvierno'] ?> </td>
                  <td><?echo $row['TemperaturaAltaRecord'] ?> </td>
                  <td><?echo $row['FechaTemperaturaAltaRecord'] ?> </td>
                  <td><?echo $row['TemperaturaBajaRecord'] ?> </td>
                  <td><?echo $row['FechaTemperaturaBajaRecord'] ?> </td>
                                    
                </tr>
                  <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>IDEstado </th>
                  <th>Tipo De Clima </th>
                  <th>Promedio Primavera </th>
                  <th>Promedio Verano </th>
                  <th>Promedio Otono </th>
                  <th>Promedio Invierno </th>
                  <th>Temperatura Alta Record </th>
                  <th>Fecha Temperatura Alta Record </th>
                  <th>Temperatura Baja Record </th>
                  <th>Fecha Temperatura Baja Record</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- Climas END-->






          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  //   echo json_encode($data);
  $result->close();
  $mysqli->close(); 
  ?>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://www.linkedin.com/in/francisco-rivera-8a279297" target="_blank"> Francisco Rivera.</a></strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="./plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- page script -->
<script>


  $(document).ready( function() {
    $('#table_estados').dataTable( {
      "language": {
        "search": "Buscar:",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "lengthMenu": "Mostrar _MENU_ records"
        }
      });
    $('#table_paises').dataTable( {
      "language": {
        "search": "Buscar:",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "lengthMenu": "Mostrar _MENU_ records"
        }
      });
 $('#table_autores').dataTable( {
      "language": {
        "search": "Buscar:",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "lengthMenu": "Mostrar _MENU_ records"
        }
      }); 
 $('#table_climas').dataTable( {
      "language": {
        "search": "Buscar:",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "lengthMenu": "Mostrar _MENU_ records"
        }
      });

  } );//function end




 
</script>
</body>
</html>
