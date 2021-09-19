<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function login($device_id){
        Log::debug('rfergreg');
        Log::debug($device_id);
    }
}
