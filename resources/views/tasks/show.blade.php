<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $task->title }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary shadow-sm">

        <div class="container">

            <a
                href="{{ route('tasks.index') }}"
                class="navbar-brand fw-bold"
            >
                Task Manager
            </a>

        </div>

    </nav>


    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between align-items-start mb-4">

                            <h1 class="fw-bold">
                                {{ $task->title }}
                            </h1>

                            @if($task->status === 'completed')

                                <span class="badge bg-success fs-6">
                                    Completed
                                </span>

                            @else

                                <span class="badge bg-warning text-dark fs-6">
                                    Pending
                                </span>

                            @endif

                        </div>


                        <h6 class="text-muted">
                            Description
                        </h6>

                        <p class="fs-5 mb-4">
                            {{ $task->description ?: 'No description provided.' }}
                        </p>


                        <hr>


                        <p class="text-muted mb-4">

                            Created:
                            {{ $task->created_at->format('M d, Y h:i A') }}

                        </p>


                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('tasks.edit', $task) }}"
                                class="btn btn-primary"
                            >
                                Edit Task
                            </a>

                            <a
                                href="{{ route('tasks.index') }}"
                                class="btn btn-outline-secondary"
                            >
                                Back
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
