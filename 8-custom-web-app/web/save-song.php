<?php

include('library.php');

$connection = get_database_connection();

$sql = '';

$title = $connection->real_escape_string($title);
$artist = $connection->real_escape_string($artist);
$year = $connection->real_escape_string($year);
$link = $connection->real_escape_string($link);
$intendedAlbum = $connection->real_escape_string($intendedAlbum);
$featuredArtist = $connection->real_escape_string($featuredArtist);
$era = $connection->real_escape_string($era);
$producer = $connection->real_escape_string($producer);
$genre = $connection->real_escape_string($genre);


if ($year == '')
{
    $year = 'NULL';
}

if (isset($id) && $id != '')
{
    $sql =<<<SQL
    UPDATE songs
       SET song_title = '$title',
           song_artist = '$artist',
           song_year = $year,
           song_link = '$link',
           song_int_album = '$intendedAlbum',
           song_featured_artist = '$featuredArtist',
           song_era = '$era',
           song_producer = '$producer',
           song_rap_subg = '$genre'
     WHERE song_id = $id
    SQL;
}
else
{
    $sql =<<<SQL
    INSERT INTO songs (song_title, song_artist, song_year, song_link, song_int_album, song_featured_artist, song_era, song_producer, song_rap_subg)
    VALUES ('$title', '$artist', $year, '$link', '$intendedAlbum', '$featuredArtist', '$era', '$producer', '$genre')
    SQL;
}

$connection->query($sql);

header('Location: index.php');