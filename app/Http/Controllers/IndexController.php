<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexController extends Controller
{
    //
    public function index($id=null){

    	if(isset($id)){
    		DB::table('tasks')->where('id',$id)->increment('counter');
    		
    		DB::table('logs')->insert(['task_id'=>$id,'status'=>0]);
    	}
        $last = $logs = DB::table('logs')
                ->orderBy('created_at','desc')
                ->where('status',0)
                ->first();
                
    	$tasks = DB::table('tasks')->get();
        

        //dd($data);
    	
    	return view('site')->with('tasks',$tasks)->with('last',$last);
    }
    public function list(){

    	$logs = DB::table('logs')->orderBy('created_at','desc')->where('status',0)->get();

    	//dd($logs);

    	return view('list')->with('logs',$logs);

    }

    public function work($i=null){

        if(isset($i)){
            DB::table('logs')->where('id',$i)->update(['status'=>1]);

           $last = $logs = DB::table('logs')
                ->orderBy('created_at','desc')
                ->where('status',0)
                ->first();
                
        $tasks = DB::table('tasks')->get();
        

        //dd($data);
        
        return view('site')->with('tasks',$tasks)->with('last',$last);
        }



        
    }
}
