     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Ongkir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Ongkos Kirim</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Ongkos Kirim</h4> <a href="<?php echo site_url('ongkir/add'); ?>" class="btn btn-primary">
                      Tambah Ongkos Kirim
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>ID Biaya Kirim</th>
                          <th>ID Kurir</th>
                          <th>Nama Kurir</th>
                          <th>ID Kota Asal</th>
                          <th>Kota Asal</th>
                          <th>ID Kota Tujuan</th>
                          <th>Biaya</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($ongkir as $item) { ?>
                        <tr>
                            <td><?php echo $item->idBiayaKirim; ?></td>
                            <td><?php echo $item->idKurir; ?></td>
                            <td><?php echo $item->namaKurir; ?></td>
                            <td><?php echo $item->idKotaAsal; ?></td>
                            <td><?php echo $item->namaKota; ?></td>
                            <td><?php echo $item->idKotaTujuan; ?></td>
                            <td><?php echo $item->biaya; ?></td>
                            <td><a href="<?php echo site_url('ongkir/getid/'.$item->idBiayaKirim) ;?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('ongkir/hapus/'.$item->idBiayaKirim) ;?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                          <?php  } ?>

                      </table> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
