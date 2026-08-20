@extends('layout')
@section('content')
<div class="mb-3">
    <label>Title</label>
    <input type="text"
           name="title"
           class="form-control"
           value="{{ old('title', $task->title ?? '') }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description"
              class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Status</label>

    <select name="status" class="form-select">
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
    </select>
</div>
@endsection
