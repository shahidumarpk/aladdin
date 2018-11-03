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
<!-- Advance Filter Begins -->
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" action="{!! url('/products'); !!}" method="get" enctype="multipart/form-data">
          @csrf
        <div class="box box-success collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">Advance Filter</h3>            
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: none;">
            
            <!--Search Form Begins -->
            <div class="form-group col-md-12">
                <label>Select Category</label>
                <select name="categoryid" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option value="all">All</option>
                 <option value="1">Toys</option>
                 <option value="2">Food</option>
                </select>
                
              </div>

              <div class="form-group col-md-12">
                  <label>Keyword</label>
                  <input type="text" name="keyword" class="form-control"placeholder="Enter Keyword">                 
                </div>
             
              <script>
                
                 $(document).ready(function() { 
                    $('.select2').select2({
                        placeholder: "Select Staff",
                        multiple: false,
                    }); 
                  });
              </script>
            <!-- Search Form Ends -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-primary" id="searchRecords">Search
                <i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- /.box -->
      </form>
      </div>
</div>
<!-- Advance Filter Ends -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Products List</h3>
              <span class="pull-right">
              <!-- <a href="{!! url('/sellers/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Seller</a> -->
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Shop Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>F001</td>
                    <td>Fresh Tuna Fish</td>
                    <td>K10.00</td>
                    <td>Toys</td>
                    <td> <a href="{!! url('/sellers/'.$user['id']); !!}" title="View Detail">Lego Shop</a></td>
                    <td><span class="btn btn-success">Active</span></td>
                     <!-- For Delete Form begin - ->
                    <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/products/'.$user['id']); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <!--
                      <a href="{!! url('/products/'.$user['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      @if ($user['status'] === 1)
                        <a href="{!! url('/products/deactivate/'.$user['id']); !!}"  class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      @else
                        <a href="{!! url('/products/active/'.$user['id']); !!}"  class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      @endif
                       <button class="btn btn-danger" onclick="archiveFunction('form{{$user['id']}}')"><i class="fa fa-trash"></i></button>
                      <a href="{!! url('/products/resetpassword/'.$user->id); !!}"  class="btn btn-info" title="Reset Password"><i class="fa fa-key"></i> </a> -->
                    </td>
                   
                    

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Shop Name</th>
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