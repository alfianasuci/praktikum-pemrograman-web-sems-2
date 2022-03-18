<?php
// ngambil request data
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$total = $uts + $uas + $tugas;
$alphabet = $total/3;
if ($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Selamat Anda Lulus";
}
if ($alphabet >= 85){
    $grade = "A (Sangat Memuaskan)";
}elseif ($alphabet >= 70){
    $grade = "B (Memuaskan)";
}elseif ($alphabet >= 56){
    $grade = "C (Cukup)";
}elseif ($alphabet >= 36){
    $grade = "D (Kurang)";
}elseif ($alphabet >= 10){
    $grade = "E (Sangat Kurang)";
}else{
    $grade = "I(Tidak ada nilai";
}

// menampilkan data yang telah kita ambil
echo "Nama : $nama_siswa";
echo "<br/>Matakuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $lulus";
echo "<br/>Data Telah di $proses";
?>