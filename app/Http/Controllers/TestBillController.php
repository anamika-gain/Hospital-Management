<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Test_Bill;
use Illuminate\Http\Request;

class TestBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test_Bill  $test_Bill
     * @return \Illuminate\Http\Response
     */
    public function show(Test_Bill $test_Bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test_Bill  $test_Bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Test_Bill $test_Bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test_Bill  $test_Bill
     * @return \Illuminate\Http\Response
     */
    public function testbill($id)
    {  

        $data=DB::tabel('test__bills')->where('bill_id',"=",$id)->get();
        return response()->json(['data' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test_Bill  $test_Bill
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        $test =DB::table('test__bills')->where('id',"=",$id);
        return $test->delete();
    }
}
