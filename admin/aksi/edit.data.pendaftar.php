<?php
include '../../oop_konek.php';
$edp = new database();

$Nama             = $_POST['Nama'];
$NamaPanggilan    = $_POST['NamaPanggilan'];
$NISN             = $_POST['NISN'];
$TmptTanggalLahir = $_POST['TmptTanggalLahir'];
$JenisKelamin     = $_POST['JenisKelamin'];
$AsalSekolah      = $_POST['AsalSekolah'];
$Jurusan          = $_POST['Jurusan'];
$NoTelp           = $_POST['NoTelp'];
$DesaKelurahan    = $_POST['DesaKelurahan'];
$Kecamatan        = $_POST['Kecamatan'];
$Kabupaten        = $_POST['Kabupaten'];
$NoPDF            = $_POST['id'];
$NoPDFt			  = $_POST['NoPDF'];	
$USIA			  = $_POST['USIA'];	


$edp->str_query("UPDATE datadiri SET NoPDF = '$NoPDFt', Nama = '$Nama',
NamaPanggilan = '$NamaPanggilan', NISN = '$NISN', TmptTanggalLahir = '$TmptTanggalLahir', JenisKelamin = '$JenisKelamin', USIA = '$USIA', AsalSekolah = '$AsalSekolah', Jurusan = '$Jurusan', NoTelp = '$NoTelp', DesaKelurahan = '$DesaKelurahan', Kecamatan = '$Kecamatan', Kabupaten = '$Kabupaten' WHERE NoPDF = '$NoPDF'");


$TglLulus    = $_POST['TglLulus'];
$NoIjaza     = $_POST['NoIjaza'];
$NilaiIndo   = $_POST['NilaiIndo'];
$NilaiMTK    = $_POST['NilaiMTK'];
$NilaiEngl   = $_POST['NilaiEngl'];
$NilaiIPA    = $_POST['NilaiIPA'];
$NilaiUNMTK  = $_POST['NilaiUNMTK'];
$NilaiUNIndo = $_POST['NilaiUNIndo'];
$NilaiUNEngl = $_POST['NilaiUNEngl'];
$NilaiUNIPA  = $_POST['NilaiUNIPA'];


$edp->str_query("UPDATE datanilai SET NoPDF = '$NoPDFt', TglLulus = '$TglLulus', NoIjaza = '$NoIjaza', NilaiIndo = '$NilaiIndo', NilaiMTK = '$NilaiMTK', NilaiEngl = '$NilaiEngl', NilaiIPA = '$NilaiIPA', NilaiUNMTK = '$NilaiUNMTK', NilaiUNIndo = '$NilaiUNIndo', NilaiUNEngl = '$NilaiUNEngl', NilaiUNIPA = '$NilaiUNIPA' WHERE NoPDF = '$NoPDF'");

$NamaAyah      = $_POST['NamaAyah'];
$TamatanAyah   = $_POST['TamatanAyah'];
$PekerjaanAyah = $_POST['PekerjaanAyah'];
$NamaIbu       = $_POST['NamaIbu'];
$TamatanIbu    = $_POST['TamatanIbu'];
$PekerjaanIbu  = $_POST['PekerjaanIbu'];
$NamaWali      = $_POST['NamaWali'];
$PekerjaanWali = $_POST['PekerjaanWali'];
$AgamaAyah     = $_POST['AgamaAyah'];
$AgamaIbu      = $_POST['AgamaIbu'];
$AgamaWali     = $_POST['AgamaWali'];
$AlamatAyah    = $_POST['AlamatAyah'];
$AlamatIbu     = $_POST['AlamatIbu'];
$AlamatWali    = $_POST['AlamatWali'];
$NoHPAyah      = $_POST['NoHPAyah'];
$NoHPIbu       = $_POST['NoHPIbu'];


$edp->str_query("UPDATE dataortu SET NoPDF = '$NoPDFt', NamaAyah = '$NamaAyah',TamatanAyah = '$TamatanAyah',PekerjaanAyah = '$PekerjaanAyah',NamaIbu = '$NamaIbu',TamatanIbu = '$TamatanIbu',PekerjaanIbu = '$PekerjaanIbu',NamaWali = '$NamaWali',PekerjaanWali = '$PekerjaanWali',AgamaAyah = '$AgamaAyah',AgamaIbu = '$AgamaIbu',AgamaWali = '$AgamaWali',AlamatAyah = '$AlamatAyah',AlamatIbu = '$AlamatIbu' , AlamatWali = '$AlamatWali' , NoHPAyah = '$NoHPAyah' , NoHPIbu = '$NoHPIbu' WHERE NoPDF = '$NoPDF'");

$edp->str_query("UPDATE datates SET NoPdf = '$NoPDFt' WHERE NoPDF = '$NoPDF'");


header("location:../index.php?page=5&id=".$NoPDF);

 ?>
