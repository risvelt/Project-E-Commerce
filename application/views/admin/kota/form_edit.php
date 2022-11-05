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
                  <form method="POST" action="<?php echo site_url('kota/edit') ;?>">
                  <input type="hidden" name="id" value="<?php echo $kota->idKota; ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Kota</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kota</label>
                        <select name="namaKota" div class="col-sm-9">
                              <option value="Jakarta" name="namaKota">Jakarta</option>
                              <option value="Bandung" name="namaKota">Bandung</option>
                              <option value="Yogyakarta" name="namaKota">Yogyakarta</option>
                              <option value="Surabaya" name="namaKota">Surabaya</option>
                              <option value="Semarang" name="namaKota">Semarang</option>
                              <option value="Banjarmasin" name="namaKota">Banjarmasin</option>
                              <option value="Samarinda" name="namaKota">Samarinda</option>
                              <option value="Makassar" name="namaKota">Makassar</option>
                              <option value="Papua" name="namaKota">Papua</option>
                              <option value="Malang" name="namaKota">Malang</option>
                             
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
                      
