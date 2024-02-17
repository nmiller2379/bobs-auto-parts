<?php
// Using the $_POST superglobal to access the form data, creating short variable names. This code creates three variables, $tireqty, $oilqty, and $sparkqty, and assigns them the values from the form.
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
    // Using echo to print statements to the browser
        echo "<p>Order processed at ";
        // Using the date function to print the current date and time
        echo date('g:i A T, F jS, Y.');
        echo "</p>";
        echo "<p>Your order is as follows: </p>";
        echo htmlspecialchars($tireqty) . ' tires<br />';
        echo htmlspecialchars($oilqty) . ' bottles of oil<br />';
        echo htmlspecialchars($sparkqty) . ' spark plugs<br />';
        ?>
</body>
</html>