<?php

namespace App\Http\Controllers;
use DataTables;
use App\Models\Leave;
use Illuminate\Http\Request;
use DB;
class LeaveController extends Controller
{
  
    public function index()
    {
        $leaves=DB::table('leaves')->get();
    	return view('hrms.leave.leave',compact('leaves'));
    }


    public function create()
    {
         
      
    }
    
  
    public function allleaves()
    {

        $leaves = DB::table('leaves')
        ->join('users', 'leaves.employee_id', 'users.id')
        ->join('leavetypes', 'leaves.leavetype_id', 'leavetypes.id')
        ->select('leaves.*','users.name AS employee_name','leavetypes.leave_type')
        ->get();

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
            $action = '<button type="button" class="edit-leave btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-leave btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['action','status'])
        ->toJson();
    }

    public function leavefilter(Request $request)
    {
        $to =  date("d-m-Y", strtotime($request->to));
        $fm =  date("d-m-Y", strtotime($request->from));

        $leaves = DB::table('leaves')
        ->join('users', 'leaves.employee_id', 'users.id')
        ->join('leavetypes', 'leaves.leavetype_id', 'leavetypes.id')
        ->select('leaves.*','users.name AS employee_name','leavetypes.leave_type')
        ->whereBetween('leaves.startdate', [$fm, $to])
        ->get();
        return DataTables::of($leaves)
        ->addIndexColumn()
        ->addColumn('action', function ($data) {
      
            $action= ' <button type="button" class=" delete-datas btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            $action .= ' <button type="button" class=" print-datas btn btn-success btn-sm delete-link" value="'.$data->id.'">Print</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'employee_id' => 'required',
            'leavetype_id' =>  'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'reason' => 'required',

        ]);

        $leaves = new Leave();
        $leaves->employee_id =$request->employee_id;
        $leaves->leavetype_id =$request->leavetype_id;
        $leaves->startdate =$request->startdate;
        $leaves->enddate =$request->enddate;
        $leaves->reason =$request->reason;
        $leaves->status=$request->status;
        $leaves->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function edit($id)
    {
        $leaves=leave::find($id);

        if($leaves){
         return response()->json([
                'status' =>200,
                'leaves'=>$leaves,
            ]);
        }
    }
  
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'employee_id' => 'required',
            'leavetype_id' =>  'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'reason' => 'required',
        ]);
       
        $leave=array();
        $leave['employee_id'] =$request->employee_id;
        $leave['leavetype_id'] =$request->leavetype_id;
        $leave['startdate'] =$request->startdate;
        $leave['enddate'] =$request->enddate;
        $leave['reason'] =$request->reason;
        $leave['status']=$request->status;

        $update= DB::table('leaves')->where('id',$id)->update($leave);

    
    }
     function destroy($id)
    {
        $leave =DB::table('leaves')->where('id',"=",$id);
        return $leave->delete();
    }
}
