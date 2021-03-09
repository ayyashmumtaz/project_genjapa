

<div class="page-content-wrapper">
  <!-- Hero Slides-->


  <div class="hero-slides owl-carousel">


  <!-- Single Hero Slide-->
  <?php foreach($banner as $pro) : ?>
    <div class="single-hero-slide">
      <div class="slide-img"><?= img([

        'src'   => 'img/bg-img/' . $pro->img,
        
        ])?></div>
        <div class="slide-content h-100 d-flex align-items-center">
          <div class="container">

          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
    </div>
     
</div>




  <!-- Product Catagories-->
  <div class="product-catagories-wrapper" >


    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
<h6 class="ml-1">Kategori</h6>
          </div>
      <div class="product-catagory-wrap">
        <div class="row">
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i class="fa fa-medkit"></i><span>Herbal & Obat</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i class="lni-dinner"></i><span>Makanan</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i class="lni-juice"></i><span>Minuman</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i class="lni-pencil-alt"></i><span>Alat Tulis</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i class="lni-cart-full"></i><span>Sembako</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="<?= site_url('product');?>"><i class="lni-line-double"></i><span>Lainnya</span></a></div>
            </div>
          </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <!-- Flash Sale Slide-->

  



  <br>

 
      

     




      <div class="flash-sale-wrapper pb-3">
        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between">
<h6 class="ml-1">Merchant Pilihan di <?php $dom=$this->session->userdata('domisili');  switch ($dom) {
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
} ?></h6><a class="btn btn-warning btn-sm" href="<?=site_url('product');?>">View All</a>
          </div>
          <?php foreach($vendor as $namanya) : ?>
      <div class="col-12 col-md-6">
              <a href="<?= site_url('product/detail_vendor/').$namanya->id;?>"><div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="<?= site_url('product/detail_vendor/'.$namanya->id);?>"></a><a class="product-thumbnail d-block" href="<?= site_url('product/detail_vendor/').$namanya->id;?>"><img src="<?= base_url('img/vendor/'.$namanya->image);?>" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?= site_url('product/detail_vendor/').$namanya->id;?>"><?= $namanya->nama;?></a>
                    <p class="sale-price"><small><?php   switch ($namanya->kategori) {
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
    case "hotel":
    echo "Hotel / Motel";
    break;
    case "travel":
    echo "Travel Agent";
    break;
  default:
    echo "Non - Kategori";
} ?></small></p>
                    <div class="product-rating">0.34 KM</div></a>
                  </div>
                </div>
              </div>
            </div>
          <br>   
            
<?php endforeach; ?>

              </div>
            </div>

</div>




<br>  
<br>





<?php if ($this->session->flashdata('warning')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Anda Sudah Login!',
      text: 'Jika tidak dialihkan ke menu utama, silahkan reload halaman ini',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>



<?php if ($this->session->flashdata('success-login')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di Genjapa!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>


<?php if ($this->session->flashdata('success-logout')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Logout Berhasil!',
      text: 'Sampai jumpa! Terimakasih telah mengunjungin Genjapa!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>
<!-- Single Weekly Product Card-->


<!-- Top Products-->




<!-- Cool Facts Area-->

