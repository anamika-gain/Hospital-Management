<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use DataTables;
use Hash;
class ReferralController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('role_id',"=",3)->get();

        return view('referral.index',compact('users'));
    }

    public function allreferlist(){
        $users = DB::table('users')->where('role_id',"=",3)->get(['name','id']);
        return $users;
    }
    public function allreferrals()
    {
        $users = DB::table('users')->where('role_id',"=",3)->get();
 
         return DataTables::of($users)
            ->addIndexColumn()
            ->editColumn('status', function ($data) {
                if ($data->status==1) {
                    return '<span class="badge badge-success">active</span>';
                
                } else {
                    return '<span class="badge badge-danger">deactive</span>';
                }
            })
            ->editColumn('mobile', function ($data) {
                return '<a  href="tel:'.$data->mobile.'">'.$data->mobile.'</a>';
            })
            ->addColumn('action', function ($data) {
                $action = '<button type="button" class="edit-referrals btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
                $action .= ' <button type="button" class=" delete-referrals btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
                return $action;
            })
            ->rawColumns(['mobile','status','action'])
            ->toJson();
    }
    public function create()
    {
        

        // $consumers = Consumer::all();

        // return response()->json($consumers);
       
    }


    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'mobile' => 'required',
            'password'=> 'required',
        ]);

        $referral = new User();
        $referral->name =$request->name;
        $referral->role_id =3;
        $referral->email= $request->email;
        $referral->gender= $request->gender;
        $referral->mobile= $request->mobile;
        $referral->address= $request->address;
        $referral->password= Hash::make($request->password);
        $referral->status= $request->status;
        $referral->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function edit($id)
    {
        $referral=User::find($id);

        if($referral){
         return response()->json([
                'status' =>200,
                'referral'=>$referral,
            ]);
        }
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'mobile' => 'required',
        ]);
        $referral=array();
        $referral['name'] =$request->name;
        $referral['gender']= $request->gender;
        $referral['mobile']= $request->mobile;
        $referral['address']= $request->address;
        $referral['email']= $request->email;
        $referral['status']=$request->status;
        if(!empty($referral['password'])){
            $referral['password']=  Hash::make($request->password);
        }

        $update= DB::table('users')->where('id',$id)->update($referral);
    }

    function destroy($id)
    {
        $referral =DB::table('users')->where('id',"=",$id);
        return $referral->delete();
    }
}
