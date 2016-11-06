<!DOCTYPE html>
<html lang="en">
	<head>
	@include('includes.head')
	@yield('style')
	</head>
	<body data-spy="scroll" data-target=".top-menu">
		@include('includes.header')
		@yield('content')
		@include('includes.cart')
	</body>
</html>