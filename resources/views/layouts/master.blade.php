@includeIf('layouts.partials._head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('layouts.partials._navbar')

  <!-- Main Sidebar Container -->
    @include('layouts.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('flash::message')
    @yield('main')
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
@include('layouts.partials._footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('layouts.partials._script')
</body>
</html>
