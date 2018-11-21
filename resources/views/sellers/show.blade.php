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
<div class="row">
      <!-- Seller Stats begin -->
          
      <div class="clearfix"></div>
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
          <div class="inner">
              <h3>K.999.0</h3>

              <p>September Sales</p>
          </div>
          <div class="icon">
              <i class="fa fa-shopping-cart"></i>
          </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
          <div class="inner">
              <h3>K.450.75</h3>

              <p>Sept Gross Profit</p>
          </div>
          <div class="icon">
              <i class="ion ion-stats-bars"></i>
          </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
          <div class="inner">
              <h3>360</h3>

              <p>Sept Orders</p>
          </div>
          <div class="icon">
              <i class="ion ion-pie-graph"></i>
          </div>
          
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
          <div class="inner">
              <h3>85</h3>

              <p>No. of Customers</p>
          </div>
          <div class="icon">
              <i class="ion ion-person-add"></i>
          </div>
          
          </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
              <div class="inner">
                  <h3>K.167.5</h3>
  
                  <p>Today Sales</p>
              </div>
              <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
              <div class="inner">
                  <h3>K.105.00</h3>
  
                  <p>Today Gross Profit</p>
              </div>
              <div class="icon">
                  <i class="ion ion-stats-bars"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
              <div class="inner">
                  <h3>12</h3>
  
                  <p>Today Orders</p>
              </div>
              <div class="icon">
                  <i class="ion ion-pie-graph"></i>
              </div>
              
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
              <div class="inner">
                  <h3>4</h3>
  
                  <p>New Customer(s)</p>
              </div>
              <div class="icon">
                  <i class="ion ion-person-add"></i>
              </div>
              
              </div>
          </div>
          <!-- ./col -->

      
                
        
    <!-- Seller Stats ends -->

</div>


    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lego Shop Business Details</h3>
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
                          <img src="{{ asset('img/sellers/shoplogo.jpg') }}" width="100%">
                  </div>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>Company Name</b></td>
                    <td>ABC Limited</td>
                </tr>
                <tr>
                    <td><b>Company Registration No.</b></td>
                    <td>1-9871231</td>
                </tr>
                <tr>
                    <td><b>Business Name</b></td>
                    <td>Lego Shop</td>
                </tr>
                <tr>
                    <td><b>Business Name Registration No.</b></td>
                    <td>123456</td>
                </tr>
                <tr>
                    <td><b>Tax Identification No.</b></td>
                    <td>45698</td>
                </tr>
                
                <tr>
                    <td><b>Created At</b></td>
                    <td>09-10-2018</td>
                </tr>
                <tr>
                    <td><b>Updated At</b></td>
                    <td>09-10-2018</td>
                </tr>
                <tr>
                    <td><b>Website Address</b></td>
                    <td>www.jamesbond.com</td>
                </tr>
                <tr>
                    <td><b>Membership </b></td>
                    <td>
                        Basic (10 Products)                      
                    </td>
                </tr>
                <tr>
                    <td><b>Account Type </b></td>
                    <td>
                        Business
                    </td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>
                        <span class="text-green"><b>Active</b></span>                        
                    </td>
                </tr>

                <tr>
                    <td><b>Company Details Verified	</b></td>
                    <td>
                        <span class="btn btn-success"><li class="fa fa-check"></li><b> Verified</b></span>                        
                    </td>
                </tr>
                <tr>
                    <td><b>Upload Verified Documents</b></td>
                    <td>
                        <a href="#">verified.pdf <li class="fa fa-download"></li></a>
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
          <h3 class="box-title">Contact Details</h3>
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
                <td><b>Name</b></td>
                <td>James Bond</td>
            </tr>
            <tr>
                <td><b>Business Phone Number</b></td>
                <td>+0132156</td>
            </tr>
            <tr>
                <td><b>Facsimile No.</b></td>
                <td>0123456789</td>
            </tr>
            <tr>
                <td><b>Mobile Number</b></td>
                <td>1234567890</td>
            </tr>
            <tr>
                <td><b>Email Address</b></td>
                <td>jamesbound@abc.com</td>
            </tr>
           
            
          </table>
              

          </div>
          </div>

      </div>
         
</div>
</div>

<div class="col-md-3">
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

<div class="col-md-3">
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
                    <h3 class="box-title">Latest Products</h3>
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