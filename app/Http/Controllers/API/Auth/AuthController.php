<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd(auth('sanctum')->user());
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $data['email'])->first();
        if ($user) {
            if (Hash::check($data['password'], $user->password)) {
                $token = $user->createToken("user-token");

                return response()->json([
                    'status' => 'suceess',
                    'message' => 'logged in successfully',
                    'data' => [
                        // 'user' => $user,
                        'token' => $token->plainTextToken
                    ]
                ]);
            } else {
                return response()->json([
                    'status' => 'success',
                    'message' => 'worng user data',
                    'data' => [],
                ]);
            }
        } else {
            return response()->json([
                    'status' => 'success',
                    'message' => 'worng user data',
                    'data' => [],
                ]);
        }
    }
}
