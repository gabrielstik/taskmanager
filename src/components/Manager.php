<?

class Manager {
  function __construct() {
    if (isset($_POST['new-task-name'])) {
      $Db = new Db();
      $Db->add_task('gabe', $_POST['new-task-name'], 0);
    }
    if (isset($_POST['delete-task-id'])) {
      $Db = new Db();
      $Db->delete_task($_POST['delete-task-id']);
    }
  }
}