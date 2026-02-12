<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Student Management System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.students.index') }}">
            SMS Admin
        </a>
    </div>
</nav>

<div class="container">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Page Content --}}
    @yield('content')

</div>

</body>
</html>
