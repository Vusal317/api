<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    public function postLogin(){
        
        $username = Input::get('v_username');
        $password = Input::get('v_password');
        
       $user_id=DB::select(DB::raw("SELECT dbo.SF_USER_ID_CHECK('{$username}', '{$password}') AS result"));
       return  Response::json($user_id);
    }
    
    public function getUserInfo($id){
        
         $user=DB::select(DB::raw("SELECT * from dbo.FN_USER_DATA('{$id}')"));
         
         $user_info = Response::json($user)->header('Content-Type', 'application/json');  
         return $user_info;     
    }
    
    
    
    public function custList($id){
         $custList=DB::select(DB::raw("SELECT * from dbo.FN_WS_CUST_LIST('{$id}')"));
         $data = Response::json($custList)->header('Content-Type', 'application/json');  
         return $data; 
    }
    
    
    public function codesByCat (){
        
        $codesByCat=DB::select(DB::raw("SELECT * from dbo.FN_UNI_ANL_CODES_BY_CAT(20)"));
         $data = Response::json($codesByCat)->header('Content-Type', 'application/json');  
         return $data;
    }
    
    
    
    public function postAdd(){
        
    
         
         $ADDER_TYPE   = strip_tags(Input::get('ADDER_TYPE'));   
         $USER_ID      = strip_tags(Input::get('USER_ID'));   
         $TELEPHONE_NO = strip_tags(Input::get('TELEPHONE_NO'));
         $ADDR_LINE_1  = strip_tags(Input::get('ADDR_LINE_1'));   
         $ADDR_LINE_2  = strip_tags(Input::get('ADDR_LINE_2'));   
         $TOWN_CITY    = strip_tags(Input::get('TOWN_CITY'));   
         $CMMNT        = strip_tags(Input::get('CMMNT'));   
         $NAME         = strip_tags(Input::get('NAME'));  
         
         
         
//        @USER_ID				INT,
//	@TELEPHONE_NO			NVARCHAR(50), - Phone
//	@NAME				NVARCHAR(50), - Person Name
//	@POSITION				NVARCHAR(50), - Position
//	@MOBILE_PHONE			NVARCHAR(50), - Mobile Phone
//	@CMMNT				NVARCHAR(255), - Comment
//	@EMAIL				NVARCHAR(124) - Email
         
         
         
                
        
        
        
        
    }
    
    
    
}
