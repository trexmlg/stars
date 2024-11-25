<?php 

$x = 4;

echo "<p>$x</p>";

echo "strada";

$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");

$data = $results->fetch_all();

var_dump($data);

echo "<form>";

echo "<input name='username'/>";

echo "<input name='password' type='password'/>";

echo "<input type='submit' value='register'";

echo "</form>";