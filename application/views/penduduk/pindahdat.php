
			<?php
                            $announce = $this->session->flashdata('announce');
                            if(!empty($announce)){
                                if($announce == 'Pengajuan anda telah di proses, Untuk selanjutnya Akan Dihubungi melalui Nomor anda'){
                                    echo '
                                        <div class="alert alert-success">
                                        '.$announce.'
                                        </div>
                                    ';
                                }else{
                                    echo '
                                        <div class="alert alert-danger">
                                        '.$announce.'
                                        </div>
                                    ';
                                }
                            }
                        ?>


      <!-- partial -->
			<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pengunggahan Dokumen Pindah/ Datang</li>
                  <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="card-body">
                    <h4 class="card-title">Pengunggahan Dokumen Pindah/ Datang</h4>
                    <p class="card-description"> Upload Data Sesuai Petunjuk </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="<?php echo base_url(). 'Surat/tambah'; ?>" method="post">
			
										<div class="form-group">
                        <label for="number">NIK Anda = 
												<?php
                   
												if($this->session->userdata('nik')){ ?>
                             <?php echo $this->session-> userdata ('nik') ; ?>
                          
                            <?php } ?></label>
                      </div>
										<div class="form-group">
                        <label for="exampleInputUsername1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama"  placeholder="Nama Lengkap">
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
                        <label for="exampleInputEmail1">Surat Keterangan Pindah dari daerah asal</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="skpindah"  required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">Biodata Penduduk</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="biodata" required>
                      </div>

					  <div class="form-group">
                        <label for="exampleInputPassword1">Surat Pernyataan Jaminan Tempat Tinggal dari Pemilik Rumah/Pengelola Rusun/Pengelola Apartemen (jika menumpang)</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="skjaminan" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">KK</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="kk" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">KTP</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="ktp" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">Akta Kelahiran</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="akta" required>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">Akta Perkawinan/Surat Nikah atau akta perceraian (bagi yang berstatus kawin atau cerai hidup)</label>
						<p>file berupa pdf, doc, docx</p>
                        <input type="file" class="form-control" name="aktanikah" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Daftar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<!-- 
		