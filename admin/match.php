<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $enemy = $_POST['enemy'];
    $scoreEnemy = $_POST['scoreEnemy'];
    $scoreChelsea = $_POST['score'];
    $status = $_POST['status'];
    $image = $_FILES['logoEnemy']['name']; // Sesuaikan nama input dengan 'logoEnemy'
    $filesize = $_FILES['logoEnemy']['size'];
    $tmpName = $_FILES['logoEnemy']['tmp_name'];

    $validImage = ['jpg', 'jpeg', 'png'];
    $imageExt = explode('.', $image);
    $imageExt = strtolower(end($imageExt));

    // Validasi format file
    if (!in_array($imageExt, $validImage)) {
        echo "<script>alert('Format gambar harus jpg, jpeg, atau png!')</script>";
        return;
    }

    // Validasi ukuran file
    if ($filesize > 1000000) {
        echo "<script>alert('Ukuran gambar tidak boleh lebih dari 1MB!')</script>";
        return;
    }

    // Membuat nama unik untuk gambar
    $newImageName = uniqid();
    $newImageName .= '.' . $imageExt;

    // Pindahkan gambar ke folder img/
    if (!file_exists('img')) {
        mkdir('img', 0777, true); // Buat folder jika belum ada
    }
    move_uploaded_file($tmpName, 'img/' . $newImageName);

    // Simpan data ke database
    $query = "INSERT INTO laga (enemy, scoreEnemy, scoreChelsea, status, logoEnemy) VALUES ('$enemy', '$scoreEnemy', '$scoreChelsea', '$status', '$newImageName')";
    if (mysqli_query($koneksi, $query)) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
        </script>";
    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>"> <!-- Menghubungkan dengan file CSS -->
</head>
<body>

    <div class="flex h-screen fixed">
        <aside class="sidebar">
            <div>
                <nav class="menu">
                    <a href="../praktikum/praktikum.php" class="menu-item">Player</a>
                    <a href="../TUGAS/tugas.php" class="menu-item">Match</a>
                    <a href="../MATERI/materi.php" class="menu-item">Merch</a>
                    <a href="../MATERI/materi.php" class="menu-item">Achievement</a>
                </nav>
            </div>
            <div class="logout">
                <a href="../../index.php">
                    <button class="logout-button">Logout</button>
                </a>
            </div>
        </aside>
    </div>

    <main class="content">
        <header class="header">
            <h1>Match</h1>
        </header>

        <section class="form-section">
            <form action="#" method="POST" class="form" enctype="multipart/form-data">
                <!-- <label for="id">ID:</label>
                <input type="text" id="id" name="id" required> -->

                <label for="enemy">Opponent:</label>
                <input type="text" id="enemy" name="enemy" required>

                <label for="scoreEnemy">Opponent's Score:</label>
                <input type="text" id="scoreEnemy" name="scoreEnemy" required>

                <label for="score">Chelsea's Score:</label>
                <input type="text" id="score" name="score" required>

                <label for="logoEnemy">Enemy's Logo</label>
                <input type="file" id="logoEnemy" name="logoEnemy" accept=".jpg, .jpeg, .png" required>

                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                    <option value="draw">Draw</option>
                </select>

                <button id="submit" name="submit" class="submit-button">Tambah</button>
            </form>
        </section>


        <section class="table-section">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Opponent</th>
                <th>Opponent's Score</th>
                <th>Chelsea's Score</th>
                <th>Status</th>
                <th>Enemy's Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $read = mysqli_query($koneksi, "SELECT * FROM laga");
            while ($data = mysqli_fetch_array($read)) {
                echo "<tr>";
                echo "<td>{$data['idMatch']}</td>";
                echo "<td>{$data['enemy']}</td>";
                echo "<td>{$data['scoreEnemy']}</td>";
                echo "<td>{$data['scoreChelsea']}</td>";
                echo "<td>{$data['status']}</td>";
                echo "<td><img src='img/{$data['logoEnemy']}' width='100'></td>";
                echo "<td>
                        <a href='update.php?id={$data['idMatch']}'>EDIT</a> | 
                        <a href='delete.php?id={$data['idMatch']}'>HAPUS</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</section>

    </main>

</body>
</html>
