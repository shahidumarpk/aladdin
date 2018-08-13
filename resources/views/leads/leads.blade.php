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
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Leads</h3>
              <span class="pull-right">
              <a href="{!! url('/leads/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Lead</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($leads) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Lead No.</th>
                  <th>Customer Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>                
                  <th>Business Name</th>
                  <th>Business Nature</th>
                  <th>Created By</th>
                  <th>Status</th>
				          <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leads as $lead)
                  <tr>
                    <td>{{$lead['id']}}</td>
                    <td>{{$lead->user->fname }} {{ $lead->user->lname }}</td>
                    <td>{{$lead->user->email}}</td>
                    <td>{{$lead->user->phonenumber}}</td>			
                    <td>{{$lead['businessName']}}</td>
                    <td>{{$lead['businessNature']}}</td>
                    <td>{{$lead->createdby->fname }} {{ $lead->createdby->lname }}</td>
                    <td>
                      @if ($lead['status'] === 1)
                      <span class="btn btn-success">Active</span>
                      @else
                      <span class="btn btn-danger">Deactive</span>
                      @endif
                    </td>
                     <!-- For Delete Form begin -->
                    <form id="form{{$lead['id']}}" action="{{action('LeadController@destroy', $lead['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/leads/'.$lead['id'] ); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/leads/'.$lead['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>                     
					        @if ($lead['status'] === 1)
                        <a href="{!! url('/leads/deactivate/'.$lead['id']); !!}"  class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      @else
                        <a href="{!! url('/leads/active/'.$lead['id']); !!}"  class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      @endif
					  <button class="btn btn-danger" onclick="archiveFunction('form{{$lead['id']}}')"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  @endforeach			  
                </tbody>
                <tfoot>
                <tr>
                  <th>Lead No.</th>
                  <th>Customer Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Business Name</th>
                  <th>Business Nature</th>
                  <th>Created By</th>
                  <th>Status</th>				  
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              @else
              <div>No Record found.</div>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   

@endsection