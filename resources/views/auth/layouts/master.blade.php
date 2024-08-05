<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title1')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('auth.layouts.partials.css')
</head>
<body>
	
	@yield('content1')
	

	<div id="dropDownSelect1"></div>
	
    @include('auth.layouts.partials.js')

</body>
</html>