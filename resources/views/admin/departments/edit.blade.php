@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('admin.department.update', [$department->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" name="department" class="form-control" id="department" aria-describedby="departmentHelp" value="{{ $department->department }}">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <div class="form-group">
                            <label for="department">Description</label>
                            <input type="text" name="description" class="form-control" id="department" aria-describedby="departmentHelp" value="{{ $department->description }}">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <button type="submit" class="btn btn-warning">Save</button>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
