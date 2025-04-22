<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body style="background-color: darkslateblue;">
    <form action="tampilanmahasiswa.php" method="post">
        <strong>Pengelolaan Data Mahasiswa</strong><br><br>

        Nama: <input type="text" name="nama" size="25" maxlength="50"><br>
        Alamat: <input type="text" name="alamat" size="25" maxlength="50"><br><br>

        Jenis Kelamin:
        <input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan<br><br>

        Pekerjaan:
        <select name="pekerjaan">
            <option value="-Pilih-">-Pilih-</option>
            <option value="Pelajar">Pelajar</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Lain-lain">Lain-lain</option>
        </select><br>

        Hobi:
        <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
        <input type="checkbox" name="hobi2" value="Musik">Musik
        <input type="checkbox" name="hobi3" value="Jalan-Jalan">Jalan-Jalan<br><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>
</html>
