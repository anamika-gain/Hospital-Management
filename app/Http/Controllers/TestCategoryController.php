<?php

namespace App\Http\Controllers;

use App\Models\TestCategory;
use Illuminate\Http\Request;
use DB;
class TestCategoryController extends Controller
{
  
    public function index()
    {
        $category=DB::table('test_categories')->get();
    	return view('test_category.test_category',compact('category'));
        
    }

  
    public function create()
    {
        //
    }    
    public function allCategory()
    {
        $category = DB::table('test_categories')->get();
 
        return response()->json([
            'category' => $category,
        ]);
    }

    public function store(Request $request)
    {
    
        $category = new TestCategory();
        $category->name =$request->category_name;
        $category->slug =$request->slug;
        $category->status= 1;
        $category->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }
 
    public function show(TestCategory $testCategory)
    {
        //
    }

   
    public function edit($id)
    {
        $categories=TestCategory::find($id);

        if($categories){
         return response()->json([
                'status' =>200,
                'categories'=>$categories,
            ]);
        }
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',

        ]);
       
        $categories=array();
        $categories['name'] =$request->name;
        $categories['status']=$request->status;

        $update= DB::table('test_categories')->where('id',$id)->update($categories);

        return json_encode(array(
            "statusCode"=>200
        ));
    }
     function destroy($id)
    {
        $test =DB::table('test_categories')->where('id',"=",$id);
        return $test->delete();
    }
}
