<div class="page-content-wrapper">
	<div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1"><?=$vendor->nama?></h6>
              <p class="sale-price mb-0"><?php   switch ($vendor->kategori) {
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
  default:
    echo "Non - Kategori";
} ?></p>
            </div>
            
          </div>
          <!-- Ratings-->
        
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              Rating :<div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
             
            </div>
          </div>
        </div>

<div class="flash-sale-wrapper pb-3">
        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between">

          </div>



<?php foreach($produk as $pro) : ?>
      <div class="col-12 col-md-6">
              <a href="<?= site_url('product/detail/').$pro->id;?>"><div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="<?= site_url('product/detail/').$pro->id;?>"></a><a class="product-thumbnail d-block" href=""><img src="" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?= site_url('product/detail/').$pro->id;?>"><?=$pro->name?></a>
                    <p class="sale-price"><small>Rp. <?php $angka_format = number_format($pro->price);
echo $angka_format; ?></small></p>
                    <div class="product-rating"></div></a>
                  </div>
                </div>
              </div>
            </div>
          <br>   
            
<?php endforeach; ?>
              </div>
            </div>

</div>





</div>