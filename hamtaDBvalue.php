<?php

define("DB_SERVER", "berzanappen.se");
define("DB_USER", "berzanap_martin");
define("DB_PASSWORD", "snöbjörn");
define("DB_NAME", "berzanap_martin");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

//main
getRandNr($dbh);
    
function getRandNr($dbh) {
    
    $sql = "SELECT * FROM skrapNr";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();                                                                              
    
    $tmp = array();

    $i = 0;

//    var_dump($results);

    while ($i < 9) {
        $slump = rand(0, 8);
        $tmp[] = $results[$slump]["value"];
        $i++;
    }

//    var_dump($tmp);

    for ($n = 0; $n < 9; $n++) {
        echo $tmp[$n];
        echo "\n";
    }
}
