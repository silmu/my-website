<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Feedback preview</title>
		</head>
		<body>
			<h1>Feedback preview</h1>
			<p><a href="index.php"> Home page </a></p>
			<p>
				Your name is <?php echo $_POST["user_name"];?><br>
				Your mail is <?php echo $_POST["user_email"];?><br>
				Your message is <?php echo $_POST["user_message"];?><br>
			</p>
		</body>
	</html>