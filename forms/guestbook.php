<p><a href="../index.php"> Home page </a></p>
<?php
$message = trim ($_GET["msg"]);
$sender = trim ($_GET["name"]);

if($message == "" || $sender == ""){
    echo "You didn't fill all fields!";
} else{
    echo "$sender: $message";
}
?>


