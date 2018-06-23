<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <p>Super Admin</p>
    </div>
  </div>
  <?php $urlpath=Request::path();?>
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="<?php echo ($urlpath == 'dashboard') ? "active" : ""; ?>"><a href="{!! url('/dashboard'); !!}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

    <li class="treeview <?php echo ($urlpath == 'admins' ||$urlpath == 'roles' ) ? "active" : ""; ?>">
      <a href="#"><i class="fa fa-users"></i> <span>Admins</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
      <li class="<?php echo ($urlpath == 'roles') ? "active" : ""; ?>"><a href="{!! url('/roles'); !!}">Roles</a></li>
        <li class="<?php echo ($urlpath == 'admins') ? "active" : ""; ?>"><a href="{!! url('/admins'); !!}">Manage Admins</a></li>
      </ul>
    </li>
    <!-- Multi Level -->
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li>
    <!-- Multi Level Ends -->
    <li>
          <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>