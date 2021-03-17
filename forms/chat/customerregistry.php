<p><a href="../../index.php"> Home page </a></p>
<?php
	$file = 'customerregistry.txt';
	$mode = strip_tags($_GET['mode']);
	$id = strip_tags($_GET['customernumber']);
	$name = strip_tags($_GET['name']);
	$address = strip_tags($_GET['address']);

	if($mode == "save"){
		$handle = fopen($file, 'a');
		$newcustomer = "$id##$name##$address\n";
		fwrite($handle, $newcustomer);
		fclose($handle);
	} else if ($mode == "delete"){
		$readfile = trim(file_get_contents($file));
		$lines = explode("\n", $readfile);
		$newinfo = "";
		
		foreach($lines as $newline){
			$line = explode("##", $newline);
			if($line[0] == $id){
				continue;
			}
			$newinfo .= $newline;
		}
			
		$handle = fopen($file, 'w');
		fwrite($handle, $newinfo);
		fclose($handle);
	} else {
		$handle = fopen($file, 'r');
		$readfile = trim(file_get_contents($file));
		$lines = explode("\n", $readfile);


		foreach($lines as $newline){
			$line = explode("##", $newline);

			if($line[0] == $id){
				echo "Customer: $line[1], $line[2]\n";
			}
		}	
	}

	$file = 'customerregistry.txt';
	$handle = fopen($file, 'r');
	$readfile = trim(file_get_contents($file));
	$lines = explode("\n", $readfile);
	echo "\n";
	foreach($lines as $newline){
		$line = explode("##", $newline);
		echo "Customer: $line[1], $line[2]\n<br>";
	}
	fclose($handle);
		
?>