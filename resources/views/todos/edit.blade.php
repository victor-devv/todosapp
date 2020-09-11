@extends('layouts.app')

@section('content')

<h1 class="text-center my-5"> Edit Todo</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default shadow-sm">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/todos/{{ $todo->id }}/update-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Todo Name" value="{{ $todo->name}}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="Todo Description">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
@endsection