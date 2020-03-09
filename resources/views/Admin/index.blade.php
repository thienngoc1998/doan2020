<!DOCTYPE html>
<html lang="en">
@include('Admin.layouts.header')
<body>
@include('Admin.layouts.navigation')
<div id="wrapper">
    <!-- Navigation -->
    @yield('content')
</div>
<!-- /#wrapper -->
@include('Admin.layouts.footer')
</body>
</html>

