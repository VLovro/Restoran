<?php
$host = 'localhost';
$dbname = 'bazarezervacija';
$username = 'root';
$password = '';

$error = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $brojOsoba = $_POST['brojOsoba'];
        $datetime = $_POST['datetime'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // Check if the selected datetime is already reserved
        $query = "SELECT COUNT(*) FROM rezervacije WHERE datum = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$datetime]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $error = "Odabrani termin je zauzet. Molimo vas odaberite drugi termin.";
            include 'rezervacije.php'; // Include the form page to display the error message
            exit(); // Stop execution to prevent redirection
        } else {
            $query = "INSERT INTO rezervacije (firstName, brojOsoba, datum, phone, email) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$firstName, $brojOsoba, $datetime, $phone, $email]);

            $query = "SELECT * FROM rezervacije";
            $stmt = $pdo->query($query);
            $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><reservations/>');

            foreach ($reservations as $reservation) {
                $reservationEl = $xml->addChild('reservation');
                foreach ($reservation as $key => $value) {
                    $reservationEl->addChild($key, $value);
                }
            }

            $formattedXml = $xml->asXML();
            $formattedXml = str_replace("><", ">\n<", $formattedXml);

            // Save the XML to a file
            file_put_contents('database.xml', $formattedXml);

            header("Location: index.php");
            exit();
        }
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
