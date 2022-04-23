<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <hr>
<form method="POST" action="BMIPasien.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-paper-plane-o"></i>
          </div>
        </div> 
        <input id="tempat" name="tempat" placeholder="Masukkan tempat lahir" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar-o"></i>
          </div>
        </div> 
        <input id="ttl" name="ttl" placeholder="Masukkan tanggal lahir " type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="js" id="js_0" type="radio" class="custom-control-input" value="Laki-laki"> 
          <label for="js_0" class="custom-control-label">Laki-laki</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="js" id="js_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="js_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-child"></i>
          </div>
        </div> 
        <input id="bb" name="bb" placeholder="Masukkan berat badan" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-child"></i>
          </div>
        </div> 
        <input id="tb" name="tb" placeholder="Masukkan tingi badan " type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>