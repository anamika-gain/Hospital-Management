<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use DataTables;
use App\Models\Billing;
use App\Models\Collection;
use App\Models\RefCommission;
use App\Models\Test_Bill as testBill;
use Illuminate\Http\Request;
use Redirect,Response;
class BillingController extends Controller
{
 
    public function newbilling(){
        return view('billing.create_new_bill');
    }
    public function invoice($id){

        $invoice_id=$id;
        $bill=DB::table('billings')->where('id', $id)->first();
        $patient=DB::table('consumers')->where('id',$bill->patient_id)->first();
        $test_bills=DB::table('test__bills')->where('bill_id',$invoice_id)->get();
        $collection=DB::table('collections')->where('bill_id',$invoice_id)->get();
        //dd($collection);


        return view('billing.invoice',compact('invoice_id','bill','test_bills','patient','collection'));
    }
    public function getPrice(){

        $getPrice = $_GET['id'];
        $price  = DB::table('tests')->where('id', $getPrice)->get();
        return Response::json($price);
    }

  
    public function store(Request $request)
    {
      
        $billing=Billing::create([
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'referral_id'=>$request->referral,
            'delivery_date'=>$request->delevery,
            'invoice_date'=>$request->invoice,
            'total_amount'=>$request->subtotal,
            'discount'=>$request->subtotal-$request->after_dis,
            'dis_by'=>$request->dis_by,
            'pay'=>$request->pay,
        ]);
        foreach($request->test as $key => $test){
            $testBill=new testBill();
            $testBill->bill_id =$billing->id;
            $testBill->test_name= $test;
            $testBill->price=$request->price[$key];
            $testBill->ref_commission= $request->comission[$key];
            $testBill->save();
        };
        return  redirect()->back()->with('success','Bill Successfully Created');
    }

 
    public function duecollection()
    {
        $bills = DB::table('billings')
        ->join('users', 'billings.doctor_id', 'users.id')
        ->join('consumers', 'billings.patient_id', 'consumers.id')
        ->select('billings.*','users.name AS doctor_name','consumers.name AS patient_name')
        ->get();
   
        return view('billing.due',compact('bills'));

    }
    public function collection($id)
    { //  dd($id);
        $bills = DB::table('billings')
        ->where('id',"=",$id)
        ->first();

        $tests=DB::table('test__bills')->where('bill_id',"=",$id)->get();
       // dd($tests);
        
        return view('billing.collection',compact('bills','tests'));

    }

    public function collectionfilter(Request $request)
    {
        $to =  date("d-m-Y", strtotime($request->to));
        $fm =  date("d-m-Y", strtotime($request->from));

        $colls = DB::table('collections')
        ->join('users', 'collections.user_id', 'users.id')
        ->join('consumers', 'collections.patient_id', 'consumers.id')
        ->select('collections.*','users.name AS receiver_name','consumers.name AS patient_name')
        ->whereBetween('collections.date', [$fm, $to])
        ->get();
        return DataTables::of($colls)
        ->addIndexColumn()
        ->addColumn('action', function ($data) {
      
            $action= ' <button type="button" class=" delete-datas btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            $action .= ' <button type="button" class=" print-datas btn btn-success btn-sm delete-link" value="'.$data->id.'">Print</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    }



    public function collStore(Request $request)
    {
       //dd($request);
        $collection=Collection::create([
            'bill_id'=>$request->bill_id,
            'patient_id'=>$request->patient_id,
            'pay_amount'=>$request->pay_amount,
            'due_amount'=>$request->due_amount,
            'date'=>$request->date,
            'method'=>$request->method,
            'discount'=>$request->discount,
            'transaction_id'=>$request->transaction_id,
            'user_id'=>auth()->id(),
        ]);
        $billid=$request->bill_id;
        $total_commission=0;
        $ref_id=DB::table('billings')->where('id',"=",$request->bill_id)->first();

       $test=DB::table('test__bills')->where('bill_id',"=",$request->bill_id)->get();
       foreach($test as $row)
       {
        $total_commission= $total_commission + $row->ref_commission;
       }

        if($request->due_amount == 0)
        {
            $referral_com= new RefCommission();
            
                $referral_com->billing_id =$billid;
              //  dd($ref_id->referral_id);
                $referral_com->referral_id = $ref_id->referral_id;
                $referral_com->amount = $total_commission;
                $referral_com->date =$request->date;
                $referral_com->status = 1;

                $referral_com->save();
        }
       
        return  redirect()->back()->with('success','Bill Successfully Created');
    }
    public function collHis(){

        return view('billing.collection_history');
    }

    public function ViewCols(){

        return view('billing.view_my_transaction');
    }

    public function collHistiry(){
    
        $colls = DB::table('collections')
        ->join('users', 'collections.user_id', 'users.id')
        ->join('consumers', 'collections.patient_id', 'consumers.id')
        ->select('collections.*','users.name AS receiver_name','consumers.name AS patient_name')
        ->get();
        return DataTables::of($colls)
        ->addIndexColumn()
        ->addColumn('action', function ($data) {
      
            $action= ' <button type="button" class=" delete-datas btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
 

    public function ViewMyCols(){

        $Uid=auth()->id();

        $colls = DB::table('collections')
        ->where('user_id',"=",$Uid )
        ->join('consumers', 'collections.patient_id', 'consumers.id')
        ->select('collections.*','consumers.name AS patient_name')
        ->get();

        return DataTables::of($colls)
        ->addIndexColumn()
        ->addColumn('action', function ($data) {
            $action = '<button type="button" class="edit-doctors btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
            $action = ' <button type="button" class=" delete-doctors btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
            return $action;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    function destroyCol($id)
    {
        $colls =DB::table('collections')->where('id',"=",$id);
        return $colls->delete();
    }
    function destroyViewCol($id)
    {
        $colls =DB::table('collections')->where('id',"=",$id);
        return $colls->delete();
    }
}
