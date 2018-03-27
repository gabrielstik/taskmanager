<?
class Session {
  function verify($user, $password) {
    $db = new Db();
    $actual_pw = $db->getHashedPassword($user);
    if (!empty($actual_pw)) {
      if (password_verify($password, $actual_pw)) {
        $_SESSION['username'] = $user;
        header('Location: /favoris');
      }
      else {
        header('Location: /'.$_GET['q'].'?error=password');
      }
    }
    else {
      header('Location: /'.$_GET['q'].'?error=notuser');
    }
  }
  function createAccount($user, $password) {
    $db = new Db();
    $db->createAccount($user, $password);
  }
}