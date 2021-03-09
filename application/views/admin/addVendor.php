  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Form Data vendor</h4>
              <p class="card-category">Masukan Seluruh Kriteria vendor</p>
            </div>
            <div class="card-body">
              <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
              <form action="<?php echo site_url().'admin/addVend'?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama vendor</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kategori</label>
                          <select name="kategori" class="form-control">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="wisata">Wisata</option>
                            <option value="mini_market">Mini Market / UKM</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">

                        <label class="bmd-label-floating">Foto vendor</label>
                        <input type="file" name="image" class="form-control">

                      </div>
                    </div>

<div class="row">
   <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
</div>

                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi vendor</label>
                          <div class="form-group">

                            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <label class="bmd-label-floating"> Dengan menambahkan vendor anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah vendor</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>