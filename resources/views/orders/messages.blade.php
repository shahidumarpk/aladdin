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
              <h3 class="box-title">Manage Orders Messages</h3>
              <span class="pull-right">
                  <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info">New Complaint</a>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Order No</th>
                  <th>Seller Name</th>
                  <th>Shopper Name</th>
                  <th>Last Message</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>123</td>
                    <td>James Bond</td>
                    <td>Ali Waqas</td>
                    <td><li class="fa fa-wechat"></li> When I will get my order.</td>
                    <td>
                      <a href="{!! url('/orders/conversation'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                    </td>
                   
                    

                  </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Order No</th>
                  <th>Seller Name</th>
                  <th>Shopper Name</th>
                  <th>Last Message</th>
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