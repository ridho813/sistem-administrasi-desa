			
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Dokumen Akte Kelahiran</h2>
								</div>
							<br><br>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>NIK</th>
												<th>Nama. Penduduk</th>
												<th>No. Telepon</th>
												<th>Dusun</th>
												<th>RT</th>
												<th>RW</th>
												<th>Surat Keterangan Lahir dari doktor/bidan/penolong</th>
												<th>Kartu Keluarga</th>
												<th>KTP Ayah</th>
												<th>KTP Ibu</th>
												<th>Akte Nikah</th> 
												<th>Surat Pernyataan Data Kelahiran</th>
												<th>Verifikasi</th>
											</tr></thead><tbody>
											<?php 
											$no=1;
											  foreach ($akte as $p) {
												$nama     = $this->db->query("SELECT * FROM ref_dusun WHERE id_dusun")->row_array();
												$a    = $nama['nama_dusun'];
												$nama     = $this->db->query("SELECT * FROM ref_rw WHERE id_rw")->row_array();
												$rw    = $nama['nomor_rw'];
												$nama     = $this->db->query("SELECT * FROM ref_rt WHERE id_rt")->row_array();
												$rt    = $nama['nomor_rt'];
											   ?>
										
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p->nik?></td>
													<td><?php echo $p->nama ?></td>
													<td><?php echo $p->no ?></td>
													<td><?= $a ?></td>
													<td><?= $rt ?></td>
													<td><?= $rw ?></td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->sket;?> ">Download</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->kk;?> ">Download  </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->ktp;?> ">Download</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->ktpi;?> ">Download</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->aktanikah;?> ">Download</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./kelahiran/<?= $p->spdkel;?> ">Download</a> </td>
													<td> <a href="https://api.whatsapp.com/send?phone=62<?php echo $p->no ?>>&text=Selamat%20Dokumen%20anda%20sudah%20kami%20terima%20dan%20Verifikasi. Kami selalu memberikan pelayanan yang terbaik untuk warga kami. Trima Kasih" > 
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
