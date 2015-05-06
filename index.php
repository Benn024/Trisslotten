<!DOCTYPE html>

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
</script>

<!--sortera, loop, skrap[i] == skrap[i+1] && skrap[i] == skrap[i+2]-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trisslotten!</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="trisslott.css">

        <?-- font --?>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
        
        <?-- jquery --?>
        <script src="jquery-1.11.2.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="trisslogo">
                <img src="bilder/triss.jpg">
            </div>
            <div class="grupper">
                <div class="gruppcell nr1">
                    <h2>Bank</h2>
                </div>
                <div class="gruppcell nr2">
                    <div class="bild_header">
                        <img src="http://placehold.it/220x80">

                    </div>
                    <div class="skrapruta">

                    </div>
                    <div class="extrachans cirkelBas">

                    </div>
                    <div class="kontrollruta">

                    </div>
                    <div class="instruktioner">
                        <h4>Instruktioner</h4>
                        <p>Klicka för att lära om reglerna</p>
                    </div>
                </div>
                <div class="gruppcell nr3">
                    <h2>Statistik</h2>
                </div>
            </div>
        </div>
    </body>
</html>
