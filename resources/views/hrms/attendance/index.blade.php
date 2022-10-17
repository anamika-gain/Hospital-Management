@extends('layout.app')
@section('styles')
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
                <span>Attendence </span>
              
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
                            <th>Employee Name</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Attendance Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Employee Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Attendance Date</th>
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




{{-- Edit Patients Modal --}}
<div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form id="edittest">
    
      <input type="hidden" name="_method" value="get">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newTicketModalLabel">Add a new ticket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
      
            <div class="modal-body">
             
              <input type="hidden" type="text"  id="edit_test_id">
              <div class="form-group">
                <label for="exampleInputEmail1">Test Name</label>
                <input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="Test name" name="name">
              </div>
              @php
              $dept=DB::table('test_depts')->get();
              @endphp
              <div class="form-group ">
                <label for="exampleInputEmail1"> Department</label>
                <select class="form-control" data-placeholder="Choose Test Department" name="dept_id" id="newdept">
                <option label="Choose Category"></option>
                @foreach($dept as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
                    </select>
              </div>
              <div class="form-row">
                <div class="form-row">
                    <div class="input-group date col-lg-6">
                        <label>Invoice Date</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">event</i>
                            </div>
                            <input name="invoice" type="text" class="form-control" value="12-02-2012">
                        </div>
                    </div>
                    <div class="input-group date col-lg-6">
                        <label>Delivery Date</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">event</i>
                            </div>
                            <input name="delevery" type="text" class="form-control" value="12-02-2012">
                        </div>
                    </div>                   
            </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Refarral Commission</label>
                <input type="text" class="form-control" id="newref_commission" aria-describedby="emailHelp" placeholder="Refarral Commission" name="ref_commission">
              </div>

              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" id="newstatus" value="1">
                <span>Status</span>
                </label>
                </div>
             
       
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              <button type="submit" class="update-tests btn btn-primary">Sava</button>
              <p class="success"></p>
          </div>

      </div>
  </form>
  </div>
</div> 
{{--End Edit Patients Model --}}
<!-- create Patient MODAL -->
<!--modal-->
        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Category Add</h6>
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
              <form id="attendenceForm">
                
                <div class="modal-body pd-20">
                    @php
                    $dept=DB::table('users')->get();
                    @endphp
                    <div class="form-group ">
                      <label for="exampleInputEmail1">Employee</label>
                      <select class="form-control" data-placeholder="Choose Test Department" name="user_id">
                      <option label="Choose Employee"></option>
                      @foreach($dept as $row)
                      <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                          </select>
                    </div>
                
               <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="time_in" >Time In</label>
                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="time_in" name="time_in" required>
                        </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Time Out</label>
                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="time_out" name="time_out" required>
                        </div>
                    </div>
                </div>
                <div class="input-group date ">
                    <label>Attendance Date</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">event</i>
                        </div>
                        <input name="attendance_date" type="text" class="form-control" value="12-02-2012">
                    </div>
                </div>
                  <div class="form-group col-md-3 p-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" name="status" value="1">
                      <label class="form-check-label" for="gridCheck" style="margin-top:3px ">
                        Status
                      </label>
                    </div>
                  </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20" id="butsave">Submit</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </form>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          
<script type="text/javascript">
    $(document).ready(function() {
         
      
    fatchdata() 
    function fatchdata() {
        let table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
            "autoWidth": false,
            ajax: '{!! route("allattendances") !!}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'time_in', name: 'time_in'},
                {data: 'time_out', name: 'time_out'},
                {data: 'attendance_date', name: 'attendance_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    }

     
     $(document).on('click','.edit-tests',function(e){
        e.preventDefault();
        var test_id=$(this).val();
      
        $('#newTaskModal').modal('show');
      $.ajax({
        type:"POST",
        url:"/edit-tests/"+test_id,
        success:function(response){
            // console.log(response.tests);
             $('#edit_test_id').val(response.tests.id);
             $('#newname').val(response.tests.name);
             $('#newdept').val(response.tests.dept_id);
              $('#newprice').val(response.tests.price);
               $('#newref_commission').val(response.tests.ref_commission);
               $('#newstatus').val(response.tests.status);
        }
        

     });

     }); 

     $(document).on('click','.update-tests',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var test_id= $('#edit_test_id').val();
        console.log(test_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'name' : $('#newname').val(),
            'dept_id' : $('#newdept').val(),
            'price': $('#newprice').val(),
            'ref_commission': $('#newref_commission').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
                
         
                 type: "PUT",
                 url:"/update-tests/"+test_id,
                 data: data,
                 datatype:'json',
                 success: function(response){
                     //alert(data);
                     $('#edittest').trigger("reset");
                      $('#newTaskModal').modal('hide');
                      fatchdata() 
                 }
                 
                 
             });
    }); 

    $(document).on('click','.delete-tests',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var test_id=$(this).val();
        console.log(test_id);
        $.ajax({
                 type: "POST",
                 url:"/delete-tests/"+test_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
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
                 data: $('#attendenceForm').serialize(),
                 url:  "{{ route('attendance.store') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                    //  alert(data);
                     $('#attendenceForm').trigger("reset");
                      $('#modaldemo3').modal('hide');  
                 }
                 
                 
             });
   
          
         });
       });
</script>
@endsection