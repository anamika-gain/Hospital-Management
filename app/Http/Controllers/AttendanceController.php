<?php

namespace App\Http\Controllers;
use DataTables;
use App\Models\Attendance;
use Illuminate\Http\Request;
use DB;
class AttendanceController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->get();
        return view('hrms.attendance.attendance',compact('users'));
    }


    public function create()
    {
        //
    }

    public function allattendances()
    {

        $attendances = DB::table('attendances')
        ->join('users', 'attendances.user_id', 'users.id')
        ->select('attendances.*','users.name AS employee_name')
        ->get();

        return DataTables::of($attendances)
        ->addIndexColumn()
        ->editColumn('status', function ($data) {
            if ($data->status==1) {
                return '<button type="button" class="btn btn-outline-info  btn-sm">Active</button>';
            
            } else {
                return '<button class="btn btn-outline-danger btn-sm">deactive</button>';
            }
        })
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-expences btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-expences btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['action','status'])
        ->toJson();

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'time_in' =>  'required',
            'time_out' => 'required',
            'attendance_date' => 'required',

        ]);

        $attendances = new Attendance();
        $attendances->user_id =$request->user_id;
        $attendances->time_in =$request->time_in;
        $attendances->time_out =$request->time_out;
        $attendances->attendance_date =$request->attendance_date;
        $attendances->status=$request->status;
        $attendances->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }


    public function edit($id)
    {
        $attendance=Attendance::find($id);

        if($attendance){
         return response()->json([
                'status' =>200,
                'attendance'=>$attendance,
            ]);
        }
    }


    public function update(Request $request, Attendance $attendance)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'time_in' =>  'required',
            'time_out' => 'required',
            'attendance_date' => 'required',

        ]);

        $data=array();
        $data['user_id']=$request->user_id;
        $data['time_in']=$request->time_in;
        $data['time_out']=$request->time_out;
        $data['attendance_date']=$request->attendance_date;
        $data['status']=$request->status;
  
        $update= DB::table('attendances')->where('id',$id)->update($data);
    }


    function destroy($id)
    {
        $attendances =DB::table('attendances')->where('id',"=",$id);
        return $attendances->delete();
    }
}
