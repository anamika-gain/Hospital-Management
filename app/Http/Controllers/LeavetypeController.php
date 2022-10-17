<?php

namespace App\Http\Controllers;
use DB;
use DataTables;
use App\Models\Leavetype;
use Illuminate\Http\Request;

class LeavetypeController extends Controller
{
    public function index()
    {
        return view('hrms.leave.leavetype');
    }


    public function allleaveType()
    {

        $leaves = DB::table('leavetypes')->get();
        return DataTables::of($leaves)
        ->addIndexColumn()
        ->editColumn('status', function ($data) {
            if ($data->status==1) {
                return '<button type="button" class="btn btn-outline-info  btn-sm">Active</button>';
            
            } else {
                return '<button class="btn btn-outline-danger btn-sm">deactive</button>';
            }
        })
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-leavetype btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-leavetype btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['action','status'])
        ->toJson();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'leave_type' => 'required',
            'max_leave_count' =>  'required',

        ]);

        $leaves = new Leavetype();
        $leaves->leave_type =$request->leave_type;
        $leaves->max_leave_count =$request->max_leave_count;
        $leaves->leave_count_interval =$request->leave_count_interval;
        $leaves->status=$request->status;
        $leaves->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function edit($id)
    {
        $leavetype=Leavetype::find($id);

        if($leavetype){
         return response()->json([
                'status' =>200,
                'leavetype'=>$leavetype,
            ]);
        }
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'leave_type' => 'required',
            'max_leave_count' =>  'required',

        ]);
      
        $data=array();
        $data['leave_type']=$request->leave_type;
        $data['max_leave_count']=$request->max_leave_count;
        $data['leave_count_interval']=$request->leave_count_interval;
        $data['status']=$request->status;
  
        $update= DB::table('leavetypes')->where('id',"=",$id)->update($data);
    
    }


    function destroy($id)
    {
        $leavetypes =DB::table('leavetypes')->where('id',"=",$id);
        return $leavetypes->delete();
    }
}
