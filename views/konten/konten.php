


      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Website Masakan</title>
            <!-- Bootstrap CSS CDN -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">


                    </ul>
                </div>
    </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }

            .marquee-container {
                width: 100%;
                overflow: hidden;
                color: white;
                padding: 10px;
                box-sizing: border-box;
            }

            .marquee-text {
                display: inline-block;
                white-space: nowrap;
                animation: marquee 10s linear infinite;
            }

            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }
        </style>
        </head>

        <body>
            <div class="marquee-container">
                <div class="marquee-text">
                    <h1>Selamat Datang di Website Masakan</h1>
                    <p>Temukan resep masakan lezat dari berbagai konten.</p>
                </div>
            </div>
    </header>



    </div>
    </section>

   
 <!-- konten Masakan -->
 <section class="container my-5">
        <h2 class="text-center mb-4">konten Masakan</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- perulangan konten -->
        
          <?php
            include "koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT*FROM konten");
            while ($data = mysqli_fetch_array($sql)) {
                echo "


            <div class='col'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>$data[nama_konten]</h5>
                        <td><img src='views/foto/$data[foto]' widht='60px' class='rounded'></td>
                        <p class='card-text'></p>
                        <div class='col-12'>
                            <ul class='navbar-nav ml-auto '>
                                <li class='nav-item d-none d-sm-inline-block'>
                                <a href='index.php?halaman=kategori' class='btn btn-primary btn-block'>
                                        <i class='nav-icon'>
                                        </i>Kategori
                                    </a>
                                </li>
                        </div>
                    </div>
                </div>
            </div> ";
            }
            ?>

            
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
                   
        </tbody>
        </div>
        <!-- /.card-body -->
        <!--<div class="card-footer">
          Footer
        </div>-->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
        <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Masakan Kita | Semua Hak Dilindungi</p>
    </footer>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>

</a>
</li>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->


<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->



<!-- /.content-wrapper -->

<!--<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer-->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>
<!--script src="../../dist/js/demo.js"></script-->
</body>

</html>
