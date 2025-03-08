<?php
$counterFile = 'counter1.csv';

// Check if the counter file exists, if not create it and initialize the counter
if (!file_exists($counterFile)) {
    $file = fopen($counterFile, 'w');
    fputcsv($file, [0]);
    fclose($file);
}

// Read the current counter value from the CSV file
$file = fopen($counterFile, 'r');
$counter = (int)fgetcsv($file)[0];
fclose($file);

// Increment the counter
$counter++;

// Write the new counter value back to the CSV file
$file = fopen($counterFile, 'w');
fputcsv($file, [$counter]);
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Worker 1 Hit Counter</title>
</head>
<body>
    <p>This is worker 1</p>
    <p>Hit counter: <?php echo $counter; ?></p>
</body>
</html>