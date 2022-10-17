<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;
use DB;
use DataTables;
class ConsumersController extends Controller
{
    
    public function index()
    {
        $consumer = DB::table('consumers')->get();

        return view('patients.index',compact('consumer'));
    }
    public function allpatientlist()
    {
        $consumer = DB::table('consumers')->get(['name','id']);
 
        return $consumer;
    }
    
    public function allpatients()
    {
        $consumer = DB::table('consumers')->get();
 
        return DataTables::of($consumer)
            ->addIndexColumn()
            ->editColumn('status', function ($data) {
                if ($data->status==1) {
                    return '<button type="button" class="btn btn-outline-info  btn-sm">Active</button>';
                
                } else {
                    return '<button class="btn btn-outline-danger btn-sm">deactive</button>';
                }
            })
            ->editColumn('age', function ($data) {
                return $data->age.$data->prefix;
            })
            ->addColumn('action', function ($data) {
                $action = '<button type="button" class="edit-patients btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
                $action .= ' <button type="button" class=" delete-patients btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
                return $action;
            })
            ->rawColumns(['age','status','action'])
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
            'address' =>  'required|max:100',
            'gender' => 'required',
            'age' => 'required',
            'prefix' => 'required',
            'mobile' => 'required',
        ]);

        $patient = new Consumer();
        $patient->name =$request->name;
        $patient->role_id =1;
        $patient->age =$request->age;
        $patient->prefix =$request->prefix;
        $patient->gender= $request->gender;
        $patient->mobile= $request->mobile;
        $patient->address= $request->address;
        $patient->status=1;
        $patient->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

   
    public function show(Consumers $consumers)
    {
        return $consumers;

    }

  
    public function edit($id)
    {
        $patient=Consumer::find($id);

        if($patient){
         return response()->json([
                'status' =>200,
                'patient'=>$patient,
            ]);
        }
    }

   
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'age' => 'required',
            'prefix' => 'required',
            'mobile' => 'required',
        ]);
       
        $patient=array();
        $patient['name'] =$request->name;
        $patient['role_id'] =1;
        $patient['age'] =$request->age;
        $patient['prefix'] =$request->prefix;
        $patient['gender']= $request->gender;
        $patient['mobile']= $request->mobile;
        $patient['address']= $request->address;
        $patient['status']=$request->status;

        $update= DB::table('consumers')->where('id',$id)->update($patient);

        return json_encode(array(
            "statusCode"=>200
        ));
    }

  
    public function destroy($id)
    { 
        $patient =DB::table('consumers')->where('id',"=",$id);
        return $patient->delete();
    }
}
