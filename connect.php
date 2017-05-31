
<?php
$link = mysqli_connect("localhost", "bokai_admin1", "B.kqsara", "bokai_worldCityData");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$sql = "SELECT * FROM country";

$result = mysqli_query($link, $sql);

echo "<br>" . mysqli_num_rows($result) . "<br>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. "  Population: " . $row["Population"]. "  Life Expectancy: " . $row["LifeExpectancy"] . "<br>";
    }
} else {
    echo "0 result";
}

mysqli_close($link);
?>

