<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elvira Bonaventura 2072002">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST" border="1">
    <fieldset>
    <legend>Perhitungan Biaya Kuliah:</legend>
    <label for="biayapid">Biaya Pembangunan : </label>
    <input type="number" id="biayapid" name="biayapembangunan" size="20">
    <br>
    <label for="biayasid">Biaya SKS : </label>
    <input type="text" id="biayasid" name="biayasks" size="20" max="100">
    <br>
    <label for="jumlahsksid">Jumlah SKS yang diambil : </label>
    <input type="text" id="jumlahsksid" name="jumlahsks" size="20" max="100">
    <br>
    <input type="submit" value="Hitung" name="btnSubmit">
    </fieldset>
    </form>
</body>
</html>