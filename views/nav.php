<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2a4ada2490.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="../index.php">Logo</a>

        <form class="form-inline" action="buscador.php" method="POST">
            <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

<div class="row mx-auto mt-4" id="buscador">
    <?php
        include '../db/read.php';
        
        while($row = mysqli_fetch_array($sql_query)){?>
        <div class="col-12 col-md-3">
            <a href="#" data-toggle="modal" data-target="<?= $row['data-target']?>" class="card-link">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><?= $row['nombre']?></h4>
                    </div>
                    <div class="card-body">
                        <img src="<?= $row['img']?>" class="card-img-top" alt="img"></img>
                        <hr>
                        <p>$<?= $row['precio']?></p>
                        <p>Ver mas...</p>
                    </div>
                </div>
            </a>
        </div>

    <?php } ?>
    </div>

    <?php include '../modals/samsung.php'; ?>

    <?php include '../modals/huawei.php'; ?>

    <?php include '../modals/xiaomi.php'; ?>

    <?php include '../modals/iphone.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>