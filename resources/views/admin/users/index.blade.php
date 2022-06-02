@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-5">
                            Name
                        </div>
                        <div class="col-md-5">
                            Role
                        </div>
                        <div class="col-md-2">
                            Action
                        </div>
                        
                    </div>
                    @foreach ($users as $user)
                        <div class="row">
                            <div class="col-md-5">
                                <a href="{{ route('admin.user.show', [$user->id]) }}">{{ $user->name }}</a>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('admin.user.edit', [$user->id]) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-md-1">
                                <form action="{{ route('admin.user.destroy', [$user->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Create User</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
