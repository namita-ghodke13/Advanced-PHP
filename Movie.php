<?php
$dom=new DOMDocument();
$dom->load("Movie.xml");
echo "<h2>Title of Movie</h2>";
$MovieTitle=$dom->getElementsByTagName("MovieTitle");
$ActorName=$dom->getElementsByTagName("ActorName");
foreach($MovieTitle as $mt)
{
   echo "<b>$mt->textContent</b><br><br>";
}
echo "<h2>Movie Actor Name's</h2>";
foreach($ActorName as $an)
{
   echo "<b>$an->textContent</b><br><br>";
}
?>