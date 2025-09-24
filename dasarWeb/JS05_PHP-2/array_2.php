<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Diri</title>
    <link rel="stylesheet" type="text/css" href="array2.css">
</head>
<body>
    <div class="container">
        <h2>Data Diri</h2>
        <?php
            $Mahasiswa = [
                'Nama' => 'Adinda Luluk Hanifah',
                'Domisili' => 'Malang',
                'Jenis Kelamin' => 'Perempuan'
            ];
        ?>
        <table>
            <?php
                foreach ($Mahasiswa as $key => $value) {
                    echo "<tr>";
                    echo "<td class='field'>$key</td>";
                    echo "<td class='data'>$value</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
