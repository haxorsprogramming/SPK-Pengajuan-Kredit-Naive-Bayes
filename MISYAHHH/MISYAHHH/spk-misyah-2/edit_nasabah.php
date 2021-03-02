 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Update Data Nasabah</h1>
     <a href="#!" id="btnKembali" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
 </div>

 <!-- Content Row -->
 <div class="card card-primary">
     <div class="card-body">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                 <div class="form-group">
                     <label>Nama Nasabah</label>
                     <input type="text" class="form-control" id="txtNamaNasabah">
                 </div>
                 <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input type="text" class="form-control" id="txtTempatLahir">
                 </div>
                 <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <input type="date" class="form-control" id="txtTanggalLahir">
                 </div>
                 <div class="form-group">
                     <label>Nomor Handphone</label>
                     <input type="text" value="087890227922" class="form-control" id="txtNomorHandphone">
                 </div>
                 <div class="form-group">
                     <label>No KTP</label>
                     <input type="text" value="81b9c059-a3b6-418d-a562-6865133750c3" class="form-control" id="txtNomorKtp">
                 </div>
                 <div class="form-group">
                     <label>Alamat</label>
                     <input type="text" class="form-control" id="txtAlamat">
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                 <div class="form-group">
                     <label>No KK</label>
                     <input type="text" value="81b9c059-a3b6-418d-a562-6865133750c3" class="form-control" id="txtNoKk">
                 </div>
                 <div class="form-group">
                     <label>Nama Ayah</label>
                     <input type="text" class="form-control" id="txtNamaAyah">
                 </div>
                 <div class="form-group">
                     <label>Nama Ibu</label>
                     <input type="text" class="form-control" id="txtNamaIbu">
                 </div>
                 <div class="form-group">
                     <label>Nomor Handphone Orang Tua</label>
                     <input type="text" value="087890227922" class="form-control" id="txtNoHpOrangTua">
                 </div>
                 <div class="form-group">
                     <label>Alamat Orang Tua</label>
                     <input type="text" class="form-control" id="txtAlamatOrangTua">
                 </div>
                 <div class="form-group">
                     <a href="#!" id="btnSimpan" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> Simpan</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script>
     var rToSaveNasabah = server + "prosesTambahNasabah.php";

     document.querySelector('#txtNamaNasabah').focus();
     document.querySelector('#btnSimpan').addEventListener('click', function(){
        let namaNasabah = document.querySelector('#txtNamaNasabah').value;
        let tempatLahir = document.querySelector('#txtTempatLahir').value;
        let tanggalLahir = document.querySelector('#txtTanggalLahir').value;
        let noHp = document.querySelector('#txtNomorHandphone').value;
        let noKtp = document.querySelector('#txtNomorKtp').value;
        let alamat = document.querySelector('#txtAlamat').value;
        let noKk = document.querySelector('#txtNoKk').value;
        let namaAyah = document.querySelector('#txtNamaAyah').value;
        let namaIbu = document.querySelector('#txtNamaIbu').value;
        let noHpOrtu = document.querySelector('#txtNoHpOrangTua').value;
        let alamatOrtu = document.querySelector('#txtAlamatOrangTua').value;
        
        let ds = {'nama':namaNasabah, 'tempatLahir':tempatLahir, 'tanggalLahir':tanggalLahir, 'noHp':noHp, 'noKtp':noKtp, 'alamat':alamat, 'noKk':noKk, 'namaAyah':namaAyah, 'namaIbu':namaIbu, 'noHpOrtu':noHpOrtu, 'alamatOrtu':alamatOrtu}
        if(namaNasabah === '' || tempatLahir === '' || noKtp === '' || alamat === '' || noKk === '' || namaAyah === '' || namaIbu === '' || noHpOrtu === '' || alamatOrtu === ''){
            pesanUmumApp('warning', 'Isi field!!!', "Harap isi semua field!!!");
        }else{
            $.post(rToSaveNasabah, ds, function(data){
                pesanUmumApp('success', 'Sukses', 'Data nasabah berhasil di update...');
                $('#divUtama').load('data_nasabah.php');
            });
        }   
     });
 </script>