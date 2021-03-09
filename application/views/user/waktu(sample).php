 <div class="page-content-wrapper">
     <div class="card-body">
<form action="https://teledoctor.id/home/reservasi/addRes" method="POST">
<div class="form-group">
<div class="title mb-2"><span>Nama Pasien</span></div>
<input class="form-control" type="text" name="nama_pasien" value="" required="">
</div>
<div class="form-group">
<div class="title mb-2"><span>Catatan</span></div>
<input class="form-control" type="text" name="catatan" value="" placeholder="Catatan">
</div>
<div class="form-group">
<div class="title mb-2"><span>Tanggal</span></div>
<input class="form-control" type="date" name="tgl_reservasi" required="">
<input type="hidden" name="dokter" value="Dr Sri Ayu Alga Dewi" required="">
<input type="hidden" name="dokter_username" value="alga.kaila" required="">
<input type="hidden" name="harga" value="60000" required="">
</div>
<div class="form-group">p
<div class="title"><span>Waktu</span></div>
<div class="time_area" style="margin-top:20px;">

<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="08:00"> 08:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="09:00"> 09:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="10:00"> 10:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="11:00"> 11:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="14:00"> 14:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="15:00"> 15:00
</label>
<label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
<input type="radio" name="waktu_reservasi" autocomplete="off" value="16:00"> 16:00
</label>
</div>

<button class="btn btn-success w-100" style="margin-top:40px;" type="submit">Buat Reservasi</button>

</div>
</div></form>


</div>
    </div>