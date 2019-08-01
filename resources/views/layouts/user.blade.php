<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>@yield('title')</title>
      <link rel="icon" type="image/png" sizes="960x942" href="{{ asset('client/assets/img/67262626_356486551706455_5514094570423451648_n.png') }}">
      <link rel="icon" type="image/png" sizes="960x942" href="{{ asset('client/assets/img/67262626_356486551706455_5514094570423451648_n.png') }}">
      <link rel="stylesheet" href="{{ asset('client/assets/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
      <link rel="stylesheet" href="{{ asset('client/assets/fonts/fontawesome-all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('client/assets/fonts/material-icons.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
      <link rel="stylesheet" href="{{ asset('client/assets/css/Data-Table-1.css') }}">
      <link rel="stylesheet" href="{{ asset('client/assets/css/Data-Table.css') }}">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('client/assets/css/Table-With-Search-1.css') }}">
      <link rel="stylesheet" href="{{ asset('client/assets/css/Table-With-Search.css') }}">

      <link rel="stylesheet" href="{{ Request::is('license') ? asset('client/assets/css/Studious-selectfile.css') : '' }}">
      <link rel="stylesheet" href="{{ Request::is('pay') ? asset('client/assets/css/Studious-selectfile.css') : '' }}">
      
   </head>
   <body>
      <div id="wrapper">
         <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
               <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                  <div class="container-fluid d-flex flex-column p-0">
                     <hr class="sidebar-divider my-0">
                     <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation">
                           <a class="nav-link {{ Request::is('/news') ? 'active' : '' }}" href="#"><i class="fas fa-newspaper"></i><span style="font-family: 'Roboto Condensed', sans-serif;"><strong>&nbsp;МЭДЭЭ МЭДЭЭЛЭЛ</strong></span></a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading">
                           <p class="mb-0" style="font-family: 'Roboto Condensed', sans-serif;">ОРОН НУТГИЙН САН<br></p>
                        </div>
                        <li class="nav-item" role="presentation">
                           <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fas fa-file-invoice"></i><span style="font-family: 'Roboto Condensed', sans-serif;">&nbsp;ТӨЛБӨР ШАЛГАХ</span></a>
                           <a class="nav-link {{ Request::is('license') ? 'active' : '' }}" href="/license"><i class="fas fa-paperclip"></i><span style="font-family: 'Roboto Condensed', sans-serif;"><strong>&nbsp;ЦАХИМ ЗӨВШӨӨРӨЛ</strong></span></a>
                           <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact"><i class="material-icons">contact_phone</i><span style="font-family: 'Roboto Condensed', sans-serif;">&nbsp;<strong>БИДЭНТЭЙ ХОЛБОГДОХ</strong></span></a>
                           <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about"><i class="material-icons">contacts</i><span style="font-family: 'Roboto Condensed', sans-serif;"><strong>&nbsp;БИДНИЙ ТУХАЙ</strong></span></a>
                        </li>
                        <hr class="sidebar-divider">
                     </ul>
                     <small class="form-text" style="color: rgb(255,255,255);font-family: 'Roboto Condensed', sans-serif;font-size: 17px;height: 29px;margin: -9px;width: 188px;opacity: 0.46;"><strong>© 2019 SHINEBAYR DEV</strong><br></small>
                     <div class="text-center d-none d-md-inline"></div>
                  </div>
               </nav>
            </div>
         </nav>
         <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
               <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                  <div class="container-fluid">
                     <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><img src="{{ asset('client/assets/img/67262626_356486551706455_5514094570423451648_n.png')}}" style="width: 69px;"><small class="form-text text-muted" style="width: 243px;height: 20px;margin: 9px;padding: -7px;font-family: 'Roboto Condensed', sans-serif;font-size: 15px;"><strong>ДАРХАН ОРОН НУТАГ ЗАМ ТЭЭВЭР</strong></small>
                     <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown no-arrow">
                           <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="/admin">
                           <span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: 'Roboto Condensed', sans-serif;"><strong>НЭВТРЭХ</strong></span>
                           </a>
                           <div
                              class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="/admin" style="font-family: 'Roboto Condensed', sans-serif;"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;<strong>Хөгжүүлэгч</strong></a></div>
                        </li>
                        </li>
                     </ul>
                  </div>
               </nav>
               @yield('content')
            </div>
         </div>
      </div>
      <script src="{{ asset('client/assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('client/assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
      <script src="{{ asset('client/assets/js/Table-With-Search.js') }}"></script>
      <script src="{{ asset('client/assets/js/theme.js') }}"></script>
      <script src="{{ asset('client/assets/js/main.js') }}"></script>
   </body>
</html>