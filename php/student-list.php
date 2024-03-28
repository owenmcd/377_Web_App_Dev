<!DOCTYPE html>
<html>
    <head>
        <title>Sample School District</title>
    </head>

    <body>
        <h1>Welcome to Sample School District</h1>
        <h2>Student Enrollment</h2>
        <p>
            Filter by last name starting with
            <a href="student-list.php?last_name=A">A</a>
            <a href="student-list.php?last_name=B">B</a>
            <a href="student-list.php?last_name=C">C</a>

            Filter by year
            <a href="student-list.php?yog=2023">2023</a>
        </p>
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>YOG</th>
            </tr>
<?php
for ($i = 0; $i < 26; $i++)
{
    $letter = chr($i);
    echo "<a href='student-list.php?last_name=$letter'>$letter</a>";
}



    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "sis";

    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error)
    {
        die("connection failed: " . $connection->connect.error);
    }

    extract($_REQUEST);

    $sql = "SELECT stu_first_name, stu_last_name, stu_yog FROM students";

    if (isset($last_name))
    {
        $sql .= " WHERE stu_last_name LIKE '$last_name%' ";
    }
    
    $sql .= " ORDER BY stu_last_name, stu_first_name";
    
    echo $sql;
    $result = $connection->query($sql);
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['stu_first_name'] . "</td>";
        echo "<td>" . $row['stu_last_name'] . "</td>";
        echo "<td>" . $row['stu_yog'] . "</td>";
        echo "</tr>";

    }
    ?>
    
        </table>
    </body>

</html>