@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ali Waqas Details</h3>
              <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div class="row">
              <div class="col-md-4 text-center">
                  <div class="kv-avatar">
                          <img src="{{ asset('img/staff/customerpic.jpg') }}" width="80%">
                  </div>
              </div> 
              <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <td><b>Name</b></td>
                        <td>Ali Waqas</td>
                    </tr>
                    <tr>
                        <td><b>Date of Birth</b></td>
                        <td>25-Dec-1980</td>
                    </tr>
                    <tr>
                        <td><b>Mobile No.</b></td>
                        <td>0123456789</td>
                    </tr>
                    <tr>
                        <td><b>Email Address</b></td>
                        <td>aliwaqas@abc.com</td>
                    </tr>
                    <tr>
                        <td><b>NID</b></td>
                        <td>1234-5678-90</td>
                    </tr>
                    <tr>
                        <td><b>Status</b></td>
                        <td>
                            <span class="text-green"><b>Active</b></span>                        
                        </td>
                    </tr>
                
                    
                    </table>
              </div>
              </div>

          </div>
          
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/customers'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->
</div>

<!-- Next -->
<div class="row">
<div class="col-md-6">
<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Physical Address</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" >
        <div class="row">
            <div class="col-md-12">
            <table class="table table-striped">
            <tr>
                <td><b>Province</b></td>
                <td>Morobe</td>
            </tr>
            <tr>
                <td><b>District</b></td>
                <td>Lae</td>
            </tr>
            <tr>
                <td><b>LLG</b></td>
                <td>Urban Lae</td>
            </tr>
            <tr>
                <td><b>Ward</b></td>
                <td>5</td>
            </tr>
            <tr>
                <td><b>Street/Village</b></td>
                <td>Malekula Street</td>
            </tr>
            
            </table>
            </div>
            </div>

        </div>

</div>
</div>

<div class="col-md-6">
        <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Postal Address</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" >
                <div class="row">
                    <div class="col-md-12">
                    <table class="table table-striped">
                    <tr>
                        <td><b>P O Box</b></td>
                        <td>926</td>
                    </tr>
                    <tr>
                        <td><b>Province</b></td>
                        <td>Morobe</td>
                    </tr>
                    <tr>
                        <td><b>Post Office</b></td>
                        <td>Lae</td>
                    </tr>            
                    <tr>
                        <td><b></b></td>
                        <td>&nbsp;</td>
                    </tr> 
                    <tr>
                        <td><b></b></td>
                        <td>&nbsp;</td>
                    </tr> 
                    </table>
        
                    </div>
                    </div>
        
                </div>
        
        </div>
        </div>
    </div>

<div class="row">
<!-- Order Widget begin -->
<div class="col-md-6">
<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Latest Orders</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body" style="">
            <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer">
                <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
					<thead>
					<tr>
                        <th>Date</th>
                        <th>Order No</th>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
					<tbody>			  
					<tr>
						<td>01-Jan-2018</td>
						<td>123</td>
						<td>James Bond</td>
                        <td>K277.97</td>
                        <td>Delivered</td>
						<td>
						<a href="{!! url('/orders/1'); !!}" class="btn btn-primary" title="View Detail"><li class="fa fa-eye"></li> </a>
						</td>
                        </tr>
                    </tbody>
					<tfoot>
					</tfoot>
				</table></div>
					
	
		</div>
		<!-- /.box-body -->
    </div>
</div>
<!-- Order Widget ends -->

<!-- Product Widget begins -->
<div class="col-md-6">
        <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Favorites</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="">
                    <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer">
                        <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Code</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                            <tbody>			  
                            <tr>
                                <td>Fresh Tuna Fish</td>
                                <td>F001</td>
                                <td>K10.00</td>
                                <td>Madang Town</td>
                                <td>Toys</td>
                                <td>
                                    <a href="{!! url('/products/11'); !!}" class="btn btn-primary" title="View Detail"><li class="fa fa-eye"></li> </a>
                                </td>
                                </tr>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table></div>
                            
            
                </div>
                <!-- /.box-body -->
            </div>
        </div>
<!-- Product Widget ends -->

</div>

@endsection