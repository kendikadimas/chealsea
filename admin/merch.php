<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name']; // Sesuaikan nama input dengan 'image'
    $filesize = $_FILES['image']['size'];
    $tmpName = $_FILES['image']['tmp_name'];

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
    $query = "INSERT INTO merch (nameMerch, price, image) VALUES ('$name', '$price', '$newImageName')";
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
    <title>Merch</title>
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
            <h1>Merch</h1>
        </header>

        <section class="form-section">
            <form action="#" method="POST" class="form" enctype="multipart/form-data">
                <!-- <label for="id">ID:</label>
                <input type="text" id="id" name="id" required> -->

                <label for="name">Nama Merch:</label>
                <input type="text" id="name" name="name" required>

                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>

                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>

                <button id="submit" name="submit" class="submit-button">Tambah</button>
            </form>
        </section>


        <section class="table-section">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Merch</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $read = mysqli_query($koneksi, "SELECT * FROM merch");
            while ($data = mysqli_fetch_array($read)) {
                echo "<tr>";
                echo "<td>{$data['idMerch']}</td>";
                echo "<td>{$data['nameMerch']}</td>";
                echo "<td>{$data['price']}</td>";
                echo "<td><img src='img/{$data['image']}' alt='Gambar Merch' width='100'></td>";
                echo "<td>
                        <a href='update.php?id={$data['idMerch']}'>EDIT</a> | 
                        <a href='delete.php?id={$data['idMerch']}'>HAPUS</a>
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
