<?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>file work</title>
</head>
<body>

<?php
class User{
private $name;
private $email;


function set_name($name)
{

$this->name=$name;

}

function  get_name()
{

return $this->name;

}
function set_email($email)
{

$this->email=$email;

}

function get_email()
{

return $this->email;

}



}

?>


<?php

$user1=new user();

$user1->set_name($_SESSION["Name"]);

$user1->set_email($_SESSION["Email"]);

$details="".$user1->get_name()."   ".$user1->get_email()."\n";


$myfile = fopen("webdictionary.txt", "w") or die("Unable to open file!");
fwrite($myfile,$details);
fclose($myfile);

print_r($_SESSION);

echo "<br>";

echo "Saved";


?>


</body>
</html>