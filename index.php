<!DOCTYPE html>
<html>
<head>
    <title>Hitung Umur dan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 400px;
            background-color: #fff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input, select {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Umur dan Gaji</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir">

            <label for="pekerjaan">Pekerjaan:</label>
            <select id="pekerjaan" name="pekerjaan">
                <option value="Programmer">Programmer</option>
                <option value="Designer">Designer</option>
                <option value="Marketing">Marketing</option>
                <option value="HR">HR</option>
            </select>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Hitung umur berdasarkan tanggal lahir
            $umur = date_diff(date_create($tanggal_lahir), date_create('today'))->y;

            // Tentukan gaji berdasarkan pekerjaan
            switch ($pekerjaan) {
                case 'Programmer':
                    $gaji = "Rp 10.000.000";
                    break;
                case 'Designer':
                    $gaji = "Rp 8.000.000";
                    break;
                case 'Marketing':
                    $gaji = "Rp 7.000.000";
                    break;
                case 'HR':
                    $gaji = "Rp 6.000.000";
                    break;
                default:
                    $gaji = "Rp 0";
                    break;
            }

            // Tampilkan hasil
            echo "<div class='result'>";
            echo "<h2>Hasil:</h2>";
            echo "Nama: $nama <br>";
            echo "Umur: $umur tahun <br>";
            echo "Pekerjaan: $pekerjaan <br>";
            echo "Gaji: $gaji <br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
