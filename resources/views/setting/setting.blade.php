@extends('layout.app')
@section('title','Setting')
@section('content')
<div class="container-fluid">
        @if (Session::get('success'))
            <div class="alert alert-primary alert-dismissable fade show" role="alert">
                <p>  {{Session::get('success')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

     

    <div class="card-content" id="accountTabsContent">

        <div class="card-content" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <form action="{{ url('update-setting/'.$hospital->id) }}" method="post" enctype="multipart/form-data">
                @csrf 
           
                
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Hospital Name In English</label>
                                <input type="text" class="form-control" name="hospital_name_en" value="{{$hospital->hospital_name_en}}">
                            </div>
                            <div class="form-group">
                                <label>Hospital Name In Bangla</label><br>
                                <input autocomplete="off" class="form-control" type="text" name="hospital_name_bd" value="{{$hospital->hospital_name_bd}}">
                            </div>
                            <div class="form-group">
                                <label>Hospital Address</label><br>
                                <input autocomplete="off" class="form-control" type="text" name="hospital_address" value="{{$hospital->hospital_address}}">
                            </div>
                            <div class="form-group">
                                <label for="user_password_confirmation">Phone Number</label><br>
                                <input class="form-control" type="text" name="phone" value="{{$hospital->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="user_password_confirmation">Hotline Number</label><br>
                                <input class="form-control" type="text"  name="hotline" value="{{$hospital->hotline}}">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Logos</h4>
                        </div>
                        <div class="card-body text-center">

                            <img src="#" width="20%" style="fill: #00aced;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                            
                            <div>
                                <input class="btn btn-white btn-sm" type="file" name="logo" style="margin-top: 10px" id="logo"  >
                            </div>
                            <hr>
                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="20%" style="fill: #00aced;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"/></svg>
                            <div>
                                <input class="btn btn-white btn-sm" type="file" name="icon" style="margin-top: 10px"  id="icon">
                                   
                                    
                            </div>
                            <hr>
                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="20%" style="fill: #00aced;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"/></svg>
                            <div>
                                <input class="btn btn-white btn-sm" type="file" name="favicon" style="margin-top: 10px"  id="favicon">

                            </div>
                            
                        </div>
                        <button type="submit" class=" edit-setting btn btn-primary">Upadate Setting</button>
                    </div>
                </div>
            </div>
            <form>
        </div>
 
  
    </div>
</div>

@endsection
@section('scripts')
<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>
@endsection

