<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Hash;
class EmployeeController extends Controller
{   
    public function index()
    {
        $users = DB::table('users')->where('role_id',"=",2)->get();

        return view('employee.employee',compact('users'));
    }

    
    public function allemployees()
    {
   
        $users = DB::table('users')
        ->join('roles','users.role_id', 'roles.id')
        ->select('users.*','roles.name AS role')
        ->get();
 
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
                $action = '<button type="button" class="edit-employee btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
                $action .= ' <button type="button" class="delete-employee btn btn-danger btn-sm " value="'.$data->id.'">Delete</button>';
                return $action;
            })
            ->rawColumns(['mobile','status','action'])
            ->toJson();
    }
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'mobile' => 'required',
            'role_id' => 'required',
            'designation' => 'required',
            'password'=> 'required',
        ]);

        $employee = new User();
        $employee->name =$request->name;
        $employee->role_id =$request->role_id;
        $employee->designation =$request->designation;
        $employee->email= $request->email;
        $employee->gender= $request->gender;
        $employee->mobile= $request->mobile;
        $employee->address= $request->address;
        $employee->password=  Hash::make($request->password);
        $employee->status=1;
        $employee->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }
    public function edit($id)
    {
         $employee=User::find($id);

        if($employee){
         return response()->json([
                'status' =>200,
                'employee'=>$employee,
            ]);
        }
    }
    public function update(Request $request,$id){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' =>  'required|max:100',
            'role_id' => 'required',
            'designation' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
        ]);
        $employee=array();
        $employee['name'] =$request->name;
        $employee['gender']= $request->gender;
        $employee['role_id'] =$request->role_id;
        $employee['designation'] =$request->designation;
        $employee['mobile']= $request->mobile;
        $employee['address']= $request->address;
        $employee['email']= $request->email;
        $employee['status']=$request->status;
        // if(!empty($employee['password'])){
        //     $employee['password']=  Hash::make($request->password);
        // }

        $update= DB::table('users')->where('id',$id)->update($employee);
    }

    function destroy($id)
    {
        $employee =DB::table('users')->where('id',"=",$id);
        return $employee->delete();
    }
}
