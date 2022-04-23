<?php
require_once "BMI.php";
$pasien = array(
    1 => array(1, "2022-01-10", "P001", "Ahmad", "Pria", 69.8, 169, 24.7, "Kelebihan Berat Badan"),
        array(2, "2022-01-10", "P002", "Rina", "Wanita", 55.3, 165, 20.3, "Sehat Normal (Ideal)"),
        array(3, "2022-01-11", "P003", "Luthfi", "Pria", 45.2, 171, 15.4, "Kekurangan Berat Badan")
);

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$tempat_lahir = $_POST['tempat'];
$jenis_kelamin = $_POST['js'];
$tanggal_lahir = $_POST['ttl'];
$berat_badan = $_POST['bb'];
$tinggi_badan = $_POST['tb'];
$email = $_POST['email'];

$pasien_baru = new BmiPasien(count($pasien) + 1, $tanggal, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
$pasien_baru->bmi = $pasien_baru->hasilBMI();
array_push($pasien, array(
    $pasien_baru->id,
    $pasien_baru->tanggal,
    $pasien_baru->kode,
    $pasien_baru->nama,
    $pasien_baru->jenis_kelamin,
    $pasien_baru->berat_badan,
    $pasien_baru->tinggi_badan,
    $pasien_baru->bmi,
    $pasien_baru->nilai($pasien_baru->bmi)
));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br>
    <h1><center> HASIL BMI</center></h1>
    <center><table border=1>
        <thead >
            <tr>
                <td><b>No</b></td>
                <td><b>Tanggal Periksa</b></td>
                <td><b>Kode Pasien</b></td>
                <td><b>Nama Pasien</b></td>
                <td><b>Gender</b></td>
                <td><b>Berat Badan (Kg)</b></td>
                <td><b>Tinggi Badan (Cm)</b></td>
                <td><b>Nilai BMI</b></td>
                <td><b>Status BMI</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($pasien as $objek => $val){
                echo "<tr>";
                echo "<td>".$val[0]."</td>";
                echo "<td>".$val[1]."</td>";
                echo "<td>".$val[2]."</td>";
                echo "<td>".$val[3]."</td>";
                echo "<td>".$val[4]."</td>";
                echo "<td>".$val[5]."</td>";
                echo "<td>".$val[6]."</td>";
                echo "<td>".$val[7]."</td>";
                echo "<td>".$val[8]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table></center>
</body>
</html>