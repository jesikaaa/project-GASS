<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style_form.css">
</head>
<body>
   <form action="tugasPBW2.php" method="POST">
        <fieldset class="first">
            <legend>Identitas Penyewa</legend>
            <label for= "nama">Nama Lengkap</Label> <br>
            <input type="text" name="nama" id="nama"><br>
            <label for="email">Email</label> <br>
            <input type="email" name="email" id="email"><br>
            <label for="gender">Jenis Kelamin</label> <br>
            <input type="radio" name="gender" id="male" value="Laki-Laki">
            <label for="male">Laki-Laki</label><br>
            <input type="radio" name="gender" id="female" value="Perempuan">
            <label for="female">Perempuan</label><br>

            <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" required><br><br>

            <label for="alamat">Alamat Tempat Tinggal</label> <br>
            <input type="text" name="alamat" id="alamat">

            
        </fieldset>
        <fieldset class="second">
            <legend>Keterangan Sewa</legend>

            <label for="date">Hari peminjaman</label> 
            <br>
            <input type="date" name="date" id="date">
            <label for="date2">Hari pengembalian</label> 
            <br>
            <input type="date" name="date2" id="date2">


            <label for="motor">Pilih Tipe Motor:</label>

            <select name="motor" id="motor">
                <option value="vario">Vario</option>
                <option value="nmax">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select><br>

            <label for="atribut">Pilih atribut ekstra :</label><br>
            <input type="checkbox" id="atr" name="atr" value="Jas Hujan">
            <label for="atribut"> jas hujan</label><br>
            <input type="checkbox" id="atr" name="atr" value="Helm">
            <label for="atribut"> helm</label><br>
            <input type="checkbox" id="atr" name="atr" value="Jaket">
            <label for="atribut"> jaket</label><br>

        </fieldset>
        <button type="submit" class="tombol-submit">Submit</button>
   </form> 
</body>
</html>