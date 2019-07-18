<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(15);

        return new UserCollection($users);
    }

    public function store(Request $request) {
        try {
            $user = User::create($request->all());
        } catch(Exception $e){
            return $e->getMessage();   // error
        }

        return new UserResource($user);
    }

    public function show(User $user) {
        return new UserResource($user);
    }

    public function update(Request $request, User $user) {

    }

    public function destroy(User $user) {

    }
}
