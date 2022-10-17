<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function index()
    {
        $hospital=DB::table('settings')->where('id',"=",1)->first();
        return view('setting.setting',compact('hospital'));
      
    }


    public function update(Request $request, $id)
    {
  
        $this->validate($request,[
            'hospital_name_en' => 'required',
            'hospital_name_bd' => 'required',
            'hospital_address' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'favicon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'phone' => 'required',
            'hotline' => 'required',

        ]);
       
      
        $test=array();
        $test['hospital_name_en'] =$request->hospital_name_en;
        $test['hospital_name_bd'] =$request->hospital_name_bd;
        $test['hospital_address'] =$request->hospital_address;
        $test['phone']=$request->phone;
        $test['hotline']=$request->hotline;
     
        $main_image = $request->file('logo');
        $imageName = $main_image->getClientOriginalName();
        $directory = 'public/asset/images/';
        $imageUrl = $directory . $imageName;
        $test['logo'] = "$imageUrl";

        $main_image = $request->file('icon');
         $imageName = $main_image->getClientOriginalName();
        $directory = 'public/asset/images/';
        $imageUrl = $directory . $imageName;
        $test['icon'] = "$imageUrl";

        $main_image = $request->file('favicon');
        $imageName = $main_image->getClientOriginalName();
        $directory = 'public/asset/images/';
        $imageUrl = $directory . $imageName;
        $test['favicon'] = "$imageUrl";

      //  dd($test);
        $update= DB::table('settings')->where('id',$id)->update($test);

    
        
        return Redirect()->back()->with('success','Information Updated Successfully');
    }
}
