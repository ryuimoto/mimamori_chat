<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\User;
use Dotenv\Regex\Result;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginCheck($device_id){
        Log::debug($device_id);
        
        $result = [];

        // $device_id = 'gerger';

        $user = User::where('device_id',$device_id)->first();

        Log::debug($user);

        if(isset($user)){
            $result['status'] = true;
            $result['user'] = json_encode($user);

            return $result;
        }

        $result['status'] = false;
        return $result;

    }

    public function postLogin(Request $request){
        $result = [];

        $user = User::where('email',$request->email)
        ->where('password_raw',$request->password)->first();

        if(isset($user)){
            $user->login_status = true;
            $user->save();
        }

        Log::debug($user);

        $result['status'] = true;
        $result['user'] = json_encode($user);

        return $result;
    }
}
