<?php

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container text-center py-4">
            <h1>I nostri prodotti</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-between">
                <?php foreach($foods as $food) {
                        $food->printHtml();
                    }
                    ?>  
              
                    <?php foreach($toys as $toy) {
                        $toy->printHtml();
                    }
                    ?>
             
                    <?php foreach($beds as $bed) {
                        $bed->printHtml();
                    }
                    ?>
                
            </div>
        </div>
    </main>

    
</body>
</html>
