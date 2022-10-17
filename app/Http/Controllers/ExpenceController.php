<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Account;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExpenceController extends Controller
{
    public function index()
    {
        return view('account.expence');
    }

    public function allexpences()
    {
        $incomes =$incomes = DB::table('accounts')->where('type',"=",0)
                    ->join('users', 'accounts.user_id', 'users.id')
                    ->select('accounts.*','users.name AS operator')
                    ->get();
 
         return DataTables::of($incomes)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $action = '<button type="button" class="edit-expences btn btn-info btn-sm " value="'.$data->id.'">Edit</button>';
                $action .= ' <button type="button" class=" delete-expences btn btn-danger btn-sm delete-link" value="'.$data->id.'">Delete</button>';
                return $action;
            })
            ->rawColumns(['action'])
            ->toJson();
    }
  

    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name' => 'required',
            'amount' => 'required',
        
        ]);

        $income = new Account();
        $income->name =$request->name;
        $income->user_id =Auth::id();
        $income->amount= $request->amount;
        $income->type =0;
        $income->save();

        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function edit($id)
    {
        $income=Account::find($id);

        if($income){
         return response()->json([
                'status' =>200,
                'income'=>$income,
            ]);
        }
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'amount' => 'required',
        
        ]);
        $income=array();
        $income['name'] =$request->name;
        $income['amount']= $request->amount;

        $update= DB::table('accounts')->where('id',$id)->update($income);
    }

    function destroy($id)
    {
        $income =DB::table('accounts')->where('id',"=",$id);
        return $income->delete();
    }
}
