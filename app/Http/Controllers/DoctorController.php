<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Hash;
class DoctorController extends Controller
{
    
    public function index()
    {
        $users = DB::table('users')->where('role_id',"=",2)->get();

        return view('doctor.index',compact('users'));
    }
    public function alldoctorlist(){
        $users = DB::table('users')->where('role_id',"=",2)->get(['name','id']);
        return $users;
    }
    
    public function alldoctors()
    {
        $users = DB::table('users')->where('role_id',"=",2)->get();
 
         return DataTables::of($users)
            ->addIndexColumn()
            ->editColumn('status', function ($data) {
                if ($data->status==1) {
                    return '<button type="button" class="btn btn-outline-info  btn-sm">Active</button>';
                
                } else {
                    return '<button class="btn btn-outline-danger btn-sm">deactive</button>';
                }
            })
            ->editColumn('mobile', function ($data) {
                return '<a  href="tel:'.$data->mobile.'">'.$data->mobile.'</a>';
            })
            ->addColumn('action', function ($data) {
                $action = '<button type="button" class="edit-doctors btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
                $action .= ' <button type="button" class=" delete-doctors btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
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

        $doctor = new User();
        $doctor->name =$request->name;
        $doctor->role_id =2;
        $doctor->email= $request->email;
        $doctor->gender= $request->gender;
        $doctor->mobile= $request->mobile;
        $doctor->address= $request->address;
        $doctor->password=  Hash::make($request->password);
        $doctor->status=1;
        $doctor->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }
    public function edit($id)
    {
        $doctor=User::find($id);

        if($doctor){
         return response()->json([
                'status' =>200,
                'doctor'=>$doctor,
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
        $doctor=array();
        $doctor['name'] =$request->name;
        $doctor['gender']= $request->gender;
        $doctor['mobile']= $request->mobile;
        $doctor['address']= $request->address;
        $doctor['email']= $request->email;
        $doctor['status']=$request->status;
        if(!empty($doctor['password'])){
            $doctor['password']=  Hash::make($request->password);
        }

        $update= DB::table('users')->where('id',$id)->update($doctor);
    }

    function destroy($id)
    {
        $doctor =DB::table('users')->where('id',"=",$id);
        return $doctor->delete();
    }
}
