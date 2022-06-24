	<style>
.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0;
    border: none;
    margin-top: 30px;
}
#main-content {
    width: 200%;
    background: #F3F8FB;
}

.main-content-inner {
    padding: 0 60px 50px;
}

	</style>		  
			

			 
			 <!-- page title area end -->
				<div class="main-content-inner">
               
			   <!-- market value area start -->
			   <div class="row mt-1 mb-1">
				   <div class="col-12">
					   <div class="card">
						   <div class="card-body">
							   <div class="d-sm-flex justify-content-between align-items-center">
							   <h2>Daftar Dokumen Kartu Identitas Anak</h2>
								 
							   </div>
								   <div class="data-tables datatable-dark">
										<table id="dataTable3" class="display" style="width:20%"><thead class="thead-dark">

											<tr>
												<th>No</th>
												
												<th>Nama. Penduduk</th>
												<th>No. Telepon</th>
												<th>Dusun</th>
												<th>RT</th>
												<th>RW</th>
												<th>Kartu Keluarga</th>
												<th>Akta</th>
												<th>Foto</th>
												<th>KTP ayah</th>
												<th>KTP Ibu</th>
												<th>Verifikasi</th>
											</tr></thead><tbody>

											<?php 
											$no=1;
											  foreach ($kia as $p) {
											  $nama     = $this->db->query("SELECT * FROM ref_dusun WHERE id_dusun")->row_array();
											  $a    = $nama['nama_dusun'];
											  $nama     = $this->db->query("SELECT * FROM ref_rw WHERE id_rw")->row_array();
											  $rw    = $nama['nomor_rw'];
											  $nama     = $this->db->query("SELECT * FROM ref_rt WHERE id_rt")->row_array();
											  $rt    = $nama['nomor_rt'];
											   ?>
										
													<td><?php echo $no++ ?></td>
													<td><?php echo $p->nama ?></td>
													<td><?php echo $p->no ?></td>
													<td><?= $a ?></td>
													<td><?= $rt ?></td>
													<td><?= $rw ?></td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kia/<?= $p->fckk;?> ">Download Kartu Keluarga </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kia/<?= $p->akta;?> ">Download Akta</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kia/<?= $p->gambar;?> ">Download foto</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kia/<?= $p->ktpa;?> ">Download KTP Ayah </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kia/<?= $p->ktpi;?> ">Download KTP Ibu</a> </td>
													<td> <a href="https://api.whatsapp.com/send?phone=<?php echo $p->no ?>>&text=Selamat%20Dokumen%20anda%20sudah%20kami%20terima%20dan%20Verifikasi. Kami selalu memberikan pelayanan yang terbaik untuk warga kami. Trima Kasih" > 
													<img class="icone" style="height: 60px;width: 40%;" src="<?= base_url('assets/images/wa.png'); ?>" alt=""> </a>   </td>
												</tr>	
												
												<?php
                            $no ++;
                          }
                        ?>
											
										</tbody>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
