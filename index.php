<html>
    <head>
        <title>php fonctions</title>
    </head>
    <body>
    <?php
    function infos($name, $lastname, $age){
        return 'Bonjour '.' '. $name .' '. $lastname . ' '. ' , tu as ' . $age . ' ans.';
    }
    echo infos('Max', 'simoes', '30');
    ?>
    </body>
</html>
