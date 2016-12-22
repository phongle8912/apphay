<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="{{Request::is('*/profile') ? 'active' : ''}}"><a href="{{URL('backend/profile')}}"><i class="fa fa-user"></i> <span>Profile</span></a>
      </li>
      <li class="{{(Request::is('*/apps')) ? 'active' : ''}}"><a href="{{URL('backend/apps')}}"><i class="fa fa-wrench"></i> <span>Apps  </span></a></li>
      <li class="{{(Request::is('*/settings')) ? 'active' : ''}}"><a href="{{URL('backend/settings')}}"><i class="fa fa-wrench"></i> <span>Settings </span></a></li>
      <li class="{{(Request::is('*/settings/seo')) ? 'active' : ''}}"><a href="{{URL('backend/seo')}}"><i class="fa fa-wrench"></i> <span>SEO </span></a>
      </li>
      <li class="treeview {{(Request::is('*/pages') || Request::is('*/page') ) ? 'active': ''}}"><a href="#"><i class="fa fa-users"></i> <span>Content Manager</span>  <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="{{(Request::is('*/pages') || Request::is('*/page')) ? 'active': ''}}"><a href="{{URL('backend/pages')}}"> Pages</a></li>
          
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>