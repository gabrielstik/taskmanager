<?

class PostListener {
  function __construct() {
    if (isset($_POST['new-task-name'])) {
      $Db = new Db();
      $Db->add_task($_POST['new-task-related-wall'], $_POST['new-task-name'], false);
    }
    if (isset($_POST['delete-task-id'])) {
      $Db = new Db();
      $Db->delete_task($_POST['delete-task-id']);
    }
    if (isset($_POST['check-task-id']) && isset($_POST['check-is-done'])) {
      $Db = new Db();
      $Db->check_task($_POST['check-task-id'], $_POST['check-is-done']);
    }
    if (isset($_POST['new-wall-name'])) {
      $Db = new Db();
      $Db->add_wall($_POST['new-wall-name'], 'gabe');
    }
    if (isset($_POST['delete-wall-id'])) {
      $Db = new Db();
      $Db->delete_wall($_POST['delete-wall-id']);
    }
    if (isset($_POST['connection-username'])) {
      $Session = new Session();
      $Session->verify($_POST['connection-username'], $_POST['connection-password']);
    }
    if (isset($_POST['is-disconnecting'])) {
      session_destroy();
      header('Location: /');
    }
  }
}