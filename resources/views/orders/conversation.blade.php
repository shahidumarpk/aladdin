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
              <h3 class="box-title">Order Number: 123</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <!-- DIRECT CHAT -->
                    <div class="box box-warning direct-chat direct-chat-warning">
                      <div class="box-header with-border">
                        <h3 class="box-title">Conversation</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages" style="height: 450px; line-height:2;">
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">Alexander Pierce</span>
                              <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
      
                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-right">Sarah Bullock</span>
                              <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
      
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">Alexander Pierce</span>
                              <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Working with AdminLTE on a great new app! Wanna join?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
      
                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-right">Sarah Bullock</span>
                              <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              I would love to.
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
      
                        </div>
                        <!--/.direct-chat-messages-->
      
                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                          <ul class="contacts-list">
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date pull-right">2/28/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">How have you been? I was...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Sarah Doe
                                        <small class="contacts-list-date pull-right">2/23/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">I will be waiting for...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Nadia Jolie
                                        <small class="contacts-list-date pull-right">2/20/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">I'll call you back at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Nora S. Vans
                                        <small class="contacts-list-date pull-right">2/10/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">Where is your new...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        John K.
                                        <small class="contacts-list-date pull-right">1/27/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">Can I take a look at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                              <a href="#">
      
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Kenneth M.
                                        <small class="contacts-list-date pull-right">1/4/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">Never mind I found...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                          </ul>
                          <!-- /.contatcts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning btn-flat">Send</button>
                                </span>
                          </div>
                        </form>
                      </div>
                      <!-- /.box-footer-->
                    </div>
                    <!--/.direct-chat -->
                  </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   

@endsection