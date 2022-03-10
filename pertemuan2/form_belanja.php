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
<h2>Belanja Online</h2>
<table border="1" align="right">
  <tr>
    <td style = "background-color:blue;">Daftar Harga</td>
  </tr>
  <tr>
    <td>TV : 4.200.000</td>
  </tr>
  <tr>
    <td>Kulkas : 3.100.000</td>
  </tr>
  <tr>
    <td>Mesin Cuci : 3.800.000</td>
  </tr>
  <tr>
    <td style = "background-color:blue;">Harga Dapat Berubah Setiap Saat</td>
  </tr>
</table>
<hr>
<form method = "POST" action = "form_belanja.php">
<div class = "container">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-2">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-5">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_0" type="checkbox" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_1" type="checkbox" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_2" type="checkbox" class="custom-control-input" value="mesin cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-2">
      <button name="proses" type="submit" class="btn btn-primary" style = "background-color:green;">Kirim</button>
    </div>
  </div>
  </div>
</form>

<hr>
<?php
  $proses = $_POST['proses'];
  $nama_customer = $_POST['customer'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];

  if($produk == "tv"){
    $total = $jumlah * 4200000;
  }elseif($produk == "kulkas"){
    $total = $jumlah * 3100000;
  }elseif($produk == "mesin cuci"){
    $total = $jumlah * 3800000;
  }

  echo "Nama Customer : $nama_customer";
  echo "<br/>Produk : $produk";
  echo "<br/>Jumlah : $jumlah";
  echo "<br/>Total Belanja : $total";
?>
</body>
</html>