@extends('layout.app')
@section('styles')
{{-- <link type="text/css" href="{{asset('/')}}assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="container-fluid">
    @if (Session::get('success'))
    <div class="alert alert-twitter alert-dismissable show" role="alert">
        <p>  {{Session::get('success')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
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
                            <th></th>
                            <th>SI</th>
                            <th>Bill Id</th>
                            <th>Amount</th>
                            <th>Pay</th>
                        </tr>
                    </thead>
                    @php
                    $i=1;
                    @endphp
                    <tbody>
                        @foreach($refer as $row)
                        <tr>
                            <td>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 
                                </label>
                            </div>
                        </td>
                            <td>{{$i++}}</td>
                            <td>{{$row->billing_id}}</td>
                            {{-- @php
                            $pat=DB::table('billings')->where('id',"=",$row->billing_id)->first();                      
                            // dd($pat)
                            @endphp

                            <td>{{$pat->patient_id}}</td> --}}
                            <td>{{$row->amount}}</td>
                          
                            <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#newTaskModal" >
                            <span class="align-middle">Payment</span></a></td>
                            <input type="hidden" id="invoice_id" value="{{$row->id}}">
                        </tr>
                          @endforeach                     
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTaskModalLabel">Add a new task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            </div>
            <div class="modal-body">
           
                <div class="form-group">
                   
                    <div class="col-lg-12 p-1">
                        <label for="exampleInputEmail1">Pay Amount</label>
                       <input type="text" name="amount" class="form-control" id="amount" placeholder="Pay amount">
                    </div> 
                    <div class="col-lg-12 p-1">
                        <label for="exampleInputEmail1">Payment Method</label>
                        <select class="form-control" data-placeholder="Choose Test Department" name="method" id="method">        
                        <option value="cash_on_delivery">Cash On Delivery</option>
                        <option value="bkash">BKash</option>
                        <option value="nagad">Nagad</option>
                        <option value="card">Card</option>
                            </select>
                        </div>
                    <div class="col-lg-12 p-1">
                    <label for="exampleInputEmail1">Transection Id</label>
                    <input type="text" name="transaction_id" class="form-control" id="transactionId" placeholder="Transection Id">
                    </div>
                   
                 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="submitdata btn btn-primary">Add task</button>
            </div>
        
        </div>
    </div>
</div>
{{-- <script src="{{asset('/')}}assets/vendor/jquery.dataTables.js"></script>
<script src="{{asset('/')}}assets/vendor/dataTables.bootstrap4.js"></script> --}}
<script>
    $(document).ready(function() {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.submitdata').on('click', function(e) {
    e.preventDefault();
    $(this).html('Sending..');
        var invoice = $("#invoice_id").val();
        console.log(invoice);
        var amount = $("#amount").val();
        var method = $("#method").val();
        var transaction_id= $("#transactionId").val();
        $.ajax({
            data: {
                invoice_id:invoice,
                amount:amount,
                method:method,
                transaction_id:transaction_id,
            },
             url:  "{{ route('referralpay.store') }}",
             type: "POST",
             datatype:'json',
             success: function(data){
               
                  $('#newTaskModal').modal('hide');
            
             }
         });
      
    });
});
</script>
@endsection