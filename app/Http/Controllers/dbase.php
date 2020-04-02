<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class dbase extends Controller
{
    
  public function start(Request $req){
    
        if($req->session()->get("uid") !=null )
           return  $this->gotodashboard($req);
        else{
//            echo session()->get('data') ; 
            if (session()->get('data') !=null)
                return view('index',['data'=>session()->get('data')]);  
            else
                return view('index');
        }
            
    }
    
    public function logout(Request $req){
         $req->session()->flush();
        $req->session()->forget('uid');
        return redirect('/')->with('data', "Successfully Logged Out!");
            
    }
    
    public function signup(Request $req){
      $results = DB::select('select * from user_det where uid = :id', ['id' => $req['uid']]);
      if(sizeof($results)>0){
          $err="User already exists . Choose Login option!";             
      }
        else{
            $time=time();
            $r=DB::insert('insert into user_det (uid, pwd) values (?, ?)', [$req["uid"],$req["pwd"]]);
            if($r){
                $err="User account created succesfully";
            }
            else{
                $err="Internal Error";
            }
        }
        
     return view('signup',['data'=>$err]);
        
    }
    
    public function login(Request $req){
        $results = DB::select('select pwd from user_det where uid = ?', [$req['uid']]);
        
        if(count($results)>0){
                if($results[0]->{"pwd"}== $req["pwd"]){
                
                $req->session()->put('uid',$req["uid"]);
               return  $this->gotodashboard($req);
                
            }
            else{
                $err="Invalid Password! Try Again!"; 
//                return view('index',['data'=>$err]);   
            }
          }
        else{
            $err ="Account Does Not Exixt! Signup First. ";
//            return view('index',['data'=>$err]);   
        }
          
            return redirect('index')->with('data',$err); 
               
   }
    
    
    public function viewdashboard(Request $req){
        if($req->session()->get("uid") !=null && session()->get('data') !=null)
            return view('dashboard',['data'=>session()->get('data')]);                
        else
             return redirect('/')->with('data',"Session Error! Login Again");
    }
    
    public function gotodashboard(Request $req){
        if($req->session()->get("uid") !=null ){
           $results = DB::select('select slot,time from user_det where uid = ?', [$req->session()->get("uid")]);
            $result1 = DB::select("select slot from user_det where uid ='admin@admin.com'");
            if($results!=null && $result1!=null){
                $slot=$results[0]->{"slot"};
                $time=$results[0]->{"time"};
                $occupied=$result1[0]->{"slot"};

                $data=['slot'=>$slot,'time'=>$time,'occupied'=>$occupied];
//                return view('dashboard',['data'=>$data]);                
                return redirect("dashboard")->with('data',$data);
            }
            else{
                $err="Database Error! Login Again";
                return redirect('index')->with('data',$err);  
            }
        }
    else{
        $err="Session Error! Login Again";  
        return redirect('/')->with('data',$err);  
    }

}
    
    
    
    
   
          
}   
       
    


 