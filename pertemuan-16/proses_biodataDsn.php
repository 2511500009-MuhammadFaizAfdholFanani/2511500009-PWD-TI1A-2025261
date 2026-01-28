<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

# Cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#biodata');
}

# Ambil dan bersihkan nilai dari form biodata mahasiswa
$kode_dosen = bersihkan($_POST['txtKodeDosen'] ?? '');
$nama_dosen = bersihkan($_POST['txtNamaDosen'] ?? '');
$alamat_rumah = bersihkan($_POST['txtAlamatRumah'] ?? '');
$tanggal_jadi_dosen = bersihkan($_POST['txtTanggalJadiDosen'] ?? '');
$jja_dosen = bersihkan($_POST['txtJjaDosen'] ?? '');
$homebase_prodi = bersihkan($_POST['txtHomebaseProdi'] ?? '');
$nomor_hp = bersihkan($_POST['txtNomorHP'] ?? '');
$nama_pasangan = bersihkan($_POST['txtPasangan'] ?? '');
$nama_anak = bersihkan($_POST['txtAnak'] ?? '');
$bidang_ilmu_dosen = bersihkan($_POST['txtbidang'] ?? '');

# Validasi input
$errors = [];

# Validasi Kode Dosen (harus angka, 8-10 digit)
if (empty($kode_dosen)) {
    $errors[] = 'Kode Dosen wajib diisi.';
} elseif (!preg_match('/^[0-9]{8,10}$/', $kode_dosen)) {
    $errors[] = 'Kode Dosen harus terdiri dari 8-10 digit angka.';
}

# Validasi Nama
if (empty($nama_dosen)) {
    $errors[] = 'Nama lengkap wajib diisi.';
} elseif (strlen($nama_dosen) < 2) {
    $errors[] = 'Nama minimal 2 karakter.';
}

# Validasi Tanggal Jadi Dosen
if (empty($tanggal_jadi_dosen)) {
    $errors[] = 'Tanggal jadi dosen wajib diisi.';
} elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $tanggal_jadi_dosen)) {
    if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $tanggal_jadi_dosen)) {
        # Format DD-MM-YYYY diubah menjadi YYYY-MM-DD
        $date_parts = explode('-', $tanggal_jadi_dosen);
        $tanggal_jadi_dosen = $date_parts[2] . '-' . $date_parts[1] . '-' . $date_parts[0];
    } else {
        $errors[] = 'Format tanggal jadi dosen tidak valid. Gunakan format YYYY-MM-DD.';
    }
}



# Validasi JJA dosen
if (empty($jja_dosen)) {
    $errors[] = 'JJA dosen wajib diisi.';
}

# Validasi Hombase Prodi
if (empty($homebase_prodi)) {
    $errors[] = 'Homebase Prodi wajib diisi.';
}

# Validasi nomor HP
if (empty($nomor_hp)) {
    $errors[] = 'Nomor HP wajib diisi.';
}

# Validasi nama pasangan
if (empty($nama_pasangan)) {
    $errors[] = 'Nama pasangan wajib diisi.';
}

# Validasi nama anak
if (empty($nama_anak)) {
    $errors[] = 'Nama anak wajib diisi.';
}

# Validasi bidang ilmu dosen
if (empty($bidang_ilmu_dosen)) {
    $errors[] = 'Bidang ilmu dosen wajib diisi.';
}

# Cek duplikasi Kode Dosen
if (empty($errors)) {
    $check_kode_dosen = "SELECT cmid FROM tbl_biodata_dosen WHERE kode_dosen = ?";
    $stmt_check = mysqli_prepare($conn, $check_kode_dosen);
    mysqli_stmt_bind_param($stmt_check, "s", $kode_dosen);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);
    
    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        $errors[] = 'Kode Dosen sudah terdaftar.';
    }
    mysqli_stmt_close($stmt_check);
}

# Jika ada error, simpan nilai lama dan redirect
if (!empty($errors)) {
    $_SESSION['old_biodata'] = [
        'kode_dosen' => $kode_dosen,
        'nama_dosen' => $nama_dosen,
        'alamat_rumah' => $alamat_rumah,
        'tanggal_jadi_dosen' => $tanggal_jadi_dosen,
        'jja_dosen' => $jja_dosen,
        'homebase_prodi' => $homebase_prodi,
        'nomor_hp' => $nomor_hp,
        'nama_pasangan' => $nama_pasangan,
        'nama_anak' => $nama_anak,
        'bidang_ilmu_dosen' => $bidang_ilmu_dosen
    ];
    
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#biodata');
}

# Simpan data ke session untuk ditampilkan di section about
$_SESSION['biodata'] = [
    'kode_dosen' => $kode_dosen,
        'nama_dosen' => $nama_dosen,
        'alamat_rumah' => $alamat_rumah,
        'tanggal_jadi_dosen' => $tanggal_jadi_dosen,
        'jja_dosen' => $jja_dosen,
        'homebase_prodi' => $homebase_prodi,
        'nomor_hp' => $nomor_hp,
        'nama_pasangan' => $nama_pasangan,
        'nama_anak' => $nama_anak,
        'bidang_ilmu_dosen' => $bidang_ilmu_dosen
];

# Insert data ke database menggunakan prepared statement
$sql = "INSERT INTO tbl_biodata_dosen (kode_dosen, nama_dosen, alamat_rumah, tanggal_jadi_dosen, 
        jja_dosen, homebase_prodi, nomor_hp, nama_pasangan, nama_anak, bidang_ilmu_dosen)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('index.php#biodata');
}

# Bind parameter dan eksekusi
mysqli_stmt_bind_param($stmt, "ssssssssss", 
    $kode_dosen, $nama_dosen, $alamat_rumah, $tanggal_jadi_dosen, 
    $jja_dosen, $homebase_prodi, $nomor_hp, $nama_pasangan, 
    $nama_anak, $bidang_ilmu_dosen);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION['old_biodata']);
    $_SESSION['flash_sukses'] = 'Data biodata dosen berhasil disimpan!';
} else {
    $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
    $_SESSION['old_biodata'] = [
        'kode_dosen' => $kode_dosen,
        'nama_dosen' => $nama_dosen,
        'alamat_rumah' => $alamat_rumah,
        'tanggal_jadi_dosen' => $tanggal_jadi_dosen,
        'jja_dosen' => $jja_dosen,
        'homebase_prodi' => $homebase_prodi,
        'nomor_hp' => $nomor_hp,
        'nama_pasangan' => $nama_pasangan,
        'nama_anak' => $nama_anak,
        'bidang_ilmu_dosen' => $bidang_ilmu_dosen
    ];
}

mysqli_stmt_close($stmt);

# Konsep PRG: Redirect ke halaman biodata
redirect_ke('index.php#biodata');
?>