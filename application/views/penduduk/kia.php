      <!-- partial -->
	  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pengunggahan Dokumen KIA</li>
                  <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pengunggahan Dokumen KIA</h4>
                    <p class="card-description"> Untuk Membuat Kartu Identitas Anak </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="<?php echo base_url(). 'anak/tambah_kia'; ?>" method="post">
										<div class="form-group">
                        <label for="exampleInputUsername1">Nama Lengkap</label>
                        <input type="text" class="form-control"  name="nama" id="exampleInputUsername1" placeholder="Username">
                      </div>
											<div class="form-group">
											<label for="exampleInputUsername1">Nomor Tlp/ Whatsaap</label>
		<div class="form-group">
                    <p>format nomor 819xxxxx</p>
                     <i>+62   <input  name="no" type="tel" maxlength="11"  onkeypress="return hanyaAngka (event)"required placeholder="nomor"  ></i>
                     </div>
											<div class="form-group">
                  <label for="exampleInputUsername1">Dusun</label>
               
                    <select name="dusun" required="true" class="form-control">
                      <option value="">-- pilih Dusun --</option>
                      <?php
                        $sql = "SELECT * FROM ref_dusun";
                        $sql2 = $this->db->query($sql)->result();
                        foreach ($sql2 as $row) {
                          echo "<option value='$row->id_dusun'>$row->nama_dusun</option>";
                        }
                      ?>
                    </select>
                  </div>
        
								<div class="form-group">
                  <label for="exampleInputUsername1">RW</label>
                
                    <select name="rw" required="true" class="form-control">
                      <option value="">-- pilih RW --</option>
                      <?php
                        $sql = "SELECT * FROM ref_rw";
                        $sql2 = $this->db->query($sql)->result();
                        foreach ($sql2 as $row) {
                          echo "<option value='$row->id_rw'>$row->nomor_rw</option>";
                        }
                      ?>
                    </select>
                  </div>
           
								<div class="form-group">
                  <label for="exampleInputUsername1">RT</label>
                
                    <select name="rt" required="true" class="form-control">
                      <option value="">-- pilih RT --</option>
                      <?php
                        $sql = "SELECT * FROM ref_rt";
                        $sql2 = $this->db->query($sql)->result();
                        foreach ($sql2 as $row) {
                          echo "<option value='$row->id_rt'>$row->nomor_rt</option>";
                        }
                      ?>
                    </select>
                  </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto Copy Kartu Keluarga</label>
                        <input type="file" class="form-control" name="fckk" id="exampleInputEmail1" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1"> Foto </label>
						<p>Pas foto 4x6 (2 lembar) background sesuai dengan tahun kelahiran (Ganjil : Merah, Genap : Biru) Jika anak dibawah usia 5 tahun tidak perlu melampirkan pas foto.</p>
                        <input type="file" class="form-control" name="gambar" id="exampleInputPassword1" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> Akta Kelahiran </label>
                        <input type="file" class="form-control" name="akta" id="exampleInputPassword1" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> KTP Ayah </label>
                        <input type="file" class="form-control" name="ktpa" id="exampleInputPassword1" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> KTP Ibu </label>
                        <input type="file" class="form-control" name="ktpi" id="exampleInputPassword1" required>
                      </div>

                      <button type="submit" class="btn btn-primary me-2">Daftar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
