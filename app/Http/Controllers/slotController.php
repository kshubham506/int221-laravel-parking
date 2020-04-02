<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class slotController extends Controller
{
 
   public function leave(Request $req){
       $err="";
            $uid=$req->session()->get("uid"); 
            $res=DB::update("update user_det set slot=slot-1 where uid='admin@admin.com';");
           if($res!=null){
               $res1=DB::update("update user_det set slot=0,time=0 where uid='$uid';");
               if($res1!=0){
                   
               }else{
                   $err="Internal error while user set";
               }
           }
           else{
               $err="Internal error ";
           }
            return $this->gotodashboard($uid,$err);
       }
    
    public function choose(Request $req){
        $err="";
            $uid=$req->session()->get("uid");
                $result1 = DB::select("select slot from user_det where uid ='admin@admin.com'");
                $occupied=$result1[0]->{"slot"};
                if($occupied<10){
                    $res=DB::update("update user_det set slot=slot+1 where uid='admin@admin.com';");
                    if($res!=null){
                        $time=time();
                        
                        $res1=DB::update("update user_det set slot=$occupied+1,time=$time where uid='$uid';");
                        if($res1!=null){
                           return $this->gotodashboard($uid,$err);
                        }
                        else{
                            $err="Error while reserving slot.";
                            //echo "internal Error While Reserving";
//                             return $this->gotodashboard($uid,$err);
                        }
                    
                    }
                    else{
                        $err ="Interbal Error";
                       // echo "internal Error";
//                         return $this->gotodashboard($uid,$err);
                    }
                }
                else{
                    $err= "No Slots available.";
                    //echo "internal Error No Slots";
                    
                }
                return $this->gotodashboard($uid,$err);
           
    }
    
    
     public function gotodashboard($uid,$err){
            if($uid !=null ){
               $results = DB::select("select slot,time from user_det where uid ='$uid'");
                $result1 = DB::select("select slot from user_det where uid ='admin@admin.com'");
                if($results!=null && $result1!=null){
                    $slot=$results[0]->{"slot"};
                    $time=$results[0]->{"time"};
                    $occupied=$result1[0]->{"slot"};

                    $data=['slot'=>$slot,'time'=>$time,'occupied'=>$occupied,'err'=>$err];
                    return redirect('/dashboard')->with('data', $data);
//                    return view('dashboard',['data'=>$data]);                
                }
                else{
                    $err="Database Error! Login Again";
                    return view('index',['data'=>$err]);  
                }
            }
        else{
            $err="Session Error! Login Again";
            return view('index',['data'=>$err]);  
        }
   
    }
}
