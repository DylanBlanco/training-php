<?php
    $columnsNumber = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container mb-3">
            <div class="row">
                <h1>
                    Recupero dati
                </h1>
            </div>
        </div>
    </header>

    <main>
        <div class="container mb-3">
            <div class="row">
                <div class="col">
                    <a href="./index.php" class="btn btn-primary">Torna alla Home</a>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row gap-3">
                <?php
                    for ($i = 0; $i < $columnsNumber; $i++) {
                ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="mb-3">
                            Il nome è: <br>
                            <?php echo $_GET['first_name']; ?>
                        </p>
                        <p class="mb-3">
                            Il cognome è: <br>
                            <?php echo $_GET['last_name']; ?>
                        </p>
                        <p class="mb-3">
                            Email:
                            <b>
                                <?php echo $_GET['email'] ?>
                            </b>
                        </p>
                        <p class="mb-3">
                            Commento: <br>
                            <?php echo $_GET['comment'] ?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>

    <!-- <div class="container bg-success bg-gradient">
        <div class="row">
            <?php
                for ($i = 0; $i < $columnsNumber; $i++) {
            ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    Colonna <?php echo $i + 1; ?>
                </div>
            <?php
                }
            ?>
        </div>
    </div> -->
</body>
</html>