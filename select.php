<?php
    $con = mysqli_connect("localhost","root","","dbharry");
    if(!$con)
    {
       die("Sorry We Failed To Connection:".mysqli_connect_error());
    }
    else
    {
      echo"Connection Was Successfully<br>";
    }
   $sql="SELECT * FROM `phptrip`";
   $result=mysqli_query($con,$sql);
   $num=mysqli_num_rows($result);
   echo $num;
   echo "<br>";
   if($num > 0)
   {
       while($row=mysqli_fetch_assoc($result))
        {
          echo var_dump($row)."<br>";
        }
    }
?>
