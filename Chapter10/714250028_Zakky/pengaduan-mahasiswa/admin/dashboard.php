<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit;
}
include '../config/db.php';
$data = mysqli_query($conn, "SELECT * FROM pengaduan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
</head>
<body>
    <div class="container">
        <a href="../index.php" id="logout-link">Logout</a>
        <h1>Dashboard Admin</h1>
        <table border="0" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php while ($p = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['judul']; ?></td>
            <td><?= $p['status']; ?></td>
            <td>
                <button onclick="openModal(<?= $p['id']; ?>, '<?= $p['status']; ?>')" id="edit-btn">Edit</button> |
                <button onclick="openDeleteModal(<?= $p['id']; ?>)" id="hapus-btn">Hapus</button>
            </td>
        </tr>
        <?php endwhile; ?>
        </table>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Edit Status</h2>
                <form method="POST" action="update_status.php">
                    <input type="hidden" name="id" id="pengaduan_id">
                    <select name="status" id="status">
                        <option value="Baru">Baru</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    <br><br>
                    <button type="submit" id="save-btn">Simpan</button>
                </form>
            </div>
        </div>
        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeDeleteModal()">&times;</span>
                <h2>Konfirmasi Hapus</h2>
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                <form method="POST" action="hapus.php">
                    <input type="hidden" name="id" id="delete_id">
                    <button type="submit" style="background:red;color:white;" id="delete-btn">
                    Ya, Hapus
                    </button>
                    <button type="button" onclick="closeDeleteModal()" id="cancel-btn">
                        Batal
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
    function openModal(id, status) {
        document.getElementById('modal').style.display = 'block';
        document.getElementById('pengaduan_id').value = id;
        document.getElementById('status').value = status;
    }
    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }
    function openDeleteModal(id) {
        document.getElementById('deleteModal').style.display = 'block';
        document.getElementById('delete_id').value = id;
    }
    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }
    </script>
</body>
</html>