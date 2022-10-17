<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Analyzer;
use Illuminate\Http\Request;
use DataTables;
class AnalyzerController extends Controller
{
   
    public function index()
    {
        $analyzers=DB::table('analyzers')->get();
    	return view('analyzer.analyzer',compact('analyzers'));
        
    }

   
    public function allanalyzers()
    {
        $analyzers = DB::table('analyzers')->get();
 
        return DataTables::of($analyzers)
        ->addIndexColumn()
        ->editColumn('status', function ($data) {
            if ($data->status==1) {
                return '<span class="badge badge-success">active</span>';
            
            } else {
                return '<span class="badge badge-danger">deactive</span>';
            }
        })
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-analyzers btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action .= ' <button type="button" class=" delete-analyzers btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
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
        $analyzer = new Analyzer();
        $analyzer->name =$request->name;
        $analyzer->status= $request->status;
        $analyzer->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }
 
    public function edit($id)
    {
        $analyzer=Analyzer::find($id);

        if($analyzer){
         return response()->json([
                'status' =>200,
                'analyzer'=>$analyzer,
            ]);
        }
    }


    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        
        $analyzer=array();
        $analyzer['name'] =$request->name;
        $analyzer['status']=$request->status;
        $analyzer= DB::table('analyzers')->where('id',$id)->update($analyzer);
    }

 
    function destroy($id)
    {
        $analyzers =DB::table('analyzers')->where('id',"=",$id);
        return $analyzers->delete();
    }
}
