<?
session_start();
setlocale(LC_ALL, 'fr_FR');
require './config.php';
include './components/Db.php';
include './components/Session.php';
include './components/PostListener.php';

$Db = new Db();
$PostListener= new PostListener();

include './components/partials/header.php';

if (isset($_SESSION['username'])) {
  $walls = $Db->get_walls($_SESSION['username']);
  include './components/views/walls.php';
}

include './components/partials/footer.php';