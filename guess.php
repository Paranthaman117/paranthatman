<html>
<head>
<title>Guessing Game for Paranthaman Gnanasekar  b4f6c389</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
$correctnumber=56; 
if(isset($_GET['guess']))
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<56)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>56)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==56)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>
</p>
</body>
</html>
  
