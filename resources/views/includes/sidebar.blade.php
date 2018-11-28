<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview">
      <a href="#"><i class="fa fa-user"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
      <li class="active"><a href="#"><i class="fa fa-user-tag"></i> <span>View User details</span></a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-newspaper"></i> <span>Newsletter</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
      <li><a href="{{url('admin/newsletter')}}"><i class="fa fa-envelope"></i> <span>Send Mail</span></a></li>
      </ul>
    </li>

    <!-- <li><a href="{{url('admin/projects')}}"><i class="fa fa-link"></i> <span>Projects</span></a></li> -->

    <li class="treeview">
      <a href="#"><i class="fa fa-folder"></i> <span>Projects</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('admin/createproject')}}"><i class="fa fa-folder-plus"></i> <span>Create Project</span></a></li>
        <li><a href="{{url('admin/createproject')}}"><i class="fa fa-folder-open"></i> <span>Project Requests</span></a></li>
      </ul>
    </li>

    <!-- <li><a href="{{url('admin/createproject')}}"><i class="fa fa-link"></i> <span>Create Project</span></a></li>
    <li><a href="{{url('admin/createproject')}}"><i class="fa fa-link"></i> <span>Project Requests</span></a></li> -->
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>