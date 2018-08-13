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
              <h3 class="box-title">Lead Details of {{$lead_detail->businessName}}</h3>
							<span class="pull-right"><a href="{!! url('/leads/'.$lead_detail['id'].'/edit' ); !!}" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> <span class="btn btn-warning"><li class="fa fa-plus"></li> Recording</span> <span class="btn btn-success"><li class="fa fa-plus"></li> Appintment</span></span>
            </div>
            <!-- /.box-header -->
				<div class="box-body" >
				  <div class="row">
					<div class="col-md-12">
					<h3>Customer Information:</h3>
					</div>
					
					  <div class="col-md-12">
					  
						<table class="table table-striped">
						<tr>
							<td width="25%"><b>Customer Name</b></td>
							<td width="75%">{{$lead_detail->user->fname}} {{$lead_detail->user->lname}}</td>
						</tr>
						<tr>
							<td><b>Phone Number </b></td>
							<td><a href="tel:{{$lead_detail->user->phonenumber}}">{{$lead_detail->user->phonenumber}}</a></td>
						</tr>
						<tr>
							<td><b>Email</b></td>
							<td><a href="mailto:{{$lead_detail->user->email}}">{{$lead_detail->user->email}}</a></td>
						</tr>
						</table>
						</div>
						<div class="col-md-12">
					<h3>Lead Information:</h3>
					</div>
					<div class="col-md-12">
						<table class="table table-striped">
						<tr>
							<td width="25%"><b>Business Name</b></td>
							<td width="75%">{{$lead_detail->businessName}}</td>
						</tr>
						<tr>
							<td><b>Business Nature</b></td>
							<td>{{$lead_detail->businessNature}}</td>
						</tr>
						<tr>
							<td><b>Description</b></td>
							<td>{{$lead_detail->description}}</td>
						</tr>
						<!-- checkboxes -->
						<tr>
							<td><b>Shared Details</b></td>
							<td><b>Company Profile:</b> {{$lead_detail->company_pro=== 1 ? "Yes" : "No"}} | <b>Testimonials:</b> {{$lead_detail->testimonials=== 1 ? "Yes" : "No"}} | <b>Solutions & Services:</b> {{$lead_detail->solser=== 1 ? "Yes" : "No"}}</td>
						</tr>
						<!-- social links -->
						<tr>
							<td><b>Facebook</b></td>
							<td>{{$lead_detail->fblink}} (<b>Likes:</b> {{$lead_detail->fblike}})</td>
						</tr>
						<tr>
							<td><b>Twitter</b></td>
							<td>{{$lead_detail->twlink}} (<b>Followers:</b> {{$lead_detail->twfollwer}})</td>
						</tr>				
						<tr>
							<td><b>Instagram</b></td>
							<td>{{$lead_detail->inlink}} (<b>Followers:</b> {{$lead_detail->incfollower}})</td>
						</tr>
						<tr>
							<td><b>LinkedIn</b></td>
							<td>{{$lead_detail->lilink}} <b>(Followers:</b> {{$lead_detail->livisitor}})</td>
						</tr>
						<tr>
							<td><b>Web</b></td>
							<td>{{$lead_detail->weblink}}</td>
						</tr>

						<tr>
							<td><b>Created By</b></td>
							<td>{{$lead_detail->createdby->fname}} {{$lead_detail->createdby->lname}}</td>
						</tr>

						<tr>
							<td><b>Status</b></td>
							<td>
								@if ($lead_detail->status === 1)
								  <span class="text-green"><b>Active</b></span>
								@else
									<span class="text-red"><b>Deactive</b></span>
								@endif
							</td>
						</tr>

						<tr>
							<td><b>Created At</b></td>
							<td>{{$lead_detail->created_at->format('d-m-Y')}}</td>
						</tr>
						<tr>
							<td><b>Updated At</b></td>
							<td>{{$lead_detail->updated_at->format('d-m-Y')}}</td>
						</tr>				
						
						
					  </table>
					  </div>
				  </div>
				</div>
              <!-- /.box-body -->
			
			<!-- Recording table START -->
            <!-- /.box-header -->
				<div class="box-body">
				<div class="row">
				<div class="col-md-6">
					<h3>Recordings:</h3>
            @if(count($recordings) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%" border='1'>
                <thead>
                <tr>
				  <th>id</th>
                  <th>Title</th>
                  <th>Link</th>
                  <th>Note</th>
				  <th>Recording File</th>
				  <th>Lead ID</th>
				  
                </tr>
                </thead>
                <tbody>
                @foreach($recordings as $recording)
                  <tr>
					<td>{{$recording->id}}</td>
					<td>{{$recording->title}}</td>
					<td><a href="{{$recording->link}}" target='_blank'>Recording Link</a></td>
					<td>{{$recording->note}}</td>
					<td>{{$recording->recording_file}}</td>
					<td>{{$recording->lead_id}}</td>
					
                  </tr>
                  @endforeach			  
                </tbody>
                <tfoot>
                <tr>
				  <th>id</th>
                  <th>Title</th>
                  <th>Link</th>
                  <th>Note</th>
				  <th>Recording File</th>
				  <th>Lead ID</th>

                </tr>
                </tfoot>
              </table>
              @else
              <div>No Record found.</div>
              @endif
			  	</div>
				</div>
            </div>
            <!-- /.box-body -->
			<!-- Recording table END -->
			  
			  
			  
              <div class="box-footer">
                <a href="{!! url('/admins'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->
</div>
@endsection