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
        <form class="form-horizontal" action="{!! url('/membershipsreports'); !!}" method="get" enctype="multipart/form-data">
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
                  <label>Select Membership</label>
                  <select name="membership" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Memberships" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                   <option value="all">All</option>
                   <option value="1">K220.00</option>
                   <option value="2">K440.00</option>
                   <option value="2">K880.00</option>
                  </select>
                  
                </div>
                <div class="form-group col-md-12">
                    <label>Select Status</label>
                    <select name="status" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Status" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                     <option value="all">All</option>
                     <option value="1">Paid</option>
                     <option value="2">Declined</option>
                    </select>
                    
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
              <h3 class="box-title">Memberships Report/Transactions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Transaction Id</th>
                  <th>Price</th>
                  <th>Shop</th>
                  <th>Received Date</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>123123123ABC</td>
                    <td>K220.00</td>
                    <td>Lego Shop</td>
                    <td>01-Jan-2018</td>
                    <td><span class="btn btn-success">Paid</span></td>
                    <!-- <td>
                      <a class="btn btn-primary" title="View Details" href="{!! url('/membershipsreportdetails/1/'); !!}"><i class="fa fa-eye"></i> </a>
                    </td> -->
                  </tr>
                  <tr>
                    <td>313133123ABC</td>
                    <td>K440.00</td>
                    <td>McDonald</td>
                    <td>08-Jan-2018</td>
                    <td><span class="btn btn-success">Paid</span></td>
                    
                  </tr>
                  <tr>
                    <td>484823123ABC</td>
                    <td>K880.00</td>
                    <td>KFC</td>
                    <td>05-Jan-2018</td>
                    <td><span class="btn btn-danger">Declined</span></td>
                    
                  </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Transaction Id</th>
                  <th>Price</th>
                  <th>Shop</th>
                  <th>Received Date</th>
                  <th>Status</th>
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