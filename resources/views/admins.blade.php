@extends('layouts.mainlayout')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Admins</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
 
@endsection