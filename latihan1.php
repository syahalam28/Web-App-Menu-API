<?php 
// Mengambil File Json 
$data = file_get_contents('data/pizza.json');
// Mengubah Json Menjadi Array (True)
$menu = json_decode($data, true);

// {
//     "menu": [
//         {
//             "kategori": "pizza",
//             "nama": "Meat Lover",
//             "deskripsi": "Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.",
//             "harga": 49500,
//             "gambar": "meat-lover.jpg"
//         },
//         {
//             "kategori": "pizza",
//             "nama": "Super Supreme",
//             "deskripsi": "Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah,
//             "harga": 49500,
//             "gambar": "supreme.jpg"
//         },

// Mencoba Mengambil Data Tertentu
// ['menu'] = Struktur Awal Ketika Mau Ambil Data Nama
// [0] =  Data Nama Yang Mau Diambil Berada Pada Indeks Ke - 0
// ['nama'] = Data yang akan diambil
		// var_dump($menu['menu'][0]['nama']);
// Make A Simple Way
		$menu = $menu['menu'];
		// echo $menu[0]['nama'];


 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CIMB NIAGA HUT</title>
  </head>
  <body>
  	<!-- Navigasi -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
		<a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-link active" href="#">Home</a>
	     
	    </div>
	  </div>
		</div>
	</nav>
	<!-- End Of Navigasi -->
	<!-- Main Content -->
	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<h1>All Menu</h1>
			</div>
			
		</div>

		<div class="row">
			<?php foreach ($menu as $row) : ?>
			<div class="col-md-4">
				  <div class="card mb-3">
				  <img src="img/menu/<?= $row['gambar'] ?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?= $row['nama'] ?></h5>
				    <p class="card-text"><?= $row['deskripsi'] ?></p>
				    <h5 class="card-title">Rp.<?= $row['harga'] ?></h5>
				    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
				  </div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>

	</div>
	<!-- End Of Main Content -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>