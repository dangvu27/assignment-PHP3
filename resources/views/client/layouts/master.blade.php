<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.layouts.partials.css')
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            @include('client.layouts.partials.header-topbar')

            @include('client.layouts.partials.header-mobile')

            <!--  -->
            @include('client.layouts.partials.header-logo')

            <!--  -->
            @include('client.layouts.partials.header-nav')
        </div>
    </header>

    @include('client.layouts.partials.header-line')

    @yield('content')


    <!-- Footer -->
    <footer>
        @include('client.layouts.partials.footer')
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>

    @include('client.layouts.partials.js')

</body>

</html>