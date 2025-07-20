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
                             <a class="nav-link" href="{{url('/login1') }}">
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
                  <div class="container">
    <div class="ticket-details">
      <h2>Maintenance Details</h2>
 <div class="mb-3">
      <label for="ID"><strong>ID:</strong></label>
      <input type="text" id="ID" value="#####" class="form-control mb-2" readonly>
            </div>
         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Date"><strong>Date:</strong></label>
      <input type="text" id="Date" value="Network" class="form-control mb-2" readonly>
            </div>
            </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Branch"><strong>Branch:</strong></label>
      <input type="text" id="Branch" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>
           
         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Department"><strong>Department:</strong></label>
      <input type="text" id="Department" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Agency"><strong>Agency:</strong></label>
      <input type="text" id="Agency" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>

         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Name"><strong>Name:</strong></label>
      <input type="text" id="Name" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
         </div>
         </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Emp_de"><strong>Employee in Department:</strong></label>
      <input type="text" id="Emp_de" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>

         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Career_Number"><strong>Career Number:</strong></label>
      <input type="text" id="Career_Number" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
       </div>
       </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Inline_Phone"><strong>Inline Phone:</strong></label>
      <input type="text" id="Inline_Phone" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>

         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Device_IP"><strong>Device IP Address:</strong></label>
      <input type="text" id="Device_IP" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
        </div>
        </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Problem"><strong>Problem Description:</strong></label>
      <input type="text" id="Problem" value="done" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>

            
         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Systems"><strong>Systems to be installed on the device:</strong></label>
      <input type="text" id="Systems" value="high" class="form-control mb-4" readonly>
       </div>
       </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Other_s"><strong>Other systems:</strong></label>
      <input type="text" id="Other_s" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>

         <div class="row mb-3">
         <div class="col-md-6">
         <div class="mb-3">
      <label for="Important"><strong>Important Files on the device:</strong></label>
      <input type="text" id="Important" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
       </div>
       </div>
          <div class="col-md-6">
          <div class="mb-3">
      <label for="Notes"><strong>Notes:</strong></label>
      <input type="text" id="Notes" value="No connection at the Main branch4011" class="form-control mb-2" readonly>
            </div>
            </div>
            </div>
    </div>
    <div class="text-center mt-4">
               <button class="edit-btn" onclick="window.location.href='{{url('/Assign') }}'">Assign</button>
             <div class="d-flex justify-content-end mb-3">
                   <button class="btn btn-success" id="exportPdfBtn">
                       <i class="fas fa-file-pdf"></i> Export to PDF
                   </button>
             </div>
        </div>
           
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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

        <script>
    document.getElementById('exportPdfBtn').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const ticketDetails = document.querySelector('.ticket-details');  // استهداف العنصر الصحيح

        html2canvas(ticketDetails).then(function (canvas) {
            const imgData = canvas.toDataURL('image/png');
            const pageWidth = doc.internal.pageSize.getWidth();
            const imgProps = doc.getImageProperties(imgData);
            const pdfWidth = pageWidth;
            const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

            doc.addImage(imgData, 'PNG', 0, 10, pdfWidth, pdfHeight);
            doc.save('MaintenanceForm.pdf');
        });
    });
</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
