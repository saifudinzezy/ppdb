<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <script src="./js/jquery-1.10.2.js"></script>
    <script src="./js/jquery-ui.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js"></script>
  </head>

  <?php include "konek.php"; ?>
  <body>


    <div class="col-md-8 col-md-offset-2">
      <div class="row">
        <div class="text-center">
          <h1>PENDAFTARAN ONLINE</h1>
          <h3>SMK MA'ARIF NU TIRTO</h3>
        </div>
      </div>


<form class="" action="input.php" method="post">


      <div class="row">
        <div class="col-md-4 col-md-offset-8">
          <div class="panel">
          </div>
        </div>
      </div>


      <div class="row ">
        <div class="panel panel-info">
          <div class="panel-heading"><h4>Data Diri</h4></div>
          <div class="panel-body">
            <table>
              <tr>
                <td>1.</td>
                <td colspan="6"><b>Data Siswa</b></td>
              </tr>
              <tr>
                <td></td>
                <td><b>a.</b></td>
                <td colspan="5">Nama Siswa</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><li>Nama Lengkap</li></td>
                <td><input name="NamaLengkap" type="text" class="jarak-enter form-control" value=""></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><li>Nama Panggilan</li></td>
                <td><input name="NamaPanggilan" type="text" class="jarak-enter form-control" value=""></td>
                <td></td>
                <td></td>
              </tr>
              <td></td> 
              <td></td>
              <td><li>Jenis Kelamin</li></td>
              <td>
                <select class="form-control jarak-enter" name="JenisKelamin" >
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </td>
              <td></td>
              <td></td>
            </tr>
              <tr>
                <td></td>
                <td><b>b.</b></td>
                <td>Tempat Lahir</td>
                <td><input name="TempatLahir" type="text" class="jarak-enter form-control" value=""></td>
                <td>/ Tgl. Lahir : </td>
                <td><input id="datepicker" placeholder="contoh 30/12/2001" name="TanggalLahir" type="text" class="jarak-enter form-control" value=""></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td><b>c.</b></td>
                <td>Alamat lengkap</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><li>Desa / RT & RW </li></td>
                <td><input name="Desa" type="text" class="jarak-enter form-control" value=""></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><li>Kecamatan</li></td>
                <td><input name="Kecamatan" type="text" class="jarak-enter form-control" value=""></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><li>Kota / Kabupaten</li></td>
                <td><input name="Kabupaten" type="text" class="jarak-enter form-control" value=""></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td><b>d.</b></td>
                <td>No. HP </td>
                <td><input type="text" class="jarak-enter form-control" value="" name="NoHP"></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td>2.</td>
                <td colspan="6"><b>Sekolah Asal</b></td>
              </tr>
              <tr>
                <td></td>
                <td><b>a.</b></td>
                <td>SMP/MTs Asal </td>
                <td>
                  <select class="jarak-enter form-control" name="SMPAsal">
                    <option value="" checked > Pilih</option>
                    <?php
                    $sql_smp = mysql_query("SELECT * FROM dataasalsekolah ORDER BY NamaSmp ASC");
                    while ($excut = mysql_fetch_array($sql_smp)) {
                      echo "<option value='".$excut['NamaSmp']."'>".$excut['NamaSmp']."</option>";
                    }

                     ?>
                     <option id="lain">Lainnya</option>
                  </select>
                </td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td><b>b.</b></td>
                <td>No. NISN SMP/MTs </td>
                <td><input type="text" class="jarak-enter form-control" value="" name="NISN"></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td></td>
                <td><b>c.</b></td>
                <td>Tanggal Lulus</td>
                <td><input id="datepicker1" type="text" class="jarak-enter form-control" value="" name="TanggalLulus" placeholder="Contoh 16/06/2017"></td>
                <td colspan="3"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">Data Nilai Semester 5</div>
          <div class="panel-body">
            <div class="col-md-6">
              <table>
                <tr>
                  <td>Nilai Matematika</td>
                  <td><input type="text" name="NilaiMatematika" class="jarak-enter" value=""></td>
                </tr>
                <tr>
                  <td>Nilai Bhs. Indonesia</td>
                  <td><input type="text" name="NilaiIndonesia" class="jarak-enter" value=""></td>
                </tr>
              </table>
            </div>
            <div class="col-md-6">
              <table>
                <tr>
                  <td>Nilai Bhs. Inggris</td>
                  <td><input type="text" name="NilaiInggris" class="jarak-enter" value=""></td>
                </tr>
                <tr>
                  <td>Nilai IPA</td>
                  <td><input type="text" name="NilaiIPA" class="jarak-enter" value=""></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>


            <div class="row">
              <div class="panel panel-default">
                <div class="panel-heading">Data Nilai Ujian Nasional</div>
                <div class="panel-body">
                  <div class="col-md-6">
                    <table>
                      <tr>
                        <td>Nilai Matematika</td>
                        <td><input type="text" name="NilaiUNMatematika" class="jarak-enter" value=""></td>
                      </tr>
                      <tr>
                        <td>Nilai Bhs. Indonesia</td>
                        <td><input type="text" name="NilaiUNIndonesia" class="jarak-enter" value=""></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-6">
                    <table>
                      <tr>
                        <td>Nilai Bhs. Inggris</td>
                        <td><input type="text" name="NilaiUNInggris" class="jarak-enter" value=""></td>
                      </tr>
                      <tr>
                        <td>Nilai IPA</td>
                        <td><input type="text" name="NilaiUNIPA" class="jarak-enter" value=""></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>


      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading"><h4>Data Orang Tua </h4></div>
          <div class="panel-body">
            <table class="table table-striped">
              <tr>
                <th>Identitas</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th>Wali</th>
              </tr>
              <tr>
                <th>Nama</th>
                <td><input type="text" class="form-control"  value="" name="NamaAyah"></td>
                <td><input type="text" class="form-control"  value="" name="NamaIbu"></td>
                <td><input type="text" class="form-control"  value="" name="NamaWali"></td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <td>
                <select class="form-control" name="PendidikanAyah">
                  <option>Pilih</option>
                  <option>Tidak Tamat SD</option>
                  <option>Tamat SD / Sederajat</option>
                  <option>Tamat SMP / Sederajat</option>
                  <option>Tamat SMK / Sederajat</option>
                  <option>Sarjana</option>
                </select>
                </td>
                <td>
                <select class="form-control" name="PendidikanIbu">
                  <option>Pilih</option>
                  <option>Tidak Tamat SD</option>
                  <option>Tamat SD / Sederajat</option>
                  <option>Tamat SMP / Sederajat</option>
                  <option>Tamat SMK / Sederajat</option>
                  <option>Sarjana</option>
                </select>
                </td>
                <td>
                <select class="form-control" name="PendidikanWali">
                  <option value="" checked >pilih</option>
                  <option>Tidak Tamat SD</option>
                  <option>Tamat SD / Sederajat</option>
                  <option>Tamat SMP / Sederajat</option>
                  <option>Tamat SMK / Sederajat</option>
                  <option>Sarjana</option>
                </select>
                </td>
              </tr>
              <tr>
                <th>Agama</th>
                <td>
                    <select class="form-control" name="AgamaAyah">
                      <option value="Islam" checked>Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Kristen">Kristen</option>
                      <option value="udha">udha</option>
                    </select>
                </td>
                <td>
                  <select class="form-control" name="AgamaIbu">
                    <option value="Islam" checked>Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kristen">Kristen</option>
                    <option value="udha">udha</option>
                  </select>
                </td>
                <td>
                  <select class="form-control" name="AgamaWali">
                    <option value="" checked >pilih</option>
                    <option value="Islam" >Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kristen">Kristen</option>
                    <option value="udha">udha</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <td><input type="text" class="form-control"  value="" name="PekerjaanAyah"></td>
                <td><input type="text" class="form-control"  value="" name="PekerjaanIbu"></td>
                <td><input type="text" class="form-control"  value="" name="PekerjaanWali"></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><textarea type="text" class="form-control" name="AlamatAyah" ></textarea></td>
                <td><textarea type="text" class="form-control" name="AlamatIbu" ></textarea></td>
                <td><textarea type="text" class="form-control" name="AlamatWali" ></textarea></td>
              </tr>
              <tr>
                <th>No. HP</th>
                <td><input type="text" class="form-control"  value="" name="NoHPAyah"></td>
                <td><input type="text" class="form-control"  value="" name="NoHPIbu"></td>
                <td><input type="text" class="form-control"  value="" name="NoHPWali"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Program Keahlian yang diminati</h4>
          </div>
          <div class="panel-body">
            <div class="row">
              <!-- bagian kiri -->
              <div class="col-md-6">
                <span>Pilihan Utama (Wajib Di minati)</span>
                <div class="content">
                  <label ><input type="radio" name="jurusan1" value="1" >
                    Administrasi Perkantoran
                  </label><br>
                  <label ><input type="radio" name="jurusan1" value="2" >
                    Akuntansi
                  </label><br>
                  <label ><input type="radio" name="jurusan1" value="3" >
                    Busana Butik
                  </label><br>
                  <label ><input type="radio" name="jurusan1" value="4" >
                    Teknik Kendaraan Ringan
                  </label><br>
                  <label ><input type="radio" name="jurusan1" value="5" >
                    Teknik Sepeda Motor
                  </label><br>
                  <label ><input type="radio" name="jurusan1" value="6" >
                    Teknik Komputer Jaringan
                  </label><br>
                </div>
              </div>

              <!-- bagian kanan -->
              <div class="col-md-4">
                <span>Pilihan Kedua (Alternativ) tdk boleh sama dengan pilihan pertama</span>
                <div class="content">
                  <label ><input type="radio" name="jurusan2" value="1" >
                    Administrasi Perkantoran
                  </label>  <br>
                  <label ><input type="radio" name="jurusan2" value="2" >
                    Akuntansi
                  </label><br>
                  <label ><input type="radio" name="jurusan2" value="3" >
                    Busana Butik
                  </label><br>
                  <label ><input type="radio" name="jurusan2" value="4" >
                    Teknik Kendaraan Ringan
                  </label><br>
                  <label ><input type="radio" name="jurusan2" value="5" >
                    Teknik Sepeda Motor
                  </label><br>
                  <label ><input type="radio" name="jurusan2" value="6">
                    Teknik Komputer Jaringan
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


            <div id="myModal" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>INFORMASI</strong></h4>
                  </div>
                  <div class="modal-body text-center">
                    <p><b>Nomor Pendaftaran :</b></p><br>
                    <p name="info-nomor" style="font-size:50px;"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="send" class="btn btn-primary"> DAFTAR </button>
                  </div>
                </div>
              </div>
            </div>

<?php

$sql = mysql_query('SELECT * FROM datadiri ORDER by Urut DESC LIMIT 1');
$cek = mysql_num_rows($sql);

if ($cek > 0) {
  while ($resul = mysql_fetch_array($sql)) {
    $i = $resul['Urut']+1;
  }
} else {
  $i = 1;
}


echo "<input type='hidden' name='urut' value='".$i."'>";

?>
<input type='hidden' name='status' value='TERDAFTAR'>
<button type="submit" name="send" class="btn btn-success col-md-12" disabled=""> DAFTAR </button><br>


</form>

<!-- fungsi nomor pendaftaran otomatis -->

<script type="text/javascript">
$(document).ready(function(){
    $('input[name=jurusan2]').change(function(){
      if ($(this).is(':checked') && $('input[name=jurusan1]').is(':checked') ) {
        var j = $('input[name=jurusan1]:checked').val();
        var k = $(this).val();
                if (k == j) {
                      alert("Pilihan pertama tidak boleh sama dengan pilihan yang kedua");
                      $(this).attr("checked",false);

                } else {
                      var str = "<?php echo $i; ?>";
                      var id;
                      var pj  = str.length;
                      console.log(pj);
                          if (pj == 1){
                             id = "000"+str;
                          } else if (pj == 2) {
                             id = "00"+str;
                          } else if (pj == 3) {
                             id = "0"+str;
                          } else {
                             id = str;


                          }
                      $('p[name=info-nomor]').html(j+k+"-"+id);
                      $('input[name=Urut]').val(str);
                      $("#myModal").modal('show');
                }
      }
    })
  });
</script>


<!-- fungsi tanggal lahir -->

<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'd MM yy' });
    $( "#datepicker1" ).datepicker({dateFormat: 'd MM yy'});

  });
</script>



<footer class="text-center">Aplikasi PPDB <strong>SMK Ma'arif NU Tirto</strong></footer>



    </div>
<div class="row">

</div>
  </body>
</html>
