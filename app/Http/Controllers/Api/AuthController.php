<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    use ApiResponse;

    public function login(Request $request)
    {

        try {
            $credentials = $request->only('email', 'password');

            if (!$token = auth('api')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $user = auth('api')->user();
        
            return response()->json([
                'token' => $token,
                'user' => $user,
              
            ]);

           
        } catch (\Throwable $th) {
            return "some things get wrong!!";
        }



    } // End of login

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // return response()->json([
        //     'message' => 'User created successfully',
        //     'user' => $user
        // ]);

        return $this->success($user, 'User created successfully');
    } // End of register

    public function logout(Request $request)
    {
            try {
                auth()->logout();

            } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return  response()->json(['some thing went wrongs']);
            }

            return  $this->success("Logged out successfully");
            
    } // End of logout

    public function refresh()
    {
        return response()->json([
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
} // End of controler 
