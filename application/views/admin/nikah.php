   <!-- page title area end -->
   <div class="main-content-inner">
               
			   <!-- market value area start -->
			   <div class="row mt-5 mb-5">
				   <div class="col-12">
					   <div class="card">
						   <div class="card-body">
							   <div class="d-sm-flex justify-content-between align-items-center">
								   <h2>Daftar Dokumen Akta Nikah</h2>
								  
							   </div>
								   <div class="data-tables datatable-dark">
										<table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
										   <tr>
											   <th>No.</th>
											   <th>NIK</th>
											   <th>Nama Penduduk</th>
											   <th>no_tlp</th>
											   <th>Rt</th>
											   <th>Dusun</th>
											   <th>RW</th>
											   <th>KK Memplai</th>
											   <th>Ktp Suami</th>
											   <th>KTP Istri</th>
											   <th>KTP Orang Tua</th>
											   <th>Surat Pernyataan</th>
											   <th>Akta Nikah</th>
											   <th>Surat Nikah Dari Agama</th>
											   <th>WA</th>
										   </tr></thead><tbody>
										   <?php 
										
											 $no=1;
											   foreach ($nikah as $p)  {
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

													 <td><?php echo $p->no ?></td>
													 <td><?= $a ?></td>
													<td><?= $rt ?></td>
													<td><?= $rw ?></td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->kk;?> ">Download </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->ktp;?> ">Download </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->ktpi;?> ">Download </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->ktportu;?> ">Download</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->spdkel;?> ">Download </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->aktanikah;?> ">Download </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./nikah/<?= $p->surat;?> ">Download </a> </td>
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

