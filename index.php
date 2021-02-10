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
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>

        <title>Burger Code</title>
    </head>
    <body>
        <div class="container site">
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
            <?php
            require 'data/database.php';
            echo '<nav>
                    <ul class="nav nav-pills">';
            $db = Database::connect();
            $statement = $db->query('SELECT * FROM categories');
            $categories = $statement->fetchAll();
            foreach ($categories as $category)
            {
                if($category['id'] == '1')
                {
                    echo '<li role="presentation" class="active"><a href="#' . $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                }
                else
                {
                    echo '<li role="presentation"><a href="#' . $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                }
            }
            echo    '</ul>';
                '</nav>';

            echo '<div class="tab-content">';

            foreach ($categories as $category) {
                if($category['id'] == '1')
                {
                    echo '<div class="tab-pane active" id="' . $category['id'] . '">';
                }
                else
                {
                    echo '<div class="tab-pane" id="' . $category['id'] . '">';
                }
                echo '<div class="row">';

                $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                $statement->execute(array($category['id']));

                while ($item = $statement->fetch())
                {
                    echo '<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                    <img src="images/' . $item['image'] . '" alt="menu classic">
                                    <div class="price">' . number_format($item['price'], 2, '.', '') . ' €</div>
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        <p>' . $item['description'] . '</p>
                                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</Comm></a>
                                    </div>
                            </div>
                          </div>';

                }
                echo '</div>
                    </div>';
            }
            Database::disconnect();

            echo '</div>';

            ?>

            
        </div>

    </body>
</html>