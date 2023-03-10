<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>
        <?php
        // functie: programma overzicht brouwers
        // auteur : Berkay
       
        include 'functions.php';
// connect database brouwer
        OpenDb();
// print brouwers enz
        OvzBrouwers();
        ?>
    </body>
</html>