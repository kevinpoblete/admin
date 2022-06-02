<?php

namespace App\Repositories\Admin;

use App\Department;

class DepartmentRepository{

    private $department;
    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function all(){
        return $departments = $this->department->orderBy('department', 'ASC')->get();
    }

    public function findById($id){
        return $this->department->where('id', $id)->firstOrFail();
    }

    public function store($department){
       return $this->department->create($department);
    }

    public function update($request, $department){
        $department = $this->findById($department);
        $department->update($request);    
    }

    public function destroy($department){
        $department = $this->findById($department);
        $department->delete();
    }

}