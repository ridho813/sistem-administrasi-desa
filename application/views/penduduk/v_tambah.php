 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Login </h3>
              <nav aria-label="breadcrumb">
               
              </nav>
            </div>
            <div class="row">
              <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Login Penduduk</h4>
					
                   <!--  <p class="card-description"> Basic form layout </p> -->
                    <form class="forms-sample" method="post" action="<?php echo site_url('penduduk')?>">
                      <div class="form-group">
                        <label for="exampleInputUsername1">NIK</label>
                        <input type="number" class="form-control" name=" nik" placeholder="Masukkan NIK Anda">
                      </div>
					  <?php if (validation_errors()) {?>
						<ul style ="color: red;">
						<?php echo validation_errors('<li>','</li>')?>
							</ul>
						<?php }?>
						 <h1><?php echo $img?></h1>
                      <div class="form-group">
						 
                        <label for="exampleInputPassword1">Kode</label>
                        <input type="text" class="form-control" name="captcha"  placeholder="Masukkan Kode">
                      </div>
                      <button type="submit" class="btn btn-primary me-2"  name="submit">Daftar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
			  </div>
                </div>
    <script>
    $(document).ready(function(){
        $('.refreshCaptcha').on('click', function(){
            $.get('echo base_url().'captcha/refresh'; ?>', function(data){
                $('#captImg').html(data);
            });
        });
    });
    </script>
			
             
              
