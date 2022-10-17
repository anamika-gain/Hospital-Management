<?php

namespace App\Http\Controllers;
use DB;
use App\Models\RefCommission;
use App\Models\referralpayment;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
class RefCommissionController extends Controller
{
   
    public function index()
    {
    
    	return view('refcommission.ref_com');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function referralfilter(Request $request)
    {
        $to =  date("d-m-Y", strtotime($request->to));
        $fm =  date("d-m-Y", strtotime($request->from));
        $colls = DB::table('ref_commissions')
        ->join('users','users.id','ref_commissions.referral_id')
        ->select('ref_commissions.*','users.name AS refer_name')
        ->where('ref_commissions.referral_id',$request->reffer)
        ->whereBetween('ref_commissions.date', [$fm, $to])
        ->get();
        return DataTables::of($colls)
        ->addIndexColumn()
        ->addColumn('status', function ($data) {
            if ($data->status==1) {
                return '<span class="badge badge-success">paid</span>';
            
            } else {
                return '<span class="badge badge-danger">due</span>';
            }
           return $action;
        })
        ->rawColumns(['status'])
        ->toJson();
    }

 
    public function referralpayment()
    {
        $refer=DB::table('users')->where('role_id',"=",3)->get();
        return view('refcommission.refe_payment',compact('refer'));
    }

   
    public function show($id)
    {
        $referral=DB::table('users')->where('id',"=",$id)->first();
        $refer=DB::table('ref_commissions')->where('referral_id',"=",$id)->get();
        return view('refcommission.refe_show',compact('refer'));
    }

    public function store(Request $request)
    {
        $payment = new ReferralPayment();
        $payment->invoice_id =$request->invoice_id;
        $payment->pay_method =$request->method;
        $payment->amount =$request->amount;
        $payment->transaction_id =$request->transaction_id;
        $payment->save();

        $referral=array();
        $referral['status']=0;

        $update= DB::table('ref_commissions')->where('id',$request->invoice_id)->update($referral);

        return  redirect()->back()->with('success','Payment Successfully Done');
    }


    public function update(Request $request, RefCommission $refCommission)
    {
        //
    }


    public function due()
    {
        $currentTime = Carbon::now();
        $today = $currentTime->toDateString();
        $to =  date("d-m-Y", strtotime($today));
        $refer=DB::table('ref_commissions')->where('status',"=",1)->where('date',"=",$to)->get();
        //dd($refer);
        return view('refcommission.due',compact('refer'));
    }
    
    public function duefilter(Request $request)
    {
      
        $to =  date("d-m-Y", strtotime($request->to));
        $fm =  date("d-m-Y", strtotime($request->from));
        $colls = DB::table('ref_commissions')
 
        ->join('users','users.id','ref_commissions.referral_id')
        ->select('ref_commissions.*','users.name AS refer_name')
        ->whereBetween('ref_commissions.date', [$fm, $to])
        ->where('ref_commissions.status',"=",1)
        ->get();
        //dd($colls);
        return DataTables::of($colls)
        ->addIndexColumn()
        ->toJson();
    }
    public function paidfilter(Request $request)
    {
        $to =  date("d-m-Y", strtotime($request->to));
        $fm =  date("d-m-Y", strtotime($request->from));
        $colls = DB::table('ref_commissions')
        ->whereBetween('ref_commissions.date', [$fm, $to])
        ->where('ref_commissions.status',"=",0)
        ->join('users','users.id','ref_commissions.referral_id')
        ->select('ref_commissions.*','users.name AS refer_name')
        ->get();
        return DataTables::of($colls)
        ->addIndexColumn()
        ->toJson();
    }
    public function paid()
    {
        $currentTime = Carbon::now();
        $today = $currentTime->toDateString();
   
        $to =  date("d-m-Y", strtotime($today));
     
        $refer=DB::table('ref_commissions')->where('status',"=",0)->where('date',"=",$to)->get();
     
        return view('refcommission.paid',compact('refer'));
    }
}
