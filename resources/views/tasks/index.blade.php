<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Manager</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('tasks.index') }}">
                Task Manager
            </a>

            <a
                href="{{ route('tasks.create') }}"
                class="btn btn-light"
            >
                + Add Task
            </a>

        </div>
    </nav>


    <!-- Main Content -->
    <div class="container py-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="fw-bold mb-1">My Tasks</h1>

                <p class="text-muted mb-0">
                    Manage your tasks easily
                </p>
            </div>

            <a
                href="{{ route('tasks.create') }}"
                class="btn btn-primary"
            >
                + Create Task
            </a>

        </div>


        <!-- Success Message -->
        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        <!-- Validation Errors -->
        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        @if($tasks->count())

            <div class="row g-4">

                @foreach($tasks as $task)

                    <div class="col-md-6 col-lg-4">

                        <div class="card h-100 border-0 shadow-sm">

                            <div class="card-body d-flex flex-column">

                                <!-- Title + Status -->
                                <div class="d-flex justify-content-between align-items-start mb-3">

                                    <h5 class="card-title fw-bold mb-0">
                                        {{ $task->title }}
                                    </h5>

                                    @if($task->status === 'completed')

                                        <span class="badge bg-success">
                                            Completed
                                        </span>

                                    @else

                                        <span class="badge bg-warning text-dark">
                                            Pending
                                        </span>

                                    @endif

                                </div>


                                <!-- Description -->
                                <p class="card-text text-muted">

                                    {{ $task->description ?: 'No description provided.' }}

                                </p>


                                <!-- Created -->
                                <small class="text-muted mb-3">

                                    Created:
                                    {{ $task->created_at->format('M d, Y') }}

                                </small>


                                <!-- Buttons -->
                                <div class="mt-auto d-flex gap-2">

                                    <a
                                        href="{{ route('tasks.show', $task) }}"
                                        class="btn btn-outline-primary btn-sm"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ route('tasks.edit', $task) }}"
                                        class="btn btn-outline-secondary btn-sm"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('tasks.destroy', $task) }}"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this task?')"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <!-- Empty State -->
            <div class="card border-0 shadow-sm text-center">

                <div class="card-body py-5">

                    <h3 class="fw-bold">
                        No tasks yet
                    </h3>

                    <p class="text-muted">
                        Create your first task to get started.
                    </p>

                    <a
                        href="{{ route('tasks.create') }}"
                        class="btn btn-primary"
                    >
                        + Create Task
                    </a>

                </div>

            </div>

        @endif

    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>
</html>
