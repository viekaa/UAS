<?php
if(isset($_POST['proses'])){
 
 $no = $_POST['no'];
 $nama = $_POST['nama'];
 $up = $_POST['pendidikan'];
 $tgl_gaji = $_POST['tgl_gaji'];
 $jabatan = $_POST['jabatan'];
 $kerja = $_POST['lama_kerja'];
 $status_kerja = $_POST['status'];
 $bpjs = $_POST['bpjs'];
 $pinjaman = $_POST['pinjaman'];
 $cicilan = $_POST['cicilan'];
 $infaq = $_POST['infaq'];

//  If jabatan
if($jabatan=="Kepala Sekolah") {
    $gaji = 100000000;
}elseif($jabatan=="Wakasek") {
    $gaji =7000000;
}elseif($jabatan=="Guru") {
    $gaji =5000000;
}elseif ($jabatan=="Karyawan") {
    $gaji =2500000;
}else {
    echo "Anda tidak bekerja disini";
}

// if Status Kerja
if ($status_kerja=="Tetap") {
    $bonus= 1000000;
}else {
    $bonus=0;
}

// OOP
class Penggajihan {
    
    // Properti
    public $gajibersih;

    // Method
    public function hitungGajiBersih($gaji, $bonus, $bpjs, $pinjaman, $cicilan, $infaq) {
        $this->gajibersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);
        return $this->gajibersih; 
    }
}

// Membuat Objek
$penggajihan = new Penggajihan();
$gajiku = $penggajihan->hitungGajiBersih($gaji, $bonus, $bpjs, $pinjaman, $cicilan, $infaq);

// echo "no : $no <br>";
// echo "nama : $nama<br>";
// echo "up : $up <br>";
// echo "tgl : $tgl_gaji<br>";
// echo "jabatan : $jabatan <br>";
// echo "kerja : $kerja <br>";
// echo "status : $status_kerja <br>";
// echo "Bonus : $bonus <br>";
// echo "gaji : $gaji <br>";
// echo "bpjs : $bpjs <br>";
// echo "pinjaman : $pinjaman <br>";
// echo "ciclan : $cicilan <br>";
// echo "infaq : $infaq <br>";
// echo "Gaji bersih : $gajiku";
}
?>
<!-- AKHIR -->

<!-- OUTPUT -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>struk penggajihan</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <center>
    <img src="logo1.png" width="15%" height="10%">
    <div class="card border-primary mb-3" style="max-width: 35rem;">
  <div class="card-header"><h4>STRUK GAJI</h4></div>
  <div class="card-body text-primary">
    <br>
    <h5>Detail Struk :</h5>
    <p>------------------------------------</p>
    <table cellspasing="10%">
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo " $no <br>"; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama <br>"; ?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo " $up <br>"; ?></td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><?php echo "$tgl_gaji <br>"; ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo " $jabatan <br>"; ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo "$gaji <br>"; ?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo " $kerja <br>"; ?></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo "$status_kerja <br>"; ?></td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td><?php echo " $bonus <br>"; ?></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>:</td>
            <td><?php echo "$bpjs <br>"; ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo " $pinjaman <br>"; ?></td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:</td>
            <td><?php echo "$cicilan <br>"; ?></td>
        </tr>
        <tr>
            <td>Infaq</td>
            <td>:</td>
            <td><?php echo " $infaq <br>"; ?></td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?php echo "$gajiku <br>"; ?></td>
        </tr>
        <br>    
    </table>
  </div>
  <div class="card-body text-primary">
  <p>--------------------------------------</p>
</div>
</div>
    </center>
  </body>
</html>