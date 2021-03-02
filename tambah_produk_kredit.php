 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Tambah Data Produk Kredit</h1>
     <a href="#!" id="btnKembali" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
 </div>

 <div class="card card-primary">
     <div class="card-body">
         <div class="row">

             <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                 <div class="form-group">
                     <label>Nama Produk</label>
                     <input type="text" class="form-control" id="txtNamaProduk">
                 </div>
                 <div class="form-group">
                     <label>Deksripsi Produk</label>
                     <textarea style="resize: none;" class="form-control" placeholder="Deksripsi produk" id="txtDeksProduk"></textarea>
                 </div>
                 <div class="form-group">
                     <label>Minimal Nominal Pinjaman</label>
                     <input type="text" class="form-control uang" id="txtMinimalNominal">
                 </div>
                 <div class="form-group">
                     <label>Maksimal Nominal Pinjaman</label>
                     <input type="text" class="form-control uang" id="txtMaksimalNominal">
                 </div>
                 <div class="form-group">
                     <label>Minimal Tempo Pinjaman (Bulan)</label>
                     <input type="number" class="form-control" id="txtMinimalTempo">
                 </div>
                 <div class="form-group">
                     <label>Maksimal Tempo Pinjaman (Bulan)</label>
                     <input type="number" class="form-control" id="txtMaksimalTempo">
                 </div>
                 <div class="form-group">
                     <a href="#!" class="btn btn-primary" id="btnSimpan">Simpan</a>
                 </div>
             </div>

             <div class="col-lg-6 col-md-6 col-sm-6 col-12">

             </div>

         </div>
     </div>
 </div>

 <script>
    document.querySelector('#txtNamaProduk').focus();

     $('.uang').mask('000.000.000.000.000', {
         reverse: true
     });

     var rToProsesProduk = server + "prosesTambahProduk.php";

     document.querySelector('#btnSimpan').addEventListener('click', function() {
         let namaProduk = document.querySelector('#txtNamaProduk').value;
         let deksProduk = document.querySelector('#txtDeksProduk').value;
         let minNominal = document.querySelector('#txtMinimalNominal').value;
         let maxNominal = document.querySelector('#txtMaksimalNominal').value;
         let minTempo = document.querySelector('#txtMinimalTempo').value;
         let maxTempo = document.querySelector('#txtMaksimalTempo').value;
         
         let minNominalClean = parseInt(minNominal.replace(".", ""));
         let maxNominalClean = parseInt(maxNominal.replace(".", "")); 

         if(namaProduk === '' || minNominal === '' || maxNominal === '' || minTempo === '' || maxTempo === ''){
            pesanUmumApp('warning', 'Isi field!!!', 'Harap isi seluruh field ... !!!');
         }else{
            if(minNominalClean >= maxNominalClean){
                pesanUmumApp('warning', 'Check field!!!', 'Maksimal nominal harus lebih besar dari minimal nominal ... !!!');
            }else{
                if(parseInt(minTempo) >= parseInt(maxTempo)){
                    pesanUmumApp('warning', 'Check field!!!', 'Maksimal tempo harus lebih besar dari minimal tempo');
                }else{
                    let ds = {'namaProduk':namaProduk, 'deksProduk':deksProduk, 'minNominal':minNominalClean, 'maxNominal':minNominalClean, 'minTempo':minTempo, 'maxTempo':maxTempo}
                    $.post(rToProsesProduk, ds, function(data){
                        console.log(data);
                        pesanUmumApp('success', 'Sukses', 'Data produk kredit baru berhasil ditambahkan...');
                        $('#divUtama').load('produk_kredit.php');
                    });
                }
            }
         }

     });

     function pesanUmumApp(icon, title, text) {
         Swal.fire({
             icon: icon,
             title: title,
             text: text
         });
     }
 </script>