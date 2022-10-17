<?php

namespace App\Http\Controllers;
use DB;
use App\Models\token;
use Illuminate\Http\Request;
use DataTables;
class TokenController extends Controller
{
   
    public function index()
    {
        $tokens=DB::table('tokens')->get();
    	return view('token.index',compact('tokens'));
    }

    public function alltokens()
    {

        $tokens = DB::table('tokens')
        ->join('users', 'tokens.doctor_id', 'users.id')
        ->select( 'tokens.*','users.name')
        ->get();

 
        return DataTables::of($tokens)
        ->addIndexColumn()
        ->editColumn('status', function ($data) {
            if ($data->status==1) {
                return '<span class="badge badge-success">active</span>';
            
            } else {
                return '<span class="badge badge-danger">deactive</span>';
            }
        })
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-tokens btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-tokens btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            $action .= ' <button type="button" class=" print-tokens btn btn-success btn-sm delete-link" value="'.$data->id.'">Print</button>';
            return $action;
        })
        ->rawColumns(['status','action'])
        ->toJson();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'doctor_id' => 'required',
            'patient_name' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'phone' => 'required',

        ]);

        $token = new token();
        $token->patient_name =$request->patient_name;
        $token->doctor_id =$request->doctor_id;
        $token->address =$request->address;
        $token->gender =$request->gender;
        $token->phone =$request->phone;
        $token->date =$request->date;
        $token->status= $request->status;
        $token->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

 
    public function show(token $token)
    {
        //
    }


    public function edit($id)
    {
        $token=token::find($id);

        if($token){
         return response()->json([
                'status' =>200,
                'token'=>$token,
            ]);
        }
    }

  
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'doctor_id' => 'required',
            'patient_name' => 'required',
            'address' =>  'required|max:100',
            'gender' => 'required',
            'phone' => 'required',

        ]);
        
        $token=array();
        $token['patient_name'] =$request->patient_name;
        $token['doctor_id']  =$request->doctor_id;
        $token['address']  =$request->address;
        $token['gender'] =$request->gender;
        $token['phone'] =$request->phone;
        $token['date'] =$request->date;
        $token['status']=$request->status;
        $token= DB::table('tokens')->where('id',$id)->update($token);
    }


   
    function destroy($id)
    {
        $tokens =DB::table('tokens')->where('id',"=",$id);
        return $tokens->delete();
    }

    function token_invoice($id){

        $token =DB::table('tokens')->where('id',"=",$id)->first();
        $doctor=DB::table('users')->where('id',$token->doctor_id)->first();
        return view('token.invoice',compact('token','doctor'));
    }
}
