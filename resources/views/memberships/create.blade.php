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

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Memberships</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{!! url('/memberships'); !!}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="price" class="col-sm-3 control-label">Price</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" autocomplete="off" value="{{ old('price') }}" require >
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
                    <input type="text" class="form-control" id="limit" name="limit" placeholder="Products Limit" value="{{ old('limit') }}" autocomplete="off" require>
                    @if ($errors->has('limit'))
                          <span class="text-red">
                              <strong>{{ $errors->first('limit') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                
                

              </div>
              </div>
              
          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/memberships'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection