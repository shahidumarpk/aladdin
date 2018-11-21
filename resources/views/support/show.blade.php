@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
@if(session('failed'))
    <script>
      $( document ).ready(function() {
        swal("Failed", "{{session('failed')}}", "error");
      });
      
    </script>
@endif
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subject: Problem in creating new product</h3>
              <span class="pull-right">Ticket N0.: 9898989</span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <ul class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-red">
                            10 Feb. 2018
                          </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
  
                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
  
                        <h3 class="timeline-header"><b>Lego Shop</b>  </h3>
  
                        <div class="timeline-body">
                          Hi, 
                          I am unable to create the product from the app, its saying I have no internet. I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                          I am unable to create the product from the app, its saying I have no internet. 
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
 
                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
  
                        <h3 class="timeline-header no-border"><b>Support Team</b></h3>
                        <div class="timeline-body">
                            Hi, 
                            I am unable to create the product from the app, its saying I have no internet. I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                          </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
  
                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
  
                        <h3 class="timeline-header"><b>Support Team</b></h3>
  
                        <div class="timeline-body">
                            Hi, 
                            I am unable to create the product from the app, its saying I have no internet. I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-green">
                            3 Jan. 2018
                          </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
  
                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
  
                        <h3 class="timeline-header"><b>Lego Shop</b> has created a ticket</h3>
                        
  
                        <div class="timeline-body">
                            Hi, 
                            I am unable to create the product from the app, its saying I have no internet. I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            I am unable to create the product from the app, its saying I have no internet. 
                            <br>
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                  </ul>

                  
                   <!-- Post Reply Begin -->
                   <form>
                      
                    <h3>Post your Reply</h3>
                    <div class="form-group">
                        <textarea class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="status" class="control-label">Select Status</label>
                          <select class="form-control" id="status" name="status" placeholder="Select Status" required >
                              <option value="1" selected>Inprocess</option>
                              <option value="2">Closed</option>
                          </select>
                          @if ($errors->has('status'))
                              <span class="text-red">
                                  <strong>{{ $errors->first('status') }}</strong>
                              </span>
                          @endif
                  </div>

                    <div class="form-group">
                        <span class="pull-right">
                          <a href="javascript: void();" class="btn btn-primary" onClick='swal("Success", "Shop has been activated Successfully", "success");'>Reply</a>
                        </span>
                    </div>
                  </form>

                   <!-- Post Reply Ends -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   



<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
      $('.textarea').wysihtml5()
    })
</script>

@endsection
