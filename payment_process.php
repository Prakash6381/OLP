<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve payment information from the form
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Process payment here (e.g., validate card, charge amount, etc.)

    // Redirect user to thank you page after successful payment
    header("Location: thank_you.php");
    exit();
}
?>
