<?php
include "../admin/oop_konek.php";

$input = new database();
$NoPDF         = $_POST['NoPDF'];
$input->str_query("SELECT * FROM datadiri WHERE NoPDF = $NoPDF");
$hitung_data = $input->hitung();

$Nama          = addslashes(ucfirst($_POST['Nama']));
$NamaPanggilan = addslashes(ucfirst($_POST['NamaPanggilan']));
$NISN          = $_POST['NISN'];
$TmptTanggalLahir  = $_POST['TmptTanggalLahir'];
$USIA              = $_POST['USIA'];
$JenisKelamin  = $_POST['JenisKelamin'];
$AsalSekolah   = $_POST['AsalSekolah'];
$NoTelp        = $_POST['NoTelp'];
$DesaKelurahan = addslashes(ucfirst($_POST['DesaKelurahan']));
$Kecamatan     = ucfirst($_POST['Kecamatan']);
$Kabupaten     = ucfirst($_POST['Kabupaten']);
$status        = 'TERDAFTAR';
$NamaAyah      = addslashes(ucfirst($_POST['NamaAyah']));
$TamatanAyah   = ucfirst($_POST['TamatanAyah']);
$PekerjaanAyah = ucfirst($_POST['PekerjaanAyah']);
$NamaIbu       = addslashes(ucfirst($_POST['NamaIbu']));
$TamatanIbu    = ucfirst($_POST['TamatanIbu']);
$PekerjaanIbu  = ucfirst($_POST['PekerjaanIbu']);
$NamaWali      = addslashes(ucfirst($_POST['NamaWali']));
$TamatanWali   = "";
$PekerjaanWali = ucfirst($_POST['PekerjaanWali']);
$AgamaAyah     = ucfirst($_POST['AgamaAyah']);
$AgamaIbu      = ucfirst($_POST['AgamaIbu']);
$AgamaWali     = ucfirst($_POST['AgamaWali']);
$AlamatAyah    = ucfirst($_POST['AlamatAyah']);
$AlamatIbu     = ucfirst($_POST['AlamatIbu']);
$AlamatWali    = ucfirst($_POST['AlamatWali']);
$NoHPAyah      = ucfirst($_POST['NoHPAyah']);
$NoHPIbu       = ucfirst($_POST['NoHPIbu']);
$TglLulus  = $_POST['TglLulus'];
$NoIjaza   = 'Belum';
$NilaiIndo = $_POST['NilaiIndo'];
$NilaiMTK  = $_POST['NilaiMTK'];
$NilaiEngl = $_POST['NilaiEngl'];
$NilaiIPA  = $_POST['NilaiIPA'];
$NilaiUNIndo = $_POST['NilaiUNIndo'];
$NilaiUNMTK  = $_POST['NilaiUNMTK'];
$NilaiUNEngl = $_POST['NilaiUNEngl'];
$NilaiUNIPA  = $_POST['NilaiUNIPA'];
$tgldftar = date('d M Y');

if ($hitung_data = 0) {
      $input->str_query("INSERT INTO datadiri (NoPDF,Urut,Nama,NamaPanggilan,NISN,TmptTanggalLahir,USIA,JenisKelamin,AsalSekolah,Jurusan,NoTelp,Alamat,DesaKelurahan,Kecamatan,Kabupaten,status) VALUES('$NoPDF','$urut','$Nama','$NamaPanggilan','$NISN','$TmptTanggalLahir','$USIA','$JenisKelamin','$AsalSekolah','$Jurusan','$NoTelp','$Alamat','$DesaKelurahan','$Kecamatan','$Kabupaten','$status')");
      $input->str_query("INSERT INTO dataortu (NoPDF,NamaAyah,TamatanAyah,PekerjaanAyah,NamaIbu,TamatanIbu,PekerjaanIbu,NamaWali,TamatanWali,PekerjaanWali,AgamaAyah,AgamaIbu,AgamaWali,AlamatAyah,AlamatIbu,AlamatWali,NoHPAyah,NoHPIbu) VALUES('$NoPDF','$NamaAyah','$TamatanAyah','$PekerjaanAyah','$NamaIbu','$TamatanIbu','$PekerjaanIbu','$NamaWali','$TamatanWali','$PekerjaanWali','$AgamaAyah','$AgamaIbu','$AgamaWali','$AlamatAyah','$AlamatIbu','$AlamatWali','$NoHPAyah','$NoHPIbu')");
      $input->str_query("INSERT INTO datanilai (NoPDF,TglLulus,NoIjaza,NilaiIndo,NilaiMTK,NilaiEngl,NilaiIPA,NilaiUNIndo,NilaiUNMTK,NilaiUNEngl,NilaiUNIPA) VALUES ('$NoPDF','$TglLulus','$NoIjaza','$NilaiIndo','$NilaiMTK','$NilaiEngl','$NilaiIPA','$NilaiUNIndo','$NilaiUNMTK','$NilaiUNEngl','$NilaiUNIPA')");
      $input->str_query("INSERT INTO cetak (NoPDF,StatusCetak) VALUES ('$NoPDF',1)");
      $input->str_query("SELECT * FROM infoppdb WHERE id = 0");
      $cek = $input->fetch_object();
        $TglTes   = $cek->tanggal;
        $WaktuTes = $cek->waktu;
        $input->str_query("INSERT INTO datates (NoPdf,TglDaftar,TglTes,WaktuTes) VALUES ('$NoPDF','$tgldftar','$TglTes','$WaktuTes')");
      echo "Data pendaftar sudah masuk";
} else {
  $input->str_query("UPDATE SET NamaAyah = '$NamaAyah', TamatanAyah ='$TamatanAyah', PekerjaanAyah = '$PekerjaanAyah', NamaIbu = '$NamaIbu', TamatanIbu = '$TamatanIbu', PekerjaanIbu = '$PekerjaanIbu', NamaWali = '$NamaWali', TamatanWali = '$TamatanWali', PekerjaanWali = '$PekerjaanWali', AgamaAyah = '$AgamaAyah', AgamaIbu = '$AgamaIbu', AgamaWali = '$AgamaWali', AlamatAyah = '$AlamatAyah', AlamatIbu = '$AlamatIbu', AlamatWali = '$AlamatWali', NoHPAyah = '$NoHPAyah', NoHPIbu = '$NoHPIbu' WHERE NoPDF = '$NoPDF' )");
}

?>