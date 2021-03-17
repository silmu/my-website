<?php
$v = 1;
if (isset($_COOKIE["visits"])) {
  $v = $_COOKIE["visits"] + 1;
}
setcookie("visits", $v, time() + 3600);
?>

<!DOCTYPE html>

<html>

<head>
  
  <meta charset="utf-8">

  <title>My website</title>
  
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- All the content -->
  <!--Do the exercises here-->
  <h1 id="hello">Hello</h1>
<h2 class="second_header">This is my website</h2>

<p><a href="positions.html"> Positioning practice </a></p>

<p><a href="forms/feedback-form.html"> Feedback form practice </a></p>
<p><a href="forms/address-form.html"> Address form practice </a></p>
<p><a href="forms/interests-form.php"> Interests form practice </a></p>
<p><a href="forms/order-a-drink.php"> Order a drink </a></p>
<p><a href="forms/guestbook.html"> Send a message </a></p>
<p><a href="forms/chat/form.php"> Guestbook </a></p>

<h3>The learning goals for this course are in essence to</h3>
<ul>
  <li class="list">Learn HTML</li>
  <ul>
    <li>Understand what HTML is and what it's used for</li>
    <li>Know what an HTML element is and what it consists of</li>
    <li>Know what an HTML document consists of</li>
  </ul>
  <li class="list">Learn CSS</li>
  <ul>
    <li>Know what CSS is and what it is used for</li>
    <li>Know how to use the most common features of CSS</li>
  </ul>
</ul>
  <p><b>Here</b> I write about things that I find interesting</p>
  <p>Such as learning <i>HTML</i></p>
  <img src="assets/Ipad_wallpaper_misori.art.jpg" 
  alt="Stars and clouds" height="430" width="430"/>
  <p><i>"Stars and clouds" by @misori.art (2019)</i></p>


    <p>
      You have opened this page
      <strong><?= $v ?></strong> times recently!
    </p>

    <p>
      <a href="visits.php">Reload page</a>.
    </p>
 
</body>

</html>
