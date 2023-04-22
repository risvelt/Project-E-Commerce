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
                  <form method="POST" action="<?php echo site_url('kurir/edit') ;?>">
                  <input type="hidden" name="id" value="<?php echo $kurir->idKurir; ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Kurir</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kurir</label>
                        <select name="namaKurir" div class="col-sm-9">
                              <option value="JnE" name="namaKurir">JnE</option>
                              <option value="J&T" name="namaKurir">J&T</option>
                              <option value="SiCepat" name="namaKurir">SiCepat</option>
                              <option value="Tiki" name="namaKuri">Tiki</option>
                             </select>
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
                      
