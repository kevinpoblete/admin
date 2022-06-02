<?php

namespace App\Repositories\Admin;

use App\Role;

class RoleRepository{

    private $role;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function all(){
        return $roles = $this->role->orderBy('role', 'ASC')->get();
    }

    public function findById($id){
        return $this->role->where('id', $id)->firstOrFail();
    }

    public function store($role){
       return $this->role->create($role);
    }

    public function update($request, $role){
        $role = $this->findById($role);
        $role->update($request);    
    }

    public function destroy($role){
        $role = $this->findById($role);
        $role->delete();
    }

}