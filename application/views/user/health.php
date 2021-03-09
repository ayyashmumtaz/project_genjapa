
<div class="page-content-wrapper">
  <!-- Hero Slides-->



  <div class="product-catagories-wrapper">
    <br>  
    <table border="0">
      <tr>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/notes.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"> <img style="width: 500px; " src="<?= base_url('img/wellness/lab test.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/Medicine.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/rontgen.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/Lainnya.png');?>" alt=""></td>
      </tr>
    </table>
  </div>
  <br>  



  <!-- Product Catagories-->
  <div class="product-catagories-wrapper pt-1" style="background-color:rgb(39, 188, 221);">


    <div class="container">
      <br>
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1" style="color: whte;">Health Status & Recomendation</h6><a class="btn btn-primary btn-sm" href="<?=site_url('healthstat');?>">View All</a>
      </div>
      <div class="product-catagory-wrap">
        <div class="row">
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>38℃</h6></i><span>Temperatur</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>98</h6></i><span>Heart Rate</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>Obese</h6></i><span>BMI</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>120/90</h6></i><span>Tekanan Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>90%</h6></i><span>SPO2 Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6>120</h6></i><span>Glukosa Darah</span></a></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><button class="btn btn-sm btn-danger">Buruk</button></i><span>Kondisi Kesehatan</span></a></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><button class="btn btn-sm btn-danger" href="#">Hubungi Dokter</button></i><span>Rekomendasi</span></a></div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <!-- Flash Sale Slide-->

  <br>
  <div class="cta-area">
    <div class="container">

    </div>
  </div>


  <div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">Suhu Tubuh</h6>
      </div>
      <!-- Flash Sale Slide-->
            <center>

             <img src="<?=base_url('img/suhu.jpeg');?>">

           </center> 

           


         </div>
       </div>


       <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Heart Rate</h6>
          </div>
          <!-- Flash Sale Slide-->
          <!--div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->

            <center> <img src="<?=base_url('img/heart.jpeg');?>"></center>
            
          </div>
        </div>

        <div class="flash-sale-wrapper pb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Blood Glucose</h6>
            </div>
            <!-- Flash Sale Slide-->
            <center> <img src="<?=base_url('img/glucose.jpeg');?>"></center>
          </div>
        </div>

        <div class="flash-sale-wrapper pb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Blood Oxygen</h6>
            </div>
            <!-- Flash Sale Slide-->
            <center> <img src="<?=base_url('img/oxygen.jpeg');?>"></center>
          </div>
        </div>
        
        <script src="https://www.jsdelivr.com/package/npm/chart.js?path=dist"></script>
        <script>
          var ctx = document.getElementById('suhuTubuh').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>