<!DOCTYPE HTML>
    <html>
      <head>
        <title>Address form preview</title>
        <style>
            form {
                /* Center the form on the page */
                margin: 0 auto;
                width: 400px;
                /* Form outline */
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
                }
        </style>
      </head>
      <body>
        <h1>Personal info preview</h1>
        <p><a href="../index.php"> Home page </a></p>
        <p>
           <form action="../index.php" method="post">
                Name: <?php echo $_POST["name"]; ?><br>
    
                Address: <?php
                echo $_POST["address"] . ", " .
                    $_POST["postcode"] . " " . $_POST["region"];
                ?><br>
                Email: <?php echo $_POST["email"]; ?>
                <br>
                <br>
                <button type="submit" value="Submit">Correct</button>
            </form>
        </p>
      </body>
    </html>