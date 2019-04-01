<?php
include "oop_konek.php";

// error_reporting(0);

$input = new database();

if (empty($_POST['jurusan1']) || empty($_POST['jurusan2'])) {
  echo "Silahkan pilih jurusan";
  echo "<a href='form.php'> kembali </a>";
} else {

$kode_jurusan  = $_POST['jurusan1'];

if ($kode_jurusan == 1) {
  $Jurusan = "AP";
} elseif ($kode_jurusan == 2) {
  $Jurusan = "AK";
} elseif ($kode_jurusan == 3) {
  $Jurusan = "BB";
} elseif ($kode_jurusan == 4) {
  $Jurusan = "TKR";
} elseif ($kode_jurusan == 5) {
  $Jurusan = "TSM";
} else {
  $Jurusan = "TKJ";
}
$sql = mysql_query('SELECT * FROM datadiri ORDER by Urut DESC LIMIT 1');
$cek = mysql_num_rows($sql);

if ($cek > 0) {
  while ($resul = mysql_fetch_array($sql)) {
    $i = $resul['Urut']+1;
  }
} else {
  $i = 1;
}

$jurusan2      = $_POST['jurusan2'];
$urut          = $i;
$NoPDF         = $kode_jurusan.$jurusan2."-".sprintf("%04s", $urut);
$Nama          = addslashes(ucfirst($_POST['NamaLengkap']));
$NamaPanggilan = addslashes(ucfirst($_POST['NamaPanggilan']));
$NISN          = $_POST['NISN'];
    $tpt       = ucfirst($_POST['TempatLahir']);
    $ttl       = $_POST['TanggalLahir'];
    $thn_lahir = date_format(date_create($ttl), 'Y');
    $thn_skrg  = date('Y');
$TmptTanggalLahir  = $tpt.",".$ttl;


// menghindari flood
$input->str_query("SELECT * FROM datadiri WHERE NoPDF = '$urut'");
$cek = $input->hitung();
  if ($cek > 0) {
    header("location:form.php");}


$USIA              = $thn_skrg - $thn_lahir;
$JenisKelamin  = $_POST['JenisKelamin'];
$AsalSekolah   = $_POST['SMPAsal'];
$NoTelp        = $_POST['NoHP'];
$Alamat        = 'Alamat';
$DesaKelurahan = addslashes(ucfirst($_POST['Desa']));
$Kecamatan     = ucfirst($_POST['Kecamatan']);
$Kabupaten     = ucfirst($_POST['Kabupaten']);
$status        = $_POST['status'];

$input->str_query("INSERT INTO datadiri (NoPDF,Urut,Nama,NamaPanggilan,NISN,TmptTanggalLahir,USIA,JenisKelamin,AsalSekolah,Jurusan,NoTelp,Alamat,DesaKelurahan,Kecamatan,Kabupaten,status) VALUES('$NoPDF','$urut','$Nama','$NamaPanggilan','$NISN','$TmptTanggalLahir','$USIA','$JenisKelamin','$AsalSekolah','$Jurusan','$NoTelp','$Alamat','$DesaKelurahan','$Kecamatan','$Kabupaten','$status')");

$NamaAyah      = addslashes(ucfirst($_POST['NamaAyah']));
$TamatanAyah   = ucfirst($_POST['PendidikanAyah']);
$PekerjaanAyah = ucfirst($_POST['PekerjaanAyah']);
$NamaIbu       = addslashes(ucfirst($_POST['NamaIbu']));
$TamatanIbu    = ucfirst($_POST['PendidikanIbu']);
$PekerjaanIbu  = ucfirst($_POST['PekerjaanIbu']);
$NamaWali      = addslashes(ucfirst($_POST['NamaWali']));
$TamatanWali   = ucfirst($_POST['PendidikanWali']);
$PekerjaanWali = ucfirst($_POST['PekerjaanWali']);
$AgamaAyah     = ucfirst($_POST['AgamaAyah']);
$AgamaIbu      = ucfirst($_POST['AgamaIbu']);
$AgamaWali     = ucfirst($_POST['AgamaWali']);
$AlamatAyah    = ucfirst($_POST['AlamatAyah']);
$AlamatIbu     = ucfirst($_POST['AlamatIbu']);
$AlamatWali    = ucfirst($_POST['AlamatWali']);
$NoHPAyah      = ucfirst($_POST['NoHPAyah']);
$NoHPIbu       = ucfirst($_POST['NoHPIbu']);
$NoHPWali      = ucfirst($_POST['NoHPWali']);

$input->str_query("INSERT INTO dataortu (NoPDF,NamaAyah,TamatanAyah,PekerjaanAyah,NamaIbu,TamatanIbu,PekerjaanIbu,NamaWali,TamatanWali,PekerjaanWali,AgamaAyah,AgamaIbu,AgamaWali,AlamatAyah,AlamatIbu,AlamatWali,NoHPAyah,NoHPIbu,NoHPWali) VALUES('$NoPDF','$NamaAyah','$TamatanAyah','$PekerjaanAyah','$NamaIbu','$TamatanIbu','$PekerjaanIbu','$NamaWali','$TamatanWali','$PekerjaanWali','$AgamaAyah','$AgamaIbu','$AgamaWali','$AlamatAyah','$AlamatIbu','$AlamatWali','$NoHPAyah','$NoHPIbu','$NoHPWali')");

$TglLulus  = $_POST['TanggalLulus'];
$NoIjaza   = 'Belum';
$NilaiIndo = $_POST['NilaiIndonesia'];
$NilaiMTK  = $_POST['NilaiMatematika'];
$NilaiEngl = $_POST['NilaiInggris'];
$NilaiIPA  = $_POST['NilaiIPA'];
$NilaiUNIndo = $_POST['NilaiUNIndonesia'];
$NilaiUNMTK  = $_POST['NilaiUNMatematika'];
$NilaiUNEngl = $_POST['NilaiUNInggris'];
$NilaiUNIPA  = $_POST['NilaiUNIPA'];

$input->str_query("INSERT INTO datanilai (NoPDF,TglLulus,NoIjaza,NilaiIndo,NilaiMTK,NilaiEngl,NilaiIPA,NilaiUNIndo,NilaiUNMTK,NilaiUNEngl,NilaiUNIPA) VALUES ('$NoPDF','$TglLulus','$NoIjaza','$NilaiIndo','$NilaiMTK','$NilaiEngl','$NilaiIPA','$NilaiUNIndo','$NilaiUNMTK','$NilaiUNEngl','$NilaiUNIPA')");
$input->str_query("INSERT INTO cetak (NoPDF,StatusCetak) VALUES ('$NoPDF',1)");

$tgldftar = date('d M Y');

$input->str_query("SELECT * FROM infoppdb WHERE id = 0");
$cek = $input->fetch_object();
  $TglTes   = $cek->tanggal;
  $WaktuTes = $cek->waktu;
  $input->str_query("INSERT INTO datates (NoPdf,TglDaftar,TglTes,WaktuTes) VALUES ('$NoPDF','$tgldftar','$TglTes','$WaktuTes')");

header("location:redirect.php");

}

?>
