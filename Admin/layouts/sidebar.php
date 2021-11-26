 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="http://localhost/week2/AdminLTE-3.0.5/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/week2/AdminLTE-3.0.5/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="http://localhost/week2/AdminLTE-3.0.5/Admin/Airlines/index.php" class="nav-link">
            
              <p>
                Airlines
               
              </p>
            </a>
           
          </li>
            
            <li class="nav-item has-treeview">
            <a href="http://localhost/week2/AdminLTE-3.0.5/Admin/events/index.php" class="nav-link">
            
              <p>
                Events
               
              </p>
            </a>
           
          </li>
              <li class="nav-item has-treeview">
            <a href="http://localhost/week2/AdminLTE-3.0.5/Admin/reports/index.php" class="nav-link">
            
              <p>
                Reports
               
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="http://localhost/week2/AdminLTE-3.0.5/Admin/flights/index.php" class="nav-link">
            
              <p>
                Flights
               
              </p>
            </a>
           
          </li>
          </li>
          <li class="nav-item has-treeview">
            <a href="http://localhost/week2/AdminLTE-3.0.5/Admin/Travellers/index.php" class="nav-link">
            
              <p>
                Travellers
               
              </p>
            </a>
           
          </li>






          <li class="nav-item has-treeview " >
            <a href="http://localhost/week2/AdminLTE-3.0.5/admin/logout.php" class="nav-link">
            
              <p >
                LOGOUT
               
              </p>
            </a>
           
          </li>
        
  
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>