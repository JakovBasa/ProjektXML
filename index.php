<?php

# load json file
$movies = json_decode(file_get_contents('movies.json'), true);

?>

<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
    <title>Projekt - Filmovi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="index.php">Projekt - Jakov Basa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posters.html">Posteri svih filmova</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    <h1>Popis MCU filmova</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Naslov</th>
                            <th>Godina izdanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($movies as $movie) { ?>
                        <tr>
                            <td>
                                <?php echo $movie['title']; ?>
                            </td>
                            <td>
                                <?php echo $movie['release_year']; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>