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
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
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
            <div class="container">
    <div class="ticket-details">
      <h2>Ticket Details</h2>
      <label for="title"><strong>Title:</strong></label>
      <input type="text" id="title" value="{{ $ticket->title }}" class="form-control mb-2" readonly>

      <label for="description"><strong>Description:</strong></label>
      <input type="text" id="description" value="{{ $ticket->description }}" class="form-control mb-2" readonly>

      <label for="status"><strong>Status:</strong></label>
      <input type="text" id="status" value="{{ $ticket->status }}" class="form-control mb-2" readonly>


      <label for="priority"><strong>Priority:</strong></label>
      <input type="text" id="priority" value="{{ $ticket->priority }}" class="form-control mb-4" readonly>

      <div class="mb-3">
    <label><strong>Comments:</strong></label>
@foreach($ticket->comments as $comment)
    <div class="border p-2 mb-2">
        <strong>
            {{ $comment->employee->first_name ?? '' }} {{ $comment->employee->last_name ?? '' }}
        </strong>
        <p>{{ $comment->content }}</p>
        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
    </div>
@endforeach

</br>
        <h4>Add Comment</h4>
<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
    <textarea name="content" rows="4" cols="50" placeholder="Type your comment..." class="form-control"></textarea><br>
    <button type="submit" class="btn btn-primary center">Add Comment</button>
</form>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
