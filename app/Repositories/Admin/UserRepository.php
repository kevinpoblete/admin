<?php

namespace App\Repositories\Admin;

use App\User;

class UserRepository{
    
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all(){
        return $user = $this->user->orderBy('name', 'ASC')->get();
    }

    public function findById($id){
        return $this->user->where('id', $id)->firstOrFail();
    }

    public function store($user){
       return $this->user->create($user);
    }

    public function update($request, $user){
        $user = $this->findById($user);
        $user->update($request);    
    }

    public function destroy($user){
        $user = $this->findById($user);
        $user->delete();
    }
}