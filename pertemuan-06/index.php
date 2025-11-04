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

    <section id="ipk">
            <h2>Nilai Saya</h2>
            <?php 
            // ==========================
            // Data Mata Kuliah
            // ==========================
            $namaMatkul1 = "Kalkulus";
            $namaMatkul2 = "Logika Informatika";
            $namaMatkul3 = "Pengantar Teknik Informatika";
            $namaMatkul4 = "Aplikasi Perkantoran";
            $namaMatkul5 = "Pemrograman Web Dasar";

            $sksMatkul1 = 4;
            $sksMatkul2 = 3;
            $sksMatkul3 = 3;
            $sksMatkul4 = 2;
            $sksMatkul5 = 3;

            $nilaiHadir1 = 90; $nilaiTugas1 = 90; $nilaiUTS1 = 80; $nilaiUAS1 = 85;
            $nilaiHadir2 = 100; $nilaiTugas2 = 95; $nilaiUTS2 = 85; $nilaiUAS2 = 90;
            $nilaiHadir3 = 95; $nilaiTugas3 = 80; $nilaiUTS3 = 75; $nilaiUAS3 = 85;
            $nilaiHadir4 = 88; $nilaiTugas4 = 85; $nilaiUTS4 = 70; $nilaiUAS4 = 90;
            $nilaiHadir5 = 90; $nilaiTugas5 = 80; $nilaiUTS5 = 80; $nilaiUAS5 = 85;

            // ==========================
            // Fungsi-fungsi
            // ==========================
            function hitungNilaiAkhir($hadir, $tugas, $uts, $uas) {
                return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
            }

            function tentukanGrade($nilaiAkhir, $hadir) {
                if ($hadir < 70) return "E";
                elseif ($nilaiAkhir >= 85) return "A";
                elseif ($nilaiAkhir >= 80) return "A-";
                elseif ($nilaiAkhir >= 75) return "B+";
                elseif ($nilaiAkhir >= 70) return "B";
                elseif ($nilaiAkhir >= 65) return "B-";
                elseif ($nilaiAkhir >= 60) return "C";
                elseif ($nilaiAkhir >= 50) return "D";
                else return "E";
            }

            function konversiMutu($grade) {
                switch($grade) {
                    case "A": return 4.0;
                    case "A-": return 3.7;
                    case "B+": return 3.3;
                    case "B": return 3.0;
                    case "B-": return 2.7;
                    case "C": return 2.0;
                    case "D": return 1.0;
                    default: return 0.0;
                }
            }

            // ==========================
            // Proses Perhitungan
            // ==========================
            $matkul = [
                [$namaMatkul1, $sksMatkul1, $nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1],
                [$namaMatkul2, $sksMatkul2, $nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2],
                [$namaMatkul3, $sksMatkul3, $nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3],
                [$namaMatkul4, $sksMatkul4, $nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4],
                [$namaMatkul5, $sksMatkul5, $nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5],
            ];

            $totalBobot = 0;
            $totalSKS = 0;
            $no = 1;

            // ==========================
            // Tampilkan Output Rapi
            // ==========================
            foreach ($matkul as $m) {
                list($nama, $sks, $hadir, $tugas, $uts, $uas) = $m;

                $nilaiAkhir = hitungNilaiAkhir($hadir, $tugas, $uts, $uas);
                $grade = tentukanGrade($nilaiAkhir, $hadir);
                $mutu = konversiMutu($grade);
                $bobot = $mutu * $sks;
                $status = ($grade == "D" || $grade == "E") ? "Gagal" : "Lulus";

                $totalBobot += $bobot;
                $totalSKS += $sks;

            echo "<div style='margin-bottom:25px; border-bottom:1px solid #ccc; padding-bottom:10px;'>";
            echo "<b>Nama Mata Kuliah ke-$no</b> : $nama<br><br>";
            echo "<table style='border-collapse:collapse; width:350px;'>";
            echo "<tr><td style='width:140px;'>SKS</td><td>: $sks</td></tr>";
            echo "<tr><td>Kehadiran</td><td>: $hadir</td></tr>";
            echo "<tr><td>Tugas</td><td>: $tugas</td></tr>";
            echo "<tr><td>UTS</td><td>: $uts</td></tr>";
            echo "<tr><td>UAS</td><td>: $uas</td></tr>";
            echo "<tr><td>Nilai Akhir</td><td>: ".number_format($nilaiAkhir,2)."</td></tr>";
            echo "<tr><td>Grade</td><td>: $grade</td></tr>";
            echo "<tr><td>Angka Mutu</td><td>: ".number_format($mutu,2)."</td></tr>";
            echo "<tr><td>Bobot</td><td>: ".number_format($bobot,2)."</td></tr>";
            echo "<tr><td>Status</td><td>: $status</td></tr>";
            echo "</table>"; 
            echo "</div>";

            $no++;
        }

        $ipk = $totalBobot / $totalSKS;

            echo "<h3>Total Bobot = ".number_format($totalBobot,2)."</h3>";
            echo "<h3>Total SKS = $totalSKS</h3>";
            echo "<h2>IPK = ".number_format($ipk,2)."</h2>";
            ?>
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