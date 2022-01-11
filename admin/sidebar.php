 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome: Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="adminpage.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
        </li>
       

         <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Tutor (Staff)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addStaff.php"><i class="fa fa-user-plus"></i> Add Tutor (Staff)</a></li>
            <li><a href="viewStaffs.php"><i class="fa fa-users"></i> View Tutor (Staff)</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addCourses.php"><i class="fa fa-file"></i> Add Courses</a></li>
            <li><a href="viewCourses.php"><i class="fa fa-book"></i> View Courses</a></li>
          </ul>
        </li>
         
         <li><a href="addAdmin.php"><i class="fa fa-user-plus"></i> <span> Create Admin</span></a></li>
        <li class="header">SIDEBAR MENU</li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>
