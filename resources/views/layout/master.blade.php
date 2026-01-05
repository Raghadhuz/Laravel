<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    @include('layout.sidebar')

    <div class="all-content-wrapper">
        @yield('content')
    </div>


    @include('layout.footer')
</body>
</html>
