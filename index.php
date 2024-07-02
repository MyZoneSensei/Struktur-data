<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <form action="convert.php" method="post">
            <label for="temperature">Temperature:</label>
            <input type="number" id="temperature" name="temperature" required>
            <label for="from">Convert from:</label>
            <select id="from" name="from">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
                <option value="Reaumur">Reaumur</option>
            </select>
            <label for="to">Convert to:</label>
            <select id="to" name="to">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
                <option value="Reaumur">Reaumur</option>
            </select>
            <button type="submit">Convert</button>
        </form>
    </div>
</body>
</html>
