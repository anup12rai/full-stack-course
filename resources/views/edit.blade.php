@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>Edit Task</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('tasks.update',$task->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- same fields -->

        </form>

    </div>

</div>

@endsection
