<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * Get all users data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function allUsers() {
        $users = User::all();
        return response()->json([
            'data' => $users,
        ]);
    }
}
