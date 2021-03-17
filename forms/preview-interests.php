<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Feedback preview</title>
		</head>
		<body>
    <p><a href="index.php"> Home page </a></p>
    <p>
      Your interests are:
    </p>
    <ul>
      <?php
        $count = 5;
        $i = 1;
        while ($i <= $count) {
          echo "<li>" . $_POST["interest$i"] . "</li>\n";
          $i++;
        }
      ?>

    </ul>
  </body>
</html>