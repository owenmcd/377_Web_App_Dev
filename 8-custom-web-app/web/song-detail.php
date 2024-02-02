<?php

$title = '';
$artist = '';
$year = '';
$link = '';
$intendedAlbum = '';
$featuredArtist = '';

if (isset($id))
{
    $connection = get_database_connection();

    $sql =<<<SQL
    SELECT song_id, song_title, song_artist, song_year, song_link, song_int_album, song_featured_artist, song_era, song_producer, song_rap_subg
      FROM songs
      WHERE song_id = $id
    SQL;

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    $title = $row['song_title'];
    $artist = $row['song_artist'];
    $year = $row['song_year'];
    $link = $row['song_link'];
    $intendedAlbum = $row['song_int_album'];
    $featuredArtist = $row['song_featured_artist'];
    $era = $row['song_era'];
    $producer = $row['song_producer'];
    $genre = $row['song_rap_subg'];
}

?>
<form action="save-song.php" onsubmit="return validate()">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo isset($id) ? $id : '' ?>" />

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>" />
    </div>

    <div class="mb-3">
        <label for="artist" class="form-label">Artist</label>
        <input type="text" class="form-control" id="artist" name="artist" value="<?php echo $artist ?>" />
    </div>

    <div class="mb-3">
        <label for="Year" class="form-label">Year</label>
        <input type="number" class="form-control" id="year" name="year" value="<?php echo $year ?>" />
    </div>

    <div class="mb-3">
        <label for="Link" class="form-label">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="<?php echo $link ?>" />
    </div>

    <div class="mb-3">
        <label for="intendedAlbum" class="form-label">Intended Album</label>
        <input type="text" class="form-control" id="intendedAlbum" name="intendedAlbum" value="<?php echo $intendedAlbum ?>" />
    </div>

    <div class="mb-3">
        <label for="featuredArtist" class="form-label">Featured Artist</label>
        <input type="text" class="form-control" id="featuredArtist" name="featuredArtist" value="<?php echo $featuredArtist ?>" />
    </div>

    <div class="mb-3">
        <label for="era" class="form-label">Era</label>
        <input type="text" class="form-control" id="era" name="era" value="<?php echo $era ?>" />
    </div>

    <div class="mb-3">
        <label for="producer" class="form-label">Producer</label>
        <input type="text" class="form-control" id="producer" name="producer" value="<?php echo $producer ?>" />
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">Rap subgenre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genre ?>" />
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=song-list" class="btn btn-secondary" role="button" aria-disabled="true">Cancel</a>
<?php if (isset($id)) { ?>
    <button type="button" class="btn btn-danger" onclick="deleteSong()">Delete</button>
    <script>

    function deleteSong() {
        if (confirm('Are you sure you want to delete this song?')) {
            location.href = 'delete-song.php?id=<?php echo isset($id) ? $id : '' ?>';
        }
    }

    </script>
<?php } ?>
    <script>
    
    function validate(){
        if (document.getElementById('title').value == '') {
            alert('Missing title');
            return false;
        } else if (document.getElementById('artist').value == ''){
            alert('Missing artist');
            return false;
        }
        return true;
    }

    </script>
</form>