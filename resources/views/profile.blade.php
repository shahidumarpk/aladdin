@extends('layouts.mainlayout')
@section('content')
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>

            <form class="form-horizontal">
              @csrf
              <div class="row">

                 <div class="col-sm-4 text-center">
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="avatar-1" name="avatar-1" type="file" required>
                      </div>
                  </div>
                  <div class="kv-avatar-hint"><small>Select file < 1500 KB</small></div>
              </div>

                <div class="col-sm-8">
                <div class="box-body" >
                  <div class="form-group">
                    <label for="oldpassword" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="oldpassword" class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="oldpassword" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                    </div>
                  </div>
                </div>
                  
                </div>
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <a href="./dashboard" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update Profile</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection