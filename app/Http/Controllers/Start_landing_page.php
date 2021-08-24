<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Artisan;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session, Storage;

use Notification;
use Mail;
use Auth;

use App\Notifications\MyFirstNotification;

use App\Http\Requests;
use App\Models\Pins;

class Start_landing_page extends Controller
{
    public function index()
    {
        $pins = Pins::with('user')->get();
        return view('pages.landing_page', ['pins' => $pins]);    
    }
    
    public function general_search_2(Request $request){   
        $name = $request->name;
        $data['t_data']=$name;
        var_dump($data); die();
        //return redirect('/home');
        return view('pages.home');
    }

    public function clearCache() {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('route:cache');
        $exitCode = Artisan::call('cache:clear');
        // return what you want
    }

    public function createPin(Request $request) {
        $pins = new Pins;
        $pins->user_id = Auth::user()->id;
        $pins->status = $request->status;
        $pins->name = $request->name;
        $pins->posLat = $request->posLat;
        $pins->posLng = $request->posLng;
        $pins->description = $request->description;
        
        $pins->save();
        return "success";
    }
    public function updatePin(Request $request) {
        $pins = Pins::where('name', $request->name)
                    ->update(['description' => $request->description]);
        return "success";
    }
    public function deletePin(Request $request) {
        $pins = Pins::where('name', $request->name)
                        ->delete();
        return "success";
    }
}   

