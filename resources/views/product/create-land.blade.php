<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cómo Equilibrar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ url('adminlte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ url('adminlte/dist/css/skins/skin-blue.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('home') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>E</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Cómo</b>Equilibrar</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              {{-- <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu --> --}}

              <!-- Notifications Menu -->
              {{-- <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li> --}}
              <!-- Tasks Menu -->
              {{-- <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li> --}}
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  {{-- <img src="adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Usuario: <strong>{{ session('user')->username }}</strong></span>
                </a>
                <ul class="dropdown-menu" style="width: auto; min-width: auto;">
                  <!-- The user image in the menu -->
                  {{-- <li class="user-header">
                    <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li> --}}
                  <!-- Menu Body -->
                  {{-- <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> --}}
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    {{-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> --}}
                    <div class="pull-right">
                      <a href="{{ url('user/logout') }}" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              {{-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> --}}
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          {{-- <div class="user-panel">
            <div class="pull-left image">
              <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div> --}}

          <!-- search form (Optional) -->
          {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> --}}
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <!-- Optionally, you can add icons to the links -->
            @if (session('user')->group == 1)
            <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Usuarios</span></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('user/index') }}"><i class="fa fa-circle-o"></i>Índice</a></li>
                <li><a href="{{ url('user/create') }}"><i class="fa fa-circle-o"></i>Agregar</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Tips</span></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('tip/index') }}"><i class="fa fa-circle-o"></i>Índice</a></li>
                <li><a href="{{ url('tip/create') }}"><i class="fa fa-circle-o"></i>Agregar</a></li>
              </ul>
            </li>
            @endif
            <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Categorías</span></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('category/index') }}"><i class="fa fa-circle-o"></i>Índice</a></li>
                <li><a href="{{ url('category/create') }}"><i class="fa fa-circle-o"></i>Agregar</a></li>
              </ul>
            </li>
            <li class="active treeview"><a href="#"><i class="fa fa-link"></i> <span>Productos</span></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('product/index') }}"><i class="fa fa-circle-o"></i>Índice</a></li>
                <li><a href="{{ url('product/create') }}"><i class="fa fa-circle-o"></i>Agregar</a></li>
              </ul>
            </li>
            {{-- <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li> --}}
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Agregar producto
            {{-- <small>Optional description</small> --}}
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ url('product/toggleView') }}"><i class="fa fa-cog"></i> Cambiar vista</a></li>
            <!-- <li class="active">Here</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <style>
            .div-inline {
              display: inline;
            }
            .help-block {
              display: inline;
            }
            .form-control {
              width: auto;
              display: inline;
              margin-left: 3px;
              margin-right: 3px;
            }
            input[type=file] {
              display: inline;
            }
          </style>
          <!-- Your Page Content Here -->
          <form class="form-horizontal producto" role="form" action="{{ url('product/store') }}" method="post" sent="no">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body" style="white-space: nowrap; overflow: auto; display: flex;">

              <label for="parent" class="control-label">Categoría<br><p class="help-block" style="margin-left: 3px;">Ctrl o ⌘ para selección múltiple</p></label>
              <div class="div-inline">
                <select multiple class="form-control" name="categories[]">
                  {!! $html !!}
                </select>
              </div>

              <label for="name" class="control-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">

              <label for="name" class="control-label">Foto</label>
              <input type="file" class="form-control" name="foto" placeholder="Foto">

              <label for="barcode" class="control-label">Código de barras</label>
              <input type="text" class="form-control" name="barcode" placeholder="Código de barras">

              <label for="marca" class="control-label">Marca</label>
              <input type="text" class="form-control" name="marca" placeholder="Marca">

              <label for="fuente" class="control-label">Fuente</label>
              <input type="text" class="form-control" name="fuente" placeholder="Fuente">

              <label for="fuente" class="control-label">Denominación legal</label>
              <input type="text" class="form-control" name="denominacion_legal" placeholder="Denominación legal">

              <label for="fuente" class="control-label">Alimento</label>
              <input type="text" class="form-control" name="alimento" placeholder="Alimento">

              <label for="fuente" class="control-label">Unidad de medida</label>
              <select class="form-control" name="unidad">
                <option value="">---</option>
                <option value="kg">kg</option>
                <option value="g">g</option>
                <option value="cm3">cm3</option>
                <option value="ml">ml</option>
              </select>

              <label for="fuente" class="control-label">Cantidad</label>
              <input type="number" step="0.001" class="form-control" name="cantidad" placeholder="Cantidad">

              <label for="name" class="control-label">Equivalencias</label>
              <div class="div-inline equivalences">
                <p>
                  <input type="text" class="form-control" name="equivalence[name][]" placeholder="Nombre">
                  <input type="text" class="form-control" name="equivalence[amount][]" placeholder="Cantidad">
                </p>
              </div>
              <div style="display: none;">
                <p class="equivalence-row">
                  <input type="text" class="form-control" name="equivalence[name][]" placeholder="Nombre">
                  <input type="text" class="form-control" name="equivalence[amount][]" placeholder="Cantidad">
                </p>
              </div>
              <span class="agregar-equivalencia help-block" style="margin-right: 3px;">
                <a href="#" onclick="$('.equivalence-row').first().clone().appendTo($(this).parent().siblings('.equivalences')); return false;">Agregar equivalencia</a>
              </span>

              <label for="fuente" class="control-label">Calorías</label>
              <input type="number" step="0.001" class="form-control" name="calorias" placeholder="Calorías">

              <label for="fuente" class="control-label">Calorias %</label>
              <input type="number" step="0.001" class="form-control" name="calorias_porcentaje" placeholder="Calorias %">

              <label for="fuente" class="control-label">Hidratos</label>
              <input type="number" step="0.001" class="form-control" name="hidratos" placeholder="Hidratos">

              <label for="fuente" class="control-label">Azúcares</label>
              <input type="number" step="0.001" class="form-control" name="azucares" placeholder="Azúcares">

              <label for="fuente" class="control-label">Sacarosa</label>
              <input type="number" step="0.001" class="form-control" name="sacarosa" placeholder="Sacarosa">

              <label for="fuente" class="control-label">Polidextro</label>
              <input type="number" step="0.001" class="form-control" name="polidextro" placeholder="Polidextro">

              <label for="fuente" class="control-label">Almidón</label>
              <input type="number" step="0.001" class="form-control" name="almidon" placeholder="Almidón">

              <label for="fuente" class="control-label">Polialcoholes</label>
              <input type="number" step="0.001" class="form-control" name="polialcoholes" placeholder="Polialcoholes">

              <label for="fuente" class="control-label">Fibra</label>
              <input type="number" step="0.001" class="form-control" name="fibra" placeholder="Fibra">

              <label for="fuente" class="control-label">Proteínas</label>
              <input type="number" step="0.001" class="form-control" name="proteinas" placeholder="Proteínas">

              <label for="fuente" class="control-label">Grasas</label>
              <input type="number" step="0.001" class="form-control" name="grasas" placeholder="Grasas">

              <label for="fuente" class="control-label">AGS</label>
              <input type="number" step="0.001" class="form-control" name="ags" placeholder="AGS">

              <label for="fuente" class="control-label">AGMI</label>
              <input type="number" step="0.001" class="form-control" name="agmi" placeholder="AGMI">

              <label for="fuente" class="control-label">AGPI</label>
              <input type="number" step="0.001" class="form-control" name="agpi" placeholder="AGPI">

              <label for="fuente" class="control-label">Trans</label>
              <input type="number" step="0.001" class="form-control" name="trans" placeholder="Trans">

              <label for="fuente" class="control-label">Colesterol</label>
              <input type="number" step="0.001" class="form-control" name="colesterol" placeholder="Colesterol">

              <label for="fuente" class="control-label">EPA</label>
              <input type="number" step="0.001" class="form-control" name="epa" placeholder="EPA">

              <label for="fuente" class="control-label">DHA</label>
              <input type="number" step="0.001" class="form-control" name="dha" placeholder="DHA">

              <label for="fuente" class="control-label">Omega 3</label>
              <input type="number" step="0.001" class="form-control" name="omega_3" placeholder="Omega 3">

              <label for="fuente" class="control-label">Omega 6</label>
              <input type="number" step="0.001" class="form-control" name="omega_6" placeholder="Omega 6">

              <label for="fuente" class="control-label">Omega 9</label>
              <input type="number" step="0.001" class="form-control" name="omega_9" placeholder="Omega 9">

              <label for="fuente" class="control-label">Sodio</label>
              <input type="number" step="0.001" class="form-control" name="sodio" placeholder="Sodio">

              <label for="fuente" class="control-label">Calcio</label>
              <input type="number" step="0.001" class="form-control" name="calcio" placeholder="Calcio">

              <label for="fuente" class="control-label">Hierro</label>
              <input type="number" step="0.001" class="form-control" name="hierro" placeholder="Hierro">

              <label for="fuente" class="control-label">Fósforo</label>
              <input type="number" step="0.001" class="form-control" name="fosforo" placeholder="Fósforo">

              <label for="fuente" class="control-label">Potasio</label>
              <input type="number" step="0.001" class="form-control" name="potasio" placeholder="Potasio">

              <label for="fuente" class="control-label">Magnesio</label>
              <input type="number" step="0.001" class="form-control" name="magnesio" placeholder="Magnesio">

              <label for="fuente" class="control-label">Selenio</label>
              <input type="number" step="0.001" class="form-control" name="selenio" placeholder="Selenio">

              <label for="fuente" class="control-label">Zinc</label>
              <input type="number" step="0.001" class="form-control" name="zinc" placeholder="Zinc">

              <label for="fuente" class="control-label">Vitamina A MC</label>
              <input type="number" step="0.001" class="form-control" name="vit_a_mc" placeholder="Vitamina A MC">

              <label for="fuente" class="control-label">Vitamina A UI</label>
              <input type="number" step="0.001" class="form-control" name="vit_a_ui" placeholder="Vitamina A UI">

              <label for="fuente" class="control-label">Vitamina E MC</label>
              <input type="number" step="0.001" class="form-control" name="vit_e_mc" placeholder="Vitamina E UI">

              <label for="fuente" class="control-label">Vitamina E UI</label>
              <input type="number" step="0.001" class="form-control" name="vit_e_ui" placeholder="Vitamina E UI">

              <label for="fuente" class="control-label">Vitamina D</label>
              <input type="number" step="0.001" class="form-control" name="vit_d" placeholder="Vitamina D">

              <label for="fuente" class="control-label">B1</label>
              <input type="number" step="0.001" class="form-control" name="b1" placeholder="B1">

              <label for="fuente" class="control-label">B2</label>
              <input type="number" step="0.001" class="form-control" name="b2" placeholder="B2">

              <label for="fuente" class="control-label">Niacina</label>
              <input type="number" step="0.001" class="form-control" name="niacina" placeholder="Niacina">

              <label for="fuente" class="control-label">B6</label>
              <input type="number" step="0.001" class="form-control" name="b6" placeholder="B6">

              <label for="fuente" class="control-label">B9</label>
              <input type="number" step="0.001" class="form-control" name="b9" placeholder="B9">

              <label for="fuente" class="control-label">B12</label>
              <input type="number" step="0.001" class="form-control" name="b12" placeholder="B12">

              <label for="fuente" class="control-label">Vitamina C</label>
              <input type="number" step="0.001" class="form-control" name="vit_c" placeholder="Vitamina C">

              <label for="fuente" class="control-label">Índice glucémico</label>
              <input type="number" step="0.001" class="form-control" name="indice_glucemico" placeholder="Índice glucémico">

              <label for="fuente" class="control-label">Alcohol</label>
              <input type="number" step="0.001" class="form-control" name="alcohol" placeholder="Alcohol">

              <label for="fuente" class="control-label">Calorías prov. del alcohol</label>
              <input type="number" step="0.001" class="form-control" name="calorias_alcohol" placeholder="Calorías prov. del alcohol">

              <label for="fuente" class="control-label">Descripción</label>
              <div class="div-inline">
                <textarea class="form-control" rows="2" cols="30" name="descripcion" placeholder="Descripción"></textarea>
              </div>

              <label for="fuente" class="control-label">Ingredientes</label>
              <div class="div-inline">
                <textarea class="form-control" rows="2" cols="30" name="ingredientes" placeholder="Ingredientes"></textarea>
              </div>

              <label for="name" class="control-label">Nombre científico</label>
              <input type="text" class="form-control" name="nombre_cientifico" placeholder="Nombre científico">

              <label for="name" class="control-label">Tags</label>
              <input type="text" class="form-control" name="tags" placeholder="Tags">

              <label for="name" class="control-label">Otros nombres</label>
              <input type="text" class="form-control" name="otros_nombres" placeholder="Otros nombres">

              <label for="name" class="control-label">RNPA</label>
              <input type="text" class="form-control" name="rnpa" placeholder="RNPA">

              <label for="name" class="control-label">RNE</label>
              <input type="text" class="form-control" name="rne" placeholder="RNE">

            </div><!-- /.box-body -->

          </form>

          <p><a href="#" onclick="$('form.producto').last().after($('form.producto').first().clone()); scrollHelper(); return false;">Otro producto</a></p>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" id="btn_guardar">Guardar</button>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      {{-- <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer> --}}

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
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
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ url('adminlte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ url('adminlte/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('adminlte/dist/js/app.min.js') }}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->

    <script src="{{ url('js/jquery.form.min.js') }}"></script>

    <script>
      $(function () {
        $('#btn_guardar').one('click', btn_guardar_handler);

        function btn_guardar_handler(e) {
          e.preventDefault();

          $('input[name="last"]').remove();
          $('form.producto[sent="no"]').last().append('<input type=\'hidden\' name=\'last\' value=\'yes\' />');

          var form = $('form.producto[sent="no"]').first();

          form.ajaxSubmit({
            success: function(data) {
              if (data.status == 'ok') {
                  if(data.more == 'yes') {
                    form.attr('sent', 'yes');
                    $('#btn_guardar').one('click', btn_guardar_handler).trigger('click');
                  } else {
                    window.location = data.url;
                  }
              } else {
                alert(data.message);
                $('#btn_guardar').one('click', btn_guardar_handler);
              }
            }
          });
        }

      scrollHelper();

      });

      function scrollHelper() {
        $('.box-body').on('scroll', function(e){
          $('.box-body').scrollLeft($(this).scrollLeft());
        });
      }
    </script>

  </body>
</html>
