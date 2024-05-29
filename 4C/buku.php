<?php
    include_once ("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <div class="container w-75">
    <h1>Daftar Buku</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">ISBN</th>
      <th scope="col">Unit</th>
      <th scope="col">Action</th>
  </tbody>
  <?php foreach($query as $data) { ?>
            <tr>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["ispn"]; ?></td>
                <td><?php echo $data["unit"]; ?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $data["id"] ?>>EDIT</a>
                    <a href=<?php echo "delete-buku.php?id=" . $data["id"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
</table>
    
    <table border="1">
        <tr>
            <td><h3>Nama</h3></td>
            <td><h3>ISBN</h3></td>
            <td><h3>UNIT</h3></td>
            <td>ACTION</td>
        </tr>

        <?php foreach($query as $data) { ?>
            <tr>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["ispn"]; ?></td>
                <td><?php echo $data["unit"]; ?></td>
                <td>
                    <a class="btn btn-success" href=<?php echo "edit-buku.php?id=" . $data["id"] ?>>EDIT</a>
                    <a href=<?php echo "delete-buku.php?id=" . $data["id"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>

    </table>

    <br>
    <a href="./tambah-buku.php">Tambah Data buku</a>
    <br>
    <a href="./index.php">Kembali Kehalaman Utama</a>
</body>
</html>