<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/vendor/reset.min.css">
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Task Manager</title>
</head>
<body>
<header>
  <nav class="navigation auto-90">
    <ul class="navigation--side left">
      <li>Mes murs</li>
    </ul>
    <ul class="navigation--side right">
      <li class="js-account">Mon compte</li>
    </ul>
  </nav>
  <form class="connection-form active" action="/" method="post">
    <div class="connection-form--title">Se connecter</div>
    <div class="connection-form--item">
      <label for="username">Utilisateur :</label>
      <input type="text" name="username" id="username">
    </div>
    <div class="connection-form--item">
      <label for="password">Mot de passe :</label>
      <input type="password" name="password" id="password">
    </div>
    <div class="connection-form--separator"></div>
    <div class="connection-form--item">
      <label for="create">Créer un compte</label>
      <input type="checkbox" name="create" id="create">
    </div>
    <div class="connection-form--item">
      <button type="submit">Se connecter</button>
    </div>
    <div class="connection-form--quit">x</div>
  </form>
</header>