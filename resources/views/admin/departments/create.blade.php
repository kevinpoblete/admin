@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('admin.department.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" name="department" class="form-control" id="department" aria-describedby="departmentHelp" placeholder="Enter department">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
