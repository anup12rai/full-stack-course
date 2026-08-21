<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Task Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand"
               href="{{ route('tasks.index') }}">
                Task Management
            </a>

            <a href="{{ route('tasks.create') }}"
               class="btn btn-success">
                Add Task
            </a>

        </div>
    </nav>


    <div class="container mt-4">

        @yield('content')

    </div>


    {{-- Success Popup --}}
    @if(session('success'))

        <div class="modal fade"
             id="successModal"
             tabindex="-1"
             aria-labelledby="successModalLabel"
             aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header bg-success text-white">

                        <h5 class="modal-title"
                            id="successModalLabel">
                            Success
                        </h5>

                        <button type="button"
                                class="btn-close btn-close-white"
                                data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body text-center">

                        <div class="fs-1 text-success mb-3">
                            ✓
                        </div>

                        <h5>
                            {{ session('success') }}
                        </h5>

                    </div>

                    <div class="modal-footer">

                        <button type="button"
                                class="btn btn-success"
                                data-bs-dismiss="modal">
                            OK
                        </button>

                    </div>

                </div>

            </div>

        </div>

    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>


    {{-- Automatically open success popup --}}
    @if(session('success'))

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const successModal =
                    new bootstrap.Modal(
                        document.getElementById('successModal')
                    );

                successModal.show();

            });
        </script>

    @endif

</body>

</html>
