<?php
include("config.php");
// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM dtb_sma01mandau WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="css/reset.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f3e7e9, #e3eeff);
            color: #333;
            padding: 20px;
        }
        header {
            background-color: #82b1c5;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h3 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 30px auto;
        }
        fieldset {
            border: none;
        }
      
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }
        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        textarea {
            height: 80px;
        }
        
        /* Tombol Simpan */
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Radio Button */
        p label {
            display: inline-block;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<header>
    <h3>Formulir Edit Siswa</h3>
</header>
<form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="asal">Asal: </label>
            <input type="text" name="asal" placeholder="Asal" value="<?php echo $siswa['asal'] ?>" />
        </p>
        <p>
            <label   label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" 
                <?php echo ($jk == 'laki-laki') ? "checked" : ""; ?>> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="perempuan" 
                <?php echo ($jk == 'perempuan') ? "checked" : ""; ?>> Perempuan
            </label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option value="Islam" <?php echo ($agama == 'Islam') ? "selected" : ""; ?>>Islam</option>
                <option value="Kristen" <?php echo ($agama == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
                <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
                <option value="Budha" <?php echo ($agama == 'Budha') ? "selected" : ""; ?>>Budha</option>
                <option value="Atheis" <?php echo ($agama == 'Atheis') ? "selected" : ""; ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label for="alumni">Alumni: </label>
            <input type="text" name="alumni" placeholder="alumni" value="<?php echo $siswa['alumni'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
    </fieldset>
</form>
</body>
</html>
