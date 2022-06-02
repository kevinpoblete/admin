@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($departments as $department)
                        <div class="row">
                            <div class="col-md-9">
                                <a href="{{ route('admin.department.show', [$department->id]) }}">{{ $department->department }}</a>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('admin.department.edit', [$department->id]) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-md-1">
                                <form action="{{ route('admin.department.destroy', [$department->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.department.create') }}" class="btn btn-primary">Add department</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
