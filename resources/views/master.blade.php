<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
</head>
<body>
    <nav class="my-custom-bg">
        <div class="logo">
            <h2><i class="fas fa-user-employee"></i>Admin Employee</h2>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('employees.create') }}" class="nav-link">Employee Create</a></li>
            <li><a href="{{ route('employees.show') }}" class="nav-link">Employee Show</a></li>
            <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
        </ul>
    </nav>
    @yield('content');
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>