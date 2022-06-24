   <!-- page title area end -->
   <div class="main-content-inner">
               
			   <!-- market value area start -->
			   <div class="row mt-5 mb-5">
				   <div class="col-12">
					   <div class="card">
						   <div class="card-body">
							   <div class="d-sm-flex justify-content-between align-items-center">
								   <h2>Daftar Penduduk</h2>
								   <ol class="breadcrumb">
        <a href="<?= base_url('admin/penduduk/add') ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-plus"></i> Tambah Penduduk </a>
      </ol>
							   </div>
								   <div class="data-tables datatable-dark">
										<table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
										   <tr>
											   <th>No.</th>
											   <th>NIK</th>
											   <th>Nama Penduduk</th>
											   <th>Tempat Lahir</th>
											   <th>Tanggal Lahir</th>
											   <th>foto</th>
											   <th>no_tlp</th>
										
											   <th>Dusun</th>
											   <th>RW</th>
											   <th>WA</th>
										   </tr></thead><tbody>
										   <?php 
										
											 $no=1;
											   foreach ($penduduk as $p)  {
												$nama     = $this->db->query("SELECT * FROM ref_dusun WHERE id_dusun")->row_array();
												$a    = $nama['nama_dusun'];
												$nama     = $this->db->query("SELECT * FROM ref_rw WHERE id_rw")->row_array();
												$rw    = $nama['nomor_rw'];
												$nama     = $this->db->query("SELECT * FROM ref_rt WHERE id_rt")->row_array();
												$rt    = $nama['nomor_rt'];
												 ?>
												 <tr>
													 <td><?php echo $no++ ?></td>
													 <td><?php echo $p->nik ?></td>
													 <td><?php echo $p->nama?></td>
													 <td><?php echo $p->tempat_lahir ?></td>
													 <td><?php echo $p->tanggal_lahir ?></td>
													
													 <td><?php echo $p->no_telp ?></td>
													 <td><?= $a ?></td>
													<td><?= $rt ?></td>
													<td><?= $rw ?></td>
													 <td> <a href="https://api.whatsapp.com/send?phone=<?php echo $p->no_telp ?>>&text=Selamat%20Dokumen%20anda%20sudah%20kami%20terima%20dan%20Verifikasi. Kami selalu memberikan pelayanan yang terbaik untuk warga kami. Trima Kasih" > 
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

