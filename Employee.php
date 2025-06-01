<body bgcolor="pink">
   <font size="8" color="white">
      <?php
        session_abort();
        $_SESSION['eno']=$_POST['eno'];
        $_SESSION['enm']=$_POST['enm'];
        $_SESSION['eadd']=$_POST['eadd'];
      ?>
      <html>
         <body>
            <form action="Employee.html" method="post">
               <pre>
                  <center>
                     <h2>Enter Earnings of Employee :</h2>
                     Basic : <input type="text" name="e1">
                     DA    : <input type="text" name="e2">
                     HRA   : <input type="text" name="e3">
                  </center>
               </pre>
            </form>
         </body>
      </html>
   </font>
</body>

<body bgcolor="gray">
   <font size="8" color="white">
      <?php
        session_start();
        $e1=$_POST['e1'];
        $e2=$_POST['e2'];
        $e3=$_POST['e3'];
        echo "<h3>Employee Details</h3>";
        echo "Emp No : ".$_SESSION['eno']."<br>";
        echo "Emp Name : ".$_SESSION['enm']."<br>";
        echo "Address : ".$_SESSION['eadd']."<br><br>";
        echo "Basic : ".$e1."<br>";
        echo "DA : ".$e2."<br>";
        echo "HRA : ".$e3."<br>";
        $total=$e1+$e2+$e3;
        echo "<h2>Total of Earnings is : ".$total."</h2>";
      ?>
   </font>
</body>