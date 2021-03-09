 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  
                  <h4 class="card-title ">List Vendor<a class="btn btn-default" href="<?= site_url('admin/addVendor'); ?>" style="float: right;
    display: block;" >+ ADD</a>
                 

                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success-delete')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('success-delete'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
          
        </div>
        <?php endif; ?>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Vendor
                        </th>
                        <th>
                          Kategori
                        </th>
                        <th>
                         Deskripsi
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $vendor) : ?>
                        <tr>
                          <td>
                           <?=$vendor->id?>
                          </td>
                          <td>
                            <?=$vendor->nama?>
                          </td>
                          <td>
                            <?=$vendor->kategori?>
                          </td>
                           <td>
                            <?=$vendor->deskripsi?>
                          </td>
                          <td>
                            <a href="<?php echo site_url('admin/edit_vendor/'.$vendor->id) ?>" >Edit</a>
                            <a href="<?php echo site_url('admin/hapus_vendor/'.$vendor->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
                  </div>
                </div>
              </div>
            </div>