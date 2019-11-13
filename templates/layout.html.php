<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mon superbe blog - <?= $pageTitle ?></title>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
      <a class="navbar-brand" href="#"><?= $pageTitle ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="/">tout les articles</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
<div class="container">
        <?= $pageContent ?>
</div>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

</body>

</html>
