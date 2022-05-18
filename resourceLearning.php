<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="UTF-8">
        <title>Enjiny</title>
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.css" />
        <link rel="stylesheet" type="text/css" href="css/profile.css" />
        <script type="text/javascript" src="js/funcions.js"> </script>
        <script type="text/javascript" src="Lib/jquery.js"> </script>
    </head>

    <header>
        <?php require __DIR__.'/View/header.php'; ?>
    </header>

    <body>
        <?php require __DIR__.'/Controller/learning.php'; ?>
    </body>

    <footer>
        <?php require __DIR__.'/View/footer.php'; ?>
    </footer>
</html>