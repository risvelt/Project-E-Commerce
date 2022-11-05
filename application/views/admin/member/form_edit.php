     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>

          <div class="section-body text-right">
            <h2 class="section-title">Forms</h2>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                  <form method="POST" action="<?php echo site_url('member/edit') ;?>">
                  <input type="hidden" name="id" value="<?php echo $member->idKonsumen; ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Konsumen</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Konsumen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="idKonsumen" placeholder="ID Konsumen" value="<?php echo $member->idKonsumen; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username" value="<?php echo $member->username; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="password" placeholder="Password" value="<?php echo $member->password; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="namaKonsumen" placeholder="Nama Konsumen" value="<?php echo $member->namaKonsumen; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat" placeholder="Alamat" value="<?php echo $member->alamat; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID Kota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="namaKota" placeholder="ID Kota" value="<?php echo $member->namaKota; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">E-Mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo $member->email; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="telepon" placeholder="Telepon" value="<?php echo $member->telepon; ?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="inputEmail3" name="statusAktif" value="<?php echo $member->status; ?>">
                              <option value="Y" name="statusAktif">Y</option>
                              <option value="N" name="statusAktif">N</option>
                            </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
    </div>
            </div>
          </div>
        </section>
      </div>
                      
