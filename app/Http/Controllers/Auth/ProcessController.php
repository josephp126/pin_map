<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Tutors;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session, Storage;

use App\Http\Requests;

class ProcessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function landing_site()
    // {
    //     return view('pages.landing_site');
    // }


    //show login form
    public function indexlogin()
    {
        return redirect('login');
    }

    //show homepage
    public function homepage(Request $request)
    {
        if(!$request->ajax()) {
            return view('pages.landing_page');
        }   
    }
    


    public function register_tutor()
    {
        //$country = DB::table('nationality')->get();
        $nationality_model = new Tutors();
        $country = $nationality_model->read_country();
        $alsospeak = $nationality_model->read_lang();
        $subject = $nationality_model->read_subject();
        $language = $nationality_model->read_language();

        $data['countries'] = $country;
        $data['alsospeaks'] = $alsospeak;
        $data['subjects'] = $subject;
        $data['languages'] = $language;
        return view('pages.register_tutor', $data);
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'tutor_name' => 'required',
            'tutor_country' => 'required',
            'tutor_also' => 'required',
            'tutor_major' => 'required',
            'tutor_tuition' => 'required|numeric',
            'tutor_character' => 'required',
            'tutor_des' => 'required',
            'fileUpload' => 'mimes:jpeg,jpg|required|max:3000',
        ]);
    
    
        //get input and store into variables
        $t_name = $request->tutor_name;
        $t_country = $request->tutor_country;
        $t_id = $request->tutor_id;
        $data = $request->tutor_also;
        $data['tutor_also'] = implode(',', $request->tutor_also);


        $t_major = $request->tutor_major;
        $t_tuition = $request->tutor_tuition;
        $t_character = $request->tutor_character;
        $t_option = $request->tutor_option;
        $t_des = $request->tutor_des;
        $file = $request->fileUpload;

        //create new object
        $inTutor = new Tutors();

        //set all input to insert to db
        $inTutor->name = $t_name;
        $inTutor->country = $t_country;
        $inTutor->also = $data['tutor_also'];
        $inTutor->major = $t_major;
        $inTutor->tuition = $t_tuition;
        $inTutor->character = $t_character;
        $inTutor->option = $t_option;
        $inTutor->des = $t_des;
        //$inTutor->id = $t_id;
        //save to db
        $inTutor->option = ($t_option == "on") ? 1 : 0;
        $inTutor->save();


        var_dump($inTutor->id);
        //upload photo
        //$path = $file->storeAs('images', $inTutor->id.'.jpg', 'public');


        if ($file) {
            $destinationPath = 'public/images/'; // upload path
            $imageName = $inTutor->id . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $imageName);
            $save['title'] = "$imageName";
        }


        //Session::flash('message', "Insert Tutor success!");

        $datas['t_data'] = $inTutor;

        return redirect('home');
    }


    public function general_search(Request $request)
    {
        $major = $request->major;
        $country = $request->country;
        $tuition = $request->tuition;
        $native_lang = $request->native_lang;
        $also = $request->also;
        $name = $request->name;
        $from = $request->from;
        $to = $request->to;
        $page = $request->page;
        $search = Tutors::where('major','like',"%$major%")->
                            where('country','like',"%$country%")->
                            where('native_language','like',"%$native_lang%")->
                            where('also','like',"%$also%")->
                            where('name','like',"%$name%")->
                            wherebetween('tuition',[$from,$to])->paginate(3);
                            
        $data = array(
            't_data' => $search,          
            //'page_index' => $page,
        );
        return view('pages.search_result',$data);
    }

   

}
