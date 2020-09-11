@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">
    {{ $todo->name }}
</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Description
            </div>
            <div class="card-body">
                {{ $todo->description }}
            </div>

        </div>
        <div class="d-flex">
            <a href="/todos/{{ $todo -> id }}/edit" class="btn btn-info btn-sm text-center my-3 mr-auto">Edit</a>
            <a href="/todos/{{ $todo -> id }}/delete" class="btn btn-danger btn-sm text-center my-3">Delete</a>

        </div>

    </div>

</div>
@endsection