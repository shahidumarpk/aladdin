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
              <h3 class="box-title">Manage Memberships</h3>
              <span class="pull-right">
                <a href="{!! url('/memberships/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Membership</a>
                </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Price</th>
                  <th>Product Limits</th>
                  <th>Created By</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>1</td>
                    <td>K220.00</td>
                    <td>10</td>
                    <td>Shahid</td>
                    <td>
                      <span class="btn btn-success">Active</span>
                    </td>
                    <td>
                      <a class="btn btn-success" title="Edit" href="{!! url('/memberships/1/edit'); !!}"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                   
                    

                  </tr>

                  <tr>
                      <td>2</td>
                      <td>K440.00</td>
                      <td>50</td>
                      <td>Shahid</td>
                      <td>
                        <span class="btn btn-success">Active</span>
                      </td>
                      <td>
                        <a class="btn btn-success" title="Edit" href="{!! url('/memberships/1/edit'); !!}"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                        <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                        <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a> 
                      </td>
                     
                      
  
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>K880.00</td>
                        <td>50+</td>
                        <td>Shahid</td>
                        <td>
                          <span class="btn btn-success">Active</span>
                        </td>
                        <td>
                          <a class="btn btn-success" title="Edit" href="{!! url('/memberships/1/edit'); !!}"><i class="fa fa-edit"></i> </a>
                          <a class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                          <a class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                          <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>  
                        </td>
                       
                        
    
                      </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Order No</th>
                  <th>Seller Name</th>
                  <th>Order Date</th>
                  <th>Total Amount</th>
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