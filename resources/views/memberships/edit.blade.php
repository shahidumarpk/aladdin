@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif

    <div class="box box-info">


            <div class="box-header with-border">
              <h3 class="box-title">Edit Membership</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <form class="form-horizontal" action="{{action('MembershipController@update', $id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="box-body" >
            <div class="row">
              <div class="col-md-12">
                    <div class="col-md-12">
                            <div class="form-group">
                              <label for="price" class="col-sm-3 control-label">Price</label>
            
                              <div class="col-sm-9">
                                <input type="number" class="form-control" id="price" name="price" placeholder="Price" autocomplete="off" value="220.00" require >
                                @if ($errors->has('price'))
                                      <span class="text-red">
                                          <strong>{{ $errors->first('price') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="limit" class="col-sm-3 control-label">Product Limit</label>
            
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="limit" name="limit" placeholder="Products Limit" value="10" autocomplete="off" require>
                                @if ($errors->has('limit'))
                                      <span class="text-red">
                                          <strong>{{ $errors->first('limit') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                <div class="form-group">
                  <label for="status" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-9">
                    
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="2">Deactivate</option>
                    </select>
                  </div>
                </div>


              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/customers'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection