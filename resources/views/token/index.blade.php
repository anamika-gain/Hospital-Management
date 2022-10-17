@extends('layout.app')
@section('title','Doctors')
@section('styles')

@endsection
@section('content')

<div class="container-fluid">
  
    <div class="card">
     
    
        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Tokens</span>
              
                <div class="col-lg-1" style="margin: 0px; padding:0px;">
                    <div class="form-group mg-b-10-force">
                    
                           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+ New</button>
                      </div>
                    </div>
            </h6>
        </div>
       <div class="py-4">
       
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                    
                    <thead>
                        <tr>
                            <th>Ser</th>
                            <th>Patient's Name</th>
                            <th>Doctor's Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="assets/vendor/Chart.min.js"></script>

<div id="modaldemo3" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Patients</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="tokenForm">
        
            <div class="modal-body pd-20">
                <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1">Patient Name </label>
                        <input type="text" class="form-control" name="patient_name" id="name" placeholder="Enter Your Name">
                    </div>
                    @php
                    $cat=DB::table('users')->where('role_id',"=",2)->get();
                    @endphp
                    <div class="form-group ">
                      <label for="exampleInputEmail1">Doctor</label>
                      <select class="form-control"  name="doctor_id" id="newcat">
                      <option label="Choose Doctor"></option>
                      @foreach($cat as $row)
                      <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                          </select>
                    </div>
                  
                    <div class="form-row">
                       
                        <div class="form-group col-md-12">
                            <label for="inputState" class="col-form-label">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                            <option>    --- Select Gender ---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other's">Other's</option>
                        </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="description" class="mr-1">Phone </label>
                        <input type="text" class="form-control" name="phone" id="mobile" placeholder="Enter Your Phone Number">
                    </div>
    
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Address </label>
                        <textarea class="form-control" id="message-text" name="address"></textarea>
                        </div>
                    <!-- Default checked -->
                    <div class="col-lg-4">
                        <label class="ckbox">
                          <input type="checkbox" id="newstatus" value="1" style="padding-bottom:3px" name="status">
                          <span> Status</span>
                      </label>
                  </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20" id="docsave">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->
<!-- create Patient MODAL -->
<div id="modaldemo" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Token</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="EditTokenForm">
        
            <div class="modal-body pd-20">
                <input type="hidden" type="text"  id="edit_token_id">
                <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1">Patient Name </label>
                        <input type="text" class="form-control" name="patient_name" id="newname" placeholder="Enter Your Name">
                    </div>
                    @php
                    $cat=DB::table('users')->where('role_id',"=",2)->get();
                    @endphp
                    <div class="form-group ">
                      <label for="exampleInputEmail1">Doctor</label>
                      <select class="form-control"  name="doctor_id" id="newdoc">
                      <option label="Choose Doctor"></option>
                      @foreach($cat as $row)
                      <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                          </select>
                    </div>
                  
                    <div class="form-row">
                       
                        <div class="form-group col-md-12">
                            <label for="inputState" class="col-form-label">Gender</label>
                            <select class="form-control" id="newgender" name="gender">
                            <option>    --- Select Gender ---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other's">Other's</option>
                        </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="description" class="mr-1">Phone </label>
                        <input type="text" class="form-control" id="newphone"  placeholder="Enter Your Phone Number">
                    </div>
    
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Address </label>
                        <textarea class="form-control" id="newaddress" name="address"></textarea>
                        </div>
                    <!-- Default checked -->
                    <div class="col-lg-4">
                        <label class="ckbox">
                          <input type="checkbox" id="newstatus" value="1" style="padding-bottom:3px" name="newstatus">
                          <span> Status</span>
                      </label>
                  </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20" id="tokenUpdate">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->
<!-- create Patient MODAL -->
{{-- @include('token.add') --}}


<script type="text/javascript">
    $(document).ready(function() {
        //fetch data code
        fatchdata() 
        function fatchdata() {
            let table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{!! route("alltokens") !!}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'patient_name', name: 'patient_name'},
                    {data: 'name', name: 'name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'phone', name: 'phone'},
                    {data: 'address', name: 'address'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
           

            
            });

        }
  
        $(document).on('click','.edit-tokens',function(e){
        e.preventDefault();
        var token_id=$(this).val();
        $('#modaldemo').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-token/"+token_id,
            success:function(response){
                console.log(response.token);
                $('#edit_token_id').val(response.token.id);
                $('#newname').val(response.token.patient_name);
                $('#newdoc').val(response.token.doctor_id);
                $('#newgender').val(response.token.gender);
                $('#newphone').val(response.token.phone);
                $('#newaddress').val(response.token.address);
                if(response.token.status==1){
                    $('#newstatus').prop("checked", true);;
                }
            }
        });

     }); 
     $(document).on('click','.print-tokens',function(e){

        var ID=$(this).val();
        location.replace("http://127.0.0.1:8000/token-invoice/"+ID)
        

        })
 

     $(document).on('click','#tokenUpdate',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var token_id= $('#edit_token_id').val();
        console.log(token_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'patient_name' : $('#newname').val(),
            'doctor_id' : $('#newdoc').val(),
            'gender':$('#newgender').val(),
            'phone': $('#newphone').val(),
            'address': $('#newaddress').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-token/"+token_id,
            data: data,
            datatype:'json',
            success: function(response){
                //alert(data);
                $('#EditTokenForm').trigger("reset");
                 $('#modaldemo').modal('hide');
                 fatchdata() 
            }
        });
    }); 

    $(document).on('click','.delete-tokens',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var token_id=$(this).val();
        
        $.ajax({
                 type: "POST",
                 url:"/delete-token/"+token_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
    }); 
           //add data code
 
    $.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

    });
       
 
         $('#docsave').on('click', function(e) {
         
         e.preventDefault();
 
         $(this).html('Sending..');
                 $.ajax({
                 data: $('#tokenForm').serialize(),
                 url:  "{{ route('token.store') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     //alert(data);
                     $('#tokenForm').trigger("reset");
                      $('#modaldemo4').modal('hide');
                      fatchdata()  
                 }
             });
          
         });
       });

</script>

@endsection