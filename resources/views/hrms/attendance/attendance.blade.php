@extends('layout.app')
@section('content')
<div class="container-fluid">
    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                Attendence
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SI</th>
                            <th scope="col" >Employee Name</th>
                            <th scope="col">Time In</th>
                            <th scope="col">Time Out</th>
                            <th scope="col" >Attendance Date</th>
                            <th scope="col" >Status</th>
                            <th scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($users as $row)
                        <tr>
                          
                            <th  scope="row">{{$i++}}</th>
                            <td >{{$row->name}}</td>
                            <td ></td>
                            <td ></td>
                            <td></td>
                            <td>
                                @if ($row->status == 1)
                                <a class="btn btn-sm btn-danger" title="Inactive"><i
                                        class="fa fa-thumbs-down"></i>Active</a>
                            @else
                                <a class="btn btn-sm btn-success" title="Active">Inactiove<i
                                        class="fa fa-thumbs-up"></i></a>
                            @endif</td>
                            <td>
                                <a href="#" type="button" class="checkin btn btn-primary btn-sm">Check In</a>
                                <a href="#" type="button" class="checkout btn btn-info btn-sm">Check Out</a>
                                <a href="#" type="button" class="menual btn btn-success btn-sm">Menual</a>
                                <a href="#" type="button" class="delete-attendance btn btn-danger btn-sm">Delete</a></td>
                        
                      
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col" class="text-center">SI</th>
                            <th scope="col" class="text-center">Employee Name</th>
                            <th scope="col" class="text-center">Time In</th>
                            <th scope="col" class="text-center">Time Out</th>
                            <th scope="col" class="text-center">Attendance Date</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Chech In</h6>
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
      
                <div class="form-group ">
                <label for="time_in" >Time In</label>
                <div class="bootstrap-timepicker">
                    <input type="time" class="form-control timepicker" id="time_in" name="time_in" required>
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
         
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20" id="butsave">Submit</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </form>
        </div>
      </div><!-- modal-dialog -->
</div> 

<div class="modal fade" id="newTaskModal2" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Chech In</h6>
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
      
                <div class="form-group ">
                <label for="time_in" >Time In</label>
                <div class="bootstrap-timepicker">
                    <input type="time" class="form-control timepicker" id="time_in" name="time_in" required>
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
         
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20" id="butsave">Submit</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </form>
        </div>
      </div><!-- modal-dialog -->
</div> 
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

     
     $(document).on('click','.checkin',function(e){
          $('#newTaskModal').modal('show');
     });

     
     $(document).on('click','.checkout',function(e){
          $('#newTaskModal').modal('show');
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

    $(document).on('click','.delete-attendance',function(e){
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
                 url:"/delete-attendance/"+test_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
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