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

    public function getUserByEmail(Request $request)
    {
        try {
            //todo: replace by User::find()
            $existingUser = DB::table('users')->where('email', $request->email)->first();
            if($existingUser){
                $existingUser->password = "xxx";
                echo json_encode([
                    'email'         => $request->email,
                    'userExists'    => true,
                    'user'          => $existingUser,
                ]);
            }else{
                echo json_encode([
                    'email'         => $request->email,
                    'userExists'    => false
                ]);
            }

        } catch (Exception $e) {
            echo json_encode([
                'email'         => $request->email,
                'userExists'    => false
            ]);
        }
//        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
//        exit();
    }
}