<?php
require("connexionProvider.php");
require("controller/indexController.php");
$arr = IndexController::index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Stock</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row text-center">
            <h1>Les articles</h1>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                        </tr>
                    <tbody>

                        <?php foreach ($arr as $key => $value) : ?>
                            <tr>
                                <td><?= $value['id'] ?> </td>
                                <td><?= $value['titre'] ?> </td>
                                <td><?= $value['description'] ?> </td>
                                <td><?= $value['prix'] ?> </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>