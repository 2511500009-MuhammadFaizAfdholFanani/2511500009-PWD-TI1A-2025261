<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_biodata_dosen ORDER BY Bid DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses_Dsn'] ?? ''; #jika query sukses
  $flash_error  = $_SESSION['flash_error_Dsn'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses_Dsn'], $_SESSION['flash_error_Dsn']); 
?>

<?php if (!empty($flash_sukses_Dsn)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses_Dsn; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error_Dsn)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error_Dsn; ?>
        </div>
<?php endif; ?>
<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Kode_Dosen</th>
    <th>Nama_Dosen</th>
    <th>Alamat_Rumah</th>
    <th>Tanggal_Jadi_Dosen</th>
    <th>JJA_Dosen</th>
    <th>Homebase_Prodi</th>
    <th>Nomor_HP</th>
    <th>Nama_Pasangan</th>
    <th>Nama_Anak</th>
    <th>Bidang_Ilmu_Dosen</th>
    <th>Created At</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $row['Bid']; ?></td>
      <td><?= htmlspecialchars($row['Nama_Dosen']); ?></td>
        <a href="edit.php?cid=<?= (int)$row['cid']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['cnama']); ?>?')" href="proses_delete.php?cid=<?= (int)$row['cid']; ?>">Delete</a>
      </td>
      <td><?= $row['cid']; ?></td>
      <td><?= htmlspecialchars($row['Kode_Dosen']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Dosen']); ?></td>
      <td><?= htmlspecialchars($row['Alamat_Rumah']); ?></td>
      <td><?= date('d-m-Y', strtotime($row['Tanggal_Jadi_Dosen'])); ?></td>
      <td><?= htmlspecialchars($row['JJA_Dosen']); ?></td>
      <td><?= htmlspecialchars($row['Homebase_Prodi']); ?></td>
      <td><?= htmlspecialchars($row['Nomor_HP']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Pasangan']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Anak']); ?></td>
      <td><?= htmlspecialchars($row['Bidang_Ilmu_Dosen']); ?></td>
      <td><?= formatTanggal($row['Created_At']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>