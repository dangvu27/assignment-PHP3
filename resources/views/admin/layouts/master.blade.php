<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title2')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin.layouts.partials.css')
</head>

<body>
    @include('admin.layouts.partials.left-panel')

    

    <div id="right-panel" class="right-panel">
        
        @include('admin.layouts.partials.header')
        
        @yield('content2')
        
        @include('admin.layouts.partials.footer')
</div>

    @include('admin.layouts.partials.js')
</body>
</html>
