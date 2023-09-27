<?php
$host = 'localhost'; // Hostname
$db = ''; // Datenbank
$user = ''; // Benutzername
$pass = ''; // Passwort

try {
   $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
   echo "Datenbankverbindung erfolgreich hergestellt!";
} catch (PDOException $e) {
   die("Fehler bei der Datenbankverbindung: " . $e->getMessage());
}
?>