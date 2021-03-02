<?php
session_start();
include('koneksi.php');

$qNasabah = $link->query("SELECT * FROM tbl_nasabah;");
$qProduk = $link->query("SELECT * FROM tbl_produk_kredit;");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Pengajuan Pinjaman Baru</h1>
    <a href="#!" id="btnKembali" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left"></i> Lihat daftar pengajuan</a>
</div>

<!-- Content Row -->
<div class="card card-primary">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Pilih Nasabah</label>
                    <select class="form-control" id="txtNasabah">
                        <?php while ($rNasabah = $qNasabah->fetch_assoc()) { ?>
                            <option value="<?= $rNasabah['id']; ?>"><?= $rNasabah['nama']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih jenis produk kredit</label>
                    <select class="form-control" id="txtJenisProduk">
                        <?php while ($rProduk = $qProduk->fetch_assoc()) { ?>
                            <option value="<?= $rProduk['id']; ?>"><?= $rProduk['nama_kredit']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="date" class="form-control" id="txtTanggalPengajuan">
                </div>
                <div class="form-group">
                    <label>Nominal Pengajuan</label>
                    <input type="text" id="txtNominalPengajuan" class="form-control" value="1000000">
                </div>
                <div class="form-group">
                    <a href="#!" class="btn btn-primary" id="btnSimpan"><i class="fas fa-check-circle"></i> Daftarkan Pengajuan Kredit</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Pendapatan (C1)</label>
                    <select class="form-control" id="txtPendapatan">
                        <option value="0">--- Pilih ---</option>
                        <option value="1">
                            < Rp. 1.000.000</option>
                        <option value="2">Rp. 1.000.000 - Rp. 5.000.000</option>
                        <option value="3">Rp. 5.000.000 - Rp. 10.000.000</option>
                        <option value="4">Rp. 10.000.000 - Rp. 25.000.000</option>
                        <option value="5">> Rp. 25.000.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jaminan (C2)</label>
                    <select class="form-control" id="txtJaminan">
                        <option value="0">--- Pilih ---</option>
                        <option value="1">KTP / SIM / tanda pengenal lain</option>
                        <option value="2">BPKB</option>
                        <option value="3">Surat Tanah / Rumah</option>
                        <option value="4">Logam Mulia</option>
                        <option value="5">Obligasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan (C3)</label>
                    <select class="form-control" id="txtPekerjaan">
                        <option value="0">--- Pilih ---</option>
                        <option value="1">Tidak bekerja</option>
                        <option value="2">Guru (Non PNS)</option>
                        <option value="3">Karyawan Swasta</option>
                        <option value="4">Pegawai Negeri Sipil (PNS)</option>
                        <option value="5">Wiraswasta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keperluan (C4)</label>
                    <select class="form-control" id="txtKeperluan">
                        <option value="0">--- Pilih ---</option>
                        <option value="1">Pembelian Konsumtif</option>
                        <option value="2">Kesehatan / Pendidikam</option>
                        <option value="3">Modal Usaha</option>
                        <option value="4">Pembayaran Berjangka</option>
                        <option value="5">Pembelian Aset Berharga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jangka Waktu Peminjaman (C5)</label>
                    <select class="form-control" id="txtJangkaWaktuPeminjaman">
                        <option value="0">--- Pilih ---</option>
                        <option value="1">
                            < 3 Bulan</option>
                        <option value="2"> 3 - 6 Bulan</option>
                        <option value="3">6 - 12 Bulan</option>
                        <option value="4">1 - 5 Tahun</option>
                        <option value="5">5 - 10 Tahun</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script>

        var rToTambahPengajuan = server + "prosesTambahPengajuan.php";

        $('#txtNominalPengajuan').mask('000.000.000.000.000', {
            reverse: true
        });

        document.querySelector('#btnSimpan').addEventListener('click', function() {
            let nasabah = document.querySelector('#txtNasabah').value;
            let produk = document.querySelector('#txtJenisProduk').value;
            let tanggal = document.querySelector('#txtTanggalPengajuan').value;
            let nominal = document.querySelector('#txtNominalPengajuan').value;
            let pendapatan = document.querySelector('#txtPendapatan').value;
            let jaminan = document.querySelector('#txtJaminan').value;
            let pekerjaan = document.querySelector('#txtPekerjaan').value;
            let keperluan = document.querySelector('#txtKeperluan').value;
            let jangka = document.querySelector('#txtJangkaWaktuPeminjaman').value;
            let nominalClear = nominal.replace(".", "");
            let ds = {'nasabah':nasabah, 'produk':produk, 'tanggal':tanggal, 'nominal':nominalClear, 'pendapatan':pendapatan, 'jaminan':jaminan, 'pekerjaan':pekerjaan, 'keperluan':keperluan, 'jangka':jangka}

            Swal.fire({
                title: "Submit data ...?",
                text: "Yakin menambahkan pengajuan kredit ... ?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
            }).then((result) => {
                if (result.value) {
                    $.post(rToTambahPengajuan, ds, function(data){
                        pesanUmumApp('success', 'Sukses','Data pengajuan berhasil ditambah');
                        $('#divUtama').load('daftar_pengajuan.php');
                    });
                }
            });

        });

        function pesanUmumApp(icon, title, text) {
            Swal.fire({
                icon: icon,
                title: title,
                text: text
            });
        }
    </script>