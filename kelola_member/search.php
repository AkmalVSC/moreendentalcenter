<?php
if (isset($_POST['search'])) {
  require_once "../koneksi.php";
  $no = 1;
  $search = $_POST['search'];
  $query = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE nm_pengguna LIKE '%".$search."%' OR id_user LIKE '%".$search."%'");
  while ($row = mysqli_fetch_object($query)) {
 ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $row->id_user; ?></td>
  <td><?= $row->username; ?></td>
  <td><?= $row->nm_pengguna; ?></td>
  <td><?= $row->email; ?></td>
  <td><?= $row->nohp; ?></td>
    <td>
        <a href="edit.php?id_user=<?= $row->id_user; ?>" class="btn btn-primary">Edit</a>
        <a href="hapus.php?id_user=<?= $row->id_user; ?>" class="btn btn-danger">Hapus</a>
    </td>
</tr>
<?php }
}?>