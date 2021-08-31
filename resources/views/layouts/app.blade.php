<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>@yield('title')</title>
	{{-- <link href="css/seu-stylesheet.css" rel="stylesheet"/> --}}
</head>
<body>
    <ul>
        <li><a href='{{route('home')}}'>Home</a></li>
        <li><a href='{{route('project.create')}}'>New Project</a></li>
    </ul>
    @yield('content')
</body>
</html>
