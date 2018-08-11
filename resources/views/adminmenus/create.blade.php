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
              <h3 class="box-title">Add Admin Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{!! url('/menu'); !!}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fname" class="col-sm-3 control-label">Menu Title</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="menutitle" name="menutitle" placeholder="Menu Title" autocomplete="off" value="{{ old('menutitle') }}" require >
                    @if ($errors->has('menutitle'))
                          <span class="text-red">
                              <strong>{{ $errors->first('menutitle') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="fname" class="col-sm-3 control-label">Parent Menu</label>

                  <div class="col-sm-9">
                  
                    <select name="parentid" class="form-control">
                        @if(count($adminmenus) > 0)
                            <option value="" selected>None</option>
                            @foreach($adminmenus as $menu)    
                                <option value="{{$menu->id}}">{{$menu->menutitle}}</option>                    
                            @endforeach
                        @else
                            <option value="">None</option>
                        @endif
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                     <span class="button-checkbox">
                    <button type="button" class="btn btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;Show in Navigation</button>
                    <input type="checkbox" class="hidden"  name="showinnav" value="1">
                    </span>

                    <span class="button-checkbox">
                    <button type="button" class="btn btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;Default</button>
                    <input type="checkbox" class="hidden"  name="setasdefault" value="1">
                    </span>                    
                </div>

                </div>


                <div class="form-group">
                  <label for="lname" class="col-sm-3 control-label">Icon Class</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="iconclass" name="iconclass" placeholder="Icon Class" value="{{ old('iconclass') }}" autocomplete="off" require>
                    @if ($errors->has('iconclass'))
                          <span class="text-red">
                              <strong>{{ $errors->first('iconclass') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">URL</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="urllink" name="urllink" placeholder="URL / Route" value="{{ old('urllink') }}" autocomplete="off" require>
                    @if ($errors->has('urllink'))
                          <span class="text-red">
                              <strong>{{ $errors->first('urllink') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-3 control-label">Display Order</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="displayorder" name="displayorder" placeholder="displayorder" autocomplete="off" value="{{ old('displayorder') }}" require>
                    @if ($errors->has('displayorder'))
                          <span class="text-red">
                              <strong>{{ $errors->first('displayorder') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="mselect" class="col-sm-3 control-label">Menu Selection</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="mselect" name="mselect" placeholder="Routes in comma saperated values" autocomplete="off" value="{{ old('mselect') }}">
                  </div>
                </div>                

              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/admins'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>

<script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>

@endsection