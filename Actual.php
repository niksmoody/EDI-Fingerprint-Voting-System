<!DOCTYPE html>
<html>
    <head>
        <title>
            INDEX
        </title>
        <style>
        #mybutton1 {
        position: fixed;
        bottom: 500px;
        right: 600px;
        }

  input[type=submit] {
    border: 0;
    line-height: 2.5;
    padding: 0 10px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background: #0A2558;
    /* background-color: rgb(52, 55, 233);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0)); */
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}
</style>
       
       <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div  style="background: black; color:aliceblue; text-align:center; "><h2>VOTE for your Candidate:</h2></div>
        <div class="container">

<form action="Actual.php" method ="post" text-align ="center">
 <img src="images/Soham.jpeg" width="280" height="250"/>
 <img src="images/nikita.jpg" width="280" height="250"/>
 <img src="images/vedant.jpg" width="280" height="250"/>

<input type="submit" name="kitten1" value="Soham" />

<input type="submit" name="kitten2" value="Nikita" />
 
<input type="submit" name="kitten3" value="Vedant" />



</form>
<?php

$con =  mysqli_connect("localhost","root","", "votedb");
 if (isset($_POST['kitten1']))
 {
     $vote_kitten1 = "update candidatetb set kitten1 = kitten1+1";
     $run_kitten1= mysqli_query($con,$vote_kitten1);
     if($run_kitten1){
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Vote Submitted.');\n";
        echo "window.location='Redirecting.php'";
        echo "</script>";
     }
 }

 if (isset($_POST['kitten2']))
 {
     $vote_kitten2 = "update candidatetb set kitten2 = kitten2+1";
     $run_kitten2= mysqli_query($con,$vote_kitten2);
     if($run_kitten2){
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Vote Submitted.');\n";
        echo "window.location='Redirecting2.php'";
        echo "</script>";
     }
 }

 if (isset($_POST['kitten3']))
 {
     $vote_kitten3 = "update candidatetb set kitten3 = kitten3+1";
     $run_kitten3= mysqli_query($con,$vote_kitten3);
     if($run_kitten3){
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Vote Submitted.');\n";
        echo "window.location='Redirecting3.php'";
        echo "</script>";
     }
 }
 //new
 if(isset($_GET['results']))
 {
     $get_votes="select * from candidatetb";
     $run_votes = mysqli_query($con , $get_votes);

    $row_votes = mysqli_fetch_array($run_votes);

       $kitten1 = $row_votes['kitten1'];
       $kitten2 = $row_votes['kitten2'];
       $kitten3 = $row_votes['kitten3'];

       $count = $kitten1 + $kitten2 + $kitten3;
       $per_kitten1 = round($kitten1*100/$count). "%"; 
       $per_kitten2 = round($kitten2*100/$count). "%"; 
       $per_kitten3 = round($kitten3*100/$count). "%"; 


echo "<div style='background : orange' paddding: 10px; test-align:center;>  
<center>
<h2>update result:</h2>
<p style='background:black; color:white; padding: 10px; width:500px;>
<b> kitten1 :</b>$kitten1 ($per_kitten1)
</center>
</div>
</P>";

//echo "<div style='background : orange' paddding: 10px; test-align:center;>  
//<center>
//<h2>update result:</h2>
//<p style='background:black; color:white; padding: 10px; width:500px;>
//<b> kitten2 :</b>$kitten2 ($per_kitten2)
//</center>
//</div>
//</P>";

//echo "<div style='background : orange' paddding: 10px; test-align:center;>  
//<center>
//<h2>update result:</h2>
//<p style='background:black; color:white; padding: 10px; width:500px;>
//<b> kitten3 :</b>$kitten3 ($per_kitten3)
//</center>
//</div>
//</P>";

echo "<p style='background:black; color:white; padding: 10px; width:500px;>
<b> kitten1 :</b>$kitten1 ($per_kitten2)
</P>";

echo "<p style='background:black; color:white; padding: 10px; width:500px;>
<b> kitten1 :</b>$kitten3 ($per_kitten3)
</P>";
 }
?>
        </div>
    </body>
</html>