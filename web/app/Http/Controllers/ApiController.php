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
         

//         $SP_WS_ADDR = DB::statement(DB::raw('EXECUTE dbo.SP_WS_ADDR ?,?,?,?,?,?,?,?'),
//                 [$ADDER_TYPE, $USER_ID, $TELEPHONE_NO, $ADDR_LINE_1, $ADDR_LINE_2, $TOWN_CITY, $CMMNT , $NAME]);
//         
//         return dd($SP_WS_ADDR);
         

        
     //   $USER_ID              = strip_tags(Input::get('USER_ID'));   
         $PER_TELEPHONE_NO      = strip_tags(Input::get('PER_TELEPHONE_NO'));
         $PER_NAME              = strip_tags(Input::get('PER_NAME'));   
         $PER_POSITION          = strip_tags(Input::get('PER_POSITION'));   
         $PER_MOBILE_PHONE      = strip_tags(Input::get('PER_MOBILE_PHONE'));   
         $PER_CMMNT             = strip_tags(Input::get('PER_CMMNT'));   
         $PER_EMAIL             = strip_tags(Input::get('PER_EMAIL'));  
         
         
//         $SP_WS_CONTACTS = DB::statement(DB::raw('EXECUTE dbo.SP_WS_CONTACTS ?,?,?,?,?,?,?'),
//                 [$USER_ID, $PER_TELEPHONE_NO, $PER_NAME, $PER_POSITION, $PER_MOBILE_PHONE, $PER_CMMNT, $PER_EMAIL]);
//         
//         return dd($SP_WS_CONTACTS);
         
        
           
           //   $USER_ID         = strip_tags(Input::get('USER_ID'));   
         $CUST_PYMT_MTHD         = strip_tags(Input::get('CUST_PYMT_MTHD  '));
         $CUST_CMMNT             = strip_tags(Input::get('CUST_CMMNT'));   
         $CUST_NAME              = strip_tags(Input::get('CUST_NAME'));   
         $ANDROID_LOCATION       = strip_tags(Input::get('ANDROID_LOCATION'));   
         $PHOTO                  = strip_tags(Input::get('PHOTO'));   
         $WEEKDAY                = strip_tags(Input::get('WEEKDAY'));   
         
         
       
       // error  
         // $SP_WS_CUST_MAIN = DB::statement(DB::raw('EXECUTE dbo.SP_WS_CUST_MAIN ?,?,?,?,?,?,?'),
           //      [$USER_ID, $CUST_PYMT_MTHD, $CUST_CMMNT, $CUST_NAME, $ANDROID_LOCATION, $PHOTO, $WEEKDAY]);
         
//         return dd($SP_WS_CUST_MAIN);
         
         
         
         
          
//            $SP_WS_CUST_ADDR = DB::statement(DB::raw('EXECUTE dbo.SP_WS_CUST_ADDR ?,?'), [$USER_ID, $CUST_NAME]);
//            
//            return dd($SP_WS_CUST_ADDR);
         
         
//          $SP_WS_CUS_CONTACT = DB::statement(DB::raw('EXECUTE dbo.SP_WS_CUS_CONTACT ?'), [$USER_ID]);
//            
//            return dd($SP_WS_CUS_CONTACT);
         
         
          $ANL_CODE = strip_tags(Input::get('ANL_CODE')); 
          
          
//                   $SP_WS_CUST_ANL_CODE = DB::statement(DB::raw('EXECUTE dbo.SP_WS_CUST_ANL_CODE ?,?'), [$USER_ID,$ANL_CODE]);
//            
//            return dd($SP_WS_CUST_ANL_CODE);
   
    }
    
    
    
    public function custumer($cost_code){
        
      $custumer=DB::select(DB::raw("SELECT * FROM dbo.FN_WS_CUST_LOAD('{$cost_code}')"));
       return  Response::json($custumer);
    }
    
    
    public function sales($id){
        
      $sales = DB::select(DB::raw("SELECT * FROM dbo.FN_UNI_SO_LIST($id)"));
       return  Response::json($sales);
    }
    
    
}

         
         
         
                
        
        
        
        
    
    
    
    


