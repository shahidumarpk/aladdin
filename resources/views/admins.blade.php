@extends('layouts.mainlayout')
@section('content')
<style>

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


</style>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Admins</h3>
              <span class="pull-right">
              <button class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="fa fa-plus"></span> Add Staff</button>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  for ($x = 0; $x <= 10; $x++) {
                ?>
                  <tr>
                    <td>Shahid Umar</td>
                    <td>shahid.umar@gmail.com</td>
                    <td>123456789</td>
                    <td><span class="btn btn-success">Active</span></td>
                    <td>
                      <a class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                      <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Shahid Umar</td>
                    <td>shahid.umar@gmail.com</td>
                    <td>123456789</td>
                    <td><span class="btn btn-danger">Deactive</span></td>
                    <td>
                      <a class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                      <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                    </td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   

  <!-- Modal -->
  <div id="id01" class="modal">
  <div class="modal-dialog modal-lg">
  <form class="modal-content animate" action="#">
  @csrf
  <div class="modal-header">
    <button type="button" class="close" onclick="document.getElementById('id01').style.display='none'">×</button>
    <h4 class="modal-title">Add New Staff</h4>
  </div>

    <div class="modal-body" style="height:auto;">
      <div class="row">
        <div class="col-md-4 text-center">
            <div class="kv-avatar">
                <div class="file-loading">
                    <input id="avatar-1" name="avatar-1" type="file" required>
                </div>
            </div>
            <div class="kv-avatar-hint"><small>Select file < 1500 KB</small></div>
        </div> 
        <div class="col-md-8">
          <div class="form-group" style="padding:10px;">
            <label for="oldpassword" class="col-sm-3 control-label">First Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
            </div>
          </div>
          <div class="form-group" style="padding:10px;">
            <label for="oldpassword" class="col-sm-3 control-label">Last Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
            </div>
          </div>


          <div class="form-group" style="padding:10px;">
            <label for="oldpassword" class="col-sm-3 control-label">Phone Number</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
            </div>
          </div>

        </div>

    </div>
    </div>

  <div class="modal-footer">
    <button type="submit">Login</button>
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  </div>
  </form>
  </div>
</div>

@endsection