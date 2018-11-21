@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Ticket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{!! url('/support'); !!}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                        <label class="col-sm-3 control-label">Select Shop</label>
                            <div class="col-sm-9">
                                <select name="shopname" class="form-control">
                                <option value="">Select Shop</option>
                                <option value="2">Lego Shop</option>
                                <option value="2">Mcdonald</option>
                                </select>
                            </div>
                    </div>

                <div class="form-group">
                  <label for="subject" class="col-sm-3 control-label">Subject</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Please enter subject" autocomplete="off" value="{{ old('subject') }}" require >
                    @if ($errors->has('subject'))
                          <span class="text-red">
                              <strong>{{ $errors->first('subject') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="description" name="description"></textarea>
                    @if ($errors->has('description'))
                          <span class="text-red">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-3 control-label">Attach File</label>
  
                    <div class="col-sm-9">
                      <input type="file" name="attachment" multiple class="form-control" >
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
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
      $('#description').wysihtml5()
    })
</script>
@endsection