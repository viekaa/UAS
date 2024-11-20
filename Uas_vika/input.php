<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    
  </head>
  <body>
    <center>
    <img src="logo1.png" width="15%" height="10%">
 <h5>PENGGAJIHAN</h5>
 <h5>GURU/KARYAWAN YAYASAN ASSALAAM</h5>
 <br><br>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <form action="output.php" method="post">
   <table>
   <div class="card border-light mb-3" style="max-width: 50rem;">
  <div class="card-header" align="left">Data Penggajihan</div>
  <div class="card-body">
    
  
  <div class="form-group" align="left">
    <label  align="left">No</label>
    <input type="text" class="form-control" 
    name="no" placeholder="No">
  </div>
  <div class="form-group" align="left">
    <label  align="left">Nama</label>
    <input type="text" class="form-control" 
    name="nama" placeholder="Nama">
  </div>
  <div class="form-group"  align="left">
    <label for="exampleFormControlSelect1">
    Unit Pendidikan</label>
    <select class="form-control" 
    id="exampleFormControlSelect1" name="pendidikan">
      <option>Pilih Unit Pendidikan</option>
      <option>TK</option>
      <option>SD</option>
      <option>SMP</option>
      <option>SMK</option>
    </select>
  </div>
  <div class="form-group" align="left">
    <label  align="left">Tanggal Gaji</label>
    <input type="date" class="form-control" 
    name="tgl_gaji">
    <br>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" align="left">
     <center><h6><i>Gaji</i></h6></center> 
      <label for="inputEmail4">Jabatan</label>
      <select class="form-control" 
    id="exampleFormControlSelect1" name="jabatan">
      <option>Pilih Jabatan</option>
      <option>Kepala Sekolah</option>
      <option>Wakasek</option>
      <option>Guru</option>
      <option>Karyawan</option>
    </select>
    <br>
    <div class="form-group" align="left">
    <label  align="left">Lama Kerja</label>
    <input type="text" class="form-control" 
    name="lama_kerja" placeholder="Lama Kerja">
  </div>
  <br>
  <label for="inputEmail4">Status Kerja</label>
      <select class="form-control" 
    id="exampleFormControlSelect1" name="status">
      <option>Pilih Status Kerja</option>
      <option>Tetap</option>
      <option>Kontrak</option>
    </select>
    </div>
    <div class="form-group col-md-6" align="left">
      <center><h6><i>Potongan</i></h6></center>
      <label for="inputPassword4">BPJS</label>
      <input type="number" class="form-control" 
     name="bpjs">
     <br>
     <div class="form-group" align="left">
    <label  align="left">Pinjaman</label>
    <input type="number" class="form-control" 
    name="pinjaman" placeholder="Pinjaman">
  </div>
  <br>
  <div class="form-group" align="left">
    <label  align="left">Cicilan</label>
    <input type="number" class="form-control" 
    name="cicilan" placeholder="Cicilan">
  </div>
  <div class="form-group" align="left">
    <label  align="left">Infaq</label>
    <input type="number" class="form-control" 
    name="infaq" placeholder="Infaq">
  </div>
    </div>
  </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"
  name="proses">Proses</button>

  </div>
</div>
   </table>
   </form>
  </body>
</html>
