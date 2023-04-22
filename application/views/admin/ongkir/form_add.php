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
                  <form method="POST" action="<?php echo site_url('ongkir/save') ;?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Ongkos Kirim</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Biaya Kirim</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="idBiayaKirim" placeholder="ID Biaya Kirim">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID Kurir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="idKurir" placeholder="ID Kurir">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID Kota Asal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="idKotaAsal" placeholder="ID Kota Asal">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID Kota Tujuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="idKotaTujuan" placeholder="ID Kota Tujuan">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Biaya</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Masukkan Biaya">
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
                      
