<html>
<head>
<title>Form</title>
</head>

<body>
<form method="POST" action="07_exam.php">
<table>
<tr><td>Nama</td><td>: <input type="text" name="nama"></tr>
<tr><td>Alamat</td><td>: <textarea name="alamat"></textarea></td></tr>
<tr>
 <td>Jenis Kelamin</td>
 <td>: <input type="radio" name="jenis_kelamin" value="Laki-laki">Lakilaki<br>
 &nbsp;&nbsp;<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
 </td>
</tr>
<tr>
 <td>Program Studi</td>
 <td>: <select name="program_studi">
 <option value="Sistem Informasi">Sistem Informasi</option>
 <option value="Teknik Informatika">Teknik Informatika</option>
 <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
 </select>
 </td>
</tr>
<tr>
 <td>Hobi</td>
 <td>:
 <input type="checkbox" name="hobi[]" value="Traveling">Futsal
 <input type="checkbox" name="hobi[]" value="Bersepeda">Naik Gunung
 <input type="checkbox" name="hobi[]" value="Game">Sepak Bola
 <input type="checkbox" name="hobi[]" value="Nonton">Renang
 </td>
</tr>
<tr><td colspan="2"><input type="submit" name="simpan" value="Simpan"></td></<tr>
</table>
</form>
</body>
</html>
