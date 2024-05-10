<nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">Highscores</a>
        
      </div>
    </nav>



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Username</th>
            <th>score</th>
        </tr>
    </thead>

    <tbody>
    
<?php

function get_database_connection()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'casino';

    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error)
    {
        die('Connection failed: ' . $connection->connect_error);
    }

    return $connection;
}

$connection = get_database_connection();

$sql = "SELECT * FROM highscore ";

$sql .= "ORDER BY score DESC";


$result = $connection->query($sql);
while ($row = $result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>';
    
    echo '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['score'] . '</td>';
    echo '<td>';
    echo '</td>';
    echo '</tr>';
}

?>
    </tbody>
</table>

