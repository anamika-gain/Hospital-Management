@extends('layout.app')
@section('styles')
{{-- <link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="container-fluid">
       
        <div class="card">
       
            <div class="card-header border-0">
                <h6 class="d-flex align-items-center justify-content-between card-title">
                    <span>Collection History</span>
                    <span>
                        <form id="searchForm" class="form-inline" style="text-align: center;padding-left:300px">
        
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
                       
                            <br>
                            <button type="submit" id="butsearch" class="btn btn-primary">Search</button>
                        </form>
                    </span>
                </h6>
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="data-table" class="customer_data table table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th>Ser</th>
                                <th>Invoice</th>
                                <th>Patient's Name</th>
                                 <th>Receiver Name</th>
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

<script type="text/javascript">
    $(document).ready(function() {
       
    //  fatchdata()
      
    //   function fatchdata() {
    //     let table = $('#data-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         destroy: true,
    //         ajax: '{!! route("allcolls") !!}',
    //         columns: [
    //             {data: 'DT_RowIndex', orderable: false, searchable: false},
    //             {data: 'bill_id', name: 'bill_id'},
    //             {data: 'receiver_name', name: 'receiver_name'},
    //             {data: 'patient_name', name: 'patient_name'},
    //             {data: 'pay_amount', name: 'pay_amount'},
    //             {data: 'discount', name: 'discount'},
    //             {data: 'due_amount', name: 'due_amount'},
    //             {data: 'method', name: 'method'},
    //             {data: 'transaction_id', name: 'transaction_id'},
    //             {data: 'date', name: 'date'},
    //             {data: 'action', name: 'action', orderable: false, searchable: false}
    //         ]
    //     });
    //  }
    // });
       
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#butsearch').on('click', function(e) {
        e.preventDefault();
        
        var dataTable = $('.customer_data').DataTable({
            processing: true,
            serverSide: true,
            serverMethod: 'GET',
            ajax: {
                'url':"{!! route('collectionfilter') !!}",
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
                {data: 'bill_id', name: 'bill_id'},
                {data: 'receiver_name', name: 'receiver_name'},
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
          
        });
  
      
    
    // $(document).on('click','.delete-datas',function(e){
    //  $.ajaxSetup({
    //  headers: {
    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //  }
    //  });
    //     e.preventDefault();
    //     var test_id=$(this).val();
    //     console.log(test_id);
    //     $.ajax({
    //              type: "POST",
    //              url:"/delete-col/"+test_id,
    //              datatype:'json',
    //              success: function(data){
    //                  //alert(data);
           
    //                  fatchdata()
    //              }
                 
                 
    //          });
    }); 

      
</script>
{{-- <script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script> --}}
@endsection
