<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
<div class="col-md-12">
    <h3>Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $guru-> id ?></td>
                <td><?php echo $guru-> nidn ?></td>
                <td><?php echo $guru-> nama ?></td>
                <td><?php echo $guru-> gender ?></td>
                <td><?php echo $guru-> tmp_lahir ?></td>
                <td><?php echo $guru-> tgl_lahir ?></td>
                <td><?php echo $guru-> pendidikan ?></td>
                <td>
                    <a href="">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>