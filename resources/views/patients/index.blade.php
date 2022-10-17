@extends('layout.app')
@section('title','Patients')
@section('styles')
{{-- <link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 28px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 20px;
      width: 20px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(20px);
      -ms-transform: translateX(20px);
      transform: translateX(20px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
    </style>
@endsection
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Patients</span>
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
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
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


{{-- Edit Patients Modal --}}
 <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form id="editpatient">
      
        <input type="hidden" name="_method" value="get">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTicketModalLabel">Add a new Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
              <div class="modal-body">
               
                 <input type="hidden" type="text"  id="edit_patient_id">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1">Patient Name </label>
                        <input type="text" class="form-control"  id="newname" placeholder="Enter Your Name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity" class="col-form-label">Age</label>
                            <input type="text" class="form-control" id="newage"  placeholder="Enter Age">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState" class="col-form-label">Age Prefix</label>
                            <select class="form-control" id="newprefix" >
                            <option value="Y">Year</option>
                            <option value="M">Month</option>
                            <option value="D">Day's</option>
                           
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="col-form-label">Gender</label>
                            <select class="form-control" id="newgender">
                            <option>    --- Select Gender ---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other's">Other's</option>
                        </select>
                        </div>
                       
                    </div>
                    <div class="form-group">
                        <label for="description" class="mr-1">Mobile </label>
                        <input type="text" class="form-control" id="newmobile" placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Address </label>
                        <textarea class="form-control" id="newaddress" placeholder="Address"></textarea>
                      </div>
                   {{-- <!-- Default checked -->
                   <div class="form-group">
                    <label for="message-text" class="col-form-label">Is Active <span>*</span></label>
                   <label class="switch">
                    <input type="checkbox" name="is_current" value="{{old('is_current')}}">
                    <span class="slider round"></span>
                  </label>
                </div>
            --}}

             	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" id="newstatus" value="1">
					  <span>Status</span>
					</label>
            	</div>
                </div>
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="update-patients btn btn-primary">Sava</button>
                <p class="success"></p>
            </div>

        </div>
    </form>
    </div>
</div> 
{{--End Edit Patients Model --}}
@include('patients.add')
{{-- <script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
       
     fatchdata()
      
      function fatchdata() {
        let table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: '{!! route("allpatients") !!}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'gender', name: 'gender'},
                {data: 'age', name: 'age'},
                {data: 'address', name: 'address'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
     }

    $(document).on('click','.edit-patients',function(e){
        e.preventDefault();
        var patient_id=$(this).val();
            $('#newTaskModal').modal('show');
            $.ajax({
                type:"POST",
                url:"/edit-patient/"+patient_id,
                success:function(response){
                    $('#edit_patient_id').val(response.patient.id);
                    $('#newname').val(response.patient.name);
                    $('#newage').val(response.patient.age);
                    $('#newprefix').val(response.patient.prefix);
                    $('#newgender').val(response.patient.gender);
                    $('#newmobile').val(response.patient.mobile);
                    $('#newaddress').val(response.patient.address);
                    $('#newstatus').val(response.patient.status);
                }
            });
    }); 


    $(document).on('click','.update-patients',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var patient_id= $('#edit_patient_id').val();
        console.log(patient_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'name' : $('#newname').val(),
            'age' : $('#newage').val(),
            'prefix': $('#newprefix').val(),
            'gender':$('#newgender').val(),
            'mobile': $('#newmobile').val(),
            'address': $('#newaddress').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-patient/"+patient_id,
            data: data,
            datatype:'json',
            success: function(response){
                //alert(data);
                $('#editpatient').trigger("reset");
                 $('#newTaskModal').modal('hide');
                 fatchdata() 
            }
        });
    }); 

    $(document).on('click','.delete-patients',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var patient_id=$(this).val();
        console.log(patient_id);
        var x = confirm("Are you sure you want to delete?");
        if(x){
            $.ajax({
                 type: "POST",
                 url:"/delete-patient/"+patient_id,
                 datatype:'json',
                 success: function(data){
                      fatchdata() 
                 }
             });
        }
    }); 
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
                      fatchdata()  
                 }
             });
          
        });
    });

</script>
@endsection