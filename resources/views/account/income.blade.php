@extends('layout.app')
@section('title','Income')
@section('styles')
{{-- <link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}

@endsection
@section('content')

<div class="container-fluid">
    
    <div class="card">

        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Incomes</span>
              
                <div class="col-lg-1" style="margin: 0px; padding:0px;">
                    <div class="form-group mg-b-10-force">
                    
                           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo5">+ New</button>
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
                        <th>operator</th>
                        <th>Amount</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <th>Ser</th>
                        <th>Name</th>
                        <th>operator</th>
                        <th>Amount</th>
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

{{-- <script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script> --}}

{{-- Edit Patients Modal --}}
 <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form id="editpatient">
      
        <input type="hidden" name="_method" value="get">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTicketModalLabel">Edit Income Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
              <div class="modal-body">
               
                <input type="hidden" type="text"  id="edit_incomeid_id">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1"> Name </label>
                        <input type="text" class="form-control" name="name" id="newname" placeholder="Enter Income Name">
                    </div>
                   
        
                    <div class="form-group ">
                        <label for="description" class="mr-1">Amount </label>
                        <input type="text" class="form-control" id="newamount" name="amount" placeholder="Enter Amount">
                    </div>
                </div>
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="update-income btn btn-primary">Sava</button>
                <p class="success"></p>
            </div>

        </div>
    </form>
    </div>
</div> 
{{--End Edit Patients Model --}}
<!-- create Patient MODAL -->
<div id="modaldemo5" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Income</h6>
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
        <form id="referralForm">
        
        <div class="modal-body pd-20">
            <div class="form-group">
                <div class="form-group">
                    <label for="description" class="mr-1"> Name </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Income Name">
                </div>
               
    
                    <div class="form-group ">
                        <label for="description" class="mr-1">Amount </label>
                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                    </div>
                  
                   
                    
                </div>
              
               
                
        </div><!-- modal-body -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20" id="refsave">Submit</button>
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
                ajax: '{!! route("allincomes") !!}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                     {data: 'name', name: 'name'},
                     {data: 'operator', name: 'operator'},
                     {data: 'amount', name: 'amount'},
                     {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        }
    $(document).on('click','.edit-incomes',function(e){
        e.preventDefault();
        var user_id=$(this).val();
        $('#newTaskModal').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-income/"+user_id,
            success:function(response){
                $('#edit_incomeid_id').val(response.income.id);
                $('#newname').val(response.income.name);
                $('#newamount').val(response.income.amount);
            }
        });

     }); 


     $(document).on('click','.update-income',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var user_id= $('#edit_incomeid_id').val();
        console.log(user_id);
       
        var data ={
            _token:'{{ csrf_token() }}',
            'name' : $('#newname').val(),
            'amount':$('#newamount').val(),
           
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-income/"+user_id,
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

    $(document).on('click','.delete-incomes',function(e){
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
                 url:"/delete-income/"+user_id,
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
       
 
         $('#refsave').on('click', function(e) {
         
         e.preventDefault();
 
         $(this).html('Sending..');
                 $.ajax({
                 data: $('#referralForm').serialize(),
                 url:  "{{ route('store.income') }}",
                 type: "POST",
                 datatype:'json',
                 success: function(data){
                     //alert(data);
                     $('#referralForm').trigger("reset");
                      $('#modaldemo5').modal('hide');
                      fatchdata()  
                 }
             });
          
         });
       });

</script>
@endsection