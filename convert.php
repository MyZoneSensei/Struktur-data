<!-- convert.php -->
<?php
function convertTemperature($temperature, $from, $to) {
    $celsius;

    // Convert from the initial unit to Celsius
    switch ($from) {
        case "Celsius":
            $celsius = $temperature;
            break;
        case "Fahrenheit":
            $celsius = ($temperature - 32) * 5/9;
            break;
        case "Kelvin":
            $celsius = $temperature - 273.15;
            break;
        case "Reaumur":
            $celsius = $temperature * 5/4;
            break;
        default:
            return "Invalid unit";
    }

    // Convert from Celsius to the target unit
    switch ($to) {
        case "Celsius":
            return $celsius;
        case "Fahrenheit":
            return ($celsius * 9/5) + 32;
        case "Kelvin":
            return $celsius + 273.15;
        case "Reaumur":
            return $celsius * 4/5;
        default:
            return "Invalid unit";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    $result = convertTemperature($temperature, $from, $to);
    $message = "$temperature°$from is equal to " . round($result, 2) . "°$to";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Conversion Result</h1>
        <p><?php echo $message; ?></p>
        <a href="index.php">Convert Another</a>
    </div>
</body>
</html>
