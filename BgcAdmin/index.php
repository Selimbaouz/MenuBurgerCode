<?php
    require '../data/database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">

        <title>Burger Code</title>
    </head>
    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>

        <div class="container">
                <hr class="mt-5 border--trans">
                <h3 class="mt-4 ml-3" style="color:white;">Administration Connexion </h3>
                <hr class="mb-5"> 

                <div class="row w-100 mx-auto">
                    <form class="form mt-5 mx-auto" role="form" action="home.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mx-auto">
                            <label for="milesName" style="color:white;">Nom:</label>
                            <input type="text" class="form-control" id="milesName" name="milesName">
                            </input>
                            <br>
                            <label for="milesPass" style="color:white;">Mot de passe:</label>
                            <input type="password" class="form-control" id="milesPass" name="milesPass">
                            </input>
                            <br>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    </body>
</html>