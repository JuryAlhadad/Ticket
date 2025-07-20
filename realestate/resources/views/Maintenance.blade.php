<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - user</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
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
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-5 my-md-0">
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
                            <a class="nav-link" href="{{url('/AllTicket') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                All Tickets
                            </a>
                             <a class="nav-link" href="{{url('/AllmainUser') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                All Maintenance
                            </a>
                            <div class="sb-sidenav-menu-heading"> Pages</div>
                            <a class="nav-link" href="{{url('/createTicket') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Create Ticket
                            </a>
                             <a class="nav-link" href="{{url('/Maintenance') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Maintenance
                            </a>
                            <a class="nav-link" href="{{url('/contpage') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Contact us
                            </a>
                            <a class="nav-link" href="{{url('/Form') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Forms
                            </a>
                             <a class="nav-link" href="{{url('/login1') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Log out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: User</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
              
<main>
    <div class="system-install-form">
        <h3 class="text-center mb-4">Maintenance Form</h3>

        <form class="form-box">
             <div class="row mb-3">
                <div class="mb-3">
      <label for="ID"><strong>ID:</strong></label>
      <input type="text" id="ID"  class="form-control mb-2">
            </div>
                  <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" id="Date" class="form-control" >
            </div>
 </div>
  <div class="col-md-6">
           <div class="mb-3">
    <label class="form-label">Branch:</label>
    <select class="form-control">
        <option selected disabled>Select Branch</option>
        <option value="Tripoli">Tripoli</option>
        <option value="Benghazi">Benghazi</option>
        <option value="Misrata">Misrata</option>
       
    </select>
</div>
</div>
</div>
<div class="row mb-3">
                  <div class="col-md-6">
<div class="mb-3">
    <label class="form-label">Department:</label>
    <select class="form-control">
        <option selected disabled>Select Department</option>
        <option value="IT">IT</option>
        <option value="Finance">Finance</option>
        <option value="HR">HR</option>
    
    </select>
</div>
</div>
 <div class="col-md-6">
<div class="mb-3">
    <label class="form-label">Agency:</label>
    <select class="form-control">
        <option selected disabled>Select Agency</option>
        <option value="Agency A">Agency A</option>
        <option value="Agency B">Agency B</option>
        <option value="Agency C">Agency C</option>
       
    </select>
</div>
</div>
</div>
                  <div class="row mb-3">
                  <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" id="Name" class="form-control">
            </div>
            </div>
            <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Employee in Department:</label>
                <input type="text" id="Emp_de" class="form-control">
            </div>
            </div>
            </div>

            <div class="row mb-3">
                  <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Career Number:</label>
                <input type="text" id="Career_Number" class="form-control">
            </div>
             </div>
              <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Inline Phone:</label>
                <input type="text" id="Inline_Phone" class="form-control">
            </div>
            </div>
            </div>

            <div class="row mb-3">
            <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Device IP Address:</label>
                <input type="text" id="Device_IP" class="form-control">
            </div>
            </div>
             <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Problem Description:</label>
                <textarea class="form-control" id="Problem" rows="2"></textarea>
            </div>
            </div>
            </div>

            <h5 class="mt-4">Systems to be installed on the device:</h5>
<div class="row mb-3">
  <div class="col-md-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="intranet">
      <label class="form-check-label" for="intranet">انترانت</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="">
      <label class="form-check-label" for="">كويشن</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="">
      <label class="form-check-label" for="telar">تيلر</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="digitalBank">
      <label class="form-check-label" for="digitalBank">Digital Bank</label>
    </div>
    
  </div>
  <div class="col-md-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="waps">
      <label class="form-check-label" for="waps">Waps</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="auditManagement">
      <label class="form-check-label" for="auditManagement">ادارة المراجعه</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="clearingDepartment">
      <label class="form-check-label" for="clearingDepartment">ادارة المتابعه</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="branchManagement">
      <label class="form-check-label" for="branchManagement">ادارة الفروع</label>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="signatureViewer">
      <label class="form-check-label" for="signatureViewer">عرض التوقيع</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="ctsClearingSystem">
      <label class="form-check-label" for="ctsClearingSystem">CTS </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="ecc">
      <label class="form-check-label" for="ecc">ECC</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="kycSystem">
      <label class="form-check-label" for="kycSystem">KYC System</label>
    </div>
  </div>
</div>

            <div class="mb-3">
                <label class="form-label">Other systems:</label>
                <input type="text" id="Other_s" class="form-control">
            </div>

           <h5 class="mt-4">Important Files on the device:</h5>

            <div class="row mb-3">
            <div class="col-md-4">
<div class="mb-3 d-flex align-items-center gap-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="driveC">
        <label class="form-check-label" for="driveC">Drive C</label>
    </div>
    <input type="text" class="form-control" placeholder="Folder name " style="flex:1;">
</div>
</div>
 <div class="col-md-4">
<div class="mb-3 d-flex align-items-center gap-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="driveD">
        <label class="form-check-label" for="driveD">Drive D</label>
    </div>
    <input type="text" class="form-control" placeholder="Folder name " style="flex:1;">
</div>
</div>
<div class="col-md-4">
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="noneFolder">
    <label class="form-check-label" for="noneFolder">None</label>
</div>
</div>
</div>


            <div class="mb-3">
                <label class="form-label">Notes:</label>
                <textarea class="form-control" id="Notes" rows="3"></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit1" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
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
