<?php
$xml=simplexml_load_file('book.xml');
$data=$xml->book;
foreach($data as $showdata)
{
   foreach($showdata->bookno as $bookno)
   {
      foreach($showdata->bookname as $bookname)
      {
         foreach($showdata->authorname as $authorname)
         {
            foreach($showdata->price as $price)
            {
               foreach($showdata->year as $year)
               {
                  echo "<br>Book No : ".$bookno,"<br>";
                  echo "Book Name : ".$bookname,"<br>";
                  echo "Author Name : ".$authorname,"<br>";
                  echo "Price : ".$price,"<br>";
                  echo "Year : ".$year,"<br>";
               }
            }
         }
      }
   }
}
?>