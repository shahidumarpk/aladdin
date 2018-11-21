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
      <form class="form-horizontal" action="{!! url('/support'); !!}" method="get" enctype="multipart/form-data">
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
              <label>Select Shop</label>
              <select name="shopname" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Shop" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
               <option value="all">All</option>
               <option value="1">Lego Shop</option>
               <option value="2">McDonald</option>
              </select>
              
            </div>

              <div class="form-group col-md-12">
                <label>Select Status</label>
                <select name="status" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Status" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option value="all">All</option>
                 <option value="1">New</option>
                 <option value="2">Inprocess</option>
                 <option value="2">Closed</option>
                 <option value="2">Re-Open</option>
                </select>
                
              </div>
           
            <script>
              
               $(document).ready(function() { 
                  $('.select2').select2({
                      placeholder: "Select Status",
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
              <h3 class="box-title">Manage Orders</h3>
              <span class="pull-right">
                <a href="{!! url('/support/create'); !!}" class="btn btn-info">New Ticket</a>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Ticket No.</th>
                  <th>Shop Name</th>
                  <th>Subject</th>
                  <th>Assigned Staff</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Resolved In</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>9898989</td>
                    <td>Lego Shop (James Bond)</td>
                    <td>Problem in creating new product</td>
                    <td>Michael Bole</td>
                    <td>01-Jan-2018</td>
                    <td>
                      <span class="btn btn-warning">Inprocess</span>
                    </td>
                    <td>-</td>
                    <td>
                      <a href="{!! url('/support/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                    </td>
                  </tr>
                  <tr>
                      <td>9898990</td>
                      <td>McDonald (Steve Smith)</td>
                      <td>Unable to upgrade membership</td>
                      <td>Shahid Umar</td>
                      <td>01-Jan-2018</td>
                      <td>
                        <span class="btn btn-info">New</span>
                      </td>
                      <td>-</td>
                      <td>
                        <a href="{!! url('/support/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      </td>
                    </tr>
                    <tr>
                      <td>9898555</td>
                      <td>McDonald (Steve Smith)</td>
                      <td>Payment problem</td>
                      <td>Shahid Umar</td>
                      <td>01-Jan-2018</td>
                      <td>
                        <span class="btn btn-success">Closed</span>
                      </td>
                      <td>2 Days</td>
                      <td>
                        <a href="{!! url('/support/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      </td>
                    </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                    <th>Ticket No.</th>
                    <th>Shop Name</th>
                    <th>Subject</th>
                    <th>Assigned Staff</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Resolved In</th>
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