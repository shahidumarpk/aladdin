@extends('layouts.mainlayout')
@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Admins</h3>
              <span class="pull-right">
              <a href="{!! url('/admins/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Staff</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
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
                @foreach($users as $user)
                  <tr>
                    <td>{{$user['fname']}} {{$user['lname']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['phonenumber']}}</td>
                    <td>
                      @if ($user['status'] === 1)
                      <span class="btn btn-success">Active</span>
                      @else
                      <span class="btn btn-danger">Deactive</span>
                      @endif
                    </td>
                    <td>
                      <a href="{!! url('/admins/'.$user['id']); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/admins/'.$user['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a href="{!! url('/admins/destroy'); !!}"  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                      <a href="{!! url('/admins'); !!}"  class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      <a href="{!! url('/admins'); !!}"  class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                    </td>
                  </tr>
                  @endforeach
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
              @else
              <div>No Record found.</div>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   

@endsection