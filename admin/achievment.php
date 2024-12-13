<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_FILES['photo']['name']; // Sesuaikan nama input dengan 'photo'
    $filesize = $_FILES['photo']['size'];
    $tmpName = $_FILES['photo']['tmp_name'];

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
    $query = "INSERT INTO achievement (nameAchievement, image) VALUES ('$name', '$newImageName')";    if (mysqli_query($koneksi, $query)) {
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
    <title>Player</title>
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
            <h1>Player</h1>
        </header>

        <section class="form-section">
            <form action="#" method="POST" class="form" enctype="multipart/form-data">
                <!-- <label for="id">ID:</label>
                <input type="text" id="id" name="id" required> -->

                <label for="name">Trophy's Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="photo">Image:</label>
                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" required>

                <button id="submit" name="submit" class="submit-button">Tambah</button>
            </form>
        </section>


        <section class="table-section">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Trophy's Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $read = mysqli_query($koneksi, "SELECT * FROM achievement");
            while ($data = mysqli_fetch_array($read)) {
                echo "<tr>";
                echo "<td>{$data['idAchievement']}</td>";
                echo "<td>{$data['nameAchievement']}</td>";
                echo "<td><img src='img/{$data['image']}' width='100'></td>";
                echo "<td>
                        <a href='update.php?id={$data['idAchievement']}'>EDIT</a> | 
                        <a href='delete.php?id={$data['idAchievement']}'>HAPUS</a>
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
