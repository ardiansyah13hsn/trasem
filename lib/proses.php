<?php
include 'koneksi.php';

if(isset($_POST['nama_pemesanan'])){
    //eksekusi simpan
    //echo '<pre>';
    //var_dump($_POST);
    
    //definisikan setiap variabel
    $nama_pemesanan = htmlentities($_POST['nama_pemesanan']);
	$hp_pemesan = htmlentities($_POST['hp_pemesan']);
	$waktu_wisata = htmlentities($_POST['waktu_wisata']);
	$hari_wisata = htmlentities($_POST['hari_wisata']);
	$jumlah_peserta = htmlentities($_POST['jumlah_peserta']);
	$total_tagihan = htmlentities($_POST['total']);
	
	//pengkondisian jika salah satu paket tidak dipilih
	$paket_inap = isset($_POST['paket_inap'])?1:0;
	$paket_transport = isset($_POST['paket_transport'])?1:0;
	$paket_makan = isset($_POST['paket_makan'])?1:0;
	
	$sql = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, jumlah_peserta, total_tagihan, paket_inap, paket_transport, paket_makan) value ('$nama_pemesanan','$hp_pemesan','$waktu_wisata','$hari_wisata','$jumlah_peserta','$total_tagihan','$paket_inap','$paket_transport','$paket_makan')";
	$query = mysqli_query($db,$sql);
	if ($query) {
        // Jika berhasil, alihkan ke read.php
        $id_pemesanan = mysqli_insert_id($db);
        header("Location: ../invoice.php?id_pemesanan=".$id_pemesanan);
        exit();
    } else {
        // Jika gagal, tetap di halaman pemesanan.php dengan pesan error
        echo "Data gagal disimpan";
    }
}else{
    //muncul pesan error
    echo 'Ngapain?';
}
?>