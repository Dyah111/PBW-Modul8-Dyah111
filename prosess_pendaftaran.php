<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Alamat: " . $_POST["alamat"] . "<br>";

} else {
    echo "<h2>Form not submitted</h2>";
}
?>