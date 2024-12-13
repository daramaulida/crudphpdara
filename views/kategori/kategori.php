

    <!-- Kategori Masakan -->
    <section class="container my-5">
        <h2 class="text-center mb-4">kategori Masakan</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- perulangan kategori -->

            <?php
            include "koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT*FROM kategori");
            while ($data = mysqli_fetch_array($sql)) {
                echo "


          
                <div class='col'>
                <div class='card'>
                    <img src='gambar/puding.jpg' class='card-img-top' alt='Makanan 1'>
                    <div class='card-body'>
                        <h5 class='card-title'>$data[nama_kategori]</h5>
                        <p class='card-text'></p>
                        <div class='col-12'>
                            <ul class='navbar-nav ml-auto '>
                                <li class='nav-item d-none d-sm-inline-block'>
                                </li>
                            </ul>
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