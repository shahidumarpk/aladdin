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
            width: 250px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
        </style>

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fresh Tuna Fish Product Details</h3>
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
                          <img src="{{ asset('img/products/product.jpg') }}" width="100%">
                  </div>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>Product Name</b></td>
                    <td>Fresh Tuna Fish</td>
                </tr>
                <tr>
                    <td><b>Code</b></td>
                    <td>F001</td>
                </tr>
                <tr>
                    <td><b>Price</b></td>
                    <td>K10.00</td>
                </tr>
                <tr>
                    <td><b>Available Qty</b></td>
                    <td>4</td>
                </tr>
                <tr>
                    <td><b>Location</b></td>
                    <td>Madang Town</td>
                </tr>
                <tr>
                    <td><b>Expiry Date</b></td>
                    <td>01-01-2018 5:20am</td>
                </tr>
                <tr>
                    <td><b>Category</b></td>
                    <td>Toys</td>
                </tr>

                <tr>
                    <td><b>Shop</b></td>
                    <td>Lego Shop</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Product Description</b></td>
                </tr>
                <td colspan="2">This is the product description. This is the product description. This is the product description. This is the product description. 
                        This is the product description. This is the product description. This is the product description. This is the product description. 
                         This is the product description. This is the product description. This is the product description. This is the product description. </td>
                
                <tr>
                    <td><b>Created At</b></td>
                    <td>09-10-2018</td>
                </tr>
                <tr>
                    <td><b>Updated At</b></td>
                    <td>09-10-2018</td>
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
              <div class="col-md-12">
                <div class="col-md-3 text-center">
                        <div class="kv-avatar" style="border: solid 1px gray; padding: 5px;">
                                <img src="{{ asset('img/products/product.jpg') }}" width="100%">
                        </div>
                    </div> 
                    <div class="col-md-3 text-center">
                        <div class="kv-avatar" style="border: solid 1px gray; padding: 5px;">
                                <img src="{{ asset('img/products/product.jpg') }}" width="100%">
                        </div>
                    </div> 
                    <div class="col-md-3 text-center">
                        <div class="kv-avatar" style="border: solid 1px gray; padding: 5px;">
                                <img src="{{ asset('img/products/product.jpg') }}" width="100%">
                        </div>
                    </div> 
                    <div class="col-md-3 text-center">
                            <div class="kv-avatar" style="border: solid 1px gray; padding: 5px;">
                                    <img src="{{ asset('img/products/product.jpg') }}" width="100%">
                            </div>
                    </div> 


              </div>

          </div>
          
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/products'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->
</div>

@endsection