<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a class="brand-link" href="{{ asset('/') }}">
        <img class="brand-image img-circle elevation-3" src="{{ asset('/') }}assets/dist/img/AdminLTELogo.png"
          alt="AdminLTE Logo" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel d-flex mb-3 mt-3 pb-3">
          <div class="image">
            <img class="img-circle elevation-2" src="{{ asset('/') }}assets/dist/img/user2-160x160.jpg"
              alt="User Image">
          </div>
          <div class="info d-flex flex-column">
            <a class="d-block" href="#">Apre Try Marviansyah</a>
            <span class="text-muted">20071015</span>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false"
            role="menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('bagian-apre') }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Bagian
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('barang-apre') }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Barang
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('petugas-apre') }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Petugas
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('pengeluaran-apre') }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Pengeluaran
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('pengeluaranitem-apre') }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Pengeluaran Item
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <section class="content">

        <div class="card">
          <div class="card-body">
            @yield('content')
          </div>
        </div>

      </section>
    </div>
  </div>

  <script src="{{ asset('/') }}assets/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}assets/dist/js/adminlte.min.js"></script>
</body>

</html>
