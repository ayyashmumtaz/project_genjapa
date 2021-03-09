 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">

                  <h4 class="card-title ">List Pasien
               <a class="btn btn-default" href="<?= site_url('admin/form_tambah_dokter'); ?>" style="float: right;
    display: block;" >+ ADD</a>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Pasien
                        </th>
                        <th>
                          Tanggal Pemesanan
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $dokter) : ?>
                        <tr>
                          <td>
                           <?=$dokter->id_order?>
                          </td>
                          <td>
                            <?=$dokter->user?>
                          </td>
                          <td>
                            <?=$dokter->tgl_order?>
                          </td>
                      
                          <td>
                            <a class="btn btn-primary" target="_blank" href="<?php echo site_url('video/#'.$dokter->id_order) ?>">Telepon Sekarang</a>
                            <a class="btn btn-success" href="<?php echo site_url('doctor/notes/'.$dokter->id_order) ?>">Ubah Status Selesai</a>
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