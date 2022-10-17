
@extends('layout.app')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
@endsection
@section('content')

               
<div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title">
                Data table
            </h4>

          <div  aria-labelledby="ordersFilter">
    
            @php
            $bill=DB::table('billings')->get();
            @endphp
            <select   id="target">
            <option class="dropdown-item" >Select Id</option>
            @foreach($bill as $row)
            <option class="dropdown-item" value="{{$row->id}}">{{$row->id}}</option>
            @endforeach
            </select>
        </div>
    </div> 
 
    <div class="py-4">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Invoice Id</th>
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                        <th>Delivery Date</th>
                        <th>Invoice Date</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Pay</th>
                        <th>Due Amount</th>
         
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td><a href="{{ url('edit-bill',$bill->id) }}" type="button" class="btn btn-outline-twitter btn-sm">  <i class="material-icons align-middle text-black">edit</i></a></td>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->patient_name}}</td>
                        <td>{{$bill->doctor_name}}</td>
                        <td>{{$bill->delivery_date}}</td>
                        <td>{{$bill->invoice_date}}</td>
                        <td>{{$bill->total_amount}}</td>
                        <td>{{$bill->discount}}</td>
                        @php
                        $net_amount=$bill->total_amount-$bill->discount
                        @endphp
                        <td>{{$net_amount}}</td>
                        <td>{{$bill->pay}}</td>
                        @php
                            $due=$net_amount-$bill->pay
                        @endphp
                        <td>{{$due}}</td>
                        {{-- <td><a href="{{ route('collection',$bill->id) }}"  type="button" class="btn btn-outline-success">Success</a></td> --}}
                       
        
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Invoice Id</th>
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                        <th>Delivery Date</th>
                        <th>Invoice Date</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Pay</th>
                        <th>Due Amount</th>
                        <th>Payment</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


@endsection
@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {

     $.ajaxSetup({
     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
     });

      
    $( "#target" ).on('change',function() {
        var test_id=$(this).val();
        $.ajax({
            type:"GET",
            url:"/testbill/"+test_id,
            success:function(response){
                 console.log(response.bills);
            }
        });
    
    });
});
</script>
<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>
@endsection
