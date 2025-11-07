<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  $sql = "INSERT INTO pengguna (nama, email) VALUES ('$nama', '$email')";
  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>

<form method="POST">
  <label>Nama:</label><br>
  <input type="text" name="nama" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" required><br><br>

  <button type="submit" name="submit">Simpan</button>
</form>
