    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">uhhdb: The Unreleased Hip-Hop Database</a>
        <form action = "index.php?content=song-list" class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name = "title">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title (* some version has been released)</th>
            <th>Artist</th>
            <th>Year</th>
            <th>Link</th>
            <th>Intended Album</th>
            <th>Featured Artists</th>
            <th>Era</th>
            <th>Producer</th>
            <th>Rap subgenre</th>
        </tr>
    </thead>

    <tbody>
<?php

$connection = get_database_connection();

$sql = "SELECT * FROM songs ";
if(isset($title)){
    $sql .= "WHERE song_title LIKE '%$title%' ";
}
$sql .= "ORDER BY song_title, song_year";


$result = $connection->query($sql);
while ($row = $result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>';
    echo '<a href="index.php?content=song-detail&id=' . $row['song_id'] . '">' . $row['song_title'] . '</a>';
    echo '</td>';
    echo '<td>' . $row['song_artist'] . '</td>';
    echo '<td>' . $row['song_year'] . '</td>';
    echo '<td><a href="' . $row['song_link'] . '"><i class="bi bi-youtube"></i></a></td>';
    echo '<td>' . $row['song_int_album'] . '</td>';
    echo '<td>' . $row['song_featured_artist'] . '</td>';
    echo '<td>' . $row['song_era'] . '</td>';
    echo '<td>' . $row['song_producer'] . '</td>';
    echo '<td>' . $row['song_rap_subg'] . '</td>';
    echo '<td>';
    echo '</td>';
    echo '</tr>';
}

?>
    </tbody>
</table>

<a href="index.php?content=song-detail" class="btn btn-primary" role="button" aria-disabled="true">Add a Song</a>