<!DOCTYPE html>
<html lang="es">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="wrapper">
        @yield('main-content')

        @include('admin.layouts.footer')
    </div>
</body>
</html>