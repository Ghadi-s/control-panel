<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
    
<title>Control Panel</title>
 <link rel="stylesheet" href="St.css">

 <h1>ROBOT CONTROL PANEL </h1>

<body>
    <div class="controller"> 
      <br><br> 
      <div classe"buttonstextcenter"rolew"group"> 
        <form action="" method="post"> 
            <br><br><br><br>
            <tr>
            <td>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<button type="submit" name="F" class="button">FORWARD</button></td>
            <br><br>
            <td>
            <tr>
            <button type="submit" name="L" class="button">LEFT</button>
           &nbsp; &nbsp;<button type="submit"  name="S"class="button buttun2">STOP</button>
           &nbsp; &nbsp;<button type="submit" name="R" class="button">RIGHT</button>
         </tr>
            <br><br>
                
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<button type="submit" name="B" class="button">Backward</button></td>
            <br><br>
        </from> 
       </div>
    </div> 

<?php 

$conn = mysqli_connect('localhost', 'root', '', 'Control_panel');


if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}if (isset($_POST['B'])){
	echo "<p align=center>backward</p> ";
	mysqli_query($conn,"INSERT INTO`control panels` SET `Backward` = 'B'");
}

if (isset($_POST['F'])){
	echo "<p align=center>forward</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Farward` = 'F'");
}

if (isset($_POST['R'])){
	echo "<p align=center>right</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Right` = 'R'");
}

if (isset($_POST['L'])){
	echo "<p align=center>left</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Left` = 'L'");
}
if (isset($_POST['S'])){
	echo "<p align=center>stop</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Stop` = 'S'");
}



?>
 </body> 
</html>