<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class FrontController extends Controller
{
    public function index(){
    	return view("welcome");
    }

    public function contact(Request $request){
    	try{
    		$req_method = $request->method();
    		$payload = $request->all();

    		if($req_method === "POST"){
    			Session::flash('message', 'We have received your message, will contact you soon.'); 
                Session::flash('alert-class', 'alert-success'); 
               return redirect('/');
    		}
    	}
    	catch(Exception $e){
            $e->getMessage();
            Session::flash('message', 'Something went wrong. Please try again.'); 
            Session::flash('alert-class', 'alert-danger'); 
            return back();
        }
    }
}
