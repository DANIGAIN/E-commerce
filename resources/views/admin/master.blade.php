<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('admin.include.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.include.nav')

  @include('admin.include.sid')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  @include('admin.include.content_header')

    @yield('content')
  </div>
  <!-- /.content-wrapper -->

   @include('admin.include.csid')

 @include('admin.include.footer')

 </div>

<!-- REQUIRED SCRIPTS -->
@include('admin.include.js')

</body>
</html>
