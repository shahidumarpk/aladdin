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
              <h3 class="box-title">Add Attribute</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <form class="form-horizontal" action="{!! url('/attributes/create'); !!}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fname" class="col-sm-3 control-label">Attribute Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Attribute Name"  require >
                    @if ($errors->has('name'))
                          <span class="text-red">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Option</label>    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="option[]" name="option[]" placeholder="Option Value" require >
                    </div>
                </div>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Option</label>    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="option[]" name="option[]" placeholder="Option Value" require >
                    </div>
                </div>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Option</label>    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="option[]" name="option[]" placeholder="Option Value" require >
                    </div>
                </div>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Option</label>    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="option[]" name="option[]" placeholder="Option Value" require >
                    </div>
                </div>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Option</label>    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="option[]" name="option[]" placeholder="Option Value" require >
                    </div>
                </div>



                <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label"></label>    
                        <div class="col-sm-9">
                                <button type="button" class="btn btn-warning"><li class="fa fa-plus"></li> Add More Option</button>
                        </div>
                    </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/categories'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right"><li class="fa fa-plus"></li> Add Attribute</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection