<?php

require_once 'connect.php';

      $tp = $_POST['tyt_pasty'];
      $trp = $_POST['tresc_pasty'];
      $numer = $_POST['dzien'];

    //  $tp=htmlentities($tp, ENT_QUOTES, "UTF-8");
    //  $trp=htmlentities($trp, ENT_QUOTES, "UTF-8");

$conn = @new mysqli($host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE baza_past SET tytul = '$tp', tresc= '$trp' WHERE id = $numer";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo '<br/><br/><a href ="addNew.php">Powrót na stronę główną</a>';
} else {
    echo "Error updating record: " . $conn->error;
    echo '<br/><br/><a href ="dodaj.php">Powrót na stronę główną</a>';
}

$conn->close();

?>
