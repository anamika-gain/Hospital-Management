<?php

namespace App\Http\Controllers;

use App\Models\TestDept;
use Illuminate\Http\Request;
use DB;

class TestDeptController extends Controller
{

  
    public function index()
    {
        $depts=DB::table('test_depts')->get();
    	return view('testDept.dept',compact('depts'));
    }


    public function create()
    {
         
      
    }

    public function allDeptTest()
    {
        $depts = DB::table('test_depts')->get();
 
        return response()->json([
            'depts' => $depts,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'cat_id' =>  'required',
            'analyzer' => 'required',

        ]);

        $dept = new TestDept();
        $dept->name =$request->name;
        $dept->cat_id =$request->cat_id;
        $dept->analyzer =$request->analyzer;
        $dept->status=$request->status;
        $dept->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }


    public function show(TestDept $testDept)
    {
        //
    }


    public function edit($id)
    {
        $depts=TestDept::find($id);

        if($depts){
         return response()->json([
                'status' =>200,
                'depts'=>$depts,
            ]);
        }
    }
 
    public function update(Request $request, $id)
    {
     $this->validate($request,[
            'name' => 'required',
            'cat_id' =>  'required',
            'analyzer' => 'required',

        ]);
       
        $test=array();
        $test['name'] =$request->name;
        $test['cat_id'] =$request->cat_id;
        $test['analyzer'] =$request->analyzer;
        $test['status']=$request->status;

        $update= DB::table('test_depts')->where('id',$id)->update($test);

        return json_encode(array(
            "statusCode"=>200
        ));
    }
 
    function destroy($id)
    {
        $test =DB::table('test_depts')->where('id',"=",$id);
        return $test->delete();
    }
}
