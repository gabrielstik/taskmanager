<?

class Manager {
  function __construct() {
    if (isset($_POST['new-task-name'])) {
      $Db = new Db();
      $Db->add_task('gabe', $_POST['new-task-name'], false);
    }
    if (isset($_POST['delete-task-id'])) {
      $Db = new Db();
      $Db->delete_task($_POST['delete-task-id']);
    }
    if (isset($_POST['check-task-id']) && isset($_POST['check-is-done'])) {
      $Db = new Db();
      $Db->check_task($_POST['check-task-id'], $_POST['check-is-done']);
    }
  }
}