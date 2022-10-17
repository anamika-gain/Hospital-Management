@extends('layout.app')
@section('content')
<div class="container-fluid">

<div class="tab-content" id="accountTabsContent">
    @if (Session::get('success'))
    <div class="alert alert-twitter alert-dismissable show" role="alert">
        <p>  {{Session::get('success')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form method="POST" action="{{ url('update-bill/'.$bills->id) }}">
        @csrf
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="row">

          <input type="hidden" value="{{$bills->id}}" class="billtests">
            <div class="col-lg-9">
                <div class="card card-account">
                    <div class="card-body">
                        <div class="form-group form-row">
                              @php
                              $patient_id=$bills->patient_id;
                              $patient=DB::table('consumers')->where('id',"=",$patient_id)->first();
                              @endphp
                            <div class="form-group col-md-3">
                                <label for="inputState" class="col-form-label">Patient Name </label>
                                <input type="text" class="form-control" name="name"  placeholder="Enter Your Name" value="{{$patient->name}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState" class="col-form-label">Gender</label>
                                <select class="form-control" name="gender" value="{{$patient->gender}}">
                                <option>--- Select Gender ---</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other's">Other's</option>
                            </select>
                            </div>

                             <div class="form-group col-md-2">
                                <label for="inputCity" class="col-form-label">Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter Age" value="{{$patient->age}}">
                            </div>
                           <div class="form-group col-md-2">
                                <label for="inputState" class="col-form-label">Age Prefix</label>
                                <select class="form-control"  name="prefix" value="{{$patient->prefix}}">
                                    <option value="Y">Year</option>
                                    <option value="M">Month</option>
                                    <option value="D">Day's</option>
                                </select>
                          </div>
                          <div class="form-group col-md-3">
                            <label for="description" class="col-form-label">Mobile </label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number"  value="{{$patient->mobile}}">
                        </div>
                  
                        </div>
                            <div class="form-group form-row">
                              
                                <div class="form-group col-md-6">
                                    <label for="description" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Your Mobile Number"  value="{{$patient->address}}">
                                </div>
                             
                             
                                <div class="form-group date col-lg-3">
                                    <label class="col-form-label" >Invoice Date</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">event</i>
                                        </div>
                                        <input name="invoice" type="text" class="form-control"  value="{{$bills->invoice_date}}">
                                    </div>
                                </div>
                                <div class="form-groupdate col-lg-3">
                                    <label class="col-form-label">Delivery Date</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">event</i>
                                        </div>
                                        <input name="delevery" type="text" class="form-control"  value="{{$bills->delivery_date}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-row">
                          
                               
                                <div class="col-lg-5">
                                  <label for="exampleInputEmail1"> Doctors</label>
                                  <select class="form-control" data-placeholder="Choose Test Department" name="doctor" id="doctor" value="{{$bills->doctor_id}}">
                                  <option label="Choose Doctors"></option>
                                      </select>
                                </div>
                                <div class="col-lg-1">
                                    <label>New</label>
                                     <button  type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+</button>
                                </div>


                                
                                <div class="col-lg-5 ">
                                  <label for="exampleInputEmail1"> referrals</label>
                                  <select class="form-control" data-placeholder="Choose Test Department" name="referral" id="referral" value="{{$bills->referral_id}}">
                                  <option label="Choose referrals"></option>
                                      </select>
                                </div>
                                <div class="col-lg-1">
                                    <label>New</label>
                                    <button data-toggle="modal" data-target="#modaldemo5" type="button" class="btn btn-primary">+</button>
                                </div>
                            </div>
                        
                    </div>
                    <div class="card-body">
                            <div class="form-group form-row ">
                             
                               @php
                                $dept=DB::table('tests')->get();
                                @endphp
                                <div class="col-lg-5">
                                  <label for="exampleInputEmail1">Test</label>
                                  <select class="form-control" name="test_id" id="testBill">
                                  <option label="Select Test"></option>
                                  @foreach($dept as $row)
                                  <option id="{{$row->id}}" value="{{$row->id}}">{{$row->name}}</option>
                                  @endforeach
                                  </select>
                                </div>
                                <div>
               
                                  <input type="hidden" id="testname" placeholder="price">
                                  </div>
                                <div class="col-lg-3">
                                  <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="price">
                                </div>
                                
                                <div class="col-lg-3">
                                    <label for="exampleInputEmail1">Ref. Commission</label>
                                  <input type="text" class="form-control" id="ref_comm" placeholder="ref. commi">
                                  </div>

                                  <div class="col-lg-1">
                                    <label>Add</label>
                                    <button type="button" id="addrow" class="btn btn-primary">+</button>
                                </div>
                               
                            </div>
                           
                    </div>
                    <style>
                        #addmore input{
                            border: none;
                            background: transparent;
                            cursor: context-menu ;
                        }
                        #addmore input:focus-visible{
                            outline: none;
                        }
                    </style>
                    @php
                    $billid=$bills->id;
                  
                    $test=DB::table('test__bills')->where('bill_id',"=",$billid)->get();
                   // dd($test);
                
                    $subtotal=0;
                    @endphp
                        <h4 class="card-title m-3">
                            Old-Test List :
                        </h4>
        
                    <div class="card-body">
                        <table border=" " width="100%" id="data-table">
                            @foreach($test as $row)
                            <tbody >
                                <th scope="row">{{$row->test_name}}</th>
                                @php
                                $subtotal =$subtotal + $row->price;
                                @endphp
                                <td  >{{$row->price}}</td>
                                <td >{{$row->ref_commission}}</td>
                                <td ><button type="button" class="btn  btn-danger removetest" value={{$row->id}} >-</button></td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <style>
                        #addmore input{
                            border: none;
                            background: transparent;
                            cursor: context-menu ;
                        }
                        #addmore input:focus-visible{
                            outline: none;
                        }
                    </style>
                       <h4 class="card-title m-3">
                        New-Test List :
                    </h4>
                    <div class="card-body">
                        <table border="" width="100%">
                            <tbody  id="addmore">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card p-2 ">
                  
                        <div class="form-group form-row">
                            <input type="hidden" value="{{$bills->id}}" class="billtests" name="bill_id">
                            <div class="col-lg-12 p-1">
                              <label for="exampleInputEmail1">Subtotal</label>
                              <input type="number" name="subtotal" class="form-control" id="suntotal" value="{{$subtotal}}">
                            </div>
                        
                            <div class="col-lg-12 p-1">
                              <label for="exampleInputEmail1">Discount %</label>
                            <input type="text" class="form-control" name="percent" id="percent" placeholder="percent">
                            </div>
                            
                            <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Discount ৳</label>
                              <input type="text" class="form-control" name="flat" id="flat" placeholder="flat amount"  value="{{$bills->discount}}">
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Discount By</label>
                                <select class="form-control" data-placeholder="Choose Test Department" name="dis_by" id="author">
                                <option label="Choose referrals"></option>
                               
                                <option value="1">Doctors</option>
                                <option value="2">referrals</option>
                                <option value="3">Hospital</option>
                                    </select>
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1"><span> Amount</span> </label>
                              <input type="text" class="form-control" id="Amount" name="after_dis" placeholder="After Discount" value="{{$bills->total_amount}}">
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Pay Amount</label>
                              <input type="text" name="pay" class="form-control" id="pay" placeholder="pay amount" value="{{$bills->pay}}">
                              </div>
                              @php
                              $due= $bills->total_amount - $bills->pay;
                              @endphp
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Due Amount</label>
                              <input type="text" name="due" class="form-control" id="due" placeholder="due amount" value="{{$due}}">
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Note</label>
                              <input type="text" name="due" class="form-control" id="note" placeholder="note">
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
@include('doctor.add')
</div>
@include('referral.add')
</div>
@include('patients.add')

   <script src="{{asset('/')}}assets/vendor/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('/')}}assets/js/datepicker.js"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<script>
    $(document).ready(function() {

        fatchdoctor()
        fatchrefer()
   
        function fatchdoctor(){
            $.ajax({
                type:"GET",
                url:'{!! route("alldoctorlist") !!}',
                dataType:"json",
                success: function(response){
                    $('#doctor').html("");
                    $.each(response,function(key,value){
                        $('#doctor').append(
                            '<option value="'+value.id+'">'+value.name+'</option>'
                        )
                    });
                }
            });
        }
        function fatchrefer(){
            $.ajax({
                type:"GET",
                url:'{!! route("allreferlist") !!}',
                dataType:"json",
                success: function(response){
                    $('#referral').html("");
                    $.each(response,function(key,value){
                        $('#referral').append(
                            '<option value="'+value.id+'">'+value.name+'</option>'
                        )
                    });
                }
            });
        }
        function fatchtestbill(){
            var bill_id =$('.billtests').val();
            $.ajax({
                type:"GET",
                url:"/testbill/"+bill_id,
                dataType:"json",
                success: function(response){
                    $('#testbill').html("");
                    $.each(response,function(key,value){
                        $('#doctor').append(
                            '<option value="'+value.id+'">'+value.name+'</option>'
                        )
                    });
                }
            });
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#butsave').on('click', function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                 data: $('#categoryForm').serialize(),
                 url:  "{{ route('patient.store') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     $('#categoryForm').trigger("reset");
                      $('#modaldemo3').modal('hide');
                      fatchpatient()  
                 }
            });
        });
        $('#docsave').on('click', function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                 data: $('#doctorForm').serialize(),
                 url:  "{{ route('doctor.store') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     //alert(data);
                     $('#doctorForm').trigger("reset");
                      $('#modaldemo4').modal('hide');
                      fatchdoctor()  
                 }
            });
        });
        $('#refsave').on('click', function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#referralForm').serialize(),
                url:  "{{ route('referral.store') }}",
                type: "POST",
                datatype:'json',
                success: function(data){
                     //alert(data);
                     $('#referralForm').trigger("reset");
                      $('#modaldemo5').modal('hide');
                      fatchrefer()  
                }
            });
        });
        $('#testBill').change(function() {
           var ids =$(this).val();
           
            $.ajax({
               type:'GET',
               data:{id:ids},
               url:'{!! route("fetch_price",["id"=>'+ids+'])!!}',
               dataType:'json',
               success:function(data)
                {
                    $.each(data, function(key, response)
                    {      $('#testname').val(response.name);
                        $('#price').val(response.price);
                        $('#ref_comm').val(response.ref_commission);
                    });
                }
            });
        });

        $(document).on('click','.removetest',function(e){

        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var user_id=$(this).val();
        console.log(user_id);
        $.ajax({
                 type: "POST",
                 url:"/delete-testbill/"+user_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
    }); 

        $('#addrow').click(function(){
           var test=$('#testBill').val();
           var testname=$('#testname').val();
           var price=$('#price').val();
           var comission=$('#ref_comm').val();
           var subTotal = $('#suntotal').val();
          
           $('#suntotal').val(parseInt(subTotal)+parseInt(price))
            discount()
            $('#addmore').append(
                
                '<tr>\
                <td><input readonly value="'+testname+'" name="test[]"></td>\
                <td><input readonly value="'+price+'" name="price[]"></td>\
                <td><input readonly value="'+comission+'" name="comission[]"></td>\
                <td><button type="button" class="btn btn-danger remove" >-</button></td>\
                <script>$(".remove").click(function(){  $(this).parent("td").parent("tr").remove()})</'+'script>\
                </tr>',
                
            )
        })
         $(document).on('input', '#percent', function() {
            discount()
        });
         $(document).on('input', '#flat', function() {
            discount()
        });
         $(document).on('input', '#pay', function() {
            pay()
        });

        function discount(){
            var subTotal = $('#suntotal').val();
            var percent = $('#percent').val();
            var flat = $('#flat').val();
            if(flat!=''){
               var after =subTotal-flat
               $('#Amount').val(after)
            }
            if(percent!=''){
               var com =(subTotal/100)*percent
               $('#Amount').val(subTotal-com)
            }
            pay()
        }
        function pay(){
            var Amount = $('#Amount').val();
            var pay = $('#pay').val();
            $('#due').val(Amount-pay)
        }
      
    });
</script>


@endsection