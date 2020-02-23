<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Step2</title>
 </head>
 <body>
 	<form method="post" action="session3.php">

<?php
if(isset($_POST["submit"]))
{


$_SESSION["Name"] = $_POST["name"];
$_SESSION["Email"] = $_POST["email"];

echo "Session variables are set.<br>";


}


?>



 		ID:<input type="text" name="id"><br>
 		<input type="submit" name="submit">


</form>

 
 </body>
 </html>
