<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // function to signup
    public function signup(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' =>'required|regex:/(.+)@(.+)\.(.+)/i|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        $token = $user->createToken('program_token')->plainTextToken;

        return response(['user' => $user,'token' => $token], 201);
    }


     // function to signin
    public function signin(Request $request) {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $data['email'])->first();

        // Check password
        if(!$user || !Hash::check($data['password'], $user->password)) {
            return response([
                'message' => 'Wrong Username and Password, please try again'
            ], 401);
        }

        $token = $user->createToken('program_token')->plainTextToken;

        return response(['user' => $user,'token' => $token], 201);
    }


    //function to signout
    public function signout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'User Sign out'
        ];
    }
}

