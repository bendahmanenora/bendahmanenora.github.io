<?php 
define('HOST', 'localhost');

define('DB_NAME', 'p22_nora');

define('utilisateur', 'nora');

define('pass', 'ecsiz1twechcupo');

try {

    $db = new PDO("mysql:host=" .HOST . ";dbname=" . DB_NAME, utilisateur, pass);

   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
} catch (PDOException $e) {



}
?>