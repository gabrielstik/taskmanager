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
      <li>Tasques</li>
    </ul>
    <ul class="navigation--side right">
      <? if (!isset($_SESSION['username'])) { ?>
      <li class="js-account">Mon compte</li>
      <? } else { ?>
      <li>
        <form class="disconnect" action="/" method="post">
          <input type="hidden" name="is-disconnecting" value="1">
          <button type="submit">Me deconnecter</button>
        </form>
      </li>
      <? } ?>
    </ul>
  </nav>
      <form class="connection-form <? if (!isset($_SESSION['username'])) { ?>active<? } ?>" action="/" method="post">
    <div class="connection-form--title">Se connecter</div>
    <div class="connection-form--item">
      <label for="username">Utilisateur :</label>
      <input type="text" name="connection-username" id="username">
    </div>
    <? if (isset($_GET['error']) && $_GET['error'] == 'notuser') { ?>
      <div class="connection-form--error">Ce compte n'existe pas !</div>
    <? } ?>
    <div class="connection-form--item">
      <label for="password">Mot de passe :</label>
      <input type="password" name="connection-password" id="password">
    </div>
    <? if (isset($_GET['error']) && $_GET['error'] == 'password') { ?>
      <div class="connection-form--error">Le mot de passe est incorrect !</div>
    <? } ?>
    <div class="connection-form--separator"></div>
    <div class="connection-form--item">
      <label for="create">Créer un compte</label>
      <input type="checkbox" name="connection-create" id="create">
    </div>
    <div class="connection-form--item">
      <button type="submit">Se connecter</button>
    </div>
    <div class="connection-form--quit">x</div>
  </form>
</header>