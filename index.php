<?php
/**
 * Bootstrapping
 */
include "vendor/autoload.php";

use comsta\model\Blogentry;
use comsta\Repo\TestBlockRepo;
use comsta\controller\controller;

// $connection = new PDO(data source name, username, password, options);
$repo = TestBlockRepo::setConnection("connectionstring");

//$test = new Blogentry(1);
//print_r ($test);

// unsere Klassen einbinden  
// include('classes/controller.php');  
include('classes/model.php');  
include('classes/view.php');  
  
// $_GET und $_POST zusammenfasen  
$request = array_merge($_GET, $_POST);  
// Controller erstellen  
$controller = new Controller($request);  
// Inhalt der Webanwendung ausgeben.  
echo $controller->display();  

echo "<h1> Hallo Welt </h1>";
echo $_POST["id"];


?>

<h2><?php echo $test->$id ?></h2>

<form method="GET" action="index.php" >
<input name="id">


