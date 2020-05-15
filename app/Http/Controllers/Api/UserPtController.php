<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Admin;
use App\User;
use Carbon\Carbon;

class UserPtController extends Controller
{
    public $successStatus = 200;

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
//dd($request);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = \App\User::where('username', $request->username)->get()->first();
            $users = User::where('id', $user->id)->first();
            $isAdmin = $users->isAdmin;
            $api_token =  $users->api_token;
            $user_id = $users->id;
            $response = ['result' => 'success', 'data' => $api_token, 'isAdmin' => $isAdmin, 'user_id' => $user_id];
    }

    elseif (Auth::attempt(['email'=> $request->username, 'password' => $request->password])) {
        $user = \App\User::where('email', $request->username)->get()->first();
        $users = User::where('id', $user->id)->first();
        $isAdmin = $users->isAdmin;
        $api_token =  $users->api_token;
        // $user_id = $users->id;
        $response = ['result' => 'success', 'data' => $api_token, 'isAdmin' => $isAdmin, 'users' => $users];
    }

        else {
            $response = ['result' => 'false', 'data' => 'Record doesnt exists'];

}



        return response()->json($response, 201);
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
                }
        $input = $request->all();
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);
                $success['token'] =  $user->createToken('MyApp')-> accessToken;
                $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index(Request $request)
    {
        //$token = $request->header('Authorization');
        $user = User::where('isAdmin', '0')->get();

        $response = ['data' => $user];
        return response()->json($user, 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
