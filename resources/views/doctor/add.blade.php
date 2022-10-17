<div id="modaldemo4" class="modal fade" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
    <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Doctor</h6>
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
    <form id="doctorForm">
    
    <div class="modal-body pd-20">
        <div class="form-group">
            <div class="form-group">
                <label for="description" class="mr-1">Doctor's Name </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group ">
                <label for="inputState" class="col-form-label">Gender</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                <option>    --- Select Gender ---</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other's">Other's</option>
            </select>
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="description" class="mr-1">Mobile </label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number">
                </div>
                <div class="form-group col-md-6">
                    <label for="description" class="mr-1">Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email address">
                </div>
               
                
            </div>
            <div class="form-group">
                <label for="description" class="mr-1">Password </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
            </div>

            <div class="form-group">
                <label for="message-text" class="col-form-label">Address </label>
                <textarea class="form-control" id="message-text" name="address"></textarea>
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
        <button type="submit" class="btn btn-info pd-x-20" id="docsave">Submit</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
    </div>
    </form>
    </div>
</div><!-- modal-dialog -->
</div><!-- modal -->