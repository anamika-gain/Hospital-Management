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
                <span>Discount History</span>
              
    
            </h6>
        </div>
       <div class="py-4">
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                         
                            <th>Bill Id</th>
                            <th>Patient's Name</th>
                            <th>Pay Amount</th>
                            <th>Total Amount</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
              
                        <th>Bill Id</th>
                        <th>Patient's Name</th>
                        <th>Pay Amount</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
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
{{-- 
<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script> --}}

<script type="text/javascript">
    $(document).ready(function() {
        fatchdata() 
    function fatchdata() {
            let table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{!! route("alldiscount") !!}',
                columns: [
                {data: 'id', name: 'id'},
                {data: 'patient_name', name: 'patient_name'},
                {data: 'pay', name: 'pay'},
                {data: 'total_amount', name: 'total_amount'},
                {data: 'discount', name: 'discount'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        }
  


    $(document).on('click','.print-datas',function(e){

        var ID=$(this).val();
        location.replace("http://127.0.0.1:8000/discount_invoice/"+ID)
           

        })
    });

</script>
@endsection