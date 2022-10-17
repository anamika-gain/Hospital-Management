@extends('layout.app')
@section('title','Doctors')
@section('styles')
{{-- <link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet"> --}}

@endsection
@section('content')

               
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            Data table
        </h4>
    </div>
    <div class="py-4">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Invoice Id</th>
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                        <th>Delivery Date</th>
                        <th>Invoice Date</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Pay</th>
                        <th>Due Amount</th>
                        <th>Payment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->patient_name}}</td>
                        <td>{{$bill->doctor_name}}</td>
                        <td>{{$bill->delivery_date}}</td>
                        <td>{{$bill->invoice_date}}</td>
                        <td>{{$bill->total_amount}}</td>
                        <td>{{$bill->discount}}</td>
                        @php
                        $net_amount=$bill->total_amount-$bill->discount
                        @endphp
                        <td>{{$net_amount}}</td>
                        <td>{{$bill->pay}}</td>
                        @php
                            $due=$net_amount-$bill->pay
                        @endphp
                        <td>{{$due}}</td>
                        <td><a href="{{ route('collection',$bill->id) }}"  type="button" class="btn btn-outline-success">Success</a></td>
                       
        
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Invoice Id</th>
                        <th>Patient's Name</th>
                        <th>Doctor's Name</th>
                        <th>Delivery Date</th>
                        <th>Invoice Date</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Pay</th>
                        <th>Due Amount</th>
                        <th>Payment</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


@endsection
@section('scripts')


<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar -->
<!-- Used for adding a custom scrollbar to the drawer -->
<script src="assets/vendor/simplebar.js"></script>


<script src="assets/vendor/Chart.min.js"></script>
<script src="assets/vendor/moment.min.js"></script>
<script src="assets/vendor/dateformat.js"></script>
<script src="assets/vendor/bootstrap-datepicker.min.js"></script>

<script>
    window.theme = "default";
</script>
<script src="assets/js/color_variables.js"></script>
<script src="assets/js/app.js"></script>


<script src="assets/vendor/dom-factory.js"></script>
<!-- DOM Factory -->
<script src="assets/vendor/material-design-kit.js"></script>
<!-- MDK -->



<script>
    (function() {
        'use strict';

        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()

        // Connect button(s) to drawer(s)
        var sidebarToggle = Array.prototype.slice.call(document.querySelectorAll('[data-toggle="sidebar"]'))

        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                var drawer = document.querySelector(selector)
                if (drawer) {
                    drawer.mdkDrawer.toggle()
                }
            })
        })



        window.top.location.hostname !== window.location.hostname && (window.top.location = window.location)

    })();
</script>


{{-- <script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script> --}}

<script>
    $('#data-table').dataTable();
</script>

@endsection