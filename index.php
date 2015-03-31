<!DOCTYPE html>
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
        
        <script>
            $(function() {
                $('#contact').on('click', function() {
                    if ($(this).hasClass('selected')) {
                        deselect($(this));
                    } else {
                        $(this).addClass('selected');
                        $('.pop').slideFadeToggle();
                    }
                    return false;
                });

                $('.close').on('click', function() {
                    deselect($('#contact'));
                    return false;
                });
            });
        </script>
    </body>
</html>
