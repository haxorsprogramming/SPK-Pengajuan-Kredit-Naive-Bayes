// inisialisasi & function 
$('#divUtama').load('beranda.php');

document.querySelector('#btnBeranda').addEventListener('click', function(){
    $('#divUtama').load('beranda.php');
});

document.querySelector('#btnDataNasbah').addEventListener('click', function(){
    $('#divUtama').load('data_nasabah.php');
});

document.querySelector('#btnProdukKredit').addEventListener('click', function(){
    $('#divUtama').load('produk_kredit.php');
});

document.querySelector('#btnPengajuanBaru').addEventListener('click', function(){
    $('#divUtama').load('pengajuan_baru.php');
});

document.querySelector('#btnDaftarPengajuan').addEventListener('click', function(){
    $('#divUtama').load('daftar_pengajuan.php');
});

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}