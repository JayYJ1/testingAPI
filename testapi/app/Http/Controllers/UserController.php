<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as ResourcesUser;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {   
        return response()-> json([
            'users' => User::all()
        ], status: 200);

        // return ResourcesUser::collection(User::paginate(5));
    }

    public function show(User $user)
    {
        // return response() -> json([
        //     'user' => $user
        // ], status: 200);

        return new ResourcesUser($user);
    }
}
