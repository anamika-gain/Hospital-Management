<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    
    public function index()
    {
        $tests=DB::table('tests')->get();
    	return view('test.index',compact('tests'));
    }


    public function create()
    {
         
      
    }
    
  
    public function allTest()
    {
        $tests = DB::table('tests')->get();
 
        return response()->json([
            'tests' => $tests,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'dept_id' =>  'required',
            'price' => 'required',
            'ref_commission' => 'required',

        ]);

        $tests = new Test();
        $tests->name =$request->name;
        $tests->dept_id =$request->dept_id;
        $tests->price =$request->price;
        $tests->ref_commission =$request->ref_commission;
        $tests->status=$request->status;
        $tests->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

   
    public function show(Test $test)
    {
        //
    }


    public function edit($id)
    {
        $tests=Test::find($id);

        if($tests){
         return response()->json([
                'status' =>200,
                'tests'=>$tests,
            ]);
        }
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'dept_id' =>  'required',
            'price' => 'required',
            'ref_commission' => 'required',

        ]);
       
        $test=array();
        $test['name'] =$request->name;
        $test['dept_id'] =$request->dept_id;
        $test['price'] =$request->price;
        $test['ref_commission'] =$request->ref_commission;
        $test['status']=$request->status;

        $update= DB::table('tests')->where('id',$id)->update($test);

        return json_encode(array(
            "statusCode"=>200
        ));
    }
     function destroy($id)
    {
        $test =DB::table('tests')->where('id',"=",$id);
        return $test->delete();
    }
}
