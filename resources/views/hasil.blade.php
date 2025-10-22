<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Sensor</title>
</head>
<body>
    <h1>Hasil Sensor</h1>
    <table border="1">
        <tr>
            <th>Lokasi Sensor</th>
            <th>Kedalaman Air (cm)</th>
            <th>Curah Hujan (mm)</th>
            <th>Kelembapan Tanah (%)</th>
        </tr>
        <tr>
            <td>{{ $data['lokasi_sensor'] }}</td>
            <td>{{ $data['kedalaman_air'] }}</td>
            <td>{{ $data['curah_hujan'] }}</td>
            <td>{{ $data['kelembapan_tanah'] }}</td>
        </tr>
    </table>
</body>
</html>