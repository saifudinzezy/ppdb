<?php
include 'fpdf.php';
include '../../konek.php';

$id = $_GET['nopen'];

$pdf = new FPDF('p','mm',array(215.9,333));

$sql = mysql_query("SELECT * FROM datadiri WHERE NoPDF = '$id'");
$data = mysql_fetch_array($sql);

$sql1 = mysql_query("SELECT * FROM dataortu WHERE NoPDF = '$id'");
$data1 = mysql_fetch_array($sql1);

$sql3 = mysql_query("SELECT * FROM datates WHERE NoPDF = '$id'");
$data3 = mysql_fetch_array($sql3);

$sql4 = mysql_query("SELECT * FROM infoppdb");
$data4 = mysql_fetch_array($sql4);

$sql2 = mysql_query("UPDATE cetak SET StatusCetak = 0 WHERE NoPDF = '$id'");

$pdf->AddPage();
$pdf->SetFont('helvetica','',11);

$nu  = '../../img/logonu.jpg';
$tuv = '../../img/logotuv.jpg';
$fto = '../../img/foto.PNG';


$pdf->Image($nu,15,10,20);
$pdf->Image($tuv,170,10,30);

$pdf->Image($fto,50,180,18);
$pdf->Image($fto,82,180,18);
$pdf->Image($fto,115,180,18);

$pdf->Image($fto,75,290,18);


$pdf->Cell(195,5,'LEMBAGA PENDIDIKAN MA`ARIF NU KAB. PEKALONGAN',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(195,5,'SMK MA`ARIF NU TIRTO PEKALONGAN',0,1,'C');
$pdf->Cell(195,5,'TERAKREDITASI',0,1,'C');
$pdf->Cell(195,2,'',"B",1,'C');
$pdf->Cell(195,2,'',0,1,'C');

$w_cell_1 = 45;
$w_cell_2 = 50;
$height_cell = 5;
$start_awal=$pdf->GetX();
$get_xxx = $pdf->GetX();
$get_yyy = $pdf->GetY();

// $pdf->MultiCell($w_cell_2,$height_cell,'Kolompertama',1);

$pdf->SetFont('times','U',14);
$pdf->Cell(195,7,'FORMULIR PENDAFTARAN',0,1,'C');
$pdf->SetFont('times','B',13);
$pdf->Cell(195,4,'No. Pendf : '.$data['NoPDF'],0,1,'C');

$pdf->Cell(195,5,'',0,1,'C');   //ENTER

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,8,'Data Siswa',0,1,'L');

$pdf->SetFont('Arial','',10);
$pdf->Cell(45,6,'Nama Lengkap',0,0,'L');
$pdf->Cell(80,6,": ".$data['Nama'],0,1,'L');

$pdf->Cell(45,6,'Tempat & Tanggal Lahir',0,0,'L');
$pdf->Cell(50,6,": ".$data['TmptTanggalLahir'],0,1,'L');

$pdf->Cell(45,6,'Jenis Kelamin',0,0,'L');
$pdf->Cell(30,6,": ".$data['JenisKelamin'],0,1,'L');

$pdf->Cell(45,6,'Alamat',0,0,'L');
$pdf->MultiCell(150,6,": ".$data['DesaKelurahan'].", Kec. ".$data['Kecamatan'],0);

$pdf->Cell(47,6,'',0,0,'L');
$pdf->Cell(80,6,$data['Kabupaten'],0,1,'L');

$pdf->Cell(45,6,'No. HP',0,0,'L');
$pdf->MultiCell(80,6,": ".$data['NoTelp'],0);

$pdf->Cell(45,5,'Asal Sekolah',0,0,'L');
$pdf->Cell(80,5,": ".$data['AsalSekolah'],0,0,'L');

$pdf->Cell(10,5,'NISN',0,0,'L');
$pdf->Cell(30,5,": ".$data['NISN'],0,1,'L');

$pdf->Cell(195,1,'',0,1,'C');   //ENTER

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,8,'Data Orang Tua',0,1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,5,'Identitas',1,0,'C');
$pdf->Cell(45,5,'Bapak',1,0,'C');
$pdf->Cell(45,5,'Ibu',1,0,'C');
$pdf->Cell(45,5,'Walimurid',1,1,'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(45,5,'Nama',1,0,'L');
$pdf->Cell(45,5,$data1['NamaAyah'],1,0,'L');
$pdf->Cell(45,5,$data1['NamaIbu'],1,0,'L');
$pdf->Cell(45,5,$data1['NamaWali'],1,1,'L');

$pdf->Cell(45,5,'Pendidikan',1,0,'L');
$pdf->Cell(45,5,$data1['TamatanAyah'],1,0,'L');
$pdf->Cell(45,5,$data1['TamatanIbu'],1,0,'L');
$pdf->Cell(45,5,$data1['TamatanWali'],1,1,'L');

$pdf->Cell(45,5,'Agama',1,0,'L');
$pdf->Cell(45,5,$data1['AgamaAyah'],1,0,'L');
$pdf->Cell(45,5,$data1['AgamaIbu'],1,0,'L');
$pdf->Cell(45,5,$data1['AgamaWali'],1,1,'L');

$pdf->Cell(45,5,'Pekerjaan',1,0,'L');
$pdf->Cell(45,5,$data1['PekerjaanAyah'],1,0,'L');
$pdf->Cell(45,5,$data1['PekerjaanIbu'],1,0,'L');
$pdf->Cell(45,5,$data1['PekerjaanWali'],1,1,'L');

$pdf->Cell(45,5,'No. Telp./HP',1,0,'L');
$pdf->Cell(45,5,$data1['NoHPAyah'],1,0,'L');
$pdf->Cell(45,5,$data1['NoHPIbu'],1,0,'L');
$pdf->Cell(45,5,$data1['NoHPWali'],1,1,'L');

$x_axis=$pdf->getx();
$c_width=45;// cell width
$c_height=10;// cell height

$pdf->vcell($c_width,$c_height,10,'Alamat',1);
$pdf->vcell($c_width,$c_height,55,$data1['AlamatAyah'],1);
$pdf->vcell($c_width,$c_height,100,$data1['AlamatIbu'],1);
$pdf->vcell($c_width,$c_height,145,$data1['AlamatWali'],1);
$pdf->Cell(195,8,'',0,1,'C');   //ENTER


$pdf->Cell(195,5,'',0,1,'C');   //ENTER
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,8,'Jurusan dipilih :',0,1,'L');

$pdf->SetFont('Arial','',10);
$j1 = substr($data['NoPDF'],0,1);
$j2 = substr($data['NoPDF'],1,1);

if ($j1 == 1) {
  $pdf->Cell(45,6,'1. Administrasi Pekantoran',0,1,'L');
} elseif ($j1 == 2) {
  $pdf->Cell(45,6,'1. Akuntansi ',0,1,'L');
} elseif ($j1 == 3) {
  $pdf->Cell(45,6,'1. Busana Butik ',0,1,'L');
} elseif ($j1 == 4) {
  $pdf->Cell(45,6,'1. Teknik Kendaraan Ringan ',0,1,'L');
} elseif ($j1 == 5) {
  $pdf->Cell(45,6,'1. Teknik Sepeda Motor ',0,1,'L');
} else {
  $pdf->Cell(45,6,'1. Teknik Komputer Jaringan ',0,1,'L');
}

if ($j2 == 1) {
  $pdf->Cell(45,6,'2. Administrasi Pekantoran',0,1,'L');
} elseif ($j2 == 2) {
  $pdf->Cell(45,6,'2. Akuntansi ',0,1,'L');
} elseif ($j2 == 3) {
  $pdf->Cell(45,6,'2. Busana Butik ',0,1,'L');
} elseif ($j2 == 4) {
  $pdf->Cell(45,6,'2. Teknik Kendaraan Ringan ',0,1,'L');
} elseif ($j2 == 5) {
  $pdf->Cell(45,6,'2. Teknik Sepeda Motor ',0,1,'L');
} else {
  $pdf->Cell(45,6,'2. Teknik Komputer Jaringan ',0,1,'L');
}

$tgl = date('d M Y');

$pdf->Cell(195,5,'',0,1,'C');   //ENTER
$pdf->SetFont('Arial','',10);
$pdf->Cell(135,8,'',0,0,'L');
$pdf->Cell(45,5,'Tirto, '.$tgl,0,1,'L');
$pdf->Cell(135,5,'',0,0,'L');
$pdf->Cell(45,5,'Pendaftar',0,1,'L');
$pdf->Cell(195,5,'',0,1,'C');   //ENTER
$pdf->Cell(195,5,'',0,1,'C');   //ENTER

$pdf->SetFont('Arial','',10);
$pdf->Cell(135,8,'',0,0,'L');
$pdf->Cell(45,8,"( ".$data['Nama']." )",0,1,'L');

$pdf->Cell(195,5,'','B',1,'C');
$pdf->Cell(195,5,'',0,1,'C');   //ENTER

// kartu test ppdb
$pdf->Image($nu,15,210,20);
$pdf->Image($tuv,170,210,30);

$pdf->SetFont('helvetica','',10);
$pdf->Cell(195,5,'LEMBAGA PENDIDIKAN MA`ARIF NU KAB. PEKALONGAN',0,1,'C');
$pdf->SetFont('times','B',11);
$pdf->Cell(195,5,'SMK MA`ARIF NU TIRTO PEKALONGAN',0,1,'C');
$pdf->Cell(195,5,'TERAKREDITASI',0,1,'C');
$pdf->Cell(195,2,'',"B",1,'C');
$pdf->Cell(195,3,'',0,1,'C');

$pdf->SetFont('times','U',11);
$pdf->Cell(195,5,'KARTU TES',0,1,'C');
$pdf->SetFont('times','',11);
$pdf->Cell(195,5,"No : ".$data['NoPDF'],0,1,'C');

$pdf->Cell(195,5,'',0,1,'C');   //ENTER

$pdf->SetFont('Arial','',10);
$pdf->Cell(40,5,'Telah terdaftar di SMK Ma`arif NU Tirto:',0,1,'L');
$pdf->Cell(40,5,'Nama',0,0,'L');
$pdf->Cell(80,5,": ".$data['Nama'],0,1,'L');
$pdf->Cell(40,5,'Tempat Tgl. Lahir',0,0,'L');
$pdf->Cell(80,5,": ".$data['TmptTanggalLahir'],0,1,'L');
$pdf->Cell(40,5,'Alamat',0,0,'L');
$pdf->Cell(145,5,": ".$data['DesaKelurahan'].", Kec. ".$data['Kecamatan'],0,1,'L');
$pdf->SetX(52);
$pdf->Cell(80,5,$data['Kabupaten'],0,1,'L');
$pdf->SetX(10);
$pdf->Cell(40,5,'Jurusan',0,0,'L');
$pdf->Cell(80,5,": ".$data['Jurusan'],0,1,'L');
$pdf->Cell(40,5,'Waktu Tes',0,0,'L');
$pdf->Cell(80,5,": ".$data3['TglTes']." / ".$data3['WaktuTes'],0,1,'L');

$pdf->Cell(195,3,'',0,1,'C');   //ENTER


$pdf->SetX(99);
$pdf->Cell(70,4,'Pekalongan,'.$data3['TglDaftar'],0,1,'L');

$pdf->SetX(99);
$pdf->Cell(70,4,'Petugas',0,0,'L');
$pdf->Cell(40,4,'Pendaftar',0,1,'L');

$pdf->Cell(195,4,'',0,1,'C');   //ENTER
$pdf->Cell(195,10,'',0,1,'C');   //ENTER

$pdf->SetX(99);
$pdf->Cell(70,4,$data4['petugas'],0,0,'L');
$pdf->Cell(40,4,$data['Nama'],0,1,'L');

$pdf->SetY(299);
$pdf->vcell($c_width,$c_height,10,'Kartu harap dibawa pada  saat tes',1);

$pdf->Ln();
$pdf->Output();


 ?>
