<p><a href="../../index.php"> Home page </a></p>
<form action="customerregistry.php" method="get">
Customer number: <input TYPE="text" name="customernumber"><br>
Name: <input TYPE="text" name="name"><br>
Address: <input TYPE="text" name="address"><br>
<input type="hidden" name="mode" value="save">
<input type="submit" value="Save">
</form>
<form action="customerregistry.php" method="get">
Customer number: <input TYPE="text" name="customernumber"><br>
Name: <input TYPE="text" name="name"><br>
Address: <input TYPE="text" name="address"><br>
<input type="hidden" name="mode" value="delete">
<input type="submit" value="Delete">
</form>
<form action="customerregistry.php" method="get">
Customer number: <input TYPE="text" name="customernumber"><br>
Name: <input TYPE="text" name="name"><br>
Address: <input TYPE="text" name="address"><br>
<input type="hidden" name="mode" value="find">
<input type="submit" value="Find">
</form>
<?php
$file = 'customerregistry.txt';
$handle = fopen($file, 'r');
$readfile = trim(file_get_contents($file));
$lines = explode("\n", $readfile);

foreach($lines as $newline){
    $line = explode("##", $newline);
    echo "Customer: $line[1], $line[2]\n<br>";
}
fclose($handle);
?>
