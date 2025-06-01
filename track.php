<!--Assignment - 1
Set A
1)Write a PHP script to keep track of number of times the web page has been
access.[Use session and cookies]-->

<?php
session_start();
if(!isset($_SESSION['visit_count']))
{
   $_SESSION['visit_count']=1;
}
else
{
   $_SESSION['visit_count']++;
}
if(isset($_COOKIE['total_visits']))
{
   $total_visits=$_COOKIE['total_visits'];
}
else
{
   $total_visits=0;
}
$total_visits++;
setcookie('total_visits',$total_visits,time()+(86400*30),"/");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" cntent="width=device-width,initial-scale=1.0">
      <title>Page Visit Tracker</title>
   </head>
   <body>
      <h1>Welcome to the Page!</h1>
      <p>This is your visit number <?php echo $_SESSION['visit_count']; ?> during this session.</p>
      <p>You have visited this page a total of <?php echo $total_visits; ?> times.</p>
   </body>
</html>