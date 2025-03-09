<?php
$counterFile = 'counter1.csv';

//setup the counterfile either it does or does not exist
if (!file_exists($counterFile)) {
    $file = fopen($counterFile, 'w');
    fputcsv($file, [0]);
    fclose($file);
}

//read the value
$file = fopen($counterFile, 'r');
$counter = (int)fgetcsv($file)[0];
fclose($file);

//add one to counter
$counter++;

//write counter back to file
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