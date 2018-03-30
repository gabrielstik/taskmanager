<?

class Manager {
  function __construct() {
    if (isset($_POST['new-task-name'])) {
      $Db = new Db();
      $Db->add_task('gabe', $_POST['new-task-name'], 0);
    }
  }
}