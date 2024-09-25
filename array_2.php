<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table {
            border: 1px solid #0099cc;
        }
        th {
            background-color: #0099cc;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ccccff;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' ];
    
    echo "<table>";
    echo "<tr><th>Biodata</th><th>Isi</th></tr>";
    echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
    echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
    ?>
</body>
</html>