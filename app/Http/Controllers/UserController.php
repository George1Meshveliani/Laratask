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

    /**
     * @param $token
     * @return mixed
     */
    public function userDetail($token) {
        $user = [];
        if($token != '') {
            $user = User::where('api_token', $token)->first();
            return $user;
        }
    }
}
