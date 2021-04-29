<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/styles.css">
  <title>sonic</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-">
        <a class="navbar-brand" href="<?= $router->generate('main-personnages') ?>">
          <img src="<?= $_SERVER['BASE_URI'] ?>/images/h2.png" alt="" width="140" height="55" class="d-inline-block align-text-top">
          
        </a>
        <a class="navbar-brand" href="<?= $router->generate('main-createur') ?>">

          createur
        </a>

      </div>
    </nav>
  </header>