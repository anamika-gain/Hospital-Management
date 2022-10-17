@extends('layout.app')
@section('styles')
{{-- <link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="container-fluid">

    {{-- <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Component</h4>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-2 input-group date">
                <input type="text" class="form-control" value="12-02-2012">
                <div class="input-group-addon">
                    <span class="material-icons" style="padding: 5px;">event</span>
                </div>
            </div>
            <div class="col-2 input-group date">
                <input type="text" class="form-control" value="12-02-2012">
                <div class="input-group-addon">
                    <span class="material-icons" style="padding: 5px;">event</span>
                </div>
            </div>
        </div>
        </div>
    </div> --}}
  
                
        <div class="card">
            <div class="card-header">
              Collection History
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="data-table" class=" table table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th>Ser</th>
                                <th>Invoice</th>
                                <th>Patient's Name</th>
                     
                                <th>Pay Amount</th>
                                <th>Discount</th>
                                <th>Due Amount</th>
                                <th>Pay Method</th>
                                <th>Transaction Id</th>
                                <th>Date</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection

@section('scripts')
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
            ajax: '{!! route("allcolls") !!}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'bill_id', name: 'bill_id'},
                {data: 'patient_name', name: 'patient_name'},
                {data: 'pay_amount', name: 'pay_amount'},
                {data: 'discount', name: 'discount'},
                {data: 'due_amount', name: 'due_amount'},
                {data: 'method', name: 'method'},
                {data: 'transaction_id', name: 'transaction_id'},
                {data: 'date', name: 'date'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
     }
    });
    $(document).on('click','.delete-datas',function(e){
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
                 url:"/delete-view/"+test_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
    }); 
</script>
@endsection

