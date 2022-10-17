<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use DataTables;
use App\Models\Billing;
use App\Models\Collection;


use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function discount(){

        return view('account.discount_summery');
    }
    public function alldiscount(){

        $colls = DB::table('billings')
        ->join('consumers', 'billings.patient_id', 'consumers.id')
        ->select('billings.*','consumers.name AS patient_name')
        ->get();


        return DataTables::of($colls)
        ->addColumn('action', function ($data) {

            $action = '  <input type="checkbox" class="form-check-input" value="'.$data->id.'">';
            $action .= ' <button type="button" class=" print-datas btn btn-info btn-sm delete-link" value="'.$data->id.'">Print</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    } 

    public function discount_invoice($id){

        $invoice_id=$id;
        $bill=DB::table('billings')->where('id', $id)->first();
        $patient=DB::table('consumers')->where('id',$bill->patient_id)->first();
        $test_bills=DB::table('test__bills')->where('bill_id',$invoice_id)->get();
        $collection=DB::table('collections')->where('bill_id',$invoice_id)->get();
        //dd($collection);

        return view('account.discount_invoice',compact('invoice_id','bill','test_bills','patient','collection'));
    }

    public function view_all_transction(){

        $colls = DB::table('collection')
        ->join('consumers', 'billings.patient_id', 'consumers.id')
        ->select('billings.*','consumers.name AS patient_name')
        ->get();
        return DataTables::of($colls)

        ->addColumn('action', function ($data) {

            $action = '  <input type="checkbox" class="form-check-input" value="'.$data->id.'">';
            $action .= ' <button type="button" class=" print-datas btn btn-info btn-sm delete-link" value="'.$data->id.'">Print</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
}
