<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('titulo') | Mosquera Abogados</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('selector/estilos.css') }}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{ asset ('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('perfil_usuario')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-gavel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MOSQUERA ABOGADOS<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Gestión de Usuarios
      </div>
      <!-- USUARIO-->
      <li class="nav-item @yield("resaltar-usuarios")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usuarios" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          <span>Usuarios</span>
        </a>
        <div id="usuarios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-registrarUsuario")" href="{{ route('registrarUsuario') }}">Registrar Usuario</a>
            <a class="collapse-item @yield("resaltar-listarUsuarios")" href=" {{ route('listarUsuarios') }} ">Listar Usuarios</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">Procesos Judiciales</div>

      <!-- CASOS-->
      <li class="nav-item @yield("resaltar-casos")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#casos" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-briefcase"></i>
          <span>Casos</span>
        </a>
        <div id="casos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-registrarCaso")" href="{{route('registrarCaso')}}">Registrar Caso</a>
            <a class="collapse-item @yield("resaltar-listarCasos")" href="{{route('listarCasos')}}">Listar Casos</a>
          </div>
        </div>
      </li>

      <!-- DOCUMENTOS -->
      <li class="nav-item @yield("resaltar-documentos-casos")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#documentos" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Documentación Casos</span>
        </a>
        <div id="documentos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-subirDocumento")" href="{{route('subirDocumento')}}">Subir Documento</a>
            <a class="collapse-item @yield("resaltar-listarDocumentos")" href="{{route('listarDocumentos')}}">Listar Documentos</a>
          </div>
        </div>
      </li>

      <!-- TIPOS DOCUMENTOS -->
      <li class="nav-item @yield("resaltar-tipos-documentos")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tipodocumentos" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-file"></i>
          <span>Tipos de Documentos</span>
        </a>
        <div id="tipodocumentos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-crearTipoDocumento")" href="{{route('crearTipoDocumento')}}">Crear un tipo</a>
            <a class="collapse-item @yield("resaltar-listarTiposDocumentos")" href="{{route('listarTiposDocumentos')}}">Listar tipos <br> de documentos</a>
          </div>
        </div>
      </li>
      <!-- Ubicación Documentos -->
      <li class="nav-item @yield("resaltar-ubicacion-documentos")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ubicaciondocumentos" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-archive" aria-hidden="true"></i>
          <span>Ubicación Física</span>
        </a>
        <div id="ubicaciondocumentos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-crearUbicacion")" href="{{route('agregarUbicacion')}}">Agregar ubicación</a>
            <a class="collapse-item @yield("resaltar-listarUbicaciones")" href="{{route('listarUbicaciones')}}">Listar ubicaciones</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Clientes
      </div>
       <!-- CLIENTES -->
       <li class="nav-item @yield("resaltar-clientes")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientes" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Clientes</span>
        </a>
        <div id="clientes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-registrarCliente")" href="{{route('registrarCliente')}}">Registrar Cliente</a>
            <a class="collapse-item @yield("resaltar-listarClientes")" href="{{route('listarClientes','cliente')}}">Listar  Clientes</a>
          </div>
        </div>
      </li>

       <!-- CONTRAPARTE -->
       <li class="nav-item @yield("resaltar-contrapartes")">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contraparte" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Contrapartes</span>
        </a>
        <div id="contraparte" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @yield("resaltar-registrarContraparte")" href="{{route('registrarContraparte')}}">Registrar Contraparte</a>
            <a class="collapse-item @yield("resaltar-listarContrapartes")" href="{{route('listarContraparte','contraparte')}}">Listar  Contrapartes</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('perfil_usuario')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('seccion')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Smart Software Solutions</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Está listo para finalizar la sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"> Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancelar
          </button>
          <button class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Cerrar Sesion" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" type="button" data-dismiss="modal">
            Cerrar Sesión
          </button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>

  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') }}"></script>
  <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') }}" rel="stylesheet" /> 

<script type="application/javascript">
    $(document).ready(function() {
      $('.select2').select2({
        closeOnSelect: false
      });
    });
</script>

  <script>
    $('#fecha_inicio').datepicker({ 
      dateFormat: 'yy-mm-dd', 
      minDate: 0,
      changeMonth: true,
      changeYear: true
    }).val();
    $('#fecha_fin').datepicker({ 
      dateFormat: 'yy-mm-dd', 
      minDate: 1,
      changeMonth: true,
      changeYear: true
    }).val();
  </script>

  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
  </script>

</body>

</html>
