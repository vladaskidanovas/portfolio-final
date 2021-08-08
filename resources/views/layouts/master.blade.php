<!DOCTYPE html>
<html lang="en">
    @include('includes.header')
<body class="mode-dark">

    <!-- Side navigation -->
    @include('includes.navigation')

    <!-- Page content -->
    <div class="main container mx-auto max-w-screen-lg">
        @yield('content')
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

@include('includes.footer')

</html>
