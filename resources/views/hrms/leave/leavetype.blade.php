@extends('layout.app')
@section('title','Leave Types')
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
    @if (Session::get('success'))
    <div class="alert alert-twitter alert-dismissable show" role="alert">
        <p>  {{Session::get('success')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card">

        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Leave Types</span>
              
                <div class="col-lg-1" style="margin: 0px; padding:0px;">
                    <div class="form-group mg-b-10-force">
                    
                           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#leave_typeForm">+ New</button>
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
                            <th>Leave Type</th>
                            <th>Max Leave Count</th>
                            <th>Leave Count Interval</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Leave Type</th>
                        <th>Max Leave Count</th>
                        <th>Leave Count Interval</th>
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

<div id="leave_typeForm" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Leave Type</h6>
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
            <div class="form-group">
                <div class="form-group">
                    <label for="description" class="mr-1">Leave Type </label>
                    <input type="text" class="form-control" name="leave_type" id="name" placeholder="Leave Type">
                </div>
         
                <div class="form-group">
                    <label for="description" class="mr-1">Max Leave Count </label>
                    <input type="text" class="form-control" name="max_leave_count"  placeholder="Max Leave Count">
                </div>
                <div class="form-group">
                <label for="description" class="mr-1">Max Leave Count </label>
            </div>
                <div class="form-row">
                   
                    <div class="mb-3 pl-2">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="current_mounth" name="leave_count_interval" > Current Month
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="current_financial_year" name="leave_count_interval"> Current Financial year 
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="none" name="leave_count_interval" value="none">
                            <label class="form-check-label" for="exampleCheck1" > None</label>
                          </div>
                    </div>                    
                </div>
                <div class="form-group">
                <label for="message-text" class="col-form-label">Is Active <span>*</span></label>
                <label class="switch">
                <input type="checkbox" name="status" value="1">
                <span class="slider round"></span>
                </label>
            </div>
        </div><!-- modal-body -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20" id="docsave">Submit</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
        </form>
        </div>
    </div>
 </div>
</div>
 <div id="modal2" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Leave Type</h6>
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
        <form id="leaveForm2">
        
        <div class="modal-body pd-20">
            <div class="form-group">
                <input type="hidden" id="edit_leave_id">
                <div class="form-group">
                    <label for="description" class="mr-1">Leave Type </label>
                    <input type="text" class="form-control" name="leave_type" id="newleave" placeholder="Leave Type">
                </div>
         
                <div class="form-group">
                    <label for="description" class="mr-1">Max Leave Count </label>
                    <input type="text" class="form-control" name="max_leave_count"  placeholder="Max Leave Count" id="newcount">
                </div>
                <div class="form-group">
                <label for="description" class="mr-1">Max Leave Count </label>
            </div>
            <div class="form-row">
                      
                <div class="form-group col-md-12">
                    <label for="inputState" class="col-form-label">Leave Count Interval</label>
                    <select class="form-control" id="interval" name="leave_count_interval">
                    <option>    --- Select Leave Count Interval ---</option>
                    <option value="current_mounth"> Current Month</option>
                    <option value="current_financial_year">Current Financial year</option>
                    <option value="none">None</option>
                </select>
                </div>
               
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="newstatus">
                <label class="form-check-label" for="exampleCheck1">Status</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20" id="update-leavetype">Submit</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
        </form>
        </div>
    </div>
 </div>
  </div>

<script type="text/javascript">
    $(document).ready(function() {
        fatchdata() 
        function fatchdata() {
            let table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{!! route("allleavetypes") !!}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'leave_type', name: 'leave_type'},
                    {data: 'max_leave_count', name: 'max_leave_count'},
                    {data: 'leave_count_interval', name: 'leave_count_interva'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        }
    $(document).on('click','.edit-leavetype',function(e){
        e.preventDefault();
        var user_id=$(this).val();
        console.log(user_id);
        $('#modal2').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-leavetype/"+user_id,
            success:function(response){
                $('#edit_leave_id').val(response.leavetype.id);
                $('#newleave').val(response.leavetype.leave_type);
                $('#newcount').val(response.leavetype.max_leave_count);
                $('#interval').val(response.leavetype.leave_count_interval);
                if(response.leavetype.status==1){
                    $('#newstatus').prop("checked", true);
                }
            }
        });

     }); 


     $(document).on('click','#update-leavetype',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        e.preventDefault();

        var user_id= $('#edit_leave_id').val();
        console.log(user_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'leave_type' : $('#newleave').val(),
            'max_leave_count':$('#newcount').val(),
            'leave_count_interval': $('#interval').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-leavetype/"+user_id,
            data: data,
            datatype:'json',
            success: function(response){
                alert(data);
                $('#leaveForm2').trigger("reset");
                 $('#Modal2').modal('hide');
                 fatchdata() 
            }
        });
    }); 

    $(document).on('click','.delete-leavetype',function(e){
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
                 url:"/delete-leavetype/"+user_id,
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
       
 
         $('#docsave').on('click', function(e) {
         
         e.preventDefault();
 
         $(this).html('Sending..');
                 $.ajax({
                 data: $('#leaveForm').serialize(),
                 url:  "{{ route('leave_type.store') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     //alert(data);
                     $('#leaveForm').trigger("reset");
                      $('#leave_typeForm').modal('hide');
                      fatchdata()  
                 }
             });
          
         });
       });

</script>

@endsection