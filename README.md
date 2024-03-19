# Membuat Form Hitung Umur & Setting Pekerjaan Sederhana BY PHP
Form ini terdiri dari input nama, masukan tanggal lahir, dan opsi pemilihan pekerjaan.

## Features Form
- Menampilkan nama
- Menampilkan tanggal lahir & umur
- Menampilkan Pekerjaan

## Tools
1. HTML
2. CSS
3. PHP
4. XAMPP
5. VISUAL STUDIO CODE

## Cara membuat form
Berikut adalah tata cara dalam membuat form sederhana.
1. Buka xampp dan klik `star` pada actions `Apache` dan `Mysql`

   
   <img width="471" alt="image" src="https://github.com/raffirasyad/Lab2Web/assets/115473988/274bc123-bccb-4d5e-b4b7-dd4755a52395">


2. Buat folder baru di file xampp `htdoc` beri nama folder `latihan_php`.

3. Buka `visual studio code` masuk ke folder `latihan_php` lalu membuat satu file baru `index.php`.


   <img width="188" alt="image" src="https://github.com/raffirasyad/Lab2Web/assets/115473988/29b45e2c-9f2c-45b8-8c8e-52e7faa989f2">

4. Buat form html.

```
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
```

5. Buat form PHP hitung umur berdasarkan tanggal lahir, tentukan gaji berdasarkan pekerjaan, tampilkan hasil.

```
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
```

6. Berikan tambahan warna dan layout form menggunakan `css` didalam file tersebut.

```
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
```

7. Jalankan Program.

   
   <img width="378" alt="image" src="https://github.com/raffirasyad/Lab2Web/assets/115473988/b41d3321-111b-4fd6-97f5-c5d2f6502747">

- Hasil Submit data nama, tanggal lahir, dan pekerjaan.

 
  <img width="331" alt="image" src="https://github.com/raffirasyad/Lab2Web/assets/115473988/34215ec7-cfa4-43f9-8e0e-b7681e82f309">


   
   
