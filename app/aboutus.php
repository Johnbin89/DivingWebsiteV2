<?php 
require_once '../app/twig.php';

session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        //header("location: welcome.php");
        echo $twig->render('aboutus.html', ['name' => $_SESSION["username"], 'home' => "nav-item", 
        'services' => "nav-item", 
        'contactus' => "nav-item", 
        'aboutus' => "nav-item active",
        'login' => "nav-item"] ); 
        exit;
}

echo $twig->render('aboutus.html', ['home' => "nav-item", 
'services' => "nav-item", 
'contactus' => "nav-item", 
'aboutus' => "nav-item active",
'login' => "nav-item"]); 
?>