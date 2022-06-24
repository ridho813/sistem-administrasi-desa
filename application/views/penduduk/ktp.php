      <!-- partial -->
	  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pengunggahan Dokumen KTP</li>
                  <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pengunggahan Dokumen KTP</h4>
                    <p class="card-description"> Untuk Membuat E-KTP Minimal usia 17 Tahun </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="<?php echo base_url(). 'E_ktp/tambah_ktp'; ?>" method="post">
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
                        <label for="exampleInputEmail1">Foto Copy Kartu Keluarga</label>
                        <input type="file" class="form-control" name="fckk" id="exampleInputEmail1" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1"> Foto </label>
                        <input type="file" class="form-control" name="foto" id="exampleInputPassword1" required>
                      </div>
	
                      <button type="submit" class="btn btn-primary me-2">Daftar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
							<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
 
      return false;
    return true;
  }
 </script>
