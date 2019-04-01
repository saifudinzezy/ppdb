<?php

$NoPDF = $_GET['lamp'];

$lamp = new database();
$lamp->str_query("SELECT * FROM datalampiran WHERE NoPDF = '$NoPDF'");
$cek  = $lamp->hitung();

if ($cek == 0) { ?>
<form action="./aksi/simpan.lampiran.php" method="post">
  Nomor <br>
  <input type="text" name="NoPDF" value="<?php echo $NoPDF; ?>"><br>
  Lampiran STTB <br>
  <select class="" name="STTB">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran Raport <br>
  <select class="" name="rapot">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran Akta Lahir <br>
  <select class="" name="aktaLahir">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran Kartu Keluarga <br>
  <select class="" name="kk">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran IJAZAH <br>
  <select class="" name="IJAZAH">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran SKHUN <br>
  <select class="" name="SKHUN">
    <option value="Asli">Asli</option>
    <option value="Fotokopi">Fotokopi</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>
  Lampiran PAS FOTO 3X4<br>
  <select class="" name="FOTO">
    <option value="Asli">Bawa</option>
    <option value="tdk" selected >Tidak Bawa</option>
  </select> <br>

  <input type="submit" name="kirim" value="simpan">
</form>

  <?php
} else {
$rslt = $lamp->fetch_object(); ?>

<form action="./aksi/simpan.lampiran.php" method="post">
  Nomor <br>
  <input type="text" name="" value="<?php echo $NoPDF; ?>" ><br>
  <input type="hidden" name="NoPDF" value="<?php echo $NoPDF; ?>" ><br>
  Lampiran STTB <br>
  <input type="text" name="STTB" value="<?php echo $rslt->STTB; ?>" ><br>
  Lampiran Rapot <br>
  <input type="text" name="rapot" value="<?php echo $rslt->rapot; ?>" ><br>
  Lampiran Akta Lahir <br>
  <input type="text" name="aktaLahir" value="<?php echo $rslt->aktaLahir; ?>" ><br>
  Lampiran Kartu Keluarga <br>
  <input type="text" name="kk" value="<?php echo $rslt->kk; ?>" ><br>
  Lampiran IJAZAH <br>
  <input type="text" name="IJAZAH" value="<?php echo $rslt->IJAZAH; ?>" ><br>
  Lampiran SKHUN <br>
  <input type="text" name="SKHUN" value="<?php echo $rslt->SKHUN; ?>" ><br>
  Lampiran PAS FOTO 3X4<br>
  <input type="text" name="FOTO" value="<?php echo $rslt->FOTO; ?>" ><br>
  <input type="submit" name="kirim" value="ubah">
</form>

<?php
}

 ?>
