<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Properties;


class AdminController extends Controller
{
    public function propertiesList(Request $request){
        return view('pages.admin.properties_list');
    }

    public function propertiesCreate(Request $request){
        return view('pages.admin.properties_create');
    }

    public function userList(Request $request){
        return view('pages.admin.user_list');
    }

    public function createProperty(Request $request){
        // $request->validate([
        //     'file' => 'required|mimes:csv,txt,xlx,xls,pdf,png,jpg|max:2048'
        // ]);
        $files = [];
        $propertyModel = new Properties;
        foreach($request->file() as $file){
            array_push($files, $file);
        }
        if($request->file()) {
            if(count($files) >= 2){
                $mainFileName = time().'.'.$files[0]->getClientOriginalExtension();
                $nextFileName = (time()+1).'.'.$files[1]->getClientOriginalExtension();
                $mainFilePath = $files[0]->storeAs('', $mainFileName, 'public_uploads');
                $nextFilePath = $files[1]->storeAs('', $nextFileName, 'public_uploads');
            } else if(count($files) == 1){
                $mainFileName = time().'.'.$files[0]->getClientOriginalExtension();
                $nextFileName = time().'.'.$sfiles[0]->getClientOriginalExtension();
                $mainFilePath = $files[0]->storeAs('', $mainFileName, 'public_uploads');
                $nextFilePath = $mainFilePath;
            }
            $propertyModel->city = $request->city;
            $propertyModel->state = $request->state;
            $propertyModel->zipCode = $request->zipCode;
            $propertyModel->bedroom = $request->bedroom;
            $propertyModel->bath = $request->bath;
            $propertyModel->wifi = $request->wifi;
            $propertyModel->ac = $request->ac;
            $propertyModel->kitchen = $request->kitchen;
            $propertyModel->airbnb = $request->airbnb;
            $propertyModel->next_image = $nextFilePath;
            $propertyModel->main_image = $mainFilePath;
            $propertyModel->save();

            return back()
                    ->with('success','File has been uploaded.')
                    ->with('file', $mainFileName);
        }
    }
}