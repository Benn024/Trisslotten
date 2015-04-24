<?php

define("DB_SERVER", "berzan.hemsida.eu");
define("DB_USER", "berzanhe_martin");
define("DB_PASSWORD", "snöbjörn");
define("DB_NAME", "berzanhe_martin");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$sql = "SELECT * FROM skrapNr";

$stmt = $dbh->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$tmp = array();

$i = 0;

var_dump($results);



while($i < 9){
    $slump = rand(0, 8);
    $tmp[] = $results[$slump]["value"];
    $i++;
}


var_dump($tmp);

for($n = 0; $n < 9; $n++){    
    echo $tmp[$n];
    echo "\n";
}


