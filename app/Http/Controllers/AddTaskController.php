<?php

namespace App\Http\Controllers;

use App\Models\AddTask;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AddTaskController extends Controller
{
    public function submit( TestRequest  $add){

        $data = new AddTask();
        $data['manufacturer'] = $add->input('manufacturer');
        $data['price'] = $add->input('price');
        $data['spare_part'] = $add->input('spare_part');
        $data['store_name'] =  Auth::user()->name;
       
    
        $data->save();
    
      
        return redirect()->back()->with('message', 'Вы успешно добавили товар!');

}

public function index(){
    $tasks = DB::select('select * from add_tasks WHERE store_name = "'. Auth::user()->name .'" ');
     return view('admin', compact('tasks'));

}

}