<?php

include('library.php');

$connection = get_database_connection();

$sql = '';

$name = $connection->real_escape_string($name);
$score = $connection->real_escape_string($score);



$sql =<<<SQL
INSERT INTO highscore (username, score)
VALUES ('$name', '$score')
SQL;



$connection->query($sql);

header('Location: high-scores.php');