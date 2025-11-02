<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faiz Mahasisa Atma Luhur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
        &#9776;
    </button>
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="home">
        <h2>Selamat Datang</h2>
        <?php
        echo "halo dunia!<br>";
        echo "Nama saya Muhammad Faiz Afdhol Fanani";
        ?>
        <p>Ini contoh paragraf HTML.</p>
    </section>
    <section  id="about">
        <?php
        $NIM = 2511500009;
        $nim = 25115632007;
        $Nama = "Muhammad Faiz Afdhol Fanani";
        $nama = "muhammad faiz afdhol fanani";
        $Tempat_Lahir = "Sungailiat";
        $Tempat_lahir = "sungailiat";
        $Tanggal_Lahir = "06 maret 2007";
        $Tanggal_lahir = "06-03-2007";
        $Hobi = "Bermain Game dan Membaca";
        $hobi = "bermain game dan membaca";
        $Pasangan = "Dea Arzetti Hapsari";
        $pasangan = "dea arzetti hapsari";
        $Pekerjaan = "Belum Ada";
        $pekerjaan = "belum ada";
        $Nama_Orang_Tua = "Bapak Nasarrudin dan Ibu Kartini";
        $nama_orang_tua = "Mr. Nasarrudin dan Mrs. Kartinu";
        $Nama_Kakak = "Niko-Ekky-Bagas";
        $nama_kakak = "niko-ekky-bagas";
        $Nama_Adik = "Tidak Ada";
        $nama_adik = "tidak ada";

        ?>
        <h2>Tentang Saya</h2>
        <p><strong>NIM:</strong> 
            <?php
                echo $NIM;
            ?>
        </p>
        <p><strong>Nama Lengkap:</strong>  
            <?php
                echo $Nama;
            ?>
        &#128516;</p>
        <p><strong>Tempat Lahir:</strong>
            <?php
                echo $Tempat_Lahir;
            ?>
        </p>
        <p><strong>Tanggal Lahir:</strong>
            <?php
                echo $Tanggal_Lahir;
            ?>
        </p>
        <p><strong>Hobi:</strong>
            <?php
                echo $Hobi;
            ?>
        &#127918;</p>
        <p><strong>Pasangan:</strong>
            <?php
                echo $Pasangan;
            ?>
        &#128512;</p>
        <p><strong>Pekerjaan:</strong>
            <?php
                echo $Pekerjaan;
            ?>
        </p>
        <p><strong>Nama Orang Tua:</strong> 
            <?php
                echo $Nama_Orang_Tua;
            ?>
        </p>
        <p><strong>Nama Kakak:</strong> 
            <?php
                echo $Nama_Kakak;
            ?>
        </p>
        <p><strong>Nama Adik:</strong> 
            <?php
                echo $Nama_Adik;
            ?>
        </p>
        </section>

        <section id="contact">
            <h2>Kontak kami</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama:</span>
                <input type="text" id="txtNama" name="txtNama" placeholder="Masukan Nama" required autocomplete="name">
                </label>

                <label for="txtEmail"><span>Email:</span>
                <input type="text" id="txtEmail" name="txtEmail" placeholder="Masukan Email" required autocomplete="email">
                </label>

                
                <label for="txtPesan"><span>Pesan anda:</span>
                <textarea name="txtPesan" id="txtPesan" rows="4" placeholder= "Tulis Pesan anda" requaired></textarea>
                <small id="charCount">0/200 karakter</small>
                </label>
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>

        </section>     
          
  </section>
    </section>
</main>
<footer>
    <P>&copy; 2025 Muhammmad Faiz Afdhol Fanani (2511500009)</P>
</footer>

<script src="script.js"></script>
</body>
</html>