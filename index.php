<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Kartu Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div class="container mt-5">
            <h2>Kartu Siswa SDIT Anak Shalih Bogor <span class="badge badge-secondary"> Alhamdulillah </span></h2>
            <form action="post.php" method="post">
                <div class="form-group">
                  <label for="NISN">NISN</label>
                  <input name="nisn" type="text" class="form-control" id="NISN" placeholder="Nomor Induk Sekolah Nasional" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="NIS">NIS</label>
                  <input name="nis" type="text" class="form-control" id="NIS" placeholder="Nomor Induk Sekolah" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Siswa" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="ttl">Tempat Tanggal Lahir</label>
                  <input name="ttl" type="text" class="form-control" id="ttl" placeholder="Tempat Tanggal Lahir" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" autocomplete="off">
                </div>
                <input type="submit" value="Download Kartu" class="btn btn-success">
              </form>
        </div>
</body>
</html>
