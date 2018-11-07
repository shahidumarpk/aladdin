@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Order No.: 123
          <small class="pull-right">Date: 01-Jan-2018</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Lego Shop, ABC Limited</strong><br>
          P O Box 926<br>
          Lae, Morobe Province<br>
          Phone: +0123 4567<br>
          Email: jamesbond@abc.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>James Bond</strong><br>
          P O Box 926<br>
          Lae, Morobe Province<br>
          Phone: 7100 0007<br>
          Email: james@bond.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Order No.: 123</b><br>
        <br>
        <b>Status: <span class="text-green">New</span></b><br>
        <b>Total Amount:</b> K277.97<br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Qty</th>
            <th>Unit Price</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Lego The Ninjago Movie</td>
            <td>1</td>
            <td>K45.00</td>
            <td>K45.00</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Lego Buildable</td>
            <td>1</td>
            <td>K87.90</td>
            <td>K87.90</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Lego The Ninjago Movie 2</td>
            <td>2</td>
            <td>K20.00</td>
            <td>K40.00</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Lego Buildable 2</td>
            <td>1</td>
            <td>K60.00</td>
            <td>K60.00</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <div class="table-responsive">
          <table class="table">
            <tbody><tr>
              <th style="width:50%">Subtotal:</th>
              <td>K232.90</td>
            </tr>
            <tr>
              <th>Delivery(1-7 business days):</th>
              <td>K19.80</td>
            </tr>
            <tr>
                <th></th>
                <td><b>K252.70</b></td>
                </tr>
            <tr>
                <th>GST (10%)</th>
                <td>K25.27</td>
                </tr>
            <tr>
              <th><b>Total:</b></th>
              <td><b>K277.97</b></td>
            </tr>
          </tbody></table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-plane"></i> Track
        </button>
      </div>
    </div>
  </section>

@endsection