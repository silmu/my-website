<!DOCTYPE>
<html>
    <head>

    <title>Order a drink</title>
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
    <p><a href="../index.php"> Home page </a></p>

    <form action="printorder.php" method="get">
    Select your drink: <input type="radio" value="coffee" name="drink" checked>coffee
    <input type="radio" value="tea" name="drink">tea
    <br>
    With sugar: 
    <select name="sugar">
    <option value=1 selected>yes</option>
    <option value=2>no</option>
    </select>
    <br>
    <input type="submit" value="Send">     
    </form>
    
    </body>
</html>