<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.header')

</head>
<body>

    <!-- Side navigation -->
    @include('includes.sidebar')

    <!-- Page content -->
    <div class="main">
        @yield('content')
    </div>

</body>
</html>
