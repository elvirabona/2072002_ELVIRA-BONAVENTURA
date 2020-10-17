<!DOCTYPE html>
<html lang="en">
<head>    
<title>Data Diri</title>
</head>
    
<body>
<table align="center">
<tr>
<td>
       <p fontface="TimesNewRoman">Silahkan Masukan Data Diri Anda</p>
       </td>
       </tr>
       </table>
       <table align="center">
            <tr>
                <td bgcolor="grey" width ="150">Nama Lengkap :</td>
                <td bgcolor="grey">
                <textarea cols="50" rows="1">
                </textarea>
                </td>
            </tr>
            <tr>
                <td bgcolor="grey">No Telp :</td>
                <td bgcolor="grey">
                <input type="text" name="No Telp :">
                </td>

            </tr>
            <tr>
                <td bgcolor="grey">Jenis Kelamin : 
                </td> 
                <td bgcolor="grey">
                <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
                
                </td>
            </tr>
            <tr>
                <td bgcolor="grey">Alasan Masuk IT :
                </td>
                <td bgcolor="grey">
                <select name ="Alasan Masuk IT">
                <option value="I Love IT">I Love IT</option>
                <option value="Terjebak">Terjebak</option>
                <option value="Untuk Menyelamatkan Dunia">Untuk Menyelamatkan Dunia</option>
                <option value="Mencari Arti Hidup">Mencari Arti Hiduo</option>
                        </select> 
                        </td>
                
            </tr>
            <tr>
                <td bgcolor="grey">Tell me About Yourself
                </td>
                <td bgcolor="grey">
                <textarea cols="60" rows="10">
                </textarea>
                </td>
                
            </tr>
            </table>
            <table align="center">
            <tr>
            <td>
            <a href="tugasForm2.php" target="_blank"><b><button>proses</button></b></a>
            <button type="reset" value="hapus">reset</button></td>
            </tr>
        </table>   
</body>
</html>