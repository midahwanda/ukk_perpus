<h1 class="mt-4"> Tambah Buku</h1>
<div class="card">
<a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data </a>
<div class ="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
<th>No</th>
<th>Nama kategori</th>
<th>judul_buku</th>
<th>penulis</th>
<th>penerbit</th>
<th>tahun_terbit</th>
<th>deskripsi</th>
</tr>
<?php
$i =1;
$query = mysqli_query ($koneksi, "SELECT*FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
while($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $data['kategori']; ?> </td>
    <td><?php echo $data['judul_buku']; ?> </td>
    <td><?php echo $data['penulis']; ?> </td>
    <td><?php echo $data['penerbit']; ?> </td>
    <td><?php echo $data['tahun_terbit']; ?> </td>
    <td><?php echo $data['deskripsi']; ?> </td>

    <td>
    <a href="?page=buku_ubah&&id=<?php echo $data ['id_buku']; ?>" class="btn btn-info">Ubah</a>
    <a onclick="return confirm ('Apakah Anda Yakin Menghapus Data Ini ??');"href="?page=buku_hapus&&id=<?php echo $data ['id_buku']; ?>" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    <?php
}
?>
</table>
