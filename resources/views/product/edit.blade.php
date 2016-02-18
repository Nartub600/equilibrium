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
            Editar producto <strong>{{ $product->nombre }}</strong>
            {{-- <small>Optional description</small> --}}
          </h1>
          {{-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol> --}}
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          <form class="form-horizontal" role="form" action="{{ url('product/update', $product->id) }}" method="post">
            <input type="hidden" name="_method" value="put" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="box-body">
              <div class="form-group">
                <label for="parent" class="col-sm-2 control-label">Categoría<p class="help-block">Ctrl o ⌘ para selección múltiple</p></label>
                <div class="col-sm-10">
                  <select multiple class="form-control" name="categories[]">
                    {{-- <option value="0">---</option> --}}
                    {!! $html !!}
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $product->nombre }}">
                </div>
              </div>
              <div class="form-group">
                <label for="barcode" class="col-sm-2 control-label">Código de barras</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="barcode" placeholder="Código de barras" value="{{ $product->barcode }}">
                </div>
              </div>
              <div class="form-group">
                <label for="marca" class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ $product->marca }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Fuente</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="fuente" placeholder="Fuente" value="{{ $product->fuente }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Denominación legal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="denominacion_legal" placeholder="Denominación legal" value="{{ $product->denominacion_legal }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Alimento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="alimento" placeholder="Alimento" value="{{ $product->alimento }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-10">
                  <select class="form-control" name="unidad">
                    <option value="">---</option>
                    <option {{ $product->unidad == 'kg' ? 'selected' : '' }} value="kg">kg</option>
                    <option {{ $product->unidad == 'g' ? 'selected' : '' }} value="g">g</option>
                    <option {{ $product->unidad == 'cm3' ? 'selected' : '' }} value="cm3">cm3</option>
                    <option {{ $product->unidad == 'ml' ? 'selected' : '' }} value="ml">ml</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Cantidad</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="cantidad" placeholder="Cantidad" value="{{ $product->cantidad }}">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Equivalencias</label>
                <?php $i = 1; ?>
                @foreach ($product->equivalences as $equivalence)
                <div>
                  <div class="col-sm-5 {{ ($i != 1 ? 'col-sm-offset-2' : '') }}" style="{{ ($i != 1 ? 'padding-top: 5px;' : '') }}">
                    <input type="text" class="form-control" name="equivalence[name][]" placeholder="Nombre" value="{{ $equivalence->name }}">
                  </div>
                  <div class="col-sm-5" style="{{ ($i != 1 ? 'padding-top: 5px;' : '') }}">
                    <input type="text" class="form-control" name="equivalence[amount][]" placeholder="Cantidad" value="{{ $equivalence->amount }}">
                  </div>
                </div>
                <?php $i++; ?>
                @endforeach
                <div style="display: none;">
                  <div class="equivalence-row">
                    <div class="col-sm-offset-2 col-sm-5" style="padding-top: 5px;">
                      <input type="text" class="form-control" name="equivalence[name][]" placeholder="Nombre">
                    </div>
                    <div class="col-sm-5" style="padding-top: 5px;">
                      <input type="text" class="form-control" name="equivalence[amount][]" placeholder="Cantidad">
                    </div>
                  </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10 agregar-equivalencia">
                  <p class="help-block"><a href="#" onclick="$('.equivalence-row').first().clone().insertBefore('.agregar-equivalencia'); return false;">Agregar equivalencia</a></p>
                </div>
              </div>

              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Calorías</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="calorias" placeholder="Calorías" value="{{ $product->calorias }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Calorias %</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="calorias_porcentaje" placeholder="Calorias %" value="{{ $product->calorias_porcentaje }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Hidratos</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="hidratos" placeholder="Hidratos" value="{{ $product->hidratos }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Azúcares</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="azucares" placeholder="Azúcares" value="{{ $product->azucares }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Sacarosa</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="sacarosa" placeholder="Sacarosa" value="{{ $product->sacarosa }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Polidextro</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="polidextro" placeholder="Polidextro" value="{{ $product->polidextro }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Almidón</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="almidon" placeholder="Almidón" value="{{ $product->almidon }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Polialcoholes</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="polialcoholes" placeholder="Polialcoholes" value="{{ $product->polialcoholes }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Fibra</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="fibra" placeholder="Fibra" value="{{ $product->fibra }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Proteínas</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="proteinas" placeholder="Proteínas" value="{{ $product->proteinas }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Grasas</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="grasas" placeholder="Grasas" value="{{ $product->grasas }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">AGS</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="ags" placeholder="AGS" value="{{ $product->ags }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">AGMI</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="agmi" placeholder="AGMI" value="{{ $product->agmi }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">AGPI</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="agpi" placeholder="AGPI" value="{{ $product->agpi }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Trans</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="trans" placeholder="Trans" value="{{ $product->trans }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Colesterol</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="colesterol" placeholder="Colesterol" value="{{ $product->colesterol }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">EPA</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="epa" placeholder="EPA" value="{{ $product->polialcoholes }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">DHA</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="dha" placeholder="DHA" value="{{ $product->dha }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Omega 3</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="omega_3" placeholder="Omega 3" value="{{ $product->omega_3 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Omega 6</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="omega_6" placeholder="Omega 6" value="{{ $product->omega_6 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Omega 9</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="omega_9" placeholder="Omega 9" value="{{ $product->omega_9 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Sodio</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="sodio" placeholder="Sodio" value="{{ $product->sodio }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Calcio</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="calcio" placeholder="Calcio" value="{{ $product->calcio }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Hierro</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="hierro" placeholder="Hierro" value="{{ $product->hierro }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Fósforo</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="fosforo" placeholder="Fósforo" value="{{ $product->fosforo }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Potasio</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="potasio" placeholder="Potasio" value="{{ $product->potasio }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Magnesio</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="magnesio" placeholder="Magnesio" value="{{ $product->magnesio }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Selenio</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="selenio" placeholder="Selenio" value="{{ $product->selenio }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Zinc</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="zinc" placeholder="Zinc" value="{{ $product->zinc }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina A MC</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_a_mc" placeholder="Vitamina A MC" value="{{ $product->vit_a_mc }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina A UI</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_a_ui" placeholder="Vitamina A UI" value="{{ $product->vit_a_ui }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina E MC</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_e_mc" placeholder="Vitamina E UI" value="{{ $product->vit_e_mc }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina E UI</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_e_ui" placeholder="Vitamina E UI" value="{{ $product->vit_e_ui }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina D</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_d" placeholder="Vitamina D" value="{{ $product->vit_d }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">B1</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="b1" placeholder="B1" value="{{ $product->b1 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">B2</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="b2" placeholder="B2" value="{{ $product->b2 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Niacina</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="niacina" placeholder="Niacina" value="{{ $product->niacina }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">B6</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="b6" placeholder="B6" value="{{ $product->b6 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">B9</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="b9" placeholder="B9" value="{{ $product->b9 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">B12</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="b12" placeholder="B12" value="{{ $product->b12 }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Vitamina C</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="vit_c" placeholder="Vitamina C" value="{{ $product->vit_c }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Índice glucémico</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="indice_glucemico" placeholder="Índice glucémico" value="{{ $product->indice_glucemico }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Alcohol</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="alcohol" placeholder="Alcohol" value="{{ $product->alcohol }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Calorías prov. del alcohol</label>
                <div class="col-sm-10">
                  <input type="number" step="0.001" class="form-control" name="calorias_alcohol" placeholder="Calorías prov. del alcohol" value="{{ $product->calorias_alcohol }}">
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripción">{{ $product->descripcion }}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="fuente" class="col-sm-2 control-label">Ingredientes</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name="ingredientes" placeholder="Ingredientes">{{ $product->ingredientes }}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nombre científico</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre_cientifico" placeholder="Nombre científico" value="{{ $product->nombre_cientifico }}">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Tags</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tags" placeholder="Tags" value="{{ $product->tags }}">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Otros nombres</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="otros_nombres" placeholder="Otros nombres" value="{{ $product->otros_nombres }}">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">RNPA</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="rnpa" placeholder="RNPA" value="{{ $product->rnpa }}">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">RNE</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="rne" placeholder="RNE" value="{{ $product->rne }}">
                </div>
              </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
          </form>
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
    <script src="{{ url('js/equilibrium.js') }}"></script>

  </body>
</html>
