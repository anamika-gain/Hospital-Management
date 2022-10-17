@extends('layout.app')
@section('content')
<div class="container-fluid">



<div class="tab-content" id="accountTabsContent">
    <form method="POST" action="{{route('store.testbill')}}">
        @csrf
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="row">

            <div class="col-lg-9">
                <div class="card card-account" style="color:green;font-size: 16px;font-weight: 800;padding: 5px 10px;display: block;">
                    {{Session::get('success')}}
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card card-account">
                    <div class="card-body">
                            <div class="form-group form-row">
                              
                                <div class="col-lg-5">
                                  <label for="exampleInputEmail1">Patients</label>
                                  <select class="form-control" name="patient" id="patient">
                                    <option label="Choose Patient"></option>
                                 
                                    </select>
                                </div>
                                <div class="col-lg-1">
                                    <label>New</label>
                                     <button  type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+</button>
                                </div>

                               
                                <div class="col-lg-5">
                                  <label for="exampleInputEmail1"> Doctors</label>
                                  <select class="form-control" data-placeholder="Choose Test Department" name="doctor" id="doctor">
                                  <option label="Choose Doctors"></option>
                                      </select>
                                </div>
                                <div class="col-lg-1">
                                    <label>New</label>
                                    <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo4">+</button>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="input-group date col-lg-3">
                                    <label>Invoice Date</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">event</i>
                                        </div>
                                        <input name="invoice" type="text" class="form-control" value="12-02-2012">
                                    </div>
                                </div>
                                <div class="input-group date col-lg-3">
                                    <label>Delivery Date</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">event</i>
                                        </div>
                                        <input name="delevery" type="text" class="form-control" value="12-02-2012">
                                    </div>
                                </div>
                                

                                
                                <div class="col-lg-5 ">
                                  <label for="exampleInputEmail1"> referrals</label>
                                  <select class="form-control" data-placeholder="Choose Test Department" name="referral" id="referral">
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
                                 <option id="{{$row->id}}" value="{{$row->name}}">{{$row->name}}</option>
                                  @endforeach
                                  </select>
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
                     
                            <div class="col-lg-12 p-1">
                              <label for="exampleInputEmail1">Subtotal</label>
                              <input type="number" name="subtotal" class="form-control" id="suntotal" value="0">
                            </div>
                        
                            <div class="col-lg-12 p-1">
                              <label for="exampleInputEmail1">Discount %</label>
                            <input type="text" class="form-control" name="percent" id="percent" placeholder="percent">
                            </div>
                            
                            <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Discount ৳</label>
                              <input type="text" class="form-control" name="flat" id="flat" placeholder="flat amount">
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
                              <input type="text" class="form-control" id="Amount" name="after_dis" placeholder="After Discount">
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Pay Amount</label>
                              <input type="text" name="pay" class="form-control" id="pay" placeholder="pay amount">
                              </div>
                              <div class="col-lg-12 p-1">
                                <label for="exampleInputEmail1">Due Amount</label>
                              <input type="text" name="due" class="form-control" id="due" placeholder="due amount">
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
        fatchpatient()
        fatchdoctor()
        fatchrefer()
        

        function fatchpatient() {
            $.ajax({
                type:"GET",
                url:'{!! route("allpatientlist") !!}',
                dataType:"json",
                success: function(response){
                    $('#patient').html("");
                    $.each(response,function(key,value){
                        $('#patient').append(
                            '<option value="'+value.id+'">'+value.name+'</option>'
                        )
                    });
                }
            });
        }
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
           var ids =   $(this).find(':selected')[0].id;
            $.ajax({
               type:'GET',
               url:'getPrice/{id}',
               data:{id:ids},
               dataType:'json',
               success:function(data)
                {
                    $.each(data, function(key, response)
                    {     
                        $('#price').val(response.price);
                        $('#ref_comm').val(response.ref_commission);
                    });
                }
            });
        });
        $('#addrow').click(function(){
           var test=$('#testBill').val();
           var price=$('#price').val();
           var comission=$('#ref_comm').val();
           var subTotal = $('#suntotal').val();
          
           $('#suntotal').val(parseInt(subTotal)+parseInt(price))
            discount()
            $('#addmore').append(
                
                '<tr>\
                <td><input readonly value="'+test+'" name="test[]"></td>\
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