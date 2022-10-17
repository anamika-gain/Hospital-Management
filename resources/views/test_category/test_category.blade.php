@extends('layout.app')
@section('styles')

<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
@section('content')

<div class="container-fluid">
    
    <div class="card">

        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Tickets</span>
                <span>
                <a href="#" class="btn btn-faded btn-sm" data-toggle="modal" data-target="#newTicketModal">
                <i class="material-icons md-18 align-middle">add</i>
                <span class="align-middle" id="myBtn" type="button" data-toggle="modal" data-target="#modaldemo3">NEW</span>
                </a>
                </span>
            </h6>
        </div>
        <div class="py-4">
            <div class="table-responsive">
                <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="data-table" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="data-table_info">
                    <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 125px;">Id</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 193px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 89px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                   </tbody>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1">id</th><th rowspan="1" colspan="1">name</th><th rowspan="1" colspan="1">stutus</th><th rowspan="1" colspan="1">Action</th></tr>
                    </tfoot>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="col-lg-1" style="margin: 0px; padding:0px;">
    <div class="form-group mg-b-10-force">
        <label class="form-control-label">Add Category: <span
            class="tx-danger"></span></label>
           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+</button>
      </div>
    </div> --}}
@endsection
@section('scripts')


{{-- Edit Patients Modal --}}
<div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form id="edittest">
    
      <input type="hidden" name="_method" value="get">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newTicketModalLabel">Add a new ticket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
      
            <div class="modal-body">
             
              <input type="hidden" type="text"  id="edit_test_id">
              <div class="form-group">
                <label for="exampleInputEmail1">Test Name</label>
                <input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="Test name" name="name">
              </div>
          
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" id="newstatus" value="1">
                <span>Status</span>
                </label>
                </div>
             
       
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              <button type="submit" class="update-cat btn btn-primary">Sava</button>
              <p class="success"></p>
          </div>

      </div>
  </form>
  </div>
</div> 
{{--End Edit Patients Model --}}

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
      <form id="categoryForm">

        <div class="modal-body pd-20">
          <div class="form-group" >
            <label for="exampleInputEmail1">Category Name</label>
            <input type="text" class="form-control" id="category_name" aria-describedby="emailHelp" placeholder="Category" name="category_name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input type="text" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Category" name="slug">
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
  
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}
  
<script type="text/javascript">
      $(document).ready(function() {


      fatchdata()
      
      function fatchdata() {
        
       $.ajax({
        type:"GET",
        url:"/all-category-tests",
        dataType:"json",
        success: function(response){
         console.log(response.category);
         $('tbody').html("");
         $.each(response.category,function(key,item){

        $('tbody').append('<tr role="row" class="odd">\
                <td class="sorting_1">'+item.id+'</td>\
                <td>'+item.name+'</td>\
                <td>'+item.status+'</td>\
                <td>\
               <button type="button" class="edit-category btn btn-info btn-sm " value="'+item.id+'">Edit</button>\
                <button type="button" class=" delete-category btn btn-danger btn-sm delete-link" value="'+item.id+'">Delete</button>\
            </td>\
            </tr>\
        ');
        });
        }

       });
     }  
     
          
     $(document).on('click','.edit-category',function(e){
        e.preventDefault();
        var category_id=$(this).val();
      
        $('#newTaskModal').modal('show');
      $.ajax({
        type:"POST",
        url:"/edit-category/"+category_id,
        success:function(response){
            // console.log(response.tests);
             $('#edit_test_id').val(response.categories.id);
             $('#newname').val(response.categories.name);
            $('#newstatus').val(response.categories.status);
        }
        

     });

     }); 
     $(document).on('click','.update-cat',function(e){
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
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
                
         
                 type: "PUT",
                 url:"/update-category/"+test_id,
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
    

    $(document).on('click','.delete-category',function(e){
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
                 url:"/delete-category/"+test_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
    }); 

      });
      </script>
      <script src="assets/vendor/Chart.min.js"></script>

      <script src="assets/vendor/jquery.dataTables.js"></script>
      <script src="assets/vendor/dataTables.bootstrap4.js"></script>
    @endsection