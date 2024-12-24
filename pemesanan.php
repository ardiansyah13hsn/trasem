<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
     TRASEM
    </title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.jpg">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
     .hero-section {
              position: relative;
              text-align: center; 
              color: rgb(245, 250, 250);
          }
          .hero-section img {
              width: 100%;
              height: auto;
          }
          .hero-text {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
          }
          .hero-text h1 {
              font-size: 3rem;
              font-weight: bold;
          }
          .hero-text .input-group {
              max-width: 600px;
              margin: auto;
          }
          .icon-section i {
              font-size: 2rem;
              margin-bottom: 10px;
          }
          .icon-section p {
              font-size: 1rem;
          }
          .popular-destinations img,
          .best-destinations img,
          .popular-activities img {
              width: 100%;
              height: auto;
              border-radius: 10px;
          }
          .discount-section {
              background-color: #e3dec5;
              padding: 30px;
              border-radius: 10px;
          }
          .discount-section img {
              width: 100%;
              height: auto;
              border-radius: 10px;
          }
          .discount-section .btn {
              margin-top: 20px;
          }
          .testimonial-section {
              background-color: #f3e8d5;
              padding: 30px;
              border-radius: 10px;
              text-align: center;
          }
          .testimonial-section img {
              width: 50px;
              height: 50px;
              border-radius: 50%;
              margin: 10px;
          }
          .gallery-section {
              background-color:  #d8d8d1;
              padding: 30px;
              border-radius: 10px;
          }
          .gallery-section img {
              width: 100%;
              height: auto;
              border-radius: 10px;
          }
    </style>
   </head>
<body>
        <header class="bg-light py-3">
         <div class="container d-flex justify-content-between align-items-center">
          <a class="navbar-brand" href="#">
           <img alt="TRASEM" height="50" src="assets/images/Gambar WhatsApp 2024-11-01 pukul 21.00.47_69627ed8.jpg" width="100"/>TRASEM
          </a>
          <nav class="ms-auto">
           <ul class="nav">
            <li class="nav-item">
             <a class="nav-link" href="index.html">
              Home
             </a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#">
              Pemesanan
             </a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#">
              Services
             </a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#">
              Contact
             </a>
            </li>
           </ul>
          </nav>
          <a class="btn btn-primary" href="#">
           Login
          </a>
         </div>
        </header>
        <section class="hero-section">
            <img alt="Hero Image" height="500" src="assets/images/kota-lama-semarang.png" width="1200"/>
            <div class="hero-text">
             <h1>
              Liburan Seru di Semarang!
             </h1>
             <h2 class="fs-5">
               ayo hibur kalian sendiri atau keluarga kalian dengan liburan yang indah di semarang
             </h2>
             <div class="input-group mt-4">
              <input class="form-control" placeholder="Search..." type="text"/>
              <button class="btn btn-primary">
               Search
              </button>
             </div>
            </div>
           </section>

           <main class="flex-shrink-0">
            <div class="container">
              <form method="post" action="lib/proses.php">
          <div class="card mt-2">
            <div class="card-header bg-dark text-white">
              Form Pemesanan Paket Wisata
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
              </div>
              <div class="mb-3">
                <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
              </div>
              <div class="mb-3">
                <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
                <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
              </div>
              <div class="mb-3">
                <label for="hari_wisata" class="form-label">Hari Wisata</label>
                <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
              </div>
              <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
                    <label class="form-check-label" for="paket_inap">
                      Penginapan (Rp. 1.000.000)
                    </label>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
                    <label class="form-check-label" for="paket_transport">
                      Transportasi (Rp. 1.200.000)
                    </label>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
                    <label class="form-check-label" for="paket_makan">
                      Service/ Makan (Rp. 500.000)
                    </label>
                  </div>
              </div>
              <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga Paket</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
              </div>
              <div class="mb-3">
                <label for="total" class="form-label">Total Tagihan</label>
                <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan">
              <input type="reset" class="btn btn-danger" value="Ulangi">
            </div>
          </div>
          <script>
          //tentukan konstanta biaya masing-masing
          const paket_inap = 1000000;
          const paket_transport = 1200000;
          const paket_makan = 500000;
          
          function updateTotalCost()
          {
              //inisisi harga paket 0
              let totalCost = 0;
              
              //referensi dari checkbox
              const inapCheckbox = document.getElementById('paket_inap');
              const transportCheckbox = document.getElementById('paket_transport');
              const makanCheckbox = document.getElementById('paket_makan');
              
              //jika inap checkbox ter-check
              if(inapCheckbox.checked)
              {
                  totalCost+=paket_inap;
              }
              
              //jika transport checkbox ter-check
              if(transportCheckbox.checked)
              {
                  totalCost+=paket_transport;
              }
              
              //jika makan checkbox ter-check
              if(makanCheckbox.checked)
              {
                  totalCost+=paket_makan;
              }
              
              document.getElementById('harga').value = totalCost;
          }
          
          function updateTotal()
          {
              let TotalTagihan = 0;
              
              var hari_wisata = document.getElementById('hari_wisata').value;
              var jumlah_peserta = document.getElementById('jumlah_peserta').value;
              var harga = document.getElementById('harga').value;
              
              TotalTagihan = hari_wisata * jumlah_peserta * harga;
              
              document.getElementById('total').value = TotalTagihan;
          }
          
          document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
          document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
          document.getElementById('paket_makan').addEventListener('change', updateTotalCost);
          
          document.getElementById('paket_inap').addEventListener('change', updateTotal);
          document.getElementById('paket_transport').addEventListener('change', updateTotal);
          document.getElementById('paket_makan').addEventListener('change', updateTotal);
          
          document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
          document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);
          
          document.getElementById('hari_wisata').addEventListener('change', updateTotal);
          document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);
          
          updateTotalCost();
          updateTotal();
          </script>  </div>
          </main>
          <footer class="bg-light py-3 text-center">
            <p>
             © 2023 Travel Website
            </p>
           </footer>
</body>
</html>

