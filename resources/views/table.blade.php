@extends('layout')

@section('content')

<div class="card shadow border-0">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>

                        <td>
                            <strong>Complete Laravel Project</strong>
                        </td>

                        <td>
                            Create a Laravel CRUD application
                        </td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                In Progress
                            </span>
                        </td>

                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-info btn-sm">
                                    Show
                                </a>

                                <a href="#" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<nav class="mt-4">
    <ul class="pagination justify-content-center">

        <li class="page-item disabled">
            <a class="page-link">Previous</a>
        </li>

        <li class="page-item active">
            <a class="page-link">1</a>
        </li>

        <li class="page-item">
            <a class="page-link">2</a>
        </li>

        <li class="page-item">
            <a class="page-link">Next</a>
        </li>

    </ul>
</nav>

@endsection
