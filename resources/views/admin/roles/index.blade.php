@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($roles as $role)
                        <div class="row">
                            <div class="col-md-9">
                                <a href="{{ route('admin.role.show', [$role->id]) }}">{{ $role->role }}</a>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('admin.role.edit', [$role->id]) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-md-1">
                                <form action="{{ route('admin.role.destroy', [$role->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.role.create') }}" class="btn btn-primary">Add Role</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
