@extends('layouts.app')

@section('content')

<h1 class="text-center my-5"> Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default shadow-sm">
            <div class="card-header">
                Create New Todo
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
                <form action="/save-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Todo Name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="Todo Description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
@endsection