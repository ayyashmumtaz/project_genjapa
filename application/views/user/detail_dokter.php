<div class="page-content-wrapper">
  <!-- Product Slides-->
  <div class="product-slides owl-carousel">
    <!-- Single Hero Slide-->
    <div class="single-product-slide"><img src="<?=base_url("/img/dokter/".$dokter->image)?>" alt=""></div>

  </div>
  <div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
      <div class="container d-flex justify-content-between">
        <div class="p-title-price">
          <h6 class="mb-1"><?=$dokter->nama?></h6>
          <p class="sale-price mb-0">Rp. <?php $harga = "$dokter->harga"; echo number_format($harga);?></p>
        </div>
        <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni-heart-filled"></i></a><a href="#"><i class="lni-share"></i></a></div>
      </div>
      <!-- Ratings-->
      <div class="product-ratings">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
          <!-- <div class="total-result-of-ratings"><span>4.96</span><span>Very Good</span></div> -->
        </div>
      </div>
    </div>

    <!-- Add To Cart-->
    <div class="cart-form-wrapper bg-white mb-3 py-3">
      <div class="container">
        <a class="btn btn-success w-100" href="<?php echo site_url('call/add/'.$dokter->id); ?>">Pesan Sekarang</a>
      </div>
    </div>
    <!-- Product Specification-->
    <div class="p-specification bg-white mb-3 py-3">
      <div class="container">
        <h6>Deskripsi</h6>
        <p><?=$dokter->deskripsi?></p>

     </div>
    </div>
   <!-- Rating & Review Wrapper-->
   <div class="rating-and-review-wrapper bg-white py-3 mb-3">
    <div class="container">
      <h6>Ratings &amp; Reviews</h6>
      <div class="rating-review-content">
        <ul>
          <li class="single-user-review d-flex">
            <div class="user-thumbnail"><img src="img/bg-img/7.jpg" alt=""></div>
            <div class="rating-comment">
              <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <p class="comment mb-0">Dokternya Baik dan ramah sekali. terima kasih dok.</p><span class="name-date">Designing World 12 Dec 2020</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Ratings Submit Form-->
  <div class="ratings-submit-form bg-white py-3">
    <div class="container">
      <h6>Berikan Ulasan</h6>
      <form action="#" method="POST">
        <div class="form-group">
          <div class="stars">
            <input class="star-1" type="radio" name="star" id="star1">
            <label class="star-1" for="star1"></label>
            <input class="star-2" type="radio" name="star" id="star2">
            <label class="star-2" for="star2"></label>
            <input class="star-3" type="radio" name="star" id="star3">
            <label class="star-3" for="star3"></label>
            <input class="star-4" type="radio" name="star" id="star4">
            <label class="star-4" for="star4"></label>
            <input class="star-5" type="radio" name="star" id="star5">
            <label class="star-5" for="star5"></label><span></span>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="comments" name="comment" cols="30" rows="10" data-max-length="200"></textarea>
        </div>
        <button class="btn btn-sm btn-primary" type="submit">Simpan Ulasan</button>
      </form>
    </div>
  </div>
</div>
</div>