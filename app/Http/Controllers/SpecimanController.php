<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Speciman;
use Illuminate\Http\Request;
use DataTables;
class SpecimanController extends Controller
{
  
    public function index()
    {
        $specimens=DB::table('specimen')->get();
    	return view('specimen.index',compact('specimens'));
    }

   
    public function allspecimens()
    {
        $specimens = DB::table('specimen')->get();
 
        return DataTables::of($specimens)
        ->addIndexColumn()
        ->editColumn('status', function ($data) {
            if ($data->status==1) {
                return '<span class="badge badge-success">active</span>';
            
            } else {
                return '<span class="badge badge-danger">deactive</span>';
            }
        })
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-specimens btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-specimens btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['status','action'])
        ->toJson();
    }

 
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',

        ]);

        $specimen = new Speciman();
        $specimen->name =$request->name;
        $specimen->status= $request->status;
        $specimen->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }


    public function show(Speciman $speciman)
    {
        
    }


    public function edit($id)
    {
        $specimen=Speciman::find($id);

        if($specimen){
         return response()->json([
                'status' =>200,
                'specimen'=>$specimen,
            ]);
        }
    }


    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        
        $specimen=array();
        $specimen['name'] =$request->name;
        $specimen['status']=$request->status;
        $specimen= DB::table('specimen')->where('id',$id)->update($specimen);
    }


  
    function destroy($id)
    {
        $specimens =DB::table('specimen')->where('id',"=",$id);
        return $specimens->delete();
    }
}
