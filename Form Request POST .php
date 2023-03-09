<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa NF</title>
</head>
    <style>
        body {background-color: goldenrod;}
    </style>
<body>
<center><h1>PENILAIAN MAHASISWA STT NF</h1></center>
    <hr>
    <form method="POST">

        <table border="0" align="center">
            
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" placeholder="Nama Lengkap" size="12">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                <select name="matkul">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Bisnis Digital">Bisnis Digital</option>
                </select>
                <br>
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                    <input type="number" name="tugas" placeholder="1-100">
                </td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td>
                    <input type="number" name="uts"placeholder="1-100">
                </td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td>
                    <input type="number" name="uas" placeholder="1-100">
                </td>
            </tr>
        </table>
        <center><button align="center" type="submit" name="proses">proses</button></center>

    </form>
    <?php
    if(isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['matkul'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $rata_nilai = (0.35 * $tugas) + (0.30 * $uts ) + (0.35 * $uas);

    echo "<br>Nama : ". $nama;
    echo "<br>Jurusan : " . $jurusan;
    echo "<br>Nilai Tugas : " . $tugas;
    echo "<br>Nilai Uts : " . $uts;
    echo "<br>Nilai Uas : " . $uas;
    

    if($rata_nilai >= 85 && $rata_nilai <= 100 ){
        echo "<br>Rata-rata : " . $rata_nilai ."<br>" . "Nilai Huruf : A<br>" . "keterangan : Lulus<br>" ;
    } else if($rata_nilai >= 70 && $rata_nilai <= 84 ){
        echo "<br>Rata-rata : " . $rata_nilai ."<br>" . "Nilai Huruf : B<br>" . "keterangan : Lulus<br>" ;
    }  else if($rata_nilai >= 56 && $rata_nilai <= 69 ){
        echo "<br>Rata-rata : " . $rata_nilai ."<br>" . "Nilai Huruf : C<br>" . "keterangan : Lulus<br>" ;
    }  else if($rata_nilai >= 35 && $rata_nilai <= 55 ){
        echo "<br>Rata-rata : " . $rata_nilai ."<br>" . "Nilai Huruf : D<br>" . "keterangan : Lulus<br>" ;
    } else {
        echo "<br>Rata-rata : " . $rata_nilai ."<br>" . "Nilai Huruf : E<br>" . "keterangan : Tidak Lulus<br>";
    }
}
    ?>

</body>
</html>