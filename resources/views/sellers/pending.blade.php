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
        <form class="form-horizontal" action="{!! url('/sellers'); !!}" method="get" enctype="multipart/form-data">
          @csrf
        <div class="box box-success collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">Search</h3>            
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
                <label>Select Province</label>
                <select name="shopname" class="form-control select2 select2-hidden-accessible"  data-placeholder="Select a Province" style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option value="all">All</option>
                 <option value="1">Simbu</option>
                 <option value="2">Eastern Highlands</option>
                 <option value="2">Enga</option>
                 <option value="2">Southern Highlands</option>
                 <option value="2">Jiwaka</option>
                </select>
                
              </div>
  
                <div class="form-group col-md-12">
                  <label>Select District</label>
                  <select name="status" class="form-control select2 select2-hidden-accessible"  data-placeholder="Select District" style="width: 100%;" tabindex="-1" aria-hidden="true">
                   <option value="all">All</option>
                   <option value="1">Lae</option>
                   <option value="2">Chuave</option>
                   <option value="2">Gumine</option>
                   <option value="2">Lufa</option>
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
              <h3 class="box-title">Manage Sellers Pending</h3>
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
                  <th>Account Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>Steve Smith</td>
                    <td>steve@mcdonald.com</td>
                    <td>98765432100</td>
                    <td>McDonald Limited</td>
                    <td>Basic (10 Products)</td>
                    <td>Business</td>
                    <td>
                      <span class="btn btn-danger">Pending Verifiction</span>
                    </td>
                     <!-- For Delete Form begin -->
                    <form id="form{{$user['id']}}" action="{{action('SellerController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/sellers/20'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
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
                  <th>Account Type</th>
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