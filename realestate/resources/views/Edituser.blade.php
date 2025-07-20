<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/assign.css') }}">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div class="header">
       <img src="{{asset('img/bank.png')}}" class="logo" alt="logo">  
        </div>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Ticket System</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!--<li><a class="dropdown-item" href="#!">Settings</a></li> -->
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('/index1') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                             <a class="nav-link" href="{{url('/AllMaintenance') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Maintenance
                            </a>
                            <div class="sb-sidenav-menu-heading"> Pages</div>
                            <a class="nav-link" href="{{url('/userinfo') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               user information
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Log out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: Admin</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                     <div class="style-container">
        <h2>Edit user info</h2>
        <form action="{{ url('Edituser/' . $employee->id)}}" method="POST" id="editUserForm">
            <div class="form-group">
                @csrf 
                @method('PUT')
                <label for="userId">ID:</label>
                <input type="text" id="userId" name="id" value="{{ $employee->id }}" readonly>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{ $employee->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
<input type="text" id="last_name" name="last_name" value="{{ $employee->last_name }}"> </div>
            <div class="form-group">
                <label for="userEmail">Email:</label>
                <input type="email" id="userEmail" name="email" value="{{ $employee->email }} ">
            </div>
            <div class="form-group">
                <label for="userRole">role:</label>
                <select id="userRole" name="role">
                     <option value="">select</option>
                   <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
                   <option value="user" {{ $employee->role == 'user' ? 'selected' : '' }}>User</option>
                   <option value="tick" {{ $employee->role == 'tick' ? 'selected' : '' }}>Tick</option>
                </select>
            </div>
            <div class="form-group">
                <label for="userPassword">Password:</label>
                <input type="password" id="userPassword" name="password" placeholder="Enter Password (optional)">
            </div>

            <div class="buttons-container">
                <button type="submit" class="save-btn">save</button>
               <button type="button" class="cancel-btn" onclick="window.location.href='{{url('/userinfo') }}'">Back</button>
             </div>
        </form>
        @if (session('success'))
    <div class="alert alert-success" style="margin: 20px; padding: 10px; border: 1px solid #28a745; background-color: #d4edda; color: #155724; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif
    </div>
               </main>
                <footer class="py-4 bg-light mt-auto"> 
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> </div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
