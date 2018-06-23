@extends('layouts.mainlayout')
@section('content')
<div class="col-md-6 col-md-offset-3">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Your Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="oldpassword" class="col-sm-3 control-label">Old Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="newpassword" class="col-sm-3 control-label">New Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="repassword" class="col-sm-3 control-label">Re-Type Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-Type Password">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="./dashboard" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Change Password</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
          </div>

 
@endsection