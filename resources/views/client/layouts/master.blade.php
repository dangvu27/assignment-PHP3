<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.layouts.partials.css')
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- @include('client.layouts.partials.header-topbar') -->

            @include('client.layouts.partials.header-mobile')

            <!--  -->
            @include('client.layouts.partials.header-logo')

            <!--  -->
            @include('client.layouts.partials.header-nav')
        </div>
    </header>


    @yield('content')


    <!-- Footer -->
    <footer>
        @include('client.layouts.partials.footer')
    </footer>

    @include('client.layouts.partials.js')

</body>

</html>