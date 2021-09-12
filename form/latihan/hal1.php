<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Peminjaman Mobil</title>
</head>
<body>
<form action="hal2.php" method="post">
<fieldset>
    <legend>Rental Mobil</legend>
    <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>NIK </td>
            <td> : </td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="jk" value="laki-laki" >
            laki-laki
            <input type="radio" name="jk" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Mobil</td>
            <td> : </td>
            <td><input  name="mobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil </td>
            <td> : </td>
            <td><select  name="jenis">
            <option value= truk > Truk</option>
            <option value= sedan > Sedan</option>
            <option value= dolak > Dolak</option>
            <option value= box > Box</option>
            </select></td>
        </tr>
        <tr>
            <td>Merek Mobil </td>
            <td> : </td>
            <td><select   name="merek">
            <option value= toyota > Toyota</option>
            <option value= daihatsu > Daihatsu</option>
            <option value= honda > Honda</option>
            <option value= suzuki > Suzuki</option>
            </select></td>
        </tr>
        <tr>
            <td>NO Plat Mobil</td>
            <td> : </td>
            <td><input type="text" name="plat"></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="pinjam"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> : </td>
            <td><input  type="date" name="kembali"></td>
        </tr>
        <tr>
            <td>Penjamin </td>
            <td> : </td>
            <td><select  name="jamin">
            <option value= ktp > fc ktp</option>
            <option value= sim > fc sim</option>
            <option value= kk > fc kk</option>
            </select></td>
        </tr>
        <tr>
            <td>Menggunkan Supir </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= ya > Ya</option>
            <option value= tidak > Tidak</option>
            </select></td>
        </tr>
<tr></tr>
        <tr>
        <td></td><td></td>
            <td><input type="submit" name="simpan" value="Simpan">
            <input type="reset" value="Reset"></td>
        </tr>
</fieldset>
</form>
</table>
</body>
</html>