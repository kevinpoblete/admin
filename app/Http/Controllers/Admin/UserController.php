<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){
        $users = $this->userRepository->all();
        return view('admin.users.index', compact('users'));
        
    }

    public function show($user){
        $user = $this->userRepository->findById($user);
        dd($user->role());
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $user = $request->validated();
        $user = $this->userRepository->store($user);
        return redirect(route('admin.user.index'));
    }

    public function edit($user){
        $user = $this->userRepository->findById($user);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $user){
        $request = $request->validated();
        $user = $this->userRepository->update($request, $user);
        return redirect(route('admin.user.index'));

    }

    public function destroy($user){
        $this->userRepository->destroy($user);
        return redirect()->back();
    }


}
