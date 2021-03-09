 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">Order Saya</h6>
          <div class="list-group">

            <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-flag"></i></div>
              <div class="order-status">Order Selesai</div>
            </div>


                    <div class="list-group">

              <?php   foreach($produc as $produc  ) : ?>






    
  
<a class="list-group-item readed d-flex align-items-center" href="<?= site_url('order/donasidetail/'. $produc->id_order); ?>"><span class="noti-icon"><i class="lni-graduation"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $produc->name?></h6><span>

 </span>

              </div></a>


             <?php endforeach; ?>
          </div> 




             
           <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Order Dibayar</div>
            </div>

       <div class="list-group">

              <?php   foreach($product1 as $product1  ) : ?>






    
  
<a class="list-group-item d-flex align-items-center" href="<?= site_url('galangdana/webminar'); ?>"><span class="noti-icon"><i class="lni-graduation"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $product1->name?></h6><span>

 </span>

              </div></a>


             <?php endforeach; ?>
          </div>
        </div>



<div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Order Belum Dibayar</div>
            </div>

       <div class="list-group">

              <?php   foreach($product as $product  ) : ?>






    
  
<a class="list-group-item d-flex align-items-center" href="<?= site_url('order/belanjadetail/'. $product->id_order); ?>"><span class="noti-icon"><i class="lni-graduation"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $product->name?></h6><span>Harap segera lakukan pembayaran.
 </span>

              </div></a>


             <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>






   