<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>QR Code Generator</h1>
        </header>
        <div class="form">
            <input type="text" placeholder="Select Supplier">
            <input type="text" placeholder="Material Type">
            <input type="text" placeholder="Material Name">
            <input type="text" placeholder="Unit">
            <input type="text" placeholder="Item Cost">
            <button>Generate QR Code</button>
        </div>
        <div class="qr-code">
            <img src="qr-code.png" alt="qr-code">
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>