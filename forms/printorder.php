
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Order</title>
		</head>
		<body>
<p><a href="../index.php"> Home page </a></p>
<?php
    $drink = ($_GET["drink"]);
    $sugar = ($_GET["sugar"]);
    if($drink == "coffee"){
        if($sugar == 1){
            echo '<img src="https://media.istockphoto.com/photos/cup-of-coffee-latte-isolated-on-white-background-with-clipping-path-picture-id1152767411?k=6&m=1152767411&s=170667a&w=0&h=KCxpgc8ruEAeZJxRThogJAfITTaBSNbRIBhB8v1lnkw=" alt="Coffee with sugar" height="430" width="460"/>';
            echo 'Coffee with sugar!';
        }
        if($sugar == 2){
            echo '<img src="https://i.dietdoctor.com/wp-content/uploads/2016/01/coffee-09-1600x1046.jpg" alt="Coffee without sugar" height="430" width="580"/>';
            echo 'Coffee without sugar.';
        }
    }
    if($drink == "tea"){
        if($sugar == 1){
            echo '<img src="https://cdn-prod.medicalnewstoday.com/content/images/articles/322/322624/herbal-tea-for-constipation.jpg" alt="Tea with sugar" height="430" width="580"/>';
            echo 'Tea with sugar!';
        }
        if($sugar == 2){
            echo '<img src="https://im01.itaiwantrade.com/1656b8a4-d07d-4db8-8de5-6da36be01272/tea_in_cup.JPG" alt="Tea without sugar" height="430" width="500"/>';
            echo 'Tea without sugar.';
        }
    }
?>
    </body>
</html>