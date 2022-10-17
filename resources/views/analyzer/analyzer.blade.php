@extends('layout.app')
@section('title','Analyzers')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
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
                <span>Analyzers</span>
              
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Name</th>
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

<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>

{{-- Edit Patients Modal --}}
 <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form id="editpatient">
      
        <input type="hidden" name="_method" value="get">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTicketModalLabel">Edit Analyzer Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
              <div class="modal-body">
               
                <input type="hidden" type="text"  id="edit_userid_id">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1">Analyzer Name </label>
                        <input type="text" class="form-control"  id="newname" placeholder="Enter Your Name">
                    </div>
                  </div>
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
                <button type="submit" class="update-doctors btn btn-primary">Sava</button>
                <p class="success"></p>
            </div>

        </div>
    </form>
    </div>
</div> 
{{--End Edit Patients Model --}}
<!-- create Patient MODAL -->
<div id="modaldemo3" class="modal fade" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
    <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Analyzer</h6>
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
    <form id="analyzerForm">
    
    <div class="modal-body pd-20">
        <div class="form-group">
            <div class="form-group">
                <label for="description" class="mr-1">Analyzer's Name </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
            </div>
          
            <!-- Default checked -->
            <div class="form-group">
            <label for="message-text" class="col-form-label">Is Active <span>*</span></label>
            <label class="switch">
            <input type="checkbox" name="status" value="1">
            <span class="slider round"></span>
            </label>
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
                ajax: '{!! route("allanalyzers") !!}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                     {data: 'name', name: 'name'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        }
    $(document).on('click','.edit-analyzers',function(e){
        e.preventDefault();
        var analyzer_id=$(this).val();
        $('#newTaskModal').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-analyzer/"+analyzer_id,
            success:function(response){
                $('#edit_userid_id').val(response.analyzer.id);
                $('#newname').val(response.analyzer.name);
                if(response.analyzer.status==1){
                    $('#newstatus').prop("checked", true);;
                }
            }
        });

     }); 


     $(document).on('click','.update-analyzers',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var analyzer_id= $('#edit_userid_id').val();
        console.log(analyzer_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'name' : $('#newname').val(),
            'gender':$('#newgender').val(),
            'mobile': $('#newmobile').val(),
            'email': $('#Email').val(),
            'password': $('#password').val(),
            'address': $('#newaddress').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-analyzer/"+analyzer_id,
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

    $(document).on('click','.delete-analyzers',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var analyzer_id=$(this).val();
        console.log(analyzer_id);
        $.ajax({
                 type: "POST",
                 url:"/delete-analyzer/"+analyzer_id,
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
                 data: $('#analyzerForm').serialize(),
                 url:  "{{ route('store.analyzer') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     //alert(data);
                     $('#analyzerForm').trigger("reset");
                      $('#modaldemo3').modal('hide');
                      fatchdata()  
                 }
             });
          
         });
       });

</script>

@endsection