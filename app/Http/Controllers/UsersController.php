<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUsersRequest;
use Session;
use App\User;
use Input;
use Hash;
use DB;

class UsersController extends Controller {

    public function index(Request $request) {
        $request->get('password');
        $users = User::search($request->get('search'))->orderBy('id', 'DESC')->paginate(3);
        $users->setPath('users');

        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(CreateUserRequest $request) {
        User::create($request->all());
        return redirect('users');
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(User $user, EditUsersRequest $request, $id) {

        $user = User::findOrFail($id);
        $newPassword = $request->get('password');

        if (empty($newPassword)) {
            $user->update($request->except('password'));
        } else {
            $user->update($request->all());
        }

        return redirect('users');
    }

    public function delete(User $user, $id) {
        
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('message', $user->username . 'fue eliminado correctamente');
        return redirect('users');
        
    }

    public function show($id) {
        $users = User::find($id)->first();
        return view('users.show', compact('users'));
    }

}
