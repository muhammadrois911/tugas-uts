<?php include "koneksi.php"; ?>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $stok_samsung = mysqli_query($koneksi,"select sum(stok) as total_samsung from daftar_harga where merk='Samsung'");
                  while ($samsung = mysqli_fetch_array($stok_samsung)){
                ?>
                <h5>Stok Tersisa :</h5>
                <h3><?php echo $samsung['total_samsung']; ?></h3>
                <?php 
                  }
                ?>
                <p>Samsung</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $stok_iphone = mysqli_query($koneksi,"select sum(stok) as total_iphone from daftar_harga where merk='Iphone'");
                  while ($iphone = mysqli_fetch_array($stok_iphone)){
                ?>
                <h5>Stok Tersisa :</h5>
                <h3><?php echo $iphone['total_iphone']; ?></h3>
                <?php 
                  }
                ?>
                <p>Iphone</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  $stok_xiaomi = mysqli_query($koneksi,"select sum(stok) as total_xiaomi from daftar_harga where merk='Xiaomi'");
                  while ($xiaomi = mysqli_fetch_array($stok_xiaomi)){
                ?>
                <h5>Stok Tersisa :</h5>
                <h3><?php echo $xiaomi['total_xiaomi']; ?></h3>
                <?php 
                  }
                ?>
                <p>Xiaomi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  $stok_vivo = mysqli_query($koneksi,"select sum(stok) as total_vivo from daftar_harga where merk='Vivo'");
                  while ($vivo = mysqli_fetch_array($stok_vivo)){
                ?>
                <h5>stok terisa :</h5>
                <h3><?php echo $vivo['total_vivo']; ?></h3>
                <?php 
                  }
                ?>
                <p>Vivo</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.row (main row) -->
        <!--tabel harga hp-->
        <div class="col-lg-auto col-auto">
          <div class="small-box bg-white">
            <table>
              <tr>
                <th>No.</th>
                <th>Merk HP</th>
                <th>Seri</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Stok tersisa</th>
                <?php 
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from daftar_harga");
                  while ($rois = mysqli_fetch_array($data)){
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $rois['merk']; ?></td>
                  <td><?php echo $rois['seri']; ?></td>
                  <td><?php echo $rois['tahun']; ?></td>
                  <td><?php echo $rois['harga']; ?></td>
                  <td><?php echo $rois['stok']; ?></td>

                </tr>
                <?php 
                  }
                ?>
              </tr>
            </table>
          </div>
        </div>
        <!--tabel harga hp-->
      </div><!-- /.container-fluid -->
        

    </section>