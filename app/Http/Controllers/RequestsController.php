<?php

namespace App\Http\Controllers;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use App\Models\requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class RequestsController extends Controller
{
   
 public function submit(TestRequest $request){

            $data = new requests();
            $data['manufacturer'] = $request->input('manufacturer');
            $data['price_from'] = $request->input('price_from');
            $data['price_to'] = $request->input('price_to');
            $data['spare_part'] = $request->input('spare_part');
            $data['user_email'] = $request->input('user_email');
           
        
            $data->save();
        
          
            return redirect()->back()->with('message', 'Вы успешно отправили запрос!');
    
 }
 public function index(){
            $user = DB::select('select * from requests WHERE user_email = "'. Auth::user()->email .'"');
             return view('requests', compact('user'));
    }
public function adminrequests(){

            
             $getrequests = DB::table('requests')
                            ->join('add_tasks','requests.spare_part', '=', 'add_tasks.spare_part')
                            ->select('requests.*','add_tasks.*')
                            ->where('requests.price_from','<','add_tasks.price')
                            ->where('add_tasks.price','<','requests.price_to')
                          
                            ->get();
                            
                            
             return view('adminrequests', compact('getrequests'));
    
    }

}
