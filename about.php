<?php
    $columnsNumber = 4;
    $title = 'Recupero Dati';
    $persons = [
        [
            "nome" => "Luca",
            "eta" => 28,
            "data_nascita" => "1996-04-15",
            "paese_nascita" => "Italia",
            "citta_residenza" => "Milano"
        ],
        [
            "nome" => "Sofia",
            "eta" => 32,
            "data_nascita" => "1992-09-21",
            "paese_nascita" => "Spagna",
            "citta_residenza" => "Barcellona"
        ],
        [
            "nome" => "Marco",
            "eta" => 25,
            "data_nascita" => "1999-01-10",
            "paese_nascita" => "Italia",
            "citta_residenza" => "Roma"
        ],
        [
            "nome" => "Elena",
            "eta" => 30,
            "data_nascita" => "1994-06-05",
            "paese_nascita" => "Francia",
            "citta_residenza" => "Parigi"
        ],
        [
            "nome" => "David",
            "eta" => 27,
            "data_nascita" => "1997-03-12",
            "paese_nascita" => "Germania",
            "citta_residenza" => "Berlino"
        ]
    ];
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
                    <?php
                        // var_dump($title);
                        strlen($title);
                        echo $title;
                        // echo strlen($title);
                    ?>
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

        <div class="container bg-success bg-gradient pt-3">
            <div class="row">
                <?php
                    foreach ($persons as $person) {
                ?>
                <div class="col-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3>
                                Nome: <?php echo $person['nome']; ?>
                            </h3>
                            <p>
                                Età: <?php echo $person['eta']; ?>
                            </p>
                            <p>
                                Data di Nascita: <?php echo $person['data_nascita']; ?>
                            </p>
                            <p>
                                Paese di Nascita: <?php echo $person['paese_nascita']; ?>
                            </p>
                            <p>
                                Città di residenza: <?php echo $person['citta_residenza']; ?>
                            </p>
                        </div> 
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>