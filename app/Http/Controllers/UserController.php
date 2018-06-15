<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function createUser(Request $request)
    {
        $existingUser = DB::table('users')->where('email', $request->user_email)->first();

        if($existingUser == null){
            $user = new User();
            $user->name = $request->user_name;
            $user->email = $request->user_email;
            $user->password = $request->password;
            $user->save();

            return view('register-success', ['name' => $user->name]);
        }else{
            return view('home');
        }
    }

    public function getUser(Request $request)
    {
        $existingUser = DB::table('users')->where('email', $request->user_email)->first();

        if($existingUser){
            echo json_encode($existingUser);
        }else{
            return null;
        }
    }
}