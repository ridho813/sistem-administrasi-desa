			
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Pemohon Dokumen KTP</h2>
								</div>
								<br><br>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama Pemohon</th>
												<th>No. Telepon</th>
												<th>Surat Pengantar Desa</th>
												<th>Kartu Keluarga</th>
												<th>Foto</th>
												<th>Verifikasi</th>
											</tr></thead><tbody>
											<?php 
											 
											$no=1;
											  foreach ($ktp as $p)  {
												 $sql    = "SELECT * FROM tbl_ktp "; //WHERE status = 'daftar' ORDER BY id DESC
											  $pelelang = $this->db->query($sql)->result();
												
											//	$id = $row->id;
											  ?>
									
											
													<td><?php echo $no++ ?></td>
													<td><?php echo $p->nama?></td>
													<td><?php echo $p->no ?></td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./spd/<?= $p->spd;?> ">Download Pengantar Desa</a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./spd/<?= $p->fckk;?> ">Download Kartu Keluarga </a> </td>
													<td><a class="btn btn-info" href="<?php echo base_url();?>./spd/<?= $p->foto;?> ">Download Foto</a> </td>
													<td> <a href="https://api.whatsapp.com/send?phone=62<?php echo $p->no ?>>&text=Selamat%20Dokumen%20atas nama <?php echo $p->nama?>%20sudah%20kami%20terima%20dan%20Verifikasi. Kami selalu memberikan pelayanan yang terbaik untuk warga kami. Trima Kasih" > 
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
