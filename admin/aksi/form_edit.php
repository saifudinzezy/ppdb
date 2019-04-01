  <?php

  $id   = $_GET['id'];

  $edit10 = new database();
  $edit10->str_query("SELECT * FROM datadiri WHERE NoPDF = '$id'");
  while ($look = $edit10->fetch_object()) {
    echo "<h2>No Pendf.".$look->NoPDF."</h2><hr>";
  ?>
  <form class="" action="./aksi/edit.data.pendaftar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $look->NoPDF; ?>">
    <table class="table table-striped" >
      <tr class="btn-success">
        <td colspan="4" class="btn-info"><h4>Data Diri</h4></td>
      </tr>
	  <tr>
        <td class="col-md-2">No. Pendftaran</td>
        <td><input type="text" name="NoPDF" value="<?php echo $look->NoPDF; ?>"></td>
        <td colspan="2" class="col-md-2" style="color:red;"> Bila tidak ada eror dengan program jangan mengubah nomor pendaftaran</td>
      </tr>
      <tr>
        <td class="col-md-2">Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $look->Nama; ?>"></td>
        <td class="col-md-2">Nama Panggilan</td>
        <td><input type="text" name="NamaPanggilan" value="<?php echo $look->NamaPanggilan; ?>"></td>
      </tr>
      <tr>
        <td>Tempat & Tgl. Lahir</td>
        <td><input type="text" name="TmptTanggalLahir" value="<?php echo $look->TmptTanggalLahir; ?>"></td>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="JenisKelamin" value="<?php echo $look->JenisKelamin; ?>"></td>
      </tr>
	  <tr>
        <td>Usia</td>
        <td><input type="text" name="USIA" value="<?php echo $look->USIA; ?>"></td>
        <td></td>
        <td></td>
      </tr>


      <tr>
        <td>Asal Sekolah</td>
        <td><input type="text" name="AsalSekolah" value="<?php echo $look->AsalSekolah; ?>"></td>
        <td>NISN</td>
        <td><input type="text" name="NISN" value="<?php echo $look->NISN; ?>"></td>
      </tr>
      <tr>
        <td>Desa Kelurahan</td>
        <td><input type="text" name="DesaKelurahan" value="<?php echo $look->DesaKelurahan; ?>"></td>
        <td>Kecamatan</td>
        <td><input type="text" name="Kecamatan" value="<?php echo $look->Kecamatan; ?>"></td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td><input type="text" name="Kabupaten" value="<?php echo $look->Kabupaten; ?>"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="Jurusan" value="<?php echo $look->Jurusan; ?>"></td>
        <td>No HP</td>
        <td><input type="text" name="NoTelp" value="<?php echo $look->NoTelp; ?>"></td>
      </tr>
      <?php }
      $edit10->str_query("SELECT * FROM dataortu WHERE NoPDF = '$id'");
      while ($look = $edit10->fetch_object()) {
      ?>
      <tr>
        <td colspan="4" class="btn-success"><h4>Data Orang Tua</h4></td>
      </tr>
      <tr>
        <td>Nama Ayah</td>
        <td><input type="text" name="NamaAyah" value="<?php echo $look->NamaAyah; ?>"></td>
        <td>Nama Ibu</td>
        <td><input type="text" name="NamaIbu" value="<?php echo $look->NamaIbu; ?>"></td>
      </tr>
      <tr>
        <td>Pekerjaan Ayah</td>
        <td><input type="text" name="PekerjaanAyah" value="<?php echo $look->PekerjaanAyah; ?>"></td>
        <td>Pekerjaan Ibu</td>
        <td><input type="text" name="PekerjaanIbu" value="<?php echo $look->PekerjaanIbu; ?>"></td>
      </tr>
      <tr>
        <td>Pendidikan Ayah</td>
        <td><input type="text" name="TamatanAyah" value="<?php echo $look->TamatanAyah; ?>"></td>
        <td>Pendidikan Ibu</td>
        <td><input type="text" name="TamatanIbu" value="<?php echo $look->TamatanIbu; ?>"></td>
      </tr>
      <tr>
        <td>Agama Ayah</td>
        <td><input type="text" name="AgamaAyah" value="<?php echo $look->AgamaAyah; ?>"></td>
        <td>Agama Ibu</td>
        <td><input type="text" name="AgamaIbu" value="<?php echo $look->AgamaIbu; ?>"></td>
      </tr>
      <tr>
        <td>Alamat Ayah</td>
        <td><input type="text" name="AlamatAyah" value="<?php echo $look->AlamatAyah; ?>"></td>
        <td>Alamat Ibu</td>
        <td><input type="text" name="AlamatIbu" value="<?php echo $look->AlamatIbu; ?>"></td>
      </tr>
      <tr>
        <td>No Telp Ayah</td>
        <td><input type="text" name="NoHPAyah" value="<?php echo $look->NoHPAyah; ?>"></td>
        <td>No Telp Ibu</td>
        <td><input type="text" name="NoHPIbu" value="<?php echo $look->NoHPIbu; ?>"></td>
      </tr>
      <tr>
        <td>Nama Walimurid</td>
        <td><input type="text" name="NamaWali" value="<?php echo $look->NamaWali; ?>"></td>
        <td>Pekerjaan Walimurid</td>
        <td><input type="text" name="PekerjaanWali" value="<?php echo $look->PekerjaanWali; ?>"></td>
      </tr>
      <tr>
        <td>Agama Walimurid</td>
        <td><input type="text" name="AgamaWali" value="<?php echo $look->AgamaWali; ?>"></td>
        <td>Alamat Walimurid</td>
        <td><input type="text" name="AlamatWali" value="<?php echo $look->AlamatWali; ?>"></td>
      </tr>
      <?php }
      $edit10->str_query("SELECT * FROM datanilai WHERE NoPDF = '$id'");
      while ($look = $edit10->fetch_object()) {
      ?>
      <tr>
        <td colspan="4" class="btn-primary"><h4>Data Nilai Semester</h4></td>
      </tr>
      <tr>
        <td>Nilai Bhs. Indo</td>
        <td><input type="text" name="NilaiIndo" value="<?php echo $look->NilaiIndo; ?>"></td>
        <td>Nilai MTK</td>
        <td><input type="text" name="NilaiMTK" value="<?php echo $look->NilaiMTK; ?>"></td>
      </tr>
      <tr>
        <td>Nilai Bhs. Iggris</td>
        <td><input type="text" name="NilaiEngl" value="<?php echo $look->NilaiEngl; ?>"></td>
        <td>Nilai IPA</td>
        <td><input type="text" name="NilaiIPA" value="<?php echo $look->NilaiIPA; ?>"></td>
      </tr>
      <tr>
        <td colspan="4" class="btn-warning"><h4>Data Nilai Ujian Nasional</h4></td>
      </tr>
      <tr class="">
        <td>Nomoer Ijazah</td>
        <td><input type="text" name="NoIjaza" value="<?php echo $look->NoIjaza; ?>"></td>
        <td>Tanggal Lulus</td>
        <td><input type="text" name="TglLulus" value="<?php echo $look->TglLulus; ?>"></td>
      </tr>
      <tr>
        <td>Nilai UN Bhs. Indo</td>
        <td><input type="text" name="NilaiUNIndo" value="<?php echo $look->NilaiUNIndo; ?>"></td>
        <td>Nilai UN MTK</td>
        <td><input type="text" name="NilaiUNMTK" value="<?php echo $look->NilaiUNMTK; ?>"></td>
      </tr>
      <tr>
        <td>Nomoer Ijazah</td>
        <td><input type="text" name="NoIjaza" value="<?php echo $look->NoIjaza; ?>"></td>
        <td>Tanggal Lulus</td>
        <td><input type="text" name="TglLulus" value="<?php echo $look->TglLulus; ?>"></td>
      </tr>
      <tr>
        <td>Nilai UN Bhs. Iggris</td>
        <td><input type="text" name="NilaiUNEngl" value="<?php echo $look->NilaiUNEngl; ?>"></td>
        <td>Nilai UN IPA</td>
        <td><input type="text" name="NilaiUNIPA" value="<?php echo $look->NilaiUNIPA; ?>"></td>
      </tr>
      <tr>
        <td colspan="4" ><input type="submit"  class="col-md-2 btn btn-danger btn-lg" name="" value="UBAH GAN"></td>
      </tr>

      <?php } ?>


    </table>




  </form>
