<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        // return view('welcome');
        return view('welcome', ['users' => $users]);
    }
    public function create() {
        return view('add-user');
    }
    public function store(Request $request) {
        User::create($request->all());
        return redirect('/');
    }

    public function edit($id){
        $user = User::find($id);
        return view('edit-user', ['user' => $user ]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return back();
    }
}
