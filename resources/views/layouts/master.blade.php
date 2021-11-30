<!DOCTYPE html>
<html lang="en">
    @include('includes.header')
<body class="mode-dark">

    <!-- Side navigation -->
    @include('includes.navigation')

    <!-- Page content -->
    <div class="main">
        <div class="background-wrapper position-fixed">
            <img draggable="false" src="{{ asset('img/gradient.png') }}" alt="">
        </div>
        @yield('content')
    </div>

</body>

@include('includes.footer')

</html>
