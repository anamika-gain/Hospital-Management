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
                <span>Leaves </span>
                <span>
                  <form id="searchForm" class="form-inline" style="text-align: center;padding-left:300px">
                  <div class="row input-daterange">
                      <div class="col-4 input-group date">
                          <input id="from" type="text" class="form-control" name="from">
                          <div class="input-group-addon">
                              <span class="material-icons" style="padding: 5px;">event</span>
                          </div>
                      </div>
                      <div class="col-4 input-group date">
                          <input id="to" type="text" class="form-control" name="to" >
                          <div class="input-group-addon">
                              <span class="material-icons" style="padding: 5px;">event</span>
                          </div>
                      </div>
                    </div>
                      <br>
                      <button type="submit" id="butsearch" class="btn btn-primary">Search</button>
                  </form>
              </span>
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
                            <th>Leave Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>reason</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                            <th>Employee Name</th>
                            <th>Leave Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>reason</th>
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




{{-- Edit Modal --}}
<div id="modaldemo" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Leave</h6>
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
      <form id="leaveEditForm">
        <input type="hidden" id="edit_leave_id" type="text" >
        <div class="modal-body pd-20">
            @php
            $dept=DB::table('users')->get();
            @endphp
            <div class="form-group ">
              <label for="exampleInputEmail1">Employee</label>
              <select class="form-control" data-placeholder="Choose Test Department" id="newemployee" name="employee_id" >
              <option label="Choose Employee"></option>
              @foreach($dept as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
                  </select>
            </div>
          @php
          $dept=DB::table('leavetypes')->get();
          @endphp
          <div class="form-group ">
            <label for="exampleInputEmail1">Leave Type</label>
            <select class="form-control" data-placeholder="Choose Test Department" id="newleavetype" name="leavetype_id" >
            <option label="Choose Leave type"></option>
            @foreach($dept as $row)
            <option value="{{$row->id}}">{{$row->leave_type}}</option>
            @endforeach
                </select>
          </div>
          <div class="form-row p-2">
       
                <div class="input-group date col-lg-6">
                    <label>Start Date</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="material-icons">event</i>
                        </div>
                        <input id="newstartdate" type="text" class=" datepicker form-control" name="startdate">
                    </div>
                </div>
                <div class="input-group date col-lg-6">
                    <label>End Date</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">event</i>
                        </div>
                        <input id="newenddate" type="text" class=" datepicker form-control" name="enddate">
                    </div>
                                 
        </div>
        
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Reason </label>
            <textarea class="form-control" id="newreason" name="reason"></textarea>
            </div>
          <div class="form-group col-md-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="newstatus" name="status" value="1">
              <label class="form-check-label" for="gridCheck" style="margin-top:3px ">
                Status
              </label>
            </div>
          </div>
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20" id="updatesave">Update</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
{{--End Edit Modal --}}
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
              <form id="leaveForm">
                
                <div class="modal-body pd-20">
                    @php
                    $dept=DB::table('users')->get();
                    @endphp
                    <div class="form-group ">
                      <label for="exampleInputEmail1">Employee</label>
                      <select class="form-control" data-placeholder="Choose Test Department" name="employee_id">
                      <option label="Choose Employee"></option>
                      @foreach($dept as $row)
                      <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                          </select>
                    </div>
                  @php
                  $dept=DB::table('leavetypes')->get();
                  @endphp
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Leave Type</label>
                    <select class="form-control" data-placeholder="Choose Test Department" name="leavetype_id">
                    <option label="Choose Leave type"></option>
                    @foreach($dept as $row)
                    <option value="{{$row->id}}">{{$row->leave_type}}</option>
                    @endforeach
                        </select>
                  </div>
                  <div class="form-row p-2">
               
                        <div class="input-group date col-lg-6">
                            <label>Start Date</label>
                            <div class="input-group input-group--inline">
                                <div class="input-group-addon">
                                    <i class="material-icons">event</i>
                                </div>
                                <input name="startdate" type="text" class="form-control" value="02-10-2022">
                            </div>
                        </div>
                        <div class="input-group date col-lg-6">
                            <label>End Date</label>
                            <div class="input-group input-group--inline">
                                <div class="input-group-addon">
                                    <i class="material-icons">event</i>
                                </div>
                                <input name="enddate" type="text" class="form-control" value="12-10-2022">
                            </div>
                                         
                </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Reason </label>
                    <textarea class="form-control" id="message-text" name="reason"></textarea>
                    </div>
                  <div class="form-group col-md-3">
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
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });
      
    fatchdata() 
    function fatchdata() {
        let table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
            "autoWidth": false,
            ajax: '{!! route("allleaves") !!}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'employee_name', name: 'employee_name'},
                {data: 'leave_type', name: 'leave_type'},
                {data: 'startdate', name: 'startdate'},
                {data: 'enddate', name: 'enddate'},
                {data: 'reason', name: 'reason'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    }

     
     $(document).on('click','.edit-leave',function(e){
        e.preventDefault();
        var test_id=$(this).val();
      
        $('#modaldemo').modal('show');
      $.ajax({
        type:"POST",
        url:"/edit-leaves/"+test_id,
        success:function(response){
           
            $('#edit_leave_id').val(response.leaves.id);
            $('#newemployee').val(response.leaves.employee_id);
            $('#newleavetype').val(response.leaves.leavetype_id);
            $('#newstartdate').val(response.leaves.startdate);
            $('#newenddate').val(response.leaves.enddate);
            $('#newreason').val(response.leaves.reason);
            if(response.leaves.status==1){
                    $('#newstatus').prop("checked", true);
                }
        
         
        }
        

     });

     }); 

     $(document).on('click','#updatesave',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var test_id= $('#edit_leave_id').val();
        console.log(test_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'employee_id' : $('#newemployee').val(),
            'leavetype_id' : $('#newleavetype').val(),
            'startdate': $('#newstartdate').val(),
            'enddate': $('#newenddate').val(),
            'reason': $('#newreason').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
                
         
                 type: "PUT",
                 url:"/update-leaves/"+test_id,
                 data: data,
                 datatype:'json',
                 success: function(response){
                     alert(data);
                     $('#leaveEditForm').trigger("reset");
                      $('#modaldemo').modal('hide');
                      fatchdata() 
                 }
                 
                 
             });
    }); 

    $(document).on('click','.delete-leave',function(e){
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
                 url:"/delete-leaves/"+test_id,
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
                 data: $('#leaveForm').serialize(),
                 url:  "{{ route('store.leave') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                    //  alert(data);
                     $('#leaveForm').trigger("reset");
                      $('#modaldemo3').modal('hide');  
                 }
                 
                 
             });
   
          
         });

         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#butsearch').on('click', function(e) {
        e.preventDefault();
        $('#data-table').html("");
        var dataTable = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            serverMethod: 'GET',
            ajax: {
                'url':"{!! route('leavefilter') !!}",
                'data': function(data){
                    // Read values
                    var from = $('#from').val();
                    var to = $('#to').val();
          

                    // Append to data
                    data.from = from;
                    data.to = to;
                   
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'employee_name', name: 'employee_name'},
                {data: 'leave_type', name: 'leave_type'},
                {data: 'startdate', name: 'startdate'},
                {data: 'enddate', name: 'enddate'},
                {data: 'reason', name: 'reason'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
          
        });
  
      
       });


</script>
@endsection