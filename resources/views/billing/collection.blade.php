@extends('layout.app')
@section('content')
<div class="container-fluid">



<div class="tab-content" id="accountTabsContent">

    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="row">

           
            <div class="col-lg-9">
                <div class="card card-account">
                    <div class="card-body">
                        <div style="margin:10px auto; width:100%; background:rgb(255, 255, 255);">
                            <table aling="center" class="" id="printableArea">       
                                <tbody><tr>
                                    <td>
                                        <table width="100%" bordar ="1" class="analysis-tbl-a4 all-table" cellpadding="5">
                                            <tbody><tr class="analysis-head">
                                                <td width="50">#</td>
                                                <td aling="center" width="300">ANALYSIS NAME</td>
                                                <td width="100">PRICE</td>
                                            </tr>
                                
                                        @foreach($tests as $test)
                                            <tr>
                                                <td aling="center">{{$test->id}}</td>
                                                <td aling="left">{{$test->test_name}}</td>
                                                <td aling="right">{{$test->price}}</td>
                                            </tr>
                                      
                                        @endforeach
                        
                                          
                                
                        
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" class="payment-details-a4 all-table" cellpadding="5">
                                            <tbody><tr>
                                              <td rowspan="4" width="150">
                                                            
                                                <div class="invoice_status">DUE</div>
                                                </td>
                                                <td colspan="3" aling="right">Sub Total</td>
                                                <td width="50" aling="center">:</td>
                                           
                                                <td width="200" aling="right">{{$bills->total_amount}}/-</td>
                                                </tr>
                                          
                        
                                            <tr>
                                                <td colspan="3" aling="right">Previous Paid</td>
                                                <td aling="center">:</td>
                                                <td aling="right">{{$bills->pay}}/-</td>
                                            </tr>
                                          
                        
                                            <tr>
                                                <td colspan="3" aling="right">Previous Discount</td>
                                                <td aling="center">:</td>
                                                <td aling="right">{{$bills->discount}}/-</td>
                                            </tr>
                                            @php
                                            $a=$bills->total_amount;
                                            $b=$bills->discount;
                                            $c=$bills->pay;
                                            $net_pay=$a-($b+$c);
                                            @endphp
                        
                                            <tr>
                                                <td colspan="3" aling="right">Net Payable</td>
                                                <td aling="center">:</td>
                                                <td aling="right">{{$net_pay}}/-</td>
                                            </tr>
                                          <input type="hidden" id="subtotal" value="{{$net_pay}}">
                        
                                        </tbody></table>
                                            
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-lg-3 ">
        <div class="card p-2 ">
            <form method="POST" action="{{route('collection.store')}}">
                @csrf
                <div class="form-group form-row">
                
                    <div class="col-lg-12 p-1">
                      
                     <input type="hidden" class="form-control" name="bill_id" value={{$bills->id}}>
                    </div>
                    <div class="col-lg-12 p-1">
                   
                     <input type="hidden" class="form-control" name="patient_id" value={{$bills->patient_id}}>
                    </div>
                    <div class="col-lg-12 p-1">
                        <label> Date</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">event</i>
                            </div>
                            <input name="date" type="text" class="form-control" value="12-02-2012">
                        </div>
                    </div>
                    <div class="col-lg-12 p-1">
                        <label for="exampleInputEmail1">Discount %</label>
                    <input type="text" class="form-control" name="discount" id="percent" placeholder="percent">
                    </div>
                    <input type="hidden" class="form-control"  id="Amount" >
                         <div class="col-lg-12 p-1">
                            <label for="exampleInputEmail1">Discount ৳</label>
                            <input type="text" class="form-control" id="flat" placeholder="flat amount">
                        </div>
                     
                        <div class="col-lg-12 p-1">
                            <label for="exampleInputEmail1">Net Payable</label>
                            <input type="text"  class="form-control" id="due" placeholder="due amount">
                        </div>
                        <div class="col-lg-12 p-1">
                            <label for="exampleInputEmail1">Collect Amount</label>
                            <input type="text" name="pay_amount" class="form-control" id="collection" placeholder="Pay amount">
                         </div>
                        <div class="col-lg-12 p-1">
                            <label for="exampleInputEmail1">Due Amount</label>
                           <input type="text" name="due_amount" class="form-control" id="lastdue" placeholder="due amount">
                        </div> 
                        <div class="col-lg-12 p-1">
                            <label for="exampleInputEmail1">Payment Method</label>
                            <select class="form-control" data-placeholder="Choose Test Department" name="method" id="author">        
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
        <input type="submit" class="btn btn-success d-block w-100" name="" value="Save">
    </div>
          
        </div>
        
    </div>
   
</div>

</form>
</div>


@endsection

@section('scripts')


<script src="{{asset('/')}}assets/vendor/bootstrap-datepicker.min.js"></script>
<script src="{{asset('/')}}assets/js/datepicker.js"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script>
    $(document).ready(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     
         $(document).on('input', '#percent', function() {
            discount()
        });
         $(document).on('input', '#flat', function() {
            discount()
        });
        //  $(document).on('input', '#pay', function() {
        //     pay()
        // });
        $(document).on('input', '#collection', function() {
            due()
        });

        function discount(){
             var subTotal = $('#subtotal').val();
        
            var percent = $('#percent').val();
        
          
            if(percent!=''){
               var com =(subTotal/100)*percent
     
                $('#flat').val(com)
               $('#due').val(subTotal-com)

            }
           
        }
        // function pay(){
        //     var Amount = $('#Amount').val();
        //     var pay = $('#pay').val();
        //     $('#due').val(Amount-pay)
        // }
        function due(){
            var Amount = $('#collection').val();
            var pay = $('#due').val();
            console.log(pay)
            $('#lastdue').val(pay-Amount)
            
        }
      
    });
</script>
@endsection