<?
class Session {
  function verify($user, $password) {
    $Db = new Db();
    $actual_pw = $Db->get_hashed_password($user);
    if (!empty($actual_pw)) {
      if (password_verify($password, $actual_pw)) {
        $_SESSION['username'] = $user;
        header('Location: /');
      }
      else {
        header('Location: /?error=password');
      }
    }
    else {
      header('Location: /?error=notuser');
    }
  }
  function create_account($user, $password) {
    $Db = new Db();
    $Db->create_account($user, $password);
  }
}