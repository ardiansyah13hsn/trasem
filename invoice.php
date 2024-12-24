<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
     Travel Website
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
        <header class="bg-light py-3 d-print-none">
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
        <section class="hero-section d-print-none">
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

           <?php
include 'lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="lib/proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <div id="nama_pemesan"><?=$detail[1]?></div>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <div id="hp_pemesan"><?=$detail[2]?></div>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <div id="waktu_wisata"><?=$detail[3]?></div>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <div id="hari_wisata"><?=$detail[4]?></div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?=($detail[5]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_inap">
			Penginapan (Rp. 1.000.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_transport">
			Transportasi (Rp. 1.200.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_makan">
			Service/ Makan (Rp. 500.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	   <div id="jumlah_peserta"><?=$detail[8]?></div>
	 </div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
	</div>
	<div class="mb-3">
	  <label for="created_at" class="form-label">Waktu Pemesanan</label>
	  <div id="created_at"><?=$detail[10]?></div>
	</div>
  </div>
  <div class="card-footer d-print-none">
    <a href="pemesanan.php" class="btn btn-primary">Buat Pesanan Baru</a>
	<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  </div>
</div>
<?php } ?>
          </main>
          <footer class="bg-light py-3 text-center">
            <p>
             © 2023 Travel Website
            </p>
           </footer>
</body>
</html>

