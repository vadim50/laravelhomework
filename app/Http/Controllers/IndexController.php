<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Log;
use App\Task;

class IndexController extends Controller
{
    //
    public function index($id=null){

    	if(isset($id)){
    		Task::where('id',$id)->increment('counter');
    		
    		Log::insert(['task_id'=>$id,'status'=>0]);
    	}
        $last = Log::orderBy('created_at','desc')
                ->where('status',0)
                ->first();
                
    	$tasks = Task::all();
        

        //dd($data);
    	
    	return view(env('THEME').'.index')->with('tasks',$tasks)->with('last',$last);
    }
    
    public function list(){

    	$logs = Log::orderBy('created_at','desc')->where('status',0)->get();

    	//dd($logs);

    	return view(env('THEME').'.list')->with('logs',$logs);

    }

    public function work($i=null){

        if(isset($i)){
            Log::where('id',$i)->update(['status'=>1]);

           $last = Log::orderBy('created_at','desc')
                ->where('status',0)
                ->first();
                
        $tasks = Task::all();
        

        //dd($data);
        
        return view(env('THEME').'.index')->with('tasks',$tasks)->with('last',$last);
        }



        
    }
}
