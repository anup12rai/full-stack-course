<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Task</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

    <!-- Navbar -->
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

            <div class="col-md-8 col-lg-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4">

                        <h2 class="fw-bold mb-1">
                            Add New Task
                        </h2>

                        <p class="text-muted mb-4">
                            Create a new task
                        </p>


                        @if($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <form
                            action="{{ route('tasks.store') }}"
                            method="POST"
                        >

                            @csrf


                            <!-- Title -->
                            <div class="mb-3">

                                <label class="form-label fw-semibold">
                                    Task Title
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    class="form-control"
                                    value="{{ old('title') }}"
                                    placeholder="Enter task title"
                                    required
                                >

                            </div>


                            <!-- Description -->
                            <div class="mb-3">

                                <label class="form-label fw-semibold">
                                    Description
                                </label>

                                <textarea
                                    name="description"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Enter task description"
                                >{{ old('description') }}</textarea>

                            </div>


                            <!-- Status -->
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Status
                                </label>

                                <select
                                    name="status"
                                    class="form-select"
                                >

                                    <option value="pending">
                                        Pending
                                    </option>

                                    <option value="completed">
                                        Completed
                                    </option>

                                </select>

                            </div>


                            <!-- Buttons -->
                            <div class="d-flex gap-2">

                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Create Task
                                </button>

                                <a
                                    href="{{ route('tasks.index') }}"
                                    class="btn btn-outline-secondary"
                                >
                                    Cancel
                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>
</html>
