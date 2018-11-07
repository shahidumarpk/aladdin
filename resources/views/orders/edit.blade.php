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
              <h3 class="box-title">Edit Seller  Lego Shop</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <form class="form-horizontal" action="{{action('SellerController@update', $id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="box-body" >
            <div class="row">
             <div class="col-md-12">
                    <h3>Business Details</h3>
                    <div class="form-group">
                        <label for="companyname" class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" value="ABC Limited" autocomplete="off" require >
                            @if ($errors->has('fname'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('companyname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="companyregno" class="col-sm-3 control-label">Company Registration No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="companyregno" name="companyregno" placeholder="Company Registration No." value="1-9871231" autocomplete="off" require >
                            @if ($errors->has('fname'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('companyregno') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="businessname" class="col-sm-3 control-label">Business Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="businessname" name="businessname" placeholder="Business Name" value="Lego Shop" autocomplete="off" require >
                            @if ($errors->has('fname'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('businessname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="businessnameregno" class="col-sm-3 control-label">Business Name Registration No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="businessnameregno" name="businessnameregno" placeholder="Business Name Registration No." value="123456" autocomplete="off" require >
                            @if ($errors->has('fname'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('businessnameregno') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="taxidentificationno" class="col-sm-3 control-label">Tax Identification No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="taxidentificationno" name="taxidentificationno" placeholder="Tax Identification No." value="45698" autocomplete="off" require >
                            @if ($errors->has('fname'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('taxidentificationno') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="taxidentificationno" class="col-sm-3 control-label">Upload Business Logo</label>
                            <div class="col-sm-9">
                            <div class="kv-avatar">
                                <div class="file-loading">
                                    
                                    <input id="avatar-1" name="avatar-1" type="file">
                                </div>
                            </div>
                            <div class="kv-avatar-hint"><small>Select file < 1000 KB</small></div>
                            </div>
                    </div> 
    
                    <h3>Contact Details</h3>
                    <div class="form-group">
                      <label for="fname" class="col-sm-3 control-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off" value="James" require >
                        @if ($errors->has('fname'))
                              <span class="text-red">
                                  <strong>{{ $errors->first('fname') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="lname" class="col-sm-3 control-label">Last Name</label>
    
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="Bond" autocomplete="off" require>
                        @if ($errors->has('lname'))
                              <span class="text-red">
                                  <strong>{{ $errors->first('lname') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber" class="col-sm-3 control-label">Business Phone Number</label>
        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Business Phone Number" value="+0132156" autocomplete="off" require>
                            @if ($errors->has('phonenumber'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('phonenumber') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="facsimileno" class="col-sm-3 control-label">Facsimile No.</label>
        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="facsimileno" name="facsimileno" placeholder="Facsimile No." value="0123456789" autocomplete="off" require>
                            @if ($errors->has('facsimileno'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('facsimileno') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobilenumber" class="col-sm-3 control-label">Mobile Number</label>
        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" value="1234567890" autocomplete="off" require>
                            @if ($errors->has('mobilenumber'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('mobilenumber') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email Address</label>
    
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="jamesbound@abc.com" autocomplete="off" require>
                        @if ($errors->has('email'))
                              <span class="text-red">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="website" class="col-sm-3 control-label">Website Address</label>
        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="website" name="website" placeholder="Website Address" value="www.jamesbond.com" autocomplete="off" require>
                            @if ($errors->has('website'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div>

                    
                    <h3>Physical Address</h3>
                    <div class="form-group">
                        <label for="province" class="col-sm-3 control-label">Province</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="province" name="province" placeholder="Province" required >
                                <option value="1" selected>Morobe</option>
                                <option value="2">Province 2</option>
                                <option value="3">Province 3</option>
                            </select>
                            @if ($errors->has('province'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('province') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="district" class="col-sm-3 control-label">District</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="district" name="district" placeholder="District" required >
                                <option value="1" selected>Lae</option>
                                <option value="2">District 2</option>
                                <option value="3">District 3</option>
                            </select>
                            @if ($errors->has('district'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('district') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="llg" class="col-sm-3 control-label">LLG</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="llg" name="llg" placeholder="LLG" required >
                                <option value="1" selected>Urban Lae</option>
                                <option value="2">LLG 2</option>
                                <option value="3">LLG 3</option>
                            </select>
                            @if ($errors->has('llg'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('llg') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ward" class="col-sm-3 control-label">Ward</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="ward" name="ward" placeholder="Ward" required >
                                <option value="1" selected>5</option>
                                <option value="2">Ward 2</option>
                                <option value="3">Ward 3</option>
                            </select>
                            @if ($errors->has('ward'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('ward') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="streetvillage" class="col-sm-3 control-label">Street/Village</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="streetvillage" name="streetvillage" placeholder="Street/Village" required >
                                <option value="1" selected>Malekula Street</option>
                                <option value="2">Street/Village 2</option>
                                <option value="3">Street/Village 3</option>
                            </select>
                            @if ($errors->has('streetvillage'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('streetvillage') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <h3>Postal Address</h3>
                    <div class="form-group">
                        <label for="pobox" class="col-sm-3 control-label">P O Box</label>
        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pobox" name="pobox" placeholder="P O Box"  value="926" autocomplete="off" require>
                            @if ($errors->has('pobox'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('pobox') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paprovince" class="col-sm-3 control-label">Province</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="paprovince" name="paprovince" placeholder="Province" required >
                                <option value="1" selected>Morobe</option>
                                <option value="2">Province 2</option>
                                <option value="3">Province 3</option>
                            </select>
                            @if ($errors->has('paprovince'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('paprovince') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="postoffice" class="col-sm-3 control-label">Post Office</label>
        
                        <div class="col-sm-9">
                            <select class="form-control" id="postoffice" name="postoffice" placeholder="Post Office" required >
                                <option value="1" selected>Lae</option>
                                <option value="2">Post Office 2</option>
                                <option value="3">Post Office 3</option>
                            </select>
                            @if ($errors->has('postoffice'))
                                <span class="text-red">
                                    <strong>{{ $errors->first('postoffice') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                <h3>Account Status</h3>
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