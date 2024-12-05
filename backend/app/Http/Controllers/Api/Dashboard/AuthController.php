<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request) {       
        $token = auth()->attempt($request->only('phone_no', 'password'));
        if (! $token) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }
        return response()->json([
            'success' => true,
            'message' => 'successfully login',
            'user' => auth()->user(),
            'token' => $token
        ], 200);
        // return $this->respondWithToken($token);
    }

    public function profile(){
        try{
            return response()->json([
                'success'   => true,
                'message'   => 'user profile',
                'data'      =>  User::where('users.id', auth()->id())
                                ->leftJoin('roles','roles.id','users.role_id')
                                ->first([
                                    'users.name',
                                    'users.phone_no',
                                    'roles.name as role_name',
                                    'users.contact_no',
                                    'users.address'
                                ])
            ]);
        }catch(\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }
    }
}
