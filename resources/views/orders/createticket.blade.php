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
              <h3 class="box-title">New Complaint</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{!! url('/orders/conversation'); !!}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Select Order</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="orderno" name="orderno" placeholder="Enter order number" autocomplete="off" value="{{ old('orderno') }}" require >
                    </div>
              </div>

                <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                    @if ($errors->has('description'))
                          <span class="text-red">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                

              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/support'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection