<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kategórie</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" id="logo" href="#">E-shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="categories.php">Kategórie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Prihlásiť sa</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-search" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container text-center">
    <div class="row">
        <div class="col cat-box">
            <div class="cat-text">Počítače a notebooky</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Mobily</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Hodinky</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Veľké spotrebiče</div>
        </div>
    </div>
    <div class="row">
        <div class="col cat-box">
            <div class="cat-text">Malé spotrebiče</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Dom a záhrada</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Gaming</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Drogéria</div>
        </div>
    </div>
    <div class="row">
        <div class="col cat-box">
            <div class="cat-text">Hračky</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Auto</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Knihy</div>
        </div>
        <div class="col cat-box">
            <div class="cat-text">Zdravie</div>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>