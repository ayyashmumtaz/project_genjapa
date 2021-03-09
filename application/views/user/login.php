

    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container"><img height="70px" src="<?= base_url('img/core-img/big_logo.jpeg');?>" alt="">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
            <div class="form-group text-left mb-4"><span>Username</span>
              <label for="username"><i class="lni-user"></i></label>
              <input class="form-control" name="username" id="username" type="text" placeholder="Enter username...">
            </div>
            <div class="form-group text-left mb-4"><span>Password</span>
              <label for="password"><i class="lni-lock"></i></label>
              <input class="form-control" name="password" id="password" type="password" placeholder="********************">
            </div>
            <div class="form-group text-left mb-4"><span>Pilih Lokasi Anda Saat Ini</span>
              <label for="email"><i class="lni-apartment"></i></label>
              <select class="form-control" type="email" name="domisili" required="">
                <option value="cianjur">Cianjur</option>
                <option value="depok">Depok</option>
                <option value="kab_bogor">Kabupaten Bogor</option>
                <option value="kota_bogor">Kota Bogor</option>
                <option value="karawang">Kawarang</option>
                <option value="kab_bekasi">Kabupaten Bekasi</option>
                <option value="kota_bekasi">Kota Bekasi</option>
                <option value="kab_sukabumi">Kabupaten Sukabumi</option>
                <option value="kota_sukabumi">Kota Sukabumi</option>
              </select>
            </div>
            <button class="btn btn-success btn-lg w-100">Login</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1" href="<?= site_url('forget'); ?>">Lupa Kata Sandi?</a>
          <p class="text-white mb-0">Belum Mempunyai Akun?<a class="ml-2" href="<?= site_url('register'); ?>">Register</a></p>
          <br>
            
      </div>
    </div>

    <?php if ($this->session->flashdata('failed')): ?>
        <script>
  Swal.fire({
    icon: 'error',
    title: 'Login Gagal!',
    text: 'Username atau Password Salah!',
    showConfirmButton: false,
    timer: 2560
})
</script>
         
        <?php endif; ?>

        
    