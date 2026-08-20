<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📋 Task Management System</h2>

        <a href="{{ route('tasks.create') }}"
           class="btn btn-success">
            + Add Task
        </a>
    </div>

    @yield('content')

</div>

</body>
</html>
