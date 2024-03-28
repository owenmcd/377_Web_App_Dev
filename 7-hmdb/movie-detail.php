<?php

$title = '';
$year = '';
$genre = '';
$tomatoes = '';
$imdb_id = '';

if (isset($id))
{
    $connection = get_database_connection();

    $sql =<<<SQL
    SELECT mov_id, mov_title, mov_year, mov_genre, mov_tomatoes, mov_imdb_id
      FROM movies
      WHERE mov_id = $id
    SQL;

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    $title = $row['mov_title'];
    $year = $row['mov_year'];
    $genre = $row['mov_genre'];
    $tomatoes = $row['mov_tomatoes'];
    $imdb_id = $row['mov_imdb_id'];
}

?>
<form action="save-movie.php">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo isset($id) ? $id : '' ?>" />

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>" />
    </div>

    <div class="mb-3">
        <label for="Year" class="form-label">Year</label>
        <input type="number" class="form-control" id="year" name="year" value="<?php echo $year ?>" />
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <select class="form-select" name="genre">
            <option <?php echo $genre == 'Action' ? 'selected' : '' ?>>Action</option>
            <option <?php echo $genre == 'Comedy' ? 'selected' : '' ?>>Comedy</option>
            <option <?php echo $genre == 'Drama' ? 'selected' : '' ?>>Drama</option>
            <option <?php echo $genre == 'Family' ? 'selected' : '' ?>>Family</option>
            <option <?php echo $genre == 'Horror' ? 'selected' : '' ?>>Horror</option>
            <option <?php echo $genre == 'Sci-Fi' ? 'selected' : '' ?>>Sci-Fi</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Tomatoes" class="form-label">Rotten Tomatoes</label>
        <input type="number" class="form-control" id="tomatoes" name="tomatoes" value="<?php echo $tomatoes ?>" />
    </div>

    <div class="mb-3">
        <label for="imdb_id" class="form-label">iMDB ID</label>
        <input type="text" class="form-control" id="imdb_id" name="imdb_id" value="<?php echo $imdb_id ?>" />
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=movie-list" class="btn btn-secondary" role="button" aria-disabled="true">Cancel</a>
<?php if (isset($id)) { ?>
    <button type="button" class="btn btn-danger" onclick="deleteMovie()">Delete</button>
    <script>

    function deleteMovie() {
        if (confirm('Are you sure you want to delete this movie?')) {
            location.href = 'delete-movie.php?id=<?php echo isset($id) ? $id : '' ?>';
        }
    }

    </script>
<?php } ?>
</form>