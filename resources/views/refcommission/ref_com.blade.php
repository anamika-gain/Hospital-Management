@extends('layout.app')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <h6 class="d-flex align-items-center justify-content-between card-title">
                    <span>Tickets</span>
                    <span>
                        <form id="searchForm" class="form-inline" style="text-align: center;padding-left:300px">
        
                            <div class="col-4 input-group date">
                                <input id="from" type="text" class="form-control" name="from" value="10-10-2010">
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
                       
                            @php
                            $referral=DB::table('users')->where('role_id',"=",3)->get();
                            @endphp
                            <select id="reffer" class="form-control"  name="name">
                            <option>Select Referral</option>
                            @foreach($referral as $row)
                            <option class="form-control dropdown-item"  value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                            </select>
                            <br>
                            <button type="submit" id="butsearch" class="btn btn-primary">Search</button>
                        </form>
                    </span>
                </h6>
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table id="customer_data" class="table">
                        <thead>
                            <tr>
                      
                                <th scope="col" class="text-center">Bill Id</th>
                                <th scope="col" class="text-center">Refer Name</th>
                                <th scope="col" class="text-center">Amount</th>
                                <th scope="col" class="text-center">Date</th>
                                <th scope="col" class="text-center">Status</th>
                                
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
<script src="{{asset('/')}}assets/vendor/jquery.dataTables.js"></script>
<script src="{{asset('/')}}assets/vendor/dataTables.bootstrap4.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#butsearch').on('click', function(e) {
        e.preventDefault();
        
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            serverMethod: 'POST',
            ajax: {
                'url':"{!! route('referralfilter') !!}",
                'data': function(data){
                    // Read values
                    var from = $('#from').val();
                    var to = $('#to').val();
                    var reffer = $('#reffer').val();

                    // Append to data
                    data.from = from;
                    data.to = to;
                    data.reffer = reffer;
                }
            },
            columns: [
                
                {
                    data:'billing_id',
                    name:'billing_id'
                },
                {
                    data:'refer_name',
                    name:'refer_name'
                },
                {
                    data:'amount',
                    name:'amount'
                },
                {
                    data:'date',
                    name:'date'
                },
                
                {
                    data:'status',
                    name:'status'
                }
            ]
        });
          
        });
    });
      
</script>


@endsection