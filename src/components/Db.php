<?
class Db {
	function __construct() {    
		try {
			$this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
      $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		}
		catch (Exception $e) {
			die('La base de donnée n\'est pas connectée. Veuillez contacter l\'administrateur.');
		}
  }
  function get_hashed_password($user) {
    $query = $this->pdo->query("SELECT * FROM users WHERE username = '$user'");
    $user = $query->fetch();
    return !empty($user->password) ? $user->password : false;
  }
  function create_account($user, $password) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $exec = $this->pdo->prepare("INSERT INTO users (username, password) VALUES ('$user', '$password')");
    $exec->execute();
  }
  function get_walls($user) {
    $query = $this->pdo->query("SELECT * FROM walls WHERE related_user = '$user'");
    $walls = $query->fetchAll();
    return $walls;
  }
  function get_tasks($wall) {
    $query = $this->pdo->query("SELECT * FROM tasks WHERE related_wall = '$wall'");
    $tasks = $query->fetchAll();
    return $tasks;
  }
  function add_task($related_wall, $task_name, $is_done) {
    $exec = $this->pdo->prepare("INSERT INTO tasks (related_wall, title, is_done) VALUES ('$related_wall', '$task_name', '$is_done')");
    $exec->execute();
  }
  function delete_task($task_id) {
    $exec = $this->pdo->exec("DELETE FROM tasks WHERE id = $task_id");
  }
  function check_task($task_id, $is_done) {
    if (!$is_done) {
      $exec = $this->pdo->exec("UPDATE tasks SET is_done = true WHERE id = $task_id");
    }
    else {
      $exec = $this->pdo->exec("UPDATE tasks SET is_done = false WHERE id = $task_id");
    }
  }
  function add_wall($wall_name, $related_user) {
    $exec = $this->pdo->prepare("INSERT INTO walls (wall,  related_user) VALUES ('$wall_name', '$related_user')");
    $exec->execute();
  }
  function delete_wall($wall_id) {
    $exec = $this->pdo->exec("DELETE FROM walls WHERE id = $wall_id");
  }
}