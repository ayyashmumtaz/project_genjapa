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
                        <th>Domisili</th>
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
                            <?php   switch ($vendor->kategori) {
  case "makanan":
    echo "Food & Beverage";
    break;
  case "minuman":
    echo "Minuman";
    break;
    case "wisata":
    echo "Travel & Wisata";
    break;
    case "mini_market":
    echo "Mini Market / UKM";
    break;
    case "obat":
    echo "Herbal / Obat";
    break;
    case "edupreneur":
    echo "Edupreneur";
    break;
    case "tour_guide":
    echo "Tour Guider";
    break;
    case "hotel":
    echo "Hotel / Motel";
    break;
    case "travel":
    echo "Travel Agent";
    break;
  default:
    echo "Non - Kategori";
} ?>
                          </td>
                           <td>
                            <?=$vendor->deskripsi?>
                          </td>
                          <td>
                            <?php switch ($vendor->domisili) {
                              case "cianjur":
    echo "Cianjur";
    break;
  case "kab_bogor":
    echo "Kabupaten Bogor";
    break;
    case "kota_bogor":
    echo "Kota Bogor";
    break;
    case "kab_bekasi":
    echo "Kabupaten Bekasi";
    break;
    case "kota_bekasi":
    echo "Kota Bekasi";
    break;
    case "depok":
    echo "Kota Depok";
    break;
    case "karawang":
    echo "Karawang";
    break;
    case "kab_sukabumi":
    echo "Kabupaten Sukabumi";
    break;
    case "kota_sukabumi":
    echo "Kota Sukabumi";
    break;
  default:
    echo "(belum login)";
} ?></td>
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