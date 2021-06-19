<?php
$z = new App\Artist();
$rows = $z->tampil();

if (isset($_GET['id'])) {
    $z->hapus($_GET['id']);
    header('location: index.php?page=artist');
}
?>
<div class="container-fluid">
    <div class="card" style="margin-top: 20px; height: 500px;">
        <div class="card-body bg-light">
            <h2>Artist</h2>
            <a href="index.php?page=TArtist" class="btn btn-sm btn-outline-success mb-3">Add Data</a>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Artist Id</th>
                        <th>Artist Name</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($rows as $x) { ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?>.</td>
                        <td><?php echo $x['artist_id']; ?></td>
                        <td><?php echo $x['artist_name']; ?></td>
                        <td class="text-center">
                            <a href="index.php?page=EArtist&id=<?php echo $x['artist_id']; ?>" class="badge badge-warning">Edit</a>
                            <a href="index.php?page=artist&id=<?php echo $x['artist_id']; ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>