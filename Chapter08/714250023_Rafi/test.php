<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>test php</title>
</head>
<body>
    
<h2>The PHP is_nan() Function</h2>

<?php
// An invalid calculation return a NaN value
$x = acos(8);
var_dump($x);

echo "<br>";

// Check if value is not a number (NaN)
var_dump(is_nan($x));
?>  
</body>
</html>