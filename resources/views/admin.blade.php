<!DOCTYPE html>
<html>
<head>
  @include('adminpartials._header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('adminpartials._topnav')
    <!-- Left side column. contains the logo and sidebar -->
@include('adminpartials._sidenav')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
 @include('adminpartials._footer')
</div>
 {{-- Include java script files --}}
@include('adminpartials._javascript')
</body>
</html>
