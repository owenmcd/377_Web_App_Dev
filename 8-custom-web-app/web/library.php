<?php

extract($_REQUEST);

if (!isset($content) || $content == '' || strpos($content, '://') || !file_exists($content . '.php'))
{
    $content = 'song-list';
}

function get_database_connection()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'uhhdb';

    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error)
    {
        die('Connection failed: ' . $connection->connect_error);
    }

    return $connection;
}