<li class="nav-item active">
  <a class="nav-link" href="index.html">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span>
  </a>
</li>

<!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="{{route('FlightSearch.create')}}" > Add Flight</a>
  <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
    <h6 class="dropdown-header">Login Screens:</h6>
    <a class="dropdown-item" href="#">Login</a>
    <a class="dropdown-item" href="register.html">Register</a>
    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
    <div class="dropdown-divider"></div>
    <h6 class="dropdown-header">Other Pages:</h6>
    <a class="dropdown-item" href="404.html">404 Page</a>
    <a class="dropdown-item" href="blank.html">Blank Page</a>
  </div> -->
</li> -->

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Add Flight</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         @can('create')
         <a class="dropdown-item" href="{{route('FlightSearch.create')}}">Create Flight</a>
         @endcan
         @can('view')
         <a class="dropdown-item" href="{{route('FlightSearch.index')}}">View Flight Details</a>
         @endcan
       </div>
</li>

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Manage Passenger Booking</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         @can('create')
         <a class="dropdown-item" href="#"></a>
         @endcan
         @can('view')
         <a class="dropdown-item" href="{{route('FlightBook.index')}}">Passenger List</a>
         @endcan
       </div>
</li>

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Manage Role</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          @can('create')
         <a class="dropdown-item" href="{{route('role.create')}}">Create Role</a>
         @endcan
          @can('view')
        <a class="dropdown-item" href="{{route('role.index')}}">Role List</a>
         @endcan
       </div>
</li>

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Manage Permission</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        @can('create')
        <a class="dropdown-item" href="{{route('permission.create')}}">Create Permission</a>
        @endcan
        <a class="dropdown-item" href="{{route('permission.index')}}">Permission List</a>
        <a class="dropdown-item" href="{{route('permission.permissionAssign')}}">Permission Assign</a>
       </div>
</li>

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Manage Users</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         <a class="dropdown-item" href="{{route('users.index')}}"> Edit & Delete User</a>
          <a class="dropdown-item" href="{{route('user.users')}}">User List &Role Assign</a>
          <a class="dropdown-item" href="{{route('role.permissionToUser')}}"> Role Permission to User</a>
          <a class="dropdown-item" href="#"> </a>
       </div>
</li>
