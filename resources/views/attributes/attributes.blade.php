@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Attributes</h3>
              <span class="pull-right">
              <a href="{!! url('/attributes/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Attributes</a>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Attribute Name	</th>
                  <th>Created by</th>
                  <th>Created at</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>Color</td>
                      <td>Shahid Umar</td>
                      <td>14-June-2018</td>
                      <td><span class="btn btn-success">Active</span></td>
                      <td>
                        <a class="btn btn-success" title="Edit" href="{!! url('/attributes/1/edit'); !!}"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                        <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                        <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Shoe Sizes</td>
                        <td>Shahid Umar</td>
                        <td>14-June-2018</td>
                        <td><span class="btn btn-success">Active</span></td>
                        <td>
                          <a class="btn btn-success" title="Edit" href="#"><i class="fa fa-edit"></i> </a>
                          <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                          <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                          <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                        </td>
                      </tr>

                      <tr>
                          <td>3</td>
                          <td>Age</td>
                          <td>Shahid Umar</td>
                          <td>14-June-2018</td>
                          <td><span class="btn btn-success">Active</span></td>
                          <td>
                            <a class="btn btn-success" title="Edit" href="#"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                            <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                            <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                          </td>
                        </tr>
  


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created by</th>
                  <th>Created at</th>
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