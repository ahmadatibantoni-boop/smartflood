<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sensor</title>
</head>
<body>
    <h1>Form Sensor</h1>
    <form action="/hasil-sensor" method="POST">
        @csrf
        <label for="lokasi_sensor">Lokasi Sensor:</label>
        <select name="lokasi_sensor" id="lokasi_sensor" required>
            <option value="Dayeuhkolot">Dayeuhkolot</option>
            <option value="Baleendah">Baleendah</option>
            <option value="Majalaya">Majalaya</option>
        </select><br>

        <label for="kedalaman_air">Kedalaman Air (cm):</label>
        <input type="number" name="kedalaman_air" id="kedalaman_air" required><br>

        <label for="curah_hujan">Curah Hujan (mm):</label>
        <input type="number" name="curah_hujan" id="curah_hujan" required><br>

        <label for="kelembapan_tanah">Kelembapan Tanah (%):</label>
        <input type="number" name="kelembapan_tanah" id="kelembapan_tanah" required><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>