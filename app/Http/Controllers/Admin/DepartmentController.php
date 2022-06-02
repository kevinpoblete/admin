<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Repositories\Admin\DepartmentRepository;

class DepartmentController extends Controller
{
    private $departmentRepository;
    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }
    
    public function index(){
        $departments = $this->departmentRepository->all();
        return view('admin.departments.index', compact('departments'));
    }

    public function show($department){
        $department = $this->departmentRepository->findById($department);
        dd($department);
    }

    public function create(){
        return view('admin.departments.create');
    }

    public function store(DepartmentRequest $request){
        $department = $request->validated();
        $department = $this->departmentRepository->store($department);
        return redirect(route('admin.department.index'));
    }

    public function edit($department){
        $department = $this->departmentRepository->findById($department);
        return view('admin.departments.edit', compact('department'));
    }

    public function update(DepartmentRequest $request, $department){
        $request = $request->validated();
        $department = $this->departmentRepository->update($request, $department);
        return redirect(route('admin.department.index'));

    }

    public function destroy($department){
        $this->departmentRepository->destroy($department);
        return redirect()->back();
    }
}
