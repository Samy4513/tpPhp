<html>
<title>HTML Tutorial</title>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>

</body>
</html>

<?php
    function start_page($title)
    {
        echo'<!DOCTYPE html> 
             <html lang="fr">
             <head>
             <title>'.PHP_EOL.$title.'</title>
             </head>
             <body>'.PHP_EOL;
    };

    start_page('titre');

;?>
