<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function registerNewUser(Request $request) {
        $isUserExists = User::where('username', '=', $request->username)->first();

        if ($isUserExists) {
            return response() -> json(['error' => true, 'data' => 'Username already registered'], 400);
        }

        $newUser = new User;
        $newUser->username = $request->username;
        $newUser->password = app('hash')->make($request->password);

        $newUser->save();

        return response() -> json(['error' => false, 'success' => true]);
    }
}
