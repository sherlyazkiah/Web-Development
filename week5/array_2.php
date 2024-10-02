<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array Associative</title>
        <style>
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px 0;
                font-size: 18px;
                text-align: left;
            }
            table, th, td {
                border: 1px solid #dddddd;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
            td {
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        ?>
        <h2>Data Dosen</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>