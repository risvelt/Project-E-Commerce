

	       <!-- Main Content -->
      <div class="main-content">
        <section class="section">
		        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo site_url('register/registration'); ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Lengkap</label>
                      <input id="first_name" type="text" class="form-control" name="namaKonsumen" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Email</label>
                      <input id="last_name" type="email" class="form-control" name="email">
                      <a class="text-danger"><?php form_error('email'); ?>required</a>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
				     <div class="form-group col-12">
                    <label for="email">Alamat</label>
                    <input id="email" type="text" class="form-control" name="alamat">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-6">
                      <label>Kota</label>
                      <select class="form-control selectric" name="idKota">
					                    <option value="1" name="idKota">Jakarta</option>
                              <option value="2" name="idKota">Bandung</option>
                              <option value="3" name="idKota">Yogyakarta</option>
                              <option value="4" name="idKota">Surabaya</option>
                              <option value="5" name="idKota">Semarang</option>
                              <option value="6" name="idKota">Banjarmasin</option>
                              <option value="7" name="idKota">Samarinda</option>
                              <option value="8" name="idKota">Makassar</option>
                              <option value="9" name="idKota">Papua</option>
                              <option value="10" name="idKota">Malang</option>
					                </select>
                    </div>
                    <div class="form-group col-6">
                      <label>No Telpon</label>
                    <input type="text" class="form-control" name="telepon">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          
          </div>
        </div>
		</section>
      </div> 
