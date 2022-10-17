<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\Consumer;
use App\Models\Billing;
use App\Models\Collection;
use App\Models\Test_Bill as testBill;
use Illuminate\Http\Request;
use Redirect,Response;

class NewBillController extends Controller
{
    
    public function newpatbill(){
        return view('billing.newpatbill');
    }

    public function store(Request $request)
    {

        $patient = new Consumer();
        $patient->name =$request->name;
        $patient->role_id =1;
        $patient->age =$request->age;
        $patient->prefix =$request->prefix;
        $patient->gender= $request->gender;
        $patient->mobile= $request->mobile;
        $patient->address= $request->address;
        $patient->status=1;
        $patient->save();
        $patient->id;
   
        $pat_id=$patient->id;

        $billing=Billing::create([
            'patient_id'=> $pat_id,
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

    
    public function allbill()
    {
        $bills = DB::table('billings')
        ->join('users', 'billings.doctor_id', 'users.id')
        ->join('consumers', 'billings.patient_id', 'consumers.id')
        ->select('billings.*','users.name AS doctor_name','consumers.name AS patient_name')
        ->get();
       // dd($bills);
        return view('billing.allbill',compact('bills'));

    }

    public function edit($id)
    {

         $bills = DB::table('billings')
         ->where('id',"=",$id )->first();
    
         return view('billing.updatebill',compact('bills'));
    }

    public function update(Request $request,$id){

        $data=array();
        $data['doctor_id']=$request->doctor;
        $data['referral_id']=$request->referral;
        $data['delivery_date']=$request->delevery;
        $data['invoice_date']=$request->invoice;
        $data['total_amount']=$request->subtotal;
        $data['discount']=$request->subtotal-$request->after_dis;
        $data['dis_by']=$request->dis_by;
        $data['pay']=$request->pay;
        $update= DB::table('billings')->where('id',$id)->update($data);

        foreach($request->test as $key => $test){
        $testBill=new testBill();
        $testBill->bill_id =$id;
        $testBill->test_name= $test;
        $testBill->price=$request->price[$key];
        $testBill->ref_commission= $request->comission[$key];
        $testBill->save();
        };
        return  redirect()->back()->with('success','Bill Successfully Updated');
    }


    public function filterbill($id){

        $bills =Billing::find($id);
        // ->join('users', 'billings.doctor_id', 'users.id')
        // ->join('consumers', 'billings.patient_id', 'consumers.id')
        // ->select('billings.*','users.name AS doctor_name','consumers.name AS patient_name')
        // ->get();

        if($bills){
        return response()->json([
                'status' =>200,
                'bills'=>$bills,
            ]);
        }
}


}
