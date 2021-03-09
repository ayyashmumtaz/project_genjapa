  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Data Anggota</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Diri</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/galangdana/addAng'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
  <input type="hidden" name="id_ketua" value="<?= $this->session->userdata("nama"); ?>">
                    <div class="col-md-3">
                        <label class="bmd-label-floating">Nama Lengkap</label>
                        <div class="form-group">
                        
                          <input type="text" name="nama" class="form-control" required="">
                        </div>
                      </div>


                     <div class="col-md-3">
                         <label class="bmd-label-floating">Tanggal Lahir</label>
                        <div class="form-group">
                         
                          <input type="date" name="tgl_lahir" class="form-control" required="">
                        </div>
                      </div>

                  



                  
                    </div>

<br>

       <div class="row">
            <div class="col-md-3">
                         <label class="bmd-label-floating">Username</label>
                        <div class="form-group">
                         
                          <input type="username" name="username" class="form-control" required="">
                        </div>
                      </div>

                      <div class="col-md-3">
                         <label class="bmd-label-floating">Password</label>
                        <div class="form-group">
                         
                          <input type="password" name="password" class="form-control" required="">
                        </div>
                      </div>
                  
                     
 <div class="col-md-3">
                         <label class="bmd-label-floating">Ulangi Password</label>
                        <div class="form-group">
                         
                          <input type="password"  class="form-control" required="">
                        </div>
                      </div>

           <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto Diri</label>
                          <input type="file" name="fotodiri" required="">
                        
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto KTP</label>
                          <input type="file" name="fotoktp" required="">
                        
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto KK</label>
                          <input type="file" name="fotokk" required="">
                        
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Surat Jaminan</label>
                          <input type="file" name="fotojaminan" required="">
                        
                      </div>
        
       </div>          

                  
    &nbsp              
                     
                

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat Lengkap</label>
                          <div class="form-group">
                            
                            <textarea class="form-control" name="alamat" rows="5" required=""></textarea>
                          </div>
                        </div>
                      </div>
                      
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan anggota anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Anggota</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>