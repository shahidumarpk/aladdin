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
              <h3>K.0.00</h3>

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
              <h3>K.0.00</h3>

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
              <h3>0</h3>

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
              <h3>0</h3>

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
                  <h3>K.0.00</h3>
  
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
                  <h3>K.0.00</h3>
  
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
                  <h3>0</h3>
  
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
                  <h3>0</h3>
  
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
              <h3 class="box-title">McDonald Business Details</h3>
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
                          <img src="{{ asset('img/sellers/macdonalds.png') }}" width="100%">
                  </div>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>Company Name</b></td>
                    <td>McDonald Limited</td>
                </tr>
                <tr>
                    <td><b>Company Registration No.</b></td>
                    <td>1-654987</td>
                </tr>
                <tr>
                    <td><b>Business Name</b></td>
                    <td>McDonald</td>
                </tr>
                <tr>
                    <td><b>Business Name Registration No.</b></td>
                    <td>977777</td>
                </tr>
                <tr>
                    <td><b>Tax Identification No.</b></td>
                    <td>65478</td>
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
                    <td>www.mcdonald.com</td>
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
                        <span class="text-red"><b>Pending Verifiction</b></span>                        
                    </td>
                </tr>
                <tr>
                    <td><b>Upload Verified Documents</b></td>
                    <td>
                        <input type="file" class="form-control" multiple>
                    </td>
                </tr>
                <tr>
                    <td><b>Company Details Verified</b></td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>
              </table>
              </div>
              </div>

          </div>
          
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/sellers/pending'); !!}" class="btn btn-default">Back</a>
                <span class="pull-right">                   
                        <a href="{!! url('/sellers/pending'); !!}" class="btn btn-warning">Cancel</a>
                    <a href="#" onClick='swal("Success", "Shop has been activated Successfully", "success");' class="btn btn-success" title="Active">Activate </a>
                </span>
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
                <td>Steve Smith</td>
            </tr>
            <tr>
                <td><b>Business Phone Number</b></td>
                <td>+0132111</td>
            </tr>
            <tr>
                <td><b>Facsimile No.</b></td>
                <td>9876543210</td>
            </tr>
            <tr>
                <td><b>Mobile Number</b></td>
                <td>98765432100</td>
            </tr>
            <tr>
                <td><b>Email Address</b></td>
                <td>steve@mcdonald.com</td>
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


@endsection