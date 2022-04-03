<?php
require_once "class_account.php";

$b1 = new akun('C001','Ahmad', number_format(6000000,0,".","."));
$b2 = new akun('C002','Budi', number_format(5350000,0,".","."));
$b3 = new akun('C003','Kurniawan',number_format(2500000,0,".","."));
$bank = [$b1,$b2,$b3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <h1 class="text-center mt-3">Bank Ini</h1>
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-md-5">
                <blockquote class="blockquote"></blockquote>
                <p class="lead">Ahmad nabung Rp. 1.000.000 <br>
                Budi tarik uang Rp. 2.500.000</p>
                </div>
            </div>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">No Account</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($bank as $bk){
            ?>
                <tr>
                    <td scope="row"><?=$nomor?></td>
                    <td><?=$bk->nomor?></td>
                    <td><?=$bk->nama?></td>
                    <td><?=$bk->saldo?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>