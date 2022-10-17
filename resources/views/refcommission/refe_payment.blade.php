@extends('layout.app')
@section('styles')
{{-- <link type="text/css" href="{{asset('/')}}assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                Referral Payment
            </h4>
        </div>
        <div class="py-4">
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SI</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                    @php
                    $i=1;
                    @endphp
                    <tbody>
                        @foreach($refer as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$row->name}}</td>
                            @php
                            $sum=0;
                            $ref_com=DB::table('ref_commissions')->where('referral_id',"=",$row->id)->get();
                            foreach ($ref_com as $value)
                             {
                               $sum=$sum + $value->amount;
                            }
                            @endphp
                            <td>{{$sum}}/=</td>
                          
                            <td><a href="{{ URL::to('refepayment/show/'.$row->id) }}"type="button" class="btn btn-sm btn-info">Show</a></td>
                        </tr>
                          @endforeach                     
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
@endsection