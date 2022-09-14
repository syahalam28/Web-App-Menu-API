function tampilkanSemuaMenu(){
// Mengambil data json
// Jika mengambil data JSON dari public API
// $.getJSON('https://', function(){})
$.getJSON('data/pizza.json', function(hasil){

// Bentuk Penyederhanaan dari hasil[menu][0]['nama'];
// php = [''] js = (.)
let menu = hasil.menu;
// console.log(menu[0]['nama']);
// Melakukan fungsi perulangan untuk menampilkan semua data
// $.each = foreach (JSON Data, function(index, isi jasonnya(data)))
// Kalo mau panggil indeks pakainya (i) kalo mau panggil datanya pakainya (data / isi jason)
$.each(menu,function(i, isi_json){

// Mengambil Id (daftar_menu) pada ROW HTML
// append = Menambahkan element bisa HTML dsb diakhir 
$('#daftar_menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+isi_json.gambar+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+isi_json.nama+'<p class="card-text">'+isi_json.deskripsi+'</p><h5 class="card-title">Rp.'+isi_json.harga+'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>')

});


});


}

// Tampilan default awal, menjalankannya dari fungsi 
tampilkanSemuaMenu();




// Memodifikasi Navigasi 
// Mengambil Class Nav
// Jquery Mencari sebuah class dengan nama nav-link, ketika di click menjalankan fungsi untuk mencari class dengan nama nav-link lalu menghilangkan class active.
$('.nav-link').on('click', function(){

$('.nav-link').removeClass('active');
// this = khusus li / a yang sedang di click
// JQuery mencari class yang sedang di click lalu menambahkan class active
$(this).addClass('active');

// Membuat Kategori
// html = mengambil isi / merubah isi / element yang ada pada elemen tersebut
let kategori = $(this).html();
console.log(kategori);

// Karena kategori All Menu tidak ada pada json maka harus dibuat kondisi khusus
// if (kategori == 'All Menu') {
// tampilkanSemuaMenu();
// return;

// }


// Jquery mencari elemen H1 kemudian merubah H1 sesuai dengan kategori yang di clik yang diambil menggunakan fungsi $(this).html();
$('h1').html(kategori);

// Membuat fungsi ketika menu di click menampilkan data yang sesuai dengan kategori
$.getJSON('data/pizza.json', function(hasil){

// Bentuk penyederhanaan dari hasil[menu][0]['nama']
let menu = hasil.menu;
// Membuat content untuk menampilkan element card HTML
let content = '';

// Melakukan perulangan untuk menampilkan data json 
// Ketika json dengan kategori sesuai dengan kategori yang di click
// isi_json.kategori = data kategori pada jason
// kategori = let kategori

$.each(menu,function(i, isi_json){
if (isi_json.kategori == kategori.toLowerCase()) {
content += '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+isi_json.gambar+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+isi_json.nama+'<p class="card-text">'+isi_json.deskripsi+'</p><h5 class="card-title">Rp.'+isi_json.harga+'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';

}
else if (kategori == 'All Menu') {
	content += '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+isi_json.gambar+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+isi_json.nama+'<p class="card-text">'+isi_json.deskripsi+'</p><h5 class="card-title">Rp.'+isi_json.harga+'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
}


});

// Menampilkan isi data sesuai dengan kategori yang dipilih
//jquery mencari id daftar_menu kemudian memasukan HTML yang bersumber dari variabel content 
$('#daftar_menu').html(content);


});




});


