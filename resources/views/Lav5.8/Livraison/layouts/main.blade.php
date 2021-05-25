<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('livraison/style.css') }}">
	<title>@yield('title')</title>
</head>
<body>
@include('Livraison.layouts.navbar')
@yield('content')
@yield('footer-customize')
</body>
@yield('lib-jquery-customize')
</html>
