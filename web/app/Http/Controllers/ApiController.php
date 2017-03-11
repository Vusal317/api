<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    public function postLogin(){
        
        $username ="anar.bayramov";// Input::get('user_name');
        $password ="2016";// Input::get('password');
        
       $user=DB::select(DB::raw("SELECT dbo.SF_USER_ID_CHECK('{$username}', '{$password}') AS result"));
       $user_id = Response::json(array(
            'error' => false,
            'user_id' => $user,
            'status_code' => 200
        ));
        return $user_id;
    }
}
