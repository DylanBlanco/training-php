<?php
    $columnsNumber = 4;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Training PHP</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Training PHP
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <h2>
                                Invia dati
                            </h2>

                            <!-- FORM -->
                            <!-- Il metodo GET passa le informazioni alla query stream in forma non anonima -->
                            <!-- Il metodo POST passa le informazioni alla query stream in forma anonima -->
                            <form class="p-2" method="$_GET" action="./about.php">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Inserisci il tuo nome">
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Inserisci il tuo cognome">
                                </div>
                                <div class="mb-3">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" placeholder="Scrivi un commento" id="comment" style="max-height: 100px" name="comment"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="email" placeholder="Inserisci la tua email" name="email">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container bg-success bg-gradient">
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
            </div>
        </main>
    </body>
</html>