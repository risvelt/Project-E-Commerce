     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Member</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Member</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Member</h4> <a href="<?php echo site_url('member/add'); ?>" class="btn btn-primary">
                      Tambah Member
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>ID Konsumen</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Nama Konsumen</th>
                          <th>Alamat</th>
                          <th>Nama Kota</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Status Aktif</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($member as $item) { ?>
                        <tr>
                            <td><?php echo $item->idKonsumen; ?></td>
                            <td><?php echo $item->username; ?></td>
                            <td><?php echo $item->password; ?></td>
                            <td><?php echo $item->namaKonsumen; ?></td>
                            <td><?php echo $item->alamat; ?></td>
                            <td><?php echo $item->namaKota; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->telepon; ?></td>
                            <td><?php if($item->statusAktif=='Y'){ ?> <div class="badge badge-success">Aktif</div>
      											<?php } else { ?>
      											<div class="badge badge-danger">Tidak Aktif</div>
      											<?php } ?>
      										</td>
      										<td><?php if($item->statusAktif=='Y'){ ?>
      											<a href="<?php echo site_url('Member/non_aktif/'.$item->idKonsumen);?>" class="btn btn-warning">non aktif</a>
      											<?php } else { ?>
      											<a href="<?php echo site_url('Member/aktif/'.$item->idKonsumen);?>" class="btn btn-primary">aktif</a>
      											<?php } ?>
      										</td>
                            <td><a href="<?php echo site_url('member/getid/'.$item->idKonsumen) ;?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('member/hapus/'.$item->idKonsumen) ;?>" class="btn btn-danger">Hapus</a></td>
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
