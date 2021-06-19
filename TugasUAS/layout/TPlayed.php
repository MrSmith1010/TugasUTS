<?php
$artist = new App\Artist();
$album = new App\Album();
$track = new App\Track();

$rowsTrack = $track->tampil();
$rowsAlbum = $album->tampil();
$rows = $artist->tampil();
?>
<div class="container">
    <div class="card" style="margin-top: 20px; height: 500px;">
        <div class="card-body bg-light">
            <h2>Add Data</h2>
            <hr>
            <form method="POST" action="proses.php">
                <div class="form-group">
                    <label>Track Name</label>
                    <select class="form-control custom-select-sm col-3" name="track_id">
                        <option selected>Choose Played</option>
                        <?php foreach ($rowsTrack as $y) { ?>
                            <option value="<?php echo $y['track_id']; ?>"><?php echo $y['track_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Artist Name</label>
                    <select class="form-control custom-select-sm col-3" name="artist_id">
                        <option selected>Choose Artist</option>
                        <?php foreach ($rows as $x) { ?>
                            <option value="<?php echo $x['artist_id']; ?>"><?php echo $x['artist_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Album Name</label>
                    <select class="form-control custom-select-sm col-3" name="album_id">
                        <option selected>Choose Album</option>
                        <?php foreach ($rowsAlbum as $z) { ?>
                            <option value="<?php echo $z['album_id']; ?>"><?php echo $z['album_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success" name="p_input">Save</button>
            </form>
        </div>
    </div>
</div>