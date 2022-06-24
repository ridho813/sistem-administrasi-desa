      <!-- partial -->
	  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Penambahan Data Penduduk </li>
                  <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Penambahan Data Penduduk</h4>
                    <p class="card-description"> Upload Data Sesuai Petunjuk </p>
					   
					   <div class="modal-body">
					   <form action="<?php echo base_url(). 'admin/Penduduk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >
							   <div class="form-group">
								   <label>NIK</label>
								   <input name="nik" type="text" class="form-control" required autofocus>
							   </div>
							   <div class="form-group">
								   <label>Nama Lengkap</label>
								   <input name="nama" type="text" class="form-control" required autofocus>
							   </div>
							   <div class="form-group">
											<label for="exampleInputUsername1">Nomor Tlp/ Whatsaap</label>
		<div class="form-group">
                    <p>format nomor 819xxxxx</p>
                     <i>+62   <input  name="no_telp" type="tel" maxlength="11"  onkeypress="return hanyaAngka (event)"required placeholder="nomor"  ></i>
                     </div>
                    
							   <div class="form-group">
								   <label>Tempat Lahir</label>
								   <input name="tempat_lahir" type="text" class="form-control" required autofocus>
							   </div>
							   <div class="form-group">
								   <label>Tanggal Lahir</label>
								   <input name="tanggal_lahir" type="date" class="form-control" required autofocus>
							   </div>
							   <div class="col-sm-8">
                    <select name="id_dusun" required="true" class="form-control">
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
							   <div class="col-sm-8">
                    <select name="id_rt" required="true" class="form-control">
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
				  <div class="col-sm-8">
                    <select name="id_rw" required="true" class="form-control">
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
								   <label>Pendidikan</label>
								   <input name="pendidikan" type="text" class="form-control">
							   </div>
				  <div class="form-group">
								   <label>Agama</label>
								   <input name="agama" type="text" class="form-control">
							   </div>
							   <div class="form-group">
								   <label>Golongan Darah</label>
								   <input name="goldar" type="text" class="form-control"  min="1" max="5" required>
							   </div>
							   <div class="form-group">
								   <label>Jenis Kelamin</label>
								   <input name="jen_kel" type="text" class="form-control">
							   </div>
							   <div class="form-group">
								   <label>Pekerjaan</label>
								   <input name="pekerjaan" type="text" class="form-control">
							   </div>
							   <div class="form-group">
								   <label>Status Perkawinan</label>
								   <input name="status_kawin" type="text" class="form-control">
							   </div>
							   <div class="form-group">
								   <label>Status Penduduk</label>
								   <input name="status_penduduk" type="text" class="form-control">
							   </div>
						   </div>
						   <div class="modal-footer">
							   <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
							   <input name="addproduct" type="submit" class="btn btn-primary" value="Tambah">
						   </div>
					   </form>
				   </div>
			   </div>
		   </div>
   
   <script>
   $(document).ready(function() {
   $('#dataTable3').DataTable( {
	   dom: 'Bfrtip',
	   buttons: [
		   'print'
	   ]
   } );
   } );
   </script>
