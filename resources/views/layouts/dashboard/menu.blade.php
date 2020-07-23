

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item has-treeview">
            <a href="admins" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Admins
              </p>
            </a>
          </li>

        <li class="nav-item">
            <a href="{{ route('dashboard.medical.index') }}" class="nav-link">
              <i class="fas fa-clinic-medical"></i>
              <p>
                Medical Centers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashboard.activities.index') }}" class="nav-link">
              <i class="fas fa-skating"></i>
              <p>
                Activities
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="famouscases" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Famous Cases
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashboard.schools.index') }}" class="nav-link">
              <i class="fas fa-school"></i>
              <p>
                Schools
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashboard.coaches.index') }}" class="nav-link">
              <i class="fas fa-user-tie"></i>
              <p>
                Coaches
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="donations" class="nav-link">
              <i class="fas fa-donate"></i>
              <p>
                Donations
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="guests" class="nav-link">
            <i class="fas fa-user-friends"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="companies" class="nav-link">
            <i class="fas fa-building"></i>
              <p>
                Companies
              </p>
            </a>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
