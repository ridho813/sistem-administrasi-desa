      <!-- partial -->
	  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pengunggahan Dokumen Akte Kematian</li>
                  <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pengunggahan Dokumen Akte Kematian</h4>
                    <p class="card-description"> Upload Data Sesuai Petunjuk </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="<?php echo base_url(). 'Kematian/tambah_kematian'; ?>" method="post">
					<div class="form-group">
                        <label for="exampleInputUsername1">Nama Lengkap Pelapor</label>
                        <input type="text" class="form-control" name="nama"  placeholder="Nama Lengkap">
                      </div>
											<div class="form-group">
                        <label for="number">NIK Anda = 
												<?php
                   
												if($this->session->userdata('nik')){ ?>
                             <?php echo $this->session-> userdata ('nik') ; ?>
                          
                            <?php } ?></label>
                      </div>
											<label for="exampleInputUsername1">Nomor Tlp/ Whatsaap</label>
		<div class="form-group">
                    <p>format nomor 819xxxxx</p>
                     <i>+62   <input  name="no" type="tel" maxlength="11"  onkeypress="return hanyaAngka (event)"required placeholder="nomor"  ></i>
                     </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Surat Pengatar Kematian Dari Desa</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="skkem" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Surat Pernyataan Meninggal</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="sper"  required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> Akte Nikah / Akte Cerai Yang Meninggal</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="akte_nikah" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> Kartu Tanda Penduduk (KTP) yang meninggal</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="ktp" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> Kartu Keluarga Yang Meninggal</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="kk" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1"> Kartu Tanda Penduduk (KTP) pelapor</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="ktppel" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Daftar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
