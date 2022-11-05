     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Toko</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Toko</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Toko</h4> <a href="<?php echo site_url('toko/add'); ?>" class="btn btn-primary">
                      Tambah Toko
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>ID Toko</th>
                          <th>ID Konsumen</th>
                          <th>Nama Toko</th>
                          <th>Logo</th>
                          <th>Deskripsi</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($toko as $item) { ?>
                        <tr>
                            <td><?php echo $item->idToko; ?></td>
                            <td><?php echo $item->idKonsumen; ?></td>
                            <td><?php echo $item->namaToko; ?></td>
                             <td><img src="<?php echo base_url() . './upload/' . $item->logo; ?>" width="200"></td>
                            <td><?php echo $item->deskripsi; ?></td>
                            <td><?php echo $item->statusAktif; ?></td>
                            <td><a href="<?php echo site_url('toko/getid/'.$item->idToko) ;?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('toko/hapus/'.$item->idToko) ;?>" class="btn btn-danger">Hapus</a></td>
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
