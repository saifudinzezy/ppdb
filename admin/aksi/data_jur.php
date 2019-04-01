<?php
include '../../oop_konek.php';
$sql = new database();
$jur = $_GET['jur'];

?>

<table border="1">
  <tr>
    <th>No</th>
    <th>Tgl Daftar</th>
    <th>No Pendf</th>
    <th>Nama</th>

    <th>Desa</th>
    <th>Kecamatan</th>
    <th>Kabupaten</th>

    <th>Jurusan</th>
    <th>Tempat & Tanggal Lahir</th>
    <th>Usia</th>
    <th>JK</th>

    <th>Asal Sekolah</th>

    <th>Nama Ayah</th>
    <th>Tamatan</th>
    <th>Pekerjaan</th>

    <th>Nama Ibu</th>
    <th>Tamatan</th>
    <th>Pekerjaan</th>

    <th>Tanggal Lulus</th>

    <th>NISN</th>

    <th>Nilai UN BI</th>
    <th>Nilai UN BG</th>
    <th>Nilai UN M</th>
    <th>Nilai UN I</th>
    <th>Tanggal Tes</th>
    <th>Status</th>

  </tr>
     <?php
       $sql->str_query("SELECT * FROM datadiri INNER JOIN dataortu ON datadiri.NoPDF = dataortu.NoPDF INNER JOIN datates ON datadiri.NoPDF = datates.NoPDF INNER JOIN datanilai ON datadiri.NoPDF = datanilai.NoPDF WHERE datadiri.Jurusan = '$jur'");
       while ($data1 = $sql->fetch_object()) {
         echo "<tr>";
         echo "<td>".$data1->Urut."</td>";
         echo "<td>".$data1->TglDaftar."</td>";
         echo "<td>".$data1->NoPDF."</td>";
         echo "<td>".$data1->Nama."</td>";

         echo "<td>".$data1->DesaKelurahan."</td>";
         echo "<td>".$data1->Kecamatan."</td>";
         echo "<td>".$data1->Kabupaten."</td>";

         echo "<td>".$data1->Jurusan."</td>";
         echo "<td>".$data1->TmptTanggalLahir."</td>";
         echo "<td>".$data1->USIA."</td>";
         echo "<td>".$data1->JenisKelamin."</td>";

         echo "<td>".$data1->AsalSekolah."</td>";

         echo "<td>".$data1->NamaAyah."</td>";
         echo "<td>".$data1->TamatanAyah."</td>";
         echo "<td>".$data1->PekerjaanAyah."</td>";

         echo "<td>".$data1->NamaIbu."</td>";
         echo "<td>".$data1->TamatanIbu."</td>";
         echo "<td>".$data1->PekerjaanIbu."</td>";

         echo "<td>".$data1->TglLulus."</td>";

         echo "<td>".$data1->NISN."</td>";

         echo "<td>".$data1->NilaiUNIndo."</td>";
         echo "<td>".$data1->NilaiUNEngl."</td>";
         echo "<td>".$data1->NilaiUNMTK."</td>";
         echo "<td>".$data1->NilaiUNIPA."</td>";
         echo "<td>".$data1->TglTes."</td>";
         echo "<td>".$data1->status."</td>";



         echo "</tr>";
       }

      ?>
</table>
