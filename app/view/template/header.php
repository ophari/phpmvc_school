<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css"></link>

</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>/about">About</a>
      </li>
      <li>
      <a class="nav-link" href="<?= BASE_URL ?>/siswa">siswa</a>
      </li>
    </ul>
  </div>
</nav>
</body>