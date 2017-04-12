<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Enel Villafranca" name="author" />
  <!-- fonts -->
  <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"/>
<!-- estilo global -->
  <link href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
  <link href="{{ asset('global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- estilo del tema -->
  <link href="{{ asset('layouts/layout6/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('layouts/layout6/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
  <title>Sistemas de Estudios Itheas</title>
</head>
<body class="page-md">
  <header class="page-header">
           <nav class="navbar" role="navigation">
               <div class="container-fluid">
                   <div class="havbar-header">
                       <!-- BEGIN LOGO -->
                       <a id="index" class="navbar-brand" href="start.html">
                           <img src="{{ asset('layouts/layout6/img/logo.png')}}" alt="Logo"> </a>
                       <!-- END LOGO -->
                       <!-- BEGIN TOPBAR ACTIONS -->
                       <div class="topbar-actions">
                           <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                           <form class="search-form" action="extra_search.html" method="GET">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search here" name="query">
                                   <span class="input-group-btn">
                                       <a href="javascript:;" class="btn md-skip submit">
                                           <i class="fa fa-search"></i>
                                       </a>
                                   </span>
                               </div>
                           </form>
                           <!-- END HEADER SEARCH BOX -->
                           <!-- BEGIN USER PROFILE -->
                           <div class="btn-group-img btn-group">
                               <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                   <img src="{{ asset('layouts/layout5/img/avatar1.jpg')}}" alt=""> </button>
                               <ul class="dropdown-menu-v2" role="menu">
                                   <li>
                                       <a href="page_user_login_1.html">
                                           <i class="icon-key"></i>Salir</a>
                                   </li>
                               </ul>
                           </div>
                           <!-- END USER PROFILE -->
                       </div>
                       <!-- END TOPBAR ACTIONS -->
                   </div>
               </div>
               <!--/container-->
           </nav>
       </header>
       <!-- END HEADER -->
       <!-- BEGIN CONTAINER -->
       <div class="container-fluid">
           <div class="page-content page-content-popup">
               <div class="page-content-fixed-header">
                   <!-- BEGIN BREADCRUMBS -->
                   <ul class="page-breadcrumb">
                       <li>
                           <a href="#">Dashboard</a>
                       </li>
                   </ul>
                   <!-- END BREADCRUMBS -->
                   <div class="content-header-menu">
                       <!-- BEGIN DROPDOWN AJAX MENU -->
                       <div class="dropdown-ajax-menu btn-group">
                           <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                               <i class="fa fa-circle"></i>
                               <i class="fa fa-circle"></i>
                               <i class="fa fa-circle"></i>
                           </button>
                           <ul class="dropdown-menu-v2">
                               <li>
                                   <a href="start.html">Application</a>
                               </li>
                               <li>
                                   <a href="start.html">Reports</a>
                               </li>
                               <li>
                                   <a href="start.html">Templates</a>
                               </li>
                               <li>
                                   <a href="start.html">Settings</a>
                               </li>
                           </ul>
                       </div>
                       <!-- END DROPDOWN AJAX MENU -->
                       <!-- BEGIN MENU TOGGLER -->
                       <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="toggle-icon">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </span>
                       </button>
                       <!-- END MENU TOGGLER -->
                   </div>
               </div>
               <div class="page-sidebar-wrapper">
                  <div class="page-sidebar navbar-collapse collapse">
                       <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                           <li class="nav-item start ">
                               <a href="{{ asset('dashboard')}}" class="nav-link nav-toggle">
                                   <i class="icon-home"></i>
                                   <span class="title">Dashboard</span>
                                   <span class="arrow"></span>
                               </a>
                           </li>
                           <li class="heading">
                               <h3 class="uppercase">Encuestas</h3>
                           </li>
                           <li class="nav-item">
                               <a href="javascript:;" class="nav-link nav-toggle">
                                   <i class="icon-docs"></i>
                                   <span class="title">Estudios</span>
                                   <span class="arrow"></span>
                               </a>
                               <ul class="sub-menu">
                                   <li class="nav-item">
                                       <a href="{{ asset('estudios/create')}}" class="nav-link ">
                                           <i class="icon-clock"></i>
                                           <span class="title">Agregar Estudios</span>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ asset('estudios')}}" class="nav-link ">
                                           <i class="icon-clock"></i>
                                           <span class="title">Datos Personales</span>
                                       </a>
                                   </li>
                               </ul>
                                <li class="heading">
                                   <h3 class="uppercase">Clientes</h3>
                               </li>
                               <li class="nav-item  ">
                                   <a href="javascript:;" class="nav-link nav-toggle">
                                       <i class="icon-docs"></i>
                                       <span class="title">Apps</span>
                                       <span class="arrow"></span>
                                   </a>
                                   <ul class="sub-menu">
                                       <li class="nav-item  ">
                                           <a href="app_todo.html" class="nav-link ">
                                               <i class="icon-clock"></i>
                                               <span class="title">Todo 1</span>
                                           </a>
                                       </li>
                                   </ul>
                           <li class="heading">
                               <h3 class="uppercase">Usuarios</h3>
                           </li>
                           <li class="nav-item  ">
                               <a href="javascript:;" class="nav-link nav-toggle">
                                   <i class="icon-docs"></i>
                                   <span class="title">Apps</span>
                                   <span class="arrow"></span>
                               </a>
                               <ul class="sub-menu">
                                   <li class="nav-item  ">
                                       <a href="app_todo.html" class="nav-link ">
                                           <i class="icon-clock"></i>
                                           <span class="title">Todo 1</span>
                                       </a>
                                   </li>
                               </ul>

                       </ul>
                       <!-- END SIDEBAR MENU -->
                   </div>
                   <!-- END SIDEBAR -->
               </div>
               <div class="page-fixed-main-content">
                   <!-- BEGIN PAGE BASE CONTENT -->
                   <div class="row">
                         @yield('content')
                  </div>
                   <!-- END PAGE BASE CONTENT -->
               </div>
               <!-- FOOTER -->
               <p class="copyright-v2"> 2017 &copy; Itheas.net By Enel Villafranca |
                   <a target="_blank" href="http://syscode.com.ve">Syscode</a>
                   </p>
               <a href="#index" class="go2top">
                   <i class="icon-arrow-up"></i>
               </a>
               <!-- END FOOTER -->
           </div>
       </div>
       <!-- END CONTAINER -->
  <div class="quick-nav-overlay"></div>
    <script src="{{ asset('global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('global/scripts/app.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('layouts/layout6/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
</body>
</html>
