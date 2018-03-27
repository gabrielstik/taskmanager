<?
session_start();
setlocale(LC_ALL, 'fr_FR');
require './config.php';
include './components/Db.php';

include './components/Session.php';

include './components/partials/header.php';
include './components/views/home.php';
include './components/partials/footer.php';