<?php 







$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");

$data = $results->fetch_assoc();

var_dump($data);


echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, pass) VALUES('$username','$password')";
    $conn->query($sql);
}


echo "<formmethod = 'POST'>";

echo "<label>Lietotajvards:<input name='username' value = 'username'/></label><br>";

echo "<label> Parole: <input name='password' type='password' /></label><br>";

echo "<input type='submit' value='register'";

echo "</form>";

$mas = [6,8,10];

$assoc = ["vecums" => 6, "videja_atzime" => 8, "ids" => 10];

