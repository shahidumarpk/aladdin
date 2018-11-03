@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
@if(session('failed'))
    <script>
      $( document ).ready(function() {
        swal("Failed", "{{session('failed')}}", "error");
      });
      
    </script>
@endif

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Sellers</h3>
              <span class="pull-right">
              <a href="{!! url('/sellers/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Seller</a>
              </span>
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
                  <th>Company Name</th>
                  <th>Membership</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>James Bond</td>
                    <td>jamesbond@abc.com</td>
                    <td>+0132156</td>
                    <td>Lego Shop</td>
                    <td>Basic (10 Products)</td>
                    <td>
                      @if ($user['status'] === 1)
                      <span class="btn btn-success">Active</span>
                      @else
                      <span class="btn btn-danger">Deactive</span>
                      @endif
                    </td>
                     <!-- For Delete Form begin -->
                    <form id="form{{$user['id']}}" action="{{action('SellerController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/sellers/'.$user['id']); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/sellers/'.$user['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      @if ($user['status'] === 1)
                        <a href="{!! url('/sellers/deactivate/'.$user['id']); !!}"  class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      @else
                        <a href="{!! url('/sellers/active/'.$user['id']); !!}"  class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      @endif
                      <button class="btn btn-danger" onclick="archiveFunction('form{{$user['id']}}')"><i class="fa fa-trash"></i></button>
                      <a href="{!! url('/sellers/resetpassword/'.$user->id); !!}"  class="btn btn-info" title="Reset Password"><i class="fa fa-key"></i> </a>
                    </td>
                   
                    

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Company Name</th>
                  <th>Membership</th>
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